<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iuran02 extends Model
{
    protected $table = 'iuran02';

    protected $fillable = [
        'nama_warga', 'nominal', 'jenis_iuran', 'alamat','keterangan'
    ];

    public function warga02()
    {
        return $this->belongsTo('App\Warga02');
    }
}
