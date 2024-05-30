<?php 
include 'funciones.php';


//Conexión a la base de datos
$pdo= conectarBaseDatos($host, $db, $user, $pass);

//Obtener los resultados de la consulta
$continentes = obtenerContinentes($pdo);


//Inicializamos la variable 
$paises =[];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $continenteSeleccionado = $_POST['continent'];
    // Obtener los países del continente seleccionado
    $paises = obtenerPaises($pdo, $continenteSeleccionado);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises del mundo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function confirmarBorrado(id, nombre) {
            if (confirm('¿Estás seguro de que quieres eliminar el pais "' + nombre + '"?')) {
                window.location.href = 'borrar-pais.php?id=' + id;
            }
        }
    </script>
</head>
<body>
    <form method="post" action="">
            <label for="continent">Selecciona un continente:</label>
            <select name="continent" id="continent">
                <?php foreach ($continentes as $continente) : ?>
                    <option value="<?= $continente['continent'] ?>"><?= $continente['continent'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Mostrar Paises</button>
        </form>

        
        <table>
            <tr>
                <th>Code</th>
                <th>Nombre</th>
                <th>Continente</th>
                <th>Población</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($paises as $pais) : ?>
                <tr>
                    <td><a href="detalle-pais.php?id=<?= $pais['code'] ?>"><?= $pais['code'] ?></a></td>
                    <td><?= $pais['name'] ?></td>
                    <td><?= $pais['continent'] ?></td>
                    <td><?= $pais['population'] ?></td> 
                    <td>
                        <a href="editar-pais.php?id=<?= $pais['code'] ?>" title="Editar"><i class="fas fa-edit"></i></a>
                        <a href="#" title="Eliminar" onclick="confirmarBorrado('<?= htmlspecialchars($pais['code'], ENT_QUOTES) ?>', '<?= htmlspecialchars($pais['nombre'], ENT_QUOTES) ?>')">
    <i class="fas fa-trash-alt"></i>
</a>

                    </td>
                </tr>
                    
                    
            <?php endforeach; ?>
        </table>
        <p><a href="countries.php">Limpiar Listado</a></p>
            <p><a href="agregar-pais.php?country=<?= $countryId ?>">Agregar Pais</a></p>
           
</body>
</html>