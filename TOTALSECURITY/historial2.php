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
    <link rel="stylesheet" href="css/historial2.css">
    <title>historial-2</title>
</head>

<body>
    <form action="historial2.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="">Ingresar numero de cedula:</label>
                    <input type="text" name="buscar" class="form-control" placeholder="Digite el numero del Documento">
                </div>
            </div>
            <button type="submit" style="margin-left: 42%" class="btn btn-outline-success">Consultar</button>
        </div>
        
    </form>
    <table class="table" id="tabla_apren">
        <thead>
            <tr>
                <td>Hora</td>
                <td>Fecha</td>
                <td>Documento</td>
                <td>Nombre</td>
                <td>Telefono</td>
                <td>Correo</td>
                <td>Apartamento</td>
                <td>Codigo</td>                                                
                <td>Acción</td>

            </tr>
        </thead>
    <?php
    $id=$_REQUEST['buscar'];
    include("conexion.php");
    
    $query="SELECT * FROM historial WHERE DOCUMENTO='$id'";
    $resultado= $conexion->query($query);
    while($row=$resultado->fetch_assoc()){
    ?>
    <br>
    
        <tbody>
            <tr>
                <td>
                    <?php echo $row['HORA']; ?>
                </td>
                <td>
                    <?php echo $row['FECHA']; ?>
                </td>
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
                    <?php echo $row['APARTAMENTO']; ?>
                </td>
                <td>
                    <?php echo $row['CODIGO']; ?>
                </td>
                <td>
                    <?php echo $row['INGRESO']; ?>
                </td>                
                
            </tr>
            <?php
              }
              ?>
</body>

</html>