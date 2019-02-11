@extends('layouts.app')
@section ('body-class', 'product-page')
@section('content')
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Registro de un producto</h2>
            <form method="post" action="{{url('/admin/products')}}">
          @if ($errors->has('name'))
          <div class="alert alert-danger"> 
            <span class="help-block">
                <strong>{{ $errors->first('name') }}
                        {{ $errors->first('price') }}
                       {{ $errors->first('description') }}
                       {{ $errors->first('long_description') }}
                </strong>
            </span>
          @endif
          </div>
              @csrf
    <div class="row">
     <div class="col-md-4 text-center">
        <div class="form-group label-floating">
          <label class="control-label">Nombre</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>
      </div>
      <div class="col-md-4 text-center">
         <div class="form-group label-floating">
          <label class="control-label">Descripción del producto</label>
          <input type="text" class="form-control" name="description" value="{{ old('description')}}">
        </div>
      </div>
          <div class="col-md-4 text-center">
        <div class="form-group label-floating">
          <label class="control-label ">Precio</label>
          <input type="text" class="form-control" name="price" value="{{old('price')}}" >
        </div>
      </div>
    </div>
      <div class="text-center">
        <div class="form-group label-floating">
         <textarea class="form-control" placeholder="Introduzca la descripción del producto" rows="3" name="long_description">{{old('long_description')}}</textarea>
        </div>
      </div>
      <div>
      <button class="btn btn-success">Registrar</button>
      </div>
      <div>
        <a href="{{url('/admin/products/')}}" class="btn btn-default">Cancelar</a>
      </div>
   </div>
 </form>
</div>
</div>
</div>
</div>
@endsection