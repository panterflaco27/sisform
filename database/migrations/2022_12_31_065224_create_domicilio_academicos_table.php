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
        Schema::create('domicilio_academicos', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->integer('acad_id')->unsigned();
            $table->foreign('acad_id')->references('id')->on('academicos');
            $table->string('calle', 50);
            $table->string('numero')->default('S/N');
            $table->string('colonia', 50);
            $table->integer('codigopostal');
            $table->string('ciudad', 50);
            $table->string('municipio', 50);
            $table->string('estado', 50);
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
        Schema::dropIfExists('domicilio_academicos');
    }
};
