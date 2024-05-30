<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el código del país desde la URL
$countryId = $_GET['id'];


$continentes = obtenerContinentes($pdo);

// Procesar la adición del nuevo pais
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombrePais = $_POST['nombre'];
    $continente = $_POST['continent'];
    $poblacion = $_POST['poblacion'];
    $code = $_POST['code'];

    agregarPais($pdo, $nombrePais, $code, $continente, $poblacion);
    header("Location: countries.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Pais</title>
    
</head>
<body>
    <div class="container">
        <h1>Agregar Pais</h1>
        <form method="post" action="agregar-pais.php">
        <p><strong>ID:</strong> <input type="text" name="code" required></p>
            <p><strong>Nombre del País:</strong> <input type="text" name="nombre" required></p>
            <p><strong>Continente:</strong><select name="continent" id="continent">
                <?php foreach ($continentes as $continente) : ?>
                    <option value="<?= $continente['continent'] ?>"><?= $continente['continent'] ?></option>
                <?php endforeach; ?>
            </select></p>
            <p><strong>Población:</strong> <input type="number" name="poblacion" required></p>
            
            <button type="submit">Agregar Pais</button>
        </form>
        <p><a href="countries.php">Regresar al listado</a></p>
    </div>
</body>
</html>