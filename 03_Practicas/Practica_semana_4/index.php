<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de empleados</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">
    <h1>Registro de empleados</h1>
    <form id="reg_empleados" action="procesar.php" method="POST" novalidate>
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required minlength="3">

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="18" max="100" required>

        <label for="fecha_ing">Fecha de ingreso:</label>
        <input type="date" id="fecha_ing" name="fecha_ing" required max="<?= date('Y-m-d') ?>">

        <label for="puesto">Puesto o área:</label>
        <input type="text" id="puesto" name="puesto" required>

        <button type="submit">Registrar empleado</button>
        <p id="ms_error" class="error"></p>
    </form>
</div>
<script src="validar.js"></script>
</body>
</html>