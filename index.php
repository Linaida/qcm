<?php

require "inc/header.php";

//require "inc/class/Personne.php";
// 1 - Check si l'utilisateur est loggé
    // Si oui : envoyer l'utilisateur sur sa page d'accueil :
/*
*if(est_loggé){ require "inc/home.php"; }
*
* */
    // Si non : envoyer l'utilisateur sur la page d'authentification :
   // else{ require "inc/auth.php"; }
?>
<div class="container" id="content">
<div id="connexion">
	<?php require "inc/auth.php"; ?>
</div>
    

</div>


<?php
require "inc/footer.php";