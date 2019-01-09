

DROP TABLE if exists Medecin;
DROP TABLE if exists Donneur;
DROP TABLE if exists Collecte;
DROP TABLE if exists Utilisateur;

CREATE TABLE 'Utilisateur'(
	idUtilisateur integer not null auto_increment, //Identifiant de l'utilisateur propre à chacun
	type varchar(20) not null, //Type soit Médecin, soit Donneur
	login varchar(20) not null, //Login pour se connecter
	mdp varchar(20) not null, //Mot de passe
	nom varchar(30) not null, //Nom de l'utilisateur
	prenom varchar(30) not null, //Prénom de l'utilisateur
	dateN DATE, //Date de Naissance
	
	primary key(idUtilisateur) //Identifiant comme clé primaire
	);

CREATE TABLE 'Collecte'(
	idCollecte integer not null auto_increment, //Identifiant de la collecte propre à chacune
	nbInf integer not null, //Nombre d'infirmières
	nbP integer, //Nombre de participants
	nbMaxP integer not null, //Maximum de participants accepté
	nbL integer not null, //Nombre de Lits pour la collecte
	etat varchar(20) not null, //Etat de la collecte Ouvert En cours ou Fermé
	
	primary key(idCollecte) //Identifiant comme clé primaire
	);
	
CREATE TABLE 'Donneur'(
	refDonneur integer not null, //Référence à l'utilisateur
	refCollecte integer not null, //Référence à la collecte
	groupeS varchar(10) not null, //Groupe sanguin A B AB O ou inconnu
	rhesus varchar(1à) not null, //Rhesus + - ou inconnu
	
	foreign key(refDonneur) references Utilisateur(idUtilisateur), //Clé étrangère
	foreign key(refCollecte) references Collecte(idCollecte) //Clé étrangère
	);

CREATE TABLE 'Medecin'(
	refMedecin integer not null, //Référence à l'utilisateur
	refCollecte integer not null, //Référence à la collecte
	
	foreign key(refDonneur) references Utilisateur(idUtilisateur), //Clé étrangère
	foreign key(refCollecte) references Collecte(idCollecte) //Clé étrangère
	);	


