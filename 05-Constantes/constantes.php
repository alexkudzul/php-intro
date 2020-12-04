<?php

// Constantes, Es un contenedor de informacion que no se puede cambiar o modificar

// para declarar una variable constante, se necesita agregar 
// la palabra define('Nombre de la variable sin el signo de dolar', 'valor de la variable')

define('nombre','Alex Ku Dzul');
define('web','google.com');

// Para llamar a la variable solo se nesita poner el nombre sin el signo de dolar
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

// Variables, si se puede cambiar su valor

$web = "google.com";
$web = "google.com/alex";

echo '<h1>'.$web.'</h1>';

// Constantes predifinidas

// para llamar a una variable predifinida solo se necesita agregar dos guion bajo "__" y "PHP_"

echo PHP_OS;
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo PHP_EXTENSION_DIR; //Indica el directorio donde se encuentra instalado PHP 
echo '<br>';
echo __LINE__; //Indica en que linea esta este codigo
echo '<br>';
echo __FILE__; //Indica la ruta completa de este archivo
echo '<br>';

function nameFunction(){
    echo __FUNCTION__; // Indica el nombre de la funcion donde se encuentra esta instruccion
}


nameFunction();


?>