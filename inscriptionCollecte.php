<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/> 

		<title> desinscriptionCollecte </title>
	</head>

	<body>
		<?php 
			session_start(); 
			//Connexion à la base de données 
			$id = $SESSION["idUtilisateur"];
			if($id != '1'){
				//Formulaire 
				<form method ="get" action ="retourParticipation?idCollect=$idCollecte.php"> 
			<p> 
					Groupe Sanguin : <select name="groupeSanguin" size ="4"> 
					<option>A</option>
					<option>B</option>
					<option>AB</option>
					<option>O</option>
					</select> </br>
				
					Rhésus : 
					<label> Positif + 
					<input type="radio" name="rhesus" value ="positif"> 
					</label> </br> 
					<label> Négatif - 
					<input type="radio" name="rhesus" value ="negatif"> 
					</label></br>	

					Genre :
					<label> Féminin
					<input type="radio" name="genre" value ="feminin"> 
					</label> </br> 
					<label> Masculin
					<input type="radio" name="genre" value ="masculin"> 
					</label></br>	
					<label> Autre 
					<input type="radio" name="genre" value="masculin"> 
					</label></br>
					
					//Get nbPart et nbMaxPart 
					if($nbPart<=$nbMaxPart){
						<input type ="submit" value ="connexion" /> 
					}
					else {
						echo "La collecte est complète ! ";
					}
			}
			else {
				echo ("<a href=\"index.php\"> Retour </a>");
			}
			</p>
		</form>

			
		?> 
	</body>
</html>
