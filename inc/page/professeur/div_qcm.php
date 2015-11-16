<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 16/11/2015
 * Time: 10:10
 */
?>
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
            <td><?php echo $question->question; ?></td>
            <td><?php echo $question->reponses; ?></td>
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
