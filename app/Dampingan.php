<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dampingan extends Model
{
    protected $table = 'dampingan';

    protected $fillable = ['provinsi_id', 'kabupaten_id', 'kecamatan_id', 'desa_id', 'tahun'];

    public function provinsi()
    {
        return $this->belongsTo('App\Wilayah\Provinsi');
    }

    public function kabupaten()
    {
        return $this->belongsTo('App\Wilayah\Kabupaten');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Wilayah\Kecamatan');
    }
    public function desa()
    {
        return $this->belongsTo('App\Wilayah\Desa');
    }
}
