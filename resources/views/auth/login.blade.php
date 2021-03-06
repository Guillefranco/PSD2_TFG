@extends('layouts.app')
@section ('body-class', 'login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
               <form method="POST" action="{{ route('login') }}"> 
                  @csrf
                  <div class="card-header card-header-primary text-center">
                     <h4 class="card-title">Inicio de sesión </h4>
                  </div>
                  <p class="description text-center"></p>
                  <div class="card-body">
                      <div class="input-group">
                          <span class="input-group-text">
                                <i class="material-icons">email</i>
                           </span>
                                 <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      </div>
                         <div class="input-group">
                           <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                           </span>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password...">
                      </div>
                  </div>
                  </br>
              </br>
          </br>
                     <div class="footer text-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        
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