<?php

/*
Ejercicio 2.

Escribir un programa con PHP que añada valores a un array mientrar que su longitud sea menor a 120 y luego 
mostrarlo por pantal
*/

$numeros = array();

for ($i=0; $i < 120 ; $i++) { 
    array_push($numeros, "Elemento-".$i);
}

var_dump($numeros);
// echo $numeros[2]; //muestra un elemento del array

?>