<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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
        return in_array($role, ['admin', 'developer'], true);
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
            'user_id' => 'required|exists:users,id',
            'location_id' => 'nullable|exists:locations,id',
            'name' => 'required|string',
            'max_discount' => 'numeric',
            'price_list_id' => 'nullable|json',
        ]);

        $client = Client::create($validated);
        return response()->json($client, 201);
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
