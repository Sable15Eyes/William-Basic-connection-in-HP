<?php
include("../conexion.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cedula=$_POST["cedula"];

echo "Nombre: $nombre";
echo "<br>";
echo "Apellido: $apellido";
echo "<br>";
echo "Cedula: $cedula";

$sql = "INSERT INTO ejemplo (nombre,apellido,cedula) VALUES ('$nombre', '$apellido', '$cedula')";
mysqli_query($connection, $sql);


?>