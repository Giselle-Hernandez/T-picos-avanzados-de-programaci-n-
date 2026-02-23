<?php
require_once("funciones.php");

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    die("Acceso no permitido");
}

// Recibir y sanitizar datos
$nombre = limpiarTxt($_POST["nombre"] ?? '');
$correo = trim($_POST["correo"] ?? '');
$edad = $_POST["edad"] ?? '';
$fecha_ing = $_POST["fecha_ing"] ?? '';
$puesto = limpiarTxt($_POST["puesto"] ?? '');

// Validaciones
if($nombre === '' || strlen($nombre) < 3) die("Error: Nombre inválido");
if(!validarCorreo($correo)) die("Error: Correo inválido");
if(!validarEdad($edad)) die("Error: Edad inválida");
if(!validarFechaIngreso($fecha_ing)) die("Error: Fecha de ingreso inválida");
if($puesto === '') die("Error: Puesto inválido");

// Crear nuevo empleado
$nuevoEmpleado = [
    "nombre" => $nombre,
    "correo" => $correo,
    "edad" => (int)$edad,
    "fecha_ing" => $fecha_ing,
    "puesto" => $puesto
];

// Archivo JSON
$archivo = "empleados.json";

if(file_exists($archivo)){
    $jsonData = file_get_contents($archivo);
    $empleados = convertirDesdeJSON($jsonData);
    if(!is_array($empleados)) $empleados = [];
}else{
    $empleados = [];
}

$empleados[] = $nuevoEmpleado;

// Guardar JSON actualizado
file_put_contents($archivo, convertirAJSON($empleados));

// Redireccionar a reporte
//eader("Location: procesar.php");
//exit;
?>
<?php
require_once("funciones.php");

$archivo = "empleados.json";
$empleados = [];

if(file_exists($archivo)){
    $jsonData = file_get_contents($archivo);
    $empleados = convertirDesdeJSON($jsonData);
    if(!is_array($empleados)) $empleados = [];
}

$totalRegistros = count($empleados);
$sumaEdad = 0;
$correosInvalidos = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de empleados</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Reporte de empleados</h1>

        <?php if($totalRegistros > 0): ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Edad</th>
                <th>Días desde ingreso</th>
                <th>Puesto</th>
            </tr>
            <?php foreach($empleados as $emp): 
                $validoCorreo = validarCorreo($emp['correo']);
                if(!$validoCorreo) $correosInvalidos++;
                $sumaEdad += $emp['edad'];
                $dias = calcularDiasDesdeIngreso($emp['fecha_ing']);
            ?>
            <tr>
                <td><?= $emp['nombre'] ?></td>
                <td class="<?= $validoCorreo ? 'valido':'invalido' ?>"><?= $emp['correo'] ?></td>
                <td><?= $emp['edad'] ?></td>
                <td><?= $dias >=0 ? $dias : 'Fecha inválida' ?></td>
                <td><?= $emp['puesto'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <p>Total de registros: <?= $totalRegistros ?></p>
        <p>Promedio de edad: <?= $totalRegistros>0 ? round($sumaEdad/$totalRegistros,2) : 0 ?></p>
        <p>Correos inválidos: <?= $correosInvalidos ?></p>

        <?php else: ?>
        <p>No hay empleados registrados.</p>
        <?php endif; ?>
        <p><a href="index.php">Registrar otro empleado</a></p>
    </div>
</body>
</html>