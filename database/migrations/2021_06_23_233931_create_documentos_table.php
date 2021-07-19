<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->Increments('idDocumento');
            $table->integer('idServicio')->unsigned();
            $table->string('archivosAdjuntos',255);
            $table->string('observaciones',255);
            $table->string('estado',40);
            $table->foreign('idServicio')->references('idServicio')->on('servicios');
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
        Schema::dropIfExists('documentos');
    }
}
