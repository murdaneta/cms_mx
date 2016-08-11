<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('images', function ($table) {
             $table->increments('id')->unsigned();
             $table->string('name', 100)->nullable();
             $table->text('directory')->nullable(); 
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
