-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2020 at 03:10 AM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`categorie`) VALUES
('universitaire'),
('professionnelle'),
('secondaire'),
('moyenne'),
('primaire'),
('maternelle');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idComm` int(11) NOT NULL AUTO_INCREMENT,
  `idEcole` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `dateComm` date NOT NULL,
  PRIMARY KEY (`idComm`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`idComm`, `idEcole`, `idUser`, `commentaire`, `dateComm`) VALUES
(7, 1, 1, 'pas mal', '2019-01-13'),
(6, 1, 1, 'j\'aime bien cette Ã©cole !', '2019-01-13'),
(8, 2, 2, 'c\'est super !', '2019-01-13'),
(9, 1, 1, 'nouveau', '2019-01-13'),
(10, 1, 1, 'test', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `commune` varchar(50) COLLATE utf8_bin NOT NULL,
  `wilaya` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`commune`,`wilaya`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `commune`
--

INSERT INTO `commune` (`commune`, `wilaya`) VALUES
('Boumerdes-centre', 'Boumerdes'),
('Dar-El-Beida', 'Alger'),
('El-Eulma', 'Sétif'),
('Es-Senia', 'Oran'),
('Es-Senia', 'Tizi-Ouzou'),
('Hussein-Dey', 'Alger'),
('Ibn-Badis', 'Constantine'),
('Lakhdaria', 'Bouira'),
('Mansoura', 'Mostaganem');

-- --------------------------------------------------------

--
-- Table structure for table `domaineformation`
--

DROP TABLE IF EXISTS `domaineformation`;
CREATE TABLE IF NOT EXISTS `domaineformation` (
  `domaineFormation` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`domaineFormation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `domaineformation`
--

INSERT INTO `domaineformation` (`domaineFormation`) VALUES
('Commerce'),
('Electronique'),
('Finance'),
('Hôtellerie'),
('Plomberie');

-- --------------------------------------------------------

--
-- Table structure for table `ecoleformation`
--

DROP TABLE IF EXISTS `ecoleformation`;
CREATE TABLE IF NOT EXISTS `ecoleformation` (
  `idEcole` int(11) NOT NULL AUTO_INCREMENT,
  `nomEcole` varchar(500) COLLATE utf8_bin NOT NULL,
  `wilaya` varchar(500) COLLATE utf8_bin NOT NULL,
  `commune` varchar(500) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(500) COLLATE utf8_bin NOT NULL,
  `telEcole` varchar(500) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(500) COLLATE utf8_bin NOT NULL,
  `fax` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idEcole`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ecoleformation`
--

INSERT INTO `ecoleformation` (`idEcole`, `nomEcole`, `wilaya`, `commune`, `adresse`, `telEcole`, `categorie`, `fax`) VALUES
(1, 'Ecole Supérieure de Commerce', 'Oran', 'Es-Senia', '50 Rue des martyrs', '031 56 25 70', 'universitaire', '031 56 30 50'),
(2, 'Ecole Supérieure d’Electronique', 'Boumerdes', 'Boumerdes-centre', '3500 Rue de la liberté', '035 56 25 70', 'universitaire', '035 56 30 50'),
(3, 'Institue d’hôtellerie et restauration', 'Tizi-Ouzou', 'Es-Senia', '0 Rue des martyrs', '021 56 25 70', 'professionnelle', '021 56 30 50 / 56 51 54'),
(4, 'Institue des métiers de plomberie et chauffage', 'Sétif', 'El-Eulma', '50 Rue de la liberté', '021 56 25 70', 'professionnelle', '021 56 30 50 / 56 51 54'),
(5, 'Ecole El-Falah', 'Mostaganem', 'Mansoura', '50 Rue de la liberté', '021 56 25 70', 'secondaire', '021 56 30 50 / 56 51 54'),
(6, 'Ecole El-Nadjah', 'Constantine', 'Ibn-Badis', '50 Rue des martyrs', '021 56 25 70', 'secondaire', '021 56 30 50 / 56 51 54'),
(7, 'Ecole Madrassati', 'Alger', 'Hussein-Dey', '50 Rue de la gare', '021 56 25 70', 'moyenne', '021 56 30 50 / 56 51 54'),
(8, 'Ecole El-Nadjah', 'Constantine', 'Ibn-Badis', '50 Rue des oliviers', '021 56 25 70', 'moyenne', '021 56 30 50 / 56 51 54'),
(9, 'Ecole El-Nadjihine', 'Bouira', 'Lakhdaria', '50 Rue des dunes', '021 56 25 70', 'primaire', '021 56 30 50 / 56 51 54'),
(10, 'Ecole Madrassati', 'Alger', 'Hussein-Dey', '50 Rue des oliviers', '021 56 25 70', 'primaire', '021 56 30 50 / 56 51 54'),
(11, 'Ecole Les Poussins', 'Alger', 'Dar-El-Beida', '50 Rue de la liberté', '021 56 25 70', 'maternelle', '021 56 30 50 / 56 51 54'),
(12, 'Ecole Madrassati', 'Alger', 'Hussein-Dey', '50 Rue des martyrs', '021 56 25 70', 'maternelle', '021 56 30 50 / 56 51 54'),
(13, 'test', 'Boumerdes', '. Boumerdes-centre', '@@@', '000', 'moyenne', '000'),
(14, 'test', 'Alger', '. Dar-El-Beida', '@@@', '0000', 'universitaire', '0000'),
(15, 'test', 'Alger', '. Dar-El-Beida', '@@@', '000', 'universitaire', '000');

-- --------------------------------------------------------

--
-- Table structure for table `ecole_domaine`
--

DROP TABLE IF EXISTS `ecole_domaine`;
CREATE TABLE IF NOT EXISTS `ecole_domaine` (
  `idEcole` int(11) NOT NULL,
  `domaineFormation` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idEcole`,`domaineFormation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ecole_domaine`
--

INSERT INTO `ecole_domaine` (`idEcole`, `domaineFormation`) VALUES
(1, 'Commerce'),
(1, 'Finance'),
(2, 'Electronique'),
(3, 'Hôtellerie'),
(4, 'Plomberie');

-- --------------------------------------------------------

--
-- Table structure for table `reponse_commentaire`
--

DROP TABLE IF EXISTS `reponse_commentaire`;
CREATE TABLE IF NOT EXISTS `reponse_commentaire` (
  `idRepComm` int(11) NOT NULL AUTO_INCREMENT,
  `idComm` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `reponse` text COLLATE utf8_bin NOT NULL,
  `dateRep` date NOT NULL,
  PRIMARY KEY (`idRepComm`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reponse_commentaire`
--

INSERT INTO `reponse_commentaire` (`idRepComm`, `idComm`, `idUser`, `reponse`, `dateRep`) VALUES
(4, 6, 1, 'Merci !', '2019-01-13'),
(3, 6, 1, 'oooo', '2019-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(500) COLLATE utf8_bin NOT NULL,
  `password` varchar(500) COLLATE utf8_bin NOT NULL,
  `type` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `pseudo`, `password`, `type`) VALUES
(1, 'houda', '1996', 'admin'),
(2, 'ryma', '1992', 'simple'),
(3, 'karim', 'karim', 'ecole'),
(4, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wilaya`
--

DROP TABLE IF EXISTS `wilaya`;
CREATE TABLE IF NOT EXISTS `wilaya` (
  `wilaya` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `wilaya`
--

INSERT INTO `wilaya` (`wilaya`) VALUES
('Oran'),
('Boumerdes'),
('Alger'),
('El-Oued'),
('Tizi-ouzou'),
('Béjaia'),
('Sétif'),
('Blida'),
('Bechar'),
('Mostaganem'),
('Constantine'),
('Tlemcen'),
('Chlef'),
('Bouira'),
('Tipaza'),
('Ghardaïa'),
('Sidi-Bel-Abbès');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
