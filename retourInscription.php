<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page d'inscription </title> 
	</head> 
	<body> 
		<?php // start a session 
			//session_start();
			if(isset($_POST["login"]) and 
			   isset($_POST["mdp"]) and 
			   isset($_POST["validate"]) and
			   isset($_POST["nom"]) and 
			   isset($_POST["prenom"]) and 
			   isset($_POST["dateN"])){
				$login = $_POST["login"];
				var_dump($login);
				$mdp = $_POST["mdp"];
				var_dump($mdp);
				$validate = $_POST["validate"];
				var_dump($validate);
				$nom = $_POST["nom"];
				var_dump($nom);
				$prenom = $_POST["prenom"];
				var_dump($prenom);
				$dateN = $_POST["dateN"];
				var_dump($dateN);
				if($mdp==$validate){
					echo("code bon");
					$pgsql_conn = pg_connect("dbname=dondusang host=localhost user=admin password=projetgroupe4");
					if(!$pgsql_conn){
						echo("connexion eronnee");
						echo(pg_last_error($pgsql_conn));
						exit();
					} else {
						echo("connexion erronee");
					}
					$sql_query = "select login from Utilisateur u where u.login like '".$login"';";
					echo($sql_query);
					$sql_login = pg_query($pgsql_conn, $sql_query);
					echo($sql_login);
					if(pg_num_rows($sql_login) == '0'){
						echo("On peut inscrire la personne");
					} else {
						echo ("Login déjà utilisé !");
						echo ("<a href=\"inscription.php\"> Retour</a>");
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



