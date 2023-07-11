create database mom;
use mom;
CREATE TABLE utilisateur (
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255),
    email VARCHAR(255),
    motdepasse VARCHAR(255),
    contact VARCHAR(255)
);

create table administrateur(
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255),
    email VARCHAR(255),
    motdepasse VARCHAR(255),
    photo VARCHAR(255)
);

CREATE TABLE genre (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255)
);

CREATE TABLE profil (
    id int AUTO_INCREMENT PRIMARY KEY ,
    idutilisateur VARCHAR(255),
    poids FLOAT,
    taille FLOAT,
    idgenre INT,
    etat INT,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (idgenre) REFERENCES genre(id)
);

CREATE TABLE objectif (
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255)
);


CREATE table composition(
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(50)
);


create table composition_regime(
    id int AUTO_INCREMENT PRIMARY KEY ,
    idregime int not null,
    idcomposition int not null,
    quantite float,
    FOREIGN KEY (idregime) REFERENCES regime(id),
    FOREIGN KEY (idcomposition) REFERENCES composition(id)
);


CREATE TABLE objectifclient (
    id int AUTO_INCREMENT PRIMARY KEY ,
    idutilisateur VARCHAR(255),
    idobjectif VARCHAR(255),
    quantite FLOAT,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (idobjectif) REFERENCES objectif(id)
);


CREATE TABLE regime (
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255),
    poidsvariation FLOAT,
    prix FLOAT,
    idobjectif VARCHAR(255),
    FOREIGN KEY (idobjectif) REFERENCES objectif(id)
);

CREATE TABLE sport (
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(255),
    poidsvariation FLOAT,
    idobjectif VARCHAR(255),
    FOREIGN KEY (idobjectif) REFERENCES objectif(id)
);

CREATE TABLE code (
    idcode int AUTO_INCREMENT PRIMARY KEY ,
    code VARCHAR(255),
    montant FLOAT,
    etat INT, 
    idutilisateur int,
    datedevalidation date,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id)
);

CREATE table caisse(
    idcaisse int AUTO_INCREMENT PRIMARY KEY ,
    montant float,
    datereception date
);

CREATE TABLE portemonnaie (
    idutilisateur VARCHAR(255),
    montant FLOAT,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id)
);


create table regime_alimentaire(
    id int AUTO_INCREMENT PRIMARY KEY ,
    nom VARCHAR(50),
    duree float,
    unite VARCHAR(50) default 'jours'
);

CREATE TABLE regime_alimentaire_relation (
    id int AUTO_INCREMENT PRIMARY KEY ,
    id_regime_alimentaire int not null,
    idregime int ,
    FOREIGN KEY (idregime) REFERENCES regime(id),
    FOREIGN KEY (id_regime_alimentaire) REFERENCES regime_alimentaire(id)
);