<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->bigIncrements('id_artista');
            $table->string('nome_artista', 250);
            $table->string('artista_origem', 2);
            $table->string('img_artista', 250);
            $table->year('ano',11 );

            $table->unsignedBigInteger('id_genero');

             //Chave genero
            $table->foreign('id_genero', 'FK_id_genero_artistas')
                ->references('id_genero')
                ->on('generos');

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
}
