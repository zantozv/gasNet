<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->Increments('idServicio');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idCiudad')->unsigned();
            $table->integer('idTiposervicio')->unsigned();
            $table->string('direccion',40);
            $table->string('descripcion',250);
            $table->integer('valor');
            $table->string('estado');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idCiudad')->references('idCiudad')->on('ciudades');
            $table->foreign('idTiposervicio')->references('idTiposervicio')->on('tiposervicios');
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
        Schema::dropIfExists('servicios');
    }
}
