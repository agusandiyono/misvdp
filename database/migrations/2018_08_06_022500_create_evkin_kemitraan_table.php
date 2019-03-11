<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinKemitraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_kemitraan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('kerjasama_mitra');
            $table->string('ket_kerjasama_mitra')->nullable();
            $table->unsignedInteger('penyuluh_kecamatan');
            $table->string('ket_penyuluh_kecamatan')->nullable();
            $table->unsignedInteger('pendamping_desa');
            $table->string('ket_pendamping_desa')->nullable();
            $table->unsignedInteger('kemitraan_kecamatan');
            $table->string('ket_kemitraan_kecamatan')->nullable();
            $table->unsignedInteger('pendamping_kecamatan');
            $table->string('ket_pendamping_kecamatan')->nullable();
            $table->unsignedInteger('dpmd_kabupaten');
            $table->string('ket_dpmd_kabupaten')->nullable();
            $table->unsignedInteger('kemitraan_lain');
            $table->string('ket_kemitraan_lain')->nullable();
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
        Schema::dropIfExists('evkin_kemitraan');
    }
}
