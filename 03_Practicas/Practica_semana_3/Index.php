<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validar.js"></script>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form method="POST" action="Procesar.phpon" onsubmit="return validar_form()">
    <!--Radio botones-->    
    <p><strong>Selecciona tu semestre:</strong></p>
    <input type="radio" name="semestre" value="primero">Primero <br>
    <input type="radio" name="semestre" value="segundo">Segundo <br>
    <input type="radio" name="semestre" value="tercero">Tercero <br>
    
    <!--Checkbox-->
    <p><strong>Selecciona tus intereses:</strong></p>
    <input type="checkbox" name="interes" value="belleza">Belleza<br>
    <input type="checkbox" name="interes" value="deportes">Deportes<br>
    <input type="checkbox" name="interes" value="tecnologia">Tecnologia<br>

    <!--Select-->
    <p><strong>Selecciona el curso al que quieres pertenecer:</strong></p>
    <select name="curso" id="curso">
        <option value="">--Selecciona una opción--</option>
        <option value="maquillaje">Maquillaje</option>
        <option value="futbol">Futbol</option>
        <option value="basketbol">Baskertbol</option>
        <option value="programacion">Programación</option>
        <option value="robotica">Robotica</option>
    </select>
    <!--Botón para enviar-->
    

    </form>


</body>
</html>