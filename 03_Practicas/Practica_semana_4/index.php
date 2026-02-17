<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="css/estilos.css">
        <script defer src="js/validar.js"></script>
    </head>
    <body>
        <div class="contenedor">
            <h1>Registro de empleados:</h1>
            <form  id="reg_empleados" action="procesar.php" method="$_POST">
                <input type="text" name="nombre" id="nombre">Nombre: <br>
                <input type="email" name="correo" id="correo">Correo: <br>
                <input type="text" name="edad" id="edad">Edad: <br>
                <input type="text" name="fecha_ing" id="fecha_ing">Fecha de ingreso: <br>
                <input type="text" name="puesto" id="puesto">Puesto: <br>

                <!-- boton para enviar-->
                <input type="submit" value="Registrat empleado">
                <p id="ms_error" class="error"></p>
            </form>
        </div>  
    </body>
</html>