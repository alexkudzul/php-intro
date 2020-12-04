<?php

// Comprobar si existe un directorio
if(!is_dir('mi_carpeta')){
    // Crear directorio
    // Todo los permisos 0777
    mkdir('mi_carpeta', 0777) or ("No se puede crear la carpeta");
}else{
    echo "Ya existe la carpeta";
}

// Borrar directorio
// rmdir('mi_carpeta');

echo "<hr> <h1>Contenido carpeta</h1>";

// Abrir la carpeta 
if($gestor = opendir('./mi_carpeta')){
    // While recorre todo el contenido del directorio
    // mientras alla archivo en el gestor o mientras no sea false
    while(false !== ($archivo = readdir($gestor))){
        // el punto y el punto punto, el readir lo lee como entra y salir al directorio
        // si archivo es distinto a . y .., mostrar el nombre del archivo
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br>";
        }
    }
}
?>