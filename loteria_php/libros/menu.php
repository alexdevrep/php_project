<?php 
    include 'libros.php';
    include 'lista_libros.php';
    

    
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/loteria_php/styles/stylesheet.css">
    <link rel="icon" type="image/jpg" href="/loteria_php/images/image0_0.jpg">
    <title>Top 10 libros favoritos</title>
</head>
<body>
    <div id="title">
        <img src="/loteria_php/images/image0_0.jpg">
        <h1>Libros favoritos de la comunidad</h1>
    </div>
    <div id="table">
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ejemplares</th>
                <th>Género</th>
            </tr>

        </thead>
        
        <tbody>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro1->obtenerTitulo();?>"><?= $libro1->obtenerTitulo()?></a></td>
                <td><?= $libro1->obtenerAutor()?></td>
                <td><?= $libro1->obtenerEjemplares()?></td>
                <td><?= $libro1->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro2->obtenerTitulo();?>"><?= $libro2->obtenerTitulo()?></a></td>
                <td><?= $libro2->obtenerAutor()?></td>
                <td><?= $libro2->obtenerEjemplares()?></td>
                <td><?= $libro2->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro3->obtenerTitulo();?>"><?= $libro3->obtenerTitulo()?></a></td>
                <td><?= $libro3->obtenerAutor()?></td>
                <td><?= $libro3->obtenerEjemplares()?></td>
                <td><?= $libro3->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro4->obtenerTitulo();?>"><?= $libro4->obtenerTitulo()?></a></td>
                <td><?= $libro4->obtenerAutor()?></td>
                <td><?= $libro4->obtenerEjemplares()?></td>
                <td><?= $libro4->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro5->obtenerTitulo();?>"><?= $libro5->obtenerTitulo()?></a></td>
                <td><?= $libro5->obtenerAutor()?></td>
                <td><?= $libro5->obtenerEjemplares()?></td>
                <td><?= $libro5->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro6->obtenerTitulo();?>"><?= $libro6->obtenerTitulo()?></a></td>
                <td><?= $libro6->obtenerAutor()?></td>
                <td><?= $libro6->obtenerEjemplares()?></td>
                <td><?= $libro6->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro7->obtenerTitulo();?>"><?= $libro7->obtenerTitulo()?></a></td>
                <td><?= $libro7->obtenerAutor()?></td>
                <td><?= $libro7->obtenerEjemplares()?></td>
                <td><?= $libro7->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro8->obtenerTitulo();?>"><?= $libro8->obtenerTitulo()?></a></td>
                <td><?= $libro8->obtenerAutor()?></td>
                <td><?= $libro8->obtenerEjemplares()?></td>
                <td><?= $libro8->obtenerGenero()?></td>
            </tr>
            <tr>
                <td><a href="/loteria_php/libros/descripcion_libros.php?id=<?php echo $libro9->obtenerTitulo();?>"><?= $libro9->obtenerTitulo()?></a></td>
                <td><?= $libro9->obtenerAutor()?></td>
                <td><?= $libro9->obtenerEjemplares()?></td>
                <td><?= $libro9->obtenerGenero()?></td>
            </tr>
            

        </tbody>
        
           
        
        
        

    </table>
    </div>
    <div id="back">
                <a href="/loteria_php/home/home.php">Volver al inicio</a>
        </div>

    
</body>
</html>