<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $item = $_POST['item'];
    $categoria = $_POST['categoria'];
    $monto = $_POST['monto'];

    $nuevo_gasto = [
        "item" => $item,
        "monto" => -abs($monto),
        "categoria" => $categoria
    ];

    $_SESSION['transacciones'][] = $nuevo_gasto;

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<header>
    <div class="container">
        <h2>Agrega la información de tu movimiento</h2>
    </div>
</header>

<main class="container">

    <form method="POST">

        <input type="text" name="item" placeholder="Nombre del gasto" required><br>
        <input type="text" name="categoria" placeholder="Categoria" required><br>
        <input type="number" step="0.01" name="monto" placeholder="Monto" required><br><br>

        <nav>
            <button type="submit" class="btn-action">Guardar</button>

            <a href="index.php" class="btn-action">Volver</a>
        </nav>

    </form>

</main>
</body>
</html>
