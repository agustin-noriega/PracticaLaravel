<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/welcome.css">
    <title>Calendario</title>

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Calendario!
                </div>

                <div class="links">
                  <a href="/welcome">Inicio</a>
                  <a href="/nosotros">Nosotros</a>
                  <a href="/contacto">Contacto</a>
                  <a href="/comentarios">Comentarios</a>
                </div>
            </div>
    </div>
  </body>
</html>
