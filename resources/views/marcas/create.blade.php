@extends('welcome')

    @section('content')
<div class="container">
    <h4>Crear Marcas</h4>        
    <div class="row">
     <form class="col s12" action=" {{route('marcas.store')}} " method="POST">
        {{ csrf_field() }}

        <div class="input-field col s6">
            <div>
                Marca:
                <input type="text" name="name" id="name" placeholder="Apple" required>
            </div>
        </div>
        <div class="input-field col s6">
            <div>
               
               <p>Estado:<br>
               
                <label>
                    <input name="active" type="checkbox" checked />
                    <span>Activa</span>
                </label>
                </p>
               
               
            </div>
        </div>
          
       

        <div >
        <button class="btn-floating pulse" type="submit" name="action" id="action">
                 <a class="btn-floating pulse"><i class="material-icons ">add</i></a>
            </button>
        </div>

    </div>
</div>  
</form>  


<label class="switchBtn">
    <input type="checkbox">
    <div class="slide round">Ordenar A-Z</div>
</label>
@endsection