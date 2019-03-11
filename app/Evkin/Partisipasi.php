<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Partisipasi extends Model
{
    protected $table = 'evkin_partisipasi';

    protected $fillable = ['poktan_id', 'perencanaan_partisipasi', 'ket_perencanaan_partisipasi', 'musdes', 'ket_musdes',
        'penetapan_rkpdes', 'ket_penetapan_rkpdes', 'musrembangdes', 'ket_musrembangdes', 'penyusunan_rkpdes', 'ket_penyusunan_rkpdes',
        'pelaksanaan_pemantauan', 'ket_pelaksanaan_pemantauan', 'pendanaan_usaha', 'ket_pendanaan_usaha', 'tenaga_usaha', 'ket_tenaga_usaha',
        'material_pendukung', 'ket_material_pendukung', 'partisipasi_lain', 'ket_partisipasi_lain',
    ];
}
