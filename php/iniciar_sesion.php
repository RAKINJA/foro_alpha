<?php
    include_once 'usuario.php';
    include_once 'sesion_usuario.php';

    $sesionUsuario = new sesionUsuario();
    $usuario       = new Usuario();

    if( isset($_SESSION['user']) ){
        echo "hay sesion";
    }else if( isset($_POST['nickname']) && isset($_POST['contraseña']) ){
        echo "validacion de login";  
        $userForm = $_POST['nickname'];
        $passForm = $_POST['contraseña'];

        if( $usuario->existeUsuario($userForm, $passForm) ){
            echo "usuario validado";
        }else {
            echo "Nombre de usuario o pass incorrecto";
        }
    }else{
        include_once '../index.php';    
    }
?>