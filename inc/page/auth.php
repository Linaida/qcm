<?php


//require "inc/class/Database.php";
if (isset($_POST['login'])) {

    $myPdo = new Database();
    $mySession = Session::getInstance();
    $myAuth = new Auth($mySession);
    $errorMSg = '';

    try {
        $myValidator = new Validator($_POST);
        if ($myValidator->isValid()) {

            $user = $myAuth->login($myPdo, $_POST['login'], $_POST['password']);

            $mySession->write("personne", new Personne($user));
            if ($user->role == "etudiant") {
                $mySession->write("etudiant", new Etudiant($user));

            } else {
                $mySession->write("professeur", new Professeur($user));
            }

            header("location: ./index.php");
        }
    } catch (ErrorException $e) {
        $errorMSg = $e->getMessage();
    }

}

?>

<h1>CONNEXION</h1><br>
<?php if(!empty($errorMSg)){ ?>
<div id="msg_alert" class="alert alert-danger alert-dismissible " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <strong>Attention !</strong>
    <span id="error_msg"><?php echo $errorMSg."\n\r";   ?></span>
    <span id="empty_msg"></span>
</div>
<?php } ?>
<!-- DEBUT FORMULAIRE -->
<form role="form" action="./index.php" method="POST">

    <div class="form-group ">
        <div id="div_login">
            <label for="Login">Login</label>

            <input type="text" class="form-control" id="login" name="login" placeholder="Entre Votre Login">
        </div>


        <div id="div_password">

            <label for="Password">Password</label>

            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

    </div>

    <button type="submit" class="btn btn-warning btn-lg" name="submit" id="submit_connexion">Connexion</button>


</form>