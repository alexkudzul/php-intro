<?php

// BUCLE

/* Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces 
como sea necesario, en base a una condicion 

    while(condicion){
        instrucciones
    }
*/

    // Imprimir todo los numeros de 0 a 100
    $numero=0;

    while($numero <= 100){
        // imprime en forma de lista
        // echo "<p>$numero</p>";
        // Imprime separado por comas
        // echo "$numero, ";
        echo $numero;

        // elimina la ultima coma 
        if($numero != 100){
            echo ", ";
        }

        $numero++;
    }

    echo "<hr>";
    
    // Ejemplo tabla de multiplicar Por GET

    // Agregar un parametro get en la url /?numero=5 para asignar una tabla de multiplicar

    if(isset($_GET['numero'])){
        // Cambiar tipo de dato
        $numero = (int)$_GET['numero'];
    }else{
        $numero = 1;
    }

    echo "<h1>Tabla de multiplicar del numero $numero</h1>";

    $contador = 1;

    while($contador <= 10){
        echo "$numero x $contador = ".($numero*$contador)."<br>";

        $contador++;
    }

    echo "<hr>";

    // DO WHILE

    /*
    
    do{
        Instrucciones
    }while(condicion);
    
    */


    // Imprimir si eres mayor a 18, tendras acceso a 10 locales, en caso contrario solo 1

    $edad = 18;
    $contador = 1;

    do{
        echo "Tienes acceso al local privado $contador <br>";
        $contador++;
    }while($edad >= 18 && $contador <= 10);

    
?>