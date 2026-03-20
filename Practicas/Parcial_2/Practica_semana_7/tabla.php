<?php
//esta eachivo es para ver la informacion de los registros
require_once "conexion.php";//ejecuta el archivo de conexion una sola vez. es para poder usar el metodo conectar
$pdo = conexion::conectar();//llama al metodo conectar de la clase conexion y lo almacena en $pdo

$stmt = $pdo->prepare("SELECT * FROM registro ORDER BY fecha, hora ASC"); //obtiene todos los registros y los almacena en $stmt en orden asendente
$stmt->execute();//ejecuta la consulta
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC); //obtiene todos los $stmt y las guarda en un arreglo asociativo $registros
?>

<table> <!--crea una tabla-->
<tr> <!-- fila de tabla--> 
    <th>ID</th> <!--th: encabezados de columnas-->
    <th>Fecha</th>
    <th>Hora</th>
    <th>Tarea</th>
    <th>Estado</th>
</tr>
<?php foreach ($registros as $row): ?> <!--para cada $row en el arreglo registros-->
<tr>
    <td><?php echo $row['Id']; ?></td> <!--inserta los datos obtenidos td=celda e imprime el valor que hay en id-->
    <td><?php echo $row['Fecha']; ?></td>
    <td><?php echo $row['Hora']; ?></td>
    <td><?php echo $row['Tarea']; ?></td>
    <td><?php echo $row['Estado']; ?></td>
</tr>
<?php endforeach; ?> <!--cierra bloque foreach -->
</table><!--cierra la tabla-->