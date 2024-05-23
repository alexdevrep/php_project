<?php 
    $numerosGanadores = new Loteria();
    $numerosGanadores ->spain();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/loteria_php/loto/menu.php">Volver al menú de Lotería</a>
<?= $numerosGanadores ?>
</body>
</html>
