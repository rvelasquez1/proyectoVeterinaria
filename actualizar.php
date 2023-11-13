<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $p_apellido = $_POST["p_apellido"];
    $s_apellido = $_POST["s_apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    
    $sql = "UPDATE uclientes SET nombre='$nombre',p_apellido='$p_apellido',s_apellido='$s_apellido',telefono='$telefono', email='$email' WHERE id=$id";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}

$conexion->close();
?>