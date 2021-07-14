<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model
{
    //
    protected $table = 'pasien';
    protected $primaryKey = 'nik';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'no_hp',
        'id_layanan',
        'keluhan'
    ];

    public function antrian()
    {
        return $this->belongsTo('App\Antrian', 'nik');
    }

}
