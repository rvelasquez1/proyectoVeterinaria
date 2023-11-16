<?php
include "db.php";

$sql = "SELECT * FROM clientes";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - P_apellido: " .
        $fila["p_apellido"]. " - S_apellido: " . $fila["s_apellido"]. " - Telefono: " . 
        $fila["telefono"]. " - Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

$conexion->close();
?>