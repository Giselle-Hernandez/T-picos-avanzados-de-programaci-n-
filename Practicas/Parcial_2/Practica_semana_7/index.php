<?php //inicia php
require_once "conexion.php"; //require_once incluye un archivo solo una vez conexion con la base de datos
$pdo = conexion::conectar(); //llama al metodo conectar de la clase conexion y lo almacena en $pdo

$stmt = $pdo->prepare("SELECT * FROM registro ORDER BY fecha, hora ASC"); //Prepara una consulta SQL que selecciona todos los registros de la tabla registro y los ordena por fecha y hora ascendente.
$stmt->execute(); //ejecuta la consulta preparada arriba 
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC); // obtiene los registros y los guarda en un array $registros 
?>

<!DOCTYPE html> <!--tipo d documento -->
<html> <!--inicia html -->
    <head><!--encabezadoo html -->
        <title>Control de tareas</title><!--titulo de la pestaña -->
        <style>
            body { font-family: Arial, sans-serif; text-align: center; }
            table { margin: 0 auto; border-collapse: collapse; margin-top: 20px; }
            th, td { border: 1px solid #000; padding: 8px; text-align: center; }
            h2,h3,h4,p,button { margin: 10px 0; }
        </style>
        <script> 
            async function iniciar_tarea(tarea) { 
                const estado = document.getElementById("estado" + tarea); /*crea la constante estado y en ella guarda lo que hat en el elmento id estado mas el numero de tarea*/
                estado.innerText = "Estado: en ejecución"; /*cambia el tecto del estado */
                
                let pasos = tarea === 1 ? ["iniciada", "en proceso", "finalizada"] : ["iniciada", "en proceso", "finalizada"]; /*define los estados por los que va a pasar la tarea */
                let delays = tarea === 1 ? [2000, 2000] : [3000, 2000]; /*tiempos de espera en cada tarea */

                await fetch('tarea_proceso.php', { /*en todo este bloque se envia el primer estado al sevidor  */
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `tarea=${tarea}&estado=${pasos[0]}`
                });

                for (let i = 1; i < pasos.length; i++) { /*ciclo que envia los otros estados al servidor*/ 
                    await new Promise(r => setTimeout(r, delays[i-1]));
                    await fetch('tarea_proceso.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: `tarea=${tarea}&estado=${pasos[i]}`
                    });
                }
            }

            function detener_tarea(tarea) { /*Funcion para detener las tareas*/
                document.getElementById("estado" + tarea).innerText = "Estado: Detenida";
                fetch('detener.php', { 
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `tarea=${tarea}`
                });
            }

            // Refresca tabla cada 3 segundos
            setInterval(async () => {
                const res = await fetch("tabla.php");
                document.getElementById("tabla-registros").innerHTML = await res.text();
            }, 3000);
        </script>
    </head>
    <body>

        <h2>CONTROL DE TAREAS DEL SISTEMA</h2> <!-- titulo que aparece en la pagina-->

        <h4>Tarea 1 - Generar Reporte</h4> <!--subtitulo de la pagina -->
        <p id="estado1">Estado: detenido</p> <!--cambia el elemento de id estado1 por las letras en blanco -->
        <button onclick="iniciar_tarea(1)">Iniciar</button> <!-- boton pra iniciar la ejecucion-->
        <button onclick="detener_tarea(1)">Detener</button> <!-- boton pra detener la ejecucion-->

        <h4>Tarea 2 - Procesar lote</h4>
        <p id="estado2">Estado: detenido</p>
        <button onclick="iniciar_tarea(2)">Iniciar</button>
        <button onclick="detener_tarea(2)">Detener</button>

        <h3>Registro de actividad</h3> <!--subtitulo de la pagina -->
        <div id="tabla-registros"> <!-- crea un contenedor vacío donde se va a mostrar la tabla de registros-->
            <table> <!--crea una tabla -->
            <tr> <!--fila de tabla -->
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Tarea</th>
                <th>Estado</th>
            </tr>
            <?php foreach ($registros as $row): ?> <!-- para cada $row en en erreglo $registros-->
            <tr> <!-- fila de tabla--> 
                <td><?php echo $row['Id']; ?></td> <!--td es una celda-->
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