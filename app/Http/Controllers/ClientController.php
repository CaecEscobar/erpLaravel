<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::with('location', 'user')->get();
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
