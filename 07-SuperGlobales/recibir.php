<?php

// ---------------------- GET -------------------------------
// obtiene los valores por la URL del formulario.php, viaja por GET

/*
echo "<h1>".$_GET['name']."</h1>";
echo "<h1>".$_GET['lastname']."</h1>";

// obiene los valores del formulario en forma de array global asociativo
var_dump($_GET);

*/
// ----------------------- POST ------------------------------

// Obtiene los valores de forma oculta, viaja por POST

echo "<h1>".$_POST['name']."</h1>";
echo "<h1>".$_POST['lastname']."</h1>";

// obiene los valores del formulario en forma de array global asociativo
var_dump($_POST);

?>