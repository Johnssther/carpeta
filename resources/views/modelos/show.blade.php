@extends('welcome')

    @section('content')

<div class="container">
    <div class="row">
    
        <h4>Ver Modelos</h4>
        <table id="t01">
            <tr>
                <th>Modelo</th>
                <th>Estado</th> 
                
            </tr>
            @foreach ($modelos as $modelo)
            <tr>
                <td> {{ $modelo->name }} </td>
                <td>{{ $modelo->active ? 'SI' : 'NO' }}</td>
                
            </tr>
            @endforeach 
           
        </table>
 
        





    @endsection
    
