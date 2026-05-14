<?php
session_start();
$usuario = "Profe Collazo";// Usuario
$fecha_hoy = date("d / m / Y");// Fecha actual
if (!isset($_SESSION['transacciones'])) { // Si no existen transacciones, crear las iniciales
    $_SESSION['transacciones'] = [
        ["item" => "Mensualidad Gym", "monto" => -100.00, "categoria" => "Salud"],
        ["item" => "Pago de salario", "monto" => 1500.00, "categoria" => "Ingreso"],
        ["item" => "Comida fuera", "monto" => -320.50, "categoria" => "Comida"],
        ["item" => "Transporte", "monto" => -12.00, "categoria" => "Viajes"]
    ];
}
$transacciones = $_SESSION['transacciones']; // Obtener transacciones
$saldo_total = 0; // Calcular saldo automáticamente

foreach ($transacciones as $t) {
    $saldo_total += $t['monto'];
}
?>

<!DOCTYPE html> <!--indica que inicia codigo html -->
<html lang="es"> <!--indica que esta escrito en español -->
<head><!--abre el encabezado -->
    <meta charset="UTF-8"> <!--linea para que acepte los caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--es la linea para que sea responsive -->     
    <title>Mi Cartera</title><!--es el titulo de la pestaña-->
    <link rel="stylesheet" href="styles.css"><!--es el enlace con la hoja de estilos -->
</head> <!--cierra el encabezado -->

<body><!--abre el cuerpo -->

    <header> <!--es para mostrar datos en la parte superior de la pagina -->
        <div class="container"> <!--crea un contendor y le asigna una clase de nombre container -->
            <p>Hola, <strong><?php echo $usuario; ?></strong></p> <!--este es el mensaje que se muestra en la pantalla del usuario -->
            <span class="balance-label">Saldo disponible</span> <!--en esta linea se utiliza una etiqueta que crea una pequeña cajita y se le asigna una clase de nombre balance-label y tiene un texto que dice saldo dosponible  -->
            <div class="balance-amount">$<?php echo number_format($saldo_total, 2); ?></div> <!--crea un contenedor y le asigna una clase de nombre balance-amount  para darle formato al texto, despues muestra codigo php que se esta utilizando para darle un formato al numero-->
            <p class="fecha"><?php echo $fecha_hoy; ?></p><!--muestra en un parrafo  -->
        </div>
    </header>

    <main class="container">
        <h3>Movimientos recientes</h3> <!--este es un titulo de tamaño 3 -->
        
        <div class="hoja">  <!--crea un contenedor para dar formato a la siguiente informacion -->
            <?php foreach($transacciones as $t): ?><!--indica codigo php y es un ciclo que dice que recorra el arreglo una por una de las transacciones y haga lo siguente -->
                <div class="item"><!--crea un cotenedor para dar formatos -->
                    <div>
                        <div class="item-title"><?php echo $t['item']; ?></div><!--crea un contenedor para dar formato y muestra el nombre del gasto -->
                        <small class="item-category"><?php echo $t['categoria']; ?></small> <!--en pequeño muestra la categoria a la que pertenece -->
                    </div><!--cierra el contenedor -->
                    <div class="item-amount" 
                        style="color: <?php echo ($t['monto'] < 0) ? '#ef4444' : '#10b981'; ?>;"> <!--color de los numeros-->
                        <?php echo ($t['monto'] < 0 ? '-' : '+') . ' $' . abs($t['monto']); ?> <!--pone un signo antes dependiendo si es un gasto o un ingreso-->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <nav> <!--nav es un menu o bloque de navegacion-->
            <a href="registrar_gasto.php" class="btn-action">+ Agregar un nuevo movimiento</a>
        </nav>
    </main><!--es la etiqueta del tipo "desarrollo" -->

</body>
</html>