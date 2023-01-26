CREATE DATABASE IF NOT EXISTS test;
USE test;
CREATE TABLE `test`.`personnes` (`idPersonne` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(50) NOT NULL , PRIMARY KEY (`idPersonne`)) ENGINE = InnoDB;
INSERT INTO Personnes (nom) VALUES('toto'),('titi');