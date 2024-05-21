<?php 
//Aquí definimos las variables que usaremos en todo el codigo php
//Tambien añadimos todo el codigo de php que necesitemos
    $nuevoFeliz=false;
    $nuevoNombre= "Alex";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemeplo IF</title>
</head>
<body style="background-color:grey;">
    <h1>Ejemplo: if</h1>
    <h2>Código regulera</h2>
    <?php 
        $feliz= true;
        $nombre = "Alejandro";

        if($feliz){
            echo "<p>$nombre está feliz</p>";
        }
        else {
            echo "<p>$nombre no está feliz</p>";
        }
    ?>

    <h2>Código como debe ser</h2>
    <?php  if($nuevoFeliz):?>
        <p>aqui podemos añadir html</p>
        <?= "<p>$nuevoNombre está feliz</p>" ?>
    <?php else: ?>
        <?= "<p>$nuevoNombre no está feliz</p>" ?>
    <?php endif; ?>

</body>
</html>