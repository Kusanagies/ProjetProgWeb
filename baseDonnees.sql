DROP DATABASE IF EXISTS projet;
CREATE DATABASE projet; 
USE projet; 

-- Table des jeux d'escape game
CREATE TABLE `Jeux` ( 
    `ID_Jeux` int(2) AUTO_INCREMENT PRIMARY KEY,
    `nomJeux` varchar(50),
    `prixJeux` decimal(10, 2) NOT NULL
); 

INSERT INTO `Jeux` (`nomJeux`, `prixJeux`) VALUES
('Avion', 10),
('Ski', 20);

-- Table des commandes (panier)
CREATE TABLE `Commandes` (
    `ID_Commande` int AUTO_INCREMENT PRIMARY KEY,
    `ID_Jeux` int(2),
    `username` varchar(10),
    `quantite` int DEFAULT NULL,
    FOREIGN KEY (`ID_Jeux`) REFERENCES `Jeux` (`ID_Jeux`),
    FOREIGN KEY (`username`) REFERENCES `Users` (`NomUtilisateur`)
);

-- Table des utilisateurs
CREATE TABLE `Users` ( 
    `ID_User` int(8) AUTO_INCREMENT PRIMARY KEY,
    `NomUtilisateur` varchar(50), 
    `Age` int NOT NULL, 
    `Email` varchar(255) NOT NULL, 
    `MotDePasse` varchar(255) NOT NULL
); 

CREATE TABLE `reservations` (
  `res_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `res_date` date,
  `res_slot` varchar(32) DEFAULT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;