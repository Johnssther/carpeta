<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container2 {
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: -1;
            width:100%;
            height:100%;
        }
        .container3 {
            top: 0px;
            left: 0px;
            position: relative;
        }

        h1 {
            position: relative;
            top: 50px;
            left: 0px;
            color: white;
        }
        .ah1 {
            background: rgba(255, 0, 0, 0.541);
            width:130px;
            height:250px;
            margin-left: 0px;
            border: 1px solid white;

        }
        .parrafo {
            color:white;
            margin-top: 70px;
            position: absolute;
            top: 0px;
            left: 180px;
            width:200px;

        }
        body {
            overflow: scroll;
        }
        /* ESTILOS DEL LA BARRA DE NAVEGACION */
        ::-webkit-scrollbar {
            width: 0px;
            height: 0px;
        }
        ::-webkit-scrollbar-track {
            background-color: rgba(130, 130, 206, 0);
        } 
        ::-webkit-scrollbar-thumb {
            background-color: rgba(151, 102, 102, 0);
        } 
        ::-webkit-scrollbar-button {
            background-color: rgba(236, 174, 59, 0);
        }
       
    </style>
</head>
<body>
    <div class="container">
        <div class="container2">
            <img src="https://image.freepik.com/vector-gratis/vector-ilustracion-fondo-azul-conexion-todo-mundo_53876-61764.jpg" alt="" width= 100% height=100%>
        </div>
        <div class="container3"> 
            <div class="ah1">
               <h1 class="container">¿Qué Paso Aquí? 🤔</h1>
               <p class="parrafo">Estamos Trabajando para poder brindarle la mejor experiencia de usuario. Dentro de poco podra acceder como lo hace normalmente. Gracias por su comprención 😉</p>
            </div>
              <img src="https://media.giphy.com/media/jWexOOlYe241y/giphy.gif " alt="Funny image" width= 66% height=66%>   
        </div>
    </div>
</body>
</html>