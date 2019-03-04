<h1>Editar modelos</h1>


<form action="{{ route('modelos.update',['modelo' => $modelo->id])}}" method="post">
    {{ csrf_field() }}
         
    <div>
        Modelo:
        <input type="text" value=" {{ $modelo->name }}" name="name">
    </div><br>
    <div>
        Estado:
        <input type="text" value=" {{ $modelo->active }} " name="active">
        <p>1:activo : 0:inactivo</p>
    </div><br>
    <div>
        <button type="submit">Actualizar</button>
    </div>
</form>
 


<style>
   

    p {
        font-size: 11px;
    }
    h1 {
        color:green;
        
    }
</style>


