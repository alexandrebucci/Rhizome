-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 12 Janvier 2014 à 10:51
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `incognito`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Nom` varchar(30) NOT NULL,
  `Pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id_C` int(5) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `Description` text NOT NULL,
  `Score` int(3) NOT NULL,
  `Id_U` int(5) NOT NULL,
  `Id_E` int(5) NOT NULL,
  PRIMARY KEY (`Id_C`),
  KEY `Id_U` (`Id_U`),
  KEY `Id_E` (`Id_E`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `Id_E` int(5) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Video` varchar(200) NOT NULL,
  `Resume` text NOT NULL,
  `Description` longtext NOT NULL,
  PRIMARY KEY (`Id_E`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `indice`
--

CREATE TABLE IF NOT EXISTS `indice` (
  `Id_I` int(5) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Id_E` int(5) NOT NULL,
  PRIMARY KEY (`Id_I`),
  KEY `Id_E` (`Id_E`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_U` int(4) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Pwd` varchar(15) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_U`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vote_commentaire`
--

CREATE TABLE IF NOT EXISTS `vote_commentaire` (
  `Id_U` int(11) NOT NULL,
  `Id_C` int(11) NOT NULL,
  KEY `Id_U` (`Id_U`),
  KEY `Id_C` (`Id_C`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vote_etape`
--

CREATE TABLE IF NOT EXISTS `vote_etape` (
  `Id_U` int(5) NOT NULL,
  `Id_E` int(5) NOT NULL,
  KEY `Id_U` (`Id_U`),
  KEY `Id_E` (`Id_E`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `indice`
--
ALTER TABLE `indice`
  ADD CONSTRAINT `indice_ibfk_1` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote_commentaire`
--
ALTER TABLE `vote_commentaire`
  ADD CONSTRAINT `vote_commentaire_ibfk_2` FOREIGN KEY (`Id_C`) REFERENCES `commentaire` (`Id_C`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_commentaire_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote_etape`
--
ALTER TABLE `vote_etape`
  ADD CONSTRAINT `vote_etape_ibfk_2` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_etape_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
