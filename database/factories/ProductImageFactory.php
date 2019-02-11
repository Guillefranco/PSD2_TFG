<?php

use Faker\Generator as Faker;
use App\ProductImage;
$factory->define(ProductImage::class, function (Faker $faker) {
    return [
    	'image' => $faker->imageUrl(250,250),//ancho y largo de la imagen de muestra
    	'product_id' => $faker->numberBetween(1,15)
    ];
});
