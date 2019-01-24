<html> 
	<head> 
		<meta charset="utf-8"/> 
		<link rel="stylesheet" href="style1.css"/>
		
		<title> Page d'inscription </title> 
	</head> 
	<body> 
		<br> Formulaire d'Inscription </br>
	</body>
		<form method ="post" action ="retourInscription.php"> 
			<fieldset> 
				<legend>Login : </legend>
                		<input type = "text" name="login" />
            		</fieldset>
           		<fieldset>
            			<legend>Mot de passe : </legend>
                		<input type = "password" name="mdp" />
            		</fieldset>
            		<fieldset>
            			<legend>Validation : </legend>
                		<input type = "password" name="validate" />
            		</fieldset>
            		<fieldset>
            			<legend>Nom : </legend>
                		<input type = "text" name="nom" />
            		</fieldset>
            		<fieldset>
            			<legend> Prenom : </legend>
                		<input type = "text" name="prenom" />
            		</fieldset>
            		<fieldset>
            			<legend> Date de naissance : (AAAA-MM-JJ) </legend>
                		<input type = "text" name="dateN" />
            		</fieldset>
            			<input type ="submit" name ="submit" value ="creer un compte"/> 
			</form>
		<a href ='index.php'> Retour </a>
</html>

