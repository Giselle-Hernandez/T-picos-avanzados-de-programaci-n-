<?php
session_start();

$tareas = [
    "Hacer tarea de programacion",
    "Estudiar el violin",
    "Estudiar para el examen de base de datos",
    "EStudiar ecuaciones diferenciales"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tareas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
   <header>
   <h2>Estas son tus tareas</h2> 
   </header>
   <main>
    <?php foreach($tareas as $tarea): ?>
        <div class="card">
            <?php echo $tarea;?>
        </div>
    <?php endforeach; ?>
    <nav>
        <a href="index.php" class="btn">Volver</a>
    </nav>
   </main>
</body>
</html>
