<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);//un producto tiene una categoria

    }

    public function images()
    {

    	return $this->hasMany(ProductImage::class);//un producto tiene muchas imagenes
    }
}
