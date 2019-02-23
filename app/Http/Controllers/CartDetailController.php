<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\CartDetail;
use App\User;

class CartDetailController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
    	$cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;

    	//$cartDetail->cart_id = $request->cart_id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->save();
        $notificacion = "Producto añadido";
    	return back()->with(compact('notificacion'));


    }
    public function destroy(Request $request)
    {

        $cartDetail = CartDetail::find($request->cart_detail_id);
        $cartDetail->delete();

        $notificacion = "Producto eliminado";
        return back()->with(compact('notificacion'));
    }
}
