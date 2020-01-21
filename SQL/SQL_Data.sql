Commande 1 :
SELECT DISTINCT code_pro
FROM ligne_facture
ORDER BY code_pro;

Commande 2 :
SELECT COUNT(num_fac)
AS 'Number of CLEM'
FROM ligne_facture
WHERE code_pro = 'CLEM';

Commande 3 :
SELECT code_pro, qte_lfac
FROM ligne_facture
WHERE num_fac = 100;

Commande 4 :
SELECT ville_cli, rs_cli
FROM client
WHERE cp_cli LIKE '38%';

Commande 5 :
SELECT num_fac, mtht_fac
FROM facture
WHERE date_fac BETWEEN '2015-09-01' AND '2015-09-30';

Commande 6 :
SELECT SUM(mtht_fac) AS 'Invoice amount'
FROM facture
WHERE code_cli = 'BOV05';

Commande 7 :
SELECT code_cli, num_fac
FROM facture
WHERE mtht_fac > 100;

Commande 8 :
SELECT code_pro, lib_pro
FROM produit
WHERE taxe_pro = 20;

Commande 9 :
SELECT code_pro, puht_pro
FROM produit
WHERE UPPER(lib_pro)
LIKE '%TOMATE%';

////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//
////////////////////////////////////////////////////////////////////////////////////////////////

Commande 1 :
SELECT num_fac AS "Num fac", date_fac AS "Date fac", rs_cli AS "RS cli", adr_cli AS "Adr cli", ville_cli AS "Ville cli"
FROM facture F
INNER JOIN client C ON C.code_cli = F.code_cli
WHERE mtht_fac > 100;

Commande 2 :
SELECT date_fac, P.code_pro, lib_pro, qte_lfac
FROM ligne_facture L
INNER JOIN facture F ON F.num_fac = L.num_fac
INNER JOIN produit P ON P.code_pro = L.code_pro
ORDER BY date_fac DESC, P.code_pro ASC;

Commande 3 :
SELECT F.num_fac AS "Num Fac", P.code_pro AS "Code Pro", mtht_fac * qte_lfac AS "MTHT", ROUND((mtht_fac * qte_lfac) * taxe_pro, 2) AS "TTC"
FROM ligne_facture L
INNER JOIN facture F ON F.num_fac = L.num_fac
INNER JOIN produit P ON L.code_pro = P.code_pro
ORDER BY F.num_fac, P.code_pro;

///////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//
///////////////////////////////////////////////////////////////////////////////////////////////////

SELECT A.num_ach, date_ach, P.code_pro, lib_pro, puht_pro, ROUND((taxe_pro / 100 + 1) * puht_pro, 2) AS "UTTC", ROUND(qte_lach * puht_lach, 2) AS "PRIX HT", ROUND((taxe_pro / 100 + 1) * puht_pro * qte_lach, 2) AS "PRIX TTC"
FROM ligne_achat LA
INNER JOIN achat A ON LA.num_ach = A.num_ach
INNER JOIN produit P ON LA.code_pro = P.code_pro

///////////////////////////////////////////////////////////////////////////////////////////////////
//
//
//
///////////////////////////////////////////////////////////////////////////////////////////////////


CREATE TABLE genre (
  code_Genre VARCHAR(10) NOT NULL,
  lib_Genre VARCHAR(20) NOT NULL,
  CONSTRAINT pk_genre PRIMARY KEY (code_Genre)
);

CREATE TABLE auteur (
   code_Auteur VARCHAR(10),
   nom_Auteur VARCHAR(20), 
   periode_Auteur VARCHAR(20),
  CONSTRAINT pk_auteur PRIMARY KEY (code_Auteur)
);

CREATE TABLE piece (
  code_Piece VARCHAR(10),
  titre_Piece VARCHAR(40),
  duree_Piece VARCHAR(20),
	code_Genre VARCHAR(10),
  code_Auteur VARCHAR(10),
  code_Personne VARCHAR(10),
  CONSTRAINT pk_piece PRIMARY KEY (code_Piece),
  CONSTRAINT fk_genre FOREIGN KEY (code_Genre) REFERENCES genre(code_Genre),
  CONSTRAINT fk_auteur FOREIGN KEY (code_Auteur) REFERENCES auteur(code_Auteur),
  CONSTRAINT fk_personne FOREIGN KEY (code_Personne) REFERENCES personne(code_Personne)
);

CREATE TABLE personne (
  code_Personne VARCHAR(10),
  nom_Personne VARCHAR(20),
  prenom_Personne VARCHAR(20),
	addr_Personne VARCHAR(50),
  tel_Personne VARCHAR(20),
  CONSTRAINT pk_piece PRIMARY KEY (code_Personne)
);

CREATE TABLE jouer (
  code_Piece VARCHAR(10),
  code_Personne VARCHAR(10),
  role_Jouer VARCHAR(20),
  CONSTRAINT pk_piece PRIMARY KEY (code_Personne, code_Piece),
  CONSTRAINT fk_personne_Jouer FOREIGN KEY (code_Personne) REFERENCES personne(code_Personne),
  CONSTRAINT fk_piece_jouer FOREIGN KEY (code_Piece) REFERENCES piece(code_Piece)
);

INSERT INTO genre (code_Genre, lib_Genre) VALUES
('COM', 'Comédie'),
('TRA', 'Tragédie'),
('SAT', 'Satire'),
('TRC', 'Tragi-Comédie');

INSERT INTO auteur (code_Auteur, nom_Auteur, periode_Auteur) VALUES
('001','Racine','Classique'),
('002','Corneille','Classique'),
('003','Molière','Classique'),
('004','Yasmina Reza','Contenporaine');

INSERT INTO piece (code_Piece, titre_Piece, duree_Piece, code_Genre, code_Auteur, code_Personne) VALUES
('IP001','Iphigénie','120','TRA','001','1308'),
('LE001','Le Cid','90','TRC','002','1287'),
('LE002','Le Tartuffe ou l imposteur','135','COM','003','1253'),
('AR001','Art','90','COM','004','1001');

INSERT INTO personne (code_Personne, nom_Personne, prenom_Personne, addr_Personne, tel_Personne) VALUES
("1001","Kerbrat","Patrice", NULL, NULL),
("1002","Vaneck","Pierre", NULL, NULL),
("1003","Luchini","Fabrice", NULL, NULL),
("1004","Arditi","Pierre", NULL, NULL),
("1005","Rochefort","Jean", NULL, NULL),
("1253","Shadow","Yann","6 Rue de Ronceveaux 38200 VIENNE","07.25.68.35.87"),
("1287","Marousy","Béatrice","12 Rue des Clers 38200 VIENNE","04.74.59.65.33"),
("1308","Hembert","Jean-Christophe", NULL, NULL);

INSERT INTO JOUER (code_Piece,code_Personne, role_Jouer) VALUES
("AR001","1002","Marc"),
("AR001","1003","Serge"),
("AR001","1004","Yvan");

/* Le rôle de “Yvan” dans la Pièce “Art” sera, finalement, joué par Jean Rochefort.  */
UPDATE jouer SET code_Personne = "1005" WHERE	role_Jouer = "Yvan";

/* La pièce “Le Cid” est déprogrammée. (2 versions) */
UPDATE piece SET titre_Piece = "Le Cid - Annulé", duree_Piece = "00h00" WHERE code_Piece = "LE001";
DELETE FROM piece WHERE	code_Piece = "LE001"
