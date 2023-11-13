<?php
$host = "localhost"; // Cambia esto si tu base de datos no está en el mismo servidor
$usuario = "root";
$contrasena = "";
$base_de_datos = "dbprueba";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>