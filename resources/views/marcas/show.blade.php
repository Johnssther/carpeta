@extends('welcome')

    @section('content')

<div class="container">
    <div class="row">
    
        <h1>Ver Marcas</h1>
        <table id="t01">
            <tr>
                <th>Marca</th>
                <th>Estado</th> 
                
            </tr>
            @foreach ($marcas as $marca)
            <tr>
                <td> {{ $marca->name }} </td>
                <td>{{ $marca->active ? 'SI' : 'NO' }}</td>
                
            </tr>
            @endforeach
           
        </table>
 
        












  

    @endsection
    
