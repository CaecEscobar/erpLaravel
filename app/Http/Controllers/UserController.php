<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Si quieres todo sin paginar:
    public function index(Request $request)
    {
        $validated = $request->validate([
            'role_id' => 'nullable|integer|in:2,3,4,5,6',
        ]);

        $query = User::with(['profile:id,user_id,telefono_contacto','role:id,name']) // ← carga el perfil
            ->select('id','name','email','vendor_number','created_at','status','role_id')
            ->where('id', '!=', 9999);

        if (isset($validated['role_id'])) {
            $query->where('role_id', $validated['role_id']); // ej. 3 = Vendedor
        }

        return response()->json($query->get());
    }

    public function show($id)
    {
        $user = User::with(['profile:id,user_id,telefono_contacto']) 
            ->select('id','name','email','vendor_number','created_at','status','role_id')
            ->findOrFail($id);

        return response()->json([
            'id'                => $user->id,
            'name'              => $user->name,
            'email'             => $user->email,
            'vendor_number'     => $user->vendor_number,
            'role_id'           => $user->role_id,
            'role_name'         => $user->role->name,
            'status'            => $user->status,
            'created_at'        => $user->created_at,
            'telefono_contacto' => $user->profile->telefono_contacto ?? null,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|string|email|max:255|unique:users',
            'password'         => 'required|string|min:8',
            'telefono_contacto'=> 'required|string|max:20',
            'status'           => 'nullable|string',
            'role_id'          => 'required|integer',
            'vendor_number'    => 'nullable|string|unique:users,vendor_number',
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'name'          => $validated['name'],
                'email'         => $validated['email'],
                'password'      => Hash::make($validated['password']),
                'vendor_number' => $validated['vendor_number'] ?? null,
                'role_id'       => $validated['role_id'],
                'status'        => $request->input('status'),
            ]);

            $user->profile()->create([
                'nombre'            => $validated['name'],
                'apellido_paterno'  => '',
                'apellido_materno'  => '',
                'telefono_contacto' => $validated['telefono_contacto'],
                'location_id'       => null,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Usuario creado correctamente',
                'data'    => $user->load('profile'),
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
        $user = User::with('profile')->findOrFail($id);

        $incomingRoleId = $request->input('role_id', $user->role_id);

        $validated = $request->validate([
            'name'              => 'sometimes|required|string|max:255',
            'email'             => ['sometimes','required','string','email','max:255', Rule::unique('users','email')->ignore($id)],
            'password'          => 'sometimes|nullable|string|min:8',
            'telefono_contacto' => 'sometimes|required|string|max:20',
            'status'            => ['sometimes','string', Rule::in(['activo','inactivo'])],
            'role_id'           => 'sometimes|integer',
            'vendor_number'     => [
                'sometimes','nullable','integer',
                Rule::unique('users','vendor_number')->ignore($id),
                Rule::requiredIf((int)$incomingRoleId === 3), // requerido si rol=3 (Vendedor)
            ],
        ]);

        DB::beginTransaction();
        try {
            if (array_key_exists('password', $validated)) {
                if ($validated['password']) {
                    $validated['password'] = Hash::make($validated['password']);
                } else {
                    unset($validated['password']);
                }
            }

            $user->fill(collect($validated)->except(['telefono_contacto'])->toArray());
            $user->save();

            if ($request->has('telefono_contacto')) {
                $user->profile()->updateOrCreate(
                    ['user_id' => $user->id],
                    [
                        'telefono_contacto' => $validated['telefono_contacto'],
                        'nombre'            => $validated['name'] ?? ($user->profile->nombre ?? $user->name),
                    ]
                );
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Usuario actualizado correctamente',
                'data'    => $user->load('profile'),
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error al actualizar el usuario',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
