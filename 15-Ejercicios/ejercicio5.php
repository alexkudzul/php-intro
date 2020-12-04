<?php

/*

Ejercicio 5.

Crear un array con el contenido de la tabla:

ACCION         AVENTURA         DEPORTES
GTA             PATITO 1        FIFA
COD             PATITO 2        PES
PUGB            PATITO 3        DEPORTE1


Cada fila debe de ir en un fichero $separado(includes).

*/

$tabla = array(

    "Accion" => array('GTA', 'COD', 'PUGB'),

    "Aventura" => array('PATITO 1', 'PATITO 2', 'PATITO 3'),

    "Deportes" => array('FIFA', 'PES', 'DEPORTE1')

);

$categorias = array_keys($tabla);

?>
    <table border="1">
        <?php require_once('ejercicio5/encabezados.php'); ?>
        <?php require_once('ejercicio5/primera.php') ?>
        <?php require_once('ejercicio5/segunda.php') ?>
        <?php require_once('ejercicio5/tercera.php') ?>  
    </table>