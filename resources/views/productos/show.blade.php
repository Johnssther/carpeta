
@extends('welcome')

    @section('content')

<div class="container">
    
        <h4>Productos</h4>
   
<!-- @if (@productos) -->

    <div class="row">
      
      
      
      <a class="red-text modal-trigger right-align" href="#demo-modal">
        <i class="material-icons prefix">clear</i>
          </a>
          {{--           <a class="red-text" href=" {{ route('productos.edit', ['producto' => $producto->id])}} "> <i class="material-icons prefix">create</i> </a>
          --}}          
          
          
          <table class="center-align">
              ble class="centered">
              <thead>
                <tr>
                  @foreach ($productos as $producto)   
                  <th colspan="5" class="center-align"><h1> Usuariossss Registrados</h1></th>
                  
                </tr>
                <tr>
                  <th>Producto</th>
                  <th>Tamaño</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Fecha de elaboración</th>
                  <th>Persona quien realizo</th>
                  <th>Producto Activo</th>
                  <th>Descripción</th>
                </tr>
                <tr>
                  <td>{{ $producto->producto }}</td>
                  <td> {{ $producto->size }} </td>
                  <td> {{ $producto->marca_nombre }} </td>
                  <td> {{ $producto->modelo_nombre }} </td>
                  <td> {{ $producto->fechaElaboracion }} </td>
              <td> {{ $producto->usuario_nombre }} </td>
              <td> {{ $producto->estado ? 'SI' : 'NO' }} </td>
              <td> {{ $producto->descripcion }} </td>
            </tr>
            thead
         </table>
        

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
    

    
