<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_cli');

            $table->foreign('id_cli')->references('id_cli')->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('id_pro');

            $table->foreign('id_pro')->references('id')->on('producto')->onDelete('cascade');
            $table->unsignedBigInteger('id_det');

            $table->foreign('id_det')->references('id_det')->on('detalle')->onDelete('cascade');

            $table->string('Descripcion',255);
            $table->integer('cant_prod');
            $table->string('foto',45);
         
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
        Schema::dropIfExists('carrito');
    }
}
