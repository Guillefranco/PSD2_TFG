@extends('layouts.app')
@section ('body-class', 'profile-page')


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="{{$product->images()->first()->image}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
             <h3 class="title">{{$product->name}}</h3>
           </div>
           <h6>{{$product->category->name}}</h6>
         </div>
         @if (session('notificacion'))
         <div class="alert alert-success">
          {{session('notificacion')}}
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="description text-center">
    {{$product->long_description}}
  </div>
  <div class="price text-center">
    &euro;{{$product->price}}
  </div>
  <div class="text-center">
    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modal">
      <i class="material-icons">add</i>Añadir al carrito de compras
    </button>
  </div>
</div>

</div>

</div>

</div>
</div>
</div>
</body>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal">¿Cuántos productos desea añadir?</h5>
        <form method="post" action="{{ url('/cart') }}">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <div class="modal-body">
            <input type="number" name="quantity" value="1" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
          </div>
        </form>
      </div>
    </div>
  </div>




  @endsection


