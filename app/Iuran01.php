<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iuran01 extends Model
{
    protected $table = 'iuran01';

    protected $fillable = [
        'nama_warga', 'nominal', 'jenis_iuran', 'alamat','keterangan'
    ];

    public function warga01()
    {
        return $this->belongsTo('App\Warga01');
    }
}
