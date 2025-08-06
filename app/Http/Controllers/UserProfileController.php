<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'nullable|string',
            'telefono_contacto' => 'required|string',
            'location_id' => 'nullable|exists:locations,id',
        ]);

        $profile = UserProfile::create($validated);
        return response()->json($profile, 201);
    }

    public function update(Request $request, $id)
    {
        $profile = UserProfile::findOrFail($id);
        $profile->update($request->only(['nombre', 'apellido_paterno', 'apellido_materno', 'telefono_contacto', 'location_id']));
        return response()->json($profile);
    }
}
