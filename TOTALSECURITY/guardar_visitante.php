<?php
include("conexion.php");

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apartamento = $_POST['apartamento'];

    $query= "INSERT INTO visitante(DOCUMENTO,NOMBRE,APARTAMENTO) VALUES ('$documento','$nombre','$apartamento')";
    $resultado= $conexion ->query($query);
    if($resultado){

        header("location: index2.php");
    }
    else{
        echo "Algo Salio Mal :(";
    }

    ?>