<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_number')->unique();
            $table->foreignId('vendor_number')->nullable()->onDelete('set null');
            $table->foreignId('location_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('max_discount', 5, 2)->nullable()->default(0);
            $table->json('price_list_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('clients');
    }
};