<!DOCTYPE html>
<html>
    <head>
        <title>Semana 6 - Concurrencia</title>
        <script defer src="script.js"></script>
    </head>
    <body>
        <h2>Simulacion Flujo único vs Flujo Múltiple</h2>
        <h3>Flujo Único (Secuencial)</h3>
        <a href="secuencial.php" target="_blank">
            <button>Ejecucion secuencial</button>
        </a>
        <h3>Flujo Multiple (Simulación)</h3>
        <button onclick="ejecutarParalelo()">Ejecutar en paralelo</button>
        <div id="resultado"></div>
    </body>
</html>