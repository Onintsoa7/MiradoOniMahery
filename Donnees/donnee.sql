
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

INSERT INTO composition (nom) VALUES ('legumes');
INSERT INTO composition (nom) VALUES ('fruits');
INSERT INTO composition (nom) VALUES ('viande');
INSERT INTO composition (nom) VALUES ('poisson');
INSERT INTO composition (nom) VALUES ('cereales');
INSERT INTO composition (nom) VALUES ('produits laitiers');


INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Salade de cresson', -0.2, 15000, 1);
INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Soupe aux legumes', -0.3, 12000, 1);
INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Steak grille', 0.5, 25000, 2);
INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Poulet roti', 0.3, 22000, 2);
INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Salade de fruits', -0.1, 8000, 1);
INSERT INTO regime (nom, poidsvariation, prix, idobjectif) VALUES ('Pates a la carbonara', 0.2, 12000, 2);


INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (1, 1, 150); -- Salade de cresson avec légumes
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (1, 5, 50); -- Salade de cresson avec céréales
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (2, 3, 200); -- Soupe aux légumes avec légumes
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (3, 2, 250); -- Steak grillé avec poisson
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (4, 4, 100); -- Poulet rôti avec fruits


INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (1, 3, 100);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (1, 1, 200);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (1, 2, 150);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (2, 3, 150);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (2, 1, 100);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (2, 2, 200);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (3, 4, 250);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (3, 3, 150);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (4, 4, 200);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (4, 3, 100);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (5, 2, 100);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (5, 1, 150);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (6, 2, 200);
INSERT INTO composition_regime (idregime, idcomposition, quantite) VALUES (6, 5, 100);


INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Course à pied', -0.3, '1');
INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Natation', -0.5, '1');
INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Haltérophilie', 0.4, '2');
INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Yoga', 0.1, '2');
INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Cyclisme', -0.2, '1');
INSERT INTO sport (nom, poidsvariation, idobjectif) VALUES ('Zumba', -0.3, '1');



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

-- Insertion de 5 régimes alimentaires
INSERT INTO regime_alimentaire (nom, duree) VALUES ('Regime pour maigrir', 2);
INSERT INTO regime_alimentaire (nom, duree) VALUES ('Regime pour prendre du muscle', 4);
INSERT INTO regime_alimentaire (nom, duree) VALUES ('Regime pour une peau eclatante', 4);
INSERT INTO regime_alimentaire (nom, duree) VALUES ('Regime pour lenergie', 2);
INSERT INTO regime_alimentaire (nom, duree) VALUES ('Regime pour le bien-être mental', 5);

-- Remplissage de la table de relation avec plusieurs régimes dans un régime alimentaire
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (1, 1);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (1, 2);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (2, 4);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (2, 5);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (2, 6);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (2, 3);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (3, 1);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (3, 2);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (3, 3);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (4, 4);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (4, 5);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (5, 2);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (5, 4);
INSERT INTO regime_alimentaire_relation (id_regime_alimentaire, idregime) VALUES (5, 6);




