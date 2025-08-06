<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return Location::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'calle' => 'required|string',
            'numero' => 'required|string',
            'colonia' => 'required|string',
            'municipio' => 'required|string',
            'estado' => 'required|string',
            'codigo_postal' => 'required|string',
            'latitud' => 'nullable|numeric',
            'longitud' => 'nullable|numeric',
        ]);

        $location = Location::create($validated);
        return response()->json($location, 201);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        return response()->json($location);
    }

    public function destroy($id)
    {
        Location::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
