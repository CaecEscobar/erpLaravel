<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WarehousesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('warehouses')->insert([
            [
                'description' => 'Disponible CEDIS',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
