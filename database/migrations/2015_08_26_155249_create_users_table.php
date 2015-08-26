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
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('middlename', 50);
            $table->timestamp('birthdate');
            $table->string('gender', 10);
            $table->string('mobilenumber', 20);
            $table->string('nationality', 30);
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
