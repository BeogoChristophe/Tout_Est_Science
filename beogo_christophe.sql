-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 nov. 2023 à 20:24
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
-- Base de données : `beogo_christophe`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` int(225) NOT NULL,
  `contenu` text CHARACTER SET armscii8 NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `dat_creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `profile_picture` blob,
  `avatar` blob,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`, `profile_picture`, `avatar`, `session_id`) VALUES
(7, 'Beogo', 'beogosbillchristophe@gmail.com', '$2y$10$//IuH8JbHm/Ww.NsuJchD.K/LQtQJ4SH8sKrJrQ4Cx3xIfAzH2NRK', NULL, '2023-10-11 05:27:24', 'pXmEhYwpO8017oZJMJRQ2e4mYPGIvgb4TR2gX2po5j0DyhkNhOvPZ5JVR9aOnbR7KoD6JVHG74twH8VuSsnaD1k60tkkA4aN1Iib', '2023-10-28 21:09:01', 'a0EIKV887xNuHr2IqK0GP4Ku4AQkcHVNPncJoDYtJb1NnKLGxQggVGznXUVWNeTpNBnDLbSb06xBLAUw35fDg7SFn6WrfMDxfNVm', NULL, NULL, NULL),
(17, 'ouattara', 'fadelouattara@92gmail.com', '$2y$10$t8DqMrb6ZLD7l.3yeoIFyexuKZ0q1mceRqOBMi0cN7NLzDSTN024e', NULL, '2023-11-04 00:28:37', NULL, NULL, NULL, '', '', NULL),
(18, 'rafiaguene', 'rafianatama@gmail.com', '$2y$10$hYNkRipdLckRek3nYao82uU0oE9l9mMmbR9z0QaPIGiZPui70awdm', NULL, '2023-11-04 00:38:38', NULL, NULL, 'HrzIzOBDa8ATeyvnN4CxlS1ApVysKqCjssF8ExChSCza2GxffVY5qqE9nzKujkeirKfc3XsiwZHqzLXAQ0ItY0O4qVA5vNAGK0ru', '', '', NULL),
(19, 'ghost', 'christophe@gmail.com', '$2y$10$xCw0SCZCF.lF03yBCvKjEudhNVMTSBxoQlCHva1/g.Bldl50oYaHe', NULL, '2023-11-06 07:37:33', NULL, NULL, NULL, '', '', NULL),
(20, 'Cedric', 'cedric@gmail.com', '$2y$10$TiLEJx.wTBxVUKYv4k0UjOpe1bqjq9QST5XjGVHN2x5hZ0AQRrRLm', NULL, '2023-11-06 10:13:35', NULL, NULL, NULL, '', '', NULL),
(23, 'fadel', 'oatt@gmail.com', '$2y$10$SKWGlRb8tGN.BwHRcU6r.utZR/urtKiMqQAkjToYM1s927a6mj8iK', NULL, '2023-11-07 14:40:43', 'Mx7fVAGzIC9wYth1ijxQI75H4PYPcub2EwtxyDKpnl9mPOyj8oSN8LchkWhQEKR0OwtHvTPyz6ny5MdTISdTh3YfeVXqwk8b7Emo', '2023-11-07 14:45:07', NULL, '', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
