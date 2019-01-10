//L'administrateur peut supprimer le compte d'un médecin

<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page de connexion </title> 
	</head> 
	<body> 
		<?php echo "Supression d'un compte médecin";
		// start a session 
		session_start();
		$id = $SESSION["idUtilisateur"]
		if(isset($id)){
			if($id == '1'){
				if(isset($_GET["idMedecin"])){
					$idM = $_GET["idMedecin"];
					$connection = new pg_connect(host=localhost dbname=dondusang user=root password=network)
					or die('Connexion impossible : '. pg_last_error());
					$sqlQuery = "select type from Utilisateur u where u.idUtilisateur = ".$idM.";";
					$result = pg_query($sqlQuery)
					or die('Echec de la requête : '.pg_last_error());
					$resultat = $result -> fetch_assoc();
					if(!$resultat){
						echo ("Aucun compte médecin correspondant</br>");
						echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
						exit();
					} else {
						if($resultat == 'medecin'){
							$sqlQuery = "select refCollecte from Medecin where refMedecin = ".$idM.";";
							$result = pg_query($sqlQuery)
							or die('Echec de la requête : '.pg_last_error());
							$listeCollecte = $result -> fetch_assoc();
							if(!$listeCollecte){
								$sqlQuery = "DELETE from Utilisateur where idUtilisateur = ".$idM.";";
								$result = pg_query($sqlQuery)
								or die('Echec de la requête : '.pg_last_error());
								if(!$result){
									echo("Echec de la requête</br>");
									echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
									exit();
								} else {
									echo("Suppression Réussie</br>");
									echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
									exit(); 
								}
							} else {
								do{
									$sqlQuery = "DELETE from Donneur where refCollecte = ".$listeCollecte['refCollecte'].";";
									$result = pg_query($sqlQuery)
									or die('Echec de la requête : '.pg_last_error());
									if(!$result){
										echo("Echec de la requête</br>");
										echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
										exit();
									}
									$sqlQuery = "DELETE from Collecte where idCollecte = ".$listeCollecte['refCollecte'].";";
									$result = pg_query($sqlQuery)
									or die('Echec de la requête : '.pg_last_error());
									if(!$result){
										echo("Echec de la requête</br>");
										echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
										exit();
									}
									$sqlQuery = "DELETE from Medecin where refCollecte = ".$listeCollecte['refCollecte'].";";
									$result = pg_query($sqlQuery)
									or die('Echec de la requête : '.pg_last_error());
									if(!$result){
										echo("Echec de la requête</br>");
										echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
										exit();
									}
								}while($listeCollecte);
								$sqlQuery = "select refCollecte from Medecin where refMedecin = ".$idM.";";
								$result = pg_query($sqlQuery)
								or die('Echec de la requête : '.pg_last_error());
								if(!$result){
									echo("Echec de la requête</br>");
									echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
									exit();
								}
								echo("Suppression Réussie</br>");
								echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
								exit(); 
							}
						} else {
							echo ("Aucun compte médecin correspondant</br>");
							echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
							exit();
						}
					}
				} else {
					echo ("Aucun compte médecin correspondant</br>");
					echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
					exit();
				}
			} else {
				echo ("Vous n'êtes pas autorisé à acceder à cette page</br>");
				echo ("<a href=\"index.php\"> Retour </a>");
				exit();
			}
		} else {
			echo ("Vous n'êtes pas autorisé à acceder à cette page</br>");
			echo ("<a href=\"index.php\"> Retour </a>");
			exit();
		}
		?>
	</body>
</html>
