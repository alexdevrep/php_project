<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el ID de la ciudad desde la URL
$countryId = $_GET['id'];

// Borrar la ciudad y redirigir
if (borrarPais($pdo, $countryId)) {
    header("Location: countries.php");
    exit;
} else {
    echo "<h1>Error al borrar la ciudad.</h1>";
}

