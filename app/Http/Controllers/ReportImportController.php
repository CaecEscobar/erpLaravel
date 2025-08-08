<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ReportImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls'
        ]);

        $spreadsheet = IOFactory::load($request->file('file'));
        $sheetCount = $spreadsheet->getSheetCount();
        $sheet = $spreadsheet->getSheet(2); 
        $rows = $sheet->toArray();

        if (count($rows) < 2) {
            return response()->json(['message' => 'El archivo no contiene datos.'], 400);
        }

        foreach ($rows as $index => $row) {
            
            if ($index === 0) continue; // Saltar encabezado
            
            $vendorNumber = $row[0];
            if (!$vendorNumber) continue; // Saltar fila vacía

            // Verificar que exista el usuario con ese vendor_number
            $userExists = User::where('vendor_number', $vendorNumber)->exists();
            if (!$userExists) continue;
            logger('eadasda');

            Report::create([
                'vendor_number'   => $vendorNumber,
                'zone'            => $row[1] ?? null,
                'quota'           => $this->normalizeNumber($row[3]) ?? 0,
                'orders'          => $this->normalizeNumber($row[4]) ?? 0,
                'invoiced'        => $this->normalizeNumber($row[5]) ?? 0,
                'freights'         => $this->normalizeNumber($row[6]) ?? 0,
                'credit_notes'    => $this->normalizeNumber($row[7]) ?? 0,
                'net_amount'      => $this->normalizeNumber($row[8]) ?? 0,
                'backorder'       => $this->normalizeNumber($row[9]) ?? 0,
                'progress'        => $this->normalizeNumber($row[10]) ?? 0,
            ]);
        }

        return response()->json(['message' => 'Importación completada.']);
    }

    private function normalizeNumber(?string $value): float
    {
        if (!$value) return 0;
        return floatval(str_replace(['$', ',', '%', ' '], '', $value));
    }
}
