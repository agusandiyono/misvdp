<?php

namespace App\Wilayah;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    protected $fillable = [
        'nama', 'status'
    ];

    public function poktan()
    {
        return $this->hasMany('App\Poktan');
    }
    public function kegiatan()
    {
        return $this->hasMany('App\Kegiatan');
    }
    public function dampingan()
    {
        return $this->hasMany('App\Dampingan');
    }

    public function iku()
    {
        return $this->hasMany('App\Iku');
    }
}
