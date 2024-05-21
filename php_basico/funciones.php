<?php
/*
    Funciones en PHP
*/
//Así definimos las funciones en PHP

function suma ($num1, $num2){
    echo "sumando 2 números ";
    return $num1 + $num2;
}
//Llamada a la función
echo suma(2,4). "\n";
echo suma(5,4). "\n";

/*
    Ejercicio práctico
    Crear una función que sume 
    los elementos de un array
    
*/
function sumaArray($array){
    $suma=0;
    foreach($array as $elemento){
        $suma= $suma + $elemento;
    }
    return $suma;
}
$miArray= [2,4,1];
echo "El resultado de la suma es: ".sumaArray($miArray);
echo "\n";

/*
    Ejercicio Práctico
    Crear una función que cuente los ceros de un array
*/
function cuentaCerosArray($array){
    $contador=0;
    foreach ($array as $elemento){
        if($elemento == 0){
            $contador++;
        }
    }
    return $contador;
}
$miArrayConCeros = [1,3,0,8,20,0,0,5];
echo "El número de ceros que hay en el array es: ".cuentaCerosArray($miArrayConCeros);
echo "\n";

/*
    Ejercicio Práctico
    Crear una función que cuente los números positivos de un array
*/
function cuentaPositivosArray($array){
   $contador=0; 
   foreach($array as $elemento){
       if ($elemento >= 0){
           $contador++;
       }
   }
   return $contador; 
}
$miArrayConPositivos=[2,-1,-5,6,-12,33];
echo "El número de números positivos que hay en el array es: ".cuentaPositivosArray($miArrayConPositivos);
echo "\n";

/*
    Ejercicio Práctico
    Crear una función que cuente los números negativos de un array
*/
function cuentaNegativosArray($array){
    $contador=0; 
   foreach($array as $elemento){
       if ($elemento <= 0){
           $contador++;
       }
   }
   return $contador;
}
$miArrayConNegativos=[2,-1,-5,6,-12,33];
echo "El número de números negativos que hay en el array es: ".cuentaNegativosArray($miArrayConNegativos);
echo "\n";

/*
    Ejercicio Práctico
    Cear una función que calcule la media de los números de un array
*/
function calcularMedia($array){
    $suma=0;
    $i=0;
    $media=0;
    foreach($array as $elemento){
       $suma= $suma + $elemento;
       $i=count($array);
       $media= $suma/$i;
    }
    return $media;
    
}
$miArrayMedia=[5,7,8,20,12,4];
echo "La media de los elementos del array es: ".calcularMedia($miArrayMedia);
echo "\n";

/*
    Ejercicio Práctico
    Cear una función que compruebe cual es el número más grande de 
    los elementos del array
*/
function numeroMaximo($array){
    $maximo=$array[0];
    foreach($array as $elemento){
        if($elemento > $maximo){
            $maximo = $elemento;
        }
    }
    return $maximo;
}
$miArrayMaximo=[2,3,4,1,18,20,15];
echo "El número más grande del array es: ".numeroMaximo($miArrayMaximo);
echo "\n";

/*
    Ejercicio Práctico
    Cear una función que compruebe cual es el número más pequeño de 
    los elementos del array
*/
function numeroMinimo($array){
    $minimo=$array[0];
    foreach($array as $elemento){
        if($elemento < $minimo){
            $minimo = $elemento;
        }
    }
    return $minimo;
    
}
$miArrayMinimo=[2,3,4,1,18,20,15];
echo "El número más pequeño del array es: ".numeroMinimo($miArrayMinimo);
echo "\n";

/*
    Ejercicio extra
    Calculadora
*/
$numero1=10;
$numero2=5;
//Función para sumar números
function sumaNumeros($numero1, $numero2){
    return $numero1 + $numero2;
}
// Función para restar dos números
function restaNumeros($numero1, $numero2){
    return $numero1 - $numero2;
}
// Función para multiplicar dos números
function multiplicarNumeros($numero1, $numero2){
    return $numero1 * $numero2;
}
// Función para dividir dos números
function dividirNumeros($numero1, $numero2){
   if($numero1 !=0 && $numero2 !=0){
       return $numero1/ $numero2;
   }
   else{
       echo "ERROR: DIVISIÓN POR CERO";
   }
    
}
//Resultados
echo "La suma de $numero1 y $numero2 es " . sumaNumeros($numero1, $numero2) . PHP_EOL; //php_EndOfLine para crear un salto de línea
echo "La resta de $numero1 y $numero2 es " . restaNumeros($numero1, $numero2) . PHP_EOL;
echo "La multiplicación de $numero1 y $numero2 es " . multiplicarNumeros($numero1, $numero2) . PHP_EOL;
echo "La división de $numero1 y $numero2 es " . dividirNumeros($numero1, $numero2) . PHP_EOL;


?>
