<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el countryCode y el lenguaje desde la URL
$languageId = $_GET['countryCode'];
$language=$_GET['language'];

// Obtener los detalles del lenguaje
$lenguaje = obtenerDetalleLenguaje($pdo, $languageId,$language);

// Procesar la actualización del porcentaje
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoPorcentaje = $_POST['percentage'];
    actualizarPorcentajeLenguaje($pdo, $language, $nuevoPorcentaje);
    header("Location: languages.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Lenguaje</title>
    <link rel="stylesheet" href="/world-web/home/styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar lenguaje</h1>
        <?php if ($lenguaje): ?>
            <form method="post" action="editar-language.php?countryCode=<?= htmlspecialchars($lenguaje['CountryCode']) ?>&language=<?= htmlspecialchars($lenguaje['Language']) ?>">
                <p><strong>CountryCode:</strong> <?= $lenguaje['CountryCode'] ?></p>
                <p><strong>Nombre del lenguaje:</strong> <?= $lenguaje['Language'] ?></p>
                <p><strong>Oficial:</strong> <?= $lenguaje['IsOfficial'] ?></p>
                <p><strong>Porcentaje:</strong> <input type="number" name="percentage" value="<?= $lenguaje['percentage'] ?>"></p>
                <button type="submit">Actualizar porcentaje</button>
            </form>
        <?php else: ?>
            <p>Lenguaje no encontrado.</p>
        <?php endif; ?>
        <p><a href="languages.php">Regresar al listado</a></p>
    </div>
</body>
</html>