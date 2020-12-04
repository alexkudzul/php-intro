<?php

// Para borrar una cookie se utiliza unset y se tiene que hacer que se caduque para poder eliminarla

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time()-100); // hace que se caduque y eso nos permite eliminarla, indica que el cookie es vieja
}

// Reedirecciones, modifica las cabeceras, 
// Location: cambia la url de la pagina y me redirrecciona a otro sitio
header('Location:ver_cookies.php');


?>