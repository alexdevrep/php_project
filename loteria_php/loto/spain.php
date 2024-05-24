<?php
    include 'loteria.php';
    $numerosGanadores = new Loteria();
    $numerosGanadores ->loteria(6,1,49);
    $premiado=' ';

    foreach($numerosGanadores->obtenerNumeros() as $numero){
        $premiado .= $numero.' ';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/loteria_php/styles/stylesheet.css">
    <link rel="icon" type="image/jpg" href="/loteria_php/images/image0_0.jpg">
    <title>Lotería España</title>
</head>
<body>
    <div id="title">
        <img src="/loteria_php/images/image0_0.jpg">
        <h1>Lotería española</h1>
    </div>
    <div id="country">
        <?= "<p><strong>Números generados:</strong> $premiado</p>" ?>
    </div>
    <div id="country">
        <a href="/loteria_php/loto/menu.php">Volver al menú de Lotería</a>
    </div>
    
</body>
</html>
