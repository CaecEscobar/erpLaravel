<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyInfoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('company_info')->insert([
            'name'         => 'Fortec',
            'razon_social' => '',
            'rfc'          => '',
            'location'     => '',
            'email'        => '',
            'contact'      => '',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
