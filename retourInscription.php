<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page d'inscription </title> 
	</head> 
	<body> 
		<?php echo "Connexion";
			// start a session 
			session_start();
			if(isset($_GET["login"]) and 
			   isset($_GET["mdp"]) and 
			   isset($_GET["validate"]) and
			   isset($_GET["nom"]) and 
			   isset($_GET["prenom"]) and 
			   isset($_GET["dateN"])){
				$login = $_GET["login"];
				$mdp = $_GET["mdp"];
				$validate = $_GET["validate"];
				$nom = $_GET["nom"];
				$prenom = $_GET["prenom"];
				$dateN = $_GET["dateN"];
				if($mdp==$validate){
					$connection = pg_connect("host=localhost dbname=dondusang user=admin password = projetgroupe4")
					or die ('Connexion impossible : '.pg_last_error());
					$connection->set_charset("utf8");
					$sqlQuery = "select login from Utilisateur";
					$sqlLogin = pg_query($sqlQuery) or die ('Echec de la requête : '. pg_last_error());
					if($login != $sqlLogin){
						
						$result = pg_query($sqlQuery);
						or die ('Echec de la requete : '. pg_last_error());
						echo ("<a href=\"connexion.php\"> Compte créé</a>");
						exit();
					} else {
						echo ("<a href=\"inscription.php\"> Login déjà utilisé</a>");
						exit();
					}
				} else {
					echo ("<a href=\"inscription.php\"> Veuillez valider votre mot de passe </a>");
					exit();
				}
			} else {
				echo ("<a href=\"inscription.php\"> Saisie incorrecte</a>");
				exit();
			}
		?> 
	</body>
</html>

