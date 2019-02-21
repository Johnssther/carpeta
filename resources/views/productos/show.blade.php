
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
          <a class="red-text modal-trigger" href="#demo-modal">Editar</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
   
        

<button data-target="demo-modal" class="btn modal-trigger">Modaljjj</button>







 <!--  <a class="modal-trigger" href="#demo-modal">Ver</a> -->

<div class="container">
  <div id="demo-modal" class="modal">
    <div class="modal-content">
      <p>¿Esta seguro de Editar Este Registro?</p>


      <form action=" {{ route('productos.store') }} " method="POST">
            {{ csrf_field() }}
            <div class="col-sm-2">

                <div class="input-field col s6">
                    <div>
                        Producto:
                        <input type="text" name="producto" id="producto" value="Computador" placeholder="Computador" required>
                    </div>
                </div>
                
                <div class="input-field col s6">
                    <div>
                        Tamaño:
                        <input type="text" name="size" id="size" value="Pequeño" placeholder="Pequeño" required>
                    </div>
                </div>

                <div class="input-field col s6">
                    <p>Marca <a href=" {{route('marcas.create')}} ">Agregar</a></p>  
                    
                    
                    

                </div>

                <div class="modelo input-field col s6">
                  

                <div class="input-field col s6">
                    <div>
                    Fecha de Elaboración:
                        <input type="date" name="fechaElaboracion" id="date" required>
                    </div>
                </div>

                <div class="input-field col s6">
                  
                </div> 

                <div class="estado">
                    <p>Estado:<br>
                    <label>
                        <input name="estado" type="checkbox" checked >
                        <span>Activa</span>
                    </label>
                    </p>
                </div>

                <div class="estado ">
                    <div>
                        Descripción:
                        <textarea class="descr" name="descripcion" rows="15" cols="80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis voluptatem eligendi architecto totam blanditiis debitis assumenda doloremque saepe et consequatur, ducimus labore impedit explicabo sunt odit itaque earum nostrum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad aut deserunt hic quas exercitationem accusantium, magnam, voluptatibus sunt dolores sint fuga qui consectetur veritatis voluptatem laudantium nemo quo minima doloremque.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur esse facere nam, sapiente molestias optio tenetur quod laborum suscipit at? Vero impedit inventore praesentium eius. Laboriosam sit iure eveniet! Delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nobis at provident cum, odit quidem numquam suscipit eius a quaerat! Quae accusamus accusantium fugit aspernatur culpa inventore minima, eos reiciendis?</textarea>

                    </div>
                </div>

                <button class="btn-floating pulse" type="submit" name="action">
                    <a class="btn-floating pulse"><i class="material-icons ">add</i></a>
                </button>

            </div>
        </form>  

       
    </div>
    <div class="modal-footer">
      <a class="modal-action  waves-effect waves-success btn success lighten-1" href=" {{ route('productos.show',['producto' => $producto->id])}} ">ACTUALIZAR</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Cerrar</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
})
</script> 



    @endsection
    

    
