<?php

// Operadores aritmeticos , +-*/%

$numero1 = 10;
$numero2 = 2;

echo 'Suma: '.($numero1+$numero2).'<br>';
echo 'Resta: '.($numero1-$numero2).'<br>';
echo 'Multiplicar: '.($numero1*$numero2).'<br>';
echo 'Dividir: '.($numero1/$numero2).'<br>';
echo 'Resto %: '.($numero1%$numero2).'<br>';


// Operadores incremento y decremento
// Permite incrementar o decremento de un numoer

$year1 = 2020;
$year2 = 2020;
$year3 = 2020;
$year4 = 2020;

// Incremento
// $year = $year + 1;
$year1++;

// Decremento
// $year = $year - 1;
$year2--;

// Pre-incremento
// $year = 1 + $year;
++$year3;

// Pre-decremento
// $year = 1 - $year;
--$year4;

echo "<h1>$year1</h1>";

echo "<h1>$year2</h1>";

echo "<h1>$year3</h1>";

echo "<h1>$year4</h1>";

// Operadores de asignacion

$edad = 10;

echo $edad.'<br>';

// $edad = $edad + 5;
echo ($edad+=5).'<br>'; // suma 5 a $edad

echo ($edad/=5).'<br>'; // divide $edad entre 5


?>