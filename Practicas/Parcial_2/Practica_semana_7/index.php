<?php
include_once "conexion.php";

$logs = get_logs();
if (!is_array($logs)) {
    $logs = [];
}

$estadoTarea1 = "Detenido";
$estadoTarea2 = "Detenido";

foreach ($logs as $log) {
    $tarea = $log['tarea'] ?? '';
    $estado = $log['estado'] ?? '';
    
    if ($tarea === "Tarea 1") $estadoTarea1 = $estado;
    if ($tarea === "Tarea 2") $estadoTarea2 = $estado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Tareas</title>
    <meta http-equiv="refresh" content="5"> 
</head>
<body>
    <h1>CONTROL DE TAREAS DEL SISTEMA</h1>

    <div class="tarea">
        <h3>Tarea 1</h3>
        <p>Estado actual: <strong><?= htmlspecialchars($estadoTarea1) ?></strong></p>
        <a href="tareas.php?accion=iniciar&tarea=Tarea 1" class="boton btn-iniciar">Iniciar</a>
        <a href="tareas.php?accion=detener&tarea=Tarea 1" class="boton btn-detener">Detener</a>
    </div>

    <div class="tarea">
        <h3>Tarea 2</h3>
        <p>Estado actual: <strong><?= htmlspecialchars($estadoTarea2) ?></strong></p>
        <a href="tareas.php?accion=iniciar&tarea=Tarea 2" class="boton btn-iniciar">Iniciar</a>
        <a href="tareas.php?accion=detener&tarea=Tarea 2" class="boton btn-detener">Detener</a>
    </div>

    <div class="log">
        <h2>Registro de actividad</h2>
        <ul>
            <?php
            if (!empty($logs)) {
                $logsInvertidos = array_reverse($logs);
                foreach ($logsInvertidos as $log) {
                    $id = htmlspecialchars($log['Id'] ?? '');
                    $fecha = htmlspecialchars($log['Fecha'] ?? '');
                    $hora = htmlspecialchars($log['Hora'] ?? '');
                    $tareaLog = htmlspecialchars($log['Tarea'] ?? '');
                    $estadoLog = htmlspecialchars($log['Estado'] ?? '');
                    
                    echo "<li><strong> $id - $fecha - $hora</strong> - $tareaLog: <em> - $estadoLog</em></li>";
                }
            } else {
                echo "<li>No hay registros aún.</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>