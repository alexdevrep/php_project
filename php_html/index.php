<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HTML</title>
</head>
<body style="background-color:grey;">
    <h1 style="color:white;">Texto escrito directamente en HTML</h1>
    <?php 
        echo "<p>Texto escrito usando php</p>";  
        $mi_variable="Hola: ";  
    ?>
    <p>Otro párrafo escrito a mano</p>
    <?= "<p>$mi_variable Texto escrito de la mejor forma usando php</p>" ?> 
</body>
</html>