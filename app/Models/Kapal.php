<?php

// app/Models/Kapal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kapal extends Model
{
    use HasFactory;

    protected $table = 'kapals';
    
    // public function jadwal(): BelongsTo
    // {
    //     return $this->belongsTo(Jadwal::class, 'id_kapal', 'id_jadwal_kapal'); 
    // }
    public function tiket(): HasMany
    {
        return $this->hasMany(Tiket::class, 'id_tiket', 'id_kapal'); 
    }
}


