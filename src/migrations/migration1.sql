-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 mars 2024 à 10:00
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `password` varchar(8) NOT NULL,
  `role` varchar(100) NOT NULL,
  `RGPD` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
