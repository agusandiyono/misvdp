<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->char('provinsi_id', 2);
            $table->char('kabupaten_id', 4);
            $table->char('kecamatan_id', 7);
            $table->char('desa_id', 10)->nullable();
            $table->integer('jenis')->unsigned();
            $table->string('nama');            
            $table->date('tanggal');
            $table->text('deskripsi');
            $table->string('sub_kegiatan');
            $table->string('sasaran');
            $table->integer('jumlah_lk');
            $table->integer('jumlah_p');
            $table->string('foto');
            $table->string('video')->nullable();
            $table->integer('jumlah_paham');
            $table->text('alasan_paham');
            $table->text('masalah');
            $table->text('saran');
            $table->text('rencana_tindak_lanjut')->nullable();
            $table->integer('status');
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kegiatans');
    }
}
