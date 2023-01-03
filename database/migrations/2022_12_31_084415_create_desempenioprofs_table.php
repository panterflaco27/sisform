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
        Schema::create('desempenioprofs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eficienciaact');
            $table->string('calificacion');
            $table->string('utilidad');
            $table->string('area', 1);
            $table->string('titulacion', 1);
            $table->string('experiencia', 1);
            $table->string('copetencia', 1);
            $table->string('posicionamiento', 1);
            $table->string('conocimiento', 1);
            $table->string('recomendacion', 1);
            $table->string('personalidad', 1);
            $table->string('capacidad', 1);
            $table->string('otros', 1);
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
        Schema::dropIfExists('desempenioprofs');
    }
};
