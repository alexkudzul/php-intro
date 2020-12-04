<?php

/*

Ejercicio 3.

Programa que compruebe si una variable esta vacia y si esta vacia rellenarlo con texto en minusculas y 
mostrarlo en mayusculas y negritas

*/

$contenedor = "";

if(empty($contenedor)){
    $minuscula = strtolower($contenedor = "Llenar con texto");

    $mayuscula = strtoupper($minuscula);

    echo "<strong>$mayuscula</strong>";
}else{
    echo "La variable tiene este contenido dentro: ".$contenedor;
}


?>