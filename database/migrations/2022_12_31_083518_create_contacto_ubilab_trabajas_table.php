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
        Schema::create('contacto_ubilab_trabajas', function (Blueprint $table) {
            $table->engine=('InnoDB');
            $table->increments('id');
            $table->integer('contlabt_id')->unsigned();
            $table->foreign('contlabt_id')->references('id')->on('ubilab_trabajas');
            $table->integer('telefono');
            $table->integer('telcasa');
            $table->string('fax');
            $table->string('email');
            $table->string('paginaweb');
            $table->string('jefeinmediato');
            $table->string('puestojefe');
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
        Schema::dropIfExists('contacto_ubilab_trabajas');
    }
};
