<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinKelembagaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_kelembagaan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('ketua_kelompok');
            $table->string('ket_ketua_kelompok')->nullable();
            $table->unsignedInteger('bendahara');
            $table->string('ket_bendahara')->nullable();
            $table->unsignedInteger('sekretaris');
            $table->string('ket_sekretaris')->nullable();
            $table->unsignedInteger('pemasaran');
            $table->string('ket_pemasaran')->nullable();
            $table->unsignedInteger('peralatan');
            $table->string('ket_peralatan')->nullable();
            $table->string('pengelola_lain');
            $table->string('ket_pengelola_lain')->nullable();
            $table->unsignedInteger('perencanaan');
            $table->string('ket_perencanaan')->nullable();
            $table->unsignedInteger('mkpp');
            $table->string('ket_mkpp')->nullable();
            $table->unsignedInteger('mkp1');
            $table->string('ket_mkp1')->nullable();
            $table->unsignedInteger('mkp2');
            $table->string('ket_mkp2')->nullable();
            $table->unsignedInteger('mkst');
            $table->string('ket_mkst')->nullable();
            $table->unsignedInteger('pemantau_pelaksanaan');
            $table->string('ket_pemantau_pelaksanaan')->nullable();
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
        Schema::dropIfExists('evkin_kelembagaan');
    }
}
