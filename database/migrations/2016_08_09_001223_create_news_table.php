<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function ($table) {
             $table->increments('id')->unsigned();
             $table->string('name', 50)->nullable();
             $table->text('title')->nullable();
             $table->boolean('status')->default('1');
             $table->string('secction',100)->nullable();
             $table->text('content')->nullable();
             $table->text('description')->nullable();
             $table->string('slug', 50)->nullable();
             $table->integer('categorie_id')->unsigned();
             $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
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
