<!DOCTYPE html> <!--define que es un documento con html-->
<html lang="es">
<head>
    <meta charset="UTF-8"> <!--Este incluye los caracteres como comillas y la ñ-->
    <title>Registro</title> <!--Titulo de la pestaña -->
    <link rel="stylesheet" href="style.css"> <!--enlace con el archivo que tiene los estilos-->
</head>
<body> <!--abre el cuerpo del html-->
    <div class="contenedor"> <!-- sirve para englobar o agrupar todo el formulario. Class contenedor es una clase del css-->
        <div class="carta"> <!--es para darle formato de carta al formulario -->
            <h2>Formulario</h2> <!-- encabezado de la pagina-->

            <form action="procesar.php" method="POST"> <!--Los datos se envian al archivo de procesar utilizando el metodo POST-->

                <label>Nombre completo:</label> <!--Etiqueta que se muestra en el formulario -->
                <input type="text" id="nombre" name="nombre" required minlength="3"> <!--tipo de dato que solicita, nombre de lo que pide, los requisitos minimos y una etiqueta que muestra un ejemplo -->

                <label>Correo:</label> <!--Etiqueta que se muestra en el formulario -->
                <input type="email" id="correo" name="correo" required > <!-- input es un campo de entrada, required hace que el ca,po sea obligatorio-->

                <label>Edad:</label>
                <input type="number" id="edad" name="edad" required min="15" max="99">

                <label>Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required minlength="6">

                <label>Confirmar contraseña:</label>
                <input type="password" id= "confirm_contraseña" name="confirm_contraseña" required>

                <div class="botones"> <!-- agrupa los botones-->
                    <button type="submit"name="action" value="validar" class="btn validacion">Validar</button> <!--name="action" y value="validar" sirven para saber qué botón presionó el usuario.-->
                    <button type="submit" name="action" value="guardar" class="btn guardado">Guardar</button> <!-- submit crea un botón encargado de enviar los datos de un formulario al servidor.-->
                    <button type="reset" class="btn reiniciar">Limpiar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
