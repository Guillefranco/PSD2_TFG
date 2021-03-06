<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    APP ONLINE PSD2 
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{ asset('css/material-kit.css')}}" rel="stylesheet" />
</head>
<body class="@yield ('body-class')">
    <body class="login-page sidebar-collapse">
      <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="{{url('/')}}">
            APP ONLINE PSD2 </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown">
                      <ul class="dropdown-menu">
                        <li> 
                          <a class="dropdown-item" href="{{url('/home')}}" >Carrito de compras</a>
                        </li>
                     @if (auth()->user()->admin)
                          <a class="dropdown-item" href="{{url('/admin/products')}}" >Administración productos</a>

                        </li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Cerrar Sesión') }}  </a></li>
                      </ul>
                    </div>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </div>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>

@yield('content') <!-- Continuación de home.blade -->
<!--   Core JS Files   -->
<script src="{{ asset('/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/js/material-kit.js')}}" type="text/javascript"></script>
</body>

</html>
