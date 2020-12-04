<?php

/*
    FUNCIONES

    Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse solamente
    invocando a la funcion tantas veces como queramos.

    function nombreFuncion(){
        bloque de instrucciones
    }

    Invocar funcion 
    nombreFuncion()

*/

// EJEMPLO 1
function muestraNombres(){
    echo "Alex Ku Dzul <br>";
    echo "Alex Ku Dzul <br>";
    echo "Alex Ku Dzul <br>";
}

muestraNombres();

echo "<hr>";
// EJEMPLO 2

function tablaMultiplicar($numero){
    echo "<h3>Tabla de multiplicar del número: $numero</h3>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo "$numero x $i = ".($numero*$i)."<br>";
    }
}
if(isset($_GET['numero'])){
    tablaMultiplicar($_GET['numero']);
    tablaMultiplicar(2);
}else{
    echo "<h1>Ingresa un numero por la URL(GET) para sacar la tabla</h1>";
}
// tablaMultiplicar(2);

// Sacar todas las tablas de multiplicar 

for ($i=1; $i <= 10 ; $i++) { 
    tablaMultiplicar($i);
}


echo "<hr>";

// EJEMPLO 3

function calculadora($numero1, $numero2, $negrita = false){

    echo "<h2>Calculadora</h2>";
    
     $suma = $numero1 + $numero2;
     $resta = $numero1 - $numero2;
     $multiplicacion = $numero1 * $numero2;
     $division = $numero1 / $numero2;

    //  Cadena_texto viene vacio, se le concatena conforme se va ejecutando el codigo, es como si fuera un echo

     $cadena_texto = "";

    //  El if interpreta que automaticamente es un true
    if($negrita){
         $cadena_texto .= "<h1>";
    }
 
     $cadena_texto .= "Suma: $suma <br>";
     $cadena_texto .= "Resta: $resta <br>";
     $cadena_texto .= "Multiplicacion: $multiplicacion <br>";
     $cadena_texto .= "Division: $division <br>";

    if($negrita){
        $cadena_texto .= "</h1>";
    }

    $cadena_texto .= "<hr>";

    return $cadena_texto;
 }

 echo calculadora(2,5);
 echo calculadora(5,5,true);

//  EJEMPLO 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";

    return $texto;
}

function getApellido($apellido){
    $texto = "Los apellidos son: $apellido";

    return $texto;
}

 function devuelveElNombre($nombre, $apellido){
     $texto = getNombre($nombre) 
                ."<br>".
                getApellido($apellido)
     ;
     return $texto;
 }

    echo devuelveElNombre("Alex", "Ku");

?>