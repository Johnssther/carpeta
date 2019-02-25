<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
    <style>
       .bold {
         font-weight: bold;
       }
    </style>

</head>
<body>
   
<div class="container center-align highlight">
<h3>Productos Registrados</h3>
   

      @foreach ($productos as $producto)

        <table class="striped" cellspacing="0"><colgroup span="9" width="85" ></colgroup>
          <tbody>
            <tr>
              <td class="bold" >#</td>
              <td class="bold" >Producto</td>
              <td class="bold" >Tamaño</td>
              <td class="bold" >Marca</td>
              <td class="bold" >Modelo</td>
              <td class="bold" >Fecha de Elaboración</td>
              <td class="bold" >Persona que Elaboro</td>
              <td class="bold" >Activo</td>
              <td class="bold" >Fecha de Registro</td>
            </tr>
            <tr>
              <td> {{ $producto->id }}</td>
              <td> {{ $producto->producto }}</td>
              <td> {{ $producto->size }}</td>
              <td> {{ $producto->marca_nombre }}</td>
              <td> {{ $producto->modelo_nombre }}</td>
              <td> {{ $producto->fechaElaboracion }}</td>
              <td> {{ $producto->usuario_nombre }}</td>
              <td> {{ $producto->estado }}</td>
              <td> {{ $producto->created_at }}</td>
            </tr>
            <tr>
              <td class="bold" colspan="9">Descripción</td>
            </tr>
            <tr>
              <td colspan="9"> {{ $producto->descripcion }} </td>
            </tr>
          </tbody>
        </table>
        <hr>
      @endforeach






    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>




