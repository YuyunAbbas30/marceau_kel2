<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id('id_user');                    
            $table->string('username', 50);           
            $table->string('password', 100);          
            $table->string('email', 100);             
            $table->enum('gender', ['laki-laki', 'perempuan']);             
            $table->integer('no_identitas')->nullable(); //nanti buat untuk dia boleh kosong         
            $table->date('tanggal_lahir');             
            $table->integer('no_tlp');                 
            $table->binary('foto')->nullable();        

            $table->timestamps();                     
            $table->unique('email');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
