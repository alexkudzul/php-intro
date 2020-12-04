<?php

// POR METODO GET
// if(isset($_GET['title'])&&isset($_GET['description'])){

//     echo "<h1>".$_GET['title']."</h1>";
//     echo "<h1>".$_GET['description']."</h1>"; 
// }

// POR METODO POST
if(isset($_POST['title'])&&isset($_POST['description'])){

    echo "<h1>".$_POST['title']."</h1>";
    echo "<h1>".$_POST['description']."</h1>"; 
}

?>