<?php
class Conexion { //define la clase Conexion

    public static function conectar(){ //crea un metodo publio y estatico que se llama conectar
        try{ //intenta
            return new PDO( //crea un objeto PDO para conectarse a la base de datos MySQL.
                "mysql:host=localhost;dbname=empresa_db",
                "root", //usuario de la base de datos.
                "", //contraseña vacia
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //si hay un error en la conexión o consulta, lanza una excepción.
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //formato para mostrar los datos los resultados se devuelven como arrays asociativos
                ]
            );
        } catch(PDOException $e){ //excepcion
            die("Error de conexión a la base de datos."); //matalo y envia este mensaje
        }
    }
}
?>