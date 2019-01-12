//l'administrateur peut ajouter un médecin en rentrant toutes les informations nécessaires


<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page de connexion </title> 
	</head> 
	<body> 
		<?php echo "Supression d'un compte médecin";
		// start a session 
		session_start();
		$id = $SESSION["idUtilisateur"];
		if(isset($id)){
			if($id == '1'){
				echo('<form method="get" action="retourAjout.php">');
				echo('<p>');
				echo('Login : <input type = "text" name="login" /> </br>');
				echo('Mot de passe : <input type = "password" name="mdp" /> </br>');
				echo('Validation Mot de passe : <input type = "password" name="validate" /> </br>');
				echo('Nom :  <input type = "text" name="nom" /> </br>');
				echo('Prenom : <input type = "text" name="prenom" /> </br>');
				echo('Date de naissance :  <input type = "text" name="dateN" /> </br>');
				echo('<input type ="submit" value ="connexion" />');
				echo('</p>');
				echo('</form>');
			} else {
				echo ("Vous n'êtes pas autorisé à acceder à cette page</br>");
				echo ("<a href=\"index.php\"> Retour </a>");
				exit();
			}
		} else {
			echo ("Vous n'êtes pas autorisé à acceder à cette page</br>");
			echo ("<a href=\"index.php\"> Retour </a>");
			exit();
		}
		?>
	</body>
</html>		
