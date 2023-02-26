<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnos";

// Crea la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores de conexión
if ($conexion->connect_error) {
    echo("La conexión falló: " . $conexion->connect_error);
}
?>
