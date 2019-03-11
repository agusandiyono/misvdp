<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Dinamika extends Model
{
    protected $table = 'evkin_dinamika';

    protected $fillable = ['poktan_id', 'rencana_kerja', 'ket_rencana_kerja', 'bentuk_rk', 'ket_bentuk_rk', 'program_dd', 'ket_program_dd',
                            'tujuan_kelompok', 'ket_tujuan_kelompok', 'masalah_rk', 'ket_masalah_rk', 'rk_lain', 'ket_rk_lain', 'kegiatan_kelompok', 
                            'ket_kegiatan_kelompok', 'tindak_lanjut', 'ket_tindak_lanjut', 'tujuan_kegiatan', 'ket_tujuan_kegiatan',
                            'waktu_kegiatan', 'ket_waktu_kegiatan', 'peningkatan_usahatani', 'ket_peningkatan_usahatani', 'biaya', 'ket_biaya', 'penanggung_jawab', 
                            'ket_penanggung_jawab', 'kesesuaian_rk', 'ket_kesesuaian_rk', 'sdm', 'ket_sdm', 'kendala_keuangan', 
                            'ket_kendala_keuangan', 'sarana', 'ket_sarana', 'sebab_lain', 'ket_sebab_lain',
    ];
}
