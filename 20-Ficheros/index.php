<?php

/*

// ABRIR ARCHIVO
// fopen("nombre del archio", "modo")
// Modo = r de reader, w de writer y x de ejecucion, a+ permite leer y escribir
$archivo = fopen("fichero_texto.txt", "a+");

// LEER ARCHIVO
// mientras que no acabe las lineas del archivo, no para de recorrerlo
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br>";    
}

// ESCRIBIR  ARCHIVO
fwrite($archivo,"***Soy un texto metido desde php***");

// CERRAR ARCHIVO
fclose($archivo); 

*/

// COPIAR ARCHIVO
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// RENOMBRAS
// rename('fichero_copiado.txt', 'archivo_renombrado.txt');

// ELIMINAR
// unlink('archivo_renombrado.txt') or die('Error al borrar');


// COMPROBAR SI EXISTE UN ARCHIVO
if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
}else{
    echo "No existe";
}

?>
