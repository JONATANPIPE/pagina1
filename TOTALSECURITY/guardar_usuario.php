<?php
include("conexion.php");

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo']; 
    $usuario = $_POST['usuario'];

    $query="INSERT INTO usuarios(DOCUMENTO,NOMBRE,TELEFONO,CORREO,USUARIO) VALUES ($documento,'$nombre','$telefono','$correo','$usuario')";
    $resultado= $conexion->query($query);
    if($resultado){

        header("location: index_admin.html");
    }
    else{
        echo "Algo Salio Mal :(";
    }

    ?> 