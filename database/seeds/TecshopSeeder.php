<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TecshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tecshop_products')->insert(array(
            array(
            'product' => "Tophome earbud",
            'price' => '550',
            'image' => '/images/l2.jpg',
            'qty' => 1,
            ),
            array(
            'product' => "POWERADD Energy",
            'price' => '4000',
            'image' => '/images/l3.png',
            'qty' => 1,
            ),
            array(
            'product' => "smartphone stand",
            'price' => '2500',
            'image' => '/images/e.jpg',
            'qty' => 1,
            ),
            array(
                'product' => "Tesla Coil ",
                'price' => '1000',
                'image' => '/images/f.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Amir clip",
                'price' => '900',
                'image' => '/images/g.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Travelambo RFID",
                'price' => '1800',
                'image' => '/images/h.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Samsung Evo",
                'price' => '4400',
                'image' => '/images/s3.png',
                'qty' => 1,
            ),
            array(
                'product' => "Streamlight 73001",
                'price' => '2000',
                'image' => '/images/d1.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Jelly Comb",
                'price' => '1800',
                'image' => '/images/s1.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Bellabeat Leaf",
                'price' => '1100',
                'image' => '/images/s2.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Bluetooth speaker",
                'price' => '5000',
                'image' => '/images/s4.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Marshall Acton",
                'price' => '6000',
                'image' => '/images/sm1.png',
                'qty' => 1,
            ),
            array(
                'product' => "Polar Vantage",
                'price' => '500',
                'image' => '/images/sm2.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "Rangefinder",
                'price' => '4000',
                'image' => '/images/h.jpg',
                'qty' => 1,
            ),
            array(
                'product' => "storage box",
                'price' => '800',
                'image' => '/images/l2.jpg',
                'qty' => 1,
            )
            ));
    }
}
