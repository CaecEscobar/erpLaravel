<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Collection;

class ClientImportController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        if (!$file) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        // Cargar el archivo con PhpSpreadsheet
        $spreadsheet = IOFactory::load($file->getRealPath());

        // Seleccionar la hoja "Base Clientes"
        $sheet = $spreadsheet->getSheetByName('Base Clientes');
        if (!$sheet) {
            return response()->json(['error' => 'No se encontró la hoja Base Clientes'], 400);
        }

        $rows = $sheet->toArray();
        logger($rows);
        $clientes = [];
        $errores = [];

        foreach ($rows as $index => $row) {
            if ($index === 0) continue; // Saltar encabezado

            $clientNumber   = $row[0]; // Clave Cliente
            $vendorNumber   = $row[1]; // Clave de vendedor
            $name           = $row[3]; // ✅ Nombre (índice correcto)
            $priceListRaw   = $row[4]; // Lista de precios
            $maxDiscount    = $row[5]; // Descuento máximo permitido
            
            if (!is_numeric($clientNumber)) continue;

            // Procesar lista de precios
            $priceListId = null;
            if ($priceListRaw) {
                $cleaned = str_replace('Lista', '', $priceListRaw);
                $parts = array_map('trim', explode(',', $cleaned));
                $priceListId = array_values(array_filter($parts));
            }

            $vendorNumberClean = is_numeric($vendorNumber) ? (int) $vendorNumber : null;

            // Validar existencia de vendedor
            if ($vendorNumberClean && !User::where('vendor_number', $vendorNumberClean)->exists()) {
                $errores[] = [
                    'client_number' => (int)$clientNumber,
                    'name' => $name,
                    'error' => "Vendedor con vendor_number $vendorNumberClean no existe",
                ];
                continue;
            }

            $clientes[] = [
                'client_number' => (int) $clientNumber,
                'vendor_number' => $vendorNumberClean,
                'name' => $name,
                'price_list_id' => $priceListId ? json_encode($priceListId) : null,
                'max_discount' => floatval($maxDiscount),
            ];
        }

        foreach ($clientes as $data) {
            Client::updateOrCreate(
                ['client_number' => $data['client_number']],
                $data
            );
        }

        // Obtener clientes con nombre de vendedor
        $clientesConVendedor = Client::whereIn('client_number', collect($clientes)->pluck('client_number'))
            ->with('vendor:id,vendor_number,name')
            ->get()
            ->map(function ($cliente) {
                return [
                    'client_number' => $cliente->client_number,
                    'name' => $cliente->name,
                    'vendor_number' => $cliente->vendor_number,
                    'vendor_name' => optional($cliente->vendor)->name,
                    'price_list_id' => $cliente->price_list_id,
                    'max_discount' => $cliente->max_discount,
                ];
            });

        return response()->json([
            'message' => 'Clientes importados correctamente',
            'imported_count' => count($clientes),
            'skipped_count' => count($errores),
            'clientes' => $clientesConVendedor,
            'errores' => $errores
        ]);
    }
}
