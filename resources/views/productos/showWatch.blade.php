
<style>
    .inactivo {
        background: red;
        width: 130px;
        color:white;
        border-radius: 10px;
        padding-left: 38px;

    }
    .activo {
        background: green;
        width: 130px;
        border-radius: 10px;
        color:white;
        padding-left: 38px;

    }
</style>
@extends('welcome')

@section('content')

<div class="container">
    <h3>Caracteristicas de Producto </h3>
    <p>Serie: 00{{ $producto->id }}</p>
    <p>Nombre: {{ $producto->producto }}</p>
    <p>Tamañno: {{ $producto->size }}</p>
    <p>Marca: {{ $producto->marca_nombre }}</p>
    <p>Modelo: {{ $producto->modelo_nombre }}</p>
    <p>Fecha de elaboracion: {{ $producto->fechaElaboracion }}</p>
    <p>Persona que elaboro: {{ $producto->usuario_nombre }}</p>

        @if ($producto->estado===0)
            <p class="inactivo">INACTIVO</p>
        @endif
        @if ($producto->estado===1)
            <p class="activo">ACTIVO</p>
        @endif
            <p>Descripción: <br> {{ $producto->descripcion}}</p>

</div>



@endsection

