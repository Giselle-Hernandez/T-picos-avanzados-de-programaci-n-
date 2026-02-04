<?php
$errores = [];  //arreglo donde se guardan los errores

if ($_SERVER["REQUEST_METHOD"] == "POST") { //Solo ejecutar la validación si se envió el formulario.

    $nombre = trim($_POST["nombre"]); //trim() elimina espacios al inicio y al final para solo comparar los caracteres.
    $correo = trim($_POST["correo"]);
    $edad = trim($_POST["edad"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $action = $_POST["action"];

    // Validar Nombre
    if (empty($nombre)) { //empty() revisa si está vacío.
        $errores[] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }

    // Validar Correo
    if (empty($correo)) {
        $errores[] = "El correo es obligatorio.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { //Valida que sea un correo válido.
        $errores[] = "El correo no tiene un formato válido.";
    }

    // Validar Edad
    if (empty($edad)) {
        $errores[] = "La edad es obligatoria.";
    } elseif (!is_numeric($edad) || $edad < 15 || $edad > 99) { //Revisa que sea número y esté en el rango 15–99.
        $errores[] = "La edad debe ser un número entre 15 y 99.";
    }

    // Validar Contraseña
    if (empty($password)) {
        $errores[] = "La contraseña es obligatoria.";
    } elseif (strlen($password) < 6) { //Revisa que tenga mínimo 6 caracteres.
        $errores[] = "La contraseña debe tener al menos 6 caracteres.";
    }

    // Validar Confirmar Contraseña
    if ($password !== $confirm_password) { //Verifica que ambas coincidan.
        $errores[] = "Las contraseñas no coinciden.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">

            <?php if (!empty($errores)) : ?> <!--Si hay errores se muestran todos, si no, muestra el mensaje de éxito.-->
                <h3 class="error-title">Error:</h3>
                <?php foreach ($errores as $error) : ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endforeach; ?>
                <a class="back" href="index.php">← Volver al formulario</a>

            <?php else : ?>
                <h3 class="success-title">¡El registro se realizo con éxito!</h3>
                <p><b>Nombre:</b> <?php echo htmlspecialchars($nombre); ?></p>
                <p><b>Correo:</b> <?php echo htmlspecialchars($correo); ?></p>
                <p><b>Edad:</b> <?php echo htmlspecialchars($edad); ?></p>

                <?php if ($action == "guardar") : ?>
                    <p class="success">Los datos se guardaron correctamente.</p>
                <?php endif; ?>

                <a class="back" href="index.php">← Volver al formulario</a>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>


