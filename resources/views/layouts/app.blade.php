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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="fondo">
    <div id="app">
            <div class="container-fluid">
                <nav class="border-bottom border-success d-flex navbar navbar-expand-lg">
                    <a href="{{ url('/') }}" style="margin: auto"><h1 class="tihome">MiMascota!</h1></a>
                </nav>

            </div>
            <div class="container">             
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm border-top" id="nav">
                @auth <!--si está logueado mostrar buscador-->
                                    <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estás buscando?" aria-label="search">
                                    <button class="btn btn-outline boton_personalizado border my-2 my-sm-0" type="submit">
                                            <i class="icon ion-md-search"></i>
                                    </button>
                                    @endauth
                    <ul class="navbar-nav ml-auto">
                        <!-- Enlaces de autenticacion -->
                        @guest <!--si es un invitado/no está logueado, enlace a login y a register si la ruta está creada-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register')) 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Salir</a> <!-- se muestra siempre-->
                                </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="rounded-circle" src="/storage/{{ Auth::user()->img }}" alt="" width="30px">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" onclick="cambiar()">{{ __('Tema') }}</a>
                                <a class="dropdown-item" href="{{route('perfil')}}">{{ __('Mi perfil') }}</a>
                                <a class="dropdown-item" href="{{route('questions')}}">{{ __('Preguntas frecuentes') }}</a>
                                <a class="dropdown-item" href="#">{{ __('Configuración') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </nav>
        </div> 
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--<script src = "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>-->
    <script>
    var count = 0;
    function cambiar(){
            count++;
            var bod = document.querySelector("#fondo");
            var titulo = document.querySelector(".tihome");
            var caja = document.querySelector(".caja");
            var h4 = document.querySelector(".pregunta");
            if(count%2==0){
                bod.classList.remove('fondo2');
                bod.classList.add('fondo');
                titulo.classList.remove('tihome1');
                titulo.classList.add('tihome2');
                caja.style.backgroundColor="rgb(6, 203, 238)";
            }
            else if(count%2!=0){
                bod.classList.remove('fondo');
                bod.classList.add('fondo2');
                titulo.classList.remove('tihome2');
                titulo.classList.add('tihome1');
                caja.style.backgroundColor="pink";
            }
            console.log(count);
            }
    </script>
</body>
</html>
