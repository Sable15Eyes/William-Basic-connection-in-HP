<?php

include("../conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];

$sql = "UPDATE ejemplo SET nombre='$nombre', apellido='$apellido', cedula='$cedula' WHERE nombre='$nombre' ";
mysqli_query($connection, $sql);

//$apellido=$_POST['apellido'];
//$sql ="UPDATE usuario SET apellido='$apellido' where cedula='$cedula'";
//mysqli_query($connection, $sql); 

echo "El usuario $nombre ha sido actualizado";

?>