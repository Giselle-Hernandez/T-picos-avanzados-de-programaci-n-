<?php
//libreria creada para hacer las validaciones de los formatos en procesar
class EmpleadoHelper { 

    public static function validarCorreo($correo){
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public static function formatearNombre($nombre){
        return ucfirst(strtolower(trim($nombre)));
    }

    public static function validarEdad($edad){
        return filter_var($edad, FILTER_VALIDATE_INT, [
            "options" => ["min_range" => 18, "max_range" => 100]
        ]);
    }

    public static function calcularAntiguedad($fecha){ //recibe la fecha de ingreso de un empleado y devuelve cuántos días han pasado desde ese día hasta hoy
        $inicio = new DateTime($fecha);
        $hoy = new DateTime();
        return $hoy->diff($inicio)->days;
    }
}
?>