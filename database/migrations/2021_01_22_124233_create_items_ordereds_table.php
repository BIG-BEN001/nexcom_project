<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsOrderedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_ordereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->index();
            $table->unsignedBigInteger('tecshop_products_id')->index();
            $table->unsignedInteger('quantity');
            $table->decimal('price', 20, 2);
            $table->string('product');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('tecshop_products_id')->references('id')->on('tecshop_products')->onDelete('cascade');
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
        Schema::dropIfExists('items_ordereds');
    }
}
