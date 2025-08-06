<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        return Warehouse::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $warehouse = Warehouse::create($validated);
        return response()->json($warehouse, 201);
    }

    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($request->only(['description', 'is_active']));
        return response()->json($warehouse);
    }

    public function destroy($id)
    {
        Warehouse::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
