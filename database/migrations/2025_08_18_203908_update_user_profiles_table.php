<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            // Elimina columnas
            $table->dropColumn(['apellido_paterno', 'apellido_materno']);

            // Cambia nombre de columna
            $table->renameColumn('nombre', 'name');
        });
    }

    public function down(): void
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            // Revertir cambios
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();

            $table->renameColumn('name', 'nombre');
        });
    }
};
