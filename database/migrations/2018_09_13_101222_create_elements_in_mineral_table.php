<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsInMineralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_mineral', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mineral_id');
            $table->unsignedInteger('element_id');
            $table->float('percent_in_mineral');
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
        Schema::dropIfExists('element_mineral');
    }
}
