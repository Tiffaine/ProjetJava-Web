<?php
// start a session 
//session_start();
if(isset($_POST['login'] and $_POST['mdp']){
	$login = $_GET['login'];
	var_dump($login);
	$mdp = $_GET['mdp'];
	var_dump($mdp);
} else {
	echo ("Login ou Password invalide !</br>");
	echo ("<a href=\"connexion.php\"> Retour à la connexion </a>");
}
?>


