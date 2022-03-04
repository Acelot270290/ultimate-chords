<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id_artist');
            $table->string('artist_name', 250)->default('');
            $table->string('artist_image', 250)->default('');
            $table->year('artist_start_year', 4)->default('0000');

            $table->unsignedBigInteger('artist_id_country', false)->nullable();
            // Chave origem
            $table->foreign('artist_id_country', 'FK_id_origin_countries')
                ->references('id_country')
                ->on('countries');

            $table->unsignedBigInteger('artist_id_style', false)->nullable();

            // Chave genero
            $table->foreign('artist_id_style', 'FK_id_style_artists')
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
        Schema::dropIfExists('artists');
    }
}
