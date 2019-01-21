<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page d'inscription </title> 
	</head> 
	<body> 
		
		<?php echo "Inscription";
		echo ("<a href=\"index.php\"> Retour </a>");
		// start a session 

		?>
		<form method ="get" action ="retourInscription.php"> 
			<p> 
				Login : <input type = "text" name="login" /> </br>
				Mot de passe : <input type = "password" name="mdp" /> </br> 
				Validation Mot de passe : <input type = "password" name="validate" /> </br> 
				Nom :  <input type = "text" name="nom" /> </br>
				Prenom : <input type = "text" name="prenom" /> </br>
				Date de naissance :  <input type = "text" name="dateN" /> </br>
				<input type ="submit" value ="connexion" /> 
			</p>
		</form>

		<a href ='index.php'> Retour </a>


		?> 
	</body>
</html>

