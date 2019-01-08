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
		if(isset($_POST['login'] and $_POST['mdp']){
			$login = $_POST['login'];
			$mdp = $_POST['mdp'];
			if(($login != "") and ($mdp != "")){
				$connection = new pg_connect(host=localhost dbname=dondusang user=root password=network)
				or die('Connexion impossible : '. pg_last_error());
				//$connection->set_charset("utf8");
				$sqlQuery = "select login, motDePasse from Donneur d where d.login like '" . $login."' and d.motDePasse like '" . $mdp."'";
				$result = pg_query($sqlQuery)
				or die('Echec de la requête : '.pg_last_error());
				if(!$result){
					echo ("<br> la requête ne s'est pas exécutée </br>");
					echo ("Veuillez remplir tous les champs ! <br />");
					echo ("<a href=\"index.php\"> Retour à l'index</a>");
					exit();
				} else {
					//echo ("<br> La requête a aboutie </br>");
					$resultat = $result->fetch_assoc();
					//echo ("<br> " . $resultat . "</br>");
					if($resultat === NULL) {
						echo ("Login ou mot de passe invalide ! <br />");
						echo ("<a href=\"index.php\"> Retour à l'index</a>");
						exit();
					} else {
						if ($resultat["numUtilisateur"] != NULL) {
							session_start();
							$_SESSION["numUtilisateur"] = $resultat["numUtilisateur"];
							if ($resultat["numUtilisateur"] == '1') {
								echo ("Vous êtes connecté en administrateur <br />");
								echo ("<a href=\"menuAdministrateur.php\"> Aller au menu admin</a>");
								exit();
							} else {
								echo ("Vous êtes connecté <br />");
								echo ("<a href=\"listeConcours.php\"> Aller au menu utilisateur</a>");
								exit();
							}
						}
					}
					pg_free_result($result);
				}
				pg_close($dondusang);
			} else {
				echo ("<br> Veuillez remplir tous les champs ! </br>");
				echo ("<a href=\"index.php\"> Retour à l'index</a>");
				exit();
			}
		} else {
			echo ("Veuillez remplir tous les champs ! <br />");
			echo ("<a href=\"index.php\"> Retour à l'index</a>");
			exit();
		}
		?>
		<?php echo "<a href ='index.php'> S'inscrire </a>"; 


		?> 
	</body>
</html>

