<?php
require_once "config.php";
$conexion = new mysqli($host, $user, $pass);

if ($conexion ->connect_error){
    die("Error de cpnexion: . $conexion->connect_error");
}

echo "Conexion al servidor exitosa. ";
#mysql es el gestor de base de datos
?>