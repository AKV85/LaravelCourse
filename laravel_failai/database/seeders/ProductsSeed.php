<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'IDS31-070W540DVA1E',
                'brand' => 'Advantech',
                'slug' => 'advantech-ids31-070w540dva1e',
                'description' => '7in LCD Monitor WVGA with Touchscreen 800x480Pixels',
                'image' => '/img/products/product-2.jpg',
                'category_id'=>'13',
                'price' => '650',

            ],
            [
                'name' => 'IDS-3115P-K2XGA1E',
                'brand' => 'Advantech',
                'slug' => 'advantech-IDS-3115p-k2xga1e',
                'description' => '15in LCD Monitor XGA with Touchscreen 1024x768Pixels',
                'image' => '/img/products/product-2.jpg',
                'category_id'=>'13',
                'price' => '650',
            ],
            [
                'name' => 'FIT0476',
                'brand' => 'DFRobot',
                'slug' => 'DFRobot-fit0476',
                'description' => '10.1" Diagonal - 1280x800 IPS HDMI/VGA/AV Display (Compatible with Raspberry Pi & LattePanda)',
                'image' => '/img/products/product-3.jpg',
                'category_id'=>'13',
                'price' => '100',

            ],
            [
                'name' => 'DFR0658',
                'brand' => 'DFRobot',
                'slug' => 'DFRobot-dfr0658',
                'description' => '8.9" 1920x1200 IPS Touch Display (Compatible with Raspberry Pi 4B/3B+&Jetson Nano&LattePanda)',
                'image' => '/img/products/product-4.jpg',
                'category_id'=>'13',
                'price' => '150',

            ],
//            [
//                'name' => 'Kompiuterinė technika',
//                'brand' => 'Advantech',
//                'name' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Kompiuterių ir IT įrengimų kategorija',
//                'image' => '/img/products/product-5.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Auto prekės',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Automobilių prekių ir aksesuarų kategorija',
//                'image' => '/img/categories/category-6.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Sporto reikmenys',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Sporto reikmenų ir įrangos kategorija',
//                'image' => '/img/categories/category-7.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Vaikų prekės',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Vaikų prekių ir žaislų kategorija',
//                'image' => '/img/categories/category-8.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Kosmetika ir higiena',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Kosmetikos ir higienos produktų kategorija',
//                'image' => '/img/categories/category-9.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Baldai',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Namų ir kanceliarijos baldų kategorija',
//                'category_id'=>'1',
//                'image' => '/img/categories/category-10.jpg',
//            ],
//            [
//                'name' => 'Maisto prekės',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Maisto produktų ir ingredientų kategorija',
//                'image' => '/img/categories/category-11.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
//            [
//                'name' => 'Aksesuarai',
//                'brand' => 'Advantech',
//                'identification_number' => 'IDS31-070W540DVA1E',
//                'slug' => 'advantech-ids31-070w540dva1e',
//                'description' => 'Asmeniniams aksesuarams ir papuošalams',
//                'image' => '/img/categories/category-12.jpg',
//                'category_id'=>'1',
//                'price' => '650',
//
//            ],
        ];

        foreach ($products as $product) {

            Product::updateOrCreate(
                [
                    'name' => $product['name'],
                    'slug' => $product['slug'],
                    'brand' => $product['brand'],
                ],
                [
                    'description' => $product['description'],
                    'image' => $product['image'],
                    'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                    'category_id' => $product['category_id'],
                    'price' => $product['price'],
                ]
            );
        }
    }
}
