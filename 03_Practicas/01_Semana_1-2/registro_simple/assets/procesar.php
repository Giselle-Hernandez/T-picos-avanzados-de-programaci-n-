<?php //indica el codigo php, todo lo que esta aqui adentro se ejectuta como php
$errores = [];  //arreglo donde se guardan los mensajes de error

$nombre = trim($_POST["nombre"]); //trim() elimina espacios al inicio y al final para solo comparar los caracteres.
$correo = trim($_POST["correo"]); //Guarda el valor enviado desde el formulario en la variable $correo.
$edad = trim($_POST["edad"]);
$contrasena = trim($_POST["contrasena"]);
$confirm_contrasena = trim($_POST["confirm_contrasena"]);
$action = $_POST["action"];

// En esta seccion se valida que el nombre sea correcto
if (empty($nombre)) { //empty() revisa si está vacío.
    $errores[] = "El nombre es obligatorio.";
} elseif (strlen($nombre) < 3) { //strlen cuenta cuantos datos tiene una cadena de texto
    $errores[] = "El nombre debe tener al menos 3 caracteres.";
}

// En esta seccion se valida que el correo sea correcto
if (empty($correo)) {
    $errores[] = "El correo es obligatorio.";
} elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { //Valida que sea un correo válido. filter_var() revisa el formato de correo
    $errores[] = "El correo no tiene un formato válido.";
}

// En esta seccion se valida que la edad sea correcta
if (empty($edad)) {
    $errores[] = "La edad es obligatoria.";
} elseif (!is_numeric($edad) || $edad < 15 || $edad > 99) { //Revisa que sea número y esté en el rango 15–99. || significan o
    $errores[] = "La edad debe ser un número entre 15 y 99.";
}

// En esta seccion se valida que la contraseña sea correcta
if (empty($contrasena)) {
    $errores[] = "La contraseña es obligatoria.";
} elseif (strlen($contrasena) < 6) { //Revisa que tenga mínimo 6 caracteres.
    $errores[] = "La contraseña debe tener al menos 6 caracteres.";
}

//confirmacion de la contraseña
if ($contrasena !== $confirm_contrasena) { //Verifica que ambas coincidan.
    $errores[] = "Las contraseñas no coinciden.";
}
?>

<!DOCTYPE html> <!--define el tipo de documento-->
<html lang="es"> <!--idioma en español-->
<head>
    <meta charset="UTF-8"> <!--para que acepte caracteres como la ñ-->
    <title>Registro</title>
</head>
<body>
    <?php if (!empty($errores)) : ?> <!--Verifica que errores[] no este vacio. Si hay errores se muestran todos, si no, muestra el mensaje de éxito.-->
        <h3>Error:</h3> <!--muestra el titulo de error-->
        <?php foreach ($errores as $error) : ?> <!-- recorre carda error y lo muestra en pantalla-->
            <?php echo $error; ?><br>
        <?php endforeach; ?>

    <?php else : ?> <!--si no hay errores-->
        <h3> ¡Acción exitosa!</h3>
        Nombre: <?php echo htmlspecialchars($nombre); ?> <br> <!-- muestra los datos ingresados-->                   
        Correo: <?php echo htmlspecialchars($correo); ?> <br><!--impide que el navegador interprete los datos como código--> 
        Edad: <?php echo htmlspecialchars($edad); ?> <br>

    <?php if ($action == "guardar") : ?>
        Los datos se guardaron correctamente. <!-- mensaje que se muestra al guardar-->
    <?php endif; ?>

    <?php endif; ?> <!--termino de un bloque-->

</body>
</html>


