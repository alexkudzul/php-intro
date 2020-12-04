<?php

// FOR

/*

for(variable contador, condicion, incremento contador){
    Ejecutar instrucciones
}

*/

// Sumar todo los numeros de 1 al 100

$resultado=0;

for($i = 0; $i <= 100; $i++){
    // $resultado += $i; 
    $resultado = $resultado + $i;
}

echo "<h1>El resultado es: $resultado</h1>";


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

for($contador = 1; $contador <= 10; $contador++){
    // Break corta o detiene las instruccionos
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones";
    break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br>";
}


?>