<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page de connexion </title> 
	</head> 
	<body> 
		<?php echo "Connexion";
		// start a session 
		session_start();
		if(isset($_GET['login'] and $_GET['mdp']){
			$login = $_GET['login'];
			$mdp = $_GET['mdp'];
			if(($login != "") and ($mdp != "")){
				$connection = new pg_connect(host=localhost dbname=dondusang user=root password=network)
				or die('Connexion impossible : '. pg_last_error());
				//$connection->set_charset("utf8");
				$sqlQuery = "select idUtilisateur, type from Utilisateur u where u.login like '" . $login."' and u.mdp like '" . $mdp."'";
				$result = pg_query($sqlQuery)
				or die('Echec de la requête : '.pg_last_error());
				if(!$result){
					echo ("Login ou Password invalide !</br>");
					echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
					exit();
				} else {
					$resultat = $result->fetch_assoc();
					if($resultat != NULL){
						if($resultat["idUtilisateur"] != NULL){
							//session_start();
							$SESSION["idUtilisateur"] = $resultat["idUtilisateur"];
							if($resultat["idUtilisateur"] == '1'){
								echo ("Vous êtes connecté en tant qu'administrateur </br>");
								echo ("<a href=\"menuAdministrateur.php\"> Menu administrateur </a>");
								exit();
							} else {
								if($resultat["type"] == 'donneur'){
									echo("Vous êtes connecté </br>");
									echo ("<a href=\"menuDonneur.php\"> Menu </a>");
									exit();
								} else {
									echo ("Login ou Password invalide !</br>");
									echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
									exit();
								}
							}
						} else {
							echo ("Login ou Password invalide !</br>");
							echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
							exit();
						}
					} else {
						echo ("Login ou Password invalide !</br>");
						echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
						exit();
					}
				}
			} else {
				echo ("Login ou Password invalide !</br>");
				echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
				exit();
			}
		} else {
			echo ("Login ou Password invalide !</br>");
			echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
			exit();
		}
	</body>
</html>

