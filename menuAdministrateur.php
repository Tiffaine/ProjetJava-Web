
<html>
	<head>
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Menu Administrateur </title> 
	</head> 
	<body> 
		<?php
			session_start();
			$id = $SESSION["idUtilisateur"];
			if(isset($id)){
				if($id == '1'){
					$connection = new pg_connect(host=localhost dbname=dondusang user=root password=network)
					or die('Connexion impossible : '. pg_last_error());
					$sqlQuery = "select idUtilisateur, nom, prenom from Utilisateur u when u.type like 'medecin'";
					$result = pg_query($sqlQuery) or die ('Echec de la requête : '.pg_last_error());
					if(!$result){
						echo("Echec de la requête </br>");
						echo("<a href=\"index.php\"> Retour </a>");
						exit();
					} else {
						$listeMedecin = $result -> fetch_assoc();
						do {
							echo("<br> Dr ".$listeMedecin['nom']." ".$listeMedecin['prenom']." 
							<a href=\"supprimerMedecin.php?idMedecin=".$listeMedecin['idUtilisateur']."\">Supprimer</a> </br>");
						}while($listeMedecin);
					}
				} else {
					echo ("Vous n'êtes pas autorisé à acceder à ce menu </br>");
					echo ("<a href=\"index.php\"> Retour</a>");
					exit();
				}
			} else {
				echo ("Vous n'êtes pas autorisé à acceder à ce menu </br>");
				echo ("<a href=\"index.php\"> Retour </a>");
				exit();
			}
		?>
	</body>
</html>
