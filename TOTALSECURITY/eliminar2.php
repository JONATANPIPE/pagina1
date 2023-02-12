<?php
include("conexion.php");

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $apartamento = $_POST['apartamento'];
    $codigo = $_POST['codigo'];       

    $query="INSERT INTO eliminados(DOCUMENTO,NOMBRE,TELEFONO,CORREO,APARTAMENTO,CODIGO) VALUES ($documento,'$nombre','$telefono','$correo', '$apartamento', '$codigo')";
    $resultado= $conexion->query($query);
    if($resultado){
        echo"se guardo correctamete";
    }
    else{
        echo "Algo Salio Mal :(";
    }

    $id = $_REQUEST['id'];


    $query="DELETE FROM residentes WHERE DOCUMENTO='$id' ";
    $resultado= $conexion->query($query);
    if($resultado){
        
        header("location: index_admin.html");
    }
    else{
        echo "Algo Salio Mal :(";
    }


    ?> 