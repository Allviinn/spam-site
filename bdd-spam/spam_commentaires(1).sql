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
-- Structure de la table `spam_commentaires`
--

CREATE TABLE IF NOT EXISTS `spam_commentaires` (
`id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` varchar(20) NOT NULL,
  `id_spam_auteurs` int(11) NOT NULL,
  `id_spam_numeros` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `spam_commentaires`
--

INSERT INTO `spam_commentaires` (`id`, `commentaire`, `date_commentaire`, `id_spam_auteurs`, `id_spam_numeros`) VALUES
(3, 'Ceci est un test', '04/05/2017 11:05:15 ', 8, 3),
(4, '<qsdfs', '04/05/2017 02:32:16 ', 9, 4),
(5, 'sdfrgfgf', '04/05/2017 03:30:55 ', 10, 5),
(6, 'sdfrgfgf', '04/05/2017 03:34:00 ', 13, 5),
(7, 'sdfrgfgf', '04/05/2017 03:34:22 ', 14, 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spam_commentaires`
--
ALTER TABLE `spam_commentaires`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spam_commentaires`
--
ALTER TABLE `spam_commentaires`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
