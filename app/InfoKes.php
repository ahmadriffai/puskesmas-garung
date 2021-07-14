<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoKes extends Model
{
    //
    protected $table = 'info_kes';
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar'
    ];
}
