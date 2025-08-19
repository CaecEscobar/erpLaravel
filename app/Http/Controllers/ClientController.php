<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
            'client_number' => ['required','integer'], // sin unique
            'vendor_number' => ['nullable','integer'],
            'email'         => ['nullable','email','max:255'],
            'telefono_contacto' => 'sometimes|required|string|max:20',
            'max_discount'  => ['nullable','numeric','min:0','max:100'],

            'location'                  => ['required','array'],
            'location.calle'            => ['required','string','max:255'],
            'location.numero'           => ['required','integer'],
            'location.colonia'          => ['required','string','max:255'],
            'location.municipio'        => ['required','string','max:255'],
            'location.estado'           => ['required','string','max:255'],
            'location.codigo_postal'    => ['required','string'],
            'location.latitud'          => ['nullable','numeric','between:-90,90'],
            'location.longitud'         => ['nullable','numeric','between:-180,180'],

            'price_list_id'   => ['nullable','string','max:1000'],
        ]);

        $locInput = $validated['location'];
        $locInput = array_map(fn($v) => is_string($v) ? trim($v) : $v, $locInput);

        $where = Arr::only($locInput, [
            'calle','numero','colonia','municipio','estado','codigo_postal'
        ]);

        $values = [
            'latitud'  => $locInput['latitud']  ?? null,
            'longitud' => $locInput['longitud'] ?? null,
        ];

        $location = Location::firstOrCreate($where, $values);

        if (($location->latitud === null && !empty($locInput['latitud'])) ||
            ($location->longitud === null && !empty($locInput['longitud']))) {
            $location->latitud  = $locInput['latitud']  ?? $location->latitud;
            $location->longitud = $locInput['longitud'] ?? $location->longitud;
            $location->save();
        }

        $raw = (string)($validated['price_list_id'] ?? '');
        $parts = array_values(array_filter(
            array_map(fn($s)=>trim($s), explode(',', $raw)),
            fn($s)=>$s!==''
        ));
        $priceListJson = json_encode($parts, JSON_UNESCAPED_UNICODE);

        $client = Client::create([
            'name'              => $validated['name'],
            'telefono_contacto' => $validated['telefono_contacto'],
            'client_number'     => $validated['client_number'],
            'vendor_number'     => $validated['vendor_number'] ?? null,
            'location_id'       => $location->id,
            'max_discount'      => $validated['max_discount'] ?? null,
            'email'             => $validated['email'] ?? null,
            'price_list_id'     => $priceListJson,
        ]);

        return response()->json(['ok' => true, 'data' => $client->load('location')], 201);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate([
            'name'          => ['required','string','max:255'],
            'client_number' => ['required','integer'],
            'vendor_number' => ['nullable','integer'],
            'email'         => ['nullable','email','max:255'],
            'telefono_contacto' => 'sometimes|required|string|max:20',
            'max_discount'  => ['nullable','numeric','min:0','max:100'],

            'location'               => ['required','array'],
            'location.calle'         => ['required','string','max:255'],
            'location.numero'        => ['required','integer'],
            'location.colonia'       => ['required','string','max:255'],
            'location.municipio'     => ['required','string','max:255'],
            'location.estado'        => ['required','string','max:255'],
            'location.codigo_postal' => ['required','string'],
            'location.latitud'       => ['nullable','numeric','between:-90,90'],
            'location.longitud'      => ['nullable','numeric','between:-180,180'],

            'price_list_id' => ['nullable','string','max:1000'],
        ]);

        return DB::transaction(function () use ($validated, $client) {
            $locInput = array_map(fn($v) => is_string($v) ? trim($v) : $v, $validated['location']);
            $where = Arr::only($locInput, ['calle','numero','colonia','municipio','estado','codigo_postal']);
            $values = [
                'latitud'  => $locInput['latitud']  ?? null,
                'longitud' => $locInput['longitud'] ?? null,
            ];

            $location = Location::firstOrCreate($where, $values);

            if (($location->latitud === null && !empty($locInput['latitud'])) ||
                ($location->longitud === null && !empty($locInput['longitud']))) {
                $location->latitud  = $locInput['latitud']  ?? $location->latitud;
                $location->longitud = $locInput['longitud'] ?? $location->longitud;
                $location->save();
            }

            $raw = (string)($validated['price_list_id'] ?? '');
            $parts = array_values(array_filter(
                array_map(fn($s) => trim($s), explode(',', $raw)),
                fn($s) => $s !== ''
            ));
            $priceListJson = json_encode($parts, JSON_UNESCAPED_UNICODE);

            $client->update([
                'name'          => $validated['name'],
                'telefono_contacto' => $validated['telefono_contacto'],
                'client_number' => $validated['client_number'],
                'vendor_number' => $validated['vendor_number'] ?? null,
                'email'         => $validated['email'] ?? null,
                'max_discount'  => $validated['max_discount'] ?? null,
                'location_id'   => $location->id,
                'price_list_id' => $priceListJson,
            ]);

            return response()->json([
                'ok'   => true,
                'data' => $client->load('location'),
            ]);
        });
    }

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
