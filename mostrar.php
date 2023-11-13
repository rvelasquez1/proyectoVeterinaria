<?php
include "db.php";

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

$conexion->close();
?>