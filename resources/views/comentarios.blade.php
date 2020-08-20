<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/welcome.css">
    <title>Comentarios</title>

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
                    Dejanos tu comentario!
                </div>

                <form id="form" class="theForm" class="form-signin rounded-pill" method="post" enctype="multipart/form-data">
                  {{csrf_field()}} <!--SIEMPRE DEBE ESTAR DENTRO DEL FORMULARIO-->
                  <p>Nombre*</p>
                  <input type="text" name="nombre"class="form-control" placeholder="Ingrese su Nombre" required autofocus="">
                  <p>Dejanos tu comentario</p>
                  <textarea placeholder="Escribe aqui tu comentario..." name="comentario" rows="8" cols="67"  ></textarea>
                  <br>
                  <button class="btn" type="submit" >Enviar Comentario</button>
                  <br><br>
                </form>

                <h1 style="background-color: beige;" id="tituloCentral">Comentarios de otros usuarios</h1>
                <div class="row" style="background-color:beige;">
                    {{-- SE AGREGA UN FORELSE PARA QUE TRAIGA LOS DATOS DE LOS COMENTARIOS DE LA BASE DE DATOS --}}
                    @forelse($coment as $comentario)
                        <div style="border-color:red" class="col-lg-4">
                            <h3 >Nombre:</h3><p>{{ $comentario->nombre  }}</p>
                            <h3 >Comentrio:</h3><p>{{ $comentario->comentario}}</p>
                        </div>
                    @empty
                        <h2>No se encontraron Comentarios</h2>
                    @endforelse
                </div>

                <div class="links">
                  <a href="/">Inicio</a>
                  <a href="/nosotros">Nosotros</a>
                  {{-- <a href="/contacto">Contacto</a> --}}
                  <a href="/calendario">Calendario</a>
                </div>
            </div>
    </div>
  </body>
</html>
