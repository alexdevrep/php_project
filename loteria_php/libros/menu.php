<?php 
    include 'libros.php';
    $libro1= new Libros("Juan López","Las leyendas de Viremdis","10","Fantasía");
    $libro2= new Libros("Miguel de Cervantes","Don Quijote de la Mancha","5","Novela");
    $libro3= new Libros("Carlos Ruiz Zafón","La Sombra del Viento","20","Misterio");
    $libro4= new Libros("George Owell","1984","6","Distopía");
    $libro5= new Libros("J.R.R Tolkien","El señor de los anillos","15","Fantasía");
    $libro6= new Libros("F. Scott Fitzgerald","El gran Gatsby","1","Ficción");
    $libro7= new Libros("Victor Hugo","Los miserables","8","Histórico");
    $libro8= new Libros("Paulo Coelho","El alquimista","7","Filosofía");
    $libro9= new Libros("Harper Lee","Matar a un ruiseñor","4","Ficción");
    $libroFavorito= new Libros($_GET['autor'], $_GET['titulo'],$_GET['ejemplares'],$_GET['genero']);

    
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 libros demandados</title>
</head>
<body>
    <h1>Hola Mundo este es el menu de los libros</h1>
    <a href="/loteria_php/home/home.php">Volver al inicio</a>
    <table>
        <tr>
            <td>Título</td>
            <td>Autor</td>
            <td>Ejemplares</td>
            <td>Género</td>
        </tr>
        
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro1->obtenerTitulo()?></a></td>
            <td><?= $libro1->obtenerAutor()?></td>
            <td><?= $libro1->obtenerEjemplares()?></td>
            <td><?= $libro1->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro2->obtenerTitulo()?></a></td>
            <td><?= $libro2->obtenerAutor()?></td>
            <td><?= $libro2->obtenerEjemplares()?></td>
            <td><?= $libro2->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro3->obtenerTitulo()?></a></td>
            <td><?= $libro3->obtenerAutor()?></td>
            <td><?= $libro3->obtenerEjemplares()?></td>
            <td><?= $libro3->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro4->obtenerTitulo()?></a></td>
            <td><?= $libro4->obtenerAutor()?></td>
            <td><?= $libro4->obtenerEjemplares()?></td>
            <td><?= $libro4->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro5->obtenerTitulo()?></a></td>
            <td><?= $libro5->obtenerAutor()?></td>
            <td><?= $libro5->obtenerEjemplares()?></td>
            <td><?= $libro5->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro6->obtenerTitulo()?></a></td>
            <td><?= $libro6->obtenerAutor()?></td>
            <td><?= $libro6->obtenerEjemplares()?></td>
            <td><?= $libro6->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro7->obtenerTitulo()?></a></td>
            <td><?= $libro7->obtenerAutor()?></td>
            <td><?= $libro7->obtenerEjemplares()?></td>
            <td><?= $libro7->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro8->obtenerTitulo()?></a></td>
            <td><?= $libro8->obtenerAutor()?></td>
            <td><?= $libro8->obtenerEjemplares()?></td>
            <td><?= $libro8->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libro9->obtenerTitulo()?></a></td>
            <td><?= $libro9->obtenerAutor()?></td>
            <td><?= $libro9->obtenerEjemplares()?></td>
            <td><?= $libro9->obtenerGenero()?></td>
        </tr>
        <tr>
            <td><a href="/loteria_php/libros/formulario_libros.php"><?= $libroFavorito->obtenerTitulo()?></a></td>
            <td><?= $libroFavorito->obtenerAutor()?></td>
            <td><?= $libroFavorito->obtenerEjemplares()?></td>
            <td><?= $libroFavorito->obtenerGenero()?></td>
        </tr>
           
        
        
        

    </table>

    
</body>
</html>