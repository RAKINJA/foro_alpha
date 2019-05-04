<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse - Foro Web</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wrapper_styles.css">
    <link rel="stylesheet" href="css/menu_style.css">
    <link rel="stylesheet" href="css/sesion_styles.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="sesion">
                <ul>
                    <li><a href="iniciar_sesion.html">Iniciar Sesion</a></li>
                    <li><a href="registrarse.php">Registrarse</a></li>
                </ul>
            </div>
            <h2>Foro Web.com</h2>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="foros.html">Foros</a></li>
                    <li><a href="index.html">FAQ</a></li>
                </ul>
            </nav>
        </header>

        <!--Inicio de Seccion -->
        <section>
            <article>
                <br>
                <h3>Registrese en el Foro</h3>
                <div class="panel_sesion">
                    <form id="formulario_sesion" action="" method="POST">
                        <label for="nombre_usuario">Nombre de Usuario :</label>
                        <input type="text" name="nombre_usuario">
                        <br>
                        <label for="nickname_usuario">Nickname :</label>
                        <input type="text" name="nickname_usuario">
                        <br>
                        <label for="correo_usuario">Correo :</label>
                        <input type="text" name="correo_usuario">
                        <br>

                        <label for="contraseña">Contraseña :</label>
                        <input name="contraseña" type="password">
                        <br>    
                        <input type="submit" value="Registrarse">
                    </form>
                </div>
            </article>
        </section>

        <footer><p>Foro Web | Copyright - Proyecto de Base de Datos</p></footer>
    </div>
    
</body>
</html>

<?php
    include("php/conexion.php");

    if (isset($_POST['correo_usuario'])) {

        $nombre   = $_POST['nombre_usuario'];
        $nickname = $_POST['nickname_usuario'];
        $email    = $_POST['correo_usuario'];
        $pass     = $_POST['contraseña'];

        $consulta = "SELECT * FROM usuario WHERE nickname_usuario = '$nickname' OR correo_electronico = '$email'";

        $result = mysqli_query($conexion,$consulta);

        /*while($var = mysqli_fetch_array($result)){
            echo $var['nickname_usuario'];
        }*/

        if($result->num_rows > 0){
            echo "El usuario ya Existe";
        }else{
            $sentencia = "INSERT INTO usuario(correo_electronico, nombre_usuario,nickname_usuario,pass,rol)
                               VALUES ('$email','$nombre','$nickname','$pass',4)";
        
            if($conexion->query($sentencia)===true){
            }else{
                die("error al insertar datos: ".$conexion->error);
            }
        }
        $conexion->close();
    }
?>