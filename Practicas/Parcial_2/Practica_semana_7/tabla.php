<?php
require_once "conexion.php";
$pdo = conexion::conectar();

$stmt = $pdo->prepare("SELECT * FROM registro ORDER BY fecha, hora ASC");
$stmt->execute();
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
<tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Tarea</th>
    <th>Estado</th>
</tr>
<?php foreach ($registros as $row): ?>
<tr>
    <td><?php echo $row['Id']; ?></td>
    <td><?php echo $row['Fecha']; ?></td>
    <td><?php echo $row['Hora']; ?></td>
    <td><?php echo $row['Tarea']; ?></td>
    <td><?php echo $row['Estado']; ?></td>
</tr>
<?php endforeach; ?>
</table>