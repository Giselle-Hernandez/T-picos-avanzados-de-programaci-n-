<?php
class EmpleadoHelper {

    public static function validarCorreo($correo){
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public static function formatearNombre($nombre){
        return strtoupper(trim($nombre));
    }

    public static function validarEdad($edad){
        return filter_var($edad, FILTER_VALIDATE_INT, [
            "options" => ["min_range" => 18, "max_range" => 100]
        ]);
    }

    public static function calcularAntiguedad($fecha){
        $inicio = new DateTime($fecha);
        $hoy = new DateTime();
        return $hoy->diff($inicio)->days;
    }
}
?>