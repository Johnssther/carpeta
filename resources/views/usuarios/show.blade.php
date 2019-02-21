


@extends('welcome')

    @section('content')



    <div class="row ">
        <div class="container">
            <div class="col s12 card-panel teal lighten-5 center-align">
              <a href=" {{route('productos.index')}}  " >Ver Productos</a>
            </div>

            <div class="col s4 ">
              <h5>Usuarios</h5>
              <table>
                <thead>
                  <tr>
                    <th>NombreS</th>
                    <th>Ver</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ( $usuarios as $usuario )
                  <tr>
                    <td>{{ $usuario->name }}   {{ $usuario->surname }}</td>
                    <td>  <button data-target="demo-modal" class="btn modal-trigger">Ver</button> 
                    </td>
                    <td>    <a class="modal-trigger" href=" {{ route('usuarios.show',['usuario' => $usuario->id])}} ">VerController</a>  </td>

                  </tr>
                @endforeach
                </tbody>
                </table>
            </div>

            <div class="col s4 ">
              <h5>Marcas</h5>
              <table>
                <thead>
                  <tr>
                    <th>Marca</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ( $marcas as $marca )
                  <tr>
                    <td>{{ $marca->name }}         </td>
                    <td>{{ $marca->active ? 'SI' : 'NO' }}      </td>
                  </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="col s4 ">
              <h5>Modelos</h5>
              <table>
                <thead>
                  <tr>
                    <th>Modelo</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ( $modelos as $modelo )
                  <tr>
                    <td>{{ $modelo->name }}         </td>
                    <td>{{ $modelo->active ? 'SI' : 'NO' }}      </td>
                  </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            

        </div>
    </div>

<hr>



<script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.demo-modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){

    $.get("http://localhost/productos/public/usuario/", {id: }, function(resp) {
      
    });

    $('.demo-modal').modal();
  });
</script>


<a class="modal-trigger" href="#demo-modal">Ver</a>

        <div class="container">
          <div id="demo-modal" class="modal">
            <div class="modal-content">
              <h4>Usuarios</h4>
                <p>Nombre:</p>
                <p>Direccion:</p>
                <p>Edad:</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Close</a>
            </div>
          </div>
        </div>
        <script>
        $(document).ready(function(){
            $('.modal').modal();
        })
        </script> 



    @endsection
    
