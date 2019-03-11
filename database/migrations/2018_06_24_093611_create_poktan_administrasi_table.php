<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinAdministrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_administrasi', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('papan_pengumuman');
            $table->string('ket_papan_pengumuman')->nullable();
            $table->unsignedInteger('fungsi_papan_pengumuman');
            $table->string('ket_fungsi_papan_pengumuman')->nullable();
            $table->unsignedInteger('kondisi_papan_pengumuman');
            $table->string('ket_kondisi_papan_pengumuman')->nullable();
            $table->unsignedInteger('kotak_saran');
            $table->string('ket_kotak_saran')->nullable();
            $table->unsignedInteger('fungsi_kotan_saran');
            $table->string('ket_fungsi_kotak_saran')->nullable();
            $table->unsignedInteger('kondisi_kotak_saran');
            $table->string('ket_kondisi_kotak_saran')->nullable();
            $table->unsignedInteger('buku_tamu');
            $table->string('ket_buku_tamu')->nullable();
            $table->unsignedInteger('buku_anggota');
            $table->string('ket_buku_anggota')->nullable();
            $table->unsignedInteger('notulensi_rapat');
            $table->string('ket_notulensi_rapat')->nullable();
            $table->unsignedInteger('inventaris_barang');
            $table->string('ket_inventaris_barang')->nullable();
            $table->unsignedInteger('daftar_hadir_rapat');
            $table->string('ket_daftar_hadir_rapat')->nullable();
            $table->unsignedInteger('buku_kas');
            $table->string('ket_buku_kas')->nullable();
            $table->unsignedInteger('buku_bank');
            $table->string('ket_buku_bank')->nullable();
            $table->unsignedInteger('sesuai_rpd');
            $table->string('ket_sesuai_rpd')->nullable();
            $table->unsignedInteger('bukti_sah');
            $table->string('ket_bukti_sah')->nullable();
            $table->unsignedInteger('catat_transaksi');
            $table->string('ket_catat_transaksi')->nullable();
            $table->unsignedInteger('kerapian_bukti');
            $table->string('ket_kerapian_bukti')->nullable();
            $table->unsignedInteger('laporan');
            $table->string('ket_laporan')->nullable();
            $table->unsignedInteger('waktu_laporan_dd');
            $table->string('ket_waktu_laporan_dd')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evkin_administrasi');
    }
}
