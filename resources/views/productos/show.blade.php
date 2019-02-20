
@extends('welcome')

    @section('content')

<div class="container">
    
        <h4>Productos</h4>
   

    <div class="row">
     @foreach ($productos as $producto)    
    <div class="col s12 m6">
      <div class="card teal lighten-1 darken-1">
        <div class="card-content white-text">
          <span class="card-title">{{ $producto->producto }}</span>
         
        

          <table style="width:100%">
            <tr>
                <th>Producto:</th>
                <td>{{ $producto->producto }}</td>
            </tr>
            <tr>
                <th>Tamaño:</th>
                <td> {{ $producto->size }} </td>
            </tr>
            <tr>
                <th>Marca:</th>
                <td> {{ $producto->marca_nombre }} </td>
            </tr>
            <tr>
                <th>Modelo:</th>
                <td> {{ $producto->modelo_nombre }} </td>
            </tr>
            <tr>
                <th>Fecha de elaboración:</th>
                <td> {{ $producto->fechaElaboracion }} </td>
            </tr>
            <tr>
                <th>Persona quien realizo:</th>
                <td> {{ $producto->usuario_nombre }} </td>
            </tr>
            <tr>
                <th>Producto Activo:</th>
                <td> {{ $producto->estado ? 'SI' : 'NO' }} </td>

            </tr>
            <tr>
                <th>Descripción:</th>
                <td> {{ $producto->descripcion }} </td>
            </tr>
            </table>

        </div>
        <div class="card-action">
          <a class="red-text" href="#">This is a link</a>
          <a class="red-text" href="#">This is a link</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
   
        





    @endsection
    

    
