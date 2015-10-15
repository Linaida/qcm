<?php
$maSession = Session::getInstance();
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projet QCM</title>

        <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
        <!-- HEADER -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">

                </div>
                <?php
                if($maSession->read('etudiant')){
                    require "inc/header_etudiant.php";}
                ?>
                <?php
                if($maSession->read('professeur')){
                    require "inc/header_professeur.php";
                }
                ?>
            </div> <!-- Fermeture container-fluid -->

        </nav> <!-- Fermeture navbar -->


        <!-- CONTENT -->
        <div class="container" id="content">