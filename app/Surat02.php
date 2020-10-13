<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat02 extends Model
{
    protected $table = 'surat02';

    protected $fillable = [
        'file','keterangan'
    ];
}
