<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iuranrw03 extends Model
{
    protected $table = 'iuranrw03';

    protected $fillable = [
        'nama_warga', 'nominal', 'alamat','keterangan'
    ];

    public function datarw03()
    {
        return $this->belongsTo('App\Datarw03');
    }
}

