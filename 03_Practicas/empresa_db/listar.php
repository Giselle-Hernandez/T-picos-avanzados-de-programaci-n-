<?php
require_once "libreria/EmpleadoHelper.php";
require_once "config/Conexion.php";

$pdo = Conexion::conectar();

$stmt = $pdo->query("SELECT * FROM empleados");
$empleados = $stmt->fetchAll();

$total = count($empleados);
$sumaEdad = 0;
$mayorAntiguedad = 0;
$empleadoAntiguo = null;

foreach($empleados as $emp){
    $sumaEdad += $emp["edad"];
    $dias = EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]);

    if($dias > $mayorAntiguedad){
        $mayorAntiguedad = $dias;
        $empleadoAntiguo = $emp["nombre"];
    }
}

$promedioEdad = $total > 0 ? round($sumaEdad/$total,2) : 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de empleados</title>
</head>
<body>

<h2>Listado de empleados</h2>

<?php if($total > 0): ?>
<table border="1" cellpadding="5">
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Edad</th>
    <th>Puesto</th>
    <th>Días de antigüedad</th>
</tr>

<?php foreach($empleados as $emp): ?>
<tr>
    <td><?= htmlspecialchars($emp["nombre"]) ?></td>
    <td><?= htmlspecialchars($emp["correo"]) ?></td>
    <td><?= $emp["edad"] ?></td>
    <td><?= htmlspecialchars($emp["puesto"]) ?></td>
    <td><?= EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]) ?></td>
</tr>
<?php endforeach; ?>

</table>

<p><strong>Total empleados:</strong> <?= $total ?></p>
<p><strong>Promedio de edad:</strong> <?= $promedioEdad ?></p>
<p><strong>Empleado con mayor antigüedad:</strong> <?= $empleadoAntiguo ?></p>

<?php else: ?>
<p>No hay empleados registrados.</p>
<?php endif; ?>

<br>
<a href="index.php">Registrar nuevo empleado</a><br><br>

</body>
</html>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Edad</th>
    <th>Fecha Ingreso</th>
    <th>Puesto</th>
</tr>

<?php foreach($empleados as $emp){ ?>
<tr>
    <td><?= $emp['id'] ?></td>
    <td><?= $emp['nombre'] ?></td>
    <td><?= $emp['correo'] ?></td>
    <td><?= $emp['edad'] ?></td>
    <td><?= $emp['fecha_ingreso'] ?></td>
    <td><?= $emp['puesto'] ?></td>
</tr>
<?php } ?>

</table>

<h3>Estadísticas</h3>
<p>Total empleados: <?= $total ?></p>
<p>Promedio edad: <?= number_format($promedioEdad,2) ?></p>
<p>Empleado con mayor antigüedad: <?= $empleadoAntiguo ?> (<?= $mayorAntiguedad ?> dias)</p>

<br>
<a href="index.php">Volver</a>