<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiket extends Model
{
    use HasFactory;


    protected $table = 'tikets';

    /**
     * Relasi Many to One: Jadwal milik satu Kapal
     */
    // public function jadwal(): HasMany
    // {
    //     return $this->hasMany(Jadwal::class, 'id_jadwal_kapal', 'id_tiket'); 
    // }
    public function kapal(): BelongsTo
    {
        return $this->belongsTo(Kapal::class, 'id_tiket', 'id_kapal'); 
    }
}
