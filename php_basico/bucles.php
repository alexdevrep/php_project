<?php
/*
    Bucles
*/

//Bucle FOR
for ($i=0;$i<=10;$i++){
    echo "$i \n";
}

/*
    Ejercicio práctico 1
    Imprimir los números del 10 al 1
*/

$inicio = 10;
$fin = 0;

for ($i=$inicio; $i>=$fin;$i--){
    echo "$i \n";
}

/*
    Ejercicio práctico 2
    Mostrar los 10 primeros números pares
*/

for ($i =1; $i<=10;$i++){
        echo $i*2 ;
        echo "\n";
    
}

/*
    Ejercicio práctico 3
    Imprimir multiplos de 10 o de 3
*/

for ($i =0; $i<=100;$i++){
    if ($i%3 ==0 || $i%10 == 0 ){
        echo "$i \n";
    }
}
/*
    Ejercicio práctico 3
    Imprimir multiplos de 10 y de 3
*/
  for ($i =0; $i<=100;$i++){
    if ($i%3 ==0 && $i%10 == 0 ){
        echo "$i \n";
    } 
    
}

/*
    Ejercicio práctico
    La cuenta atrás de 7 en 7 desde 1935 a 1812 es:
*/
$comienzo = 1935;
$final = 1812;
$salto = 7;
echo "b) La cuenta atras de $salto en $salto desde $comienzo a $final es: \n";
for ($i=$comienzo ; $i>= $final; $i-=$salto){
    
    echo "$i ";
}
echo "\n";

// Bucle while
/*
    Ejercicios prácticos
    Mismo enunciado pero usar en blucle while
*/
$i=1;
while ($i<=10){
    echo "$i \n";
    $i++;
    
}

$i=1;
$j=0;
while ($i<=10){
    echo $j+=2;
    echo "\n";
    $i++;
    
    
}

$i=1;
while($i<=100){
    if ($i%3 ==0 || $i%10 == 0 ){
        echo "$i \n";
    }
    $i++;
}

$comienzo = 1935;
$final = 1812;
$salto = 7;
echo "b) La cuenta atras de $salto en $salto desde $comienzo a $final es: \n";
while ($comienzo>=$final){
    $resultado = $comienzo - $salto;
    echo "$resultado \n";
    $comienzo -= $salto;
    if ($comienzo == 1816){
        break;
    }
}

//Contar los números que cumplen una condición
//Contar los números que hay del 1 al 100
$contador=0;
for ($i=1;$i<=100;$i++){
    $contador++;
}
echo "Total de números contados: $contador \n";

//Contar los números múltiplos de 13 y 3
$contador=0;
for ($i=1;$i<=100;$i++){
    if($i % 13 ==0 && $i % 3 == 0){
        $contador++;
    }
    
}
echo "Total de números contados: $contador \n";

/*
a) Entre 50 y 2500 hay XX números múltiplos de 13.
b) La cuenta atrás de 7 en 7 desde 1935 a 1812 es:
   XX XX ... XX
c) El producto de los números impares entre 10 y 20 es XX.
d) La suma de los números entre 70 y 800 es XXX.

f) La suma de los cuadrados de los numeros pares entre 15 y 70 es XXX.
g) La suma de los cubos de los numeros impares entre -10 y 20 es XXX.
h) El abecedario inglés de letras minúsculas es:
   abcdefghijklmnopqrstuvwxyz
i) El abecedario inglés de letras mayúsculas es:
   ABCDEFGHIJKLMNOPQRSTUVWXYZ
j) El abecedario inglés de letras minúsculas de 3 en 3 letras es:
   adgjmpsvy
k) El abecedario inglés de letras minúsculas alrevés es:
   zyxwvutsrqponmlkjihgfedcba
l) El abecedario inglés alternando mayúsculas y minúsculas es:
   AbCdEfGhIjKlMnOpQrStUvWxYz

*/


// a) Entre 50 y 2500 hay XX números múltiplos de 13
$multiplo = 13;
$inicio = 50;
$fin = 2500;
$contador = 0;
for($i=$inicio; $i<=$fin;$i++){
    if($i % $multiplo ==0){
        $contador++;
    }
}
echo "a) Entre 50 y 2500 hay $contador números de 13\n";
/*
    Solución algoritmica eficiente ($fin-$inicio)/$multiplo +1
    Esta fórmula nos da 189 que es justo el valor del contador al final del bucle
*/


//b) La cuenta atrás de 7 en 7 desde 1935 a 1812 es:
$inicio = 1935;
$final = 1812;
echo "b) La cuenta atrás de 7 en 7 desde 1935 a 1812 es:";
for ($i=$inicio; $i>=$final; $i-=7){
    echo "$i ";
}
echo "\n";

//c) El producto de los números impares entre 10 y 20 es XX
$inicio =10;
$fin = 20;
$producto=1;
for($i=$inicio ;$i<=$fin; $i++){
    if($i % 2 !=0){
        $producto *= $i;
    }
}
echo "c) El producto de los números impares entre $inicio y $fin es $producto\n";
//Solución algorítmica eficiente 
/*$inicio =10;
$fin = 20;
$producto=1;
if($i % 2 ==0){
    $inicio++;
}//Ver diferentes soluciones en el compartido*/

//d) La suma de los números entre 70 y 800 es XX
$inicio = 70;
$fin = 800;
$resultado = ($inicio + $fin)/2 * (($fin-$inicio + 1));
echo "d) La suma de los números entre $inicio y $fin es $resultado\n";

//e) La suma de los cuadrados de los numeros pares entre 15 y 70 es XX
$inicio =15;
$fin =70;
$suma=0;

for ($i=$inicio ;$i<=70 ;$i++){
    if ($i % 2==0){
        $suma += $i * $i;
    }
}
echo "e)La suma de los cuadrados de los números pares entre 15 y 70 es $suma \n";

//f) La suma de los cubos de los números impares entre -10 y 20 es XX
$inicio = -10;
$fin = 20;
$suma =0;
for ($i=$inicio; $i<=$fin; $i++){
    if($i % 2 !=0){
        $suma += $i * $i * $i;
    }
}
echo "f) La suma de los cubos de los números impares entre -10 y 20 es $suma\n";

//g)El abecedario inglés de letras minúsculas es:
//  abcdefghijklmnopqrstuvwxyz
$inicio ='a';
$fin = 'z';
echo "g)El abecedario inglés de letras minúsculas es:\n";
for($i=$inicio; $i<=$fin; $i=chr(ord($i)+1)){
    echo "$i";
}
echo "\n";

//h) El abecedario inglés de letras mayúsculas es:
//   ABCDEFGHIJKLMNOPQRSTUVWXYZ
$primeraLetra = 'A';
$totalLetras = 26;
$letra = $primeraLetra;
echo "h) El abecedario inglés de letras mayúsculas es:\n";
for($i = 1; $i<=$totalLetras; $i++){
    echo $letra;
    $letra++;
}
echo "\n";

//i) El abecedario inglés de letras minúsculas de 3 en 3 letras es:
//adgjmpsvy
$inicio = 'a';
$fin = 'z';
echo "i) El abecedario inglés de letras minúsculas de 3 en 3 letras es:\n";
for($i=$inicio; $i<=$fin; $i=chr(ord($i)+3)){
    echo "$i";
}
echo "\n";

//j)El abecedario inglés de letras minúsculas alrevés es:
//zyxwvutsrqponmlkjihgfedcba
$inicio = 'z';
$fin = 'a';
echo "j)El abecedario inglés de letras minúsculas alrevés es:\n";
for($i=$inicio; $i>=$fin; $i=chr(ord($i)-1)){
    echo "$i";
}
echo "\n";

//k)El abecedario inglés alternando mayúsculas y minúsculas es:
//AbCdEfGhIjKlMnOpQrStUvWxYz
//echo chr(ord('a')-32) -> A

$inicio= 'a';
$fin= 'z';
$mayusculas = true;
echo "k)El abecedario inglés alternando mayúsculas y minúsculas es:\n";
for($i=$inicio; $i<=$fin; $i=chr(ord($i)+1)){
    if ($mayusculas){
        echo chr(ord($i)-32);
    }
    else{
        echo "$i";
    }
    $mayusculas = !$mayusculas;
}

echo "\n";




?>
