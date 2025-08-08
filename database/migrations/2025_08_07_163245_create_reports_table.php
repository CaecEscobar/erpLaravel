<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_number'); // Relación con users.vendor_number
            $table->string('zone')->nullable();
            $table->decimal('quota', 15, 2)->default(0);
            $table->integer('orders')->default(0);
            $table->decimal('invoiced', 15, 2)->default(0); // Facturado
            $table->decimal('freights', 15, 2)->default(0); // Fletes
            $table->decimal('credit_notes', 15, 2)->default(0); // Notas de Crédito
            $table->decimal('net_amount', 15, 2)->default(0); // Importe Neto
            $table->decimal('backorder', 15, 2)->default(0); // Backorder
            $table->decimal('progress', 5, 2)->default(0); // Avance Real (%)
            $table->timestamps();

            $table->foreign('vendor_number')
                  ->references('vendor_number')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
}