<?php
require_once "libreria/EmpleadoHelper.php";
require_once "config/Conexion.php";

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: index.php");
    exit;
}

$nombre = EmpleadoHelper::formatearNombre($_POST["nombre"] ?? '');
$correo = trim($_POST["correo"] ?? '');
$edad = $_POST["edad"] ?? '';
$fecha = $_POST["fecha_ingreso"] ?? '';
$puesto = trim($_POST["puesto"] ?? '');

// Validaciones usando la librería (OBLIGATORIO)
if(empty($nombre) || empty($correo) || empty($edad) || empty($fecha) || empty($puesto)){
    die("Todos los campos son obligatorios.");
}

if(!EmpleadoHelper::validarCorreo($correo)){
    die("Correo inválido.");
}

if(!EmpleadoHelper::validarEdad($edad)){
    die("Edad inválida (18-100).");
}

$pdo = Conexion::conectar();

$stmt = $pdo->prepare("INSERT INTO empleados 
(nombre, correo, edad, fecha_ingreso, puesto)
VALUES (?, ?, ?, ?, ?)");

$stmt->execute([$nombre, $correo, $edad, $fecha, $puesto]);

header("Location: listar.php");
exit;
?>