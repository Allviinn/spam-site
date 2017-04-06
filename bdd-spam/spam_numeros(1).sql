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
-- Structure de la table `spam_numeros`
--

CREATE TABLE IF NOT EXISTS `spam_numeros` (
`id` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_ajout` varchar(20) NOT NULL,
  `id_spam_auteurs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `spam_numeros`
--

INSERT INTO `spam_numeros` (`id`, `numero`, `type`, `date_ajout`, `id_spam_auteurs`) VALUES
(3, '0786657833', 'sms', '04/05/2017 11:05:15 ', 8),
(4, '123', 'Sms', '04/05/2017 02:32:16 ', 9),
(5, '145', 'Sms', '04/05/2017 03:30:55 ', 10);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spam_numeros`
--
ALTER TABLE `spam_numeros`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spam_numeros`
--
ALTER TABLE `spam_numeros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
