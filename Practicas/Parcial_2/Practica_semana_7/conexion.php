<?php
class conexion {
    public static function conectar() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=log", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexion: " . $e->getMessage());
        }
    }
}
?>