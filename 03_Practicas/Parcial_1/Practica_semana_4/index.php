<!DOCTYPE html> <!--tipo de documento -->
<html lang="es"> <!--lenguaje español -->
<head>
    <meta charset="UTF-8"> <!--Para que acepte caracteres especiales -->
    <title>Registro de empleados</title> <!--titulo de la pestaña -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- enlace al css de estilos -->
    <script defer src="js/validar.js"></script> <!--enlace para el js defer es para que se ejecute esta funcion despues de cierto bloque de codigo -->
</head>
<body>
<div class="contenedor"> <!--clase de los estilos -->
    <h1>Registro de empleados</h1> <!--titulo de la pagina -->
    <form id="reg_empleados" action="procesar.php" method="POST" novalidate> <!--indica un formulario, que envia al procesar mediante el metodo POST y desactiva la validacion del navegador para poder acerla manuelmente con js-->
        <label>Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required minlength="3"> <!--required es de que es un campo requerido y minlength con una extencion minima de 3 caracteres -->

        <label>Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label>Edad:</label>
        <input type="text" id="edad" name="edad" required> <!--Aqui elimine los min y max de la edad y cambi el tipo de dato de number a text -->

        <label>Fecha de ingreso:</label>
        <input type="date" id="fecha_ing" name="fecha_ing" required max="<?= date('Y-m-d') ?>"> <!--max es para poner la fecha de hoy y que no pueda insertar fechas futuras -->

        <label>Puesto:</label>
        <input type="text" id="puesto" name="puesto" required>

        <button type="submit">Registrar empleado</button> <!--boton para realizar un registro-->
        <p id="ms_error" class="error"></p> <!--mostrar mensajes de error en una pagina web -->
    </form>
</div>
<script src="validar.js"></script>
</body>
</html>