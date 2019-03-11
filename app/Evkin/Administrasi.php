<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    protected $table = 'evkin_administrasi';

    protected $fillable = ['poktan_id', 'papan_pengumuman', 'ket_papan_pengumuman', 'fungsi_papan_pengumuman',
        'ket_fungsi_papan_pengumuman', 'kondisi_papan_pengumuman', 'ket_kondisi_papan_pengumuman', 'kotak_saran', 'ket_kotak_saran',
        'fungsi_kotak_saran', 'ket_fungsi_kotak_saran', 'kondisi_kotak_saran', 'ket_kondisi_kotak_saran', 'buku_tamu', 'ket_buku_tamu',
        'buku_tamu', 'ket_buku_tamu', 'buku_anggota', 'ket_buku_anggota', 'notulensi_rapat', 'ket_notulensi_rapat', 'inventaris_barang', 'ket_inventaris_barang',
        'daftar_hadir_rapat', 'ket_daftar_hadir_rapat', 'buku_kas', 'ket_buku_kas', 'buku_bank', 'ket_buku_bank', 'sesuai_rpd', 'ket_sesuai_rpd',
        'bukti_sah', 'ket_bukti_sah', 'catat_transaksi', 'ket_catat_transaksi', 'kerapian_bukti', 'ket_kerapian_bukti', 'laporan', 'ket_laporan',
        'waktu_laporan_dd', 'ket_waktu_laporan_dd',

    ];
}
