<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('shops')->insert(array(
            array(
            'product' => "earphones",
            'price' => '200',
            'image' => '/images/c.jpg',
            ),
            array(
            'product' => "headphones",
            'price' => '2000',
            'image' => '/images/c.jpg',
            ),
            array(
                'product' => "speaker",
                'price' => '1500',
                'image' => '/images/d.jpg',
                )
            ));
    }
}
