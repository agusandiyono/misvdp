<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iku', function (Blueprint $table) {
            $table->increments('id');
            $table->char('provinsi_id', 2);
            $table->string('provinsi')->nullable();
            $table->char('kabupaten_id', 4);
            $table->string('kabupaten')->nullable();
            $table->char('kecamatan_id', 7);
            $table->string('kecamatan')->nullable();
            $table->char('desa_id', 10);
            $table->string('desa')->nullable();
            $table->string('nama_kontak');
            $table->string('no_hp');
            $table->string('sektor');
            $table->string('jenis_ttg');
            $table->string('komoditas');
            $table->string('nama_ttg');
            $table->string('harga');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('iku');
    }
}
