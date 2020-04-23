<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Mascota!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url(../storage/imagenes/baner.png);
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 1000;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Mi Mascota!
                </div>

                
                @if (Route::has('login')) <!--si la ruta login esta creada:-->
                    <div class="links">
                            @auth <!--si esta logueado mostra enlace a inicio-->
                                <a href="{{ url('/home') }}">Volver al inicio</a>
                            @else <!--si no esta logueado mostra enlace a ingresar y a registro si este tiene la ruta creada-->
                                <a href="{{ route('login') }}">Ingresar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrate</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
