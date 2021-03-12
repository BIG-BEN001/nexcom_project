<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tecshop_users_id')->unsigned();
            $table->integer('tecshop_products_id')->unsigned();
            $table->foreign('tecshop_users_id')->references('id')->on('tecshop_users');
            $table->foreign('tecshop_products_id')->references('id')->on('tecshop_products');
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
        Schema::dropIfExists('wishlists');
    }
}
