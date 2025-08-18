<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $query = Order::with(['client', 'vendor']);

        if (! $this->isAdminLike($user)) {
            $query->where('vendor_number', $user->vendor_number);
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    private function isAdminLike($user): bool
    {
        $role = strtolower($user?->role?->name ?? '');
        return in_array($role, ['admin', 'developer', 'gerente', 'facturacion'], true);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Suma de cantidades
            $totalQuantity = collect($request->products)->sum(function ($producto) {
                return (float) ($producto['quantity'] ?? 0);
            });

            // Calcular total_amount en el backend (más seguro)
            $orderTotal = 0.0;

            $order = Order::create([
                'folio'         => $request->folio,
                'order'         => $request->order,
                'price_list'    => $request->price_list,
                'client_number' => $request->client['client_number'],
                'vendor_number' => $request->client['vendor_number'],
                'total_amount'  => 0, // lo fijamos abajo con el real
                'quantity'      => $totalQuantity,
                'observations'  => $request->observations,
                'status'        => $request->status,
            ]);

            foreach ($request->products as $producto) {
                $unitPrice = (float) str_replace(',', '', $producto['unit_price']);
                $quantity  = (float) ($producto['quantity'] ?? 0);   // 👈 ahora quantity
                $discount  = (float) ($producto['discount'] ?? 0);   // %
                // $total del request no se usa; lo calculamos nosotros

                $montoSinDescuento = $unitPrice * $quantity;
                $discountAmount    = $montoSinDescuento * ($discount / 100);
                $subtotal          = $montoSinDescuento - $discountAmount;
                $iva               = $subtotal * 0.16;
                $totalCalculado    = $subtotal + $iva;

                OrderProduct::create([
                    'order_id'        => $order->id,
                    'product_id'      => $producto['product_id'],
                    'quantity'        => $quantity,
                    'unit_price'      => $unitPrice,
                    'discount'        => $discount,
                    'discount_amount' => round($discountAmount, 2),
                    'subtotal'        => round($subtotal, 2),
                    'iva'             => round($iva, 2),
                    'total'           => round($totalCalculado, 2),
                    'is_active'       => true,
                ]);

                $orderTotal += $totalCalculado;
            }

            $order->update(['total_amount' => round($orderTotal, 2)]);

            DB::commit();
            return response()->json([
                'message' => 'Orden creada correctamente.',
                'order'   => $order
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error'   => 'Error al guardar la orden',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        $order = Order::with([
            'client.vendor',
            'client.location',
            'products.product.productDetails'
        ])->findOrFail($id);

        $products = $order->products->map(function ($op) {
            $detail = optional($op->product->productDetails->first());

            return [
                'product_id'     => $op->product_id,
                'name'           => $op->product->name ?? null,

                // Datos del detail (si existe)
                'sku'            => $detail?->sku,
                'description'    => $detail?->description,
                'unit_measure'   => $detail?->unit_measure,

                // Regla nueva: 1:1 (sin multiplier)
                'unit_price'     => (float) $op->unit_price,
                'quantity'       => (float) $op->quantity,       // 👈 clave que espera tu UI
                'discount_pct'   => (float) $op->discount,       // 👈 tu UI usa discount_pct
                'max_discount'   => (int)   ($op->product->max_discount ?? 5),
                'tax_rate'       => 0.16,

                // (Compatibilidad opcional: por si algo del front todavía lee estas)
                'discount'       => (float) $op->discount,       // alias
                'unit_multiplier'=> (float) $op->quantity,       // alias (ya no se usa en cálculos)
                // 'total'        => (float) $op->total,          // si lo quieres seguir mostrando, pero la UI recalcula
            ];
        })->values();

        return response()->json([
            'id'           => $order->id,
            'folio'        => $order->folio,
            'order'        => $order->order,
            'status'       => $order->status,
            'client'       => $order->client,
            'products'     => $products,
            'observations' => $order->observations,
            'total_amount' => (float) $order->total_amount,
            'price_list'   => $order->price_list,
        ]);
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $order = Order::findOrFail($id);

            $products = $request->input('products', []);

            // 1) Totales de la orden
            $totalQuantity = collect($products)->sum(function ($p) {
                return (float) ($p['quantity'] ?? 0);
            });

            $folio = $order->folio;
            if ($request->input('status') === 'procesado' && $folio === 'PT-00-0000') {
                $folio = $this->generateFolio();
            }

            $orderTotal = 0.0;

            // 2) Actualizar cabecera (total_amount se fija al final)
            $order->update([
                'folio'         => $folio,
                'order'         => $request->input('order'),
                'price_list'    => $request->input('price_list'),
                'client_number' => data_get($request, 'client.client_number'),
                'vendor_number' => data_get($request, 'client.vendor_number'),
                'total_amount'  => 0, // se recalcula abajo
                'quantity'      => $totalQuantity,
                'observations'  => $request->input('observations'),
                'status'        => $request->input('status'),
            ]);

            // 3) Limpiar productos previos
            $order->products()->delete();

            // 4) Re-crear productos recalculando importes
            foreach ($products as $p) {
                $unitPrice = (float) str_replace(',', '', $p['unit_price'] ?? 0);
                $quantity  = (float) ($p['quantity'] ?? 0);     // 👈 ahora quantity
                $discount  = (float) ($p['discount'] ?? 0);     // % (no monto)

                $montoSinDescuento = $unitPrice * $quantity;                 // base
                $discountAmount    = $montoSinDescuento * ($discount / 100); // monto desc
                $subtotal          = $montoSinDescuento - $discountAmount;   // antes IVA
                $iva               = $subtotal * 0.16;
                $totalCalculado    = $subtotal + $iva;

                OrderProduct::create([
                    'order_id'        => $order->id,
                    'product_id'      => $p['product_id'],
                    'quantity'        => $quantity,
                    'unit_price'      => $unitPrice,
                    'discount'        => $discount,
                    'discount_amount' => round($discountAmount, 2),
                    'subtotal'        => round($subtotal, 2),
                    'iva'             => round($iva, 2),
                    'total'           => round($totalCalculado, 2),
                    'is_active'       => true,
                ]);

                $orderTotal += $totalCalculado;
            }

            // 5) Actualizar total real de la orden
            $order->update([
                'total_amount' => round($orderTotal, 2),
            ]);

            DB::commit();

            return response()->json([
                'message'  => 'Orden actualizada correctamente.',
                'order' => $order,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'error'   => 'Error al actualizar la orden',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    private function generateFolio(): string
    {
        do {
            $folio = 'P-' .
                sprintf('%02d', random_int(0, 99)) .
                '-' .
                sprintf('%04d', random_int(0, 9999));
        } while (Order::where('folio', $folio)->exists());

        return $folio;
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted']);
    }
}
