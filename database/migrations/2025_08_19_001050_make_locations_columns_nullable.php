<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->string('calle')->nullable()->change();
            $table->string('numero')->nullable()->change();
            $table->string('colonia')->nullable()->change();
            $table->string('municipio')->nullable()->change();
            $table->string('estado')->nullable()->change();
            $table->string('codigo_postal')->nullable()->change();
        });
    }

    public function down(): void
    {
        DB::table('locations')->whereNull('calle')->update(['calle' => '']);
        DB::table('locations')->whereNull('numero')->update(['numero' => '']);
        DB::table('locations')->whereNull('colonia')->update(['colonia' => '']);
        DB::table('locations')->whereNull('municipio')->update(['municipio' => '']);
        DB::table('locations')->whereNull('estado')->update(['estado' => '']);
        DB::table('locations')->whereNull('codigo_postal')->update(['codigo_postal' => '']);

        Schema::table('locations', function (Blueprint $table) {
            $table->string('calle')->nullable(false)->change();
            $table->string('numero')->nullable(false)->change();
            $table->string('colonia')->nullable(false)->change();
            $table->string('municipio')->nullable(false)->change();
            $table->string('estado')->nullable(false)->change();
            $table->string('codigo_postal')->nullable(false)->change();
        });
    }
};
