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
                  <th>Edad</th>
                  <th>Cantidad</th>
              </tr>
            </thead>
    
            <tbody>
              @foreach ($usuarios as $usuario)
              <tr>
                <td>Personas de {{ $usuario->age }} Años </td>
                <td> {{ $usuario->cantidad }} </td>
                
              </tr>
              @endforeach 
            </tbody>
          </table>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>




