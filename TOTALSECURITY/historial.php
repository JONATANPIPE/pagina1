<?php
include("conexion.php");
?>

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
    <link rel="stylesheet" href="css/historial.css">
    <title>hisotrial</title>
</head>





<body>
    <form action="historial2.php" method="POST">
        <div class="container">
        <div class="cinta">Total security</div>
        <label for="buscar">Ingresar numero de cedula:</label>
        <input type="text" name="buscar" class="form-control" placeholder="">
        
        <div class="rectangulo"></div>
        <button type="submit" style="margin-left: 42%" class="btn btn-outline-success">Consultar</button>
        
                    
            <div class="row">
                <div class="col-10">
                  
                </div>
            </div>
        </div>
        
        
    </form>

    </form>
</body>

</html>