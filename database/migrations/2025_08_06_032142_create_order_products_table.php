<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('restrict');
            $table->integer('quantity');
            $table->string('unit_measure');
            $table->decimal('unit_price', 10, 2);
            $table->unsignedTinyInteger('discount')->default(0); // porcentaje: 0–100

            $table->decimal('subtotal', 12, 2);         // unit_price * quantity
            $table->decimal('discount_amount', 12, 2);  // (subtotal * discount / 100)
            $table->decimal('iva', 12, 2);              // (subtotal - discount_amount) * 0.16
            $table->decimal('total', 12, 2);            // subtotal - discount_amount + iva

            $table->boolean('is_active')->default(true); // <- Aquí
            
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('order_products');
    }
};