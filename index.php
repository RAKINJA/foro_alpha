<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--CSS-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wrapper_styles.css">
    <link rel="stylesheet" href="css/menu_style.css">
    
    <title>Foro Web - Inicio</title>

    <?php
        include("php/conexion.php");
    ?>
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
                    <li><a href="index.php">FAQ</a></li>
                </ul>
            </nav>
        </header>

        <!--Inicio de Seccion -->
        <section>
            <article>
                <div class="titulo_articulo"><h3>Articulos Destacados</h3></div>
                <div class="articulo">
                    <a href="hilo.html"><h4>Titulo del Sub Articulo</h4></a>
                </div>
            </article>

            <article>
                <div class="titulo_articulo"><h3>Articulos Recientes</h3></div>
                <div class="articulo">
                    <a href="hilo.html"><h4>Titulo del Sub Articulo</h4></a>
                </div>
            </article>

            <article>
                <div class="titulo_articulo"><h3>Noticias</h3></div>
                <div class="articulo">
                    <a href="hilo.html"><h4>Titulo del Sub Articulo</h4></a>
                </div>
            </article>
        </section>

        <footer><p>Foro Web | Copyright - Proyecto de Base de Datos</p></footer>
    </div>
</body>
</html>