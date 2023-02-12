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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/permitir.css">
    <title>Document</title>
</head>
<body>
    <br>   
    <?php

    $id=$_REQUEST['buscar'];

      include("conexion.php");

      $query="SELECT * FROM residentes WHERE DOCUMENTO='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
    date_default_timezone_set("America/Bogota");
    
?>

    <form action="enviarIS.php" method="POST">   

        <div class="container">
            <div class="row">
            <div class="col-6">
                    <label for="">Hora:</label>
                    <input type="text" required name="hora" class="form-control" value="<?php echo date("h:i a"); ?>">
                </div>
                <div class="col-6">
                    <label for="">Fecha:</label>
                    <input type="text" required name="fecha" class="form-control" value="<?php echo date("d-m-y"); ?>">
                </div>
                <div class="col-12">
                    <label for="">Documento:</label>
                    <input type="number" required name="documento" class="form-control" value="<?php echo $row['DOCUMENTO']; ?>">
                </div>
                <div class="col-6">
                    <label for="">Nombres:</label>
                    <input type="text" required name="nombre" class="form-control" value="<?php echo $row['NOMBRE']; ?>">
                </div>
                <div class="col-6">
                    <label for="">Telefono:</label>
                    <input type="text" required name="telefono" class="form-control" value="<?php echo $row['TELEFONO']; ?>">
                </div>
                <div class="col-6">
                    <label for="">Correo:</label>
                    <input type="text" required name="correo" class="form-control" value="<?php echo $row['CORREO']; ?>">
                </div>
                <div class="col-6">
                    <label for="">Apartamento:</label>
                    <input type="text" required name="apartamento" class="form-control" value="<?php echo $row['APARTAMENTO']; ?>">
                </div>
                <div class="col-6">
                    <label for="">Codigo:</label>
                    <input type="number" required name="codigo" class="form-control" value="<?php echo $row['CODIGO']; ?>">
                </div>               
                <div class="col-6">
                    <label for="">Ingreso/Salida:</label>
                    <select name="ingreso" class="form-control" required >
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Ingreso">Ingreso</option>
                        <option value="Salida">Salida</option>
                    </select>
                    <br>
                </div>
                <button type="submit" style="margin-left: 45%" class="btn btn-success">Enviar</button>
            </div>

    </form>
</body>
</html>