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
                <img src="/img/faces/christian.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
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
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Studio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                    <i class="material-icons">palette</i> Work
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Favorite
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              <div class="col-md-3 ml-auto">
               <a href="{{url('/products/'.$product->id)}}">
                <img src="{{$product->images()->first()->image}}" class="rounded-circle">
               <a href="{{url('/products/'.$product->id) }}">{{$product->name}}</a>
                <img src="/img/examples/studio-2.jpg" class="rounded">
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




@endsection


