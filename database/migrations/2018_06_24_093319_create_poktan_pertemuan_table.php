<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvkinPertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evkin_pertemuan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('poktan_id', 14);
            $table->unsignedInteger('pertemuan');
            $table->string('ket_pertemuan')->nullable();
            $table->unsignedInteger('pelaksanaan_pertemuan');
            $table->string('ket_pelaksanaan_pertemuan')->nullable();
            $table->unsignedInteger('frekuensi_pertemuan')->nullable();
            $table->unsignedInteger('peserta_lk');
            $table->unsignedInteger('peserta_p');
            $table->string('ket_peserta')->nullable();
            $table->string('ket_frekuensi_pertemuan')->nullable();
            $table->unsignedInteger('perencanaan_kegiatan');
            $table->string('ket_perencanaan_kegiatan')->nullable();
            $table->unsignedInteger('pelaksanaan_kegiatan');
            $table->string('ket_pelaksanaan_kegiatan')->nullable();
            $table->unsignedInteger('permasalahan');
            $table->string('ket_permasalahan')->nullable();
            $table->string('bahasan_lain');
            $table->string('ket_bahasan_lain')->nullable();                        
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
        Schema::dropIfExists('evkin_pertemuan');
    }
}
