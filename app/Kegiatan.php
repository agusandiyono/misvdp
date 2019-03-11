<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{

    protected $table = 'kegiatan';

    protected $fillable = [
        'user_id', 'jenis', 'nama', 'title', 'tanggal', 'provinsi_id', 'kabupaten_id',
        'kecamatan_id', 'desa_id', 'deskripsi', 'sasaran', 'jumlah_lk', 'jumlah_p', 'jumlah_paham',
        'alasan_paham', 'masalah', 'saran', 'rencana_tindak_lanjut', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenis()
    {
        return $this->belongsTo('App\JenisKegiatan');
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
