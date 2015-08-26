<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTransactiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transaction_no');
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->string('payment_method', 50);
            $table->double('amount');
            $table->timestamp('payment_date');
            $table->string('status', 50);
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
        Schema::drop('user_transactions');
    }
}
