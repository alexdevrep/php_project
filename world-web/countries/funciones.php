<?php
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

//Función para obtener los nombres de los continentes
function obtenerContinentes($pdo){
    try {
        $stmt = $pdo->query("SELECT DISTINCT continent FROM country");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function obtenerPaises($pdo, $continente){
    try {
        $stmt = $pdo->prepare("SELECT code,name, continent, population FROM country WHERE continent = :continent");
        $stmt->execute(['continent' => $continente]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function detallesPais($pdo,$countryId){
    try{
        $stmt = $pdo->prepare("SELECT code,name, continent, population FROM country WHERE code = :code");
        $stmt->execute(['code' => $countryId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }

}

function actualizarPoblacion($pdo,$countryId,$nuevaPoblacion){
    try{
        $stmt = $pdo->prepare("UPDATE country SET population = :population WHERE code = :code");
        $stmt ->execute(['population'=> $nuevaPoblacion, 'code'=>$countryId]);
        return $stmt ->rowCount();
       }
       catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function agregarPais($pdo,$nombre,$countryId,$continente,$poblacion){
    try{
        $stmt= $pdo->prepare("INSERT INTO country (name, code, continent, population) VALUES(:nombre, :code, :continente,:poblacion)");
        $stmt->execute(['nombre' => $nombre, 'code' => $countryId, 'continente' => $continente, 'poblacion' => $poblacion]);
        return $stmt->rowCount();
    }
    catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}

function borrarPais($pdo,$countryId){
    try {
        $stmt = $pdo->prepare("DELETE  FROM country WHERE code = :code");
        $stmt->execute(['code' => $countryId]);
        return $stmt->rowCount();
    } catch (PDOException $e) {
        echo "<h1>Error en la consulta:</h1> <p>" . $e->getMessage() . "</p>";
        exit;
    }
}
