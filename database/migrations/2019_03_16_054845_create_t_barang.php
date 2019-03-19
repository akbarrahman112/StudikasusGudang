<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBarang extends Migration
{
    /**
     * Run the migrations.
     *k
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori', 30);
            $table->string('nama_barang', 150);
            $table->integer('stok');
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
        Schema::dropIfExists('t_barang');
    }
}
