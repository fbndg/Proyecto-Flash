<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/formstylelogin.css">
    <link rel="stylesheet" href="/css/estilos.css">

</head>
<body>
    <div id="app">
      <div class="container">

        <div class="logo">
           <a href="http://localhost:8000/Index">
             <img src="/storage/flashLogo.png" alt="Logotipo">
           </a>
           <p>flashtorecomputacion.com</p>
        </div>

        <nav class="navbar navbar-expand-sm justify-content-center ">

            <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#buno">
                <i class="fa fa-bars tros" aria-hidden="false"></i>
            </button>



              <div class="collapse navbar-collapse" id="buno">
                <ul class="navbar-nav">
                  <li class="nav-item"><a href="http://localhost:8000/Index" class="nav-link">Inicio</a></li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Productos</a>
                    <div class="dropdown-menu">
                      <div class="dropdown-header"><a href="http://localhost:8000/Store">Todas las categorias</a></div>
                      <div class="dropdown-divider"></div>
                      <a href="http://localhost:8000/Category/1" class="dropdown-item">Pc's de escritorio</a>
                      <a href="http://localhost:8000/Category/2" class="dropdown-item">Notebooks</a>
                      <a href="http://localhost:8000/Category/3" class="dropdown-item">Impresoras</a>
                    </div>
                  </li>
                  <li class="nav-item"><a href="http://localhost:8000/faq" class="nav-link">Preguntas frecuentes</a></li>
                  <li class="nav-item"><a href="http://localhost:8000/Contacto" class="nav-link">Contacto</a></li>

                </ul>
              </div>
              <div class="collapse navbar-collapse" id="buno">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>


            @yield('content')

        <div class="cont-imagen">
          <div id="imagen">
            <a href="#"><img src="/storage/flechaSubir.jpg" alt="Flecha"></a>
          </div>
        </div>

        <footer class="footer">
          <div class="social">
            <a href="https://es-la.facebook.com" target="_blank"><img src="/storage/icono1.png" alt"Facebook"></a>
            <a href="https://twitter.com" target="_blank"><img src="/storage/icono2.png" alt"Twitter"></a>
            <a href="https://www.youtube.com" target="_blank"><img src="/storage/icono3.png" alt"Youtube"></a>
          </div>
          <p><span>&copyflashtore</span></a> | All rights reserved  | 2020</p>
        </footer>

      </div>
    </div>
<script src="https://kit.fontawesome.com/60afb82e62.js" crossorigin="anonymous"></script>
</body>
</html>
