<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\PriceList;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Str;

class ProductImportController extends Controller
{
    public function import(Request $request)
    {
        set_time_limit(300);

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

            $colA = trim($row['A'] ?? ''); // Puede ser name o sku
            $colB = trim($row['B'] ?? ''); // Descripción
            $descripcion = $colB;
            $unidad = trim($row['C'] ?? '');
            $rawMultiplo = trim($row['D'] ?? '');
            preg_match('/[\d.,]+/', $rawMultiplo, $matches);
            $multiplo = isset($matches[0]) ? floatval(str_replace(',', '.', $matches[0])) : 1;

            // Si hay valor en A y B está vacío (trim), es un nombre de producto
            if ($colA !== '' && (!isset($row['B']) || trim($row['B']) === '')) {
                $currentProduct = Product::create(['name' => $colA]);
                continue;
            }

            // Si hay valor tanto en A como en B, es un detalle (sku está en A)
            if ($colA !== '' && $colB !== '' && $currentProduct) {
                $sku = $colA;

                foreach ($listaColumnas as $col => $listaNombre) {
                    $precio = $row[$col] ?? null;
                    if ($precio === null || $precio === '') {
                        continue;
                    }

                    $priceList = PriceList::where('name', $listaNombre)->first();
                    if (!$priceList) {
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

    public function extraerMultiplicador($valor)
    {
        // Ej: "21 Pzs", "0.25 Millar" → extrae "21" o "0.25"
        if (preg_match('/^[\d,.]+/', trim($valor), $matches)) {
            return floatval(str_replace(',', '.', $matches[0]));
        }
        return null;
    }
}
