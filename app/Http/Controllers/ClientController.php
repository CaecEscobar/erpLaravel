<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $query = Client::with(['location', 'vendor']);

        if (! $this->isAdminLike($user)) {
            $query->where('vendor_number', $user->vendor_number);
        }

        return $query->get();
    }

    private function isAdminLike($user): bool
    {
        $role = strtolower($user?->role?->name ?? '');
        return in_array($role, ['admin', 'developer', 'gerente', 'facturacion'], true);
    }

    public function show($id)
    {
        $client = Client::with(['location', 'vendor'])->find($id);

        if (!$client) {
            return response()->json(['message' => 'Cliente no encontrado.'], 404);
        }

        return response()->json($client);
    }

    public function showByNumber($client_number)
    {
        $client = Client::with(['vendor', 'location']) // incluye relaciones si quieres
                    ->where('client_number', $client_number)
                    ->first();

        if (!$client) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($client);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => ['required','string','max:255'],
            'client_number' => ['required','string','max:50'], // sin unique
            'vendor_number' => ['nullable','string','max:50'],
            'email'         => ['nullable','email','max:255'],
            'max_discount'  => ['nullable','numeric','min:0','max:100'],

            // Location anidada
            'location'                  => ['required','array'],
            'location.calle'            => ['required','string','max:255'],
            'location.numero'           => ['required','string','max:50'],
            'location.colonia'          => ['required','string','max:255'],
            'location.municipio'        => ['required','string','max:255'],
            'location.estado'           => ['required','string','max:255'],
            'location.codigo_postal'    => ['required','string','max:20'],
            'location.latitud'          => ['nullable','numeric','between:-90,90'],
            'location.longitud'         => ['nullable','numeric','between:-180,180'],

            // price_list_id como texto: "4" o "4, 1 Gob, 5"
            'price_list_id'   => ['nullable','string','max:1000'],
        ]);

        // 1) Normalizar y buscar/crear la Location
        $locInput = $validated['location'];
        // Limpia espacios
        $locInput = array_map(fn($v) => is_string($v) ? trim($v) : $v, $locInput);

        // Clave de búsqueda (sin lat/long)
        $where = Arr::only($locInput, [
            'calle','numero','colonia','municipio','estado','codigo_postal'
        ]);

        // Valores extra si se crea
        $values = [
            'latitud'  => $locInput['latitud']  ?? null,
            'longitud' => $locInput['longitud'] ?? null,
        ];

        $location = Location::firstOrCreate($where, $values);

        // (opcional) si quieres actualizar lat/long cuando estaban nulos:
        if (($location->latitud === null && !empty($locInput['latitud'])) ||
            ($location->longitud === null && !empty($locInput['longitud']))) {
            $location->latitud  = $locInput['latitud']  ?? $location->latitud;
            $location->longitud = $locInput['longitud'] ?? $location->longitud;
            $location->save();
        }

        // 2) price_list_id: "4, 1 Gob, 5" -> ["4","1 Gob","5"]
        $raw = (string)($validated['price_list_id'] ?? '');
        $parts = array_values(array_filter(
            array_map(fn($s)=>trim($s), explode(',', $raw)),
            fn($s)=>$s!==''
        ));
        $priceListJson = json_encode($parts, JSON_UNESCAPED_UNICODE);

        // 3) Crear cliente
        $client = Client::create([
            'name'          => $validated['name'],
            'client_number' => $validated['client_number'],
            'vendor_number' => $validated['vendor_number'] ?? null,
            'location_id'   => $location->id,
            'max_discount'  => $validated['max_discount'] ?? null,
            'email'         => $validated['email'] ?? null,
            'price_list_id' => $priceListJson,
        ]);

        return response()->json(['ok' => true, 'data' => $client->load('location')], 201);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->only(['name', 'location_id', 'user_id', 'max_discount', 'price_list_id']));
        return response()->json($client);
    }

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
