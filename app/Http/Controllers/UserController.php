<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
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
            'vendor_number'    => 'nullable|integer|unique:users,vendor_number',
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
                        'name'            => $validated['name'],
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

    public function importVendedores(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        $roleIdFixed   = 3;
        $statusDefault = 'activo';

        $path = $request->file('file')->getRealPath();
        $spreadsheet = IOFactory::load($path);

        // 1) Primera hoja
        $sheet = $spreadsheet->getSheet(0);
        $rows  = $sheet->toArray(null, true, true, true);
        if (count($rows) < 2) {
            return response()->json(['success'=>false,'message'=>'La hoja 1 no contiene datos.'], 422);
        }

        // 2) Normalizar encabezados (fila 1)
        $headerRow = $rows[1];
        $headers = [];
        foreach ($headerRow as $col => $title) {
            $norm = mb_strtolower(trim((string)$title), 'UTF-8');
            $norm = str_replace(['á','é','í','ó','ú','ñ'], ['a','e','i','o','u','n'], $norm);
            $norm = preg_replace('/\s+/', ' ', $norm);
            $headers[$norm] = $col; // 'correo' => 'C'
        }

        // 3) Mapear columnas requeridas
        $colVendor   = $headers['clave de vendedor'] ?? $headers['clave de vendedor '] ?? null;
        $colNombre   = $headers['nombre de vendedor'] ?? $headers['nombre'] ?? null;
        $colCorreo   = $headers['correo'] ?? $headers['email'] ?? null;
        $colPass     = $headers['contrasena'] ?? $headers['contraseña'] ?? $headers['password'] ?? null;
        $colTelefono = $headers['telefono'] ?? $headers['telefono '] ?? $headers['telefono de contacto'] ?? null;

        foreach ([
            'Clave de vendedor' => $colVendor,
            'Nombre de Vendedor' => $colNombre,
            'Correo' => $colCorreo,
            'Contraseña' => $colPass,
            'Telefono' => $colTelefono,
        ] as $label => $col) {
            if (!$col) {
                return response()->json([
                    'success'=>false,
                    'message'=>"No se encontró la columna requerida: {$label} en la hoja 1."
                ], 422);
            }
        }

        $report = ['created'=>0,'updated'=>0,'skipped'=>0,'errors'=>[]];

        // 4) Filas de datos
        $maxR = count($rows);
        for ($r = 2; $r <= $maxR; $r++) {
            $row = $rows[$r] ?? null;
            if (!$row) { $report['skipped']++; continue; }

            $vendorNumber = trim((string)($row[$colVendor]   ?? ''));
            $name         = trim((string)($row[$colNombre]   ?? ''));
            $email        = trim((string)($row[$colCorreo]   ?? ''));
            $passwordRaw  = (string)($row[$colPass]          ?? '');
            $telefono     = trim((string)($row[$colTelefono] ?? ''));

            // Saltar fila vacía
            if ($vendorNumber === '' && $name === '' && $email === '' && $telefono === '') {
                $report['skipped']++; continue;
            }

            // vendor_number es requerido y numérico
            if ($vendorNumber === '' || !ctype_digit(preg_replace('/\D/','', $vendorNumber))) {
                $report['errors'][] = ['row'=>$r,'vendor_number'=>$vendorNumber,'message'=>'vendor_number inválido/ vacío'];
                $report['skipped']++; continue;
            }
            $vendorNumber = (int)$vendorNumber;

            // Valida campos base (para create/update)
            $baseData = [
                'name'              => $name,
                'email'             => $email,
                'telefono_contacto' => $telefono,
            ];
            $v = Validator::make($baseData, [
                'name'              => 'required|string|max:255',
                'email'             => 'required|string|email|max:255',
                'telefono_contacto' => 'required|string|max:20',
            ]);
            if ($v->fails()) {
                $report['errors'][] = ['row'=>$r,'vendor_number'=>$vendorNumber,'message'=>$v->errors()->first()];
                $report['skipped']++; continue;
            }

            DB::beginTransaction();
            try {
                // Buscar por vendor_number (regla de negocio principal)
                $user = User::where('vendor_number', $vendorNumber)->first();

                if ($user) {
                    // UPDATE: email debe ser único para otros usuarios
                    $emailTaken = User::where('email', $email)->where('id', '!=', $user->id)->exists();
                    if ($emailTaken) {
                        throw new \RuntimeException("El email {$email} ya está en uso por otro usuario.");
                    }

                    $user->fill([
                        'name'          => $name,
                        'email'         => $email,
                        'role_id'       => $roleIdFixed,
                        'status'        => $statusDefault,
                        // 'vendor_number' no cambia (es la clave)
                    ]);

                    // Actualizar password solo si viene
                    if (!empty($passwordRaw)) {
                        $pwdVal = Validator::make(['password'=>$passwordRaw], ['password'=>'string|min:8']);
                        if ($pwdVal->fails()) {
                            throw new \RuntimeException($pwdVal->errors()->first());
                        }
                        $user->password = Hash::make($passwordRaw);
                    }

                    $user->save();

                    // Profile
                    $user->profile()->updateOrCreate(
                        ['user_id' => $user->id],
                        [
                            'name'              => $name,         // si tu tabla aún usa 'nombre', cámbialo aquí
                            'telefono_contacto' => $telefono,
                            'location_id'       => null,
                        ]
                    );

                    DB::commit();
                    $report['updated']++;
                } else {
                    // CREATE: email único
                    $emailTaken = User::where('email', $email)->exists();
                    if ($emailTaken) {
                        throw new \RuntimeException("El email {$email} ya está en uso.");
                    }

                    // password requerido en creación
                    $pwdVal = Validator::make(['password'=>$passwordRaw], ['password'=>'required|string|min:8']);
                    if ($pwdVal->fails()) {
                        throw new \RuntimeException($pwdVal->errors()->first());
                    }

                    $user = User::create([
                        'name'          => $name,
                        'email'         => $email,
                        'password'      => Hash::make($passwordRaw),
                        'vendor_number' => $vendorNumber,
                        'role_id'       => $roleIdFixed,
                        'status'        => $statusDefault,
                    ]);

                    $user->profile()->create([
                        'name'              => $name,          // si tu tabla aún usa 'nombre', cámbialo aquí
                        'telefono_contacto' => $telefono,
                        'location_id'       => null,
                    ]);

                    DB::commit();
                    $report['created']++;
                }
            } catch (\Throwable $e) {
                DB::rollBack();
                $report['errors'][] = [
                    'row'           => $r,
                    'vendor_number' => $vendorNumber,
                    'message'       => $e->getMessage(),
                ];
                $report['skipped']++;
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Importación finalizada.',
            'summary' => $report,
        ]);
    }
}
