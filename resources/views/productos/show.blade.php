
<style>
    .inactivo {
        background: red;
        width: 30px;
        color:white;
        border-radius: 10px;
        padding-left: 3px;

    }
    .activo {
      background: green;
        width: 30px;
        color:white;
        border-radius: 10px;
        padding-left: 8px;

    }
</style>
@extends('welcome')

    @section('content')


<div>
    <div class="container">   
        @if(Session::has('message'))
          <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
          </div>
        @endif
</div>


<div class="container">
    
        <h4>Productos</h4>


    <div class="row">
      
      
      
      
      
          {{--           <a class="red-text" href=" {{ route('productos.edit', ['producto' => $producto->id])}} "> <i class="material-icons prefix">create</i> </a>
          --}}          
          
          
          <table class="center-align">
              <thead>
                <tr>
                  <th colspan="5" class="center-align"><h4> Productos Registrados</h4></th>
                   <a href="{{ route('consultas')}}">Primero los activos</a><br>
                   

                  <a href="">Producto A-Z</a>
                  <a href=""></a>
                  <a href=""></a>
                </tr>
                <tr>
                  <th>Producto</th>
                  <th>Tamaño</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Fecha de elaboración</th>
                  <th>Persona quien realizo</th>
                  <th>Producto Activo</th>
                  <th>Acciones</th>
                </tr>
                @foreach ($productos as $producto)   
                <tr>
                  <td>{{ $producto->producto }}</td>
                  <td> {{ $producto->size }} </td>
                  <td> {{ $producto->marca_nombre }} </td>
                  <td> {{ $producto->modelo_nombre }} </td>
                  <td> {{ $producto->fechaElaboracion }} </td>
                  <td> {{ $producto->usuario_nombre }} </td>
                  <td> 
                    @if ($producto->estado===0)
                      <p class="inactivo">NO</p>
                    @endif  

                    @if ($producto->estado===1)
                      <p class="activo">SI</p>
                    @endif
                  </td>
                 
                  
                  
                  <td>
                      <form action="{{ route('productos.destroy',['producto' => $producto->id])}}" method="POST" onsubmit="preventDefault();" >
                          {{method_field('delete')}}
                          {{csrf_field()}}
                          <button class="waves-effect waves-light btn-small red darken-4" type="submit">
                              <i class="material-icons">clear</i>
                          </button> 
                      </form>
                    </td>
                    <td>
                      <a href="{{ route('productos.edit',['producto' => $producto->id])}}">
                        <button class="waves-effect waves-light btn-small teal" type="submit">
                          <i class="material-icons">edit</i>
                        </button> 
                      </a>
                    </td>
                    <td>
                      <a href="{{ route('productos.show',['producto' => $producto->id]) }}">
                        <button class="waves-effect waves-light btn-small lime darken-2">
                            <i class="material-icons">remove_red_eye</i>
                          </button> 
                        </a>
                    </td>
                    
                       
                  
              
              @endforeach
            </tr>
         </table>
        

  </div>
   
        
<!-- ABRIR MODAL CON UN BOTON -->
<!-- <button data-target="demo-modal" class="btn modal-trigger">Modal</button> -->







 <!--  <a class="modal-trigger" href="#demo-modal">Ver</a> -->

{{-- <div class="container">
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
 --}}


@endsection
    

    
