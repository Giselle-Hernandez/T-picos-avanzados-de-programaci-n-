<?php
require_once "conexion.php";
$pdo = conexion::conectar();

$fecha = date("Y-m-d");
$hora = date("H:i:s");
$tarea = $_POST['tarea'] ?? 1;
$estado = $_POST['estado'] ?? "iniciada";

$stmt = $pdo->prepare("INSERT INTO registro (fecha, hora, tarea, estado) VALUES (?, ?, ?, ?)");
$stmt->execute([$fecha, $hora, "Tarea $tarea", $estado]);
?>