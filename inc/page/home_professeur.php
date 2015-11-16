<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 14/10/2015
 * Time: 17:51
 */
if(isset($_SESSION['professeur']))
    $currentUser = $_SESSION['professeur'];
//var_dump($_SESSION['professeur']);
$maSession = Session::getInstance();
$pdo = new Database();
?>


<div id="div_home_professeur">
    <h2>Bienvenue <strong><?php echo $currentUser->getLogin(); ?></strong></h2>
    <div class="menu_prof">
        <a href="#" onclick="switch_div('#div_profil')" class="btn btn-primary">Consulter votre profil</a>
        <a href="#" onclick="switch_div('#div_questions_reponses')"  class="btn btn-primary" class="menu_prof">Consulter vos questions / réponses</a>
        <a href="#" onclick="switch_div('#div_qcm')"  class="btn btn-primary">Consulter vos QCM</a>
    </div>
    <div id="div_profil" class="hide">
        <?php require 'inc/page/professeur/div_profil.php'; ?>
    </div>

    <div id="div_questions_reponses" class="hide">
        <?php require 'inc/page/professeur/div_questions_reponses.php'; ?>
    </div>
    <div id="div_qcm" class="hide">
        <?php require 'inc/page/professeur/div_qcm.php'; ?>

    </div>

</div>