<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evkin extends Model
{
    
    protected $table = 'status_evkin';

    protected $fillable = ['poktan_id', 'status', 'gelombang', 'tanggal_wawancara', 'kelembagaan_id', 'kelembagaan', 'pertemuan_id',
                'dinamika_id', 'dinamika', 'kelembagaan_id', 'administrasi_id', 'kegiatan_id', 'kegiatan', 'partisipasi_id', 'partisipasi',
                'kemitraan_id', 'kemitraan', 'keberlanjutan_id', 'keberlanjutan', 'user_id',
    ];

    public function poktan()
    {
        return $this->hasMany('App\Poktan', 'id');
        // return $this->belongsTo('App\Poktan', 'id');
    }
}
