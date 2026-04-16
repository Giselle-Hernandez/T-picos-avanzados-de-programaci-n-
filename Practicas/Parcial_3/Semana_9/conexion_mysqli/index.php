<!DOCTYPE html>
<html>
<head>
    <title>Semana 9 - base de datos</title>
</head>
<body>
<hr>

<h2>1. Crear base de datos</h2>
<form action="crear_bd.php" method="post">
    <button type="submit">Crear BD</button>
</form>

<h2>2. Crear tabla</h2>
<form action="crear_tabla.php" method="post">
    <button type="submit">Crear tabla alumnos</button>
</form>

<h2>3. Insertar alumno</h2>
<form action="insertar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="carrera" placeholder="Carrera">
    <button type="submit">Insertar</button>
</form>

<h2>4. Ver alumnos</h2>
<form action="mostrar.php" method="post">
    <button type="submit">Mostrar registros</button>
</form>

</body>
</html>