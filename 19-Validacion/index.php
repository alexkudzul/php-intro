<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formulario PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>
    
    <?php
        // Si trae error por get desde el servidor, imprimos una un mensaje
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_valores'){
                echo '<strong style="color:red">Introduce todo los datos en todo los campos del formulario</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color:red">Los apellidos no son correctos</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce una edad correcta</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">El email es erroneo</strong>';
            }
            if($error == 'password'){
                echo '<strong style="color:red">Introduce una contraseña de mas de 5 letras</strong>';
            }
        }

    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="name">Nombre</label><br>
        <!-- El operador mas "+" indica que se puede repetir el patron un numero indefinia de veces -->
        <input type="text" name="name" required="required" pattern="[A-Za-z ]+"><br>

        <label for="lastname">Apellidos</label><br>
        <input type="text" name="lastname" required="required" pattern="[A-Za-z ]+"><br>

        <label for="year">Edad</label><br>
        <input type="number" name="year" required="required" pattern="[0-9]+"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" required="required"><br>

        <label for="pass">Password</label><br>
        <input type="password" name="pass" ><br>

        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>