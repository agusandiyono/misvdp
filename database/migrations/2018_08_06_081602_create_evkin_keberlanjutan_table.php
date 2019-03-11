<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinKeberlanjutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_keberlanjutan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('dukungan_dd');
            $table->string('ket_dukungan_dd')->nullable();
            $table->unsignedInteger('alokasi_dd');
            $table->string('ket_alokasi_dd')->nullable();
            $table->unsignedInteger('skpd_terkait');
            $table->string('ket_skpd_terkait')->nullable();
            $table->unsignedInteger('institusi_lain');
            $table->string('ket_institusi_lain')->nullable();
            $table->unsignedInteger('produksi_berjalan');
            $table->string('ket_produksi_berjalan')->nullable();
            $table->unsignedInteger('akses_pasar');
            $table->string('ket_akses_pasar')->nullable();
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
        Schema::dropIfExists('evkin_keberlanjutan');
    }
}
