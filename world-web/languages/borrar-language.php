<?php
// Incluir el archivo de funciones de búsqueda
include 'funciones.php';

// Conexión a la base de datos
$pdo = conectarBaseDatos($host, $db, $user, $pass);

// Obtener el nombre del lenguaje desde la URL
$languageId = $_GET['language'];

// Borrar el lenguaje y redirigir
if (borrarLenguage($pdo, $languageId)) {
    header("Location: languages.php");
    exit;
} else {
    echo "<h1>Error al borrar el lenguaje.</h1>";
}

