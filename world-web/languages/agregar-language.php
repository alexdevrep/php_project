<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el código del país desde la URL
$countryCode = $_GET['country'];

// Obtener el nombre del país seleccionado
$paisSeleccionado = obtenerNombrePais($pdo, $countryCode);

// Procesar la adición de un nuevo lenguaje
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $language = $_POST['lenguaje'];
    $countryCode = $_POST['countryCode'];
    $oficial = $_POST['oficial'];
    $porcentaje = $_POST['porcentaje'];

    agregarLenguaje($pdo, $language, $countryCode, $oficial, $porcentaje);
    header("Location: languages.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lenguaje</title>
    <link rel="stylesheet" href="/world-web/home/styles.css">
</head>
<body>
    <div class="container">
        <h1>Agregar Lenguaje a <?= htmlspecialchars($paisSeleccionado) ?></h1>
        <form method="post" action="agregar-language.php">
            <input type="hidden" name="countryCode" value="<?= $countryCode ?>">
            <p><strong>Nombre del lenguaje:</strong> <input type="text" name="lenguaje" required></p>
            <p><strong>Oficial:</strong> <input type="text" name="oficial" required></p>
            <p><strong>Porcentaje:</strong> <input type="number" name="porcentaje" required></p>
            <button type="submit">Agregar Lenguaje</button>
        </form>
        <p><a href="languages.php">Regresar al listado</a></p>
    </div>
</body>
</html>