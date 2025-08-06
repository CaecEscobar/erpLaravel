<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // antes llamado partida
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->string('unit_measure'); // corregido el typo (antes "meassure")
            $table->decimal('unit_price', 10, 2);
            $table->foreignId('warehouse_id')->constrained()->onDelete('cascade');
            $table->boolean('is_active')->default(true); // en lugar de "status"
            $table->json('price_list_id')->nullable(); // para [1, "gob", 97]
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};