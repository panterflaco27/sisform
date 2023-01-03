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
        Schema::create('ubilab_trabajas', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->integer('ubilab_id')->unsigned();
            $table->foreign('ubilab_id')->references('id')->on('ubicacionlaborals');
            $table->string('tiempotranscurrido');
            $table->string('medio');
            $table->string('requisistos');
            $table->string('idioma');
            $table->string('proporcion');
            $table->string('antiguedad');
            $table->string('ingreso');
            $table->string('niveljerarquico');
            $table->string('condiciontrabajo');
            $table->string('relaciontrabajo');
            $table->string('organismo');
            $table->string('giro');
            $table->string('razonsocial');
            $table->string('secprimario');
            $table->string('secsecundario');
            $table->string('secterciario');
            $table->string('tamanio');
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
        Schema::dropIfExists('ubilab_trabajas');
    }
};
