<?php

// Debuggear
$nombre = "Alex Ku Dzul";
var_dump($nombre);

// Fechas

echo date('d-m-Y');
echo "<br>";
echo time(); //va cambiando conforme pasa el tiempo y no se repite

// Matematicas
echo "<br>";
echo "Raiz cuadrada de 9: ".sqrt(9);

echo "<br>";
echo "Numero aleatorio entre 5 y 10: ".rand(5, 10);

echo "<br>";
echo "Numero pi: ". pi();

echo "<br>";
echo "Redondear: ".round(7.811334, 2);

// Mas funciones generales

// Detectar tipado
echo "<br>";
echo gettype($nombre);

echo "<br>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br>";
if(!is_float($nombre)){
    echo "Esa variable no es un numero con decimales";
}

echo "<br>";

// Detectar si existe una variable

// isset(), verifica si una variable existe dentro de un programa

if(isset($edad)){
// if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}


echo "<br>";


// Limpiar espacios

// trim() Elimina los espacios de inicio y fin 

$frase = "     mi contenido    ";
echo trim($frase);

echo "<br>";
var_dump(trim($frase));


echo "<br>";


// Eliminar variables o indices

$year = 2020;

unset($year);

// var_dump($year);


echo "<br>";

// empty(), Comprobar variable vacia

$texto = "";

if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable texto tiene contenido";
}


echo "<br>";

// strlen(), Contar caracteres de un string

$cadena = "12345";
echo strlen($cadena);

echo "<br>";

// strpo(), Encontrar caracter

$frase = "La vida es bella";
echo strpos($frase, "i"); // se encuentra en la posicion 4

echo "<br>";

// str_replace(), Reemplazar palabras de un string, recibe 3 parametros
// La primera la palabra que se va a buscar
// La segunda la palbra con la que se va reemplazar
// La tercera donde se va a buscar, variable, objeto, funcion 

$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br>";

// Convertir en Mayusculas y minusculas

echo strtolower($frase); // Minuscula
echo "<br>";
echo strtoupper($frase); // Mayuscula

?>