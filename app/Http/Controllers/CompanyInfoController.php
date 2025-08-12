<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    // Devuelve el primer registro; si no existe, devuelve 404 o crea uno vacío (elige 1)
    public function show()
    {
        $info = CompanyInfo::query()->first();

        if (!$info) {
            $info = CompanyInfo::create([
                'name' => '',
                'razon_social' => '',
                'rfc' => '',
                'location' => '',
                'email' => null,
                'contact' => null,
            ]);
        }

        return response()->json($info);
    }

    public function update(Request $request, CompanyInfo $companyInfo)
    {
        $validated = $request->validate([
            'name'         => ['required','string','max:255'],
            'razon_social' => ['required','string','max:255'],
            'rfc'          => ['required','string','max:13'], // si quieres regex de RFC, la agrego
            'location'     => ['required','string','max:1000'],
            'email'        => ['nullable','email','max:255'],
            'contact'      => ['nullable','string','max:50'],
        ]);

        // normaliza RFC
        $validated['rfc'] = strtoupper(trim($validated['rfc']));

        $companyInfo->update($validated);

        return response()->json(['ok' => true, 'data' => $companyInfo]);
    }
}
