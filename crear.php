<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro creado exitosamente.";
    } else {
        echo "Error al crear el registro: " . $conexion->error;
    }
}

$conexion->close();
?>