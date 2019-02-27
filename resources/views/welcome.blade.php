<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">--}}

        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
      
    </head>
    <body>


    <nav>
        <ul>
            <li><a href=" {{route('home')}} ">Inicio</a></li>
            <li><a href=" {{route('usuarios.create')}} ">Registrar Usuario</a></li>
            <li><a href=" {{route('marcas.create')}} ">Registrar Marca</a></li>
            <li><a href=" {{route('modelos.create')}} ">Registrar Modelo</a></li>
            <li><a href=" {{route('productos.create')}}  ">Registrar Producto</a></li>

            <li style="float:right"><a class="active" href="{{route('usuarios.index')}}">Ver</a></li>
            
           <!--  <li style="float:right"><a class="active" href="#">Elisa</a></li> -->
        </ul>
    </nav>

    
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>    
    
    <div class="containerr">
        @yield('content')
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>









    </body>
</html>
  














