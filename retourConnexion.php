<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page de connexion </title> 
	</head> 
	<body> 
		<br> Connexion </br>
		<?php
		// start a session 
		//session_start();
		if(isset($_POST['login'] and $_POST['mdp']){
			$login = $_GET['login'];
			var_dump($login);
			$mdp = $_GET['mdp'];
			var_dump($mdp);
			if(($login != "") and ($mdp != "")){
				$pgsql_conn = pg_connect("dbname=dondusang host=localhost user=admin password=projetgroupe4");
				if(!$pgsql_conn){
					echo(pg_last_error($pgsql_conn));
					exit();
				}
				$sqlQuery = "select idUtilisateur, type from Utilisateur u where u.login like '" . $login."' and u.mdp like '" . $mdp."'";
				$result = pg_query($pgsql_conn, $sqlQuery)
				if(!$result){
					echo ("Login ou Password invalide !</br>");
					echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
					exit();
				} else {
					$resultat = pg_fetch_assoc($result);
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
		?>
	</body>
</html>

