<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

 <header>

        <head class="logo">

             <a href="index2.php"><input type="image" src="usuario.png"style="width:90px;" /></a>

        </head>

         <h1>            </h1>

     </header>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index2.css">
    <title>Document</title>
</head>

<body>
    <form action="permitir.php" method="POST">
        <div class="container">
        <div class="cinta">Total security</div>
        <div class="rectangulo"></div>
         <div class="rectangulo-2"></div>
              <button type="submit" style="margin-left: 42%" class="btn btn-outline-success">Consultar</button>
                 <a href="registrar_visitante.html"><button type="button" class="btn btn-outline-success">Registrar visitante</button></a>
            <div class="row">
                <div class="col-10">
                    <label for="">Ingresar numero de cedula:</label>
                     <div class="relleno1"></div>
                    <input type="text" name="buscar" class="form-control" placeholder="Digite el numero del Documento">
                </div>
            </div>
        </div>


    </form>


</body>

</html>