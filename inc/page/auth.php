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
            if ($user->role == "etudiant") {
                $user = new Etudiant($user);
                $mySession->write("etudiant", $user);

            } else {
                $user = new Professeur($user);
                $mySession->write("professeur", $user);
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
<form role="form" action="#" method="POST">

    <div class="form-group kxf">

        <label for="Login">Login</label>

        <input type="text" class="form-control" id="login" name="login" placeholder="Entre Votre Login">

        <label for="Password">Password</label>

        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

    </div>

    <button type="submit" class="btn btn-warning btn-lg" name="submit">Connexion</button>


</form>