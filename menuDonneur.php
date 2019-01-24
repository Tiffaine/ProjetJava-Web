<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/> 

		<title> Menu Donneur </title>
	</head>

	<body>
		<?php 
			session_start(); 
			if($_SESSION["idUtilisateur"]!='1'){
				echo ("<a href=\"participerCollecte.php\"> Participer à une collecte </a>"); <br> 
				echo ("<a href=\"AnnulerCollecte.php\"> Annuler ma participation à une collecte </a>"); <br> 
			}
			else {
				echo ("Vous n'êtes pas autorisé à acceder à ce menu </br>");
				echo ("<a href=\"index.php\"> Retour à l'accueil </a>");
				exit();
			}
		?> 
	</body>
</html>
