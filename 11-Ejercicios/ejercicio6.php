<?php
    /*  
    Ejercicio 6. Mostrar una tabla de html con las tablas de multiplicar del 1 al 10   
    */

    echo "<table border='1'>";
// -----------------------------------------------------------------------------------
    echo "<tr>"; // inicio fila 1 de celdas   
    for ($i=1; $i <= 10 ; $i++) { 
        echo  "<td>Tabla del $i</td>";       
    }
    echo "</tr>"; //cierre de fila 1 de celdas
// ------------------------------------------------------------------------------------
    echo "<tr>";
    for ($j=1; $j <= 10; $j++) { 
        echo "<td>";       
            for ($k=1; $k <= 10; $k++) { 
                echo "$j x $k = ".($i*$k)."<br>";
            }        
        echo "</td>";       
    }
    echo "</td>";
// ------------------------------------------------------------------------------------------

    echo "</table>";
?>