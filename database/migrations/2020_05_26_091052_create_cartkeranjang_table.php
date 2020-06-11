<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartkeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartkeranjang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_produk');
            $table->string('nama_produk');
            $table->string('kode_produk');
            $table->float('harga');
            $table->integer('qty');
            $table->string('user_email');
            $table->string('session_id');
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
        Schema::dropIfExists('cartkeranjang');
    }
}
