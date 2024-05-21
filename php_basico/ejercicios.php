<?php
/*
🏋️‍♀️ **Enunciado del Programa PHP: Sistema de Calificaciones**

---

**Objetivo:** Crear un programa en PHP que calcule y muestre las calificaciones finales de un grupo de estudiantes.

**Requisitos del programa:**

1. **Variables:**
    - Define variables para almacenar nombres de estudiantes y sus calificaciones en distintos exámenes.
2. **Array:**
    - Utiliza un array para guardar el nombre de cada estudiante junto con sus calificaciones en tres exámenes.
3. **Estructuras de Control y Condiciones:**
    - Utiliza una estructura de control **`for`** para iterar a través del array de estudiantes y calcular su promedio.
    - Utiliza condiciones para determinar la calificación final de cada estudiante basada en su promedio:
        - Si el promedio es 90 o más, la calificación final es 'A'.
        - Si el promedio está entre 80 y 89, la calificación final es 'B'.
        - Si el promedio está entre 70 y 79, la calificación final es 'C'.
        - Si el promedio está entre 60 y 69, la calificación final es 'D'.
        - Si el promedio es menor de 60, la calificación final es 'F'.
4. **Operadores:**
    - Usa operadores aritméticos para calcular el promedio de las calificaciones.
    - Usa operadores de comparación para establecer la calificación final según el promedio.
5. **Salida:**
    - Usa **`echo`** para mostrar el nombre de cada estudiante, su promedio y su calificación final.

**Output esperado:**

- El programa debe listar cada estudiante con su promedio y la calificación final correspondiente.
*/

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

//Función para calcular la nota media
function notaMedia($notas, $calificaciones){
    foreach($notas as $nombre => $listaNotas){
        $suma =0;
        $media=0;
        foreach($listaNotas as $elementos){
            $suma += $elementos;
            $media = $suma /count($listaNotas);
        }
        
        
        foreach($calificaciones as $letra => $notas){
            if ($notas[0]<= $media && $media<= $notas[1]){
                $calificacion = $letra;
                break;
            }
        }
        echo "La nota media de $nombre es $media y su calificación final es $calificacion\n";    
    }
}

//Mostramos los resultados
notaMedia($notas ,$calificaciones);

/*
🏋️‍♀️
Enunciado del Programa PHP: Registro de Temperaturas
Objetivo: Crear un programa en PHP que analice y muestre las temperaturas registradas en diferentes ciudades durante una semana.
Requisitos del programa:
Variables:
Define variables para almacenar los nombres de las ciudades y sus temperaturas diarias.
Array:
Utiliza un array para almacenar el nombre de cada ciudad junto con un array de sus temperaturas diarias.
Estructuras de Control y Condiciones:
Usa un bucle foreach para iterar a través del array de ciudades y calcular la temperatura máxima y mínima.
Determina si la temperatura promedio de la semana en cada ciudad está por encima o por debajo de un umbral, al que puedes asignar un valor de 25 grados.
Operadores:
Usa operadores aritméticos para calcular la temperatura promedio.
Usa operadores de comparación para determinar si la temperatura promedio está por encima o por debajo del umbral.
Salida:
Usa echo para mostrar el nombre de cada ciudad, su temperatura máxima, mínima y el análisis de la temperatura promedio.
*/
//Registro de temperaturas
$temperaturas = [
    "Sevilla"=> [20,21,19,25,26,23,22],
    "Córdoba"=>[18,20,20,21,24,27,23],
    "Cádiz"=>[17,16,19,18,20,21,22],
    "Jaén"=>[24,26,27,22,25,25,26]
    ];
//Temperatura umbral 
$umbral =25;

function temperaturaMedia ($temperaturas){
    
    foreach ($temperaturas as $nombre => $listaTemperaturas){
        $suma =0;
        $umbral =25;
       foreach($listaTemperaturas as $elemento){
           $suma += $elemento;
           $media = $suma / count($listaTemperaturas);
           
       }
       if($media < $umbral){
           echo "La media de las temperaturas de la semana en $nombre es $media y no está por encima de su temperatura umbral\n";
       }
       else{
           echo "La media de las temperaturas de la semana en $nombre es $media y sí está por encima de su temperatura umbral\n";
       }
        
    }
    
}
function temperaturaMaxima($temperaturas){
    foreach($temperaturas as $nombre =>$listaTemperaturas){
        $temperaturaMax=$listaTemperaturas[0];
        foreach($listaTemperaturas as $elemento){
            if($temperaturaMax < $elemento){
                $temperaturaMax = $elemento;
            }
        }
        echo "La temperatura máxima registrada en $nombre esta semana ha sido de $temperaturaMax ºC\n";
    }
}
function temperaturaMinima($temperaturas){
    foreach($temperaturas as $nombre =>$listaTemperaturas){
        $temperaturaMin=$listaTemperaturas[0];
        foreach($listaTemperaturas as $elemento){
            if($elemento < $temperaturaMin){
                $temperaturaMin = $elemento;
            }
        }
        echo "La temperatura mínima registrada en $nombre esta semana ha sido de $temperaturaMin ºC\n";
    }
}
//Mostramos los resultados
temperaturaMedia($temperaturas);
temperaturaMaxima($temperaturas);
temperaturaMinima($temperaturas);

/*
🏋️‍♀️ Array de 10 números aleatorios del 1 al 49 y muéstralo en consola

---

- `rand(1,49)` : permite generar un número aleatorio entre 1 y 49.
- `print_r($miArray)`: muestra en pantalla los datos del array

*/

$arrayAleatorio=[];

for ($i=0;$i<=10;$i++){
    $arrayAleatorio[]=rand(1,49);
    
}
print_r($arrayAleatorio);

/*
Saca una combinación ganadora de las lotos siguientes y muéstrales en consola.
- Española (6 números del 1 al 49)
- Alemania (6 números del 1 al 49)
- Italia (6 números del 1 al 90)
-Francia (5 números del 1 al 49)
-rand(1,49) : permite generar un número aleatorio entre 1 y 49.
-sort($array): ordena el array
-in_array($dato, $array): devuelve boolean para ver si está $dato en $array
*/
function loteria ($numeros, $pais){
    if($pais == "España" || $pais == "Alemania"){
        for($i=1;$i<=$numeros;$i++){
            $numeroGanador[]=rand(1,49);
            sort($numeroGanador);
        }
        print_r($numeroGanador);
    }
    else if($pais=="Italia"){
        for($i=1;$i<=$numeros;$i++){
            $numeroGanador[]=rand(1,90);
            sort($numeroGanador);
        }
        print_r($numeroGanador);
        
    }
    else if ($pais == "Francia"){
        for($i=1;$i<=$numeros;$i++){
            $numeroGanador[]=rand(1,49);
            sort($numeroGanador);
        }
        print_r($numeroGanador);
        
    }
}



//Mostramos los resultados
echo "La combinación ganadora de la lotería en España es: \n";
loteria(6,"España");
echo "La combinación ganadora de la lotería en Alemania es: \n";
loteria(6,"Alemania");
echo "La combinación ganadora de la lotería en Italia es: \n";
loteria(6,"Italia");
echo "La combinación ganadora de la lotería en Francia es: \n";
loteria(5,"Francia");

//Dadas las variables indicadas crea una función que dibuje esto en consola
/*
$lado = 5
*****
*****
*****
*****
*****
*/

$lado=5;

for ($i=1;$i<=$lado;$i++){
    for($j=1;$j<=$lado;$j++){
        echo "*";
    }
    echo "*";
    echo "\n";
}

//Dadas las variables indicadas crea una función que dibuje esto en consola
/*
$altura = 5
$base=10
**********
**********
**********
**********
**********
*/

$altura=5;
$base=10;

for ($i=1;$i<=$altura;$i++){
    for($j=1;$j<=$base;$j++){
        echo "*";
    }
    echo "\n";
}

//Dadas las variables indicadas crea una función que dibuje esto en consola
/*
$base = 10
$altura = 5

**********
*        *
*        *
*        *
**********
*/

$altura=5;
$base=10;

for ($fila=1;$fila<=$altura;$fila++){
    for($columna=1;$columna<=$base;$columna++){
        if($fila==1 || $fila== $altura || $columna==1 || $columna== $base){
            echo "*";
        }
        else{
            echo " ";
        }
    }
    echo "\n";
}

?>

