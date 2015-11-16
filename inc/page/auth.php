<?php


//require "inc/class/Database.php";
if (isset($_POST['login'])) {

    $myPdo = new Database();
    $mySession = Session::getInstance();
    $myAuth = new Auth($mySession);

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
        echo $e->getMessage();
    }

}

?>

<h1>CONNEXION</h1><br>

<!-- DEBUT FORMULAIRE -->
<form role="form" action="./index.php" method="POST">

    <div class="form-group ">

        <label for="Login">Login</label>

        <input type="text" class="form-control" id="login" name="login" placeholder="Entre Votre Login">

        <label for="Password">Password</label>

        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

    </div>

    <button type="submit" class="btn btn-warning btn-lg" name="submit">Connexion</button>


</form>