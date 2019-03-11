<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'evkin_kegiatan';

    protected $fillable = ['poktan_id', 'pelaksanaan_teknik', 'ket_pelaksanaan_teknik', 'sdm_anjuran', 'ket_sdm_anjuran', 
            'keuangan_anjuran', 'ket_keuangan_anjuran', 'sarana_anjuran', 'ket_sarana_anjuran',
            'anjuran_lain', 'ket_anjuran_lain', 'komoditi_unggulan', 'komoditi_lain', 'panen_sebelum', 'ket_panen_sebelum',
            'hasil_panen_sebelum', 'satuan_hasil_panen_sebelum', 'ket_hasil_panen_sebelum', 'harga_penjualan_sebelum', 'satuan_harga_penjualan_sebelum',
            'ket_harga_penjualan_sebelum', 'panen_setelah', 'ket_panen_setelah', 'hasil_panen_setelah', 'satuan_hasil_panen_setelah',
            'ket_hasil_panen_setelah', 'harga_penjualan_setelah', 'satuan_harga_penjualan_setelah', 'ket_harga_penjualan_setelah',
    ];
}
