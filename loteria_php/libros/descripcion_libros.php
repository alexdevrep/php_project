<?php 
    include 'libros.php';
    include 'lista_libros.php';
    $libro = $_GET['id'];
    
    if($libro == $libro1->obtenerTitulo()){
        $libro = $libro1;
    }else if($libro == $libro2->obtenerTitulo()){
        $libro = $libro2;
    }else if($libro == $libro3->obtenerTitulo()){
        $libro = $libro3; 
    }else if ($libro == $libro4->obtenerTitulo()){
        $libro = $libro4;
    }else if ($libro == $libro5->obtenerTitulo()){
        $libro = $libro5;
    }else if($libro == $libro6->obtenerTitulo()){
        $libro = $libro6;
    }else if($libro == $libro7->obtenerTitulo()){
        $libro = $libro7;
    }else if ($libro == $libro8->obtenerTitulo()){
        $libro = $libro8;
    }else if($libro == $libro9->obtenerTitulo()){
        $libro = $libro9;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/loteria_php/styles/stylesheet.css">
    <link rel="icon" type="image/jpg" href="/loteria_php/images/image0_0.jpg">
    <title>Descripción detallada de los libros</title>
</head>
<body>
    <div id="title">
        <img src="/loteria_php/images/image0_0.jpg">
        <h1>Libro seleccionado</h1>
    </div>
    <div id="book">
    <div id="description">
        <p><strong>Título: </strong><?php  echo $libro->obtenerTitulo(); ?></p>
        <p><strong>Autor: </strong><?php  echo $libro->obtenerAutor(); ?></p>
        <p><strong>Ejemplares: </strong><?php  echo $libro->obtenerEjemplares(); ?></p>
        <p><strong>Género: </strong><?php  echo $libro->obtenerGenero(); ?></p>

    </div>
    </div>

    <a id="book" href="/loteria_php/libros/menu.php">Volver a la lista de libros</a>
   
    
    
</body>
</html>