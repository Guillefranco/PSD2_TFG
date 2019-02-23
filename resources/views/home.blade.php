@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ml-auto mr-auto">
      <div class="brand">
        <h1 class="text-center">Administración</h1>
      </div>
      @if (session('notificacion'))
      <div class="alert alert-success">
        {{session('notificacion')}}
      </div>
      @endif
    </div>
    <div id="navigation-pills">
      <div class="title text-right">
      <div class="row">
        <div class="col-lg-6 col-md-8">
          <ul class="nav nav-pills nav-pills-icons" role="tablist">
          </ul>
        </div>
        <div class="tab-content tab-space text-center">
          <div class="tab-pane active" id="dashboard-1">
            <table class="table">

              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Nombre</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                  <th class="text-right">Opciones</th>
                </tr>
              </thead>
              <tbody>
                  @foreach (auth()->user()->cart->details as $detail)
                      <tr>
                        <td>
                          <div class="img-container">
                            <img src="{{$detail->product->images()->first()->image}}" height="100" >
                          </div>
                        </td>
                        <td class="td-name">
                         <a href="{{url('/products/'.$detail->product->id)}}" target="_blank">{{$detail->product->name}}
                          <br/>
                        </td>
                        <td>
                          &euro;{{$detail->product->price}}
                        </td>
                        <td>
                         {{$detail->quantity}}
                       </td>
                       <td class="td-number text-right">
                        &euro;{{$detail->quantity * $detail->product->price}}
                      </td>
                      <td>
                       <a href="{{url('/products/'.$detail->product->id)}}" target="_blank" class="btn btn-info   btn-round btn-block">Info</a>
                     </td>
                     <td>
                      <form method="post" action="{{url('/cart') }}" >
                    {!! method_field('DELETE') !!}
                    @csrf
                    <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                    <a href="{{url('/products/'.$detail->product->id)}}" target="_blank" title="Eliminar"></a>
                       <button type="submit" rel="tooltip" class="btn btn-danger" title="Eliminar">
                        <i class="material-icons">delete</i>
                      </button>
                    </td>
                    <td>
                      <a href="{{url('/products/'.$detail->product->id)}}" target="_blank" class="btn btn-red   btn-round btn-block">Pagar</a>
                      </td>
                  </div>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modal">¿Con que banco desea pagar?</h5>
                  <div class="modal-footer">
                    <hr>
                    <hr>
                    <i class="material-icons">account_balance</i>
                    <a href="{{url('/loginbbva')}}">BBVA</a>
                    <i class="material-icons">account_balance</i>
                    <a href="{{url('/loginsantander')}}">Santander</a>

                    <i class="material-icons">account_balance</i>
                    <a href="{{url('/loginbankia')}}">Bankia</a>
                  </div>
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


