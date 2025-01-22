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
    protected $primaryKey = 'id_kapal';
    
    protected $fillable = [
        'nama_kapal',
        'kapasitas',
        'kabin',
        'harga',
        'waktu_keberangkatan',
        'waktu_sampai',
        'lokasi_keberangkatan',
        'lokasi_tujuan',
    ];

    public function informasiPesanan(): HasMany
    {
        return $this->hasMany(InformasiPesanan::class, 'id_kapal', 'id_kapal'); 
    }
}


