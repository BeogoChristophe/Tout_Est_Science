-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 nov. 2023 à 20:25
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `courses`
--

-- --------------------------------------------------------

--
-- Structure de la table `algebre`
--

DROP TABLE IF EXISTS `algebre`;
CREATE TABLE IF NOT EXISTS `algebre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `algebre`
--

INSERT INTO `algebre` (`id`, `titre`, `type`, `url`) VALUES
(1, 'ensembles', 'pdf', 'http://localhost:80/ensemble.pdf'),
(2, 'Operation sur les ensembles', 'pdf', 'http://localhost:80/raisonnement et logique.pdf'),
(3, 'Relation', 'pdf', 'http://localhost:80/relation_binaire.pdf '),
(4, 'Fonction', 'pdf', 'http://localhost:80/Cours et exercices avec solutions.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `algorithme`
--

DROP TABLE IF EXISTS `algorithme`;
CREATE TABLE IF NOT EXISTS `algorithme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(225) DEFAULT NULL,
  `type` varchar(255) CHARACTER SET armscii8 DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `algorithme`
--

INSERT INTO `algorithme` (`id`, `titre`, `type`, `url`) VALUES
(1, 'Introduction à l\'algorithme', 'pdf', 'http://localhost:80/introduction-to-algorithms_compress.pdf'),
(4, 'Introduction %à% l algorithme', 'pdf', 'http://localhost:80/introduction-to-algorithmscompress.pdf'),
(3, 'Introduction %à% l algorithme', 'pdf', 'http://localhost:80/introduction-to-algorithmscompress.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `analyse`
--

DROP TABLE IF EXISTS `analyse`;
CREATE TABLE IF NOT EXISTS `analyse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) CHARACTER SET armscii8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `analyse`
--

INSERT INTO `analyse` (`id`, `titre`, `type`, `url`) VALUES
(1, 'Suite Numérique', 'pdf', 'http://localhost:80/COURS SUITES.pdf'),
(2, 'Exercice d\'Intégrale', 'pdf', 'http://localhost:80/exos-calcul-integral.pdf'),
(3, 'Dérivée de fonctions', '', 'http://localhost:80/Derivabilite.pdf'),
(4, 'Cours d\'Intégration', 'pdf', 'http://localhost:80/Feuilletage.pdf'),
(5, 'Fonction usuelle', 'pdf', 'http://localhost:80/fonctionContinue.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `chimie`
--

DROP TABLE IF EXISTS `chimie`;
CREATE TABLE IF NOT EXISTS `chimie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `electricite`
--

DROP TABLE IF EXISTS `electricite`;
CREATE TABLE IF NOT EXISTS `electricite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mecaniquedupoint`
--

DROP TABLE IF EXISTS `mecaniquedupoint`;
CREATE TABLE IF NOT EXISTS `mecaniquedupoint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `physique`
--

DROP TABLE IF EXISTS `physique`;
CREATE TABLE IF NOT EXISTS `physique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programmation`
--

DROP TABLE IF EXISTS `programmation`;
CREATE TABLE IF NOT EXISTS `programmation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
