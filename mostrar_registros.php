<!DOCTYPE html>
<html>
<head>
    <title>Listado de clientes</title>
</head>
<body>
    <h1>Listado de Clientes</h1>
    <?php
    include "db.php";

    $sql = "SELECT * FROM clientes";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<ul>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<li>ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - P_apellido: " .
            $fila["p_apellido"]. " - S_apellido: " . $fila["s_apellido"]. " - Telefono: " . 
            $fila["telefono"]. " - Email: " . $fila["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron registros.";
    }

    $conexion->close();
    ?>
</body>
</html>
