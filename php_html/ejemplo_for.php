<?php 
$nombres=["Juan","Pedro","Antonio"];
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
    <?php for ($i=0; $i<=count($nombres);$i++): ?>
        <?= "$nombres[$i]"?>
    <?php endfor; ?>

    
    <h2>Usando foreach</h2>
    <?php foreach($nombres as $nombre): ?>
        <?= "$nombre" ?>
    <?php endforeach; ?>
    

    
</body>
</html>