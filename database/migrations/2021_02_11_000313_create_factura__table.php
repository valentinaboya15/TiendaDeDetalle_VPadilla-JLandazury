<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('codigoF');
            $table->unsignedBigInteger('id_car');

            $table->foreign('id_car')->references('id_car')->on('carrito')->onDelete('cascade');
            $table->unsignedBigInteger('id_pro');

            $table->foreign('id_pro')->references('id_pro')->on('producto')->onDelete('cascade');
            $table->unsignedBigInteger('id_cli');

            $table->foreign('id_cli')->references('id_cli')->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('formaPago');

            $table->foreign('formaPago')->references('id')->on('formapago')->onDelete('cascade');          
            $table->date('Fecha');
            $table->double('Total');
          
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
        Schema::dropIfExists('factura');
    }
}
