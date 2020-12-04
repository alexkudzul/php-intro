<?php

/*
Array, es una coleccion o un conjunto de datos/valores, bajo un unico nombre
para acceder a esos valores podemos usar indice numero o alfanumerico

*/

$peliculas = array('Pelicula 1', 'Pelicula 2', 'Pelicula 3');
$cantantes = ['Cantante 1', 'Cantante 2', 'Cantante 3'];
$personas = array(
    'nombre' => 'Alex',
    'apellidos' => 'Ku Dzul',
    'web' => 'google.com'
);

var_dump($personas);

// var_dump($peliculas);
echo "<br>";
// var_dump($cantantes);

echo "<br>";
echo $peliculas[0];
echo "<br>";
echo $cantantes[2];
echo "<br>";


// RECORRER CON FOR
// Para verificar el tamaño que tiene un array, se utiliza count
echo "<h1> Listado de peliculas</h1>";

echo "<ul>";
for ($i=0; $i < count($peliculas) ; $i++) { 
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

// RECORRER CON FOREACH
echo "<h1> Listado de cantantes</h1>";

echo "<ul>";
foreach ($cantantes as $indice => $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";


// Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Alex 1',
        'email' => 'alex1@gmail.com'
    ),
    array(
        'nombre' => 'Alex 2',
        'email' => 'alex2@gmail.com'
    ),
    array(
        'nombre' => 'Alex 3',
        'email' => 'alex3@gmail.com'
    ),
);

// var_dump($contactos);
 
echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto) {
    // var_dump($contacto);
    echo $contacto['nombre'];
}



?>