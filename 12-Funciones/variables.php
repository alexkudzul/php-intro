<?php

/*

Variables locales:

Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles 
dentro. A no ser que hagamos un return.

Variables globales: 

Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones.

Para usar una variable global dentro de una funcion se tiene que poner la 
palabra reservada "global" seguido de la variables ejemplo "global $frase"

*/


// Variable global

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    // Se antepone global para que se tenga acceso a la informacion que hay en ella
    global $frase;

    echo "<h1>$frase</h1>";

    $year = 2020;
    echo "<h1>$year</h1>";

    return $year;
}

// holaMundo();

// marca error ya que se esta llamando como una variable local, 
// para que se utilizable se tiene que hacer un return a la funcion 
// echo $year; 

echo holaMundo();





// Funciones variables

// Utilizar variables para almacenar el nombre de las funciones, si una variable almacena el nombre de una funcion,
// al momento de invocar a la variable simplemente se tiene que agregar parentesis al final a la variable

function buenosDias(){
    return "<h1>Buenos dias</h1>";
}

function  buenasTardes(){
    return "<h1>Buenas tardes</h1>";
}

function buenasNoches(){
    return "<h1>Buenas noches</h1>";
}

$horario = "buenasNoches";
echo $horario();

$horario2 ="Tardes";
$miFuncion = "buenas".$horario2;
echo $miFuncion();
?>