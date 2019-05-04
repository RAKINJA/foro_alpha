<?php
    include("php/conexion.php");

    if (isset($_POST['nombre_foro'])) {

        $nombre = $_POST['nombre_foro'];
        $descripcion = $_POST['descripcion_foro'];

        $sentencia = "INSERT INTO tema(titulo_tema, autor_tema, descripcion_tema)
                               VALUES ('$nombre','RAKINJA','$descripcion')";
                               
        if($conexion->query($sentencia)===true){
        }else{
            die("error al insertar datos: ".$conexion->error);
        }
        $conexion->close();
    }
?>