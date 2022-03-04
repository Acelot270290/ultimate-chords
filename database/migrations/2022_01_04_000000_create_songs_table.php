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

            $table->unsignedBigInteger('song_id_artist', false)->nullable();
            // Chave Estrangeira Artista
            $table->foreign('song_id_artist', 'FK_id_artist_songs')
                ->references('id_artist')
                ->on('artists');
            
            $table->unsignedBigInteger('song_user_insertion_id', false)->nullable();
            // Chave genero
            $table->foreign('song_user_insertion_id', 'FK_id_user_songs')
                ->references('id')
                ->on('users');

            $table->string('song_name', 250)->default('');
            $table->year('song_year', 4)->default('0000');
            $table->string('song_author', 250)->default('');

            $table->unsignedBigInteger('song_id_style', false)->nullable();
            // Chave genero
            $table->foreign('song_id_style', 'FK_id_style_songs')
                ->references('id_style')
                ->on('styles');
            
            $table->unsignedBigInteger('song_id_tone', false)->nullable();
            // Chave genero
            $table->foreign('song_id_tone', 'FK_id_tone_songs')
                ->references('id_tone')
                ->on('tones');

            $table->unsignedBigInteger('song_id_videoclass', false)->nullable();
            // Chave Estrangeira VideoAula
            $table->foreign('song_id_videoclass', 'FK_id_videoclass_songs')
                ->references('id_videoclass')
                ->on('videoclasses');

            $table->boolean('chord')->default(0);
            $table->boolean('keyboard')->default(0);
            $table->boolean('tabs')->default(0);
            $table->boolean('bass')->default(0);
            $table->boolean('drums')->default(0);
            
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
