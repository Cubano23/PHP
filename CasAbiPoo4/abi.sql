-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 26 Septembre 2014 à 11:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `abi`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `IDACTIVITE` int(11) NOT NULL,
  `SECTEUR` char(20) DEFAULT NULL,
  PRIMARY KEY (`IDACTIVITE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`IDACTIVITE`, `SECTEUR`) VALUES
(1, 'Agroalimentaire'),
(2, 'Auto');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `IDCLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `IDACTIVITE` int(11) NOT NULL,
  `IDVILLE` int(11) NOT NULL,
  `RAISONSOCIALE` int(11) DEFAULT NULL,
  `CHIFFREAFFAIRES` int(11) DEFAULT NULL,
  `NATURE` char(30) DEFAULT NULL,
  `EMAILCLIENT` char(30) DEFAULT NULL,
  `TELCLIENT` char(15) DEFAULT NULL,
  `TYPECLIENT` char(20) DEFAULT NULL,
  `NOMCLIENT` char(30) DEFAULT NULL,
  PRIMARY KEY (`IDCLIENT`),
  KEY `FK_AVOIR` (`IDACTIVITE`),
  KEY `FK_SITUER` (`IDVILLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`IDCLIENT`, `IDACTIVITE`, `IDVILLE`, `RAISONSOCIALE`, `CHIFFREAFFAIRES`, `NATURE`, `EMAILCLIENT`, `TELCLIENT`, `TYPECLIENT`, `NOMCLIENT`) VALUES
(1, 1, 1, 123456789, 500, 'principale', 'toto@gmail.com', '0495872312', 'prive', 'LuandaSA'),
(2, 2, 2, 456789123, 1000, 'secondaire', 'titi@gmail.com', '0497521202', 'public', 'Kakoabi'),
(3, 1, 2, 123456789, 500000, 'principal', 'midas@hotmail.com', '452168973', 'prive', 'Midas'),
(4, 1, 2, 123456789, 500000, 'principal', 'midas@hotmail.com', '452168973', 'prive', 'Midas'),
(5, 2, 1, 123456789, 41230, 'principal', 'carrefour@gmail.com', '412958753', 'prive', 'Carrefour'),
(8, 1, 2, 123456789, 456213, 'principal', 'feuvert@gmail.com', '412958753', 'prive', 'feu vert'),
(9, 1, 1, 456789369, 100000, 'principal', 'ca@free.fr', '452168973', 'prive', 'c&a');

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

CREATE TABLE IF NOT EXISTS `collaborateur` (
  `MATRICULE` int(11) NOT NULL,
  `NOMCOL` char(32) DEFAULT NULL,
  `PRENOMCOL` char(32) DEFAULT NULL,
  `SALAIREBRUT` decimal(10,0) DEFAULT NULL,
  `PHOTOGRAPHIE` longblob,
  PRIMARY KEY (`MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `collaborateur`
--

INSERT INTO `collaborateur` (`MATRICULE`, `NOMCOL`, `PRENOMCOL`, `SALAIREBRUT`, `PHOTOGRAPHIE`) VALUES
(20123, 'Assuncao', 'Maria', '2000', NULL),
(20145, 'Fonseca', 'Roberto', '3000', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `IDCONTACT` int(11) NOT NULL AUTO_INCREMENT,
  `IDCLIENT` int(11) NOT NULL,
  `NOMCONT` char(32) DEFAULT NULL,
  `PRENOMCONT` char(32) DEFAULT NULL,
  `TELCONT` char(15) DEFAULT NULL,
  `FONCTIONCONT` char(20) DEFAULT NULL,
  PRIMARY KEY (`IDCONTACT`),
  KEY `FK_DISPOSER` (`IDCLIENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`IDCONTACT`, `IDCLIENT`, `NOMCONT`, `PRENOMCONT`, `TELCONT`, `FONCTIONCONT`) VALUES
(1, 1, 'Silva', 'Bruno', '0611568745', 'secretariat'),
(2, 2, 'Gomes', 'Jorge', '0625783205', 'Assistant');

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

CREATE TABLE IF NOT EXISTS `documentation` (
  `IDDOC` int(11) NOT NULL AUTO_INCREMENT,
  `IDCONTACT` int(11) NOT NULL,
  `IDPROJET` int(11) NOT NULL,
  `TITREDOC` char(50) DEFAULT NULL,
  `RESUMEDOC` char(255) DEFAULT NULL,
  `AUTEURDOC` char(30) DEFAULT NULL,
  `DATEEDITIONDOC` datetime DEFAULT NULL,
  PRIMARY KEY (`IDDOC`),
  KEY `FK_EDITER` (`IDPROJET`),
  KEY `FK_REDIGER` (`IDCONTACT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `documentation`
--

INSERT INTO `documentation` (`IDDOC`, `IDCONTACT`, `IDPROJET`, `TITREDOC`, `RESUMEDOC`, `AUTEURDOC`, `DATEEDITIONDOC`) VALUES
(1, 1, 1, NULL, NULL, 'Luis', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE IF NOT EXISTS `fonction` (
  `IDFONCTION` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLEFONCTION` char(50) DEFAULT NULL,
  PRIMARY KEY (`IDFONCTION`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`IDFONCTION`, `LIBELLEFONCTION`) VALUES
(1, 'Directeur'),
(2, 'Developpeur');

-- --------------------------------------------------------

--
-- Structure de la table `intervenir`
--

CREATE TABLE IF NOT EXISTS `intervenir` (
  `MATRICULE` int(11) NOT NULL,
  `IDPROJET` int(11) NOT NULL,
  `IDFONCTION` int(11) NOT NULL,
  PRIMARY KEY (`MATRICULE`,`IDPROJET`,`IDFONCTION`),
  KEY `FK_INTERVENIR2` (`IDPROJET`),
  KEY `FK_INTERVENIR3` (`IDFONCTION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `intervenir`
--

INSERT INTO `intervenir` (`MATRICULE`, `IDPROJET`, `IDFONCTION`) VALUES
(20123, 1, 1),
(20145, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `IDCONTACT` int(11) NOT NULL,
  `IDPROJET` int(11) NOT NULL,
  `DUREE` int(11) NOT NULL,
  PRIMARY KEY (`IDCONTACT`,`IDPROJET`),
  KEY `FK_PARTICIPER2` (`IDPROJET`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`IDCONTACT`, `IDPROJET`, `DUREE`) VALUES
(1, 1, 1250),
(2, 2, 1478);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `IDPROJET` int(11) NOT NULL AUTO_INCREMENT,
  `DATEPREVDEB` datetime DEFAULT NULL,
  `DATEPREVFIN` datetime DEFAULT NULL,
  `DATEREELDEB` datetime DEFAULT NULL,
  `DATEREELFIN` datetime DEFAULT NULL,
  `REMARQUEESTIME` char(255) DEFAULT NULL,
  `NOMPROJET` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDPROJET`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`IDPROJET`, `DATEPREVDEB`, `DATEPREVFIN`, `DATEREELDEB`, `DATEREELFIN`, `REMARQUEESTIME`, `NOMPROJET`) VALUES
(1, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'TestABI'),
(2, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Global');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(10) NOT NULL,
  `motPass` varchar(10) NOT NULL,
  PRIMARY KEY (`login`,`motPass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `motPass`) VALUES
('bruno', '123');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `IDVILLE` int(11) NOT NULL,
  `LIBELLEVILLE` char(25) DEFAULT NULL,
  PRIMARY KEY (`IDVILLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`IDVILLE`, `LIBELLEVILLE`) VALUES
(1, 'nice'),
(2, 'Paris');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`IDACTIVITE`) REFERENCES `activite` (`IDACTIVITE`),
  ADD CONSTRAINT `FK_SITUER` FOREIGN KEY (`IDVILLE`) REFERENCES `ville` (`IDVILLE`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_DISPOSER` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`IDCLIENT`);

--
-- Contraintes pour la table `documentation`
--
ALTER TABLE `documentation`
  ADD CONSTRAINT `FK_EDITER` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`IDPROJET`),
  ADD CONSTRAINT `FK_REDIGER` FOREIGN KEY (`IDCONTACT`) REFERENCES `contact` (`IDCONTACT`);

--
-- Contraintes pour la table `intervenir`
--
ALTER TABLE `intervenir`
  ADD CONSTRAINT `FK_INTERVENIR` FOREIGN KEY (`MATRICULE`) REFERENCES `collaborateur` (`MATRICULE`),
  ADD CONSTRAINT `FK_INTERVENIR2` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`IDPROJET`),
  ADD CONSTRAINT `FK_INTERVENIR3` FOREIGN KEY (`IDFONCTION`) REFERENCES `fonction` (`IDFONCTION`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `FK_PARTICIPER` FOREIGN KEY (`IDCONTACT`) REFERENCES `contact` (`IDCONTACT`),
  ADD CONSTRAINT `FK_PARTICIPER2` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`IDPROJET`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
