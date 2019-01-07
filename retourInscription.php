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

		$nom = $_GET['nom']; 
		$prenom = $_GET['prenom']; 
		$login = $_GET['login']; 
		$password=$_GET['password']; 
		$rhesus=$_GET['rhesus']; 
		$genre=$_GET['genre']; 


		$_SESSION['nom']=$nom; 
		$_SESSION['prenom']=$prenom; 
		$_SESSION['login']=$login; 
		$_SESSION['password']=$password; 
		$_SESSION['rhesus']=$rhesus; 
		$_SESSION['genre']=$genre; 

		$nom = $_SESSION['nom']; 
		$prenom = $_SESSION['prenom']; 
		$login = $_SESSION['login']; 
		$password = $_SESSION['password']; 
		$rhesus = $_SESSION['rhesus']; 
		$genre = $_SESSION['genre']; 


		//Connexion à la base :) 

		?> 
	</body>
</html>

