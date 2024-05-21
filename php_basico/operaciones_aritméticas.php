<?php
//Operaciones aritméticas
//Variables 
$a = 10;
$b = 5;
$c=11;
//Suma
$suma = $a + $b;
echo "$a + $b = $suma \n";

//Resta
$resta = $a - $b;
echo "$a - $b = $resta \n";

//Multiplicación
$multiplicacion = $a * $b;
echo "$a * $b = $multiplicacion \n";

//División
$division = $a / $b;
echo "$a / $b = $division \n";

//Resto o modulo
$resto = $a % $b;
echo "$a % $b =$resto \n";

//División entera (devuelve solo la parte entera del cociente)
$divisionEntera = intdiv($c,$b);
echo "$c // $b = $divisionEntera\n";

//Incrementos y decrementos 


//Incrementos
$likes = 0;
echo "Likes = $likes \n";
$likes = $likes + 1;
echo "Likes = $likes \n";

//Tambien podemos hacer un incremento así:
$likes++;
echo "Likes = $likes \n";


//Decrementos
$cuentaAtras = 10;
echo "Cuenta Atrás = $cuentaAtras\n";
$cuentaAtras = $cuentaAtras - 1;
echo "Cuenta Atrás = $cuentaAtras\n";

//Tambien podemos hacer un decremento así
$cuentaAtras--;
echo "Cuenta Atrás = $cuentaAtras\n";

//Operaciones combinadas con operador


$numero = 10;
echo "Número = $numero\n";

//doble del número guardado en la misma variable
$numero*=2;
echo "Número = $numero\n";

//mitad del numero guardado en la variable numero
$numero/=2;
echo "Número = $numero\n";

//Sumo 15 en el numero y lo guardo en la mis a variable
$numero+=15;
echo "Número = $numero\n";

//Resto 15 en el numero y lo guardo en la mis a variable
$numero-=15;
echo "Número = $numero\n";


//Precedencia en las operaciones
$resultado = 2 + 15 * 2 / 5 -1;
echo "Resultado = $resultado \n";

$resultado = (2 + 15) * 2 / 5 -1;
echo "Resultado = $resultado \n"

?>
