<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';
$host = '127.0.0.1';
$db = 'world';
$user = 'root';
$pass = 'root';




$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el ID de la ciudad desde la URL
$countryId = $_GET['id'];

// Obtener los detalles de la ciudad
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
    <link rel="stylesheet" href="/world-web/home/styles.css">
    <title>Detalles del pais</title>
</head>
<body>
    <div class="container">
        <h1>Detalles del país</h1>
        <?php if ($pais): ?>
            <p><strong>ID:</strong> <?= $pais['code'] ?></p>
            <p><strong>Nombre:</strong> <?= $pais['name'] ?></p>
            <p><strong>Continente:</strong> <?= $pais['continent'] ?></p>
            <p><strong>Población:</strong> <?= $pais['population'] ?></p>
        <?php else: ?>
            <p>Pais no encontrado.</p>
        <?php endif; ?>
        <p><a href="countries.php">Regresar al listado</a></p>
    </div>
</body>
</html>