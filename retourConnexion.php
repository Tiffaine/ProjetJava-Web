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
			echo(pg_last_error($pgsql_conn));
			exit();
		//} else {
			//echo("Connexion etablie\n");
		}
		$sql_query = "select idUtilisateur, type from Utilisateur u where u.login like '" . $login."' and u.mdp like '" . $mdp."';";
		echo("requete id type : ".$sql_query);
		$result = pg_query($pgsql_conn, $sql_query);
		if(!$result){
			echo("Login ou password invalide !\n");
			echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
			exit();
		} else {
			//echo("resultat disponible\n");
			$resultat = pg_fetch_assoc($result);
			if($resultat != NULL){
				echo("resultat exploitable\n");
			} else {
				echo("resultat nul\n");
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


