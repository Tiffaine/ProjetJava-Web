<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> RetourParticipation </title> 
	</head> 
	<body> 
		<?php echo "Connexion";
		// start a session 
		session_start();

		$groupeSanguin=$_GET['groupeSanguin'];
		$rhesus=$_GET['rhesus']; 
		$genre=$_GET['genre']; 

		$_SESSION['groupeSanguin']=$groupeSanguin;
		$_SESSION['rhesus']=$rhesus; 
		$_SESSION['genre']=$genre; 


		//Connexion à la base :) 
		$connection = new pg_connect(host=localhost dbname=dondusang user=root password=network)
					or die('Connexion impossible : '. pg_last_error());
					$sqlQuery = "INSERT INTO Donneur ('.$SESSION["idUtilisateur"].','.$idCollecte.','.$groupeSanguin.','.$rhesus.');";
					$result = pg_query($sqlQuery)
					or die('Echec de la requête : '.pg_last_error());
					$resultat = $result -> fetch_assoc();
					if(!$resultat){
						echo ("Aucun compte médecin correspondant</br>");
						echo ("<a href=\"menuAdministrateur.php\"> Retour </a>");
						exit();
					}

		?> 
	</body>
</html>

