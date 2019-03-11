<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('pelaksanaan_teknik');
            $table->string('ket_pelaksanaan_teknik')->nullable();
            $table->unsignedInteger('sdm_teknik');
            $table->string('ket_sdm_teknik')->nullable();
            $table->unsignedInteger('keuangan_teknik');
            $table->string('ket_keuangan_teknik')->nullable();
            $table->unsignedInteger('sarana_teknik');
            $table->string('ket_sarana_teknik')->nullable();
            $table->unsignedInteger('teknik_lain')->nullable();
            $table->string('ket_teknik_lain')->nullable();
            $table->unsignedInteger('sdm_anjuran');
            $table->string('ket_sdm_anjuran')->nullable();
            $table->unsignedInteger('keuangan_anjuran');
            $table->string('ket_keuangan_anjuran')->nullable();
            $table->unsignedInteger('sarana_anjuran');
            $table->string('ket_sarana_anjuran')->nullable(); 
            $table->unsignedInteger('anjuran_lain')->nullable();
            $table->string('ket_anjuran_lain')->nullable();             
            $table->string('komoditi_unggulan');            
            $table->unsignedInteger('panen_sebelum');
            $table->string('ket_panen_sebelum')->nullable(); 
            $table->unsignedInteger('hasil_panen_sebelum');
            $table->unsignedInteger('satuan_hasil_panen_sebelum');
            $table->string('ket_hasil_panen_sebelum')->nullable();             
            $table->unsignedInteger('harga_penjualan_sebelum');
            $table->unsignedInteger('satuan_harga_penjualan_sebelum');
            $table->string('ket_harga_penjualan_sebelum')->nullable();            
            $table->unsignedInteger('panen_setelah');
            $table->string('ket_panen_setelah')->nullable();
            $table->unsignedInteger('hasil_panen_setelah');
            $table->unsignedInteger('satuan_hasil_panen_setelah');            
            $table->string('ket_hasil_panen_setelah')->nullable();            
            $table->unsignedInteger('harga_penjualan_setelah');
            $table->unsignedInteger('satuan_harga_penjualan_setelah');
            $table->string('ket_harga_penjualan_setelah')->nullable();              
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
        Schema::dropIfExists('evkin_kegiatan');
    }
}
