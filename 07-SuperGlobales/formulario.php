<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>

<body>

    <h1>Formulario en PHP</h1>

    <!-- <form action="recibir.php" method="GET"> -->
    <form action="recibir.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="lastname">LastName</label>
        <input type="text" name="lastname">

        <input type="submit" value="Enviar">
    </form>

</body>

</html>