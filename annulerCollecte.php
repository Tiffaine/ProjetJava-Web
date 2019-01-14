<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/> 

		<title> AnnulerCollecte </title>
	</head>

	<body>
		<?php 
			session_start(); 
			//Connexion à la base de données 
			session_start();
			$id = $SESSION["idUtilisateur"];
			if(isset($id)){
				if($id != '1'){
			
					//Prendre la liste des collectes où l'utilisateur est donneur 
					$maRequete="SELECT refCollecte FROM Donneur WHERE $SESSION["idUtilisateur"]=refUtilisateur";
					$result=$connexion->query($maRequete); 
					if(!$result){
						echo("La requête ne s'est pas faite"); 
						exit(); 
					}


					//On affiche un par un toutes les collectes où l'utilisateur est donneur
					$listeCollecte=$result->fetch_assoc();
					while($listeCollecte){
						$idCollecte=$idCollecte["idCollecte"];
						$date=$date["date"];
						$heure=$heure["heure"];
						$lieu=$lieu["lieu"];
						echo "Collecte n° $idCollecte </br> Date $date </br> Heure $heure </br> Lieu $lieu </br> <a href='desinscriptionCollecte.php?idCollect=$idCollecte'> S incrire au concours </a> "; 
						$listeCollecte=$result->fetch_assoc(); 
					}

					$listeCollecte=$result->fetch_assoc(); 
					if($listeCollecte==0){ 
						echo("Aucune collecte n'a été enregistrée"); 
						echo("<a href=menuDonneur.php> Retour</a>"); 
						exit(); 

					}
				}
				else {
					echo ("<a href=\"index.php\"> Retour </a>");
					exit();
				}
			}
		?> 
	</body>
</html>
