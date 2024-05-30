<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Parámetros de conexión a la base de datos
$host = '127.0.0.1';
$db = 'world';
$user = 'root';
$pass = 'root';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el ID del país desde la URL y validar la entrada
$countryId = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : '';

if ($countryId) {
    // Obtener los detalles del país
    $pais = detallesPais($pdo, $countryId);
} else {
    $pais = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del País</title>
</head>
<body>
    <div class="container">
        <h1>Detalles del País</h1>
        <?php if ($pais): ?>
            <p><strong>ID:</strong> <?= htmlspecialchars($pais['code']) ?></p>
            <p><strong>Nombre:</strong> <?= htmlspecialchars($pais['name']) ?></p>
            <p><strong>Continente:</strong> <?= htmlspecialchars($pais['continent']) ?></p>
            <p><strong>Población:</strong> <?= htmlspecialchars($pais['population']) ?></p>
        <?php else: ?>
            <p>País no encontrado.</p>
        <?php endif; ?>
        <p><a href="countries.php">Regresar al listado</a></p>
    </div>
</body>
</html>




