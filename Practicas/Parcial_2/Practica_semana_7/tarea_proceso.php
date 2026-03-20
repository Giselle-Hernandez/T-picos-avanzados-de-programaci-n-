<?php //inicia php
require_once "conexion.php"; //ejecuta una vez el archivp conexion.php
$pdo = conexion::conectar(); //llama al metodo conectar de la clase conexion y lo almacena en $pdo

$fecha = date("Y-m-d"); //obtiene la fecha actual en formato
$hora = date("H:i:s"); //obtiene la hora actual
$tarea = $_POST['tarea'] ?? 1; //obtiene el valor enviado desde un formulario
$estado = $_POST['estado'] ?? "iniciada"; //obtiene el estado y si no hay usa iniciada de forma predeterminada

$stmt = $pdo->prepare("INSERT INTO registro (fecha, hora, tarea, estado) VALUES (?, ?, ?, ?)"); //prepara la consulta sql
$stmt->execute([$fecha, $hora, "Tarea $tarea", $estado]); //ejecuta la consulta preparada
?>