<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos PHP</title>
</head>

<body>
    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type="file" name="file">
        <input type="submit" value="Enviar">

    </form>

    <h1>Listado de imagenes</h1>
    <?php

    // Abrir el directorio
    $gestor = opendir('./images');
    // Si el directorio existe y lo abrio
    if ($gestor):
        // Recorre el contenido de la carpeta y lo guarda en una variable image        
        // mientras alla archivo en el gestor o mientras no sea false
        while (($image = readdir($gestor)) !== false):
            // el punto y el punto punto, el readir lo lee como entra y salir al directorio
            // si archivo es distinto a . y .., mostrar el nombre del archivo
            if ($image != '.' && $image != '..'):

                echo "<img src='images/$image' width='200px'/> <br>";

            endif;
        endwhile;
    endif;

    ?>
</body>

</html>