<?php
//en este archivo se usa la libreria para hacer las validaciones y guardar en la base de datos
require_once "libreria/EmpleadoHelper.php"; //Carga obligatoriamente el archivo EmpleadoHelper.php una sola vez.
require_once "config/Conexion.php";//Carga obligatoriamente el archivo Configuracion.php una sola vez.

if($_SERVER["REQUEST_METHOD"] !== "POST"){ //si llegaron las cosas mediante otro metodo que no sea post
    header("Location: index.php"); //redirige al usuario a index.php
    exit;
}

$nombre = EmpleadoHelper::formatearNombre($_POST["nombre"] ?? '');
$correo = trim($_POST["correo"] ?? '');
$edad = $_POST["edad"] ?? '';
$fecha = $_POST["fecha_ingreso"] ?? '';
$puesto = trim($_POST["puesto"] ?? '');

// Validaciones usando la librería 
if(empty($nombre) || empty($correo) || empty($edad) || empty($fecha) || empty($puesto)){
    die("Todos los campos son obligatorios.");
}

if(!EmpleadoHelper::validarCorreo($correo)){
    die("Correo inválido.");
}

if(!EmpleadoHelper::validarEdad($edad)){
    die("Edad inválida (18-100).");
}

$pdo = Conexion::conectar(); //Llama al método conectar() de la clase Conexion para obtener la conexión a la base de datos y guarda ese objeto en $pdo

//Prepara una consulta SQL para insertar un nuevo empleado. Valores que va a insertar. Marcadores de posicion 
$stmt = $pdo->prepare("INSERT INTO empleados 
(nombre, correo, edad, fecha_ingreso, puesto) 
VALUES (?, ?, ?, ?, ?)"); 

$stmt->execute([$nombre, $correo, $edad, $fecha, $puesto]); //ejecuta la consulta preparada y reemplaza los marcadores de posicion por los valores que hay en las variables

header("Location: listar.php"); //redirige al usuario a listar,php
exit; 
?>