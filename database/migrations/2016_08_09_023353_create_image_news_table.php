<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_news', function ($table) {
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->integer('notice_id')->unsigned();
            $table->foreign('notice_id')->references('id')->on('news')->onDelete('cascade');
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
