<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('namaCustomer')->constrained('customers');
            $table->string('alamat');
            $table->foreignId('email')->constrained('customers');
            $table->string('noHP');
            $table->string('jenisLayanan');
            $table->decimal('harga');
            $table->foreignId('promo')->constrained('promos');
            $table->timestamp('tanggalPesanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
