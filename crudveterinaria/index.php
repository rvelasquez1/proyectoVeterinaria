<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - CRUD</title>
</head>
<body>
    <h2>Menú</h2>
    <ul>
        <li><a href="listar.php">Listar Clientes</a></li>
        <li><a href="crear.php">Crear Cliente</a></li>
        <!-- Agrega más elementos del menú para otras operaciones CRUD si es necesario -->
    </ul>

    <?php
    // Incluir el contenido de la página actual (listar, crear, etc.)
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $allowedPages = ['listar', 'crear', 'actualizar', 'eliminar'];

        if (in_array($page, $allowedPages) && file_exists($page . '.php')) {
            include($page . '.php');
        } else {
            echo 'Página no encontrada';
        }
    }
    ?>
</body>
</html>
