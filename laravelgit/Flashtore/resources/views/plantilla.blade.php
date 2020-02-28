<?php session_start();?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
    @yield('css')

  <link rel="stylesheet" href="/css/estilos.css">
  <link rel="stylesheet" href="/css/normalize.css">
  <title>
    @yield('titulo')
  </title>
</head>
<body>
   <div class="container">

     {{-- NAV --}}

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
       <div class="collapse navbar-collapse justify-content-end" id="buno">
         <ul class="navbar-nav">
           @guest


             <li class="nav-item"><a href="http://localhost:8000/login" class="nav-link">Login</a></li>
             <li class="nav-item"><a href="http://localhost:8000/register" class="nav-link">Registro</a></li>
             <!--0501: Agregué el link de abajo para la img del carrito-->
             <li class="nav-item"><a href="index.php" class="nav-link"><img src="/storage/carrito.png" alt="carrito"></a></li>


           @else

             <li class="nav-item"><a href="http://localhost:8000/Perfil" class="nav-link">Usuario</a></li>
             <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Log out</a></li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
             <li class="nav-item"><a href="http://localhost:8000/Carrito" class="nav-link"><img src="/storage/carrito.png" alt="carrito"></a></li>

           @endguest
         </ul>
       </div>
     </nav>

     {{-- END NAV --}}

     @yield('principal')

     {{-- FOOTER --}}

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

     {{-- END FOOTER --}}

   </div>

   <script src="https://kit.fontawesome.com/60afb82e62.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>
