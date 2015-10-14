


<?php

require "inc/class/Database.php";
$myPdo = new Database();

//echo var_dump($myPdo->query("Select * From personne"));
 ?>

<h1>CONNEXION</h1><br>
		
<!-- DEBUT FORMULAIRE -->
		<form role="form" action="../function/verif.php" method="POST">

    <div class="form-group kxf">

   				<label for="Login">Login</label>

   				<input type="text" class="form-control" id="login" name="login" placeholder="Entre Votre Login">

   				<label for="Password">Password</label>

   				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
          
    </div>

  				<button type="submit" class="btn btn-warning btn-lg" name="submit">Connexion</button>

  	

		</form> 			