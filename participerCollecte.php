<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/> 

		<title> ParticiperCollecte </title>
	</head>

	<body>
		echo ("<a href=\"index.php\"> Retour </a>");
		<?php 
			session_start(); 
			//Connexion à la base de données 



			$maRequete="SELECT idCollecte,date,heure,lieu FROM Collecte";
			$result=$connexion->query($maRequete); 
			if(!$result){
				echo("La requête ne s'est pas faite"); 
				exit(); 
			}


			//On affiche un par un toutes les collectes 
			$listeCollecte=$result->fetch_assoc();
			while($listeCollecte){
				$idCollecte=$idCollecte["idCollecte"];
				$date=$date["date"];
				$heure=$heure["heure"];
				$lieu=$lieu["lieu"];
				echo "Collecte n° $idCollecte </br> Date $date </br> Heure $heure </br> Lieu $lieu </br> <a href='inscriptionCollecte.php?idCollect=$idCollecte'> S incrire au concours </a> "; 
				$listeCollecte=$result->fetch_assoc(); 
			}

			$listeCollecte=$result->fetch_assoc(); 
			if($listeCollecte==0){ 
				echo("Aucune collecte n'a été enregistrée"); 
				echo("<a href=menuDonneur.php> Retour</a>"); 
				exit(); 
			}
		?> 
	</body>
</html>
