<?php 

    session_start(); // este por si no la has iniciado en la pagina que planeas destruirla, de lo contrario no te destruirĂ¡ nada
    session_destroy();
    session_unset();

    header("location: login.php");
    exit;

?>