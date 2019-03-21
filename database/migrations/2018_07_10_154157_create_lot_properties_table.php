<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('lot_lotArea');
            $table->string('lot_clasification');
            $table->string('lot_subdivisionname');
            $table->bigInteger('lot_blckunitnumber');
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
        Schema::dropIfExists('lot_properties');
    }
}
