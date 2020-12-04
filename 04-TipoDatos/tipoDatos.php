<?php
/*
TIPO DE DATOS

Los tipos de datos

Entero (int/integer) = 10
Flotante / decimal (float/double) = 10.5
Cadenas (string) = "texto" o 'texto'
Boleano (bool) = true/false  o 1/0
Arreglos(array) = Coleccion de datos
Objetos = conjunto de de datos y funciones independiente 


nulo (null) = indica que no lleva ni un contenido dentro de la variable

PHP no es fuertemente tipado, por lo que no es necesario agregar el tipo de dato en una variable, 
basta con agregar un valor y PHP ya detecta el tipo 

*/

    $entero = 5;
    $decimal = 2.5;
    $texto = "cadena de texto";
    $falso = false;
    $verdadero = true;
    $nulo = null;


    // gettype muestra que tipo de dato es una variable
    echo gettype($entero);
    echo "<br>";
    echo gettype($decimal);
    echo "<br>";
    echo gettype($texto);
    echo "<br>";
    echo gettype($verdadero);
    echo "<br>";
    echo $falso; // imprimi vacio 
    echo "<br>";
    echo $verdadero;
    echo "<br>";
    echo gettype($nulo);
    echo "<br>";


    // debugear 
    // var_dump() -> permite ver que contiene una variable detalladamente

    $nombre = "Alex Ku Dzul";
    var_dump($nombre);

    echo "<br>";
    echo "<br>";
    $array[]="array uno";
    $array[]="array dos";

    var_dump($array);

    echo "<br>";
    echo"<br>";
    // imprimir una comilla dentro de una cadena de texto
    // \" -> interpreta como texto la comilla
    $texto = "cadena de \" texto";
    echo $texto;

    // \n -> solo se interpreta a nivel de consola, el navegador no lo interpreta como salto de linea 
?>