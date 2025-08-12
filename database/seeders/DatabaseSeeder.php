<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RolesSeeder::class,
            UserAndProfileSeeder::class,
            PriceListSeeder::class,
            // ClientsSeeder::class,
            // WarehousesSeeder::class,
            // ProductsSeeder::class,
            // ProductsDetailsSeeder::class,
            // ProductWarehouseSeeder::class,
            // OrdersSeeder::class,
            // OrderProductsSeeder::class,
            CompanyInfoSeeder::class,
        ]);
    }
}
