<?php
include_once "conexion.php";

if (!isset($argv[1])) {
    exit("Error: Tarea no especificada.\n");
}

$tarea = $argv[1];
$tareasPermitidas = ["Tarea 1", "Tarea 2"];

if (!in_array($tarea, $tareasPermitidas)) {
    exit("Error: Tarea no reconocida.\n");
}

// Registrar inicio
log_event($tarea, "En proceso");

// Simular duración de la tarea
$duracion = ($tarea === "Tarea 1") ? 5 : 7;
sleep($duracion);

// Registrar finalización
log_event($tarea, "Finalizada");
?>