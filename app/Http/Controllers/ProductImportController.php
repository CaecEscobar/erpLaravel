<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\PriceList;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Str;

class ProductImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();

        $rows = $sheet->toArray(null, true, true, true);

        // Detectar las columnas de listas (desde la columna F en adelante)
        $headers = $rows[5];
        $listaColumnas = [];
        foreach ($headers as $col => $header) {
            if (Str::startsWith($header, 'Lista')) {
                $nombreLista = trim(str_replace('Lista', '', $header));
                $listaColumnas[$col] = $nombreLista;
            }
        }

        $currentProduct = null;

        for ($i = 6; $i <= count($rows); $i++) {
            $row = $rows[$i] ?? [];

            $colA = trim($row['A'] ?? '');
            $colB = trim($row['B'] ?? ''); // Descripción
            $unidad = trim($row['C'] ?? '');
            $multiplo = trim($row['D'] ?? '');

            // Si hay valor en A y B está vacío, es un nombre de producto
            if ($colA !== '' && $colB === '') {
                $currentProduct = Product::firstOrCreate(['name' => $colA]);
                continue;
            }

            // Si hay valor tanto en A como en B, es un detalle (sku está en A)
            if ($colA !== '' && $colB !== '' && $currentProduct) {
                $sku = $colA;
                $descripcion = $colB;

                foreach ($listaColumnas as $col => $listaNombre) {
                    $precio = $row[$col] ?? null;
                    if ($precio === null || $precio === '') {
                        continue;
                    }

                    $priceList = PriceList::where('name', $listaNombre)->first();
                    if (!$priceList) {
                        Log::warning("Lista de precio '{$listaNombre}' no encontrada");
                        continue;
                    }

                    ProductDetail::updateOrCreate(
                        [
                            'sku' => $sku,
                            'product_id' => $currentProduct->id,
                            'price_list_id' => $priceList->id,
                        ],
                        [
                            'description' => $descripcion,
                            'unit_measure' => $unidad,
                            'unit_multiplier' => $multiplo,
                            'unit_price' => floatval($precio),
                            'is_active' => true,
                        ]
                    );
                }
            }
        }

        return response()->json(['success' => true, 'message' => 'Productos importados correctamente.']);
    }
}
