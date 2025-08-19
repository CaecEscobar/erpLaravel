<?php

namespace App\Http\Controllers;

use App\Models\Order;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class OrderExportController extends Controller
{
    public function export($id)
    {
        $order = Order::with(['client', 'vendor', 'products'])->findOrFail($id);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Encabezados (según layout original)
        $headers = [
            'Clave secuencial de pedido',
            'Cliente',
            'Fecha de elaboración',
            'Descuento financiero',
            'Número de almacén cabecera',
            'Observaciones',
            'Clave vendedor',
            'Su pedido OC',
            'Fecha de entrega',
            'Fecha de vencimiento',
            'Precio sin IVA',
            'Desc 1',
            'Desc 2',
            'Desc 3',
            'Comisión',
            'Clave de esquema de impuestos',
            'Clave de artículo',
            'Cantidad',
            // columnas vacías adicionales (puedes agregar más si es necesario)
            '', '', '', '', '', '', '', '', '', ''
        ];

        $sheet->fromArray([$headers], null, 'A1');

        $rowIndex = 2;

        if (!empty($order->products)) {
            foreach ($order->products as $product) {
                    $unitPrice = (float) str_replace(',', '', $product['unit_price']);
                    $quantity = (float) $product['quantity'];
                    $discount = (float) $product['discount'];
                    $total = (float) $product['total'];

                    $montoSinDescuento = $unitPrice * $quantity;
                    $discountAmount = $montoSinDescuento * ($discount / 100);
                    $subtotal = $montoSinDescuento - $discountAmount;
                    $iva = $subtotal * 0.16;
                    $totalCalculado = $subtotal + $iva;

                    $row = [
                        $order->id,
                        $order->client->client_number ?? '',
                        $order->created_at->format('Y-m-d'),
                        '',
                        '',
                        $order->observations ?? '',
                        $order->vendor->vendor_number ?? '',
                        $order->folio ?? '',
                        '',
                        '',
                        $montoSinDescuento ?? '',
                        $product->discount_amount ?? '',
                        '',
                        '',
                        '',
                        '',
                        $product->sku ?? '',
                        $product->cantidad ?? '',
                        '', '', '', '', '', '', '', '', '', ''
                    ];

                    $sheet->fromArray([$row], null, 'A' . $rowIndex);
                    $rowIndex++;
                }
            }
        $fileName = 'pedido_' . $order->id . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);

        (new Xlsx($spreadsheet))->save($tempFile);

        return Response::download($tempFile, $fileName)->deleteFileAfterSend(true);
    }

    public function exportAll(Request $request)
    {
        // Opcional: filtros
        $status = $request->query('status');     // ?status=aprobado
        $from   = $request->query('from');       // ?from=2025-08-01
        $to     = $request->query('to');         // ?to=2025-08-31

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $headers = $this->exportHeaders();
        $sheet->fromArray([$headers], null, 'A1');
        $rowIndex = 2;

        $query = Order::with(['client','vendor','products.product']);

        if ($status) $query->where('status', $status);
        if ($from)   $query->whereDate('created_at', '>=', $from);
        if ($to)     $query->whereDate('created_at', '<=', $to);

        // Para no explotar memoria si hay muchos:
        $query->orderBy('id')->chunkById(200, function ($orders) use ($sheet, &$rowIndex) {
            foreach ($orders as $order) {
                foreach ($order->products as $op) {
                    $unitPrice = (float) $op->unit_price;
                    $quantity  = (float) $op->quantity;
                    $discount  = (float) $op->discount;
                    $montoSinDescuento = $unitPrice * $quantity;

                    $discountAmount = $montoSinDescuento * ($discount / 100);
                    $subtotal       = $montoSinDescuento - $discountAmount;
                    $iva            = $subtotal * 0.16;
                    $totalCalculado = $subtotal + $iva;

                    $row = [
                        $order->id,
                        $order->client->client_number ?? '',
                        $order->created_at->format('Y-m-d'),
                        '',
                        '',
                        $order->observations ?? '',
                        $order->vendor->vendor_number ?? '',
                        $order->folio ?? '',
                        '',
                        '',
                        round($montoSinDescuento, 2),
                        $op->discount_amount ?? round($discountAmount, 2),
                        '',
                        '',
                        '',
                        '',
                        $op->product->sku ?? '',
                        $op->quantity ?? '',
                        '', '', '', '', '', '', '', '', '', ''
                    ];

                    $sheet->fromArray([$row], null, 'A'.$rowIndex);
                    $rowIndex++;
                }
            }
        });

        // Nombre dinámico si hay filtros
        $suffix = [];
        if ($status) $suffix[] = "status_{$status}";
        if ($from)   $suffix[] = "from_{$from}";
        if ($to)     $suffix[] = "to_{$to}";
        $fileName = 'pedidos'.(count($suffix)?'_'.implode('_',$suffix):'').'.xlsx';

        $tempFile = tempnam(sys_get_temp_dir(), 'pedidos_');
        (new Xlsx($spreadsheet))->save($tempFile);

        return Response::download($tempFile, $fileName)->deleteFileAfterSend(true);
    }

    private function exportHeaders(): array
    {
        return [
            'Clave secuencial de pedido',
            'Cliente',
            'Fecha de elaboración',
            'Descuento financiero',
            'Número de almacén cabecera',
            'Observaciones',
            'Clave vendedor',
            'Su pedido OC',
            'Fecha de entrega',
            'Fecha de vencimiento',
            'Precio sin IVA',
            'Desc 1',
            'Desc 2',
            'Desc 3',
            'Comisión',
            'Clave de esquema de impuestos',
            'Clave de artículo',
            'Cantidad',
            '', '', '', '', '', '', '', '', '', ''
        ];
    }
}
