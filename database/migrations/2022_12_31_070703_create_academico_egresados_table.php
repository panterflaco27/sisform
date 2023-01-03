<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_egresados', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->integer('eg_id')->unsigned();
            $table->foreign('eg_id')->references('id')->on('egresados');
            $table->string('carrera');
            $table->string('especialidad');
            $table->string('mesanioegreso');
            $table->string('titulo');
            $table->string('dominioidioma');
            $table->string('otroidioma');
            $table->text('paquetescomp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academico_egresados');
    }
};
