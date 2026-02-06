<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
<h2>Formulario</h2>
<form action="procesar.php" method="POST"> 
    <label>Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    
    <br></br>
    
    <label>Edad:</label>
    <input type="number" id="edad" name="edad">
    <br></br>

    <label>Corro electronico:</label>
    <input type="email" id="correo" name="correo">
    <br></br>

    <label>Contraseña:</label>
    <input type="password" id="contraseña" name="cotraseña">
    <br></br>

    <button type="submit" name="validar">Validar</button>
    <button type="submit" name="guardar">Guardar</button>
    <button type="submit" name="limpiar">Limpiar</button>
</form>

</body>
</html>
<!--mensajes con php -->