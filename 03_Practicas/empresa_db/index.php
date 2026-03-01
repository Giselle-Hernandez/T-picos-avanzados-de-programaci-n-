<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de empleados</title>
</head>
<body>

<h2>Registro de empleados</h2>

<form action="procesar.php" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Correo:</label>
    <input type="email" name="correo" required><br><br>

    <label>Edad:</label>
    <input type="number" name="edad" min="18" max="100" required><br><br>

    <label>Fecha de ingreso:</label>
    <input type="date" name="fecha_ingreso" required><br><br>

    <label>Puesto:</label>
    <input type="text" name="puesto" required><br><br>

    <button type="submit">Guardar</button>

</form>

<br>
<a href="listar.php">Ver empleados registrados</a>

</body>
</html>