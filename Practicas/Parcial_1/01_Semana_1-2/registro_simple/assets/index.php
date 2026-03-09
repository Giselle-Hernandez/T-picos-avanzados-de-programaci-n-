<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
<h2>Formulario</h2>
<form action="procesar.php" method="POST">  <!-- Define a donde se enviaran los datos -->
    <label>Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br></br>
    
    <label>Edad:</label>
    <input type="number" id="edad" name="edad">
    <br></br>

    <label>Correo electronico:</label>
    <input type="email" id="correo" name="correo">
    <br></br>

    <label>Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña">
    <br></br>

    <label>Confirmar contraseña:</label>
    <input type="password" id="confirm_contraseña" name="confirm_contraseña">
    <br></br>

    <button type="submit" id="action" name="action" value="validar">Validar</button>
    <button type="submit" id="action" name="action" value="guardar">Guardar</button>
    <button type="reset">Limpiar</button>
</form>

</body>
</html>