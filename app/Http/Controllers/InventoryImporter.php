<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Models\ProductWarehouse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InventoryImporter implements ToCollection, WithHeadingRow
{
    private int $processed = 0;
    private int $skipped = 0;
    private int $warehousesCreated = 0;
    private array $errors = [];

    public function __construct(private bool $createMissingWarehouses = true) {}

    public function collection(Collection $rows)
    {
        $warehouseById   = Warehouse::get()->keyBy('id');
        $warehouseByDesc = Warehouse::get()->keyBy(fn($w) => mb_strtoupper(trim($w->description)));

        DB::transaction(function () use ($rows, &$warehouseById, &$warehouseByDesc) {
            foreach ($rows as $i => $row) {
                try {
                    // Encabezados tolerantes
                    $almacenIdRaw   = $row['almacen'] ?? $row['almacén'] ?? null;
                    $almacenDescRaw = $row['descripcion_del_almacen'] ?? $row['descripción_del_almacen'] ?? null;
                    $skuRaw         = $row['clave_del_articulo'] ?? $row['clave_del_artículo'] ?? $row['sku'] ?? null;
                    $estatusRaw     = $row['estatus'] ?? null;
                    $existenciasRaw = $row['existencias'] ?? null;

                    $sku = trim((string)$skuRaw);
                    if ($sku === '') { $this->skipped++; continue; }

                    // Resolver warehouse
                    $warehouseId = null;
                    $almacenId = is_null($almacenIdRaw) ? null : (int)$almacenIdRaw;
                    $almacenDescKey = mb_strtoupper(trim((string)$almacenDescRaw));

                    if ($almacenId && isset($warehouseById[$almacenId])) {
                        $warehouseId = $almacenId;
                    } elseif ($almacenDescKey !== '' && isset($warehouseByDesc[$almacenDescKey])) {
                        $warehouseId = $warehouseByDesc[$almacenDescKey]->id;
                    } elseif ($this->createMissingWarehouses && $almacenDescKey !== '') {
                        $w = Warehouse::create(['description' => $almacenDescRaw, 'is_active' => true]);
                        $warehouseId = $w->id;
                        $warehouseById[$w->id] = $w;
                        $warehouseByDesc[$almacenDescKey] = $w;
                        $this->warehousesCreated++;
                    } else {
                        $this->skipped++;
                        $this->errors[] = "Fila ".($i+2).": almacén no válido."; // +2 por header + base 1
                        continue;
                    }

                    $isActive = $this->toBool($estatusRaw);
                    $quantity = $this->toDecimal($existenciasRaw);

                    ProductWarehouse::updateOrCreate(
                        ['sku' => $sku, 'warehouse_id' => $warehouseId],
                        ['quantity' => $quantity, 'is_active' => $isActive]
                    );

                    $this->processed++;
                } catch (\Throwable $e) {
                    $this->skipped++;
                    $this->errors[] = "Fila ".($i+2).": ".$e->getMessage();
                }
            }
        });
    }

    private function toBool($v): bool
    {
        $s = mb_strtolower(trim((string)$v));
        return in_array($s, ['1','si','sí','true','activo','activa','yes'], true);
    }

    private function toDecimal($v): float
    {
        if ($v === null || $v === '') return 0.0;
        if (is_numeric($v)) return (float)$v;
        $s = str_replace(['.', ','], ['', '.'], (string)$v);
        if (!is_numeric($s)) $s = preg_replace('/[^0-9\.\-]/', '', $s) ?: '0';
        return (float)$s;
    }

    public function headingRow(): int { return 1; }

    // Reporte
    public function result(): array
    {
        return [
            'processed' => $this->processed,
            'skipped' => $this->skipped,
            'warehouses_created' => $this->warehousesCreated,
            'errors' => $this->errors,
        ];
    }
}