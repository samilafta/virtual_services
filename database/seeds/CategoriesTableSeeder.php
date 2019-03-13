<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       \App\Category::create([
          'name' => 'Digital electronics',
           'image' =>  'uploads/categories/cat_1.jpg'
       ]);

        \App\Category::create([
            'name' => 'Analogue electronic',
            'image' =>  'uploads/categories/cat_2.jpg'
        ]);

        \App\Category::create([
            'name' => 'Microelectronics',
            'image' =>  'uploads/categories/cat_3.jpg'
        ]);

        \App\Category::create([
            'name' => 'Power electronics',
            'image' =>  'uploads/categories/cat_4.jpg'
        ]);

        \App\Category::create([
            'name' => 'Optoelectronics',
            'image' =>  'uploads/categories/cat_5.jpg'
        ]);

    }
}
