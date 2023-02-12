<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>

<body>
    <br>
    <h1>
        <center>FORMULARIO (ACTUALIZAR DATOS)</center>
    </h1>

    <?php

$id=$_REQUEST['id'];

      include("conexion.php");

      $query="SELECT * FROM usuarios WHERE DOCUMENTO='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
?>

    <form action="eliminar_usuarios2.php?id=<?php echo $row['DOCUMENTO']; ?>" method="POST">
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
                    <label for="">Tipo usuario:</label>
                    <select name="usuario" class="form-control"> 
                        <option value="<?php echo $row['USUARIO']; ?>"><?php echo $row['USUARIO']; ?></option>
                        <option value="Administrador ">Administrador </option>
                        <option value="Guardia">Guardia</option>
                    </select>
                    <br>
                </div>                               
                <button type="submit" style="margin-left: 45%" class="btn btn-outline-success">Borrar</button>                
            </div>

    </form>


</body>

</html>