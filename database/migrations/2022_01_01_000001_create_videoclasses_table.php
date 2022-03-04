<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoclasses', function (Blueprint $table) {
            $table->bigIncrements('id_videoclass');
            $table->string('videoclass_title', 250)->default('');
            $table->string('videoclass_url', 250)->default('');
            $table->string('videoclass_members', 10000)->default('0000');
            
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
        Schema::dropIfExists('videoclasses');
    }
}
