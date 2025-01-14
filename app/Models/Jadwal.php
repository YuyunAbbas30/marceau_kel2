<?php

// app/Models/Jadwal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    // protected $table = 'jadwal_kapal';

    /**
     * Relasi Many to One: Jadwal milik satu Kapal
     */
    // public function kapal(): HasMany
    // {
    //     return $this->hasMany(Kapal::class, 'id_kapal', 'id_jadwal_kapal'); 
    // }
    // // public function kapal(): BelongsTo
    // // {
    // //     return $this->belongsTo(Kapal::class); 
    // // }
    // public function tiket(): BelongsTo
    // {
    //     return $this->belongsTo(Tiket::class, 'id_jadwal_kapal', 'id_tiket'); 
    // }
}

