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

        User::factory()->create([
            'id' => 9999,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '1234qwer'
        ]);

        $this->call([
            RolesSeeder::class,
            UserAndProfileSeeder::class,
            PriceListSeeder::class,
            ClientsSeeder::class,
            WarehousesSeeder::class,
            ProductsSeeder::class,
            ProductsDetailsSeeder::class,
            ProductWarehouseSeeder::class,
            OrdersSeeder::class,
            OrderProductsSeeder::class,
        ]);
    }
}
