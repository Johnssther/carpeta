
<style>
    .a {
        background:red;
    }
</style>

@extends('welcome')

    @section('content')



    <div class="row ">
        <div class="container">
            <div class="col s4 ">Marcas</div>
            <div class="col s4 ">Usuarios</div>
            <div class="col s4 ">Modelos</div>
            <div class="col s12 card-panel teal lighten-2 center-align">Productos</div>
        </div>
    </div>

























<div class="container">
<h1>INDEX</h1>
    <div class="row">
    <div class="col-sm-2">
        <h4>Ver usuarios</h4>

        <a href="{{route('usuarios.create')}}">Agregar Modelos</a>

        <hr>
    </div>

    <div class="container">
        <div class="col-sm-2">
        <label>Seleccione Usuario</label>
            <select class="browser-default">
                @foreach ($usuarios as $usuario)
                    <option value="">{{ $usuario->name }} <!-- {{ route('usuarios.show', ['usuario' => $usuario->id]) }} --> </option>
                @endforeach
            </select>
        </div>    
    </div>

    <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Edad</th>
            <th>Dirección</th>
          </tr>
        </thead>

        <tbody>
        @foreach ( $usuarios as $usuario )
          <tr>
            <td>{{ $usuario->name }}         </td>
            <td>{{ $usuario->surname }}      </td>
            <td>{{ $usuario->age }}          </td>
            <td>{{ $usuario->direction }}    </td>
          </tr>
        @endforeach
        </tbody>
    </table>
        
  </div><br><br><br>

<!-- 

MARCAS

 -->


        <h4>Ver Marcas</h4>
        <a href="{{route('marcas.create')}}">Agregar Marcas</a>

<hr>

        <div class="container">
        <div class="col-sm-2">
        <label>Seleccione Marca</label>
            <select class="browser-default">
                @foreach ($marcas as $marca)
                    <option value="">{{ $marca->name }} <!-- {{ route('usuarios.show', ['usuario' => $usuario->id]) }} --> </option>
                @endforeach
            </select>
        </div>    
    </div>
        <table id="t01">
            <tr>
                <th>Marca</th>
                <th>Estado</th> 
                
            </tr>
            @foreach ($marcas as $marca)
            <tr>
                <td> {{ $marca->name }} </td>
                <td>{{ $marca->active ? 'SI' : 'NO' }}</td>
                
            </tr>
            @endforeach
           
        </table>

<!-- 

    MODELOS

 -->

        <h4>Ver Modelos</h4>
        <a href="{{route('modelos.create')}}">Agregar Modelos</a>
        <hr>
        <table>

            <tr>
                <th>Modelo</th>
                <th>Estado</th> 
                
            </tr>
        @foreach ($modelos as $modelo)
            <tr>
                <td>  {{ $modelo->name }}  </td>
                <td> {{ $marca->active ? 'SI' : 'NO' }} </td>                
            </tr>
        @endforeach
           
        </table>

   

</div>

<hr>


    @endsection
    

<style>

       /*  table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 15px;
        text-align: left;
        }
        table#t01 {
        width: 100%;    
        background-color: #f1f1c1;
        } */

</style>