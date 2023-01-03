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
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio')->autoIncrement();
            $table->string('nombre', 50);
            $table->string('appat', 50);
            $table->string('apmat', 50);
            $table->string('curp');
            $table->string('nocontrol', 9);
            $table->date('fechanac');
            $table->char('sexo', 1);
            $table->string('estadoc');
            $table->string('calle', 50);
            $table->string('numero')->default('S/N');
            $table->string('colonia', 50);
            $table->integer('codigopostal');
            $table->string('ciudad', 50);
            $table->string('municipio', 50);
            $table->string('estado', 50);
            $table->integer('telefono');
            $table->integer('telcasa');
            $table->string('email');
            $table->string('carrera');
            $table->string('especialidad');
            $table->string('mesanioegreso');
            $table->string('titulo');
            $table->string('dominioidioma');
            $table->string('otroidioma');
            $table->text('paquetescomp');
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
        Schema::dropIfExists('egresados');
    }
};
