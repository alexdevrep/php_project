<?php
// Parámetros de conexión
$host = '127.0.0.1';
$db = 'world';
$user = 'root';
$pass = 'root';

// Función para crear la conexión a la base de datos
function conectarBaseDatos($host, $db, $user, $pass) {
    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "<h1>Error de conexión:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

// Función para obtener la lista de países
function obtenerPaises($pdo) {
    try {
        $stmt = $pdo->query("SELECT Code, Name FROM country ORDER BY Name");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

// Función para obtener las ciudades de un país
function obtenerCiudades($pdo, $countryCode) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM city WHERE CountryCode = :countryCode");
        $stmt->execute(['countryCode' => $countryCode]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener la lista de países
$paises = obtenerPaises($pdo);

// Inicializar variables
$ciudades = [];
$paisSeleccionado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el código del país seleccionado
    $countryCode = $_POST['country'];

    // Obtener el nombre del país seleccionado
    foreach ($paises as $pais) {
        if ($pais['Code'] === $countryCode) {
            $paisSeleccionado = $pais['Name'];
            break;
        }
    }

    // Obtener las ciudades del país seleccionado
    $ciudades = obtenerCiudades($pdo, $countryCode);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ciudades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        h1 {
            text-align: left;
            color: #007BFF;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Ciudades por País</h1>
        <form method="post" action="">
            <label for="country">Selecciona un país:</label>
            <select name="country" id="country">
                <?php foreach ($paises as $pais): ?>
                    <option value="<?= $pais['Code'] ?>"><?= $pais['Name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Mostrar Ciudades</button>
        </form>

        <?php if (!empty($ciudades)): ?>
            <h2>Ciudades de <?= htmlspecialchars($paisSeleccionado) ?>:</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>País</th>
                    <th>Distrito</th>
                    <th>Población</th>
                </tr>
                <?php foreach ($ciudades as $ciudad): ?>
                <tr>
                    <td><?= $ciudad['ID'] ?></td>
                    <td><?= $ciudad['Name'] ?></td>
                    <td><?= $ciudad['CountryCode'] ?></td>
                    <td><?= $ciudad['District'] ?></td>
                    <td><?= $ciudad['Population'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>