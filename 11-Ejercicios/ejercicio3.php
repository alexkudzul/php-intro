<?php

/*
Ejercicio 3.

Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo) de los 40 primeros
numeros naturales

*/

echo "<h1>CON FOR</h1>";

for($i = 1; $i<=40; $i++){
    $cuadrado = $i*$i;
    echo "<h3>El cuadrado de $i es $cuadrado</h3>";
}

echo "<hr>";

echo "<h1>CON WHILE<h1>";

$i=1;

while($i<=40){
    $cuadrado = $i*$i;
    echo "<h3>El cuadrado de $i es $cuadrado</h3>";

    $i++;
}

?>