<?php 

$listaFrases= [
    0=>"Esperar la muerte con los brazos cruzados",
    1=>"Quién mucho come, poco digiere",
    2=>"El epífilo de pétalos anchos florece en un solo instante",
    3=>"Ponerse pálido al oír hablar al tigre",
    4=>"Escuchar lo que alguien dice y observar lo que hace",
    5=>"Permanecer junto a un árbol esperando a que la liebre se estrelle contra el tronco",
    6=>"Que el número de sus años sea más elevado que las montañas Zhongnan",
    7=>"Confluir por diversos caminos al mismo punto",
    8=>"La destreza viene de la práctica",
    9=>"Los ojos de rata no ven más de una pulgada"

];
$numeroAleatorio=rand(0,9);
$fraseSeleccionada= '';
foreach($listaFrases as $numero => $frase){
    if($numeroAleatorio == $numero){
       $fraseSeleccionada= $frase;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/loteria_php/styles/stylesheet.css">
    <link rel="icon" type="image/jpg" href="/loteria_php/images/image0_0.jpg">
    <title>Lotería y libros</title>
</head>
<body>
    <div id="title">
    <img src="/loteria_php/images/image0_0.jpg">
    <h1>Bienvenido a Lotería y libros</h1>
    </div>
    
    <p id="welcome">
        <strong>
            Aquí podrás consultar el número ganador de la lotería o
            ver cuáles son los libros más demandados en las librerías
        </strong>  
    </p>
    <hr>
    <div id="content">
        <div id="message">
            <h2>Proverbio Chino del día</h2>
            <p>Esta es nuestra frase seleccionada del día para ti</p>
            <div id="php"><?= "<p><em>$fraseSeleccionada</em></p>" ?></div>
        </div>
        <hr id="vertical">
        <div id="loto">
            <h2>Números de la lotería</h2>
            <ul>
                <li><a href="/loteria_php/loto/menu.php">Lotería en Europa</a></li>
            </ul>
            
        </div>
        <hr id="vertical">
        <div id="books">
            <h2>Top 10 libros demandados</h2>
            <ul>
                <li><a href="/loteria_php/libros/menu.php">Libros demandados</a></li>
                
            </ul>
        </div>
        
    </div>
    


</body>
</html>