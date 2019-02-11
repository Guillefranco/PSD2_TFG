<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;



class ProductController extends Controller
{
    public function show($id)
    {
    	$product = Product::find($id);
    	$images = $product->images;
        
    	$images_L = collect();
    	$images_R = collect();
    	foreach ($images as $key => $image) {
    		if($key%2==0)
    			$images_L->push($image);
    		else
    			$images_R->push($image);
    	}
    	return view('products.show')->with(compact('product','images_L','images_R'));

    }
}
