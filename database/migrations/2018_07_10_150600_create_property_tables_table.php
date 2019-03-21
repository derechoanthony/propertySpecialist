<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slct_offerType')->nullable();
            $table->string('slct_propertyType')->nullable();
            
            $table->string('slct_propertySubTypeHouse')->nullable();
            $table->string('slct_propertySubTypeLot')->nullable();
            $table->string('slct_propertySubTypeCommercial')->nullable();
            $table->string('_orig_token')->nullable();
            
            $table->string('txt_title')->nullable();
            $table->longText('txtArea_description')->nullable();

            $table->integer('txt_bedrooms')->default('0');
            $table->integer('txt_bathrooms')->default('0');
            $table->integer('txt_totalrooms')->default('0');
            $table->integer('txt_flrarea')->default('0');
            $table->integer('txt_carspace')->default('0');
            $table->integer('slct_yearbuilt')->default('0');
            $table->string('slct_clasification')->nullable();
            $table->string('slct_fullyfurnished')->nullable();
            $table->integer('txt_lotarea')->default('0');
            $table->longText('txt_subdivisionname')->nullable();
            $table->integer('txt_blckunitnumber')->default('0');
            
            $table->integer('txt_com_bedrooms')->default('0');
            $table->integer('txt_com_bathrooms')->default('0');
            $table->integer('txt_com_totalrooms')->default('0');
            $table->integer('txt_com_flrarea')->default('0');
            $table->integer('txt_com_flrtotal')->default('0');
            $table->integer('txt_com_carspace')->default('0');
            $table->integer('slct_com_yearbuilt')->default('0');
            $table->string('slct_com_clasification')->nullable();
            $table->string('slct_com_fullyfurnished')->nullable();
            $table->integer('txt_com_lotarea')->default('0');
            $table->longText('txt_com_subdivisionname')->nullable();
            $table->string('txt_com_blckunitnumber')->nullable();
                        
            $table->integer('txt_lot_lotArea')->default('0');
            $table->string('slct_lot_clasification')->nullable();
            $table->string('txt_lot_subdivisionname')->nullable();
            $table->integer('txt_lot_blckunitnumber')->default('0');

            $table->decimal('txt_price',12,2)->default('0');
            $table->string('txt_objectid')->nullable();
            $table->string('_token')->nullable();
            $table->string('txt_youtubeurl')->nullable();

            $table->string('txt_province')->nullable();
            $table->string('txt_city')->nullable();
            $table->string('txt_brngy')->nullable();
            $table->longText('txt_address')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
