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
<h3>Usuarios Registrados</h3>
    <div class="container"></div>
          <table class="centered">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Dirección</th>
              </tr>
            </thead>
    
            <tbody>
              @foreach ($usuarios as $usuario)
              <tr>
                <td> {{ $usuario->id }} </td>
                <td> {{ $usuario->name }} </td>
                <td> {{ $usuario->surname }} </td>
                <td> {{ $usuario->age }} </td>
                <td> {{ $usuario->direction }} </td>
                
              </tr>
              @endforeach 
            </tbody>
          </table>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>




