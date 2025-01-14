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
        Schema::create('riwayat_pesanans', function (Blueprint $table) {
            $table->id('id_riwayat');            
            $table->foreignId('id_pengguna')->constrained('penggunas', 'id_user'); 
            $table->foreignId('id_tiket')->constrained('tikets', 'id_tiket');  
            $table->dateTime('tanggal_pemesanan');   
            $table->timestamps();                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pesanans');
    }
};
