<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_alternative')->unique();
            $table->string('password');
            $table->enum('status', ['New', 'Active', 'Suspended'])->default('New');
            $table->enum('sex', ['', 'male', 'female'])->nullable();
            $table->date('birthdate')->nullable();
            $table->text('description')->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->integer('country')->nullable();
            $table->string('photo', 500)->nullable();
            $table->string('web', 100)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
