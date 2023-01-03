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
        Schema::create('contacto_jefedptos', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->integer('jd_id')->unsigned();
            $table->foreign('jd_id')->references('id')->on('jefe_dptos');
            $table->integer('telefono');
            $table->integer('telcasa');
            $table->string('email');
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
        Schema::dropIfExists('contacto_jefedptos');
    }
};
