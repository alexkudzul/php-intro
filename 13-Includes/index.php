<?php
    require_once 'includes/cabecera.php';
?>
    <!-- 
        ### INCLUDE ###

        inlude, nos permite incluir ficheros las veces que se necesite,, ejemplo, se puede incluir dos veces:
        include 'includes/cabecera.php';
        include 'includes/cabecera.php'; 
        y no pasa nada, simplemente lo agrega de nuevo

        ### INCLUDE_ONCE ###

        include_once, todo lo contrario, solo permite incluir una vez, aunque se tenga dos, solo ejecutara una

        ### REQUIRE ###

        require, Permite incluir archivos php, solo que si falla algo en la pagina, se detiene todo y nos 
        permite incluir las veces que se necesite como include 

        ### REQUIRE_ONCE ###

        require_once, muy parecido con require, solo que no permite incluir varias veces un fichero

        ############# Se recomienda usar require_once ###############

        por que es el mas estrico en cuanto las funciones que realiza

     -->
    <!-- Contenido -->
    <div>
        <h2>Esta es la pagina de Inicio</h2>
        <p>Texto de prueba de la pagina de Incio</p>
    </div>

<?php
    require_once 'includes/footer.php';
?>