<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrbituariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orbituaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('date_of_burial');
            $table->string('details');
            $table->string('photo');
            $table->string('map_photo');
            $table->string('eulogy_photo');
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
        Schema::dropIfExists('orbituaries');
    }
}
