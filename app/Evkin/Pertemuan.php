<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'evkin_pertemuan';

    protected $fillable = ['poktan_id', 'pertemuan', 'ket_pertemuan', 'pelaksanaan_pertemuan', 'ket_pelaksanaan_pertemuan',
        'frekuensi_pertemuan', 'ket_frekuensi_pertemuan', 'peserta_lk', 'peserta_p', 'ket_peserta', 'perencanaan_kegiatan', 
        'ket_perencanaan_kegiatan','pelaksanaan_kegiatan', 'ket_pelaksanaan_kegiatan', 'masalah_pertemuan' , 'ket_masalah_pertemuan', 'bahasan_lain',
        'ket_bahasan_lain',
    ];
}
