<?php
$usuario = "Estudiante";
$fecha_hoy = date("d / m/ Y");
$saldo_total = 1250.50;

$transacciones = [
    ["item" => "Mensualidad Gym", "monto" => -450.00, "categoria" => "Salud"],
    ["item" => "Pago salario", "monto" => 1500.00, "categoria" => "Ingreso"],
    ["item" => "Comida fuera de casa", "monto" => -320.50, "categoria" => "Comida"],
    ["item" => "Transporte", "monto" => 12.00, "categoria" => "Viajes"],
];
?>
<!DOCTYPE html>
<html lang="es>"
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""widh=device-width, initial-scale=1.0">
    <title>Mi cartera</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <p>Hola, <strong><?php echo $usuario; ?></strong></p>
            
        </div>
    </header>
</body>