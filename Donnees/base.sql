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
-- Insertion dans la table administrateur
INSERT INTO administrateur (id, nom, email, motdepasse, photo) VALUES
(1, 'RAZAFINDRATANDRA Miradomahefa Fitahiana', 'mirado@gmail.com', '1905', 'mirado.png'),
(2, 'ANDRIANTIANA Onintsoa Tsiafoy','tsoatsiafoy@gmail.com','1767', 'oni.png'), (3, 'ANDRIANARISON Mahery Tiana', 'maherytiana@gmail.com', '1758', 'mahery.png');

-- Insertion dans la table genre
INSERT INTO genre (id, nom) VALUES
(1, 'Masculin'),
(2, 'Feminin');

-- Insertion dans la table objectif
INSERT INTO objectif (id, nom) VALUES
(1, 'Maigrir'),
(2, 'Grossir');

-- Insertion dans la table intervalle
INSERT INTO intervalle (id, duree, idobjectif) VALUES
(1, 7, 1),
(2, 5, 2);



-- Insertion dans la table regime
INSERT INTO regime (id, nom, poidsvariation,prix, idobjectif) VALUES
(1, 'Salade de legumes', -2.5,15000, 1),
(2, 'Legumes sautes', -3.0,25000, 1),
(4, 'salade verte', -2.2,12000, 1),
(6, 'Steak grille ', 1,24000, 2),
(7, 'Poulet roti ', 0.5,25000, 2),
(8, 'Caviar', 0.25,14000, 2),
(10,'Pates bolognaises', 0.25,12500, 2);

-- Insertion dans la table sport
INSERT INTO sport (id, nom, poidsvariation, idobjectif) VALUES
(1, 'Course a pied', -1.0, 1),
(2, 'Halterophilie', 0.5, 2),
(3, 'Natation', 0.8, 2),
(4, 'Yoga', -0.5, 1),
(5, 'Cyclisme', -0.7, 1);

-- Insertion dans la table code
INSERT INTO code (idcode, code, montant, etat, idutilisateur, datedevalidation) VALUES
(1, '12345', 10000, 1, 0,now()),
(2, '67890', 20000, 1, 0,now()),
(3, '23654', 50000, 1, 0,now()),
(4, '89742', 15000, 1, 0,now()),
(5, '55124', 8000, 1, 0,now()),
(6, '63558', 12000, 1, 0,now()),
(7, '85552', 25000, 1, 0,now()),
(8, '32547', 30000, 1, 0,now()),
(9, '56789', 7000, 1, 0,now()),
(10, '63254', 18000, 1, 0,now()),
(11, '12558', 9000, 1, 0,now()),
(12, '98321', 22000, 1, 0,now()),
(13, '65475', 13000, 1, 0,now()),
(14, '12347', 28000, 1, 0,now()),
(15, '23447', 35000, 1, 0,now());

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

INSERT INTO composition (nom) VALUES ('viande');
INSERT INTO composition (nom) VALUES ('poisson');
INSERT INTO composition (nom) VALUES ('légumes');
INSERT INTO composition (nom) VALUES ('fruits');
INSERT INTO composition (nom) VALUES ('céréales');

