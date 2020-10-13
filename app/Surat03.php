<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat03 extends Model
{
    protected $table = 'surat03';

    protected $fillable = [
        'file','keterangan'
    ];
}
