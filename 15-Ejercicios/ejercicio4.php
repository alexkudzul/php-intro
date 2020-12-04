<?php

/*
Ejercicio 4.

Crear un script en php que tenga 4 variables, una de tipo array, otra de tipo string, otra int y booleana y
que imprima un mensaje segun el tipo de variable que sea.


*/

$arreglo = array();
$string = "";
$entero = 1;
$bool = true;

if(is_array($arreglo)){
    echo "<h1>Es un array</h1>";
}

if(is_string($string)){
    echo "<h1>Es un string</h1>";
}

if(is_integer($entero)){    
    echo "<h1>Es un entero</h1>";
}

if(is_bool($bool)){   
    echo "<h1>Es un booleano</h1>";
}

echo "La variable es de tipo: ".gettype($arreglo)."<br>";
echo "La variable es de tipo: ".gettype($string)."<br>";
echo "La variable es de tipo: ".gettype($entero)."<br>";
echo "La variable es de tipo: ".gettype($bool)."<br>";

?>