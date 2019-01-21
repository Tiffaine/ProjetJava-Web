

DROP TABLE if exists Medecin
DROP TABLE if exists Donneur
DROP TABLE if exists Collecte
DROP TABLE if exists Utilisateur

CREATE TABLE Utilisateur(
	idUtilisateur integer NOT NULL SERIAL PRIMARY KEY,
	type varchar(20) NOT NULL,
	login varchar(20) NOT NULL,
	mdp varchar(20) NOT NULL,
	nom varchar(30) NOT NULL,
	prenom varchar(30) NOT NULL,
	dateN DATE NOT NULL
	)

CREATE TABLE Collecte(
	idCollecte integer NOT NULL SERIAL PRIMARY KEY,
	nbP integer,
	nbMaxP integer NOT NULL,
	nbL integer NOT NULL,
	etat varchar(20) NOT NULL,
	date DATE NOT NULL,
	lieu varchar() NOT NULL,
	description varchar()
	)
	
CREATE TABLE Donneur(
	refDonneur integer NOT NULL,
	refCollecte integer NOT NULL,
	groupeS varchar(10) NOT NULL,
	rhesus varchar(10) NOT NULL,
	
	FOREIGN KEY (refDonneur) REFERENCES Utilisateur(idUtilisateur),
	FOREIGN KEY (refCollecte) REFERENCES Collecte(idCollecte)
	)

CREATE TABLE Medecin(
	refMedecin integer NOT NULL,
	refCollecte integer NOT NULL,
	
	FOREIGN KEY(refDonneur) REFERENCES Utilisateur(idUtilisateur),
	FOREIGN KEY(refCollecte) REFERENCES Collecte(idCollecte)
	)	


