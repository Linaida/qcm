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
if (isset($_POST['edit_personne']) && !empty($_POST['edit_personne'])) {
    $myPdo = new Database();
$user = $myPdo->get_personne($_POST['id_personne']);
    $myPdo->edit_personne($user);
}

// 1 - Check si l'utilisateur est loggé
// Si oui : envoyer l'utilisateur sur sa page d'accueil :

if ($maSession->read('auth')) {

    if (isset($_SESSION['etudiant']) && !empty($_SESSION['etudiant'])) {
        require "inc/page/home_etudiant.php";
    }

    if (isset($_SESSION['professeur']) && !empty($_SESSION['professeur'])) {
        require "./inc/page/home_professeur.php";
    }

    } else {
        // Si non : envoyer l'utilisateur sur la page d'authentification :
        require "inc/page/auth.php";
    }

    require "inc/footer.php";

?>
