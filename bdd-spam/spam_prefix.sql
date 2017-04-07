-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 06 Avril 2017 à 18:30
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
-- Structure de la table `spam_prefix`
--

CREATE TABLE IF NOT EXISTS `spam_prefix` (
`id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `pays` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `spam_prefix`
--

INSERT INTO `spam_prefix` (`id`, `code`, `pays`) VALUES
(1, 33, 'France'),
(2, 49, 'Allemagne'),
(3, 44, 'Royaume Uni'),
(4, 44, 'Angleterre'),
(5, 34, 'Espagne'),
(6, 39, 'Italie'),
(7, 41, 'Suisse'),
(8, 351, 'Portugal'),
(9, 31, 'Pays-Bas'),
(10, 32, 'Belgique'),
(11, 212, 'Maroc'),
(12, 216, 'Tunisie'),
(13, 213, 'Algérie'),
(14, 353, 'Irlande'),
(15, 596, 'Martinique'),
(16, 590, 'Guadeloupe'),
(17, 262, 'Réunion'),
(18, 687, 'Nouvelle Calédonie'),
(19, 225, 'Côte d''Ivoire'),
(20, 223, 'Mali'),
(21, 45, 'Danemark'),
(22, 7, 'Russie'),
(23, 86, 'Chine'),
(24, 52, 'Mexique'),
(25, 420, 'République-Tchèque'),
(26, 373, 'Moldavie'),
(27, 356, 'Malte'),
(28, 352, 'Luxembourg'),
(29, 387, 'Bosnie'),
(30, 375, 'Biélorussie'),
(31, 47, 'Norvège'),
(32, 359, 'Bulgarie'),
(33, 380, 'Ukraine'),
(34, 421, 'Slovaquie'),
(35, 43, 'Autriche'),
(36, 40, 'Roumanie'),
(37, 376, 'Andorre'),
(38, 30, 'Grèce'),
(39, 48, 'Pologne'),
(40, 386, 'Slovénie'),
(41, 61, 'Australie'),
(42, 381, 'Serbie'),
(43, 358, 'Finlande'),
(44, 357, 'Chypre'),
(45, 46, 'Suède'),
(46, 56, 'Chili'),
(47, 58, 'Venezuela'),
(48, 36, 'Hongrie'),
(49, 66, 'Thailande'),
(50, 94, 'Sri Lanka'),
(51, 423, 'Liechtenstein'),
(52, 371, 'Lettonie'),
(53, 355, 'Albanie'),
(54, 354, 'Islande'),
(55, 92, 'Pakistan'),
(56, 972, 'Israel'),
(57, 1, 'Canada ou Etats-Unis '),
(58, 963, 'Syrie'),
(59, 370, 'Lituanie'),
(60, 350, 'Gibraltar'),
(61, 385, 'Croatie'),
(62, 441, 'Aurigny'),
(63, 90, 'Turquie'),
(64, 230, 'Ile Maurice'),
(65, 27, 'Afrique du Sud'),
(66, 244, 'Angola'),
(67, 229, 'Benin'),
(68, 267, 'Botswana'),
(69, 53, 'Cuba'),
(70, 226, 'Burkina Faso'),
(71, 257, 'Burundi'),
(72, 237, 'Cameroun'),
(73, 238, 'Cap Vert'),
(74, 230, 'Ile Maurice'),
(75, 27, 'Afrique du Sud'),
(76, 269, 'Comores'),
(77, 243, 'Congo'),
(78, 242, 'Congo'),
(79, 253, 'Djibouti'),
(80, 20, 'Egypte'),
(81, 291, 'Erythrée'),
(82, 251, 'Ethiopie'),
(83, 241, 'Gabon'),
(84, 220, 'Gambie'),
(85, 233, 'Ghana'),
(86, 224, 'Guinée'),
(87, 245, 'Guinée Bissauo'),
(88, 240, 'Guinée Equatoriale'),
(89, 254, 'Kenya'),
(90, 266, 'Lesotho'),
(91, 218, 'Libye'),
(92, 261, 'Madagascar'),
(93, 265, 'Malawi'),
(94, 222, 'Mauritanie'),
(95, 269, 'Mayotte'),
(96, 258, 'Mozambique'),
(97, 264, 'Namibi'),
(98, 227, 'Niger'),
(99, 234, 'Nigeria'),
(100, 256, 'Auganda'),
(101, 236, 'République Centr-Africaine'),
(102, 250, 'Rwanda'),
(103, 221, 'Sénégal'),
(104, 248, 'Seychelles'),
(105, 232, 'Sierra Leone'),
(106, 252, 'Somalie'),
(107, 249, 'Soudan'),
(108, 268, 'Swaziland'),
(109, 255, 'Tanzanie'),
(110, 235, 'Tchad'),
(111, 228, 'togo'),
(112, 260, 'Zambie'),
(113, 263, 'Zimbabwe'),
(114, 1242, 'Bahamas'),
(115, 1441, 'Bermudes'),
(116, 299, 'Groenland'),
(117, 995, 'Georgie'),
(118, 855, 'Cambodge'),
(119, 673, 'Brunei'),
(120, 95, 'Birmanie'),
(121, 975, 'Bhoutan'),
(122, 880, 'Bangladesh'),
(123, 994, 'Azerbaïdjan'),
(124, 374, 'Arménie'),
(125, 93, 'Afghanistan'),
(126, 967, 'Yemen'),
(127, 974, 'Katar'),
(128, 970, 'Palestine'),
(129, 968, 'Oman'),
(130, 961, 'Liban'),
(131, 965, 'Koweit'),
(132, 962, 'Jordanie'),
(133, 98, 'Iran'),
(134, 964, 'Iraq'),
(135, 971, 'Emriats Arabes Unis'),
(136, 973, 'Bahrein'),
(137, 966, 'Arabie Saoudite'),
(138, 54, 'Argentine'),
(139, 591, 'Boulivie'),
(140, 55, 'Brezil'),
(141, 57, 'Colombie'),
(142, 593, 'Equateur'),
(143, 500, 'Falklands'),
(144, 592, 'Guyana'),
(145, 594, 'Guyane'),
(146, 595, 'Paraguay'),
(147, 51, 'Pérou'),
(148, 597, 'Surinam'),
(149, 598, 'Uruguay'),
(150, 852, 'Hong Kong'),
(151, 91, 'Inde'),
(152, 62, 'Indonésie'),
(153, 81, 'Japon'),
(154, 7, 'Kazakthstan'),
(155, 856, 'Laos'),
(156, 853, 'Macao'),
(157, 60, 'Malaisie'),
(158, 960, 'Maldives'),
(159, 976, 'Mongolie'),
(160, 977, 'Népal'),
(161, 998, 'Ouzbekistan'),
(162, 63, 'Philippines'),
(163, 65, 'Singapour'),
(164, 992, 'Tadjikistan'),
(165, 886, 'Taiwan'),
(166, 993, 'Turkmenistan'),
(167, 84, 'Vietnam'),
(168, 372, 'Estonie'),
(169, 441, 'Guernesey'),
(170, 481, 'Herm'),
(171, 534, 'Jersey'),
(172, 389, 'Macédoine'),
(173, 377, 'Monaco'),
(174, 378, 'Saint Marin'),
(175, 39, 'Vatican'),
(176, 64, 'Nouvelle Zélande'),
(177, 1767, 'Dominique');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spam_prefix`
--
ALTER TABLE `spam_prefix`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spam_prefix`
--
ALTER TABLE `spam_prefix`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
