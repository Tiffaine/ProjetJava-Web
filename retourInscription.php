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
			if(isset($_GET["login"])&&
			   isset($_GET["mdp"])&&
			   isset($_GET["validate"])&&
			   isset($_GET["nom"])&&
			   isset($_GET["prenom"])&&
			   isset($_GET["dateNaissance"])&&
			   isset($_GET["genre"])&&
			   isset($_GET["groupeSanguin"])&&
			   isset($_GET["rhesus"])){
				$login = $_GET["login"];
				$mdp = $_GET["mdp"];
				$validate = $_GET["validate"];
				$nom = $_GET["nom"];
				$prenom = $_GET["prenom"];
				$dateNaissance = $_GET["dateNaissance"];
				$genre = $_GET["genre"];
				$groupeSanguin = $_GET["groupeSanguin"];
				$rhesus = $_GET["rhesus"];
				if($mdp==$validate){
					$connection = pg_connect("host=localhost dbname=dondusang user=root password = network")
					or die ('Connexion impossible : '.pg_last_error());
					$connection->set_charset("utf8");
					$sqlQuery = "select login from Donneur";
					$sqlLogin = pg_query($sqlQuery) or die ('Echex de la requête : ". pg_last_error());
					if($login != $sqlLogin){
						$sqlQuery = "insert into Donneur (login ,mdp, nom, prenom, genre, dateN, groupeS, rhesus)
						values(".$login.",".$mdp.",".$nom.",".$prenom.",".$genre.",".$dateNaissance.",".$groupeSanguin.",".$rhesus.");";
						$result = pg_query($sqlQuery)
						or die ('Echec de la requete : '. pg_last_error());
						echo ("<a href=\"connexion.php\"> Compte créé</a>");
						exit();
					} else {
						echo ("<a href=\"inscription.php\"> Login déjà utilisé</a>");
						exit();
				} else {
					echo ("<a href=\"inscription.php\"> Saisie incorrecte</a>");
					exit();
				}
			} else {
				echo ("<a href=\"inscription.php\"> Saisie incorrecte</a>");
				exit();
			}
		?> 
	</body>
</html>

