<?php
require_once "conexion.php"; //ejecuta una vez el archivo conexion.php
$pdo = conexion::conectar(); //llama al metodo conectar y guarda la conecion a la base en $pdo

$fecha = date("Y-m-d"); //obtirnrn la fecha 
$hora = date("H:i:s"); //obtiene la hora
$tarea = $_POST['tarea'] ?? 1; //en la bariable tarea se almacena la tareas que se ejecuto. evita errores porque no esist auna tarea

$stmt = $pdo->prepare("INSERT INTO registro (fecha, hora, tarea, estado) VALUES (?, ?, ?, ?)"); //prepara la consulta sql
$stmt->execute([$fecha, $hora, "Tarea $tarea", "detenida"]); //ejecuta la consulta y cambia el estado
?>