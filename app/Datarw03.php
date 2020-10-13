<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datarw03 extends Model
{
    protected $table = 'datarw03';

    protected $fillable = [
        'no_ktp', 'nama_warga', 'alamat', 'no_telepon'
    ];

    public function iuran() {
        return $this->hasMany('App\Iuranrw03');
    }
}
