<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga01 extends Model
{
    protected $table = 'warga01';

    protected $fillable = [
        'no_ktp', 'nama_warga', 'alamat', 'no_telepon'
    ];

    public function iuran() {
        return $this->hasMany('App\Iuran01');
    }
}
