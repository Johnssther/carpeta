

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
    
            <h4>Editar Producto</h4>
            
            <div class="container">
            <form action=" {{ route('productos.update',['producto' => $producto->id]) }}" method="POST">
                    
                {{-- {{ csrf_field() }} --}}
                <div class="col-sm-2">
    
                    <div class="input-field col s6">
                        <div>
                            Editar Producto:
                            <input type="text" name="producto" id="producto" value="{{ $producto->producto }}" placeholder="Computador" required>
                        </div>
                    </div>
                    
                    <div class="input-field col s6">
                        <div>
                            Editar Tamaño:
                            <input type="text" name="size" id="size" value="{{ $producto->size }}" placeholder="Pequeño" required>
                        </div>
                    </div>
    
                    <div class="input-field col s6">
                        <p>Editar Marca <a href=" {{route('marcas.create')}} ">Agregar</a></p>  
                        
                        <select class="browser-default" name="marca_id" id="marca" required>
                            <option value selected hidden>{{ $producto->marca_nombre }}</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}"> {{ $marca->name }} </option>
                            @endforeach
                        </select>
                        
    
                    </div>
    
                    <div class="modelo input-field col s6">
                        <p>Editar Modelo <a href=" {{route('modelos.create')}} ">Agregar</a></p>  
                        <select class="browser-default" name="modelo_id" id="modelo" required>
                            <option value selected hidden>{{$producto->modelo_nombre}} </option>
                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->id }}">{{ $modelo->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="input-field col s6">
                        <div>
                        Editar Fecha de Elaboración:
                            <input type="date" name="fechaElaboracion" id="date" required value="{{$producto->fechaElaboracion}}">
                        </div>
                    </div>
    
                    <div class="input-field col s6">
                        <p>Editar usuario <a href=" {{route('usuarios.create')}} ">Agregar</a></p>
                        <select class="browser-default" name="personaElaboro_id" id="person" required>
                                <option value selected hidden> {{$producto->usuario_nombre}} </option>
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
                            Editando Descripción:
                        <textarea class="descr" name="descripcion" rows="15" cols="80">{{$producto->descripcion}} </textarea>
    
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
    
    
    
    