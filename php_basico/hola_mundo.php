<?php
// Esto es un comentario en una línea
/*
    Esto es un comentario en 
    varias líneas
*/

//Primer hola mundo
echo "Hola Mundo!\n";
//Usamos \n para hacer un salto de línea


//Variables en php
/*
    PHP es un lenguaje débilmente tipado por o
    que podemos cambiar el tipo de dato de las 
    variables como se puede ver abajo
*/

//Las variables se escriben en camel case 

//Variables de tipo texto
$miVariable = "Esto es una variable de tipo texto\n";
echo $miVariable;


//Variables de tipo numérico entero
$miVariable = 24;
echo $miVariable;

//Concatenar texto y variables
echo "Número: $miVariable\n";

//Podemos hacer operaciones dentro de las variables
$suma=10+12;
echo "El resultado de la suma es: $suma\n";

//Podemos imprimir varias variables en un solo echo
$edad = 20;
$nombre = "Alejandro";
echo "$nombre tiene $edad años\n";

//Tipos de numeros
//Números enteros
$enteroPositivo = 3;
echo $enteroPositivo."\n";

$enteroNegativo = -5;
echo $enteroNegativo."\n";


//Números con decimales
$decimalPositivo = 7.5;
echo $decimalPositivo."\n";

$decimalNegativo = -0.68;
echo $decimalNegativo."\n";


// Números octal, binario y hexadecimal
$numeroOctal = 0342;
echo $numeroOctal."\n";

$numeroBinario = 0b10001;
echo $numeroBinario."\n";

$numeroHexadecimal = 0x4ef2a;
echo $numeroHexadecimal."\n";


//Cadenas de texto
$textoNormal = "Hola Mundo!";
echo $textoNormal."\n";

$textoNumerico = "33";
echo $textoNumerico."\n";


//Caracteres 
$letra = 'b';
echo $letra."\n";

$numeroComoCaracter = '4';
echo $numeroComoCaracter."\n";

$simbolo = '@';
echo $simbolo."\n";

?>
