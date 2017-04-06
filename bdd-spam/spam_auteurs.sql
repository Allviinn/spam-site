-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 06 Avril 2017 à 13:15
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mujkic`
--

-- --------------------------------------------------------

--
-- Structure de la table `spam_auteurs`
--

CREATE TABLE IF NOT EXISTS `spam_auteurs` (
`id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `spam_auteurs`
--

INSERT INTO `spam_auteurs` (`id`, `pseudo`, `email`) VALUES
(8, 'Bosniaque', 'bla@gmail.com'),
(9, 'gkk', 'dfhfh'),
(10, 'sfgh', 'sfgbxbf'),
(11, 'sfgh', 'sfgbxbf'),
(12, 'sfgh', 'sfgbxbf'),
(13, 'sfgh', 'sfgbxbf'),
(14, 'sfgh', 'sfgbxbf');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spam_auteurs`
--
ALTER TABLE `spam_auteurs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spam_auteurs`
--
ALTER TABLE `spam_auteurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
