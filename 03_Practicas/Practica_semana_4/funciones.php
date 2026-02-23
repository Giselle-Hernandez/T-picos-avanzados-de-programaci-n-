<?php
// Sanitiza texto: trim + mayúscula inicial + htmlspecialchars
function limpiarTxt($texto){
    return htmlspecialchars(ucwords(strtolower(trim($texto))), ENT_QUOTES, 'UTF-8');
}

// Valida correo electrónico
function validarCorreo($correo){
    return filter_var($correo, FILTER_VALIDATE_EMAIL) !== false;
}

// Valida edad como entero entre 18 y 100
function validarEdad($edad){
    return filter_var($edad, FILTER_VALIDATE_INT) !== false && $edad >= 18 && $edad <= 100;
}

// Convierte arreglo a JSON con formato
function convertirAJSON($datos){
    return json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

// Convierte JSON a arreglo asociativo
function convertirDesdeJSON($json){
    return json_decode($json, true);
}

// Calcula días transcurridos desde la fecha de ingreso
function calcularDiasDesdeIngreso($fecha){
    $fechaIng = strtotime($fecha);
    if(!$fechaIng || $fechaIng > time()) return -1;
    return floor((time() - $fechaIng)/(60*60*24));
}

// Valida que la fecha no sea futura y tenga formato correcto
function validarFechaIngreso($fecha){
    $ts = strtotime($fecha);
    return $ts !== false && $ts <= time();
}
?>