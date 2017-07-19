<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBioskopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bioskop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bioskop');
            $table->string('kota');
            $table->string('alamat');
            $table->integer('jumlah_studio');
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
        Schema::dropIfExists('bioskop');
    }
}
