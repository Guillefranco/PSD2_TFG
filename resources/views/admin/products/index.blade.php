@extends('layouts.app')
@section ('body-class', 'login-page sidebar-collapse')
@section('content')

  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Listado de productos</h2>
        <a href="{{ url('/admin/products/create') }}" class="btn btn-primary text-center">Agregar Producto</a>
        <div class="team">
          <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Descripción extensa</th>
                        <th>Precio</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category ?  $product->category->name: 'Por defecto'}}</td>
                        <td>{{$product->long_description}}</td>
                        <td class="text-right">&euro;{{$product->price}}</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info">
                                <i class="material-icons">info</i>
                            </button>
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}"  rel="tooltip" class="btn btn-success">
                                <i class="material-icons">edit</i>
                            </a>
                            <form method="post" action="{{url('/admin/products/'.$product->id)}}">
                              {!! method_field('DELETE') !!}
                            @csrf                            
                            <button type="submit" rel="tooltip" class="btn btn-danger">
                              <i class="material-icons">delete</i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
                <div class="text-right"> 
                {{$products -> links()}}
                </div>
              </div>

            </div>
          </div>
        </div>
@endsection