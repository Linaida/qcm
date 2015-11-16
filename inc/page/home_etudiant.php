<!--
Interface de l'utilisateur connecté
-->
<?php

if(isset($_SESSION['etudiant']))
    $currentUser = $_SESSION['etudiant'];
?>

<div id="div_home_professeur">
    <h2>Bienvenue <strong><?php echo $currentUser->getLogin(); ?></strong></h2>
    <div class="menu_prof">
        <a href="#" onclick="switch_div('#div_infos')" class="btn btn-primary">Consulter votre informations</a>
        <a href="#" onclick="switch_div('#div_qcm_disponibles')"  class="btn btn-primary" class="menu_prof">QCM disponibles</a>
        <a href="#" onclick="switch_div('#div_qcm_resultats')"  class="btn btn-primary">Résultat QCM</a>
    </div>
    <div id="div_profil" class="hide">
        <?php require 'inc/page/professeur/div_infos.php'; ?>
    </div>

    <div id="div_questions_reponses" class="hide">
        <?php require 'inc/page/professeur/div_qcm_disponibles.php'; ?>
    </div>
    <div id="div_qcm" class="hide">
        <?php require 'inc/page/professeur/div_qcm_resultats.php'; ?>

    </div>

</div>