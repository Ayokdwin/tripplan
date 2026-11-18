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
        Schema::create('itinerary_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_itinerary')->constrained('itinerary')->onDelete('cascade');
            $table->foreignId('id_destinasi')->constrained('destinasi')->onDelete('cascade');
            $table->integer('urutan');
            $table->integer('hari_ke');
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->decimal('jarak_dari_sebelumnya', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerary_item');
    }
};
