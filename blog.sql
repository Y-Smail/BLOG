-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 mars 2018 à 16:08
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `DATEN` varchar(30) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `ADR` varchar(60) NOT NULL,
  `DATEF` varchar(30) NOT NULL,
  `ABN` varchar(30) NOT NULL,
  `TYPER` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`ID`, `NOM`, `PRENOM`, `DATEN`, `EMAIL`, `ADR`, `DATEF`, `ABN`, `TYPER`) VALUES
(9, 'Yaici', 'Smail', '', 'yaici.smail@gmail.com', '3 rue France', '2018-02-27', 'oui', 'auto'),
(8, 'GENDERS', 'SION', '', 'Sion@gmail.com', '20 rue France', '2018-03-14', 'oui', 'manuel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
