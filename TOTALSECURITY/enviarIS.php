<?php
include("conexion.php");

    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $apartamento = $_POST['apartamento'];
    $codigo = $_POST['codigo'];    
    $ingreso = $_POST['ingreso'];   

    $query="INSERT INTO historial(HORA,FECHA,DOCUMENTO,NOMBRE,TELEFONO,CORREO,APARTAMENTO,CODIGO,INGRESO) VALUES ('$hora','$fecha','$documento','$nombre','$telefono','$correo', '$apartamento', '$codigo','$ingreso')";
    $resultado= $conexion->query($query);
    if($resultado){

         header("location: index2.php");
    }
    else{
        echo "Algo Salio Mal :(";
    }

    ?> 