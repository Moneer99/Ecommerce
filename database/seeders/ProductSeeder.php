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
           'title' => 'Product-1',
           'price'=>938,
           'description' => 'this is a description for product 1',
           'quantity' =>93,
           'image' => '2.jpg'
        ],
           [
           'title' => 'Product-2',
           'price'=>388,
           'description' => 'this is a description for product 2',
           'quantity' =>22,
           'image' => '2.jpg'
        ],
        [
            'title' => 'Product-3',
            'price'=>204,
            'description' => 'this is a description for product 3',
            'quantity' =>48,
            'image' => '2.jpg'
        ],
        [
            'title' => 'Product-4',
            'price'=>24,
            'description' => 'this is a description for product 4',
            'quantity' =>8,
            'image' => '2.jpg'
        ],
        [
            'title' => 'Product-5',
            'price'=>43,
            'description' => 'this is a description for product 5',
            'quantity' =>78,
            'image' => '2.jpg'
        ],
        [
            'title' => 'Product-6',
            'price'=>780,
            'description' => 'this is a description for product 6',
            'quantity' =>86,
            'image' => '2.jpg'
        ],
        ]);
    }
}