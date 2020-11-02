<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/plantilla.js') }}" defer></script>

    <!-- Fonts --> 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
  
    <div id="app">
        <nav id="barra" class="nav-extended black">
            <div class="nav-wrapper container-fluid"  >
              <span  class="brand-logo"><a href="/">Logo</a> @auth| <a href="#" class="dropdown-trigger"  data-target='dropdown1'> {{Auth::user()->name}} </a> @endauth </span>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              
              <ul class="right hide-on-med-and-down">


                {{-- <li><a class="waves-effect waves-light" href="{{route('catalogo.index')}}">Catálogo</a></li> --}}
                {{-- <li><a class="waves-effect waves-light" href="{{route('blog.index')}}">Blog</a></li> --}}
                <li><a class="waves-effect waves-light" href="{{route('nosotros.index')}}">Nosotros</a></li>
              <li><a href="{{route('contactanos.create')}}" class="waves-effect waves-light" href="#">Contáctanos</a></li>
              </ul>
            </div>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="{{route('home')}}">Mensajes</a></li>
                  <li><a href="{{route('articulo.index')}}">Gestor</a></li>

                  <li class="divider" tabindex="-1"></li>
                  <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form></li>
                </ul>
          </nav>
          <ul class="sidenav"  id="mobile-demo">
            <a href="/"><h5 class="container py-2 center-align border-f black-text">Somer Black</h5></a>
            {{-- <li><a class="waves-effect " href="{{route('catalogo.index')}}">Catálogo</a></li> --}}
            {{-- <li><a class="waves-effect " href="{{route('blog.index')}}">Blog</a></li> --}}
            <li><a class="waves-effect " href="{{route('nosotros.index')}}">Nosotros</a></li>
            <li><a href="{{route('contactanos.create')}}" class="waves-effect " href="#">Contáctanos</a></li>
          </ul>
                  
        
        <main>
            @yield('content')
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red darken-4 pulse">
                  <i class="large material-icons">menu</i>
                </a>
                <ul>
                  <li><a href="https://api.whatsapp.com/send?phone=+525566704496&text=Hola me gustaría recibir más información" target="_blank"  class="btn-floating  green accent-4"><i class="fab fa-whatsapp"></i></a></li>
                  <li><a href="{{route('contactanos.create')}}" href="#"class="btn-floating greedeep-orange darken-1
                    n"><i class="material-icons">mail_outline</i></a></li>
                  <li><a href="#" class="btn-floating blue hide-on-med-and-up"><i class="material-icons">phone</i></a></li>
                </ul>
              </div>
        </main>
        <div style="margin-top: 35vh;"></div>

        <footer>
            @yield('footer')
                <footer class="blue-grey lighten-4 py-2">
                    <div class="center-align">
                        <a class="blue-text text-light-blue text-darken-3 px-1  " href="#"><i class="redes-sociales fab fa-facebook"></i></a>
                        <a class="blue-text  text-light-blue text-lighten-2 px-1" href="#"><i class=" redes-sociales fab fa-twitter"></i></a>
                        <a class="pink-text text-accent-3  text-darken-3 px-1" href="#"><i class="redes-sociales fab fa-instagram"></i></a>
                    </div>
                    <div class="center-align">
                        Todos los derechos reservados  &copy; 2020
                    </div>
                    <div class="center-align">
                    <a class="grey-text text-darken-3" href="/politicadeprivacidad">Política de privacidad</a>
                  </div>
                </footer>
        </footer>
        <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>
    </div>
</body>
<script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        direction: 'top',
        hoverEnabled: false,
        
    });
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
 

    });
    @yield('inicializacionjs')

  
</script>
</html>
