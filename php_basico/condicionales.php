<?php
/*
    Condicionales
*/
$edad = 3;
$nombre = "Alejandro";

//Estructura IF-ELSE
if($edad >= 18){
    echo "$nombre es mayor de edad\n";
    
} else{
    echo "$nombre es menor de edad\n";
}

//Estructura IF-ELSE IF-ELSE
if($edad >= 67){
    echo "$nombre es pensionista\n";
    
} else if ($edad >=18){
    echo "$nombre tiene edad para trabajar\n";
}else{
   echo "$nombre es menor de edad\n"; 
}

/*
    Ejercicio práctico
*/

$diaDeLaSemana = 8;

if ($diaDeLaSemana == 1){
    echo "Hoy es Lunes\n";
} else if ($diaDeLaSemana == 2){
    echo "Hoy es Martes\n";
} else if ($diaDeLaSemana == 3){
    echo "Hoy es Miércoles\n";
} else if ($diaDeLaSemana == 4){
    echo "Hoy es Jueves\n";
} else if ($diaDeLaSemana == 5){
    echo "Hoy es Viernes\n";
} else if ($diaDeLaSemana == 6){
    echo "Hoy es Sábado\n";
} else if ($diaDeLaSemana == 7){
    echo "Hoy es Domingo\n";
} else {
    echo "Día de la semana no reconocido\n";
}
?>
