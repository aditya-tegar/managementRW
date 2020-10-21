<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iuran03 extends Model
{
    protected $table = 'iuran03';

    protected $fillable = [
        'nama_warga', 'nominal', 'alamat', 'jenis_iuran','keterangan'
    ];

    public function warga03()
    {
        return $this->belongsTo('App\Warga03');
    }
}
