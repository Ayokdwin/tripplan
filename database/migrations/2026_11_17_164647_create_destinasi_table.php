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
        Schema::create('destinasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kota')->constrained('kota')->onDelete('cascade');
            $table->string('nama');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->decimal('harga_tiket', 10, 2);
            $table->timestamp('jam_buka');
            $table->timestamp('jam_tutup');
            $table->timestamp('durasi_kunjungan');
            $table->decimal('rating', 2, 1);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi');
    }
};
