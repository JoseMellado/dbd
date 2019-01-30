<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('ubicacion_origen_id')->unsigned()->nullable();
            $table->integer('ubicacion_destino_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('ubicacion_origen_id')->references('id')->on('ubicacions');
            $table->foreign('ubicacion_destino_id')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
