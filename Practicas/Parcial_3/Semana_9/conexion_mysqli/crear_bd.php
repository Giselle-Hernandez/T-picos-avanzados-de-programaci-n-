<?php #abre codigo php
require_once "conexion.php"; #Incluye el archivo de conexion.php una unica vez. Gracias a esta linea se logra que el archivo se cargue de manera obligatoria.
$sql = "CREATE DATABASE IF NOT EXISTS $db"; #crea una variable de nombre $sql que almacena una instruccion que dice que cree una base de datos si no existe con el nombre que contiene $bd

if ($conexion->query($sql) === TRUE) { #Si la consulta SQL se ejecutó correctamente en la base de datos ejecuta el siguiente codigo
    echo "Base de datos creada o ya existente"; #muestra un mensaje que se encuentra entre comillas
} else { #si la condicion anterior no se cumple se ejecuta el siguiente codigo
    echo "Error: " . $conexion->error; #muestra un mensaje que dice "Error: " y el mensaje del problema que genera mysql, por ejemplo: Error: Database "practica_mysql" doesn't exist
}
?>