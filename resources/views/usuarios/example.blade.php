


@extends('welcome')

@section('content')


<h5> id {{ $user->id }}   </h5>
<h5> nombre {{ $user->name }}   </h5>
<h5> apellido {{ $user->surname }}   </h5>
<h5> edad: {{ $user->age }}   </h5>
<h5> direccion {{ $user->direction }}   </h5>




<a class="modal-trigger" href="#demo-modal">Ver</a>

    <div class="container">
      <div id="demo-modal" class="modal">
        <div class="modal-content">
          <h4>Usuario {{ $user->name }}</h4>
            
            <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->direction }}</td>
                  </tr>
                </tbody>
                </table>

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

