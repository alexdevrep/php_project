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

// Función para realizar una consulta de prueba
function obtenerLenguajes($pdo) {
    try {
        $stmt = $pdo->query("SELECT * FROM countrylanguage LIMIT 10");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener resultados de la consulta
$lenguajes = obtenerLenguajes($pdo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Base de Datos</title>
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
        <h1>Conexión exitosa a la base de datos 'world'</h1>
        <h2>Primeros 10 lenguajes:</h2>
        <table>
            <tr>
                <th>CountryCode</th>
                <th>Lenguaje</th>
                <th>Oficial</th>
                <th>Porcentaje</th>
                
            </tr>
            <?php foreach ($lenguajes as $lenguaje): ?>
            <tr>
                <td><?= $lenguaje['CountryCode'] ?></td>
                <td><?= $lenguaje['Language'] ?></td>
                <td><?= $lenguaje['IsOfficial'] ?></td>
                <td><?= $lenguaje['Percentage'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>