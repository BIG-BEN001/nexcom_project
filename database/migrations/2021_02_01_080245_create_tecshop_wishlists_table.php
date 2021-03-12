<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecshopWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('tecshop_wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tecshop_users_id')->length(20)->unsigned();
            $table->bigInteger('tecshop_products_id')->length(20)->unsigned();
            $table->foreign('tecshop_users_id')->references('id')->on('tecshop_users');
            $table->foreign('tecshop_products_id')->references('id')->on('products');
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
        Schema::dropIfExists('tecshop_wishlists');
    }
}
