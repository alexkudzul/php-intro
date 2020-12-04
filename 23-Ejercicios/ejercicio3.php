<?php

// Ejercicio 3. 
// Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
// uno para sumar, restar, dividir y multiplicar


$resultado = false;

if(isset($_POST['numero1']) &&  isset($_POST['numero2'])){
    
    if(isset($_POST['sumar'])){
        $resultado = "El resultado  de la suma es: ". ($_POST['numero1'] + $_POST['numero2']);
    }

    if(isset($_POST['restar'])){
        $resultado = "El resultado  de la resta es: ". ($_POST['numero1'] - $_POST['numero2']);
    }

    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado  de la multiplicacion es: ". ($_POST['numero1'] * $_POST['numero2']);
    }

    if(isset($_POST['dividir'])){
        $resultado = "El resultado  de la division es: ". ($_POST['numero1'] / $_POST['numero2']);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
</head>
<body>
    <form action="" method="post">
        Introduce un numero <input type="number" name="numero1"> <br>
        
        Introduce un numero <input type="number" name="numero2"> <br>

        <input type="submit" value="Sumar" name="sumar">
        
        <input type="submit" value="Restar" name="restar">
        
        <input type="submit" value="Multiplicar" name="multiplicar">
        
        <input type="submit" value="Dividir" name="dividir">
    </form>

    <?php
        // Resultado
        if($resultado != false):
            // Mostrar
            echo "<h2>$resultado</h2>";
        endif;
    ?>
    
</body>
</html>