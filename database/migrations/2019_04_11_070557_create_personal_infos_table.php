<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->index();
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('contactNum');
            $table->date('birthDate');
            $table->string('email')->index();
            $table->string('tin');
            $table->string('photo');
            $table->string('team');
            $table->string('lead');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
    }
}
