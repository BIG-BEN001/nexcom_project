<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(array(
            array(
            'name' => "earphones",
            'price' => '200',

            ),
            array(
            'name' => "headphones",
            'price' => '2000',

            ),
            array(
                'name' => "speaker",
                'price' => '1500',

                )
            ));
    }
}
