-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 18 Janvier 2014 à 17:30
-- Version du serveur: 5.5.16-log
-- Version de PHP: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `incognito`
--
CREATE DATABASE IF NOT EXISTS `incognito` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `incognito`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Nom` varchar(30) NOT NULL,
  `Pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`Nom`, `Pwd`) VALUES
('admin', 'incognistar');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id_C` int(5) NOT NULL AUTO_INCREMENT,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `ResumeCourt` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_E`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`Id_E`, `Titre`, `Date`, `Video`, `Resume`, `Description`, `ResumeCourt`) VALUES
(1, 'N°1', '2014-01-20', 'video/etape1/video1.avi', 'Premiere étape du projetV', 'Voici la premiere étape du projet incognito réalisé par des étudiants de M1 PSM ', ''),
(2, 'N°2', '2014-02-08', 'videos/etapes2/video.avi', '2eme étape', 'Voicie la 2eme etape du projet icognito ', ''),
(3, 'N°3', '2014-02-22', 'videos/etape3.avi', 'blabla', 'bla bla bla bla bla bla', ''),
(4, 'N°4', '2014-03-02', 'videos/etape4.avi', 'totoototo', 'tototototot', ''),
(5, 'N°5', '2014-03-08', 'http://youtube.com ', 'Etape N° 5', '5e étape du projet', 'Etape 5');

-- --------------------------------------------------------

--
-- Structure de la table `indice`
--

CREATE TABLE IF NOT EXISTS `indice` (
  `Id_I` int(5) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Lat` float NOT NULL,
  `Long` float NOT NULL,
  `Id_E` int(5) NOT NULL,
  PRIMARY KEY (`Id_I`),
  KEY `Id_E` (`Id_E`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `indice`
--

INSERT INTO `indice` (`Id_I`, `Type`, `Titre`, `Description`, `Photo`, `Date`, `Url`, `Lat`, `Long`, `Id_E`) VALUES
(2, 'toto', 'toto', 'tototoototorgnl', '', '0000-00-00', '', 0, 0, 3),
(3, 'lien', 'aa', 'photo de monbéliard', 'images/etape1/indice1', '0000-00-00', '', 0, 0, 1),
(4, 'Map', 'toto', 'otot', 'glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(5, 'Plan', 'aa', 'fe', 'texture.png', '0000-00-00', '', 0, 0, 3),
(6, 'Plan', 'aa', 'fe', 'texture.png', '0000-00-00', '', 0, 0, 3),
(7, 'Plan', 'aa', 'fe', 'texture.png', '0000-00-00', '', 0, 0, 3),
(8, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(9, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(10, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(11, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(12, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(13, 'Plan', 'aa', 'fe', 'imgtexture.png', '0000-00-00', '', 0, 0, 3),
(14, 'Plan', 'aa', 'fe', 'img/etape/texture.png', '0000-00-00', '', 0, 0, 3),
(18, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(19, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(20, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(21, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(22, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(23, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(24, 'toto', 'aa', 'halfwings', 'img/etape/glyphicons-halflings-white.png', '0000-00-00', '', 0, 0, 1),
(26, 'Plan', 'indice1', 'elfnalefnùv', 'img/indice/21.png', '0000-00-00', '', 0, 0, 1),
(27, 'lien', 'toto', 'k,aefe', 'img/indice/22.', '0000-00-00', '', 0, 0, 1),
(28, 'lien', 'toto', 'k,aefe', 'img/indice/22.', '0000-00-00', '', 0, 0, 1),
(29, 'lien', 'toto', 'k,aefe', 'img/indice/etape1/22.', '0000-00-00', '', 0, 0, 1),
(30, 'lien', 'toto', 'k,aefe', 'img/indice/etape1/22.', '0000-00-00', '', 0, 0, 1),
(31, 'lien', 'toto', 'k,aefe', 'img/indice/etape1/22.svg+xml', '0000-00-00', '', 0, 0, 1),
(33, '', '', '', 'img/indice/etape1/27.jpeg', '0000-00-00', '', 0, 0, 1),
(34, '', '', '', 'img/indice/etape2/28.jpeg', '0000-00-00', '', 0, 0, 2),
(35, 'toto', 'maef', 'efaf', 'img/indice/etape1/29.', '0000-00-00', '', 0, 0, 1),
(36, 'toto', 'maef', 'efaf', 'img/indice/etape1/29.', '0000-00-00', '', 0, 0, 1),
(37, 'toto', 'maef', 'efaf', 'img/indice/etape1/29.', '0000-00-00', '', 0, 0, 1),
(38, 'toto', 'maef', 'efaf', '', '0000-00-00', '', 0, 0, 1),
(39, 'toto', 'NNN', 'efaf', '', '0000-00-00', '', 0, 0, 1),
(40, 'Article', 'kk', '', '', '0000-00-00', 'http://googleee.com', 0, 0, 1),
(42, 'Photo', 'oto', '', '', '2014-01-17', '', 0, 0, 1),
(43, 'Photo', '', '', '', '0000-00-00', '', 0, 0, 1),
(44, 'Plan', '', '', '', '0000-00-00', '', 1.2034, 21.404, 2),
(45, 'Plan', 'Toto', 'totototototototototototo', '', '0000-00-00', '', 47.5093, 6.7963, 1),
(46, 'Plan', 'Toto', 'Toto était ici ', '', '0000-00-00', 'http://www.google.com', 47.5078, 6.8006, 1);

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
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `indice`
--
ALTER TABLE `indice`
  ADD CONSTRAINT `indice_ibfk_1` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote_commentaire`
--
ALTER TABLE `vote_commentaire`
  ADD CONSTRAINT `vote_commentaire_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_commentaire_ibfk_2` FOREIGN KEY (`Id_C`) REFERENCES `commentaire` (`Id_C`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vote_etape`
--
ALTER TABLE `vote_etape`
  ADD CONSTRAINT `vote_etape_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `utilisateur` (`Id_U`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_etape_ibfk_2` FOREIGN KEY (`Id_E`) REFERENCES `etape` (`Id_E`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
