<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('photos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('house_id')->unsigned();
            $table->foreign('house_id')
                  ->references('id')
                  ->on('houses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->text('name');
            $table->text('description');
            $table->text('photo');
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
         Schema::drop('photos');
        
    }
}
