<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat01 extends Model
{
    protected $table = 'surat01';

    protected $fillable = [
        'file','keterangan'
    ];
}
