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
        <link rel="stylesheet" href="estilos_2.css">
    </head>
    <body>
        <header>
            <h2>Hola, <?php echo $_SESSION['usuario'];?></h2><br><br>
        </header>

        <main>
            <p>Administra tus tareas rapidamente</p>
                <a href="tareas.php" class="btn">Ver tareas</a>
        </main>
    </body>
</html>