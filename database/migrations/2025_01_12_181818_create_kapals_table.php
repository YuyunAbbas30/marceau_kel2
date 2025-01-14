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
        Schema::create('kapals', function (Blueprint $table) {
            $table->id('id_kapal');
            $table->foreignId('id_tiket')->constrained('tikets', 'id_tiket');
            $table->string('nama_kapal', 100); 
            $table->string('kapasitas', 255); 
            $table->dateTime('waktu_keberangkatan');
            $table->dateTime('waktu_sampai');
            $table->string('lokasi_keberangkatan', 100);
            $table->string('lokasi_tujuan', 100);
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kapals');
    }
};
