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
    <body>
        <header>
            <div class="Logo">
            <img src="snoppy.webp" alt="Logo de la app" class="Logo" loading="lazy">
            </div>
            <h2>Hola, <?php echo $_SESSION['usuario'];?></h2><br><br>
        </header>

        <main>
            <p>Administra tus tareas rapidamente</p>
            <nav> 
                <a href="tareas.php" class="btn">Ver tareas</a>
            </nav>
        </main>
    </body>
</html>