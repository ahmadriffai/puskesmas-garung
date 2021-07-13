<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    //
    protected $table = 'antrian';
    protected $primaryKey = 'nomer_antrian';

    protected $fillable = [
        'nomer_antrian',
        'nama'
    ];
}
