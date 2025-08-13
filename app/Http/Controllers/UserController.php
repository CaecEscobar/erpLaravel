<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|string|email|max:255|unique:users',
            'password'         => 'required|string|min:8',
            'telefono_contacto'=> 'required|string|max:20',
            'status'           => 'nullable|string',
            'vendor_number'    => 'nullable|string|unique:users,vendor_number',
            'name'        => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            // Crear usuario
            $user = User::create([
                'name'          => $validated['name'],
                'email'         => $validated['email'],
                'password'      => Hash::make($validated['password']),
                'vendor_number' => $validated['vendor_number'] ?? null,
                // Aquí podrías poner un role_id por defecto si aplica
                'role_id'       => 3, // por ejemplo, rol vendedor
            ]);

            // Crear perfil relacionado
            UserProfile::create([
                'user_id'          => $user->id,
                'nombre'           => $validated['name'] ?? $validated['name'],
                'apellido_paterno' => '',
                'apellido_materno' => '',
                'telefono_contacto'=> $validated['telefono_contacto'],
                'location_id'      => null, // si tienes la ubicación desde el front, la pones aquí
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Usuario creado correctamente',
                'data'    => $user->load('profile')
            ], 201);

        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error al crear el usuario',
                'error'   => $e->getMessage()
            ], 500);
        }
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
