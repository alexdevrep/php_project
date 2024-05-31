<?php
// Parámetros de conexión
$host = '127.0.0.1';
$db = 'world';
$user = 'root';
$pass = 'root';

// Función para crear la conexión a la base de datos
function conectarBaseDatos() {
    global $host, $db, $user, $pass;
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

// Función para obtener los lenguajes de un país
function obtenerLanguages($pdo, $countryCode) {
    try {
        $stmt = $pdo->prepare("SELECT countryCode, language, isOfficial, percentage FROM countrylanguage WHERE CountryCode = :countryCode");
        $stmt->execute(['countryCode' => $countryCode]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function obtenerDetalleLenguaje($pdo, $languageId,$language) {
    try {
        $stmt = $pdo->prepare(
            "SELECT countrylanguage.*, country.Name as countryName
            FROM countrylanguage
            JOIN country ON countrylanguage.CountryCode = country.Code
            WHERE countrylanguage.CountryCode = :countryCode AND countrylanguage.Language = :language"
        );
        $stmt->execute(['countryCode' => $languageId,'language' => $language]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function obtenerNombrePais($pdo, $countryCode) {
    try {
        $stmt = $pdo->prepare("SELECT Name FROM country WHERE Code = :countryCode");
        $stmt->execute(['countryCode' => $countryCode]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['Name'];
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function agregarLenguaje($pdo, $language, $countryCode, $oficial, $porcentaje) {
    try {
        $stmt = $pdo->prepare("INSERT INTO countrylanguage (language, countryCode, isOfficial, percentage) VALUES (:lenguaje, :countryCode, :oficial, :porcentaje)");
        $stmt->execute(['lenguaje' => $language, 'countryCode' => $countryCode, 'oficial' => $oficial, 'porcentaje' => $porcentaje]);
        return $stmt->rowCount();
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function borrarLenguage($pdo, $languageId) {
    try {
        $stmt = $pdo->prepare("DELETE FROM countrylanguage WHERE language = :language");
        $stmt->execute(['language' => $languageId]);
        return $stmt->rowCount();
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function actualizarPorcentajeLenguaje($pdo, $language, $nuevoPorcentaje) {
    try {
        $stmt = $pdo->prepare("UPDATE countrylanguage SET Percentage = :percentage WHERE language = :language");
        $stmt->execute(['percentage' => $nuevoPorcentaje, 'language' => $language]);
        return $stmt->rowCount();
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}