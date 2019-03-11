<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Kemitraan extends Model
{
    protected $table = 'evkin_kemitraan';

    protected $fillable = ['poktan_id', 'kerjasama_mitra', 'ket_kerjasama_mitra', 'penyuluh_kecamatan', 'ket_penyuluh_kecamatan',
        'pendamping_desa', 'ket_pendamping_desa', 'kemitraan_kecamatan', 'ket_kemitraan_kecamatan', 'pendamping_kecamatan', 'ket_pendamping_kecamatan',
        'dpmd_kabupaten', 'ket_dpmd_kabupaten', 'kemitraan_lain', 'ket_kemitraan_lain',
    ];
}
