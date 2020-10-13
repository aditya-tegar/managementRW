<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga03 extends Model
{
    protected $table = 'warga03';

    protected $fillable = [
        'no_ktp', 'nama_warga', 'alamat', 'no_telepon'
    ];

    public function iuran() {
        return $this->hasMany('App\Iuran03');
    }
}
