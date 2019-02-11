@extends('layouts.app')
@section ('body-class', 'login-page sidebar-collapse')
@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">¡Bienvenido a la tienda online!</h1>
          <h4>Aquí encontrará todo lo que necesite para su hogar, familia, entretenimiento, ocio, moda, videojuegos
          deportes, música, películas y mucho más! Siga visitando la página.</h4>
          <br>
          <!--Cambiar URL para mostrar un producto cualquiera -->
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Let&apos;s talk product</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Productos</h2>
        <div class="team">
          <div class="row">
             @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <img src="{{$product->images()->first()->image}}" class="rounded-circle img-fluid">            
                  <h4 class="card-title"> 
                    <a href="{{url('/products/'.$product->id) }}">{{$product->name}} </a>
                    <br>
                    <small class="card-description text-muted">{{$product->category->name}}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some {{$product->description}}
                      <a href="#">links</a> for people to be able to follow them outside the site.</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
                </div>

              </div>
                 <div class="text-center">
                  {{ $products->links()}}
            </div>
          </div>
        </div>
      </div>
             </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection