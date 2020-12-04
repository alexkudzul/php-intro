<?php

$archivo = $_FILES['file'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('images')){
        mkdir('images', 0777); // Crear la carpeta con todo los permisos
    }

    // Refrescar 5 segundos y enviarlo a index.php
    header("Refresh: 5; URL= index.php");

    // mueve el archivo temporal a la carpeta images con el nombre del archivo
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    echo "<h1>Imagen subida correctamente</h1>";
}else{
    // Si no es una imagen
    // Refrescar 5 segundos y enviarlo a index.php
    header("Refresh: 5; URL= index.php");
    echo "<h1>Sube una imagen con un formato correcto</h1>";
}

// var_dump($archivo);
// die();

?>