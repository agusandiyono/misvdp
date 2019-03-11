<?php

namespace App\Http\Controllers;

use App\Poktan;
use App\Evkin;
use App\Satuan;
use App\Komoditas;
use App\Evkin\Kelembagaan;
use App\Evkin\Dinamika;
use App\Evkin\Pertemuan;
use App\Evkin\Administrasi;
use App\Evkin\Kegiatan;
use App\Evkin\Partisipasi;
use App\Evkin\Kemitraan;
use App\Evkin\Keberlanjutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Poktan::latest()->with('evkin')->paginate();
        return view('evkin.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function tambah($id)
    {
        // $poktan = Poktan::where('no_poktan', $no_poktan);
        $poktan = Poktan::find($id);
        $satuan = Satuan::pluck('satuan', 'id');
        $komoditas = Komoditas::pluck('komoditas', 'id');
        return view('evkin.new', compact('poktan', 'satuan', 'komoditas'));
    }    

    
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poktan = $request->input('poktan_id');
        $gelombang = $request->input('gelombang');
        $this->validate($request, [
            // KELEMBAGAAN //
            'ketua_kelompok'  => 'required',
            'bendahara'  => 'required',
            'sekretaris'  => 'required',
            'pemasaran'  => 'required',
            'peralatan'  => 'required',
            'perencanaan'  => 'required',
            'mkpp'  => 'required',
            'mkp1'  => 'required',
            'mkp2'  => 'required',
            'mkst'  => 'required',
            'pemantau_pelaksanaan'  => 'required',
            'rencana_kerja'  => 'required',

            // DINAMIKA //
            'rencana_kerja'  => 'required',
                // 'program_dd'  => 'required',
                // 'tujuan_kelompok'  => 'required',
                // 'masalah_rk'  => 'required',
                // 'kegiatan_kelompok'  => 'required',
                // 'tindak_lanjut'  => 'required',
                // 'tujuan_kegiatan'  => 'required',
                // 'waktu_kegiatan'  => 'required',
                // 'peningkatan_usahatani'  => 'required',
                // 'biaya'  => 'required',
                // 'penanggung_jawab'  => 'required',
                // 'kesesuaian_rk'  => 'required',
                // 'sdm'  => 'required',
                // 'kendala_keuangan'  => 'required',
                // 'sarana'  => 'required',            

            // PERTEMUAN
            'pertemuan'  => 'required',
                // 'pelaksanaan_pertemuan'  => 'required',
                // 'frekuensi_pertemuan'  => 'required',
                // 'peserta_lk'  => 'required',
                // 'peserta_p'  => 'required',
                // 'perencanaan_kegiatan'  => 'required',
                // 'pelaksanaan_kegiatan'  => 'required',
                // 'masalah_pertemuan'  => 'required',
            
            // ADMINISTRASI //
            'papan_pengumuman'  => 'required',
            // 'fungsi_papan_pengumuman'  => 'required',
            // 'kondisi_papan_pengumuman'  => 'required',
            'kotak_saran'  => 'required',
            'buku_tamu'  => 'required',
            'buku_anggota'  => 'required',
            'notulensi_rapat'  => 'required',
            'inventaris_barang'  => 'required',
            'daftar_hadir_rapat'  => 'required',
            'buku_kas'  => 'required',
            'buku_bank'  => 'required',
            'sesuai_rpd'  => 'required',
            'bukti_sah'  => 'required',
            'catat_transaksi'  => 'required',
            'kerapian_bukti'  => 'required',
            'laporan'  => 'required',
            'waktu_laporan_dd'  => 'required',
            
            // KEGIATAN //
            'pelaksanaan_teknik'  => 'required',
                // 'sdm_anjuran'  => 'required',
                // 'keuangan_anjuran'  => 'required',
                // 'sarana_anjuran'  => 'required',
            
            'komoditi_unggulan'  => 'required',
            'panen_sebelum'  => 'required',
            'hasil_panen_sebelum'  => 'required',
            'satuan_hasil_panen_sebelum'  => 'required',
            'harga_penjualan_sebelum'  => 'required',
            'satuan_harga_penjualan_sebelum'  => 'required',
            'panen_setelah'  => 'required',
            'hasil_panen_setelah'  => 'required',
            'satuan_hasil_panen_setelah'  => 'required',
            'harga_penjualan_setelah'  => 'required',
            'satuan_harga_penjualan_setelah'  => 'required',           

            // PARTISIPASI //
            'perencanaan_partisipasi'  => 'required',
            'musdes'  => 'required',
            'penetapan_rkpdes'  => 'required',
            'musrembangdes'  => 'required',
            'penyusunan_rkpdes'  => 'required',
            'pelaksanaan_pemantauan'  => 'required',
            'pendanaan_usaha'  => 'required',
            'tenaga_usaha'  => 'required',
            'material_pendukung'  => 'required',
            
            // KEMITRAAN //
            'kerjasama_mitra'  => 'required',
            'penyuluh_kecamatan'  => 'required',
            'pendamping_desa'  => 'required',
            'kemitraan_kecamatan'  => 'required',
            'pendamping_kecamatan'  => 'required',
            'dpmd_kabupaten'  => 'required',
            
            // KEBERLANJUTAN //
            'dukungan_dd'  => 'required',
            'ket_alokasi_dd'  => 'required',
            'skpd_terkait'  => 'required',
            'institusi_lain'  => 'required',
            'produksi_berjalan'  => 'required',
            'akses_pasar'  => 'required',         
            
            
            'poktan_id' => 'unique:status_evkin',
            
        ]);

        // --------------------------------------------- Inputan Untuk Form Kelembagaan --------------------------------------------- //
        $kelembagaan = new Kelembagaan([        
            'poktan_id'       => $request->input('poktan_id'),
            'ketua_kelompok'  => $request->input('ketua_kelompok'),
            'ket_ketua_kelompok'  => $request->input('ket_ketua_kelompok'),            
            'bendahara'  => $request->input('bendahara'),
            'ket_bendahara'  => $request->input('ket_bendahara'),
            'sekretaris'  => $request->input('sekretaris'),
            'ket_sekretaris'  => $request->input('ket_sekretaris'),
            'pemasaran'  => $request->input('pemasaran'),
            'ket_pemasaran'  => $request->input('ket_pemasaran'),
            'peralatan'  => $request->input('peralatan'),
            'ket_peralatan'  => $request->input('ket_peralatan'),
            'perencanaan'  => $request->input('perencanaan'),
            'ket_perencanaan'  => $request->input('ket_perencanaan'),
            'mkpp'  => $request->input('mkpp'),
            'ket_mkpp'  => $request->input('ket_mkpp'),
            'mkp1'  => $request->input('mkp1'),
            'ket_mkp1'  => $request->input('ket_mkp1'),
            'mkp2'  => $request->input('mkp2'),            
            'ket_mkp2'  => $request->input('ket_mkp2'),            
            'mkst'  => $request->input('mkst'),
            'ket_mkst'  => $request->input('ket_mkst'),
            'pemantau_pelaksanaan'  => $request->input('pemantau_pelaksanaan'),
            'ket_pemantau_pelaksanaan'  => $request->input('ket_pemantau_pelaksanaan'),
            'pengelola_lain'  => $request->input('pengelola_lain'),
            'ket_pengelola_lain'  => $request->input('ket_pengelola_lain'),
            'peserta_musrembang'  => $request->input('peserta_musrembang'),
            'ket_peserta_musrembang'  => $request->input('ket_peserta_musrembang'),
        ]);
        
        $kelembagaan->save();
        $nilai_kelembagaan = (($kelembagaan->ketua_kelompok + $kelembagaan->bendahara + $kelembagaan->sekretaris + $kelembagaan->pemasaran + 
                $kelembagaan->peralatan + $kelembagaan->perencanaan + $kelembagaan->mkpp + $kelembagaan->mkp1 + $kelembagaan->mkp2 + 
                $kelembagaan->mkst + $kelembagaan->pemantau_pelaksanaan)/11)*100;
        
        


        // --------------------------------------------- Inputan Untuk Form Dinamika --------------------------------------------- //
        if($request->input('rencana_kerja')==0){
            
            $program_dd=0;
            $tujuan_kelompok=0;
            $masalah_rk=0;
            $kegiatan_kelompok=0;
            $tindak_lanjut=0;
            $tujuan_kegiatan=0;
            $waktu_kegiatan=0;
            $peningkatan_usahatani=0;
            $biaya=0;
            $penanggung_jawab=0;            
            $kesesuaian_rk=0;
            $sdm=0;
            $kendala_keuangan=0;
            $sarana=0;
      
        }else{
            
            $program_dd=$request->input('program_dd');
            $tujuan_kelompok=$request->input('tujuan_kelompok');
            $masalah_rk=$request->input('masalah_rk');
            $kegiatan_kelompok=$request->input('kegiatan_kelompok');
            $tindak_lanjut=$request->input('tindak_lanjut');
            $tujuan_kegiatan=$request->input('tujuan_kegiatan');
            $waktu_kegiatan=$request->input('waktu_kegiatan');
            $peningkatan_usahatani=$request->input('peningkatan_usahatani');
            $biaya=$request->input('biaya');
            $penanggung_jawab=$request->input('penanggung_jawab');            
            $kesesuaian_rk=$request->input('kesesuaian_rk');
            if($request->input('kesesuaian_rk')==1){
                $sdm=0;
                $kendala_keuangan=0;
                $sarana=0;
            }else{
                $sdm=$request->input('sdm');
                $kendala_keuangan=$request->input('kendala_keuangan');
                $sarana=$request->input('sarana');
            }                        
        }

        

        $dinamika = new Dinamika([        
            'poktan_id'         => $poktan,
            'rencana_kerja'     => $request->input('rencana_kerja'),
                'ket_rencana_kerja'     => $request->input('ket_rencana_kerja'),           
            
            'program_dd'        => $program_dd,
                'ket_program_dd'        => $request->input('ket_program_dd'),
            'tujuan_kelompok'   => $tujuan_kelompok,
                'ket_tujuan_kelompok'   => $request->input('ket_tujuan_kelompok'),
            'masalah_rk'      => $masalah_rk,
                'ket_masalah_rk'      => $request->input('ket_masalah_rk'),
            'rk_lain'           => $request->input('rk_lain'),
                'ket_rk_lain'           => $request->input('ket_rk_lain'),
            'kegiatan_kelompok'  => $kegiatan_kelompok,
                'ket_kegiatan_kelompok'  => $request->input('ket_kegiatan_kelompok'),
            'tindak_lanjut'     => $tindak_lanjut,
                'ket_tindak_lanjut'     => $request->input('ket_tindak_lanjut'),
            'tujuan_kegiatan'   => $tujuan_kegiatan,
                'ket_tujuan_kegiatan'   => $request->input('ket_tujuan_kegiatan'),
            'waktu_kegiatan'    => $waktu_kegiatan,
                'ket_waktu_kegiatan'    => $request->input('ket_waktu_kegiatan'),
            'peningkatan_usahatani'  => $peningkatan_usahatani,
                'ket_peningkatan_usahatani'  => $request->input('ket_peningkatan_usahatani'),
            'biaya'             => $biaya,
                'ket_biaya'             => $request->input('ket_biaya'),
            'penanggung_jawab'  => $penanggung_jawab,
                'ket_penanggung_jawab'  => $request->input('ket_penanggung_jawab'),
            
            'kesesuaian_rk'     => $kesesuaian_rk,
                'ket_kesesuaian_rk'     => $request->input('ket_kesesuaian_rk'),
            'sdm'               => $sdm,
                'ket_sdm'               => $request->input('ket_sdm'),
            'kendala_keuangan'  => $kendala_keuangan,
                'ket_kendala_keuangan'  => $request->input('ket_kendala_keuangan'),
            'sarana'            => $sarana,
                'ket_sarana'            => $request->input('ket_sarana'),
            'sebab_lain'        => $request->input('sebab_lain'),                      
                'ket_sebab_lain'        => $request->input('ket_sebab_lain'),                      
        ]);

        $dinamika->save();
                // $nilai_dinamika =(($dinamika->rencana_kerja + $dinamika->bentuk_rk + $dinamika->program_dd + $dinamika->tujuan_kelompok + $dinamika->masalah_rk +
                //         $dinamika->kegiatan_kelompok + $dinamika->tindak_lanjut + $dinamika->tujuan_kegiatan + $dinamika->waktu_kegiatan + $dinamika->peningkatan_usahatani +
                //         $dinamika->biaya + $dinamika->penanggung_jawab + $dinamika->rk_memuat + $dinamika->kesesuaian_rk)/13)*100;
        
        
        // --------------------------------------------- Inputan Untuk Form Pertemuan --------------------------------------------- //
        if($request->input('pertemuan')==0){
            $pelaksanaan_pertemuan=0;
            $frekuensi_pertemuan=0;
            $perencanaan_kegiatan=0;
            $pelaksanaan_kegiatan=0;
            $masalah_pertemuan=0;
            $bahasan_lain=0;         
        }else{
            $pelaksanaan_pertemuan=$request->input('pelaksanaan_pertemuan');
            $frekuensi_pertemuan=$request->input('frekuensi_pertemuan');
            $perencanaan_kegiatan=$request->input('perencanaan_kegiatan');
            $pelaksanaan_kegiatan=$request->input('pelaksanaan_kegiatan');
            $masalah_pertemuan=$request->input('masalah_pertemuan');
            $bahasan_lain=$request->input('bahasan_lain');           
        }
        $pertemuan = new Pertemuan([        
                'poktan_id'                 => $poktan,
                'pertemuan'                 => $request->input('pertemuan'),
                    'ket_pertemuan'                 => $request->input('ket_pertemuan'),
                'pelaksanaan_pertemuan'     => $pelaksanaan_pertemuan,
                    'ket_pelaksanaan_pertemuan'     => $request->input('ket_pelaksanaan_pertemuan'),
                'frekuensi_pertemuan'       => $frekuensi_pertemuan,
                    'ket_frekuensi_pertemuan'       => $request->input('ket_frekuensi_pertemuan'),
                'peserta_lk'                => $request->input('peserta_lk'),
                'peserta_p'                 => $request->input('peserta_p'),
                    'ket_peserta'                 => $request->input('ket_peserta'),
                'perencanaan_kegiatan'      => $perencanaan_kegiatan,
                    'ket_perencanaan_kegiatan'      => $request->input('ket_perencanaan_kegiatan'),
                'pelaksanaan_kegiatan'      => $pelaksanaan_kegiatan,
                    'ket_pelaksanaan_kegiatan'      => $request->input('ket_pelaksanaan_kegiatan'),
                'masalah_pertemuan'         => $masalah_pertemuan,
                    'ket_masalah_pertemuan'         => $request->input('ket_masalah_pertemuan'),
                'bahasan_lain'              => $bahasan_lain,                                                       
                    'ket_bahasan_lain'              => $request->input('ket_bahasan_lain'),                                                       
        ]);
        
                // $nilai_pertemuan=(($pertemuan->pertemuan + $pertemuan->pelaksanaan_pertemuan + $pertemuan->perencanaan_kegiatan +
                //     $pertemuan->pelaksanaan_kegiatan + $pertemuan->masalah_pertemuan)/6)*100;
        $pertemuan->save();

 // --------------------------------------------- Inputan Untuk Form Administrasi --------------------------------------------- //
        if($request->input('papan_pengumuman')==0){
            $fungsi_papan_pengumuman = 0;
            $kondisi_papan_pengumuman = 0;
        }else{
            $fungsi_papan_pengumuman = $request->input('fungsi_papan_pengumuman');
            $kondisi_papan_pengumuman = $request->input('kondisi_papan_pengumuman');
        }

        if($request->input('kotak_saran')==0){
            $fungsi_kotak_saran = 0;
            $kondisi_kotak_saran = 0;
        }else{
            $fungsi_kotak_saran = $request->input('fungsi_kotak_saran');
            $kondisi_kotak_saran = $request->input('kondisi_kotak_saran');
        }

        if($request->input('buku_kas')==0 && $request->input('buku_bank')==0){
            $sesuai_rpd = 0;
            $bukti_sah = 0;
            $catat_transaksi = 0;
            $kerapian_bukti = 0;
        }else{
            $sesuai_rpd = $request->input('sesuai_rpd');
            $bukti_sah = $request->input('bukti_sah');
            $catat_transaksi = $request->input('catat_transaksi');
            $kerapian_bukti = $request->input('kerapian_bukti');
        }
        if($request->input('laporan')==0){
            $waktu_laporan_dd = 0;
            
        }else{
            $waktu_laporan_dd = $request->input('waktu_laporan_dd');
            
        }
        
        $administrasi = new Administrasi([
            'poktan_id'                 => $poktan,
            'papan_pengumuman'                 => $request->input('papan_pengumuman'),
            'ket_papan_pengumuman'             => $request->input('ket_papan_pengumuman'),
            'fungsi_papan_pengumuman'           => $fungsi_papan_pengumuman,
            'ket_fungsi_papan_pengumuman'       => $request->input('ket_fungsi_papan_pengumuman'),
            'kondisi_papan_pengumuman'          => $kondisi_papan_pengumuman,
            'ket_kondisi_papan_pengumuman'      => $request->input('ket_kondisi_papan_pengumuman'),
            'kotak_saran'                       => $request->input('kotak_saran'),
            'ket_kotak_saran'                   => $request->input('ket_kotak_saran'),
            'fungsi_kotak_saran'                => $fungsi_kotak_saran,
            'ket_fungsi_kotak_saran'            => $request->input('ket_fungsi_kotak_saran'),
            'kondisi_kotak_saran'               => $kondisi_kotak_saran,
            'ket_kondisi_kotak_saran'           => $request->input('ket_kondisi_kotak_saran'),
            'buku_tamu'                         => $request->input('buku_tamu'),
            'ket_buku_tamu'                     => $request->input('ket_buku_tamu'),
            'buku_anggota'                      => $request->input('buku_anggota'),
            'ket_buku_anggota'                  => $request->input('ket_buku_anggota'),            
            'notulensi_rapat'                   => $request->input('notulensi_rapat'),
            'ket_notulensi_rapat'                   => $request->input('ket_notulensi_rapat'),
            'inventaris_barang'                 => $request->input('inventaris_barang'),
            'ket_inventaris_barang'             => $request->input('ket_inventaris_barang'),
            'daftar_hadir_rapat'                => $request->input('daftar_hadir_rapat'),
            'ket_daftar_hadir_rapat'            => $request->input('ket_daftar_hadir_rapat'),
            'buku_kas'                      => $request->input('buku_kas'),
            'ket_buku_kas'                  => $request->input('ket_buku_kas'),
            'buku_bank'                     => $request->input('buku_bank'),
            'ket_buku_bank'                 => $request->input('ket_buku_bank'),
            'sesuai_rpd'                    => $sesuai_rpd,
            'ket_sesuai_rpd'                => $request->input('ket_sesuai_rpd'),
            'bukti_sah'                     => $bukti_sah,
            'ket_bukti_sah'                 => $request->input('ket_bukti_sah'),
            'catat_transaksi'               => $catat_transaksi,
            'ket_catat_transaksi'           => $request->input('ket_catat_transaksi'),
            'kerapian_bukti'                => $kerapian_bukti,
            'ket_kerapian_bukti'            => $request->input('ket_kerapian_bukti'),
            'laporan'                       => $request->input('laporan'),
            'ket_laporan'                   => $request->input('ket_laporan'),
            'waktu_laporan_dd'              => $waktu_laporan_dd,
            'ket_waktu_laporan_dd'          => $request->input('ket_waktu_laporan_dd'),           
                        
        ]);

                            // $nilai_administrasi = (($administrasi->papan_pengumuman + $administrasi->fungsi_papan_pengumuman + $administrasi->kondisi_papan_pengumuman+
                            //         $administrasi->kotak_saran + $administrasi->fungsi_kotak_saran + $administrasi->kondisi_kotak_saran + $administrasi->buku_tamu + $administrasi->buku_anggota +
                            //         $administrasi->notulensi_rapat  + $administrasi->inventaris_barang + $administrasi->daftar_hadir_rapat + $administrasi->buku_kas + 
                            //         $administrasi->buku_bank + $administrasi->sesuai_rpd + $administrasi->bukti_sah + $administrasi->catat_transaksi +
                            //         $administrasi->kerapian_bukti + $administrasi->laporan + $administrasi->waktu_laporan_dd )/ 19)*100;

        $administrasi->save();
        
        $nilai_dinamika =(($dinamika->rencana_kerja +  $dinamika->program_dd + $dinamika->tujuan_kelompok + $dinamika->masalah_rk +
                $dinamika->kegiatan_kelompok + $dinamika->tindak_lanjut + $dinamika->tujuan_kegiatan + $dinamika->waktu_kegiatan + $dinamika->peningkatan_usahatani +
                $dinamika->biaya + $dinamika->penanggung_jawab + $dinamika->kesesuaian_rk + $pertemuan->pertemuan + $pertemuan->pelaksanaan_pertemuan + $pertemuan->perencanaan_kegiatan +
                $pertemuan->pelaksanaan_kegiatan + $pertemuan->masalah_pertemuan + $administrasi->papan_pengumuman + $administrasi->fungsi_papan_pengumuman + $administrasi->kondisi_papan_pengumuman+
                $administrasi->kotak_saran + $administrasi->fungsi_kotak_saran + $administrasi->kondisi_kotak_saran + $administrasi->buku_tamu + $administrasi->buku_anggota +
                $administrasi->notulensi_rapat  + $administrasi->inventaris_barang + $administrasi->daftar_hadir_rapat + $administrasi->buku_kas + 
                $administrasi->buku_bank + $administrasi->sesuai_rpd + $administrasi->bukti_sah + $administrasi->catat_transaksi +
                $administrasi->kerapian_bukti + $administrasi->laporan + $administrasi->waktu_laporan_dd)/36)*100;

 // --------------------------------------------- Inputan Untuk Form Kegiatan --------------------------------------------- //
        if($request->input('pelaksanaan_teknik')==1){
            $sdm_anjuran = 0;
            $keuangan_anjuran = 0;
            $sarana_anjuran = 0;
            $anjuran_lain = '';            
            
        }else{
            $sdm_anjuran = $request->input('sdm_anjuran');
            $keuangan_anjuran = $request->input('keuangan_anjuran');
            $sarana_anjuran = $request->input('sarana_anjuran');
            $anjuran_lain = $request->input('anjuran_lain');
            
        }
 
        $kegiatan = new Kegiatan([        
            'poktan_id'                 => $poktan,
            'pelaksanaan_teknik'                 => $request->input('pelaksanaan_teknik'),
                'ket_pelaksanaan_teknik'         => $request->input('ket_pelaksanaan_teknik'),        
            'sdm_anjuran'         => $sdm_anjuran,
                'ket_sdm_anjuran'         => $request->input('ket_sdm_anjuran'),
            'keuangan_anjuran'         => $keuangan_anjuran,
                'ket_keuangan_anjuran'         => $request->input('ket_keuangan_anjuran'),
            'sarana_anjuran'         => $sarana_anjuran,
                'ket_sarana_anjuran'         => $request->input('ket_sarana_anjuran'),
            'anjuran_lain'         => $anjuran_lain,
                'ket_anjuran_lain'         => $request->input('ket_anjuran_lain'),
            'komoditi_unggulan'         => $request->input('komoditi_unggulan'),
            'komoditi_lain'         => $request->input('komoditi_lain'),
            'panen_sebelum'         => $request->input('panen_sebelum'),
                'ket_panen_sebelum'         => $request->input('ket_panen_sebelum'),
            'hasil_panen_sebelum'         => $request->input('hasil_panen_sebelum'),
            'satuan_hasil_panen_sebelum'         => $request->input('satuan_hasil_panen_sebelum'),
                'ket_hasil_panen_sebelum'         => $request->input('ket_hasil_panen_sebelum'),
            'harga_penjualan_sebelum'         => $request->input('harga_penjualan_sebelum'),
            'satuan_harga_penjualan_sebelum'         => $request->input('satuan_harga_penjualan_sebelum'),
                'ket_harga_penjualan_sebelum'         => $request->input('ket_harga_penjualan_sebelum'),
            'panen_setelah'         => $request->input('panen_setelah'),            
                'ket_panen_setelah'         => $request->input('ket_panen_setelah'),
            'hasil_panen_setelah'         => $request->input('hasil_panen_setelah'),
            'satuan_hasil_panen_setelah'         => $request->input('satuan_hasil_panen_setelah'),
                'ket_hasil_panen_setelah'         => $request->input('ket_hasil_panen_setelah'),
            'harga_penjualan_setelah'         => $request->input('harga_penjualan_setelah'),
            'satuan_harga_penjualan_setelah'         => $request->input('satuan_harga_penjualan_setelah'),
                'ket_harga_penjualan_setelah'         => $request->input('ket_harga_penjualan_setelah'),
                                                                             
        ]);
        $kegiatan->save();
        $nilai_kegiatan =(($kegiatan->pelaksanaan_teknin + $kegiatan->sdm_anjuran + $kegiatan->keuangan_anjuran + $kegiatan->sarana_anjuran)/4)*100;
        
 // --------------------------------------------- Inputan Untuk Form Partisipasi --------------------------------------------- //

        $partisipasi = new Partisipasi([        
            'poktan_id'                         => $poktan,
            'perencanaan_partisipasi'                 => $request->input('perencanaan_partisipasi'),
                'ket_perencanaan_partisipasi'         => $request->input('ket_perencanaan_partisipasi'),
            'musdes'                 => $request->input('musdes'),
                'ket_musdes'         => $request->input('ket_musdes'),
            'penetapan_rkpdes'                 => $request->input('penetapan_rkpdes'),
                'ket_penetapan_rkpdes'         => $request->input('ket_penetapan_rkpdes'),
            'musrembangdes'                 => $request->input('musrembangdes'),
                'ket_musrembangdes'         => $request->input('ket_musrembangdes'),
            'penyusunan_rkpdes'                 => $request->input('penyusunan_rkpdes'),
                'ket_penyusunan_rkpdes'         => $request->input('ket_penyusunan_rkpdes'),
            'pelaksanaan_pemantauan'                 => $request->input('pelaksanaan_pemantauan'),
                'ket_pelaksanaan_pemantauan'         => $request->input('ket_pelaksanaan_pemantauan'),
            'pendanaan_usaha'                 => $request->input('pendanaan_usaha'),
                'ket_pendanaan_usaha'         => $request->input('ket_pendanaan_usaha'),
            'tenaga_usaha'                 => $request->input('tenaga_usaha'),
                'ket_tenaga_usaha'         => $request->input('ket_tenaga_usaha'),
            'material_pendukung'                 => $request->input('material_pendukung'),
                'ket_material_pendukung'         => $request->input('ket_material_pendukung'),
            'partisipasi_lain'                 => $request->input('partisipasi_lain'),
                'ket_partisipasi_lain'         => $request->input('ket_partisipasi_lain'),
                                                                                         
        ]);
        
        $partisipasi->save();
        $nilai_partisipasi = (($partisipasi->perencanaan_partisipasi + $partisipasi->musdes + $partisipasi->penetapan_rkpdes +
            $partisipasi->musrembangdes + $partisipasi->penyusunan_rkpdes + $partisipasi->pelaksanaan_pemantauan + $partisipasi->pendanaan_usaha +
            $partisipasi->tenaga_usaha + $partisipasi->material_pendukung )/9)*100;

        
 // --------------------------------------------- Inputan Untuk Form Kemitraan --------------------------------------------- //
    $kemitraan = new Kemitraan([        
            'poktan_id'                         => $poktan,
            'kerjasama_mitra'                 => $request->input('kerjasama_mitra'),
                'ket_kerjasama_mitra'         => $request->input('ket_kerjasama_mitra'),
            'penyuluh_kecamatan'                 => $request->input('penyuluh_kecamatan'),
                'ket_penyuluh_kecamatan'         => $request->input('ket_penyuluh_kecamatan'),
            'pendamping_desa'                 => $request->input('pendamping_desa'),
                'ket_pendamping_desa'         => $request->input('ket_pendamping_desa'),
            'kemitraan_kecamatan'                 => $request->input('kemitraan_kecamatan'),
                'ket_kemitraan_kecamatan'         => $request->input('ket_kemitraan_kecamatan'),
            'pendamping_kecamatan'                 => $request->input('pendamping_kecamatan'),
                'ket_pendamping_kecamatan'         => $request->input('ket_pendamping_kecamatan'),            
            'dpmd_kabupaten'                 => $request->input('dpmd_kabupaten'),
                'ket_dpmd_kabupaten'         => $request->input('ket_dpmd_kabupaten'),
            'kemitraan_lain'                 => $request->input('kemitraan_lain'),
                'ket_kemitraan_lain'         => $request->input('ket_kemitraan_lain'),
                
                                                                                         
        ]);

        $kemitraan->save();
        $nilai_kemitraan = (($kemitraan->kerjasama_mitra + $kemitraan->penyuluh_kecamatan + $kemitraan->pendamping_desa +
            $kemitraan->kemitraan_kecamatan + $kemitraan->pendamping_kecamatan + $kemitraan->dpmd_kabupaten )/6)*100;

        

 // --------------------------------------------- Inputan Untuk Form Keberlanjutan --------------------------------------------- //
    $keberlanjutan = new Keberlanjutan([        
        'poktan_id'                         => $poktan,
        'dukungan_dd'                 => $request->input('dukungan_dd'),
            'ket_dukungan_dd'         => $request->input('ket_dukungan_dd'),
        'alokasi_dd'                 => $request->input('alokasi_dd'),
            'ket_alokasi_dd'         => $request->input('ket_alokasi_dd'),
        'skpd_terkait'                => $request->input('skpd_terkait'),
            'ket_skpd_terkait'        => $request->input('ket_skpd_terkait'),
        'institusi_lain'              => $request->input('institusi_lain'),
            'ket_institusi_lain'      => $request->input('ket_institusi_lain'),
        'produksi_berjalan'           => $request->input('produksi_berjalan'),
            'ket_produksi_berjalan'   => $request->input('ket_produksi_berjalan'),
        'akses_pasar'                 => $request->input('akses_pasar'),
            'ket_akses_pasar'         => $request->input('ket_akses_pasar'),                                                                                                              
    ]);

    $nilai_keberlanjutan = (($keberlanjutan->dukungan_dd + $keberlanjutan->alokasi_dd + $keberlanjutan->skpd_terkait +
    $keberlanjutan->institusi_lain + $keberlanjutan->produksi_berjalan + $keberlanjutan->akses_pasar )/6)*100;

    $keberlanjutan->save();
 // --------------------------------------------- Save Evkin --------------------------------------------- //

        $evkin = new Evkin([
            'poktan_id'             => $poktan,
            'status'                => 1,
            'gelombang'             => $gelombang,
            'tanggal_wawancara'             => $request->input('tanggal_wawancara'), 
            'kelembagaan_id'        => $kelembagaan->id,
                'kelembagaan'           => $nilai_kelembagaan,
            'dinamika_id'           => $dinamika->id,                
            'pertemuan_id'          => $pertemuan->id,
            'administrasi_id'       => $administrasi->id,
                'dinamika'              => $nilai_dinamika,
            'kegiatan_id'          => $kegiatan->id,
                'kegiatan'              => $nilai_kegiatan,
            'partisipasi_id'          => $partisipasi->id,
                'partisipasi'              => $nilai_partisipasi,
            'kemitraan_id'          => $kemitraan->id,
                'kemitraan'              => $nilai_kemitraan,
            'keberlanjutan_id'          => $keberlanjutan->id,
                'keberlanjutan'              => $nilai_keberlanjutan,
            'user_id'   => Auth::user()->id,
        ]);

        
        
        $evkin->save();

        return redirect()->route('poktan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
