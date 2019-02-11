<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //sirve para crear datos de prueba en la bbdd
    	/*factory(Category::class, 5)->create(); 
    	factory(Product::class, 15 )-> create();
        factory(ProductImage::class, 200)->create();*/

        $categories = factory(Category::class, 5)-> create();
        $categories->each(function ($category){
            $products = factory(Product::class, 15)->make();
            $category->products()->saveMany($products);

            $products->each(function($p)
            {
                $images =  factory(ProductImage::class, 5)->make();
                $p->images()->saveMany($images);

            });        });
    }
}
