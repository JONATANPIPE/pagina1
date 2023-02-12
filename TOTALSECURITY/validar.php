<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

//$conexion=mysqli_connect("localhost","root","","totalsecurity");

$consulta="SELECT * FROM usuario where usuario='$usuario' and contrasena='$contrasena'";
echo 'Consulta = ',$consulta;
//$resultado=mysqli_query($conexion,$consulta);

$resultado= $conexion->query($consulta);

$filas=$resultado->fetch_assoc();

if($filas['id_cargo']==1){ 
    header("location:index_admin.html");

}else
if($filas['id_cargo']==2){ 
header("location:index2.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
