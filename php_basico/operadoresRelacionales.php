<?php
/*
    Ejercicio práctico 1
*/

// Declaración de variables
$edad = 24;
$nombre = "Alejandro";
$apellido = "Díaz";

//Imprimimos las variables
echo "Hola $nombre $apellido tienes $edad años\n";

/*
    Operadores relacionales
*/
//Devuelven si se cumplen alguna condición

$num1 = 10;
$num2 = 20;

//Menor que 
$menorQue = $num1 < $num2;
echo "¿10 es menor que 20?($menorQue)\n"; //Devuelve 1 = true

//Mayor que
$mayorQue = $num1 > $num2;
echo "¿10 es mayor que 20?($mayorQue)\n"; //No devuelve nada = false

//Mayor o igual que
$mayorOIgualQue = $num1 >= $num2;
echo "¿10 es mayor o igual que 20?($mayorOIgualQue)\n"; //No devuelve nada = false

//Menor o igual que
$menorOIgualQue = $num1 <= $num2;
echo "¿10 es menor o igual que 20?($menorOIgualQue)\n"; //Devuelve 1 = true

//Igual que
$igualQue = $num1 == $num2;
echo "¿10 es igual que 20?($igualQue)\n"; //No devuelve nada = false

//Distinto que 
$distintoQue = $num1 != $num2;
echo "¿10 es distinto que 20?($distintoQue)\n";//Devuelve 1 = true


?>
