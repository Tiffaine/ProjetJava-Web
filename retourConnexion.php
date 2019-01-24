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
if(isset($_POST['login']) and isset($_POST['mdp'])){
	$login = $_POST['login'];
	//var_dump($login);
	$mdp = $_POST['mdp'];
	//var_dump($mdp);
	if(($login != "") and ($mdp != "")){
		//echo("Coucou\n");
		$pgsql_conn = pg_connect("dbname=dondusang host=localhost user=admin password=projetgroupe4");
		if(!$pgsql_conn){
			echo("Connexion non établie\n");
			echo(pg_last_error($pgsql_conn));
			exit();
		} else {
			echo("Connexion etablie\n");
		}
		$sql_query = "select idUtilisateur, type from Utilisateur u where u.login like '" . $login."' and u.mdp like '" . $mdp."';";
		//echo("requete id type : ".$sql_query);
		$result = pg_query($pgsql_conn, $sql_query);
		if(!$result){
			echo("Login ou password invalide !\n");
			exit();
		} else {
			//echo("resultat disponible </br>");
			$resultat = pg_fetch_assoc($result);
			//var_dump($resultat);
			if(($resultat != NULL) and ($resultat["idutilisateur"] != NULL)){
				session_start();
				$_SESSION["id_user"] = $resultat["idutilisateur"];
				var_dump($SESSION["id_user"]);
				if($_SESSION["id_user"] == "1"){
					echo ("Vous êtes connecté en tant qu'administrateur </br>");
					echo ("<br> <a href=\"menuAdministrateur.php\"> Menu administrateur </a> </br>");
					echo ("<br> <a href=\"connexion.php\"> Retour </a> </br>");
					exit();
				} else {
					if($resultat["type"] == "donneur"){
						echo("Vous êtes connecté </br>");
						echo ("<br> <a href=\"menuDonneur.php\"> Menu </a> </br>");
						echo ("<br> <a href=\"connexion.php\"> Retour à la connexion </a> </br>");
						exit();
					} else {
						echo ("<br> Vous n'avez pas accès à ce site !</br>");
						echo ("<br> <a href=\"connexion.php\"> Retour à la connexion </a> <br>");
						exit();
					}
				}
			} else {
				echo ("Login ou Password invalide !</br>");
				echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
			}		
		}
	} else {
		echo ("Login ou Password invalide !</br>");
		echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
	}
} else {
	echo ("Login ou Password invalide !</br>");
	echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
}
?>
</body>
</html>






