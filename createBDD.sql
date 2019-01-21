DROP TABLE if exists Medecin;
DROP TABLE if exists Donneur;
DROP TABLE if exists Collecte;
DROP TABLE if exists Utilisateur;

CREATE TABLE Utilisateur(
	idUtilisateur SERIAL,
	type varchar(20) NOT NULL,
	login varchar(20) NOT NULL,
	mdp varchar(20) NOT NULL,
	nom varchar(30) NOT NULL,
	prenom varchar(30) NOT NULL,
	dateN DATE NOT NULL,

	PRIMARY KEY (idUtilisateur)
	);

CREATE TABLE Collecte(
	idCollecte SERIAL,
	nbP integer,
	nbMaxP integer NOT NULL,
	nbL integer NOT NULL,
	etat varchar(20) NOT NULL,
	date DATE NOT NULL,
	lieu varchar(50) NOT NULL,
	description varchar(50),

	PRIMARY KEY (idCollecte)
	);
	
CREATE TABLE Donneur(
	refDonneur integer NOT NULL,
	refCollecte integer NOT NULL,
	groupeS varchar(10) NOT NULL,
	rhesus varchar(10) NOT NULL,
	
	FOREIGN KEY (refDonneur) REFERENCES Utilisateur(idUtilisateur),
	FOREIGN KEY (refCollecte) REFERENCES Collecte(idCollecte),
	PRIMARY KEY (refDonneur)
	);

CREATE TABLE Medecin(
	refMedecin integer NOT NULL,
	refCollecte integer NOT NULL,
	
	FOREIGN KEY(refMedecin) REFERENCES Utilisateur(idUtilisateur),
	FOREIGN KEY(refCollecte) REFERENCES Collecte(idCollecte),
	PRIMARY KEY (refMedecin)
	);


