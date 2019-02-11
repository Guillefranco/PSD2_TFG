@extends('layouts.app')
@section ('body-class', 'profile-page sidebar-collapse')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/profile_city.jpg')">
@section('content')
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
                <h6>{{$product->category->name}}</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          {{$product->long_description}}
        </div>
        <div class="text-center">
        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modal">
            <i class="material-icons">add</i>Añadir al carrito de compras
        </button>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              <div class="col-md-3 ml-auto">
              </div>
               <div class="col-md-3 mr-auto">
                <img src="/img/examples/studio-5.jpg" class="rounded">
                <img src="/img/examples/studio-4.jpg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="/img/examples/olu-eletu.jpg" class="rounded">
                <img src="/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="/img/examples/cynthia-del-rio.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="/img/examples/clem-onojegaw.jpg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="/img/examples/studio-3.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="/img/examples/olu-eletu.jpg" class="rounded">
                <img src="/img/examples/studio-1.jpg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Cuántos productos desea añadir?</h5>
        <form method="post" action="">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="number" name="quantity" value="1" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Añadir al carro</button>
      </div>


        </form>
        
    </div>
  </div>
</div>




@endsection


