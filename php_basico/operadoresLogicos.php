<?php
/*
    Operaciones lógicas
*/

//Operador AND  &&
$resultado1 = (5 > 3) && (2 == 1); //Devuelve nada = false
echo $resultado1;
echo "\n";

//Operador OR ||
$resultado2 = (5 > 3) || (2 == 1); //Devuelve uno = true
echo $resultado2;
echo "\n";

//Operador ternario
/*
    Este operador evalúa la condición. Si la condición es verdadera, 
    se asigna el valor de la izquierda; de lo contrario, se asigna 
    el valor de la derecha.
    
    Es una manera de escribir expresiones condicionales 
    de manera concisa y elegante.
*/
$resultado3 = (5 > 3) || (2 == 1); 
echo $resultado3 ? "Verdadero" : "Falso";
echo "\n";

//Operador not !
$resultado4 = !(5>3);
echo $resultado4 ? "Verdadero" : "Falso"; //Devuelve falso 
echo "\n";

/*
    Ejercicio práctico
*/

// W = false, X = true, Y = true, Z = false

// a) W || Y && X && W || Z -> false
// b) X && !Y && !X || !W && Y ->true
// c) !(W || !Y) && X || Z -> true
// d) X && Y && W || Z || X -> true 
// e) Y || !(Y || Z && W) -> true
// f) !X && Y && (!Z || !X) -> false

$w = false;
$x = true;
$y = true;
$z = false;

echo "a) W || Y && X && W || Z -> ", $w || $y && $x && $w || $z ? "Verdadero" : "Falso";
echo "\n";
echo "b) X && !Y && !X || !W && Y ->" , $x && !$y && !$x || !$w && $y ? "Verdadero" : "Falso";
echo "\n";  
echo "c) !(W || !Y) && X || Z ->", !($w || !$y) && $x || $z ? "Verdadero" : "Falso";
echo "\n";
echo "d) X && Y && W || Z || X -> ", $x && $y && $w || $z || $x ? "Verdadero" : "Falso";
echo "\n";
echo "e) Y || !(Y || Z && W) ->", $y || !($y || $z && $w) ? "Verdadero" : "Falso";
echo "\n";
echo "f) !X && Y && (!Z || !X) -> ", !$x && $y && (!$z || !$x) ? "Verdadero" : "Falso";

?>

