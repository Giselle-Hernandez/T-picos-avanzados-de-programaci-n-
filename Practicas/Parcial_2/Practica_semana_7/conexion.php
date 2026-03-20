<?php
// Configuración de la base de datos
$host = 'localhost';
$db   = 'log';    // <-- Ajustado al nombre de tu base de datos
$user = 'root';   // Tu usuario de XAMPP
$pass = '';       // Tu contraseña de XAMPP (por defecto va vacía)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Función para registrar un evento
function log_event($tarea, $estado) {
    global $pdo;
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');
    
    $stmt = $pdo->prepare("INSERT INTO registro (tarea, estado, fecha, hora) VALUES (?, ?, ?, ?)");
    $stmt->execute([$tarea, $estado, $fecha, $hora]);
}

// Función para obtener todos los logs
function get_logs() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM registro ORDER BY id ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>