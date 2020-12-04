<?php

/*
Ejercicio 1.

Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:
-Recorrerlo y mostrarlo
-Ordenarlo y mostrarlo
-Mostrar su longitud
-Buscar algun elemento (buscar por el parametro que me llegue por la url)

*/

    $numeros = array(7,2,3,8,5,6,1,4);

    // Recorrerlo
    // echo "<h3>Recorrer arreglo<h3>";
    // for($i =0 ; $i < count($numeros); $i++){
    //     echo $numeros[$i]."<br>";
    // }
    // echo "<hr>";
    
    function mostrarArray($numeros){
        
        $resultado = "";

        foreach ($numeros as $numero) {
            // $resultado = $resultado.$numero."<br>";
            $resultado .= $numero."<br>";
        }

        return $resultado;
    }

    echo "<h3>Recorrer arreglo<h3>";
    echo mostrarArray($numeros);

    echo "<hr>";

    // Ordenarlo y mostrarlo 
    echo "<h3>Ordenar arreglo<h3>";
    sort($numeros);
    echo mostrarArray($numeros);

    echo "<hr>";
    // Mostrar su logitud
    echo "<h3>Longitud del arreglo<h3>";
    echo sizeof($numeros);
    

    // Buscar algun elemento

    if(isset($_GET['numero'])){
    
        $busqueda = $_GET['numero'];
        
        echo "<h3>Buscar elemento $busqueda<h3>";
        $search = array_search($busqueda, $numeros);

        if(!empty($search)){
            echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
        }else{
            echo "No existe el numero buscado";
        }

    }

?>