<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
    	return view('admin.products.index')->with(compact('products'));
    }

    public function create()
    {
    	return view('admin.products.create');
    }

    public function store (Request $request)
    {
        //Reglas para validar el formulario de guardado
        $rules = [
            'name' => 'required|min:2',
            'description' => 'required|max:150',
            'price' => 'required|numeric|min:0',
            'long_description' => 'max:500'
            ];
        $this->validate($request,$rules);
        //dd($request->all()); //Funcion dd sirve para imprimir en json el formulario
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price= $request->input('price');
        $product->save(); //Guarda en la bbdd

        return redirect ('/admin/products');

        
    }


        public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }

    public function update (Request $request, $id)
    {
               //Reglas para validar el formulario de edit
        $rules = [
            'name' => 'required|min:2',
            'description' => 'required|max:150',
            'price' => 'required|numeric|min:0',
            'long_description' => 'max:500'
            ];
        $this->validate($request,$rules);
        //dd($request->all()); //Funcion dd sirve para imprimir en json el formulario
        $product = Product::FindorFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price= $request->input('price');
        $product->save(); //Guarda en la bbdd

        return redirect ('/admin/products');

    }

public function destroy($id)
{

 
    $product = Product::find($id);
    $product->delete(); // DELETE
 
    return back();
}
}
