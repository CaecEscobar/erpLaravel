<?php
// app/Http/Controllers/InventoryImportController.php

namespace App\Http\Controllers;

use App\Models\ProductWarehouse;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class InventoryImportController extends Controller
{
    public function import(Request $request)
    {
        try {
            if (!$request->hasFile('file')) {
                return response()->json(['success' => false, 'message' => 'Falta archivo.'], 422);
            }
            $file = $request->file('file');
            if (!in_array(strtolower($file->getClientOriginalExtension()), ['xlsx','xls'])) {
                return response()->json(['success' => false, 'message' => 'Formato inválido. Use .xlsx o .xls'], 422);
            }

            $createMissingWarehouses = filter_var($request->input('create_missing_warehouses', '1'), FILTER_VALIDATE_BOOLEAN);

            // Cargar Excel
            $spreadsheet   = IOFactory::load($file->getRealPath());
            $sheet         = $spreadsheet->getSheet(0);
            $highestRow    = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $lastColIndex  = Coordinate::columnIndexFromString($highestColumn);

            if ($highestRow < 2) {
                return response()->json(['success' => false, 'message' => 'El archivo no tiene filas de datos.'], 422);
            }

            // 1) Detectar la fila de encabezados (escanea las primeras 10 filas)
            $headerRow = $this->detectHeaderRow($sheet, $lastColIndex, min(10, $highestRow));

            // 2) Construir índice de encabezados (normalizados) -> columna
            [$headers, $headerIndex] = $this->buildHeaderIndex($sheet, $headerRow, $lastColIndex);

            // 3) Resolver columnas por "intención" con matching flexible (substring)
            $colRef = $this->resolveColumns($headerIndex);

            // Requisitos mínimos: sku + (almacen id o descripcion almacén)
            if (empty($colRef['sku']) || (empty($colRef['almacen']) && empty($colRef['descripcion_del_almacen']))) {
                return response()->json([
                    'success' => false,
                    'message' => 'Faltan encabezados: se requiere "Clave del articulo (o SKU)" y "Almacen" o "Descripcion del almacen".'
                ], 422);
            }

            // Cache de almacenes
            $warehouseById   = Warehouse::get()->keyBy('id');
            $warehouseByDesc = Warehouse::get()->keyBy(fn($w) => $this->normalizeText($w->description));

            // Reporte
            $processed = 0; $skipped = 0; $warehousesCreated = 0; $errors = [];

            DB::transaction(function () use (
                $sheet, $highestRow, $colRef, $headerRow,
                &$warehouseById, &$warehouseByDesc, &$processed, &$skipped, &$warehousesCreated, &$errors,
                $createMissingWarehouses
            ) {
                // datos comienzan después del headerRow
                for ($row = $headerRow + 1; $row <= $highestRow; $row++) {
                    try {
                        $sku = trim((string)$this->cellValue($sheet, $colRef['sku'] ?? null, $row));
                        if ($sku === '' || $sku === 'nan') { $skipped++; continue; }

                        // Resolver warehouse
                        $warehouseId = null;

                        // Por ID (Almacen)
                        if (!empty($colRef['almacen'])) {
                            $almacenIdRaw = $this->cellValue($sheet, $colRef['almacen'], $row);
                            $almacenId = is_null($almacenIdRaw) || $almacenIdRaw === '' ? null : (int)$almacenIdRaw;
                            if ($almacenId && isset($warehouseById[$almacenId])) $warehouseId = $almacenId;
                        }

                        // Por descripción
                        if (!$warehouseId && !empty($colRef['descripcion_del_almacen'])) {
                            $almacenDescRaw = (string)$this->cellValue($sheet, $colRef['descripcion_del_almacen'], $row);
                            $almacenDescKey = $this->normalizeText($almacenDescRaw);
                            if ($almacenDescKey !== '' && isset($warehouseByDesc[$almacenDescKey])) {
                                $warehouseId = $warehouseByDesc[$almacenDescKey]->id;
                            } elseif ($createMissingWarehouses && $almacenDescKey !== '') {
                                $w = Warehouse::create(['description' => $almacenDescRaw, 'is_active' => true]);
                                $warehouseId = $w->id;
                                $warehouseById[$w->id] = $w;
                                $warehouseByDesc[$almacenDescKey] = $w;
                                $warehousesCreated++;
                            }
                        }

                        if (!$warehouseId) { $skipped++; $errors[] = "Fila {$row}: almacén no válido."; continue; }

                        // Estatus y existencias
                        $isActive = $this->toBool($this->cellValue($sheet, $colRef['estatus'] ?? null, $row));
                        $quantity = $this->toDecimal($this->cellValue($sheet, $colRef['existencias'] ?? null, $row));

                        // Upsert por (sku, warehouse_id)
                        ProductWarehouse::updateOrCreate(
                            ['sku' => $sku, 'warehouse_id' => $warehouseId],
                            ['quantity' => $quantity, 'is_active' => $isActive]
                        );

                        $processed++;
                    } catch (\Throwable $e) {
                        $skipped++; $errors[] = "Fila {$row}: ".$e->getMessage();
                    }
                }
            });

            return response()->json([
                'success' => true,
                'message' => 'Inventario importado.',
                'report'  => compact('processed','skipped','warehousesCreated','errors'),
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al importar inventario.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    /** ====== Helpers ====== **/

    private function detectHeaderRow($sheet, int $lastColIndex, int $scanRows = 10): int
    {
        // Busca la fila con más "señales" de encabezados
        $keywords = ['almacen','almacén','descripcion','descripción','sku','clave','estatus','existencias','producto','articulo','artículo','stock','cantidad'];
        $bestRow = 1; $bestScore = -1;

        for ($row = 1; $row <= $scanRows; $row++) {
            $score = 0;
            for ($col = 1; $col <= $lastColIndex; $col++) {
                $colLetter = Coordinate::stringFromColumnIndex($col);
                $val = (string)$sheet->getCell($colLetter.$row)->getCalculatedValue();
                $v = $this->normalizeText($val);
                foreach ($keywords as $kw) {
                    if ($v !== '' && str_contains($v, $kw)) { $score++; break; }
                }
            }
            if ($score > $bestScore) { $bestScore = $score; $bestRow = $row; }
        }
        return $bestRow;
    }

    private function buildHeaderIndex($sheet, int $headerRow, int $lastColIndex): array
    {
        $headers = [];
        $headerIndex = [];
        for ($col = 1; $col <= $lastColIndex; $col++) {
            $colLetter = Coordinate::stringFromColumnIndex($col);
            $raw = (string)$sheet->getCell($colLetter.$headerRow)->getCalculatedValue();
            $norm = $this->normalizeHeader($raw);
            $headers[$col] = $norm;
            if ($norm !== '') $headerIndex[$norm] = $col;
        }
        return [$headers, $headerIndex];
    }

    private function resolveColumns(array $headerIndex): array
    {
        // Matching flexible: busca por "contiene" en la clave normalizada
        $findCol = function(array $candidates) use ($headerIndex): ?int {
            foreach ($headerIndex as $key => $col) {
                foreach ($candidates as $needle) {
                    if (str_contains($key, $needle)) return $col;
                }
            }
            return null;
        };

        return [
            // Almacén por ID
            'almacen' => $findCol(['almacen','almacen_id','almacenid','almacn','almacn_id']),
            // Descripción del almacén
            'descripcion_del_almacen' => $findCol(['descripcion_del_almacen','descripcion_almacen','descripcion','almacen_descripcion','desc_almacen']),
            // SKU / Clave
            'sku' => $findCol(['clave_del_articulo','clave_articulo','sku','clave','codigo','código']),
            // Estatus
            'estatus' => $findCol(['estatus','status','activo','estado']),
            // Existencias / stock / cantidad
            'existencias' => $findCol(['existencias','existencia','stock','cantidad','exist'])
        ];
    }

    private function cellValue($sheet, ?int $col, int $row): mixed
    {
        if (!$col) return null;
        $colLetter = Coordinate::stringFromColumnIndex($col);
        return $sheet->getCell($colLetter . $row)->getCalculatedValue();
    }

    private function normalizeHeader(string $s): string
    {
        $s = $this->normalizeText($s);
        $s = str_replace([' ', '.', '-', '/', '\\'], '_', $s);
        $s = preg_replace('/_+/', '_', $s);
        return trim($s, '_');
    }

    private function normalizeText(?string $s): string
    {
        $s = (string)$s;
        $s = mb_strtolower($s);
        $s = strtr($s, [
            'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u','ü'=>'u','ñ'=>'n',
            'à'=>'a','è'=>'e','ì'=>'i','ò'=>'o','ù'=>'u',
        ]);
        return trim($s);
    }

    private function toBool($v): bool
    {
        $s = $this->normalizeText((string)$v);
        return in_array($s, ['1','si','sí','true','activo','activa','yes'], true);
    }

    private function toDecimal($v): float
    {
        if ($v === null || $v === '') return 0.0;
        if (is_numeric($v)) return (float)$v;
        $s = (string)$v;

        if (str_contains($s, ',') && str_contains($s, '.')) {
            $lastComma = strrpos($s, ',');
            $lastDot   = strrpos($s, '.');
            if ($lastComma > $lastDot) { // "1.234,56"
                $s = str_replace('.', '', $s);
                $s = str_replace(',', '.', $s);
            } else {                     // "1,234.56"
                $s = str_replace(',', '', $s);
            }
        } elseif (str_contains($s, ',') && !str_contains($s, '.')) {
            $s = str_replace(',', '.', $s);
        }

        if (!is_numeric($s)) $s = preg_replace('/[^0-9\.\-]/', '', $s) ?: '0';
        return (float)$s;
    }
}
