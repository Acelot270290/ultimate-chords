<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id_country');
            $table->string('country_code', 2)->default('');

            $table->unsignedBigInteger('country_id_continent', false)->nullable();

            // Chave origem
            $table->foreign('country_id_continent', 'FK_id_continent_countries')
                ->references('id_continent')
                ->on('continents');

            $table->string('iso3', 3)->default('');
            $table->unsignedSmallInteger('country_number')->default(0);
            $table->string('name_en', 191)->default('');
            $table->string('full_name_en', 250)->default('');
            $table->string('name_pt', 191)->default('');
            $table->string('full_name_pt', 250)->default('');
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
        Schema::dropIfExists('countries');
    }
}
