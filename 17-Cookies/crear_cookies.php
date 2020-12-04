<?php

/*
Cookies

Es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de 
recordar datos o rastrear el comportamiento del mismo en la web

*/

// Crear cookie
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);
// Se recomienda solo usar los 3 primeros parametros, nombre, value, expire

// Cookie basica
setcookie("micookie", "valor de mi cookie");

// Cookie con expiracion
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365)); //60 segundos por 60 minutos, por 24 horas

// Reedirecciones, modifica las cabeceras, 
// Location: cambia la url de la pagina y me redirrecciona a otro sitio
header('Location:ver_cookies.php');

?>

<!-- <a href="ver_cookies.php">Ver las Cookies</a> -->