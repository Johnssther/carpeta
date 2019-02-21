<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
       


        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                }

                li {
                float: left;
                }

                li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-family:arial;
                }

                li a:hover:not(.active) {
                background-color: #111;
                }

                .active {
                background-color: #4CAF50;
                }
                h1 {
                    font-family:arial;
                }
              
        </style>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>    


            <div class="containerr">
                 @yield('content')
            </div>
       

<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>









    </body>
</html>
  














