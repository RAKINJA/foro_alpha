<?php

include_once 'db.php';
include_once 'conexion.php';

class Usuario extends DB {
    private $nombre;
    private $nickname;

    public function existeUsuario($usuario, $pass){
        $sentencia = $conexion->mysqli_prepare("SELECT nombre_usuario FROM usuario WHERE nombre_usuario = ? AND contraseña = ?");
        $sentencia->bind_param("ss",$usuario, $pass);
        $sentencia->execute();

        $sentencia->bin_result($dato);
        $sentencia->fetch();

        if($sentencia->num_rows > 0){
            return true;    
        }else{
            return false;
        }

        $sentencia->close();
    }

    public function setUsuario($usuario){
        $sentencia = $conexion->mysqli_prepare("SELECT nombre_usuario FROM usuario WHERE nombre_usuario = :usuario");
        $sentencia->execute(['usuario'=>$usuario]);

        foreach($sentencia as $usuarioActual){
            $this->nombre   = $usuarioActual[nombre_usuario];
            $this->nickname = $usuarioActual[nickname_usuario];
        }
    }

    public function getnombre(){
        return $this->nombre;
    }
}
?>