<?php
/*
Ejercicio 5.

Hacer un programa que muestre todo los numeros IMPARES entre dos numeros que nos lleguen por la URL($_GET)

*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

        if($numero1 < $numero2){
            for ($i=$numero1; $i <= $numero2; $i++) {                 
                if($i%2 != 0){
                    echo "<h4>$i ES IMPAR</h4>";
                }else{
                    // echo "<h4>$i ES PAR</h4>";
                }                
            }
        }else{
            echo "<h1>El numero 1 debe ser menor al numero 2</h1>";
        }
}else{
    echo "<h1>Introduce correctamente los valores por la URL, ejemplo ?numero1=2&numero2=8</h1>";
}

?>