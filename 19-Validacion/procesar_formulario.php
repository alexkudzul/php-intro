<?php
// Indica que los campos estan vacio y por defecto sera true
$error='faltan_valores';

if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['year']) &&
   !empty($_POST['email']) && !empty($_POST['pass'])){
    // Si estan lleno los campos se procesa cambia a true
    $error = 'ok';

    $nombre = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $edad = (int)$_POST['year'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    // Validar el nombre, si no es un string o tiene algun numero
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
    }
    // Validar el apellido
    if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
        $error = 'apellidos';
    }
    // Validar la edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    // Validar el email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    // Validar el password
    // Si esta vacia y tiene menos de 5 caracteres
    if(empty($pass) || strlen($pass)<5){
        $error = 'password';
    }

    /*
    var_dump($_POST);
    echo "<br>";
    var_dump($error);
    die(); //detiene la ejecucion de programa
    */

}else{
    //Si uno de los campos viene vacio
    $error = 'faltan_valores';
}

// Si error es diferente de ok, lo direcciona a index.php
if($error != 'ok'){   
    header("Location:index.php?error=$error");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <?php if($error == 'ok'): ?>
        <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
    <?php endif; ?>
</body>
</html>