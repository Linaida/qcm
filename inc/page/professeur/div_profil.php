<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 16/11/2015
 * Time: 10:14
 */
$user = $currentUser;

?>

<h3>Vos informations</h3>
<p>Vous pouvez changer vos informations en cliquant sur le bouton modifier :</p>
<div class="form-group">
    <form action="index.php" method="POST">

    <label for="login">Votre login : </label>
    <input type="text" name="login" id="login" value="<?php echo $user->getLogin(); ?>" class="form-control" disabled="disabled" >
    <label for="password">Votre mot de passe : </label>
    <input type="text" name="password" id="password" value="<?php echo $user->getPassword(); ?>" class="form-control" disabled="disabled">
    <label for="email">Votre email : </label>
    <input type="text" name="email" id="email" value="<?php echo $user->getEmail(); ?>" class="form-control" disabled="disabled">
        <input type="hidden" name="edit_personne" value="edit_personne">
        <input type="hidden" name="id_personne" value="<?php echo $user->getIdPersonne(); ?>">
<!--    <input type="submit" value="Modifier" class="btn btn-success">-->
    </form>

</div>

