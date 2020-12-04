<?php

// Variables super globales

// Variables de servidor

// obtiene la direccion ip del servidor web
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; // resultado ::1, ya que nos encontramos en un localhost
echo '</h1>';

// obtiene el nombre del dominio
echo '<h1>';
echo $_SERVER['SERVER_NAME']; // resultado localhost
echo '</h1>';

// obtiene datos del servidor
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';

// obtiene el navegador que se esta usando
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';

// obtiene el ip del cliente
echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; // resultado ::1, ya que nos encontramos en un localhost
echo '</h1>';

// NOTA: en ves de poner localhost, se puede poner el ip del servidor con ipconfig

?>