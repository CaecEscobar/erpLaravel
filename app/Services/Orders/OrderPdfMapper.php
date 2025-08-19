<?php

// app/Services/Orders/OrderPdfMapper.php
namespace App\Services\Orders;

use App\Models\Order;
use App\Models\CompanyInfo;
use NumberFormatter;

class OrderPdfMapper
{
    public function make(string $orderId): array
    {
        // OJO: agrega products.product para tener sku/name/um
        $order = Order::with(['client', 'vendor', 'products.product.details'])->findOrFail($orderId);

        // Partidas -> estructura que esperan las Blade
        $priceListId = $order->price_list;

        $partidas = [];
        foreach ($order->products as $it) {
        logger($it);
        
            $detail = optional($it->product->details)
                ->firstWhere('price_list_id', $priceListId);

            $sku      = $detail->sku ?? '';              // si está en details
            $um       = $detail->unit_measure ?? '';     // si está en details
            $descTxt  = $detail->description ?? '';      // si está en details
            $name     = $it->product->name ?? '';
            $qty   = (float)$it->quantity;          // viene como "10.00" (string)
            $pu    = (float)$it->unit_price;        // "1448.10"
            $desc  = (float)$it->discount;          // "5.00" -> %
            $discA = (float)($it->discount_amount ?? 0.0);
            $sub   = (float)$it->subtotal;          // antes de IVA
            $iva   = (float)($it->iva ?? 0.0);
            $tot   = (float)$it->total;             // con IVA

            // Datos del producto (si está la relación)
            // $sku   = $it->product->sku   ?? '';
            // $name  = $it->product->name  ?? '';
            // $um    = $it->product->unit_measure ?? ''; // ajusta si tu columna se llama diferentex
            // $descTxt = $it->product->description ?? '';

            $partidas[] = [
                'partida_producto_cantidad'   => $qty,
                'partida_unidad_medida'       => $um,
                'partida_precio_unitario'     => $pu,
                'partida_descuento'           => $desc,        // % mostrado en la tabla
                // Para la columna "Monto" del renglón usa el subtotal (sin IVA)
                'partida_monto'               => $sub,
                'partidaProductoSku'          => $sku,
                'partidaProductoNombre'       => $name,
                'descripcion'                 => $descTxt,
                // opcionales usados en la vista:
                'partidaDescripcionAdicional' => null,
                'textoAdicionalSat'           => null,
                // si quisieras mostrar total con IVA por renglón:
                'partida_iva'                 => $iva,
                'partida_total'               => $tot,
                'partida_descuento_importe'   => $discA,
            ];
        }

        // Totales (consistentes con tus campos)
        $importeAntesDesc = collect($partidas)->sum(fn($p) => $p['partida_precio_unitario'] * $p['partida_producto_cantidad']);
        $descuento        = collect($partidas)->sum('partida_descuento_importe'); // viene de DB
        $subtotal         = collect($partidas)->sum('partida_monto');             // suma de subtotales de línea
        $ivaTotal         = collect($partidas)->sum('partida_iva');
        $total            = collect($partidas)->sum('partida_total');             // debería = $order->total_amount

        // $totalLetras = $total; // o el que calcules
        // $data['letraNumero'] = $this->montoEnLetras($totalLetras, 'MXN');
        $company = CompanyInfo::current();

        return [
            'folio'          => $order->folio ?: ('Q-'.str_pad($order->id, 4, '0', STR_PAD_LEFT)),
            'type'           => 'FOLIO', // tu status dice "procesado"; cámbialo si quieres otra etiqueta
            'anhio'          => (string) now()->year,
            'nombreProyecto' => '',
            'FechaSolicitud' => optional($order->created_at)->format('Y-m-d'),
            'fechaValido'    => optional($order->updated_at)->copy()->addDays(30)->format('Y-m-d'),
            'usuarioElaboro' => $order->vendor->name ?? '—',
            'nombreSolicita' => $order->client->name ?? '—',
            'monedaN'        => 'MXN',
            'typemsg'        => '',
            'empresaLogo'    => public_path('img/Fortec-2.png'),
            'infoEmpresa'    => [
                // 'empresa'    => 'Tu Empresa S.A. de C.V.',
                'empresa'    => $company->razon_social,
                'rfc'        => $company->rfc,
                'ubicacion'  => $company->location,
                'calle'      => '',
                'numero'     => '',
                'colonia'    => '',
                'delegacion' => '',
                'cp'         => '',
                'estado'     => '',
                'pais'       => 'México',
                'pagina'     => '',
                'email'      => $company->email,
                'telefono'   => $company->contact,
                'sucursal'   => null,
            ],
            'detalleEmpresa' => [
                'empresaNombre'    => $order->client->name ?? 'No especificado',
                'empresaRFC'       => $order->client->rfc  ?? 'No especificado',
                'empresaDireccion' => 'No especificada', // completa si tienes address
                'empresaTelefono'  => $order->client->telefono ?? 'No especificado',
                'empresaEmail'     => $order->client->email    ?? 'No especificado',
            ],
            'detallePartida'  => $partidas,
            'detallePresupuesto' => [
                'presupuestoTotalFull'    => round($importeAntesDesc, 2), // Importe (sum qty*pu)
                'descuento'               => round($descuento, 2),
                'presupuestoSubtotalFull' => round($subtotal, 2),
                'ivaTotal'                => round($ivaTotal, 2),
                'montoTotalFull'          => round($total, 2),
                'presupuestoNotas'        => null,
                'presupuestoObservaciones'=> $order->observations ?? null,
            ],
            'letraNumero' => $this->montoEnLetras($total, 'MXN'), // si quieres monto en letras lo agrego después
            'usaBloques'  => false, // usa el layout estándar
        ];
    }

    private function montoEnLetras(float $monto, string $currency = 'MXN'): string
    {
        // Redondea a 2 decimales y separa enteros/centavos
        $monto = round($monto, 2);
        $enteros  = (int) floor($monto);
        $centavos = (int) round(($monto - $enteros) * 100);

        // A palabras en español (México)
        $fmt = new NumberFormatter('es_MX', NumberFormatter::SPELLOUT);
        $texto = $fmt->format($enteros); // p.ej. "quince mil doscientos"
        $texto = ucfirst($texto);        // "Quince mil doscientos"

        // Singular/plural moneda
        $monedaTxt = match ($currency) {
            'USD' => ($enteros === 1 ? 'dólar' : 'dólares'),
            default => ($enteros === 1 ? 'peso' : 'pesos'),
        };

        // Devuelve: "Quince mil ... pesos 06/100 MXN"
        return sprintf('%s %s %02d/100 %s', $texto, $monedaTxt, $centavos, $currency);
    }
}
