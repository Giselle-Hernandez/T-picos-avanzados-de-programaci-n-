<?php
class Conexion {

    public static function conectar(){
        try{
            return new PDO(
                "mysql:host=localhost;dbname=empresa_db",
                "root",
                "",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch(PDOException $e){
            die("Error de conexión a la base de datos.");
        }
    }
}
?>