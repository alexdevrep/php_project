<?php 
$notas = [
    "Juan" => [5,7,3],
    "Alejandro" => [2,3,5],
    "Alvaro" => [7,8,6],
    "Enrique" => [9,10,9],
    "Gonzalo" => [5,6,9]
];

$calificaciones = [
    "A" => [9,10.1],
    "B" => [8,9],
    "C" => [7,8],
    "D" => [6,7],
    "F" => [0,6]
];

// Función para calcular la nota media y la calificación final
function notaMedia($notas, $calificaciones) {
    $resultados = [];
    $calificacion=0;

    foreach ($notas as $nombre => $listaNotas) {
        $suma = 0;
        foreach ($listaNotas as $nota) {
            $suma += $nota;
        }
        $media = $suma / count($listaNotas);

        foreach ($calificaciones as $letra => $rango) {
            if ($media >= $rango[0] && $media < $rango[1]) {
                $calificacion = $letra;
                break;
            }
        }

        $resultados[$nombre] = [
            'media' => $media,
            'calificacion' => $calificacion
        ];
    }

    return $resultados;
}

// Mostramos los resultados
$notasMedias = notaMedia($notas, $calificaciones);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota media de los estudiantes</title>
</head>
<body>
    <h1>Nota media de los estudiantes</h1>
    <?php foreach ($notasMedias as $nombre => $info): ?>
        <p>La nota media de <?= $nombre ?> es <?= $info['media'] ?> y su calificación final es <?= $info['calificacion'] ?></p>
    <?php endforeach; ?>
</body>
</html>
