<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ClientImportController extends Controller
{
    /**
     * Importa clientes desde la hoja 2 ("Base Clientes") del Excel.
     * Columnas esperadas (tolerante a espacios/acentos):
     *  - Clave                   -> client_number (int)
     *  - Clave de vendedor       -> vendor_number (int|null)
     *  - Nombre                  -> name (string)
     *  - Lista de precios        -> price_list_id (CSV -> JSON)
     *  - Descuento máximo permitido -> max_discount (float 0..100|null)
     *  - Calle, Numero, Colonia, Municipio, Estado, Codigo Postal
     *  - Latitud, Longitud (opcional)
     *  - Telefono (opcional) -> telefono_contacto
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $path = $request->file('file')->getRealPath();
        $spreadsheet = IOFactory::load($path);

        if ($spreadsheet->getSheetCount() < 2) {
            return response()->json([
                'success' => false,
                'message' => 'El archivo no contiene la segunda hoja (Base Clientes).',
            ], 422);
        }

        $sheet = $spreadsheet->getSheet(1); // Base Clientes
        $rows  = $sheet->toArray(null, true, true, true);

        if (count($rows) < 2) {
            return response()->json([
                'success' => false,
                'message' => 'La hoja Base Clientes no contiene datos.',
            ], 422);
        }

        // ---- Encabezados normalizados
        $headerRow = $rows[1];
        $headers   = [];
        foreach ($headerRow as $col => $title) {
            $headers[$this->norm((string)$title)] = $col;
        }

        // Mapeo de columnas (tolerante a acentos/espacios)
        $colClient   = $headers['clave']                    ?? null;
        $colVendor   = $headers['clave de vendedor']        ?? null;
        $colName     = $headers['nombre']                   ?? null;
        $colPrice    = $headers['lista de precios']         ?? null;
        $colMaxDisc  = $headers['descuento maximo permitido'] ?? null;

        $colCalle    = $headers['calle']                    ?? null;
        $colNumero   = $headers['numero']                   ?? null;
        $colColonia  = $headers['colonia']                  ?? null;
        $colMunicipio= $headers['municipio']                ?? null;
        $colEstado   = $headers['estado']                   ?? null;
        $colCp       = $headers['codigo postal']            ?? null;
        $colLat      = $headers['latitud']                  ?? null;
        $colLng      = $headers['longitud']                 ?? null;
        $colTel      = $headers['telefono']                 ?? ($headers['telefono contacto'] ?? null);

        // Columnas mínimas imprescindibles (puedes relajar esto si lo deseas)
        foreach ([
            'Clave' => $colClient,
            'Nombre' => $colName,
        ] as $label => $col) {
            if (!$col) {
                return response()->json([
                    'success' => false,
                    'message' => "No se encontró la columna requerida: {$label} en Base Clientes.",
                ], 422);
            }
        }

        $created = 0;
        $updated = 0;
        $skipped = 0;
        $errors  = [];
        $clientesOut = [];

        $lastRow = $sheet->getHighestDataRow();

        for ($r = 2; $r <= $lastRow; $r++) {
            $row = $rows[$r] ?? null;
            if (!$row) continue;

            // ✅ SALTAR FILAS TOTALMENTE VACÍAS (sin contarlas ni loggear)
            $emptyColsCheck = [
                $colClient, $colName, $colCalle, $colColonia, $colMunicipio,
                $colEstado, $colCp, $colPrice, $colVendor, $colTel, $colLat, $colLng
            ];
            if ($this->isRowCompletelyEmpty($row, $emptyColsCheck)) {
                continue; // NO incrementa skipped, NO agrega error
            }

            // --- Lectura base
            $clientNumberRaw = $this->nullIfEmpty($row[$colClient] ?? null);

            if ($clientNumberRaw === null) {
                // La fila tenía algo (pasó el paso 2), pero falta la clave -> opcional: marcar como omitida
                $skipped++;
                // Si NO quieres mensaje, no pushes a $errors:
                $errors[] = ['row'=>$r,'message'=>"Fila omitida: client_number vacío"];
                continue;
            }

            if (!preg_match('/^\d+$/', (string)$clientNumberRaw)) {
                $skipped++;
                // Solo aquí quieres el mensaje de “no numérico”
                $errors[] = ['row'=>$r, 'message'=>"Fila omitida: client_number no numérico ('{$clientNumberRaw}')"];
                continue;
            }

            $clientNumber = (int)$clientNumberRaw;

            $vendorNumber = $colVendor ? $this->nullIfEmpty($row[$colVendor] ?? null) : null;
            $name         = $this->nullIfEmpty($row[$colName]     ?? null);
            $priceListRaw = (string)($row[$colPrice]              ?? '');
            try {
                $maxDiscount = $this->parsePercentLike($row[$colMaxDisc] ?? null);
            } catch (\Throwable $e) {
                $errors[] = ['row' => $r, 'message' => $e->getMessage()];
                $skipped++; 
                continue;
            }

            if (!is_null($maxDiscount) && ($maxDiscount < 0 || $maxDiscount > 100)) {
                $errors[] = ['row'=>$r, 'message'=>"max_discount fuera de rango 0..100: '{$maxDiscount}'"];
                $skipped++; 
                continue;
            }

            // --- Location: cualquier dato faltante => NULL
            $calle     = $colCalle     ? $this->nullIfEmpty($row[$colCalle]     ?? null) : null;
            $numeroStr = $colNumero    ? $this->nullIfEmpty($row[$colNumero]    ?? null) : null;
            $colonia   = $colColonia   ? $this->nullIfEmpty($row[$colColonia]   ?? null) : null;
            $municipio = $colMunicipio ? $this->nullIfEmpty($row[$colMunicipio] ?? null) : null;
            $estado    = $colEstado    ? $this->nullIfEmpty($row[$colEstado]    ?? null) : null;
            $cp        = $colCp        ? $this->nullIfEmpty($row[$colCp]        ?? null) : null;
            $latRaw    = $colLat       ? $row[$colLat] : null;
            $lngRaw    = $colLng       ? $row[$colLng] : null;
            $telefono  = $colTel       ? $this->nullIfEmpty($row[$colTel]       ?? null) : null;

            // Saltar filas totalmente vacías de interés
            if (is_null($clientNumber) && is_null($name)) {
                $skipped++; continue;
            }

            // Normalizaciones / conversiones
            if (!is_null($clientNumber) && !preg_match('/^\d+$/', (string)$clientNumber)) {
                $errors[] = ['row'=>$r, 'message'=>"client_number inválido: '{$clientNumber}'"];
                $skipped++; continue;
            }
            $clientNumber = is_null($clientNumber) ? null : (int)$clientNumber;

            if (!is_null($vendorNumber) && !preg_match('/^\d+$/', (string)$vendorNumber)) {
                $vendorNumber = null; // si trae texto, lo anulamos
            } else {
                $vendorNumber = is_null($vendorNumber) ? null : (int)$vendorNumber;
            }

            // numero: guardamos NULL si no es numérico
            $numero = null;
            if (!is_null($numeroStr)) {
                // permitimos cosas como "123", pero si trae "S/N" lo dejamos null
                if (preg_match('/^\d+$/', (string)$numeroStr)) {
                    $numero = (int)$numeroStr;
                }
            }

            // max_discount (0..100) — permite null
            if ($maxDiscount === '' || $maxDiscount === null) {
                $maxDiscount = null;
            } else {
                if (!is_numeric($maxDiscount)) {
                    $errors[] = ['row'=>$r, 'message'=>"max_discount no numérico: '{$maxDiscount}'"];
                    $skipped++; continue;
                }
                $maxDiscount = (float)$maxDiscount;
                if ($maxDiscount < 0 || $maxDiscount > 100) {
                    $errors[] = ['row'=>$r, 'message'=>"max_discount fuera de rango 0..100: '{$maxDiscount}'"];
                    $skipped++; continue;
                }
            }

            // Lat/Lng (nullable float)
            $lat = (is_numeric($latRaw)) ? (float)$latRaw : null;
            $lng = (is_numeric($lngRaw)) ? (float)$lngRaw : null;

            // Validación básica (relajada en Location: todo nullable)
            $v = Validator::make([
                'name'          => $name,
                'client_number' => $clientNumber,
                'vendor_number' => $vendorNumber,
                'max_discount'  => $maxDiscount,
                'calle'         => $calle,
                'numero'        => $numero,
                'colonia'       => $colonia,
                'municipio'     => $municipio,
                'estado'        => $estado,
                'codigo_postal' => $cp,
                'latitud'       => $lat,
                'longitud'      => $lng,
                'telefono'      => $telefono,
            ], [
                'name'          => ['required','string','max:255'],
                'client_number' => ['required','integer'],
                'vendor_number' => ['nullable','integer'],
                'max_discount'  => ['nullable','numeric','min:0','max:100'],

                // Location ahora es nullable en todos sus campos
                'calle'         => ['nullable','string','max:255'],
                'numero'        => ['nullable','integer'],
                'colonia'       => ['nullable','string','max:255'],
                'municipio'     => ['nullable','string','max:255'],
                'estado'        => ['nullable','string','max:255'],
                'codigo_postal' => ['nullable','string'],
                'latitud'       => ['nullable','numeric','between:-90,90'],
                'longitud'      => ['nullable','numeric','between:-180,180'],
                'telefono'      => ['nullable','string','max:20'],
            ]);

            if ($v->fails()) {
                $errors[] = ['row'=>$r, 'message'=>$v->errors()->first()];
                $skipped++; continue;
            }

            // price_list_id -> JSON desde CSV
            $parts = $this->splitPriceList($priceListRaw);
            $priceListJson = json_encode($parts, JSON_UNESCAPED_UNICODE);

            DB::beginTransaction();
            try {
                // 1) Location: firstOrCreate con valores (incluidos NULL)
                // Nota: si todos los campos quedan NULL, múltiples clientes compartirán esa misma Location.
                $where = [
                    'calle'         => $calle,
                    'numero'        => $numero,         // si tu columna es string, convierte aquí a string si lo prefieres
                    'colonia'       => $colonia,
                    'municipio'     => $municipio,
                    'estado'        => $estado,
                    'codigo_postal' => $cp,
                ];
                $values = [
                    'latitud'  => $lat,
                    'longitud' => $lng,
                ];

                $location = Location::firstOrCreate($where, $values);

                // Si lat/lng nuevos y antes eran null, actualiza
                $changed = false;
                if ($location->latitud === null && $lat !== null) { $location->latitud = $lat; $changed = true; }
                if ($location->longitud === null && $lng !== null) { $location->longitud = $lng; $changed = true; }
                if ($changed) $location->save();

                // 2) Upsert Client por client_number
                $client = Client::where('client_number', $clientNumber)->first();

                if ($client) {
                    $client->update([
                        'name'              => $name,
                        'telefono_contacto' => $telefono ?: null,
                        'vendor_number'     => $vendorNumber,
                        'location_id'       => $location->id,
                        'max_discount'      => $maxDiscount,
                        // 'email' no viene en esta hoja
                        'price_list_id'     => $priceListJson,
                    ]);
                    $updated++;
                } else {
                    $client = Client::create([
                        'name'              => $name,
                        'telefono_contacto' => $telefono ?: null,
                        'client_number'     => $clientNumber,
                        'vendor_number'     => $vendorNumber,
                        'location_id'       => $location->id,
                        'max_discount'      => $maxDiscount,
                        'email'             => null,
                        'price_list_id'     => $priceListJson,
                    ]);
                    $created++;
                }

                DB::commit();

                // Info de salida
                $vendor = $vendorNumber
                    ? User::where('vendor_number', $vendorNumber)->first()
                    : null;

                $clientesOut[] = [
                    'id'               => $client->id,
                    'name'             => $client->name,
                    'client_number'    => $client->client_number,
                    'vendor_number'    => $client->vendor_number,
                    'telefono_contacto'=> $client->telefono_contacto,
                    'max_discount'     => $client->max_discount,
                    'price_list_id'    => $client->price_list_id,
                    'location'         => [
                        'id'            => $location->id,
                        'calle'         => $location->calle,
                        'numero'        => $location->numero,
                        'colonia'       => $location->colonia,
                        'municipio'     => $location->municipio,
                        'estado'        => $location->estado,
                        'codigo_postal' => $location->codigo_postal,
                        'latitud'       => $location->latitud,
                        'longitud'      => $location->longitud,
                    ],
                    'vendor_user'      => $vendor ? [
                        'id'    => $vendor->id,
                        'name'  => $vendor->name,
                        'email' => $vendor->email,
                    ] : null,
                ];

            } catch (\Throwable $e) {
                DB::rollBack();
                $errors[] = ['row'=>$r, 'message'=>$e->getMessage()];
                $skipped++;
            }
        }

        return response()->json([
            'success'        => true,
            'message'        => 'Importación de clientes finalizada.',
            'created'        => $created,
            'updated'        => $updated,
            'skipped'        => $skipped,
            'imported_count' => $created + $updated,
            'clientes'       => $clientesOut,
            'errores'        => $errors,
        ]);
    }

    /** Normaliza encabezados (lowercase, quita acentos, colapsa espacios). */
    private function norm(string $s): string
    {
        $s = trim(mb_strtolower($s, 'UTF-8'));
        $s = str_replace(['á','é','í','ó','ú','ñ'], ['a','e','i','o','u','n'], $s);
        $s = preg_replace('/\s+/', ' ', $s);
        return $s;
    }

    /** Convierte cadena vacía o solo espacios a NULL. */
    private function nullIfEmpty($v)
    {
        if ($v === null) return null;
        $s = trim((string)$v);
        return $s === '' ? null : $s;
    }

    private function parsePercentLike($value): ?float
    {
        if ($value === null) return null;

        // Si ya es numérico
        if (is_numeric($value)) {
            $n = (float)$value;
            // Si parece fracción (0..1), asume porcentaje (0.05 -> 5)
            return ($n >= 0 && $n <= 1) ? $n * 100.0 : $n;
        }

        // Si es string: quitar espacios y el signo %
        $s = trim((string)$value);
        if ($s === '') return null;

        // Quita % y espacios intermedios
        $s = str_replace('%', '', $s);
        $s = preg_replace('/\s+/', '', $s);

        // Soportar coma decimal
        $s = str_replace(',', '.', $s);

        if (!is_numeric($s)) {
            throw new \RuntimeException("max_discount no numérico: '{$value}'");
        }

        $n = (float)$s;
        // Si parece fracción (0..1), asume porcentaje
        return ($n >= 0 && $n <= 1) ? $n * 100.0 : $n;
    }

    private function isRowCompletelyEmpty(array $row, array $cols): bool
    {
        foreach ($cols as $c) {
            if ($c && isset($row[$c]) && trim((string)$row[$c]) !== '') {
                return false;
            }
        }
        return true;
    }

    /** Quita "lista" como prefijo (insensible a mayúsculas) y deja el resto. */
    private function sanitizePriceListItem(?string $s): ?string
    {
        if ($s === null) return null;
        $s = trim($s);
        if ($s === '') return null;

        // Si empieza con "lista", opcionalmente seguida de :, -, #, . y espacios, elimínalo
        // Ej: "Lista 97" -> "97", "LISTA- 12" -> "12"
        $s = preg_replace('/^\s*lista\s*[:\-#.]?\s*/iu', '', $s);

        // Si tras limpiar queda vacío, descártalo
        $s = trim($s);
        return $s === '' ? null : $s;
    }

    /** Convierte CSV a array sanitizado (sin vacíos), preservando el orden. */
    private function splitPriceList(?string $raw): array
    {
        if ($raw === null) return [];
        $items = array_map('trim', explode(',', (string)$raw));

        $out = [];
        foreach ($items as $it) {
            $clean = $this->sanitizePriceListItem($it);
            if ($clean !== null) {
                $out[] = $clean;
            }
        }
        return $out;
    }
}