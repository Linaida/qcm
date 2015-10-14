<?php

spl_autoload_register('app_autoload');

function app_autoload($class)
{
    require "inc/class/$class.php";
}


require "inc/header.php";

$maSession = Session::getInstance();

if (isset($_GET['action']) && $_GET['action'] == "destruct") {
    $maSession->destroy();
    header("location: ./index.php");
}

// 1 - Check si l'utilisateur est loggé
// Si oui : envoyer l'utilisateur sur sa page d'accueil :

if ($maSession->read('auth')) {

    if ($maSession->read('etudiant')) {
        require "inc/page/home_etudiant.php";
    }

    if ($maSession->read('professeur')) {
        require "inc/page/home_professeur.php";
    }
    // Si c'est une deconnexion

} else {  // Si non : envoyer l'utilisateur sur la page d'authentification :
    require "inc/page/auth.php";
}
?>



<?php require "inc/footer.php"; ?>
