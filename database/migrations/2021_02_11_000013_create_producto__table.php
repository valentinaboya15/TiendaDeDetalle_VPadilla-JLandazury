<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id_pro');
            $table->unsignedBigInteger('id_cate');

            $table->foreign('id_cate')->references('id_cate')->on('categoria')->onDelete('cascade');
            $table->unsignedBigInteger('id_cata');

            $table->foreign('id_cata')->references('id_cata')->on('catalogo')->onDelete('cascade');

            $table->string('Descripcion',255);
            $table->integer('cant_prod');
            $table->string('foto',45);
            $table->unsignedBigInteger('id_det');

            $table->foreign('id_det')->references('id_det')->on('detalle')->onDelete('cascade');
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
        Schema::dropIfExists('producto');
    }
}
