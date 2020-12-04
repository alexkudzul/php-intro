<?php

// CONDICIONALES

/*

CONDICIONAL IF

if(condicion){
    instrucciones
}else{
    otras instrucciones
}

-------------------------- Operadores de comparacion ---------------------------

==  igual
=== identico, es mas exacto en cuestion de tipo de datos, el contenido
!=  diferente
<>  diferente
!== no identico
<   menor que
>   mayor que
<=  menor o igual que
>=  mayor o igual que


--------------------------- Operadores logicos ----------------------------------

&& AND Y
|| OR O
!  NOT NO NEGACION
and, or



*/

// EJEMPLO 1
$color = "rojo";

if($color == 'rojo'){
    echo "El color es rojo";
}else{
    echo "El color NO es rojo";
}

echo "<br>";

// EJEMPLO 2
$year = 2020;

if($year == 2020){
    echo "Estamos en 2020";
}else{
    echo "No estamos en 2020";
}

echo "<br>";

// EJEMPLO 3

$nombre="Alex";
$ciudad="Mérida Yucatán";
$continente = "America";
$edad =27;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo "<h1> $nombre es mayor de edad</h1>";

    if($continente == "America"){
        echo "<h1> Y es de $ciudad</h1>";
    }else{
        echo "No es Americano";
    }
    
}else{
    echo "<h1> $nombre no es mayor de edad</h1>";
}
echo "<hr>";

// EJEMPLO 4

$dia = 3;

if($dia==1){
    echo "Es lunes";
}else{
    if($dia==2){
        echo "Es martes";
    }else{
        if($dia==3){
            echo "Es miercoles";
        }else{
            if($dia==4){
                echo "Es jueves";
            }else{
                if($dia==5){
                    echo "Es viernes";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
}

echo "<br>";

if($dia==1){
    echo "LUNES";
}elseif ($dia==2) {
    echo "MARTES";
}elseif ($dia==3) {
    echo "MIERCOLES";
}elseif ($dia==4) {
    echo "JUEVES";
}elseif ($dia==5) {
    echo "VIERNES";
}else{
    echo "FIN DE SEMANA";
}

echo "<br>";


switch($dia){
    case 1:
        echo "LUNES";
    break;
    case 2:
        echo "MARTES";
    break;
    case 3:
        echo "MIERCOLES";
    break;
    case 4:
        echo "JUEVES";
    break;
    case 5:
        echo "VIERNES";
    break;
    default:
        echo "FIN DE SEMANA";
}

echo "<hr>";

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo "NO PUEDE TRABAJAR";
}

echo "<hr>";

$pais = "Mexico";

if($pais=="Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais no se habla español";
}else{
    echo "No se habla español";
}


// GOTO
// salta o ignora instrucciones de codigo, poniendo una marca con goto marca;
// agregar el marca: donde se desea continuar ejecutando el codigo con dos puntos ":" 

goto ejecuta_aqui;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 1</h3>";

ejecuta_aqui:
echo "<h1>He saltado 4 echos</h1>";

?>