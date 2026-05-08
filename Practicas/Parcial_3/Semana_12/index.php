<?php
session_start();

if (!isset($_SESSION['usuario'])){
    $_SESSION['usuario'] = "Giso";
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>App Tareas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#2c3e50">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body> <!--inicia el cuerpo -->
        <header><!--abre el area superior de la pagina -->
            <div class="Logo"><!-- crea una clase para dar formato al logo-->
            <img src="snoppy.webp" alt="Logo de la app" class="Logo" loading="lazy"> <!--agrega la imagen y un texto por si la imagen no carga mas una indicacion para que solo cargue cuando el navegador este listo -->
            </div><!--cierra el area de la clase que tendra ese formato -->
            <h2>Hola, <?php echo $_SESSION['usuario'];?></h2><br><br><!--muestra mensajes en pantalla -->
        </header><!--cierra la parte superior -->

        <main>
            <p>Administra tus tareas rapidamente</p>
            <nav> 
                <a href="tareas.php" class="btn">Ver tareas</a>
            </nav>
        </main>
    </body>
</html>