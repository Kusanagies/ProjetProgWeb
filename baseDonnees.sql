DROP DATABASE IF EXISTS projet;
CREATE DATABASE projet; 
USE projet; 

CREATE TABLE Jeux (
	ID_Jeux int AUTO_INCREMENT PRIMARY KEY,
    Nom_Jeux varchar(50),
    prixJeux int
);

CREATE TABLE client(
	id_client int AUTO_INCREMENT PRIMARY KEY,
    nomutilisateur text(50),
    email text(255) NOT NULL,
    motdepasse text(255) NOT NULL
);
CREATE TABLE Commandes(
	id_commande int AUTO_INCREMENT PRIMARY KEY,
    ID_Jeux int,
    id_client int,
    dateReservation date,
    FOREIGN KEY(ID_Jeux) REFERENCES Jeux (ID_Jeux),
    FOREIGN KEY(id_client) REFERENCES client (id_client)
);

CREATE TABLE JOINUS(
    id_personne int AUTO_INCREMENT PRIMARY KEY,
    nom text(255),
    prenom text(255),
    tel int,
    email text(255),
    objet text(255),
    comment text(3000)
)

INSERT INTO Jeux VALUES (1,"Avion","20");
INSERT INTO Jeux VALUES (2,"Base_militaire","30");
INSERT INTO Jeux VALUES (3,"Enquete_de_meurtre","12");
INSERT INTO Jeux VALUES (4,"Chateau_hante","25");