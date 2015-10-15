<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 14/10/2015
 * Time: 17:51
 */
if(isset($_SESSION['professeur']))
    $currentUser = $_SESSION['professeur'];

$maSession = Session::getInstance();
$pdo = new Database();
?>


<div id="div_home_professeur">
    <h2>Bienvenue <strong><?php echo $currentUser->getLogin(); ?></strong></h2>
    <table>
       <thead>
       <tr>
           <td>Titre</td>
           <td>Réponses</td>
           <td>Thème</td>
       </tr>
       </thead>
        <tbody>
        <?php

        $myQuestions = $currentUser->consulter_question($pdo);

        foreach($myQuestions as $question){
            ?>
<tr>
    <td><?php echo $question->titre; ?></td>
    <td><?php echo $question->reponse; ?></td>
    <td><?php echo $question->theme; ?></td>
</tr>
        <?php
        }

        ?>
        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
</div>