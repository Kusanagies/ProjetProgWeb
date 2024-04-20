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
    nom_client text(50),
    prenom_clinet text(50),
    email text(255) NOT NULL,
    MotdePasse text(255) NOT NULL
);
CREATE TABLE Commandes(
	id_commande int AUTO_INCREMENT PRIMARY KEY,
    ID_Jeux int,
    id_client int,
    FOREIGN KEY(ID_Jeux) REFERENCES Jeux (ID_Jeux),
    FOREIGN KEY(id_client) REFERENCES client (id_client)
);


CREATE TABLE reservation(
	id_reservation int AUTO_INCREMENT PRIMARY KEY,
    id_client int,
    dateReservation date,
    ID_Jeux int,
    foreign key(id_client) REFERENCES client (id_client),
    foreign key(ID_Jeux) references Jeux(ID_Jeux)
);
    
    