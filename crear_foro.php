<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Foro</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wrapper_styles.css">
    <link rel="stylesheet" href="css/menu_style.css">
    <link rel="stylesheet" href="css/crear_foro_styles.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="sesion">
                <ul>
                    <li><a href="iniciar_sesion.html">Iniciar Sesion</a></li>
                    <li><a href="registrarse.html">Registrarse</a></li>
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
                <div class="titulo_crear_foro"><h3>Crear Foro de Discusión</h3></div>
                <div class="panel_foro">
                    <h3>Rellene los siguientes campos para la Creacion del foro</h3>
                    <form id="formulario_foro" action="" method="POST">
                        <label for="nombre_foro">Nombre del Foro :</label>
                        <input type="text" name="nombre_foro">
                        <br>
                        <label for="descripcion_foro">Descripcion del Foro</label>
                        <br>
                        <textarea name="descripcion_foro" id="" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" value="Crear Tema">
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