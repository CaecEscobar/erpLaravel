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

        return $query->get();
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
        $totalQuantity = collect($request->products)->sum(function ($producto) {
            return (float) $producto['unit_multiplier'];
        });

        $order = Order::create([
            'folio' => $request->folio,
            'order' => $request->order,
            'price_list' => $request->price_list,
            'client_number' => $request->client['client_number'],
            'vendor_number' => $request->client['vendor_number'],
            'total_amount' => $request->total_amount,
            'quantity' => $totalQuantity,
            'observations' => $request->observations,
            'status' => $request->status,
        ]);
        
        foreach ($request->products as $producto) {
            $unitPrice = (float) str_replace(',', '', $producto['unit_price']);
            $quantity = (float) $producto['unit_multiplier'];
            $discount = (float) $producto['discount'];
            $total = (float) $producto['total'];

            $montoSinDescuento = $unitPrice * $quantity;
            $discountAmount = $montoSinDescuento * ($discount / 100);
            $subtotal = $montoSinDescuento - $discountAmount;
            $iva = $subtotal * 0.16;
            $totalCalculado = $subtotal + $iva;

            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $producto['product_id'],
                'quantity' => $quantity,
                'unit_price' => $unitPrice,
                'discount' => $discount,
                'discount_amount' => $discountAmount,
                'subtotal' => $subtotal,
                'iva' => $iva,
                'total' => $totalCalculado,
                'is_active' => true,
            ]);
        }

        DB::commit();

        return response()->json([
            'message' => 'Orden creada correctamente.',
            'order_id' => $order->id
        ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'error' => 'Error al guardar la orden',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        logger($id);
        $order = Order::with([
            'client.vendor',
            'client.location',
            'products.product.productDetails'
        ])->findOrFail($id);

        $products = $order->products->map(function ($op) {
            return [
                'product_id' => $op->product_id,
                'name' => $op->product->name ?? null,
                'unit_multiplier' => $op->quantity,
                'unit_measure' => $op->product->unit_measure ?? null,
                'discount' => $op->discount,
                'max_discount' => $op->product->max_discount ?? 5,
                'unit_price' => $op->unit_price,
                'total' => $op->total,
            ];
        });

        return response()->json([
            'id' => $order->id,
            'folio' => $order->folio,
            'order' => $order->order,
            'status' => $order->status,
            'client' => $order->client,
            'products' => $products,
            'observations' => $order->observations,
            'total_amount' => $order->total_amount,
            'price_list' => $order->price_list
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $order = Order::findOrFail($id);

            // 1. Actualizar la orden
            $totalQuantity = collect($request->products)->sum(function ($prod) {
                return (float) $prod['unit_multiplier'];
            });

            $order->update([
                'folio' => $request->folio,
                'order' => $request->order,
                'price_list' => $request->price_list,
                'client_number' => $request->client['client_number'],
                'vendor_number' => $request->client['vendor_number'],
                'total_amount' => $request->total_amount,
                'quantity' => $totalQuantity,
                'observations' => $request->observations,
                'status' => $request->status,
            ]);

            // 2. Eliminar los productos anteriores
            $order->products()->delete();

            // 3. Agregar los nuevos productos
            foreach ($request->products as $producto) {
                $unitPrice = (float) str_replace(',', '', $producto['unit_price']);
                $quantity = (float) $producto['unit_multiplier'];
                $discount = (float) $producto['discount'];
                $total = (float) $producto['total'];

                $montoSinDescuento = $unitPrice * $quantity;
                $discountAmount = $montoSinDescuento * ($discount / 100);
                $subtotal = $montoSinDescuento - $discountAmount;
                $iva = $subtotal * 0.16;
                $totalCalculado = $subtotal + $iva;

                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $producto['product_id'],
                    'quantity' => $quantity,
                    'unit_price' => $unitPrice,
                    'discount' => $discount,
                    'discount_amount' => $discountAmount,
                    'subtotal' => $subtotal,
                    'iva' => $iva,
                    'total' => $totalCalculado,
                    'is_active' => true,
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Orden actualizada correctamente.',
                'order_id' => $order->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error al actualizar la orden',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted']);
    }
}
