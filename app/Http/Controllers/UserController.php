<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Si quieres todo sin paginar:
    public function index()
    {
        // Selecciona solo campos necesarios
        $users = User::select('id','name','email','vendor_number')->where('id', '!=', 9999)->get();
        return response()->json($users);
    }

    // (opcional) Con paginación:
    // public function index(Request $request) {
    //   $perPage = (int)($request->query('per_page', 15));
    //   return User::select('id','name','email','vendor_number','created_at')->paginate($perPage);
    // }

    public function show($id)
    {
        // Buscar usuario excepto el 9999
        $user = User::select('id','name','email','vendor_number','created_at')
            ->where('id', '!=', 9999)
            ->findOrFail($id);

        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        // Evitar modificar el usuario con ID 9999
        if ($id == 9999) {
            return response()->json(['message' => 'No se puede modificar este usuario'], 403);
        }

        $user = User::findOrFail($id);

        // Validar datos recibidos
        $validated = $request->validate([
            'name'          => 'sometimes|string|max:255',
            'email'         => 'sometimes|email|unique:users,email,' . $id,
            'vendor_number' => 'sometimes|numeric',
            'password'      => 'nullable|string|min:6'
        ]);

        // Si viene contraseña, encriptarla
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        // Actualizar usuario
        $user->update($validated);

        return response()->json([
            'message' => 'Usuario actualizado correctamente',
            'user' => $user
        ]);
    }
}
