<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/> 

		<title> desinscriptionCollecte </title>
	</head>

	<body>
		<?php 
			session_start(); 
			//Connexion à la base de données 

			



			$maRequete="DELETE FROM Donneur WHERE refCollecte=$idCollecte and refUtilisateur=$SESSION["idUtilisateur"]";
			$result=$connexion->query($maRequete); 
			if(!$result){
			echo("La requête ne s'est pas faite"); 
			exit(); 
			}

			echo("<a href=\"index.php\"> Retour à l'accueil </a>");
			
		?> 
	</body>
</html>
