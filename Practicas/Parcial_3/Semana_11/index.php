<?php
$usuario = "Estudiante";
$fecha_hoy = date("d / m / Y");
$saldo_total = 1250.50;

$transacciones = [
    ["item" => "Mensualidad Gym", "monto" => -450.00, "categoria" => "Salud"],
    ["item" => "Pago salario", "monto" => 1500.00, "categoria" => "Ingreso"],
    ["item" => "Comida fuera", "monto" => -320.50, "categoria" => "Comida"],
    ["item" => "Transporte", "monto" => -12.00, "categoria" => "Viajes"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cartera App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <div class="container">
        <p>Hola, <strong><?php echo $usuario; ?></strong> 👋</p>
        <span class="balance-label">Saldo disponible</span>
        <div class="balance-amount">$<?php echo number_format($saldo_total, 2); ?></div>
        <p class="fecha"><?php echo $fecha_hoy; ?></p>
    </div>
</header>

<main class="container">
    <h3>Movimientos recientes</h3>
    
    <div class="card transaction-list">
        <?php foreach($transacciones as $t): ?>
            <div class="item">
                <div>
                    <div class="item-title"><?php echo $t['item']; ?></div>
                    <small class="item-category"><?php echo $t['categoria']; ?></small>
                </div>
                <div class="item-amount"
                     style="color: <?php echo $t['monto'] < 0 ? '#ef4444' : '#10b981'; ?>;">
                    <?php echo ($t['monto'] < 0 ? '-' : '+') . ' $' . abs($t['monto']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <button class="btn-action" onclick="alert('Gasto agregado')">
        + Agregar Nuevo Gasto
    </button>
</main>

</body>
</html>