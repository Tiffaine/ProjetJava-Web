<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Connexion </title> 
	</head> 
	<body> 
		<?php echo "Connexion";
		echo ("<a href=\"index.php\"> Retour </a>");
		// start a session 
		session_start();

		?>
		<form method ="get" action ="retourConnexion.php"> 
			<p> 
				login : <input type = "text" name="login" /> </br>
				mot de passe : <input type = "password" name="mdp" /> </br> 
				<input type ="submit" value ="connexion" /> 
			</p>
		</form>

		<?php echo "<a href ='index.php'> S'inscrire </a>"; 


		?> 
	</body>
</html>

