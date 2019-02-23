@extends('layouts.app')


@section ('body-class', 'login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
               <form method="POST" action="{{ route('register') }}"> 
                  @csrf
                  <div class="card-header card-header-primary text-center">
                     <h4 class="card-title">Registro </h4>
                  </div>
                  <p class="description text-center"></p>
                  <div class="card-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                      </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
              </div>

              <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
              </div>
              <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" value="{{ old('apellidos') }}" required autofocus>
          </div>

                      <div class="input-group">
                          <span class="input-group-text">
                                <i class="material-icons">email</i>
                           </span>
                                 <input id="email" type="email" placeholder="Correo electrónico" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      </div>
                         <div class="input-group">
                           <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                           </span>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña...">
                      </div>
                      <div class="input-group">
                           <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                           </span>
                              <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Confirmar Contraseña...">
                      </div>

                  </div>
                  </br>
              </br>
          </br>
                     <div class="footer text-center">
                        <button  name="Submit" type="submit" class="btn btn-primary">Confirmar</button>

                 </div>
                 <!-- <a class="btn btn-link" href="{{ route('password.request')}}">
                    ¿Olvidaste tu contraseña?
                </a> -->
            </form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
