<?php
$tabla_10 = "";
$numero=10;
for($i=1;$i<=10;$i++){
    $multiplicacion = $i * $numero;
    $tabla_10 = "$tabla_10"."$i x $numero = $multiplicacion<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del 10</title>
</head>
<body>
    <h1>Tabla del 10</h1>
    <?="$tabla_10"?>
</body>
</html>