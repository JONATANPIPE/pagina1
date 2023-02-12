<!DOCTYPE html>
<html lang="es">

<header>
        
        <head class="logo">
     
        <a href="index_admin.html"><input type="image" src="usuario.png"style="width:90px;" /></a> 
         
         
     
        </head>
        
         <h1>            </h1>
     
     </header>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/modificar.css">
    <title>actualizar</title>
</head>

<body>
    <br>
    <h1>
        <center>FORMULARIO (ACTUALIZAR DATOS)</center>
    </h1>

    <?php

$id=$_REQUEST['id'];

      include("conexion.php");

      $query="SELECT * FROM residentes WHERE DOCUMENTO='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
?>

    <form action="actulizar.php?id=<?php echo $row['DOCUMENTO']; ?>" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <label for="">Cedula de ciudadania:</label>
                    <input type="number" required name="documento" class="form-control"
                        value="<?php echo $row['DOCUMENTO']; ?>">
                </div>
                <div class="col-12">
                    <label for="">Nombre:</label>
                    <input type="text" required name="nombre" class="form-control"
                        value="<?php echo $row['NOMBRE']; ?>">
                </div>
                <div class="col-12">
                    <label for="">Numero telefonico:</label>
                    <input type="text" required name="telefono" class="form-control"
                        value="<?php echo $row['TELEFONO']; ?>">
                </div>
                <div class="col-12">
                    <label for="">Correo electronico:</label>
                    <input type="text" required name="correo" class="form-control"
                        value="<?php echo $row['CORREO']; ?>">
                </div>
                <div class="col-12">
                    <label for="">Apartamento en que reside:</label>
                    <input type="text" required name="apartamento" class="form-control"
                        value="<?php echo $row['APARTAMENTO']; ?>">
                </div>
                <div class="col-12">
                    <label for="">Codigo asignado:</label>
                    <input type="number" required name="codigo" class="form-control"
                        value="<?php echo $row['CODIGO']; ?>">                
                </div>                
                <button type="submit" style="margin-left: 45%" class="btn btn-outline-success">Actualizar</button>                
            </div>

    </form>


</body>

</html>