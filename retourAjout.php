//Connexion à la bdd, execution de la requête et retour au menu Administrateur

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
		$id = $SESSION["idUtilisateur"];
		if(isset($id)){
			if($id == '1'){
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
						$connection = pg_connect("host=localhost dbname=dondusang user=root password = network")
						or die ('Connexion impossible : '.pg_last_error());
						$connection->set_charset("utf8");
						$sqlQuery = "select login from Utilisateur";
						$sqlLogin = pg_query($sqlQuery) 
						or die ('Echec de la requête : '. pg_last_error());
						if($login != $sqlLogin){
							$sqlQuery = "insert into Utilisateur (login ,mdp, type, nom, prenom, dateN)
							values(".$login.",".$mdp.",'medecin',".$nom.",".$prenom.",".$dateN.");";
							$result = pg_query($sqlQuery);
							or die ('Echec de la requete : '. pg_last_error());
							echo ("<a href=\"menuAdministrateur.php\">Compte créé</a>");
							exit();
						} else {
							echo ("<a href=\"ajoutMedecin.php\"> Login déjà utilisé</a>");
							exit();
						}
					} else {
						echo ("<a href=\"ajoutMedecin.php\"> Veuillez valider votre mot de passe </a>");
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
