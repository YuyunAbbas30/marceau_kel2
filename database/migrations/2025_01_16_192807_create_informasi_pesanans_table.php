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
        Schema::create('informasi_pesanans', function (Blueprint $table) {
            $table->id('id_informasi');
            $table->foreignId('id_kapal')->constrained('kapals', 'id_kapal');
            $table->string('nama_penumpang', 200);
            $table->string('no_identitas', 100)->nullable();
            $table->string('kabin', 100);
            $table->enum('gender', ['laki-laki', 'Perempuan']);
            $table->timestamps();    

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pesanans');
    }
};
