<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


@extends('welcome')

    @section('content')

<div class="container">
    <div class="row">
    
        
        <div class="container">   
          @if(Session::has('flash_message'))
            <div class="alert alert-success" role="alert">
              {{Session::get('flash_message')}}
            </div>
          @endif


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
    
