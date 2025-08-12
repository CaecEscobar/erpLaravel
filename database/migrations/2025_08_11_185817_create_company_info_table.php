<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();

            // Datos principales
            $table->string('name');                         // Nombre comercial
            $table->string('razon_social')->nullable();                 // Nombre legal
            $table->string('rfc', 13)->nullable();             // RFC (13 para moral, 12 para física)
            $table->string('location')->nullable();                     // Dirección completa (no relacionada)
            $table->string('email')->nullable();            // Correo (opcional)
            $table->string('contact', 30)->nullable();      // Teléfono (opcional)

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_info');
    }
};
