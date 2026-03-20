<?php 
class conexion {
    public static function conectar() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=log", "root", ""); //crear una nueva conexión a la base de datos ubicada en localhost, llamada log, con usuario root y sin contraseña, y guardarla en la variable $pdo
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO::ATTR_ERRMODE tipo de configugracion y el que sigue es para manejar los errores com excepcion
            return $pdo; //debuelve ña conexion creada 
        } catch (PDOException $e) { 
            die("Error de conexion: " . $e->getMessage());
        }
    }
}
?>