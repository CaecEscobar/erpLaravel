<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_products')->insert([
    ['order_id' => 1, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 643.6, 'discount' => 5, 'subtotal' => 643.6, 'discount_amount' => 32.18, 'iva' => 97.83, 'total' => 709.25, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 1, 'product_id' => 9, 'quantity' => 5, 'unit_price' => 908.77, 'discount' => 10, 'subtotal' => 4543.85, 'discount_amount' => 454.38, 'iva' => 654.32, 'total' => 4743.79, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 1, 'product_id' => 1, 'quantity' => 7, 'unit_price' => 483.35, 'discount' => 5, 'subtotal' => 3383.45, 'discount_amount' => 169.17, 'iva' => 514.28, 'total' => 3728.56, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 2, 'product_id' => 8, 'quantity' => 5, 'unit_price' => 404.61, 'discount' => 0, 'subtotal' => 2023.05, 'discount_amount' => 0.0, 'iva' => 323.69, 'total' => 2346.74, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 2, 'product_id' => 5, 'quantity' => 6, 'unit_price' => 893.8, 'discount' => 0, 'subtotal' => 5362.8, 'discount_amount' => 0.0, 'iva' => 858.05, 'total' => 6220.85, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 2, 'product_id' => 1, 'quantity' => 10, 'unit_price' => 903.06, 'discount' => 15, 'subtotal' => 9030.6, 'discount_amount' => 1354.59, 'iva' => 1228.16, 'total' => 8904.17, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 3, 'product_id' => 1, 'quantity' => 6, 'unit_price' => 146.62, 'discount' => 0, 'subtotal' => 879.72, 'discount_amount' => 0.0, 'iva' => 140.76, 'total' => 1020.48, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 3, 'product_id' => 5, 'quantity' => 4, 'unit_price' => 454.06, 'discount' => 15, 'subtotal' => 1816.24, 'discount_amount' => 272.44, 'iva' => 247.01, 'total' => 1790.81, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 3, 'product_id' => 10, 'quantity' => 8, 'unit_price' => 533.61, 'discount' => 15, 'subtotal' => 4268.88, 'discount_amount' => 640.33, 'iva' => 580.57, 'total' => 4209.12, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 4, 'product_id' => 2, 'quantity' => 7, 'unit_price' => 254.22, 'discount' => 15, 'subtotal' => 1779.54, 'discount_amount' => 266.93, 'iva' => 242.02, 'total' => 1754.63, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 4, 'product_id' => 9, 'quantity' => 9, 'unit_price' => 754.47, 'discount' => 5, 'subtotal' => 6790.23, 'discount_amount' => 339.51, 'iva' => 1032.12, 'total' => 7482.84, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 4, 'product_id' => 3, 'quantity' => 2, 'unit_price' => 718.96, 'discount' => 10, 'subtotal' => 1437.92, 'discount_amount' => 143.79, 'iva' => 207.06, 'total' => 1501.19, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 5, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 336.57, 'discount' => 15, 'subtotal' => 673.14, 'discount_amount' => 100.97, 'iva' => 91.55, 'total' => 663.72, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 5, 'product_id' => 2, 'quantity' => 4, 'unit_price' => 683.63, 'discount' => 0, 'subtotal' => 2734.52, 'discount_amount' => 0.0, 'iva' => 437.52, 'total' => 3172.04, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 5, 'product_id' => 8, 'quantity' => 4, 'unit_price' => 100.17, 'discount' => 15, 'subtotal' => 400.68, 'discount_amount' => 60.1, 'iva' => 54.49, 'total' => 395.07, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 6, 'product_id' => 10, 'quantity' => 8, 'unit_price' => 542.15, 'discount' => 0, 'subtotal' => 4337.2, 'discount_amount' => 0.0, 'iva' => 693.95, 'total' => 5031.15, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 6, 'product_id' => 4, 'quantity' => 5, 'unit_price' => 510.43, 'discount' => 0, 'subtotal' => 2552.15, 'discount_amount' => 0.0, 'iva' => 408.34, 'total' => 2960.49, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 6, 'product_id' => 7, 'quantity' => 2, 'unit_price' => 691.58, 'discount' => 15, 'subtotal' => 1383.16, 'discount_amount' => 207.47, 'iva' => 188.11, 'total' => 1363.8, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 7, 'product_id' => 7, 'quantity' => 6, 'unit_price' => 370.64, 'discount' => 5, 'subtotal' => 2223.84, 'discount_amount' => 111.19, 'iva' => 338.02, 'total' => 2450.67, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 7, 'product_id' => 8, 'quantity' => 6, 'unit_price' => 862.54, 'discount' => 5, 'subtotal' => 5175.24, 'discount_amount' => 258.76, 'iva' => 786.64, 'total' => 5703.12, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 7, 'product_id' => 9, 'quantity' => 5, 'unit_price' => 646.98, 'discount' => 0, 'subtotal' => 3234.9, 'discount_amount' => 0.0, 'iva' => 517.58, 'total' => 3752.48, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 8, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 301.84, 'discount' => 0, 'subtotal' => 301.84, 'discount_amount' => 0.0, 'iva' => 48.29, 'total' => 350.13, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 8, 'product_id' => 9, 'quantity' => 4, 'unit_price' => 919.11, 'discount' => 5, 'subtotal' => 3676.44, 'discount_amount' => 183.82, 'iva' => 558.82, 'total' => 4051.44, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 8, 'product_id' => 8, 'quantity' => 9, 'unit_price' => 359.83, 'discount' => 10, 'subtotal' => 3238.47, 'discount_amount' => 323.85, 'iva' => 466.34, 'total' => 3380.96, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 9, 'product_id' => 7, 'quantity' => 2, 'unit_price' => 725.93, 'discount' => 0, 'subtotal' => 1451.86, 'discount_amount' => 0.0, 'iva' => 232.3, 'total' => 1684.16, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 9, 'product_id' => 5, 'quantity' => 9, 'unit_price' => 782.15, 'discount' => 0, 'subtotal' => 7039.35, 'discount_amount' => 0.0, 'iva' => 1126.3, 'total' => 8165.65, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 9, 'product_id' => 2, 'quantity' => 2, 'unit_price' => 203.89, 'discount' => 10, 'subtotal' => 407.78, 'discount_amount' => 40.78, 'iva' => 58.72, 'total' => 425.72, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 10, 'product_id' => 10, 'quantity' => 10, 'unit_price' => 974.45, 'discount' => 5, 'subtotal' => 9744.5, 'discount_amount' => 487.23, 'iva' => 1481.16, 'total' => 10738.43, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 10, 'product_id' => 5, 'quantity' => 9, 'unit_price' => 464.72, 'discount' => 0, 'subtotal' => 4182.48, 'discount_amount' => 0.0, 'iva' => 669.2, 'total' => 4851.68, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16'],
    ['order_id' => 10, 'product_id' => 2, 'quantity' => 7, 'unit_price' => 496.92, 'discount' => 0, 'subtotal' => 3478.44, 'discount_amount' => 0.0, 'iva' => 556.55, 'total' => 4034.99, 'is_active' => True, 'created_at' => '2025-08-06 16:55:16', 'updated_at' => '2025-08-06 16:55:16']
]);
    }
}
