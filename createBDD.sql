

DROP TABLE if exists Medecin
DROP TABLE if exists Donneur
DROP TABLE if exists Collecte
DROP TABLE if exists Utilisateur

CREATE TABLE Utilisateur(
	idUtilisateur integer not null auto_increment,
	type varchar(20) not null,
	login varchar(20) not null,
	mdp varchar(20) not null,
	nom varchar(30) not null,
	prenom varchar(30) not null,
	dateN DATE,
	
	primary key(idUtilisateur)
	)

CREATE TABLE Collecte(
	idCollecte integer not null auto_increment,
	nbP integer,
	nbMaxP integer not null,
	nbL integer not null,
	etat varchar(20) not null,
	date DATE not null,
	lieu varchar() not null,
	description varchar(), 
	
	
	primary key(idCollecte)
	)
	
CREATE TABLE Donneur(
	refDonneur integer not null,
	refCollecte integer not null,
	groupeS varchar(10) not null,
	rhesus varchar(10) not null,
	
	foreign key(refDonneur) references Utilisateur(idUtilisateur),
	foreign key(refCollecte) references Collecte(idCollecte)
	)

CREATE TABLE Medecin(
	refMedecin integer not null,
	refCollecte integer not null,
	
	foreign key(refDonneur) references Utilisateur(idUtilisateur),
	foreign key(refCollecte) references Collecte(idCollecte)
	)	


