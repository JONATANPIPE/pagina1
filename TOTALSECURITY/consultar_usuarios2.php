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
    <link rel="stylesheet" href="css/consultar_usuario2.css">
    <title>usuario-2</title>
</head>

<body>
    <form action="consultar_usuarios2.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="">Ingresar numero de cedula:</label>
                    <input type="text" name="buscar" class="form-control" placeholder="Digite el numero del Documento">
                </div>
            </div>
        </div>
        <button type="submit" style="margin-left: 42%" class="btn btn-outline-success">Consultar</button>
    </form>
    <?php
    $id=$_REQUEST['buscar'];
    include("conexion.php");
    
    $query="SELECT * FROM usuarios WHERE DOCUMENTO='$id'";
    $resultado= $conexion->query($query);
    while($row=$resultado->fetch_assoc()){
    ?>
    <br>
    <table class="table" id="tabla_apren">
        <thead>
            <tr>
                <td>Documento</td>
                <td>Nombre</td>
                <td>Telefono</td>
                <td>Correo</td>
                <td>Tipo usuario</td>                                                
                <td colspan=2>OPERACIONES</td>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $row['DOCUMENTO']; ?>
                </td>
                <td>
                    <?php echo $row['NOMBRE']; ?>
                </td>
                <td>
                    <?php echo $row['TELEFONO']; ?>
                </td>
                <td>
                    <?php echo $row['CORREO']; ?>
                </td>
                <td>
                    <?php echo $row['USUARIO']; ?>
                </td>                               
                <td>
                    <a href="modificar_usuarios.php?id=<?php echo $row['DOCUMENTO']; ?>"><button class="btn btn-primary">Modificar</button></a>
                    <a href="eliminar_usuarios.php?id=<?php echo $row['DOCUMENTO']; ?>"><button class="btn btn-danger">Borrar</button></a>
                </td>
            </tr>
            <?php
              }
              ?>
</body>

</html>