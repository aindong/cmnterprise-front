<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->integer('bike_type_id')->unsigned();
            $table->string('category', 30);
//            $table->integer('event_category_id')->unsigned();
            $table->string('tshirt_size', 10);
            $table->string('racer_bib_no', 20)->nullable();
            $table->string('racer_tag_no', 20)->nullable();
            $table->integer('transaction_id')->unsinged()->nullable();
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
        Schema::drop('user_events');
    }
}
