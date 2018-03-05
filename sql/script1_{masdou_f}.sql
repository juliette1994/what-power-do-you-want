/*ETAPE 1*/
CREATE USER "PHPMyAdmin"@"localhost";
GRANT ALL ON *.* TO "PHPMyAdmin"@"localhost";

/*ETAPE 2*/
CREATE DATABASE `WhatPowerDoYouWant_qu_j` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*-Utiliser utf8mb4 plutot que utf8, car utf8 prend seulement 65536 caracteres meme s`ils ont la meme performance et la meme utf-8 data. La seule difference reside dans le nombre de caracteres pris en compte.
-Utf8_unicode_ci plutot que utf8_general_ci est plus precis sur un grand nombre de caracteres que general_ci meme si general_ci est plus rapide dans la comparaison et le triyage.
De plus, on aura un probleme sur certains carateres comme "oe" avec general_ci (ils sont ignores) alors que unicode_ci considere "oe" comme 2 caracteres: "o" et "e".*/

/*ETAPE 3*/
USE `WhatPowerDoYouWant_qu_j`;
CREATE TABLE Rôle
(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Libelle TEXT NOT NULL,
Description TEXT NOT NULL,
Date_creation DATE NOT NULL,
Date_modification DATE NOT NULL
);
CREATE TABLE Utilisateurs
(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Nom VARCHAR(100) NOT NULL,
Prenom VARCHAR(100) NOT NULL,
Date_de_naissance DATE NOT NULL,
Ville VARCHAR(255) NOT NULL,
Adresse VARCHAR(255) NOT NULL,
Code_postal VARCHAR(5) NOT NULL,
Pays VARCHAR(255) NOT NULL,
Sexe VARCHAR(1) NOT NULL,
Rôle INT NOT NULL DEFAULT 1,
Date_creation DATE NOT NULL,
Date_modification DATE NOT NULL,
Pseudo VARCHAR(100) NOT NULL,
Password VARCHAR(100) NOT NULL,
Age INT NOT NULL,
Description TEXT NOT NULL,
Email VARCHAR(60) NOT NULL,
FOREIGN KEY (Rôle) REFERENCES Rôle(ID)
);
CREATE TABLE Produits
(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Img TEXT NOT NULL,
Description TEXT NOT NULL,
Libelle TEXT NOT NULL,
Prix_achat DECIMAL(6,2) NOT NULL,
Prix_vente DECIMAL(6,2) NOT NULL,
Nombres_produit INT NOT NULL,
Date_creation DATE NOT NULL,
Date_modification DATE NOT NULL
);
CREATE TABLE Categories
(
ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Libelle TEXT NOT NULL,
Description TEXT NOT NULL,
Date_creation DATE NOT NULL,
Date_modification DATE NOT NULL
);
CREATE TABLE Categorie_Produit
(
ID_categorie INT NOT NULL,
ID_produit INT NOT NULL,
FOREIGN KEY (ID_produit) REFERENCES Produits(ID),
FOREIGN KEY (ID_categorie) REFERENCES Categories(ID)
);
CREATE TABLE Produit_Utilisateur
(
ID_produit INT NOT NULL,
ID_utilisateur INT NOT NULL,
FOREIGN KEY (ID_produit) REFERENCES Produits(ID),
Libelle TEXT NOT NULL,
Prix_achat DECIMAL(6,2) NOT NULL,
Prix_vente DECIMAL(6,2) NOT NULL,
Nombres_produit INT NOT NULL
);

/*ETAPE 4*/
INSERT INTO Rôle (Libelle, Description, Date_creation, Date_modification)
VALUES
('Administrateur', 'I am an administrator', '2015-01-25', '2015-11-30'),
('Membre', 'I am a member of this communauty', '2015-11-29', '2015-11-30');
INSERT INTO Utilisateurs (Nom, Prenom, Date_de_naissance, Ville, Adresse, Code_postal, Pays, Sexe, Rôle, Date_creation, Date_modification, Pseudo, Password, Age, Description, Email)
VALUES
('Martin', 'Zoe', '1994-01-10', 'Paris', '125 Avenue Paul Vaillant Couturier', 94400, 'France', 'M', '1', '2015-01-26', '2015-11-30', 'zoe', 'martin', 20, 'Je suis une grande fille.', 'zm@hotmail.fr'),
('Bernard', 'Tom', '1994-02-25', 'Ivry-Sur-Seine', '15 rue Maurice Grandcoing', 94200, 'France', 'F', '1', '2015-01-26', '2015-11-30', 'tom', 'bernard', 21, 'Je suis un grand garcon.', 'tb@hotmail.fr'),
('Thomas', 'Emma', '1994-03-07', 'Lyon', '99 Rue Veron', 94140, 'France', 'M', '2', '2015-11-30', '2015-11-30', 'emma', 'thomas', 22, 'Je suis mince.', 'et@hotmail.fr'),
('Petit', 'Leo', '1994-04-02', 'Marseille', '84 Boulevard Maxime Gorki', 94800, 'France', 'F', '2','2015-11-30', '2015-11-30', 'leo', 'petit', 23, 'Je suis mince.', 'lp@hotmail.fr'),
('Robert', 'Manon', '1994-05-15', 'Toulouse', '134 Avenue Danielle Casanova', 94200, 'France', 'M', '2', '2015-11-30', '2015-11-30', 'manon', 'robert', 24, 'Je suis belle.', 'mr@hotmail.fr'),
('Richard', 'Lucas', '1994-06-28', 'Bordeaux', '92 Rue de Paris', 94220, 'France', 'F', '2', '2015-11-30', '2015-11-30', 'lucas', 'richard', 25, 'Je suis beau.', 'lr@hotmail.fr'),
('Durand', 'Camille', '1994-07-01', 'Nantes', '8 Avenue de la Republique', 94700, 'France', 'M', '2', '2015-11-30', '2015-11-30', 'camille', 'durand', 26, 'J aime le bleu.', 'cd@hotmail.fr'),
('Dubois', 'Louis', '1994-08-14', 'Nice', '31 Avenue du Général Leclerc', 94700, 'France', 'F', '2', '2015-11-30', '2015-11-30', 'louis', 'dubois', 27, 'J aime le rouge.', 'ld@hotmail.fr'),
('Laurent', 'Anais', '1994-09-23', 'Rennes', '37 Rue Marceau', 94200, 'France', 'M', '2', '2015-11-30', '2015-11-30', 'anais', 'laurent', 28, 'Je suis grosse.', 'al@hotmail.fr'),
('Simon', 'Antoine', '1994-10-06', 'Rouen', '34 Rue de Tolbiac', 75013, 'France', 'F', '2', '2015-11-30', '2015-11-30', 'antoine', 'simon', 29, 'Je suis gros.', 'as@hotmail.fr');
INSERT INTO Produits (Description, Libelle, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Img)
VALUES
('This potion gives you the power to handle the fire element.', 'Fire Potion', 800, 800, 5, '2015-10-30', '2015-11-30', 'img/01.jpg'),
('This potion gives you the power to handle the water element.', 'Water Potion', 800, 800, 5, '2015-10-30', '2015-11-30', 'img/02.jpg'),
('This potion gives you the power to make somebody fall in love with you.', 'Love Potion', 200, 200, 10, '2015-10-30', '2015-11-30', 'img/03.png'),
('This potion gives you the power to move anywhere in the world.', 'Teleportation Potion', 600, 600, 8, '2015-10-30', '2015-11-30', 'img/04.png'),
('This potion gives you the power to handle the creatures of shadows.', 'Darkness Potion', 500, 500, 1, '2015-10-30', '2015-11-30', 'img/05.png'),
('This potion gives you the power to handle the wind element.', 'Wind Potion', 800, 800, 5, '2015-10-30', '2015-11-30', 'img/06.png'),
('This potion gives you the power to handle the earth element.', 'Earth Potion', 800, 800, 5, '2015-10-30', '2015-11-30', 'img/07.jpg'),
('This potion gives you the capacity to be invisible.', 'Invisibility Potion', 300, 300, 2, '2015-10-30', '2015-11-30', 'img/08.jpg'),
('This potion gives you an immortal body.', 'Invincibility Potion', 1000, 1000, 2, '2015-10-30', '2015-11-30', 'img/09.jpg'),
('This potion gives you the capacity to duplicate yourself, as you want.', 'Duplication Potion', 300, 300, 3, '2015-10-30', '2015-11-30', 'img/10.jpg'),
('This potion gives you the power to kill someone.', 'Death Potion', 900, 900, 1, '2015-10-30', '2015-11-30', 'img/11.jpg'),
('This potion gives you the capacity to predict the future.', 'Prediction Potion', 1500, 1500, 10, '2015-10-30', '2015-11-30', 'img/12.jpg'),
('This object allows you to see something as much as you want to.', 'Magic Ball', 900, 900, 4, '2015-11-29', '2015-11-30', 'img/a1.jpg'),
('This object allows you to transform something in something else like a dog in a frog.', 'Magic Stick', 800, 800, 3, '2015-11-29', '2015-11-30', 'img/a2.jpg'),
('You put the ingredient of a recipe and the recipe, in the cauldron. It will prepare your recipe.', 'Magic Cauldron', 500, 500, 2, '2015-11-29', '2015-11-30', 'img/a3.jpg'),
('This object allows you to fly in the sky. Be careful, you have to be gentle with it because it can eject you.', 'Magic Broom', 800, 800, 5, '2015-11-29', '2015-11-30', 'img/a4.jpeg'),
('This book allows you to curse someone to death.', 'Magic Book', 2000, 2000, 1, '2015-11-29', '2015-11-30', 'img/a5.jpg'),
('This object allows you to fly like the broom. However, it will be more comfortable than a broom.', 'Magic Carpet', 900, 900, 1, '2015-11-29', '2015-11-30', 'img/a6.jpg'),
('If you write something on it, what you wrote will be a law that everybody must follow.', 'Magic Scroll', 1200, 1200, 4, '2015-11-29', '2015-11-30', 'img/a7.jpg'),
('This object gives you the capacity to move in the time.', 'Magic Watch-pocket', 1000, 1000, 4, '2015-11-29', '2015-11-30', 'img/a8.jpg'),
('This object gives you the capacity to open everything like a door or a safe.', 'Magic Key', 500, 500, 10, '2015-11-29', '2015-11-30', 'img/a9.jpg'),
('This object gives you the capacity to bring back a spirit from sleep in order to speak with him.', 'Magic Candle', 700, 700, 9, '2015-11-29', '2015-11-30', 'img/a10.gif'),
('This object gives you the capacity to write the answer of your question, about things that are in books.', 'Magic Pencil', 500, 500, 20, '2015-11-29', '2015-11-30', 'img/a11.jpg'),
('This object protects you from everything like a gun shot but you must have the capacity to carry it, because it is very heavy.', 'Magic Shield', 1500, 1500, 2, '2015-11-29', '2015-11-30', 'img/a12.jpg'),
('To take alchemistry course, you have to go to the North of Korthos (the city of the dead), a course cost 1000 cristals and you can gain 1 point of power in alchemistry.', 'Alchemistry', 1000, 1000, 10, '2015-09-29', '2015-11-30', 'img/alchimie.jpeg'),
('To take a divination course, you must go to Argul (south of Mount Kahn), a course cost 1250 cristals and you will gain 1 point of power in divination.', 'Divination', 1250, 1250, 10, '2015-09-29', '2015-11-30', 'img/divination.jpeg'),
('To take courses in spells, you must go to Arven, a course cost 1860 cristals and you will gain 2 points of power in spells.', 'Spells', 1860, 1860, 10, '2015-09-29', '2015-11-30', 'img/sortileges.jpeg'),
('To take courses in parapsychology, you must go to Riveroe, a course cost 850 cristals and you will gain 1 point of power in parapsychology.', 'Parapsychology', 850, 850, 10, '2015-09-29', '2015-11-30', 'img/fantome.jpg');
INSERT INTO Categories (Libelle, Description, Date_creation, Date_modification)
VALUES
('potions', 'Take it', '2015-10-30', '2015-11-30'),
('accessories', 'Use it', '2015-11-29', '2015-11-30'),
('courses', 'Be here', '2015-09-29', '2015-11-30');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit)
VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 1),
(3, 2),
(3, 3),
(3, 4);
INSERT INTO Produit_Utilisateur (ID_produit, ID_utilisateur, Libelle, Prix_achat, Prix_vente, Nombres_produit)
VALUES
(1, 1, 'Fire Potion', 800, 800, 5),
(2, 2, 'Water Potion', 800, 800, 5);