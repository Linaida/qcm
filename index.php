<?php

require "inc/class/Database.php";
// 1 - Check si l'utilisateur est loggé
    // Si oui : envoyer l'utilisateur sur sa page d'accueil :
/*
*if(est_loggé){ require "inc/home.php"; }
*
* */
    // Si non : envoyer l'utilisateur sur la page d'authentification :
   // else{ require "inc/auth.php"; }

$myPdo = new Database();

echo var_dump($myPdo->query("Select * From personne"));
