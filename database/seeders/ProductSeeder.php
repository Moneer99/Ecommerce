<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
           'title' => 'Boy’s Shose',
           'price'=>38,
           'description' => 'this is a description for product 1',
           'quantity' =>12,
           'image' => '1.jpg'
        ],
           [
           'title' => "Boy’s T-Shirt",
           'price'=>45,
           'description' => 'this is a description for product 2',
           'quantity' =>22,
           'image' => '2.jpg'
        ],
        [
            'title' => "Gril's T-Shirt",
            'price'=>52,
            'description' => 'this is a description for product 3',
            'quantity' =>8,
            'image' => '3.jpg'
        ],
        [
            'title' => 'Boy’s Pants',
            'price'=>65,
            'description' => 'this is a description for product 4',
            'quantity' =>17,
            'image' => '4.jpg'
        ],
         [
           'title' => 'Boy’s Shose',
           'price'=>38,
           'description' => 'this is a description for product 1',
           'quantity' =>12,
           'image' => '1.jpg'
        ],
           [
           'title' => "Boy’s T-Shirt",
           'price'=>45,
           'description' => 'this is a description for product 2',
           'quantity' =>22,
           'image' => '2.jpg'
        ],
        [
            'title' => "Gril's T-Shirt",
            'price'=>52,
            'description' => 'this is a description for product 3',
            'quantity' =>8,
            'image' => '3.jpg'
        ],
        [
            'title' => 'Boy’s Pants',
            'price'=>65,
            'description' => 'this is a description for product 4',
            'quantity' =>17,
            'image' => '4.jpg'
        ],
        ]);
    }
}