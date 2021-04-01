-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 01 avr. 2021 à 21:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blablaquiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id_answer` int(11) NOT NULL AUTO_INCREMENT,
  `goodOption` varchar(80) NOT NULL,
  `option1` varchar(80) NOT NULL,
  `option2` varchar(80) NOT NULL,
  `option3` varchar(80) NOT NULL,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_answer`),
  KEY `anwser_question_FK` (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id_answer`, `goodOption`, `option1`, `option2`, `option3`, `id_question`) VALUES
(18, 'Au chili', 'France', 'Brézil', 'Italie', 36),
(19, 'Une pluie de cendres et de braises', 'Un nuage de gaz et de cendres', 'Une pluie d\'acide', 'Une tempête de neige', 37),
(24, 'L\'île aux enfants', 'N\'oubliez pas les paroles', 'La mare aux enfants ', 'Les enfants sur l\'île', 42),
(25, 'Les enfants du Rock ', 'Les vieux de la vieille', 'Les enfants du jazz', 'C\'est ça le rock and roll', 43),
(26, 'Bernard Pivot ', 'Cécile Pivot', 'Patrick Poivre d\'Arvor', 'Jack Lang', 44),
(27, 'L\'académie des neuf ', 'L\'académie des douze', 'Star Academy', 'Rien de neuf ', 45),
(28, 'Cabu', 'Wolinski', 'Charb', 'Plantu', 46),
(29, 'L\'école des fans', 'Le club des femmes', 'The Voice kid', 'La vie à pleine dents ', 47),
(30, 'Patrice Laffont ', 'Patrice Imberti', 'Jacques Martin', 'Yves Mourousi ', 48),
(31, 'Champs-Elysées ', 'Rue de la paix', 'Panthéon', 'Montparnasse ', 49),
(32, 'Le Petit Théâtre de Bouvard', 'Le boulevard des comiques', 'Le théâtre de Guignol', 'Stand-up', 50),
(33, 'Canal plus', 'France 3', 'Antenne 2 ', 'TV6', 51),
(34, 'Bleu, blanc et rouge', 'Violet, bleu et jaune ', 'Blanc, rouge et vert ', 'Orange et noir ', 52),
(35, 'Paris', 'Lyon', 'Bordeaux', 'Marseille', 53),
(36, 'Pologne', 'Belgique', 'Suisse', 'Espagne ', 54),
(37, 'Yvetot', 'New York', 'Madrid', 'Wuhan ', 55),
(38, '1914', '1913', '1915', '1924', 56),
(39, 'Le président de la république ', 'Le roi', 'L\'empereur', 'Le Tsar ', 57),
(40, 'A droite ', 'A gauche ', 'De travers ', 'Au milieu ', 58),
(41, 'Paris', 'Nantes', 'Lille', 'Angers', 59),
(43, 'Le coq', 'Le lion ', 'Le furet ', 'L\'aigle ', 61),
(44, '2004', '2010', '1996', '2017', 62),
(45, 'Convivialité, partage et bien-être ', 'Motivation, équilibre et bonheur', 'Appétit, plaisir et gourmandise', 'Chocolat, macaron et crêpe', 63),
(46, 'Mieux manger pour mieux travailler', 'Mieux manger pour mieux dormir ', 'Moins manger pour moins travailler', 'Mieux manger pour mieux digérer', 64),
(47, 'Livraison de plateaux repas à destination des entreprises ', 'Vente d\'appartements et maisons', 'Vente de parfums et cosmétiques en ligne', 'Aide à domicile ', 65),
(48, 'Un coffret repas zéro plastique', 'Un cours de danse ', 'Une partie de twister ', 'Un sac recyclable ', 66),
(73, '100 kilos', '200 kilos', '50 kilos', '25 kilos', 91),
(74, '70 ans', '20 ans', '120 ans', '50 ans', 92),
(75, 'Un sylviculteur', 'Un sériciculteur', 'Un myticulteur', 'Un horticulteur', 93),
(76, 'La taïga', 'La toundra', 'La pampa', 'La casa', 94),
(77, 'Gauloise', 'Romaine', 'Scandinave', 'Egyptienne', 95),
(78, 'Un arbre épargné lors d\'une coupe', 'Un arbre aux branches tombantes', 'Un arbre canadien à surprises', 'Une arbre qui donne des fruits', 96),
(79, 'Barbara Gordon', 'Alicia Strange', 'Poison Ivy', 'Alex Smith', 97),
(80, 'Car c\'est une voleuse', 'Car c\'est un super-méchant', 'Car c\'est une tueuse', 'Car c\'est une kidnappeuse', 98),
(81, 'Le Sphinx', 'Le Joker', 'L\'Émeraude', 'Monsieur vert', 99),
(82, 'Psychiatre', 'Infirmière', 'Docteure', 'Tueuse à gages', 100),
(83, 'Harley Quinn', 'Mr Freeze', 'Hugo Strange', 'Robin', 101),
(84, 'Une pièce', 'Une corde', 'Un miroir ', 'Un peigne ', 102),
(85, 'À cause de son apparence', 'À cause de son odeur', 'À cause de sa voix', 'À cause de son passé', 103),
(86, 'Retrouver sa femme', 'Tuer le Joker', 'Se marier avec Poison Ivy', 'Découvrir l\'identité de Batman', 104),
(87, 'Un crocodile', 'Un serpent', 'Un poisson', 'Un caméléon ', 105),
(88, 'Jim', 'Robert', 'David', 'Jim', 106),
(89, ' Dans la forêt de Palombie', 'En Inde', 'En France ', 'En Afrique ', 107),
(90, 'Houba Houba', 'Ouf Ouf', 'Cot Cot ', 'Houpla Houpla', 108),
(91, 'Le piranha', 'La morue', 'La sardine', 'Le thon', 109),
(92, 'Bondir et frapper ', 'Rien', 'Manger', 'Creuser', 110),
(93, 'Bibi Bibu Bobo', 'Bibi Bibo Biba', 'Riri Fifi Loulou', 'Boubou Bibou Babou', 111),
(94, 'En Russie', 'En France', 'En Ukraine ', 'En Suisse ', 112),
(95, 'Zabivaka', 'Zibyka', 'Zerbaky', 'Zebudlion', 113),
(96, 'L\'Espagne', 'La France', 'Le Maroc', 'L\'Iran', 114),
(97, 'La Suisse', 'Le Danemark', 'Le Pérou', 'L\'Australie', 115),
(98, 'L\'Italie', 'La Belgique', 'L\'Espagne', 'Le Brésil', 116),
(99, 'Tite', 'Dunga', 'Pelé', 'Marco', 117),
(100, 'Le groupe D', 'Le groupe A', 'Le groupe C', 'Le groupe B', 118),
(101, '22 mois', '6 mois', '9 mois', '15 mois', 119),
(102, '10 tonnes', '2 tonnes', '5 tonnes', '4 tonnes', 120),
(103, 'A chercher à manger', 'A dormir', 'A sa toilette ', 'A s\'accoupler ', 121),
(104, '100 litres d\'eau par jour', '10 litres d\'eau par jour', '2 litres d\'eau par jour', '50 litres d\'eau par jour', 122),
(105, 'D\'un mâle, plusieurs femelles et les éléphanteaux', 'De plusieurs femelles et les éléphanteaux', 'D\'un mâle, une femelle et les éléphanteaux', 'D\'une femelle, plusieurs mâles et les éléphanteaux', 123),
(106, 'Herbivore', 'Insectivore', 'Omnivore', 'Carnivore ', 124),
(107, 'L\'Erebus', 'Le Dalas', 'Le Penguin', 'Le Discorvery', 125),
(108, 'Godzilla', 'Goldorak', 'King Kong', 'Le Kraken', 126),
(109, 'L\'Elbrouz', 'L\'Oural', 'Le Ienisseï', 'Le Vésuve ', 127),
(110, 'Le Piton de la Fournaise', 'La Montagne Pelée', 'La Soufrière', 'La Montagne de roche', 128),
(111, 'L\'Etna', 'Le Vésuve', 'Le Stromboli', 'Le Puy de Pariou', 129),
(112, 'Malcolm Lowry', 'Ernest Hemingway', 'Jack London', 'Victor Hugo', 130),
(113, 'Jupiter', 'Hercule', 'Zeus', 'Neptune ', 131),
(114, 'Le Pic de Dante', 'Le Pic du Diable', 'Le Pic de Glace', 'Le Pic de l\'enfer ', 132);

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `id_library` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL,
  PRIMARY KEY (`id_library`,`id_publication`),
  KEY `Avoir_publication0_FK` (`id_publication`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `qCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `qCategory`) VALUES
(1, 'Arts & Lettres'),
(2, 'Nature'),
(3, 'Sciences'),
(4, 'Sports'),
(5, 'Loisirs'),
(6, 'Histoire');

-- --------------------------------------------------------

--
-- Structure de la table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `id_library` int(11) NOT NULL AUTO_INCREMENT,
  `qTitle` varchar(50) NOT NULL,
  `qImg` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `publicated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_library`),
  KEY `library_category_FK` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `library`
--

INSERT INTO `library` (`id_library`, `qTitle`, `qImg`, `id_category`, `publicated`) VALUES
(4, 'La vie des éléphants ', 'pexels-rachel-claire-4577791603aa0f408e71.jpg', 2, 1),
(5, 'Coupe du monde 2018', 'ballon603aa2996608e.jpg', 4, 1),
(8, 'Les volcans ', 'volcan6040c20ee75db.jpg', 3, 1),
(10, 'le Marsupilami, le roi de la jungle  ', 'marsu6040c45f2ddb1.jpg', 5, 1),
(16, 'Les émissions de télévision', 'television604cb67f96909.jpg', 5, 1),
(18, 'La France ', 'france604cc29b107c7.jpg', 6, 1),
(19, 'Room Saveurs', 'roomsaveur604d0e8db6a2b.png', 2, 1),
(21, 'Batman', 'batman60521b950fac2.jpg', 5, 1),
(22, 'Les forêts', 'foret605478ddcff9b.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id_publication` int(11) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) NOT NULL,
  `draft` tinyint(1) NOT NULL,
  `publicated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_publication`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `qQuestion` varchar(100) NOT NULL,
  `id_library` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `question_library_FK` (`id_library`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `qQuestion`, `id_library`) VALUES
(36, 'Où se trouve le plus haut volcan du monde ?', 8),
(37, 'Qu\'est-ce qu\'une nuée ardente ?', 8),
(42, 'Dans quelle émission peut-on trouver Casimir ?', 16),
(43, 'Quelle émission animait Philippe Manoeuvre ?', 16),
(44, 'Quel journaliste animait l\'émission littéraire Apostrophe ?', 16),
(45, 'Quelle émission Jean Pierre Foucault animait t-il ?', 16),
(46, 'Quel dessinateur de Charlie Hebdo a participé à l\'émission Club Dorothée ?', 16),
(47, 'Quelle émission célèbre animait Jacques Martin chaque dimanche après-midi ?', 16),
(48, 'Qui présentait Des chiffres et des lettres ?', 16),
(49, 'Quelle émission de variétés présentait Michel Drucker le samedi soir ?', 16),
(50, 'Quelle émission a révélé le duo comique Chevalier et Laspalès ?', 16),
(51, 'Sur quelle chaîne était diffusée l\'émission TOP 50 ?', 16),
(52, 'De quelles couleur est le drapeau de la France ?', 18),
(53, 'Quelle est la capitale de la France ?', 18),
(54, 'Quel pays n\'a pas de frontière commune avec la France ? ', 18),
(55, 'Laquelle de ces villes se trouvent en France ?', 18),
(56, 'En quelle année a débuté la première guerre mondiale ?', 18),
(57, 'Comment s\'appelle le chef de la France', 18),
(58, 'En France de quel côté de la route roule t-on ? ', 18),
(59, 'Dans quelle ville se trouve la Tour Eiffel ?', 18),
(61, 'Quel animal représente la France ?', 18),
(62, 'En quelle année a été créée l\'entreprise Room Saveurs ?', 19),
(63, 'Quels sont les trois ingrédients essentiels de la recette du bonheur au travail ?', 19),
(64, 'Quel est le concept de Room Saveurs ?', 19),
(65, 'Quelle est l\'activité principale de Room Saveurs ? ', 19),
(66, 'En quoi consiste le TWIST ?', 19),
(91, 'Combien pèse un éléphant à la naissance ?', 4),
(92, 'Jusqu\'à quel âge peut vivre un éléphant ?', 4),
(93, 'Comment appelle-t-on la personne qui s\'occupe de l\'exploitation et de l\'entretien d\'une forêt ?', 22),
(94, 'Quel est le nom donné à cette forêt de conifères du nord de l\'Eurasie ?', 22),
(95, 'Dans quelle mythologie Sucellos était-il le dieu de la forêt ?', 22),
(96, 'En sylviculture qu\'est-ce qu\'un baliveau ?', 22),
(97, 'Comment s\'appelle Batgirl ?', 21),
(98, 'Pourquoi Catwoman est-elle recherchée par la police ?', 21),
(99, 'Quel est l\'autre nom de l\'Homme-Mystère ?', 21),
(100, 'Quelle est l\'ancienne profession de Harley Quinn ?', 21),
(101, 'Avec qui Poison Ivy a-t-elle déjà coopéré ?', 21),
(102, 'Quel est l\'objet fétiche de Double Face ?', 21),
(103, 'Pourquoi le Pingouin s\'appelle-t-il ainsi ?', 21),
(104, 'Que veut Mr Freeze ?', 21),
(105, 'Quel animal est Killer Croc ?', 21),
(106, 'Quel est le prénom de l\'officier Gordon ?', 21),
(107, 'Où vit le marsupilami?', 10),
(108, 'Quel est le cri favori du marsupilami?', 10),
(109, 'Quel est le poisson que le marsupilami préfère manger?', 10),
(110, 'A quoi sert la queue du marsupilami?', 10),
(111, 'Comment s\'appellent les enfants du marsupilami?', 10),
(112, 'Dans quel pays cette Coupe du monde se déroule-t-elle ?', 5),
(113, 'Quel est le nom de la mascotte de la Coupe du monde 2018 ?', 5),
(114, 'Contre qui le Portugal jouera-t-il son premier match ?', 5),
(115, 'Quel pays n\'est pas dans le groupe de la France ?', 5),
(116, 'Quelle grande équipe ne s\'est pas qualifiée pour cette Coupe du monde ?', 5),
(117, 'Qui sera l\'entraîneur de l\'équipe brésilienne pour cette Coupe ?', 5),
(118, 'Dans quel groupe l\'Argentine est-elle ?', 5),
(119, 'Combien de temps dure la gestation chez les éléphants ?', 4),
(120, 'Quel poids maximal peuvent atteindre les éléphants ?', 4),
(121, 'A quelle tâche l\'éléphant passe-t-il le plus de temps ?', 4),
(122, 'Quelle quantité d\'eau boit en moyenne un éléphant adulte ?', 4),
(123, 'Une famille d\'éléphants se compose généralement ?', 4),
(124, 'L\'éléphant est un mammifère ', 4),
(125, 'Quel volcan situé en Antarctique est encore très actif ?', 8),
(126, 'D\'après les japonais, quel monstre se cache dans l\'Izu Oshima, volcan de l\'archipel d\'Izu ?', 8),
(127, 'Quel volcan se trouve au sommet de la plus haute montagne de Russie, avec 5 642 m ?', 8),
(128, 'Quel volcan culmine à plus de 2 800 mètres sur l\'île de la Réunion ?', 8),
(129, 'Quel est le plus haut volcan d\'Italie avec 3 323 mètres d\'altitude ?', 8),
(130, 'Quel écrivain anglais écrira Au-dessous du Volcan, en 1945 ?', 8),
(131, 'Dans la mythologie gréco-romaine, quel était le père de Vulcain ?', 8),
(132, 'En 1997, quel Pic va cracher sa lave dans un film de Roger Donaldson, avec Pierce Brosnan ?', 8);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `anwser_question_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE CASCADE;

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `Avoir_library_FK` FOREIGN KEY (`id_library`) REFERENCES `library` (`id_library`),
  ADD CONSTRAINT `Avoir_publication0_FK` FOREIGN KEY (`id_publication`) REFERENCES `publication` (`id_publication`);

--
-- Contraintes pour la table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_category_FK` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_library_FK` FOREIGN KEY (`id_library`) REFERENCES `library` (`id_library`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
