<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_number')->unique();
            $table->integer('tecshop_users_id');
            $table->foreign('tecshop_users_id')->references('id')->on('tecshop_users');
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->integer('total');
            $table->integer('item_count');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('street_address');
            $table->text('region');
            $table->string('phone_number');
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
        Schema::dropIfExists('orders');
    }
}
