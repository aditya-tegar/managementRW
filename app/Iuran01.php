<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iuran01 extends Model
{
    protected $table = 'iuran01';

    protected $fillable = [
        'nama_warga', 'nominal', 'alamat','keterangan'
    ];

    public function warga01()
    {
        return $this->belongsTo('App\Warga01');
    }
}
