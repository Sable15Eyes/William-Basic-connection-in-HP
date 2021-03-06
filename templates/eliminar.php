<?php
include("../conexion.php");

$nombre=$_POST['nombre'];


echo "Se a eliminado al usuario $nombre";

$sql = "DELETE FROM ejemplo WHERE nombre = '$nombre'";
mysqli_query($connection, $sql);
?>