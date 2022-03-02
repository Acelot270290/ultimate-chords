<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->bigIncrements('id_musica');
            $table->string('nome_musica',250);
            $table->string('tonalidade',3);
            $table->boolean('cifra')->default(0);
            $table->boolean('tabs')->default(0);
            $table->boolean('baixo')->default(0);
            $table->boolean('teclado')->default(0);
            $table->boolean('bateria')->default(0);

            $table->unsignedBigInteger('id_artista');
            $table->unsignedBigInteger('id_videoaula');
            $table->unsignedBigInteger('id_genero');
            
            //Chave Estrangeira Artista
            $table->foreign('id_artista', 'FK_id_artista_musicas')
                ->references('id_artista')
                ->on('artistas');

            //Chave Estrangeira VideoAula
            $table->foreign('id_videoaula', 'FK_id_video_aula_musicas')
                ->references('id_videoaula')
                ->on('video_aulas');
            
            //Chave genero
            $table->foreign('id_genero', 'FK_id_genero_musicas')
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
        Schema::dropIfExists('musicas');
    }
}
