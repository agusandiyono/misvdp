<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinPartisipasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_partisipasi', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('perencanaan_partisipasi');
            $table->string('ket_perencanaan_partisipasi')->nullable();
            $table->unsignedInteger('musdes');
            $table->string('ket_musdes')->nullable();
            $table->unsignedInteger('penetapan_rkpdes');
            $table->string('ket_penetapan_rkpdes')->nullable();
            $table->unsignedInteger('musrembangdes');
            $table->string('ket_musrembangdes')->nullable();
            $table->unsignedInteger('penyusunan_rkpdes');
            $table->string('ket_penyusunan_rkpdes')->nullable();
            $table->unsignedInteger('pelaksanaan_pemantauan');
            $table->string('ket_pelaksanaan_pemantauan')->nullable();
            $table->unsignedInteger('pendanaan_usaha');
            $table->string('ket_pendanaan_usaha')->nullable();
            $table->unsignedInteger('tenaga_usaha');
            $table->string('ket_tenaga_usaha')->nullable();
            $table->unsignedInteger('material_pendukung');
            $table->string('ket_material_pendukung')->nullable();
            $table->unsignedInteger('partisipasi_lain')->nullable();
            $table->string('ket_partisipasi_lain')->nullable();
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
        Schema::dropIfExists('evkin_partisipasi');
    }
}
