class conexion {
    public static function conectar(){
        try{
            return new PDO("mysql:host=localhost;dbname=log","root"."");
        } catch(PDOException $e){
            die("Error de conexion");
        }

    }

}