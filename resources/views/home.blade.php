@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Espacio de Trabajo de: {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3 class="center-align">
                        Ingresar Registros
                    </h3>
                    <div class="container center-align">

                        <a class="waves-effect waves-light btn " href=" {{route('usuarios.create')}} ">Registrar Usuario</a><br><br>
                        <a class="waves-effect waves-light btn lime darken-1" href=" {{route('usuarios.index')}}  ">Ver Registros</a><br><br>
                        <a class="waves-effect waves-light btn " href=" {{route('marcas.create')}} ">Registrar Marca</a><br><br>
                        <a class="waves-effect waves-light btn " href=" {{route('modelos.create')}} ">Registrar Modelo</a><br><br>
                        <a class="waves-effect waves-light btn " href=" {{route('productos.create')}}  ">Registrar Producto</a><br><br>
                        <a class="waves-effect waves-light btn " href=" {{route('home')}} ">Inicio</a><br><br>
                            
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
