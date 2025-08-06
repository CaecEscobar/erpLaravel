<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // vendedor asignado
            $table->foreignId('location_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name');
            $table->decimal('max_discount', 5, 2)->default(0); // ejemplo: 15.00 %
            $table->json('price_list_id'); // ejemplo: [1, "gob", 97]
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('clients');
    }
};