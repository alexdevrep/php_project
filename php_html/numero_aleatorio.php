<?php 
    $numero= rand(1,10);
    if ($numero<=5){
        $mensaje = "El número $numero es pequeño";
    }
    else{
        $mensaje = "El número $numero es grande";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio</title>
</head>
<body>
    <h1>Comprobando si un número es grande o pequeño</h1>
    <h2>Con la lógica aparte</h2>
    <?= "<p>$mensaje</p>" ?>
    <h2>Con la lógica dentro del body</h2>
    <?php if ($numero <=5):?>
        <?= "<p>El $numero es un número pequeño</p>"?>
    <?php else:?>
        <?= "<p>El $numero es un número grande</p>"?>
    <?php endif; ?>
    
</body>
</html>