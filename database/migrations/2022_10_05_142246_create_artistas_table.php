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
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->binary('imagen')->nullable();
            $table->unsignedBigInteger('id_genero');                                   //se declara el campo que serà llave foranea
            $table->foreign('id_genero')->references('id')->on('generos');            //se especifica la referencia
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
        Schema::dropIfExists('artistas');
    }
};
