<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el coutrycode y el lenguaje del pais
$languageId = $_GET['countryCode'];
$language = $_GET['language'];

// Obtener los detalles del lenguaje
$lenguaje = obtenerDetalleLenguaje($pdo, $languageId,$language);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/world-web/home/styles.css">
    <title>Detalles del lenguaje</title>
    
</head>
<body>
    <div class="container">
        <h1>Detalles del lenguaje</h1>
        <?php if ($lenguaje): ?>
            <p><strong>CountryCode:</strong> <?= $lenguaje['CountryCode'] ?></p>
            <p><strong>Lenguaje:</strong> <?= $lenguaje['Language'] ?></p>
            <p><strong>Es Oficial:</strong> <?= $lenguaje['IsOfficial'] ?></p>
            <p><strong>Porcentaje:</strong> <?= $lenguaje['Percentage'] ?></p>
        <?php else: ?>
            <p>Lenguaje no encontrado.</p>
        <?php endif; ?>
        <p><a href="languages.php">Regresar al listado</a></p>
    </div>
</body>
</html>