<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->Increments('idRequisito');
            $table->integer('idTiposervicio')->unsigned();
            $table->string('nombre',255);
            $table->string('observaciones',255);
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
        Schema::dropIfExists('requisitos');
    }
}
