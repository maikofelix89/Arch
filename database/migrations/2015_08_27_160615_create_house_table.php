<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');           
            $table->integer('sub_cat_id')->unsigned();
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');           
           
            $table->string('cat_name');
            $table->string('description');
            $table->string('photo');
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
        //
    }
}
