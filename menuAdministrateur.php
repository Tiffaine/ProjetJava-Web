
<html>
	<head>
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Menu Administrateur </title> 
	</head> 
	<body> 
		<?php
			session_start();
			if($SESSION["idUtilisateur"] == '1'){
				
			} else {
				echo ("Vous n'êtes pas autorisé à acceder à ce menu </br>");
				echo ("<a href=\"index.php\"> Retour à l'accueil </a>");
				exit();
			}
		?>
	</body>
</html>
