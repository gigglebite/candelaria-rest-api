<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'title' => 'Jacket' ,
            'description' => 'Given Jacket Description',
            'currency' => 'PHP',
            'price' => 1234.56,
            'brand' => 'KuyaWill',
            'category' => 'apparel',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);

        $product->save();

        $product = new Product([
            'title' => 'Percy Jackson' ,
            'description' => 'Fantasy Book',
            'currency' => 'PHP',
            'price' => 1234.56,
            'brand' => 'National Bookstore',
            'category' => 'book',
            'image' => 'https://i.ibb.co/JmffwT9/Battle-of-Labyrinth-New-TP.webp',
        ]);

        $product->save();

        $product = new Product([
            'title' => 'iPhone 14' ,
            'description' => 'Latest cool phone',
            'currency' => 'PHP',
            'price' => 80000.75,
            'brand' => 'Apple',
            'category' => 'electronic device',
            'image' => 'https://photos5.appleinsider.com/gallery/product_pages/291-hero.jpg?=1663939036',
        ]);

        $product->save();
    }
}
