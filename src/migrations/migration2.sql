-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 avr. 2024 à 09:52
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vercors`
--

-- --------------------------------------------------------

--
-- Structure de la table `accommodation`
--

DROP TABLE IF EXISTS `accommodation`;
CREATE TABLE IF NOT EXISTS `accommodation` (
  `Id_reservation` int NOT NULL,
  `Id_tent` int NOT NULL,
  `Id_van` int NOT NULL,
  `chosen_dates` int DEFAULT NULL,
  PRIMARY KEY (`Id_reservation`,`Id_tent`,`Id_van`),
  KEY `Id_tent` (`Id_tent`),
  KEY `Id_van` (`Id_van`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contains`
--

DROP TABLE IF EXISTS `contains`;
CREATE TABLE IF NOT EXISTS `contains` (
  `Id_reservation` int NOT NULL,
  `Id_options` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`Id_reservation`,`Id_options`),
  KEY `Id_options` (`Id_options`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `date_pass`
--

DROP TABLE IF EXISTS `date_pass`;
CREATE TABLE IF NOT EXISTS `date_pass` (
  `Id_reservation` int NOT NULL,
  `Id_pass` int NOT NULL,
  `_date` date DEFAULT NULL,
  PRIMARY KEY (`Id_reservation`,`Id_pass`),
  KEY `Id_pass` (`Id_pass`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pass`
--

DROP TABLE IF EXISTS `pass`;
CREATE TABLE IF NOT EXISTS `pass` (
  `Id_pass` int NOT NULL AUTO_INCREMENT,
  `type` date DEFAULT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`Id_pass`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `resa`
--

DROP TABLE IF EXISTS `resa`;
CREATE TABLE IF NOT EXISTS `resa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombrePlaces` int DEFAULT NULL,
  `tarifReduit` varchar(255) DEFAULT NULL,
  `passSelection` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `choixJour` varchar(255) DEFAULT NULL,
  `emplacementTente` varchar(255) DEFAULT NULL,
  `emplacementCamion` varchar(255) DEFAULT NULL,
  `enfants` varchar(255) DEFAULT NULL,
  `nombreCasquesEnfants` varchar(255) DEFAULT NULL,
  `NombreLugesEte` varchar(255) DEFAULT NULL,
  `id_User` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_User_Resa` (`id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `resa`
--

INSERT INTO `resa` (`id`, `nombrePlaces`, `tarifReduit`, `passSelection`, `prix`, `choixJour`, `emplacementTente`, `emplacementCamion`, `enfants`, `nombreCasquesEnfants`, `NombreLugesEte`, `id_User`) VALUES
(1, 6, 'on', 'pass1jour', '150', 'du 01/07 au 03/07', '02/07, 03/07', '03/07', 'Enfants', '4', '3', NULL),
(2, 6, 'on', 'pass1jour', '150', 'du 01/07 au 03/07', '02/07, 03/07', '03/07', 'Enfants', '4', '3', NULL),
(3, 3, '', 'pass2jours', '210', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(4, 2, '', 'pass3jours', '200', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(5, 2, '', 'pass3jours', '200', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(6, 3, '', 'pass3jours', '300', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(7, 3, '', 'pass3jours', '300', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(8, 4, '', 'pass3jours', '400', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(9, 4, '', 'pass3jours', '400', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(10, 4, '', 'pass3jours', '400', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', NULL),
(11, 4, '', 'pass3jours', '400', 'du 01/07 au 03/07', '', '', 'Pas d\'enfants', '', '', 22);

-- --------------------------------------------------------

--
-- Structure de la table `vercors_options`
--

DROP TABLE IF EXISTS `vercors_options`;
CREATE TABLE IF NOT EXISTS `vercors_options` (
  `Id_options` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `stock` int NOT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`Id_options`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vercors_reservation`
--

DROP TABLE IF EXISTS `vercors_reservation`;
CREATE TABLE IF NOT EXISTS `vercors_reservation` (
  `Id_reservation` int NOT NULL AUTO_INCREMENT,
  `number_of_places` int NOT NULL,
  `is_discounted` tinyint(1) NOT NULL,
  `total_price` int NOT NULL,
  `Id_User` int NOT NULL,
  PRIMARY KEY (`Id_reservation`),
  KEY `Id_User` (`Id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vercors_reservation`
--

INSERT INTO `vercors_reservation` (`Id_reservation`, `number_of_places`, `is_discounted`, `total_price`, `Id_User`) VALUES
(1, 1, 0, 100, 1),
(2, 1, 0, 100, 1),
(3, 1, 0, 100, 1),
(4, 1, 0, 100, 1),
(5, 1, 0, 100, 1),
(6, 1, 0, 100, 1),
(7, 1, 0, 100, 1),
(8, 1, 0, 100, 1),
(9, 1, 0, 100, 1),
(10, 1, 0, 100, 1),
(11, 1, 0, 100, 1),
(12, 1, 0, 100, 1),
(13, 3, 0, 210, 1),
(14, 3, 0, 210, 1),
(15, 3, 0, 210, 1),
(16, 5, 0, 125, 1),
(17, 5, 0, 125, 1),
(18, 5, 0, 125, 1),
(19, 4, 0, 200, 1),
(20, 4, 0, 200, 1),
(21, 4, 0, 200, 1),
(22, 4, 0, 200, 1),
(23, 4, 0, 200, 1),
(24, 6, 0, 600, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vercors_tent`
--

DROP TABLE IF EXISTS `vercors_tent`;
CREATE TABLE IF NOT EXISTS `vercors_tent` (
  `Id_tent` int NOT NULL AUTO_INCREMENT,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`Id_tent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vercors_user`
--

DROP TABLE IF EXISTS `vercors_user`;
CREATE TABLE IF NOT EXISTS `vercors_user` (
  `Id_User` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(100) NOT NULL,
  `RGPD` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vercors_user`
--

INSERT INTO `vercors_user` (`Id_User`, `name`, `surname`, `phone`, `address`, `email`, `password`, `role`, `RGPD`) VALUES
(24, 'Romain', 'Dugeay', 658972483, '52 rue jean jacques rousseau', 'g.dugeay@gmail.com', '$2y$10$1B/1LS3izMHXuwG1cXjwkegzlDYbgaxYre//AkzCZ820gEwkCaS8a', '', 1),
(23, 'Romain', 'Dugeay', 658972483, '52 rue jean jacques rousseau', 'g.dugeay@gmail.com', '$2y$10$lTWFVvtj82bwa5ZBAcB3oeqXsDGCPRSqRvPnjSfatCZv/oTV0lojq', '', 1),
(22, 'Romain', 'Dugeay', 658972483, '52 rue jean jacques rousseau', 'romain.dugeay@gmail.com', '$2y$10$YCuuJWmt69jZRA7AsevWCeDsUVwLgd67WrBjUpp2qAALjCOhqiW2u', 'fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vercors_van`
--

DROP TABLE IF EXISTS `vercors_van`;
CREATE TABLE IF NOT EXISTS `vercors_van` (
  `Id_van` int NOT NULL AUTO_INCREMENT,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`Id_van`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
