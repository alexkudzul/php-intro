<?php

/*

Ejercicio 4.

Recoger dos numeros por la url(parametros GET) y hacer todas las operaciones basicas de una 
calculadora (suma, resta, multiplicacion, division) de esos dos numeros

*/

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1=(int)$_GET['numero1'];
        $numero2=(int)$_GET['numero2'];

        echo "<h1>Calculadora</h1>";
        echo "Suma = ". ($numero1 + $numero2)."<br>";
        echo "Resta = ". ($numero1 - $numero2)."<br>";
        echo "Multiplicacion = ". ($numero1 * $numero2)."<br>";
        echo "Division = ". ($numero1 / $numero2)."<br>";
    } else{
        echo "<h1>Introduce correctamente los valores por la URL, ejemplo ?numero1=5&numero2=2</h1>";
    }

?>