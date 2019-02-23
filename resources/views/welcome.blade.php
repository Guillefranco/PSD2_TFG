@extends('layouts.app')
@section ('body-class', 'login-page sidebar-collapse')
@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{('img/paisaje.jpg')}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">¡Bienvenido a la tienda online!</h1>
          <h4>Aquí encontrará todo lo que necesite para su hogar, familia, entretenimiento, ocio, moda, videojuegos
          deportes, música, películas y mucho más! Siga visitando la página.</h4>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
      <div class="section text-center">
        <h2 class="title">Productos</h2>
        <div class="team">
          <div class="row">
             @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <img src="{{$product->images()->first()->image}}" class="img-raised rounded-circle img-fluid">            
                  <h4 class="card-title"> 
                    <a href="{{url('/products/'.$product->id) }}">{{$product->name}} </a>
                    <br>
                    <small class="card-description text-muted">{{$product->category->name}}</small>
                  </h4>

                  <small class="card-description text-muted">{{$product->description}}</small>
                  <strong class="card-description text-muted">&euro;{{$product->price}}</strong>
                </div>
              </div>
            </div>
            @endforeach
                </div>
              </div>
                 <div class="text-right">
                  {{ $products->links()}}
            </div>
          </div>
        </div>
      </div>

@endsection