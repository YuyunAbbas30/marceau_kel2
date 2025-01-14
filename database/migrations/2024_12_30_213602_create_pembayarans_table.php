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
            $table->foreignId('id_tiket')->constrained('tikets', 'id_tiket');  
            // $table->foreignId('id_informasi')->constrained('informasis', 'id_informasi');  
            $table->decimal('pembayaran', 10, 3);   
            $table->enum('metode_pembayaran', ['mandiri', 'bri', 'bsi']); 
            $table->enum('status_pembayaran', ['pending', 'selesai', 'gagal']); 
            $table->timestamps();                    
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
