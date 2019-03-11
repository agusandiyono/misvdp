<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePoktanProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poktan_profil', function (Blueprint $table) {
            $table->increments('id');
            $table->char('no_poktan', 14);
            $table->string('pewawancara');
            $table->string('no_hp');
            $table->date('tanggal');
            $table->integer('pendirian')->unsigned();            
            $table->integer('bidang')->unsigned();
            $table->date('tanggal_berdiri');            
            $table->date('tanggal_operasi');
            $table->integer('jumlah_lk')->unsigned();
            $table->integer('jumlah_p')->unsigned();
            $table->integer('status')->unsigned();
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
        Schema::dropIfExists('poktan_profil');
    }
}
