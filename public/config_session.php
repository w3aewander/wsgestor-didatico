<?php

    session_start();

    if ( !empty($_POST['logado']) && !empty($_POST['nome'])  ){
        echo '<script>alert($_POST["nome"]);</script>';
        $_SESSION["logado"] = $_POST['logado'];
        $_SESSION["nome"] = $_POST['nome'];
        //$_SESSION["email"] = $_POST['email'];
        $_SESSION['accessToken'] = $_POST["accessToken"];
    } else {
        require __DIR__ . "/../includes/acesso_negado.inc.php";
    }
    
 ?>