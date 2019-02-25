<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
        <style>
       table {
           background-color: yellowgreen;
       }
       tr {
           background-color: yellowgreen;
       }
      
    </style>

</head>
<body>
   
<div class="container center-align">
    <div class="container"></div>
          <table class="centered">
            <thead>
              <tr>
                    <th colspan="3" class="center-align"><h1> Modelos Registrados</h1></th>

              </tr>
              <tr>
                  <th>#</th>
                  <th>Modelo</th>
                  <th>Activo</th>

              </tr>
            </thead>
    
            <tbody>
               @foreach ($modelos as $modelo)
              <tr>
                <td> {{ $modelo->id }} </td>
                <td> {{ $modelo->name }} </td>
                <td> {{ $modelo->active ? 'SI' : 'NO'}} </td>
                
              </tr> 
              @endforeach 
            </tbody>
          </table>







	




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
