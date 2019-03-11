<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinDinamikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_dinamika', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('rencana_kerja');
            $table->string('ket_rencana_kerja')->nullable();
            $table->unsignedInteger('bentuk_rk');
            $table->string('ket_bentuk_rk')->nullable();
            $table->unsignedInteger('program_dd');
            $table->string('ket_program_dd')->nullable();
            $table->unsignedInteger('tujuan_kelompok');
            $table->string('ket_tujuan_kelompok')->nullable();
            $table->unsignedInteger('permasalahan');
            $table->string('ket_permasalahan')->nullable();
            $table->string('rk_lain');
            $table->string('ket_rk_lain')->nullable();
            $table->unsignedInteger('kegiatan_kelompok');
            $table->string('ket_kegiatan_kelompok')->nullable();
            $table->unsignedInteger('tindak_lanjut');
            $table->string('ket_tindak_lanjut')->nullable();
            $table->unsignedInteger('tujuan_kegiatan');
            $table->string('ket_tujuan_kegiatan')->nullable();
            $table->unsignedInteger('waktu_kegiatan');
            $table->string('ket_waktu_kegiatan')->nullable();
            $table->unsignedInteger('peningkatan_usahatani');
            $table->string('ket_peningkatan_usahatani')->nullable();
            $table->unsignedInteger('biaya');
            $table->string('ket_biaya')->nullable();
            $table->unsignedInteger('penanggung_jawab');
            $table->string('ket_penanggung_jawab')->nullable();
            $table->string('rk_memuat');
            $table->string('ket_rk_memuat')->nullable();
            $table->unsignedInteger('kesesuaian_rk');
            $table->string('ket_kesesuaian_rk')->nullable();
            $table->unsignedInteger('sdm');
            $table->string('ket_sdm')->nullable();
            $table->unsignedInteger('kendala_keuangan');
            $table->string('ket_kendala_keuangan')->nullable();
            $table->unsignedInteger('sarana');
            $table->string('ket_sarana')->nullable();
            $table->string('sebab_lain');
            $table->string('ket_sebab_lain')->nullable();
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
        Schema::dropIfExists('evkin_dinamika');
    }
}
