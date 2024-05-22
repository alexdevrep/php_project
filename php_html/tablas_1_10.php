<?php
$tabla_1_10 = "";
for($i=1;$i<=10;$i++){
    for($j=1;$j<=10;$j++){
        $multiplicacion = $i * $j;
        $tabla_1_10 = "$tabla_1_10"."$i x $j = $multiplicacion<br>";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del 10</title>
</head>
<body style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
    <h1>Tabla del 1 al 10</h1>
    <?="$tabla_1_10"?>
</body>
</html>