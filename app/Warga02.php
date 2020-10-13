<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga02 extends Model
{
    protected $table = 'warga02';

    protected $fillable = [
        'no_ktp', 'nama_warga', 'alamat', 'no_telepon'
    ];

    public function iuran() {
        return $this->hasMany('App\Iuran02');
    }
}
