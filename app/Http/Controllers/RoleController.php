<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::with('user')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $role = Role::create($validated);
        return response()->json($role, 201);
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
