<?php //inicia php
require_once "libreria/EmpleadoHelper.php"; // Carga obligatoriamente el archivo EmpleadoHelper.php una sola vez.
require_once "config/Conexion.php"; //Carga obligatoriamente el archivo Conexion.php una sola vez.

$pdo = Conexion::conectar(); //Guarda en $pdo la conexión a la base de datos que crea la clase Conexion 
//Operador estático (llama a un método sin crear objeto).

$stmt = $pdo->query("SELECT * FROM empleados"); //Ejecuta la consulta en la base de datos y guarda el resultado en $stmt.
$empleados = $stmt->fetchAll(); // Guarda todos los resultados en un array llamado $empleados.
//fetchAll()=Se usa para obtener todos los registros que devolvió una consulta SQL.

$total = count($empleados); // guarda en la variable $total el numero de registros en el array empelados
$sumaEdad = 0; //para guarda la suma de las edades
$mayorAntiguedad = 0; //para guardar la mayor antiguedad
$empleadoAntiguo = null; //para guardar al empleado mas antiguo. poe el momento no tiene ningun valor 

foreach($empleados as $emp){ //para cada emp en empleado 
    $sumaEdad += $emp["edad"]; //Suma la edad de el empleado actual al total.
    $dias = EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]); //guarda en la varieble dias los dias que lleva el empleado y los obtiene mediante 
    //el metodo calcular antiguedad de la clase EmpleadoHelper y con la fecha de ingreso del empleado actual

    if($dias > $mayorAntiguedad){ //si los dias son mayores a lo que hay en la variable $mayorAntiguedad 
        $mayorAntiguedad = $dias; //se actualiza 
        $empleadoAntiguo = $emp["nombre"]; //se guarda el nombre del empleado mas antiguo
    }
}

//$promedioEdad = $total > 0 ? round($sumaEdad/$total,2) : 0; 
if($total > 0){ //total = total de empleados 
    $promedioEdad = round($sumaEdad/$total,2); //round = redondear. 2 es a dos digitos
}else{
    $promedioEdad = 0;
}
?>

<!DOCTYPE html> <!--inicia html -->
<html lang="es"> <!--idioma español -->
    <head>
        <meta charset="UTF-8">
        <title>Listado de empleados</title> <!--tirulo de la pestaña -->
    </head>
    <body>

        <h2>Listado de empleados</h2> <!--titulo de la pagina -->

        <?php if($total > 0): ?> <!--Si hay empleados, entonces muestra la tabla.-->
        <table border="1" cellpadding="5"> <!--border:borde visible cellpadding: espacio interno en cada celda-->
            <tr> <!--fila de celdas horizontal dentro de una tabla-->
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Edad</th>
                <th>Puesto</th>
                <th>Fecha de ingreso</th>
                <th>Días de antigüedad</th>
            </tr>

            <?php foreach($empleados as $emp): ?> <!--para cada emp dentro del arreglo empleados -->
                <tr> <!--para mostrar los empleados -->
                    <td><?= $emp["id"] ?></td>
                    <td><?= htmlspecialchars($emp["nombre"]) ?></td> <!--td: celda de tabla  -->
                    <td><?= htmlspecialchars($emp["correo"]) ?></td>
                    <td><?= $emp["edad"] ?></td>
                    <td><?= htmlspecialchars($emp["puesto"]) ?></td>
                    <td><?= $emp["fecha_ingreso"] ?></td>
                    <td><?= EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]) ?></td> <!-- imprime la antigüedad del empleado calculada a partir de su fecha de ingreso-->
                </tr>
            <?php endforeach; ?>

        </table>
        
        <!-- muestra datos generales y totales-->
        <p><strong>Total empleados:</strong> <?= $total ?></p> 
        <p><strong>Promedio de edad:</strong> <?= $promedioEdad ?></p>
        <p><strong>Empleado con mayor antigüedad:</strong> <?= $empleadoAntiguo ?></p>

        <?php else: ?> <!--si no hay empleados registrados-->
        <p>No hay empleados registrados.</p>
        <?php endif; ?>

        <br>
        <a href="index.php">Registrar nuevo empleado</a><br><br> <!-- enlace con el index para hacer otro registro-->

    </body>
</html>
<!--muestra los resultados generales-->
<h3>Estadísticas</h3>
<p>Total empleados: <?= $total ?></p>
<p>Promedio edad: <?= number_format($promedioEdad,2) ?></p> <!--number_format da formato visual al resultado-->
<p>Empleado con mayor antigüedad: <?= $empleadoAntiguo ?> (<?= $mayorAntiguedad ?> dias)</p>

<br>
<a href="index.php">Volver</a> <!--enlace para volver al index-->

