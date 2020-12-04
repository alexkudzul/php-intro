<?php

$cantantes = ['Cantante 1', 'Cantante 2', 'Cantante 3', 'Alex', 'B'];
$numeros = [2,1,9,6,4];

// ORDENAR ARRAY
// asort, ordena un array por orden alfabetico
asort($cantantes);
var_dump($cantantes);
echo "<br>";
// arsort, ordena por orden inverso 
arsort($cantantes);
var_dump($cantantes);
echo "<br>";
// sort ordena un array numerico 
sort($numeros);
var_dump($numeros);
echo "<br>";


// AÑADIR ARRAY
$cantantes[] = "Cantante 4";
array_push($cantantes, "Cantante 5");
var_dump($cantantes);
echo "<br>";

// QUITA EL ULTIMO ELEMENTO 
array_pop($cantantes);
var_dump($cantantes);
echo "<br>";

// QUITA UN ELEMENTO EN CONCRETO
unset($cantantes[1]);
var_dump($cantantes);
echo "<br>";

// OBTENER UN ELMENTO ALEATORIO
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo "<br>";

// DAR LA VUELTA DE UN ARRAY
var_dump(array_reverse($numeros));
echo "<br>";

// BUSQUEDA DENTRO DE UN ARRAY
$resultado = array_search('Alex', $cantantes);
var_dump($resultado);
echo "<br>";

// CONTAR NUMERO DE ELEMENTOS DE UN ARRAY
echo count($cantantes);
echo "<br>";
echo sizeof($cantantes);
?>