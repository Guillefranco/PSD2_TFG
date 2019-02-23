<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
	public function product(){

			/*Un producto asociado a varios carritos, pero pertenece a un solo detalle del carrito*/
		   return $this->belongsTo(Product::class);

	}

}
