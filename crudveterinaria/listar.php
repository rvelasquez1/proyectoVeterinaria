<?php
// Configuración de la base de datos
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para leer todos los clientes
function leerClientes() {
    global $conn;
    $sql = "SELECT * FROM Clientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Listado de Clientes</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ClienteID"] . "</td>";
            echo "<td>" . $row["Nombre"] . "</td>";
            echo "<td>" . $row["Telefono"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay clientes registrados";
    }
}

// Mostrar lista de clientes
leerClientes();

// Cerrar la conexión
$conn->close();
?>
