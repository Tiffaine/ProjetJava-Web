<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style1.css"/>
		<title> Connexion </title>
	</head>
	<body>
		<form method ="get" action ="retourConnexion.php"> 
			<p> 
				login : <input type = "text" name="login" /> </br>
				mot de passe : <input type = "password" name="password" /> </br>
				validate : <input type = "password" name="validate" /> </br>
				<input type ="submit" value ="créer un compte" /> 
			</p>
		</form>
		<?php echo "<a href='index.php'> Retour </a>";
		?>
	</body>
</html>

