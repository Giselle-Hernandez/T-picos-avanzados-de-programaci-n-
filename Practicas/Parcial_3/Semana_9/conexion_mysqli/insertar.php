<?php
require_once "config.php";
$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error){
    die("Error: " .$conexion->connect_error);
}

if (isset($_POST["nombre"]) && isset($_POST["carrera"])){
    $nombre = $_POST["nombre"];
    $carrera = $_POST["carrera"];

    $sql = "INSERT INTO alumnos (nombre, carrera) VALUES ('$nombre', '$carrera')" ;

    if ($conexion->query($sql) === TRUE){
        echo "Registro insertado";
    }else{
        echo "Error: " . $conexion->error;
    }
}else{
    echo "No se recibieron datos del formulario";
}
?>
