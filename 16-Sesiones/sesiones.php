<?php

/*
    Sesion

    Almacena y persiste datos del usuario mmientras que navega en un sitio web, hasta que 
    cierre sesion o cierre el navegador

*/

// Iniciar la sesion

session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

// Variable de sesion
$_SESSION['variable_persistente'] = "Soy una sesion activa";


echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];

// Para hacer la prueba ejecutar desde el navegador este archivo, se activara la session
// Navegar en la pagina1.php => continuara la session activa 
// Navegar en logout.php => se destruira la session

?>