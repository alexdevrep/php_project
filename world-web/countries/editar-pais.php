<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el ID de la ciudad desde la URL
$countryId = $_GET['id'];

// Obtener los detalles de la ciudad
$pais = detallesPais($pdo, $countryId);

// Procesar la actualización de la población
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevaPoblacion = $_POST['population'];
    actualizarPoblacion($pdo, $countryId, $nuevaPoblacion);
    header("Location: countries.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pais</title>
    <link rel="stylesheet" href="/world-web/home/styles.css">
    
</head>
<body>
    <div class="container">
        <h1>Editar Pais</h1>
        <?php if ($pais): ?>
            <form method="post" action="editar-pais.php?id=<?= $pais['code'] ?>">
                <p><strong>ID:</strong> <?= $pais['code'] ?></p>
                <p><strong>Nombre:</strong> <?= $pais['name'] ?></p>
                <p><strong>Continente:</strong> <?= $pais['continent'] ?></p>
                <p><strong>Población:</strong> <input type="number" name="population" value="<?= $pais['population'] ?>"></p>
                <button type="submit">Actualizar Población</button>
            </form>
        <?php else: ?>
            <p>Ciudad no encontrada.</p>
        <?php endif; ?>
        <p><a href="countries.php">Regresar al listado</a></p>
    </div>
</body>
</html>