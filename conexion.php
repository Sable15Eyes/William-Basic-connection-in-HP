<?php

// Se establece la conexion
$connection = mysqli_connect('localhost','root','','prueba');

//Si la conexion falla se muestra el error
    if($connection === false){
        echo 'Hubo un error '.mysqli_connect_error();
    } else{
        echo 'Conectado a la base de datos';
        echo '<br>';
        echo '<br>';

    }

?>