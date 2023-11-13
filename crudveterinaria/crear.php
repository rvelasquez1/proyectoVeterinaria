<?php
// Función para escapar datos y evitar inyecciones SQL
function cleanInput($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Función para crear un cliente
function crearCliente($nombre, $telefono, $email) {
    global $conn;
    $nombre = cleanInput($nombre);
    $telefono = cleanInput($telefono);
    $email = cleanInput($email);

    $sql = "INSERT INTO Clientes (Nombre, Telefono, Email) VALUES ('$nombre', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Cliente creado con éxito</h2>";
    } else {
        echo "<h2>Error al crear cliente: " . $conn->error . "</h2>";
    }
}

// Mostrar formulario y procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["crear"])) {
        crearCliente($_POST["nombre"], $_POST["telefono"], $_POST["email"]);
    }
}
?>

<h2>Crear Cliente</h2>
<form method="post" action="index.php?page=crear">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <input type="submit" name="crear" value="Crear Cliente">
</form>
