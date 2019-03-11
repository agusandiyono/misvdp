<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoktansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poktan', function (Blueprint $table) {
            // $table->increments('id');
            $table->char('id', 14)->primary();
            $table->char('provinsi_id', 2);
            $table->char('kabupaten_id', 4);
            $table->char('kecamatan_id', 7);
            $table->char('desa_id', 10)->nullable();
            $table->string('nama');
            $table->string('komoditas');
            $table->string('partisipasi')->nullable();
            $table->string('budidaya')->nullable();
            $table->string('pengolahan')->nullable();
            $table->string('pemasaran')->nullable();
            $table->string('pendapatan')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('poktan');
    }
}
