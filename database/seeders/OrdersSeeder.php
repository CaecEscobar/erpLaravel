<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
DB::table('orders')->insert([
    ['client_id' => 9, 'user_id' => 2, 'total_amount' => 4223.4, 'observations' => 'Cotización previa', 'folio' => 'ORD-1000', 'order' => 'OC-001', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 4, 'user_id' => 4, 'total_amount' => 3284.71, 'observations' => 'Urgente', 'folio' => 'ORD-1001', 'order' => 'OC-002', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 7, 'user_id' => 5, 'total_amount' => 1654.86, 'observations' => 'Cliente frecuente', 'folio' => 'ORD-1002', 'order' => 'OC-003', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 1, 'user_id' => 1, 'total_amount' => 2736.73, 'observations' => '', 'folio' => 'ORD-1003', 'order' => 'OC-004', 'status' => 'approved', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 6, 'user_id' => 5, 'total_amount' => 2497.14, 'observations' => 'Cotización previa', 'folio' => 'ORD-1004', 'order' => 'OC-005', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 3, 'user_id' => 2, 'total_amount' => 2939.97, 'observations' => '', 'folio' => 'ORD-1005', 'order' => 'OC-006', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 2, 'user_id' => 1, 'total_amount' => 3128.7, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1006', 'order' => 'OC-007', 'status' => 'closed', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 8, 'user_id' => 1, 'total_amount' => 3142.09, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1007', 'order' => 'OC-008', 'status' => 'saved', 'created_at' => now(), 'updated_at' => now()],
    ['client_id' => 9, 'user_id' => 4, 'total_amount' => 1114.65, 'observations' => 'Cotización previa', 'folio' => 'ORD-1008', 'order' => 'OC-009', 'status' => 'approved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['client_id' => 6, 'user_id' => 5, 'total_amount' => 4463.66, 'observations' => 'Entregar antes del viernes', 'folio' => 'ORD-1009', 'order' => 'OC-010', 'status' => 'approved', 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16']
]);
    }
}
