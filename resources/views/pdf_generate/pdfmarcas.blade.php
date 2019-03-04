<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
        <style>
       
    </style>

</head>
<body>
   
<div class="container center-align">
<h3>Marcas Registradas</h3>
    <div class="container"></div>
          <table>
            <thead>
              <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Fecha de Registro</th>
              </tr>
            </thead>
    
            <tbody>
             @foreach ($marcas as $marca)
             <tr>
                <td> {{ $marca->id }} </td>
                <td> {{ $marca->name }} </td>
                <td> {{ $marca->active ? 'ACTIVO' : 'INACTIVO'}} </td>
                <td> {{ $marca->created_at }} </td>
              </tr>
              @endforeach
            </tbody>
          </table>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>




