<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 1; $i <=100; $i++ )
        {
            DB::table('products')->insert([
                'name' => str_random(10),
                'description' => str_random(10).'@gmail.com',
                'image_url'   => 'http://via.placeholder.com/320x150',
                'price'       => rand(1, 999999),
                'reviews'     => rand(0, 100),
                'rating'      => 5
            ]);
        }
    }
}