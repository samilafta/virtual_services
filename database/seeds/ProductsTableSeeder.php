<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Product::create([
           'name' => 'Drone HJ45',
           'image' => 'uploads/products/prod1.jpg',
            'price' => 1500.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 1,
         ]);

        \App\Product::create([
            'name' => 'Canon HD23 Camera',
            'image' => 'uploads/products/prod2.png',
            'price' => 1000.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 1,
         ]);

        \App\Product::create([
            'name' => 'Nikon J54',
            'image' => 'uploads/products/prod3.jpg',
            'price' => 2400.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 2,
         ]);

        \App\Product::create([
            'name' => 'Rockstart Video Camera',
            'image' => 'uploads/products/prod4.jpg',
            'price' => 4500.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 2,
         ]);

        \App\Product::create([
            'name' => 'Macbook Air Pro',
            'image' => 'uploads/products/prod5.jpg',
            'price' => 6000.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 3,
         ]);

        \App\Product::create([
            'name' => 'Audio Converter',
            'image' => 'uploads/products/prod6.png',
            'price' => 2000.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 3,
         ]);

        \App\Product::create([
            'name' => 'MTX Audio',
            'image' => 'uploads/products/prod7.jpg',
            'price' => 1800.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 4,
         ]);

        \App\Product::create([
            'name' => 'Klipsch Woofer',
            'image' => 'uploads/products/prod8.jpg',
            'price' => 2700.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 4,
         ]);

        \App\Product::create([
            'name' => 'Nvidia Graphics Card',
            'image' => 'uploads/products/prod9.gif',
            'price' => 4400.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 5,
         ]);

        \App\Product::create([
            'name' => 'FlatScreen TV',
            'image' => 'uploads/products/prod10.jpeg',
            'price' => 4400.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet orci ac lorem ultrices tempus. Phasellus pretium, est nec pulvinar tincidunt, lacus enim viverra turpis, eget condimentum augue risus eget ipsum. Sed vitae neque euismod, tincidunt mauris nec, vehicula tellus. Nulla ac faucibus felis. Vestibulum est arcu, ultricies id vestibulum nec, auctor vitae arcu. Suspendisse sit amet nisi a elit consectetur faucibus. Praesent vestibulum tellus nec magna rhoncus sollicitudin. Maecenas suscipit ligula elementum sem lacinia, non tincidunt ipsum consectetur.',
            'category_id' => 5,
         ]);



    }
}
