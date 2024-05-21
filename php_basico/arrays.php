<?php
/*
    Arrays
*/
//Así creamos un array
$miPrimerArray = [1,3,5];
//Todos los array empiezan por la posición 0

//Accediendo a una posición de un array
 echo "$miPrimerArray[2] \n";

    
//Recorriendo los elementos de un array con un bucle for
for($i=0;$i<count($miPrimerArray);$i++){
    echo $miPrimerArray[$i];
    
}
echo "\n";

//Recorriendo los elementos de un array con un bucle foreach  
foreach($miPrimerArray as $elemento){
    echo $elemento;
}

echo "\n";

/*
    Ejercicio práctico
    Calcular la suma de los elementos del array
*/
$suma =0;
foreach($miPrimerArray as $elemento){
    $suma += $elemento;
    
}
echo $suma;
echo "\n";

/*
    Ejercicio práctico
    Calcular el producto de los elementos del array
*/
$producto =1;
foreach($miPrimerArray as $elemento){
    $producto *= $elemento;
    
}
echo $producto;
echo "\n";

/*
    Ejercicio práctico
    Duplicar el valor de los elementos del array
*/
for ($i=0;$i<count($miPrimerArray); $i++){
     echo $miPrimerArray[$i]*2;
    
}

/*
    Ejercicio práctico
    Duplicar el valor de los elementos del array pero haciendolo en otro
    array, el array original se queda igual
*/


/*
    Ejercicio práctico
    Sumar 2 arrays (que puede ser de distinto tamaño) en un nuevo array
    [1,4,6] [2,3] -> [3,7,6]
*/
$array1 = [1,4,6];
$array2 = [2,3];

//ver soluciones en el compartido 


?>
