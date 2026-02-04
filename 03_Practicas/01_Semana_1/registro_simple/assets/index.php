<!DOCTYPE html> <!--define que es un documento con html-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css"> <!--enlace con el archivo que tiene los estilos-->
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Formulario</h2>

            <form action="procesar.php" method="POST"> <!--Los datos se envian al archivo de procesar utilizando el metodo POST-->

                <label>Nombre completo:</label> <!--Etiqueta que se muestra en el formulario -->
                <input type="text" name="nombre" required minlength="3" placeholder="Ej: Juan Pérez"> <!--tipo de dato que solicita, nombre de lo que pide, los requisitos minimos y una etiqueta que muestra un ejemplo -->

                <label>Correo:</label> <!--Etiqueta que se muestra en el formulario -->
                <input type="email" name="correo" required placeholder="ejemplo@correo.com">

                <label>Edad:</label>
                <input type="number" name="edad" required min="15" max="99" placeholder="15 - 99">

                <label>Contraseña:</label>
                <input type="password" name="password" required minlength="6" placeholder="Mínimo 6 caracteres">

                <label>Confirmar contraseña:</label>
                <input type="password" name="confirm_password" required placeholder="Repite tu contraseña">

                <div class="buttons">
                    <button type="submit" name="action" value="validar" class="btn validate">Validar</button> <!--name="action" y value="validar" sirven para saber qué botón presionó el usuario.-->
                    <button type="submit" name="action" value="guardar" class="btn save">Guardar</button>
                    <button type="reset" class="btn reset">Limpiar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
