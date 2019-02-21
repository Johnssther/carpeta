
@extends('welcome')

    @section('content')

<div class="container">
    
        <h4>Productos</h4>
   
<!-- @if (@productos) -->

    <div class="row">
     @foreach ($productos as $producto)   
    <div class="col s12 m6">
      <div class="card teal lighten-1 darken-1">


          <a class="red-text modal-trigger right-align" href="#demo-modal">
            <i class="material-icons prefix">clear</i>
          </a>
          <a class="red-text" href=" {{ route('productos.edit', ['producto' => $producto->id])}} "> <i class="material-icons prefix">create</i> </a>



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
        
      </div>
    </div>
    @endforeach
  </div>
   
        
<!-- ABRIR MODAL CON UN BOTON -->
<!-- <button data-target="demo-modal" class="btn modal-trigger">Modal</button> -->







 <!--  <a class="modal-trigger" href="#demo-modal">Ver</a> -->

<div class="container">
  <div id="demo-modal" class="modal">
    <div class="modal-content">
      <form action="{{ route('productos.destroy',['producto' => $producto->id])}}" method="POST">
        {{method_field('delete')}}
      	{{csrf_field()}}


          <p>¿Esta seguro de Eliminar este Registro?</p>


        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">CLOSE</a>
            <button type="submit" class="waves-success btn success lighten-1">Si, eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('.modal').modal();
})
</script> 

<!-- @else
    todavia no hay datos
@endif -->



@endsection
    

    
