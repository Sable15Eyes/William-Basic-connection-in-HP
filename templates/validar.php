<?php

include('../conexion.php');

$nombre=$_POST["name"];
$cedula=$_POST["cedula"];

$sql = " SELECT * FROM ejemplo WHERE nombre = '$nombre'";
$resultado = mysqli_query($connection, $sql);

while($consulta = mysqli_fetch_array($resultado)){

     $name = $consulta['nombre'];
     $ced = $consulta['cedula'];
 }

if( $nombre == $name && $cedula == $ced){
    header("location: ../view/home.html");
}
else{
    header("location: ../view/login.html");
}

?>