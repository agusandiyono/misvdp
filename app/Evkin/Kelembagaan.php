<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Kelembagaan extends Model
{
    protected $table = 'evkin_kelembagaan';

    protected $fillable = ['poktan_id', 'ketua_kelompok', 'ket_ketua_kelompok', 'bendahara', 'ket_bendahara', 'sekretaris',
            'ket_sekretaris', 'pemasaran', 'ket_pemasaran', 'peralatan', 'ket_peralatan', 'perencanaan', 'ket_perencanaan',
            'mkpp', 'ket_mkpp', 'mkp1', 'ket_mkp1', 'mkp2', 'ket_mkp2', 'mkst', 'ket_mkst', 'pemantau_pelaksanaan', 'ket_pemantau_pelaksanaan',
            'pengelola_lain', 'ket_pengelola_lain', 'peserta_musrembang', 'ket_peserta_musrembang',
    ];

}
