<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener la lista de países
$paises = obtenerPaises($pdo);

// Inicializar variables
$languages = [];
$paisSeleccionado = '';
$countryCodeSeleccionado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el código del país seleccionado
    $countryCode = $_POST['country'];
    $countryCodeSeleccionado = $countryCode;

    // Obtener el nombre del país seleccionado
    foreach ($paises as $pais) {
        if ($pais['Code'] === $countryCode) {
            $paisSeleccionado = $pais['Name'];
            break;
        }
    }

    // Obtener los lenguajes del país seleccionado
    $languages = obtenerlanguages($pdo, $countryCode);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Lenguajes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/world-web/home/styles.css">
    <script>
        function confirmarBorrado(countryCode, language) {
            if (confirm('¿Estás seguro de que quieres eliminar el lenguaje ' + language + '?')) {
                window.location.href = 'borrar-language.php?countryCode=' + countryCode + '&language=' + language;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Listado de Lenguajes por País</h1>
        <form method="post" action="">
            <label for="country">Selecciona un país:</label>
            <select name="country" id="country">
                <?php foreach ($paises as $pais) : ?>
                    <option value="<?= $pais['Code'] ?>"><?= $pais['Name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Mostrar Lenguajes</button>
        </form>

        <?php if (!empty($languages)) : ?>
            <h2>Lenguajes de <?= htmlspecialchars($paisSeleccionado) ?>:</h2>
            <table>
                <tr>
                    
                    <th>CountryCode</th>
                    <th>Lenguaje</th>
                    <th>Es oficial</th>
                    <th>Porcentaje</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($languages as $language) : ?>
                    <tr>
                        <td><a href="detalle-language.php?countryCode=<?= htmlspecialchars($language['countryCode']) ?>&language=<?= htmlspecialchars($language['language']) ?>"><?= htmlspecialchars($language['countryCode']) ?></a></td>
                        <td><?= $language['language'] ?></td>
                        <td><?= $language['isOfficial'] ?></td>
                        <td><?= $language['percentage'] ?></td>
                        <td class="acciones">
                            <a href="editar-language.php?countryCode=<?= $language['countryCode'] ?>&language=<?= htmlspecialchars($language['language']) ?>" title="Editar"><i class="fas fa-edit"></i></a>
                            <a href="#" title="Eliminar" onclick="confirmarBorrado('<?= htmlspecialchars($language['countryCode'], ENT_QUOTES) ?>', '<?= htmlspecialchars($language['language'], ENT_QUOTES) ?>')"><i class="fas fa-trash-alt"></i></a>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        <?php endif; ?>
        <p><a href="languages.php">Limpiar Listado</a></p>
            <p><a href="agregar-language.php?country=<?= $countryCodeSeleccionado ?>">Agregar Lenguaje</a></p>
            <a href="/world-web/home/home.php">Volver a la página principal</a>
    </div>
</body>

</html>