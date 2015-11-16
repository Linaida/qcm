<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 16/11/2015
 * Time: 10:10
 */
?>

<?php
try{
    ?>

    <?php
    $myQuestions = $currentUser->consulter_question($pdo);
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
    foreach($myQuestions as $question){

        ?>
        <tr>
            <td><?php echo $question->question; ?></td>
            <td><?php echo $question->reponses; ?></td>
            <td><?php echo $question->theme; ?></td>
        </tr>


        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
        </table>
    <?php
    }

}catch (Exception $e){
    ?>
    <div id="msg_alert" class="alert alert-danger alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <strong>Attention !</strong>
        <span id="error_msg"><?php echo $e->getMessage()."\n\r";   ?></span>
        <span id="empty_msg"></span>
    </div>
<?php }?>

