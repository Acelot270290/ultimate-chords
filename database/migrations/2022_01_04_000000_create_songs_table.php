<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id_song');
            $table->string('song_name', 250)->default('');
            $table->string('song_tone', 3)->default('');
            $table->boolean('chord')->default(0);
            $table->boolean('tabs')->default(0);
            $table->boolean('bass')->default(0);
            $table->boolean('keyboard')->default(0);
            $table->boolean('drums')->default(0);

            $table->unsignedBigInteger('song_id_artist', false)->nullable();
            $table->unsignedBigInteger('song_id_videoclass', false)->nullable();
            $table->unsignedBigInteger('song_id_style', false)->nullable();
            
            // Chave Estrangeira Artista
            $table->foreign('song_id_artist', 'FK_id_artist_songs')
                ->references('id_artist')
                ->on('artists');

            // Chave Estrangeira VideoAula
            $table->foreign('song_id_videoclass', 'FK_id_videoclass_songs')
                ->references('id_videoclass')
                ->on('videoclasses');
            
            // Chave genero
            $table->foreign('song_id_style', 'FK_id_style_songs')
                ->references('id_style')
                ->on('styles');

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
        Schema::dropIfExists('songs');
    }
}
