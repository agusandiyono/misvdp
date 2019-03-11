<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    protected $fillable = ['provinsi_id', 'provinsi', 'kabupaten_id', 'kabupaten', 'kecamatan_id', 'kecamatan', 'desa_id', 'desa',
                            'nama_kontak', 'no_hp', 'sektor', 'jenis_ttg', 'komoditas', 'nama_ttg', 'harga', 'deskripsi', 'foto', 'user_id'
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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

