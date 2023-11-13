<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $p_apellido = $_POST["p_apellido"];
    $s_apellido = $_POST["s_apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    
    $sql = "INSERT INTO clientes (nombre,p_apellido,s_apellido,telefono, email) VALUES ('$nombre','$p_apellido','$s_apellido','$telefono', '$email')";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro creado exitosamente.";
    } else {
        echo "Error al crear el registro: " . $conexion->error;
    }
}

$conexion->close();
?>