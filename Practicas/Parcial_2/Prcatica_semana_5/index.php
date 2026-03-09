<!DOCTYPE html> <!--tipo de documento -->
<!--Archivo del formulario-->
<html lang="es"> <!--idioma del archivo -->
<head> <!--encabezado -->
    <meta charset="UTF-8"> <!--linea para que acepte los caracteres especiales -->
    <title>Registro de empleados</title> <!--nombre de la pestaña -->
</head> <!--cierra el encabezado -->
<body> <!--abre el body -->

    <h2>Registro de empleados</h2> <!--titulo de la pagina -->

    <form action="procesar.php" method="POST"> <!--formulario que se envia a procesar.php por el metodo post-->

        <label>Nombre:</label> <!--etiqueta para el campo de nombre -->
        <input type="text" name="nombre" required><br><br> <!--objeto de entrada para el nombre -->

        <label>Correo:</label> <!--etiqueta para el campo de correo -->
        <input type="email" name="correo" required><br><br> <!--objeto de entrada para el email -->

        <label>Edad:</label> <!--etiqueta para el campo de edad-->
        <input type="number" name="edad" min="18" max="100" required><br><br> <!--objeto de entrada para la  edad -->

        <label>Fecha de ingreso:</label> <!--etiqueta para el campo de fecha de ingreso-->
        <input type="date" name="fecha_ingreso" required><br><br> <!--objeto de entrada para la fecha de ingreso -->

        <label>Puesto:</label> <!--etiqueta para el campo de puesto-->
        <input type="text" name="puesto" required><br><br> <!--objeto de entrada para el puesto -->

        <button type="submit">Guardar</button> <!--boton para guardar el formulario. es un boton de envio -->

    </form> <!--cierra el formulario -->

    <br> <!--es un salto -->
    <a href="listar.php">Ver empleados registrados</a> <!--es un enlace al archivo de listar para ver los empleados que estan registrados -->

</body> <!--cierra el body -->
</html> <!--cierra en html -->