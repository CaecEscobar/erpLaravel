<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
    ['client_id' => 9, 'user_id' => 2, 'total_amount' => 4223.4, 'observations' => 'Cotización previa', 'folio' => 'ORD-1000', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 4, 'user_id' => 4, 'total_amount' => 3284.71, 'observations' => 'Urgente', 'folio' => 'ORD-1001', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 7, 'user_id' => 5, 'total_amount' => 1654.86, 'observations' => 'Cliente frecuente', 'folio' => 'ORD-1002', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 1, 'user_id' => 1, 'total_amount' => 2736.73, 'observations' => '', 'folio' => 'ORD-1003', 'status' => 'approved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 6, 'user_id' => 5, 'total_amount' => 2497.14, 'observations' => 'Cotización previa', 'folio' => 'ORD-1004', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 3, 'user_id' => 2, 'total_amount' => 2939.97, 'observations' => '', 'folio' => 'ORD-1005', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 2, 'user_id' => 1, 'total_amount' => 3128.7, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1006', 'status' => 'closed', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 8, 'user_id' => 1, 'total_amount' => 3142.09, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1007', 'status' => 'saved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 9, 'user_id' => 4, 'total_amount' => 1114.65, 'observations' => 'Cotización previa', 'folio' => 'ORD-1008', 'status' => 'approved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 6, 'user_id' => 5, 'total_amount' => 4463.66, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1009', 'status' => 'approved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16']
]);
    }
}
