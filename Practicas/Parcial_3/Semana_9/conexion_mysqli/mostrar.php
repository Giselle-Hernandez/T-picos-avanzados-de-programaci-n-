<?php #abre codigo php
require_once "config.php"; #Incluye el archivo de config.php una unica vez. Gracias a esta linea se logra que el archivo se cargue de manera obligatoria.
$conexion = new mysqli($host, $user, $pass, $db); #Crea una conexion al servidor de la base de datos. 

if ($conexion->connect_error){ #si hubo algun error al hacer la conexion sl mensaje de rror se guarda en connect_error
    die("Error: " . $conexion->connect_error); #si hay error se detiene el programa y semuestra un mensaje de error 
}

$sql = "SELECT * FROM alumnos"; #en la variable de sql se almacena la instruccion de selecciona todo de la tabla alumnos
$resultado = $conexion->query($sql); #guarda los datos encontrados en la variable de resultado

if ($resultado->num_rows > 0){ #revisa que la tabla tenga registros
    while($fila = $resultado->fetch_assoc()){  #mientras haya filas recorrelas una por una. esto $resultado->fetch_assoc() toma cada una de las filas y las conbierte en un arreglo asociativo
        echo "ID: " . $fila["id"] . "<br>"; #Muestra el ID del alumno
        echo "Nombre: " . $fila["nombre"] . "<br>"; #Muestra el nombre
        echo "Carrera: " . $fila["carrera"] . "<br><hr>"; #Muestra la carrera y una línea separadora
    }
}else{ #si no hay datos 
    echo "No hay registros"; #muestra este mensaje 
}
?>