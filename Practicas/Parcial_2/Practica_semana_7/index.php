<?php
require_once __DIR__ . "/conexion.php";
$pdo = conexion::conectar();

$stmt = $pdo->prepare("SELECT * FROM registro ORDER BY fecha, hora ASC");
$stmt->execute();
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control de tareas</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { margin: 0 auto; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        h2,h3,h4,p,button { margin: 10px 0; }
    </style>
    <script>
        // Evita bloqueos y permite concurrencia
        async function iniciar_tarea(tarea) {
            const estado = document.getElementById("estado" + tarea);
            estado.innerText = "Estado: en ejecución";
            
            // Llamada a PHP para ejecutar la tarea paso a paso
            let pasos = tarea === 1 ? ["iniciada", "en proceso", "finalizada"] : ["iniciada", "en proceso", "finalizada"];
            let delays = tarea === 1 ? [2000, 2000] : [3000, 2000];

            // Inserta el primer estado
            await fetch(`tarea_proceso.php?tarea=${tarea}&estado=${pasos[0]}`);

            for (let i = 1; i < pasos.length; i++) {
                await new Promise(r => setTimeout(r, delays[i-1]));
                await fetch(`tarea_proceso.php?tarea=${tarea}&estado=${pasos[i]}`);
            }
        }

        function detener_tarea(tarea) {
            document.getElementById("estado" + tarea).innerText = "Estado: detenida";
            fetch(`detener.php?tarea=${tarea}`);
        }

        // Refresca tabla cada 3 segundos
        setInterval(async () => {
            const res = await fetch("tabla.php");
            document.getElementById("tabla-registros").innerHTML = await res.text();
        }, 3000);
    </script>
</head>
<body>

<h2>CONTROL DE TAREAS DEL SISTEMA</h2>

<h4>Tarea 1 - Generar Reporte</h4>
<p id="estado1">Estado: detenido</p>
<button onclick="iniciar_tarea(1)">Iniciar</button>
<button onclick="detener_tarea(1)">Detener</button>

<h4>Tarea 2 - Procesar lote</h4>
<p id="estado2">Estado: detenido</p>
<button onclick="iniciar_tarea(2)">Iniciar</button>
<button onclick="detener_tarea(2)">Detener</button>

<h3>Registro de actividad</h3>
<div id="tabla-registros">
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
</div>

</body>
</html>