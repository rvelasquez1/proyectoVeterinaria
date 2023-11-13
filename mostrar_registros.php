<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <?php
    include "db.php";

    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<ul>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<li>ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron registros.";
    }

    $conexion->close();
    ?>
</body>
</html>
