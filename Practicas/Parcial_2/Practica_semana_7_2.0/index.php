<!DOCTYPE html> 
<html> 
    <head> 
        <title>Registro de tareas</title> 
        <script defer src="script.js"></script> 
    </head> 
    <body> 
        <h2>Control de tareas</h2> 
        <h4>Tarea 1 - Generar Reporte </h4>
        <button onclick="iniciar_tarea1()">Iniciar</button> 
        <button onclick="detener_tarea1()">Detener</button> 

        <h4>Tarea 2 - Procesar lote</h4>
        <button onclick="iniciar_tarea2()">Iniciar</button> 
        <button onclick="detener_tarea2()">Detener</button> 

        <h4>Estado de la tarea</h4>
        <label>Tarea 1: </label><br>
        <label>Tarea 2: </label><br><br>

        <a href="ver_registros.php">Ver registros</a> 

</html> <!--Finaliza el documento html -->