<?php
    class sesionUsuario{
        public function __construct(){
            session_start();
        }

        public function cerrarSesion(){
            session_unset();
            session_destroy();
        }

        public function setUsuarioActual($usuario){
            $_SESSION['user'] = $user;
        }

        public function getUsuarioActual(){
            return $_SESSION['user'];
        }
    }
?>