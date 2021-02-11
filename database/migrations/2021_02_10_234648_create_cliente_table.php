<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id_cli');
            $table->unsignedBigInteger('id_usu');

            $table->foreign('id_usu')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('cedula',10);
            $table->string('domicilio',50);
            $table->string('celular',9);
            $table->string('email',30);
            $table->char('genero',1);
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
        Schema::dropIfExists('cliente');
    }
}
