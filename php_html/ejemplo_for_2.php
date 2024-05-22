<?php 
$nombres=["Juan","Pedro","Antonio"];
$cadenaNombresFor = "";

for ($i=0; $i<=count($nombres);$i++){
    $cadenaNombresFor=$cadenaNombresFor . $nombres[$i]. " ";
} 
$cadenaNombresForeach= "";
foreach($nombres as $nombre){
    $cadenaNombresForeach= $cadenaNombresForeach . $nombre. " ";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo FOR</title>
</head>
<body>
    <h1>Mostrando una lista de valores</h1>
    <h2>Usando for</h2>
    <?= "$cadenaNombresFor"?>
    <h2>Usando foreach</h2>
    <?= "$cadenaNombresForeach" ?>
   
</body>
</html>