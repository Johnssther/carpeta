

<style>
    body {
        background: #e1f5fe;
    }
    form {
        margin-bottom:400px;

    }
    .modelo {
        margin-bottom:50px;

    }
    .estado {
        margin-bottom:20px;

    }
    .descr {
        height:150px;
        
    }
    
</style>
    @extends('welcome')

@section('content')

<div class="container">
    <div class="row">

        <h4>Registrar Productos</h4>
        
        <div class="container">
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
                    
                    <select class="browser-default" name="marca_id" id="marca" required>
                        <option value selected hidden>Seleccione marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}"> {{ $marca->name }} </option>
                        @endforeach
                    </select>
                    

                </div>

                <div class="modelo input-field col s6">
                    <p>Modelo <a href=" {{route('modelos.create')}} ">Agregar</a></p>  
                    <select class="browser-default" name="modelo_id" id="modelo" required>
                        <option value selected hidden>Seleccione modelo</option>
                        @foreach ($modelos as $modelo)
                            <option value="{{ $modelo->id }}">{{ $modelo->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-field col s6">
                    <div>
                    Fecha de Elaboración:
                        <input type="date" name="fechaElaboracion" id="date" required>
                    </div>
                </div>

                <div class="input-field col s6">
                    <p>Persona que Elaboro <a href=" {{route('usuarios.create')}} ">Agregar</a></p>
                    <select class="browser-default" name="personaElaboro_id" id="person" required>
                            <option value selected hidden> Seleccione Usuario </option>
                        @foreach ($usuarios as $usuario)
                            <option value=" {{ $usuario->id }} "> {{ $usuario->name }} {{ $usuario->surname }}</option>
                        @endforeach
                    </select>
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
</div>

    



@endsection



