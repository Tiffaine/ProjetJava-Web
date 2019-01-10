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

		//Requete
		$maRequete="INSERT INTO Donneur ($SESSION["idUtilisateur"],$idCollecte,$groupeSanguin,$_SESSION['rhesus']=$rhesus;) ";
			$result=$connexion->query($maRequete); 
			if(!$result){
			echo("La requête ne s'est pas faite"); 
			exit(); 
			}

		?> 
	</body>
</html>

