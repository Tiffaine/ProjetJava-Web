<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page d'inscription </title> 
	</head> 
	<body> 
		<?php echo "Inscription";
		// start a session 

		?>
		<form method ="get" action ="retourInscriptionphp"> 
			<p> 
				Login : <input type = "text" name="login" /> </br>
				Mot de passe : <input type = "text" name="password" /> </br> 
				Nom :  <input type = "text" name="nom" /> </br>
				Prenom : <input type = "text" name="prenom" /> </br>
				Date de naissance :  <input type = "text" name="DateNaissance" /> </br>
				Genre :  <input type = "text" name="genre" /> </br>
				GroupeSanguin :  <input type = "text" name="groupeSanguin" /> </br>
				Rhesus :  <input type = "text" name="rhesus" /> </br>
				<input type ="submit" value ="connexion" /> 
			</p>
		</form>

		<?php echo "<a href ='index.php'> S'incrire </a>; 


		?> 
	</body>
</html>

