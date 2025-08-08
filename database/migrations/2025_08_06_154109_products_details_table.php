<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products_details', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->text('description')->nullable();
            $table->string('unit_measure');
            $table->string('unit_multiplier');
            $table->decimal('unit_price', 15, 2);
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('price_list_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products_details');
    }
};