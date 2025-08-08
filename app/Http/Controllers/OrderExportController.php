<?php

namespace App\Http\Controllers;

use App\Models\Order;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Response;

class OrderExportController extends Controller
{
    public function export($id)
    {
        $order = Order::with(['client', 'user', 'products'])->findOrFail($id);
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
                    $row = [
                        $order->id,
                        $order->client->name ?? '',
                        $order->created_at->format('Y-m-d'),
                        '',
                        '',
                        $order->observations ?? '',
                        $order->user->vendor_number ?? '',
                        $order->order ?? '',
                        '',
                        '',
                        $product->monto ?? '',
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
}
