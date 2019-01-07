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
				GroupeSanguin :  <input type = "text" name="groupeSanguin" /> </br>
				Rhesus :  <input type = "text" name="rhesus" /> </br>
				Genre :  <input type = "text" name="genre" /> </br>
				Date de naissance :  <input type = "text" name="DateNaissance" /> </br>
				nom :  <input type = "text" name="nom" /> </br>
				prenom : <input type = "text" name="prenom" /> </br>
				 <input type = "text" name="login" /> </br>
				login : <input type = "text" name="login" /> </br>
				mot de passe : <input type = "text" name="password" /> </br> 
				<input type ="submit" value ="connexion" /> 
			</p>
		</form>

		<?php echo "<a href ='Page1.php'> S'incrire </a>; 


		?> 
	</body>
</html>

