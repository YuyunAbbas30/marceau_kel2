<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_informasi')->constrained('informasi_pesanans', 'id_informasi');  
            // $table->enum('metode_pembayaran', ['mandiri', 'bri', 'bsi']); 
            $table->enum('status_pembayaran', ['pending', 'selesai']); 
            $table->timestamps();                    
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
