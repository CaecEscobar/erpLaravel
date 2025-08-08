<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique(); 
            $table->string('order');
            $table->integer('client_number');
            $table->integer('vendor_number');
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->text('observations')->nullable();
            $table->enum('status', ['guardado', 'enviado', 'pendiente', 'aprobado', 'cerrado', 'cancelado'])->default('guardado');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};