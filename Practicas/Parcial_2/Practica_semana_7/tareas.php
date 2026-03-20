<?php
include_once "conexion.php";

if (isset($_GET['accion']) && isset($_GET['tarea'])) {
    $tarea = $_GET['tarea'];
    $accion = $_GET['accion'];

    $tareasPermitidas = ["Tarea 1", "Tarea 2"];
    if (!in_array($tarea, $tareasPermitidas)) {
        header("Location: index.php");
        exit();
    }

    if ($accion === "iniciar") {
        // Ruta de tu PHP en XAMPP
        $phpPath = "C:\\xampp\\php\\php.exe"; 
        $scriptPath = __DIR__ . "\\ejecutar_tarea.php";
        
        $tareaSegura = escapeshellarg($tarea); 
        $cmd = "start /B \"\" \"$phpPath\" \"$scriptPath\" $tareaSegura";
        
        // Ejecutar en segundo plano
        exec($cmd);

    } elseif ($accion === "detener") {
        log_event($tarea, "Detenida");
    }

    header("Location: index.php");
    exit();
}
?>