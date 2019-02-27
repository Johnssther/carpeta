<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

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
<div id="app">
    <nav>
        <div>
            <div>
                    <ul>
                        <!-- Authentication Links -->
                            
                        @guest
                        <li><a href="{{ route('login') }}">Ingresar</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else

                            <li>               <!-- NOMBRE DE LA PERSONA QUE INGRESO -->
                                <a href="#"> {{ Auth::user()->name }}</a>
                            </li>
                            <li style="float:right"> <!-- SALE DEL SISTEMA -->
                                <a href="{{ route('logout') }}" class="active"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>  
        </nav>
    @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


