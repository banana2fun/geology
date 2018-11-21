<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAllKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('minerals', function (Blueprint $table) {
            $table->foreign('min_class_id')->references('id')->on('mineral_classes');
        });

        Schema::table('element_mineral', function (Blueprint $table) {
            $table->foreign('mineral_id')->references('id')->on('minerals');
            $table->foreign('element_id')->references('id')->on('elements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('minerals', function (Blueprint $table) {
//            $table->dropForeign('minerals_min_class_id_foreign');
//
//        });
//
//        Schema::table('elements_in_mineral', function (Blueprint $table) {
//            $table->dropForeign('elements_in_mineral_mineral_id_foreign');
//            $table->dropForeign('elements_in_mineral_atomic_number_foreign');
//        });
    }
}
