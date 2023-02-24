<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Displays',
                'slug' => 'displays',
                'description' => 'Electronic displays and display technology from industry-leading manufacturers',
                'image' => '/img/categories/category-2.jpg',
            ],
            [
                'name' => 'Multimedia',
                'slug' => 'multimedia',
                'description' => 'New and popular multimedia components from top industry manufacturers',
                'image' => '/img/categories/category-3.jpg',
            ],
            [
                'name' => 'Microcontrollers and Processors',
                'slug' => 'microcontrollers-and-processors',
                'description' => 'Wide selection of microcontrollers and processors in-stock from industry-leading manufacturers.',
                'image' => '/img/categories/category-4.jpg',
            ],
            [
                'name' => 'Power Supplies',
                'slug' => 'power-supplies',
                'description' => 'Wide selection of power supplies, modules and adaptors from leading manufacturers.',
                'image' => '/img/categories/category-5.jpg',
            ],
            [
                'name' => 'Audio Components',
                'slug' => 'audio-components',
                'description' => 'Wide selection of audio buzzers, microphones and speakers from the top manufacturers in the industry.',
                'image' => '/img/categories/category-6.jpg',
            ],
            [
                'name' => 'Computer Products',
                'slug' => 'computer-products',
                'description' => 'Computer Products from industry-leading manufacturers.',
                'image' => '/img/categories/category-7.jpg',
            ],
            [
                'name' => 'Programmable Devices',
                'slug' => 'programmable-devices',
                'description' => 'Wide selection of programmable devices from top industry manufacturers.',
                'image' => '/img/categories/category-8.jpg',
            ],
            [
                'name' => 'Motors',
                'slug' => 'motors',
                'description' => 'Electric motors and electronic motor components from top manufacturers',
                'image' => '/img/categories/category-9.jpg',
            ],
            [
                'name' => 'Batteries',
                'slug' => 'batteries',
                'description' => 'Selection of batteries and battery accessories in-stock and ready to ship from top manufacturers.',
                'image' => '/img/categories/category-10.jpg',
            ],
            [
                'name' => 'Drivers and Interfaces',
                'slug' => 'drivers-and-interfaces',
                'description' => 'Electronic drivers and interfaces from industry leading manufacturers',
                'image' => '/img/categories/category-11.jpg',
            ],
            [
                'name' => 'Connectors',
                'slug' => 'connectors',
                'description' => 'Online selection of connectors for every application.',
                'image' => '/img/categories/category-12.jpg',
            ],
        ];

        foreach ($categories as $cat) {

            Category::updateOrCreate(
                [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ],
                [
                    'description' => $cat['description'],
                    'image' => $cat['image'],
                    'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                    'parent_id' => null,
                ]
            );
        }
        $parentCategory = Category::where('slug', 'displays')->first();

        Category::updateOrCreate(
            [
                'name' => 'LCD Displays',
                'slug' => 'lcd-displays',
            ],
            [
                'description' => 'LCD displays from top manufacturers',
                'image' => '/img/categories/lcd-displays.jpg',
                'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                'parent_id' => $parentCategory->id,
            ]
        );
        $parentCategory = Category::where('slug', 'displays')->first();

        Category::updateOrCreate(
            [
                'name' => 'Display Modules',
                'slug' => 'display-modules',
            ],
            [
                'description' => 'Wide range of display modules from industry leading manufacturers',
                'image' => '/img/categories/display-modules.jpg',
                'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                'parent_id' => $parentCategory->id,
            ]
        );

        $parentCategory = Category::where('slug', 'lcd-displays')->first();
        Category::updateOrCreate(
            [
                'name' => 'LCD Monitors',
                'slug' => 'lcd-monitors',
            ],
            [
                'description' => 'LCD monitors from top manufacturers',
                'image' => '/img/categories/lcd-monitors.jpg',
                'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                'parent_id' => $parentCategory->id,
            ]
        );

        $parentCategory = Category::where('slug', 'lcd-displays')->first();
        Category::updateOrCreate(
            [
                'name' => 'LCD Touch Screens',
                'slug' => 'lcd-touch-screens',
            ],
            [
                'description' => 'A liquid crystal display touch screen has additional layers built on top of the display elements themselves, which provide the touch functionality. ',
                'image' => '/img/categories/lcd-touch-screens.jpg',
                'status_id' => Status::where(['name' => 'active', 'type'=>'product'])->first()->id,
                'parent_id' => $parentCategory->id,
            ]
        );
    }
}
