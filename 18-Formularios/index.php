<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
         <label for="name">Nombre:</label>
         <p><input type="text" name="name"></p>
         
         <label for="lastname">Apellido: </label>
         <p><input type="text" name="lastname"></p>
        
         <label for="button">Boton: </label>
         <p><input type="button" name="button" value="Boton"></p>
         
         <label for="sexo">Sexo: </label>
            <p>
                Hombre: <input type="checkbox" name="sexo" value="Hombre" checked="checked">
                Mujer: <input type="checkbox" name="sexo" value="Mujer">
            </p>
         
         <label for="color">Color: </label>
         <p><input type="color" name="color"></p>
         
         <label for="date">Fecha: </label>
         <p><input type="date" name="date"></p>
         
         <label for="email">Email: </label>
         <p><input type="email" name="email"></p>
         
         <label for="file">Archivo: </label>
         <p><input type="file" name="file" multiple="multiple"></p>
         
         <label for="lastname">Oculto: </label>
         <p><input type="hidden" name="lastname"></p>
         
         <label for="numero">Numero: </label>
         <p><input type="number" name="numero"></p>
         
         <label for="password">Contraseña: </label>
         <p><input type="password" name="password"></p>
         
         <label for="continente">Continente: </label>
            <p>
                America <input type="radio" name="continente" value="America">
                Europa <input type="radio" name="continente" value="Europa">
                Asia <input type="radio" name="continente" value="Asia">
            </p>
         
         <label for="web">Pagina web: </label>
         <p><input type="url" name="web"></p>
         
         <label for="textarea">Comentarios: </label>
         <p><textarea name="textarea" id="" cols="30" rows="10"></textarea></p>
         
         <label for="peliculas">Peliculas: </label>
         <p>
             <select name="peliculas">
                <option value="Pelicula 1">Pelicula 1</option>
                <option value="Pelicula 2">Pelicula 2</option>
            </select>
         </p>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>