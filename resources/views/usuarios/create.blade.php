@extends('welcome')

    @section('content')
<div class="container">
    <h4>Crear usuarios</h4>        
    <div class="row">
     <form class="col s12" action=" {{route('usuarios.store')}} " method="POST">
        {{ csrf_field() }}

        <div class="input-field col s6">
            <div>
                Nombre:
                <input type="text" name="name" id="name" value="Felipe" required>
            </div>
        </div>
        <div class="input-field col s6">
            <div>
                Edad:
                <input type="text" name="surname" id="surname" value="Gomez" required>
            </div>
        </div>
        <div class="input-field col s6">
            <div>
                Edad:
                <input type="number" name="age" id="age" value="19" required>
            </div>
        </div>  
        <div class="input-field col s6">
            <div>
                Direccion:
                <input type="text" name="direction" id="direction" value="CLL 138 N°37-25" required>
            </div>
        </div> 

        <div>
            <button class="btn-floating pulse" type="submit" name="action">
                 <a class="btn-floating pulse"><i class="material-icons ">add</i></a>
            </button>
        </div>

    </div>
</div>    

    @endsection
    