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
        Schema::create('expectativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso');
            $table->string('posgrado');
            $table->string('sociales');
            $table->string('profesionistas');
            $table->string('asociacion');
            $table->text('comentarios');
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
        Schema::dropIfExists('expectativas');
    }
};
