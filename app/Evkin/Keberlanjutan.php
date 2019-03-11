<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Keberlanjutan extends Model
{
    protected $table = 'evkin_keberlanjutan';

    protected $fillable = ['poktan_id', 'dukungan_dd', 'ket_dukungan_dd', 'alokasi_dd', 'ket_alokasi_dd',
        'skpd_terkait', 'ket_skpd_terkait', 'institusi_lain', 'ket_institusi_lain', 'produksi_berjalan',
        'ket_produksi_berjalan', 'akses_pasar', 'ket_akses_pasar',
    ];
}
