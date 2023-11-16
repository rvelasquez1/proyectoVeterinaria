<?php
$host = "localhost"; 
$usuario = "root";
$contrasena = "0404rex";
$base_de_datos = "veterinaria";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>