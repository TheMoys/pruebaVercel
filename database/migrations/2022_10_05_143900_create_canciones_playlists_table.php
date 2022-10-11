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
        Schema::create('canciones_playlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_cancion');
            $table->foreign('id_cancion')->references('id')->on('cancions');
            $table->unsignedBigInteger('id_playlist');
            $table->foreign('id_playlist')->references('id')->on('playlists');
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
        Schema::dropIfExists('canciones_playlists');
    }
};
