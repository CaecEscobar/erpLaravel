<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique(); // podría ser algo como ORD-0001
            $table->decimal('total_amount', 12, 2)->default(0);
            $table->text('observations')->nullable();
            $table->enum('status', ['saved', 'approved', 'closed'])->default('saved');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};