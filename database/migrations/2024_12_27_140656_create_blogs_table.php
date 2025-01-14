<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. artinya fungsi up akan dijalankan ketika kita menjalankan komen php artisan migrate
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. ketika kita menjalankan function artisan rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
