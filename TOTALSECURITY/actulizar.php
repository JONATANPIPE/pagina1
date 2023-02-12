<?php
include("conexion.php");

    $id = $_REQUEST['id'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $apartamento = $_POST['apartamento'];
    $codigo = $_POST['codigo'];  


    $query="UPDATE residentes SET DOCUMENTO='$documento', NOMBRE='$nombre', TELEFONO='$telefono', CORREO='$correo', APARTAMENTO='$apartamento', CODIGO='$codigo' WHERE DOCUMENTO='$id' ";
    $resultado= $conexion->query($query);
    if($resultado){
       
        header("location: index_admin.html");
    }
    else{
        echo "Algo Salio Mal :(";
    }




    ?>