<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InformasiPesanan extends Model
{
    protected $table = 'informasi_pesanans';
    protected $fillable = [
        'id_kapal',
        'nama_penumpang',
        'no_identitas',
        'kabin',
        'gender',
    ];

    public function kapal(): BelongsTo
    {
        return $this->belongsTo(Kapal::class, 'id_kapal','id_kapal');
    }
}
