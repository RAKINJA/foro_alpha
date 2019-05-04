<?php
    $dominio = "localhost";
    $usuario = "root";
    $pass    = "misteryahonapsis";
    $db      = "forodb";

    $conexion = new mysqli($dominio,$usuario,$pass);

    if($conexion->connect_error){
        die("Error en la conexion al Servidor".$conexion->error);
    }

    mysqli_select_db($conexion,$db);
?>