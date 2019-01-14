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

			
			$connection = pg_connect("host=localhost dbname=dondusang user=root password = network")
						or die ('Connexion impossible : '.pg_last_error());
						$connection->set_charset("utf8");
						$sqlQuery = "select login from Utilisateur";
						$sqlLogin = pg_query($sqlQuery) 
						or die ('Echec de la requête : '. pg_last_error());
						if($login != $sqlLogin){
							$sqlQuery = "DELETE FROM Donneur WHERE refCollecte=$idCollecte and refUtilisateur=$SESSION["idUtilisateur"]";
							
							$result = pg_query($sqlQuery);
							or die ('Echec de la requete : '. pg_last_error());
							echo ("<a href=\"menuAdministrateur.php\">Compte créé</a>");
							exit();
						}

			echo("<a href=\"index.php\"> Retour à l'accueil </a>");
			
		?> 
	</body>
</html>
