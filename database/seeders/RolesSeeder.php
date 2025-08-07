<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
    ['name' => 'admin', 'created_at' => '2025-08-06 16:54:31', 'updated_at' => '2025-08-06 16:54:31'],
    ['name' => 'vendedor', 'created_at' => '2025-08-06 16:54:31', 'updated_at' => '2025-08-06 16:54:31'],
    ['name' => 'gerente', 'created_at' => '2025-08-06 16:54:31', 'updated_at' => '2025-08-06 16:54:31'],
    ['name' => 'facturacion', 'created_at' => '2025-08-06 16:54:31', 'updated_at' => '2025-08-06 16:54:31'],
    ['name' => 'empresa', 'created_at' => '2025-08-06 16:54:31', 'updated_at' => '2025-08-06 16:54:31']
]);
    }
}
