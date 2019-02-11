@extends('layouts.app')
@section ('body-class', 'product-page')
@section('content')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url(&quot;./assets/img/bg2.jpg&quot;); transform: translate3d(0px, 0.266667px, 0px);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1 class="text-center">Administración</h1>
          </div>
        </div>
            <div id="navigation-pills">
          <div class="title text-center">
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <ul class="nav nav-pills nav-pills-icons" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">shopping_cart</i> Carrito de compras
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">list</i> Pedidos realizados
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                  Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                  <br>
                  <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                </div>

                <div class="tab-pane" id="tasks-1">
                  Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                  <br>
                  <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
              </div>
            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    @endsection


