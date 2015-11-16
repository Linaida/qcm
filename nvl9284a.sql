-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Novembre 2015 à 20:24
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nvl9284a`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `login`, `password`, `email`, `role`) VALUES
(1, 'test', 'test', 'erat.eget@odiosagittis.ca', 'etudiant'),
(2, 'Anika', 'ZHE84RGR7MH', 'Aliquam.rutrum@senectus.edu', 'etudiant'),
(3, 'Duncan', 'FRC90EQW5DP', 'pretium.aliquet.metus@pretium.com', 'etudiant'),
(4, 'Uriel', 'HZU97FAI0MU', 'Aliquam.nec@tinciduntnibh.ca', 'professeur'),
(5, 'Hanae', 'ULS16VAL6HM', 'Aliquam.erat.volutpat@felisullamcorperviverra.co.uk', 'etudiant'),
(6, 'Leigh', 'AFR34GMB7RA', 'Proin@augueporttitorinterdum.ca', 'etudiant'),
(7, 'Xandra', 'OHM24ZVA9RG', 'nisl.elementum@egettinciduntdui.co.uk', 'etudiant'),
(8, 'Hadassah', 'JRJ78PBR7BO', 'consequat.nec@dolornonummyac.ca', 'professeur'),
(9, 'Kennedy', 'VDP38IXK3HW', 'mi.lorem.vehicula@maurissapiencursus.ca', 'etudiant'),
(10, 'Eliana', 'AFJ23FHM8EQ', 'tempor@dictum.edu', 'professeur'),
(11, 'Noelle', 'RRH34KCU4YR', 'nulla.magna.malesuada@Maurismolestiepharetra.edu', 'etudiant'),
(12, 'Lars', 'NVN79YSE2OI', 'mi@est.org', 'professeur'),
(13, 'Leigh', 'IBM89OXS4PO', 'ipsum.leo@Phasellusliberomauris.ca', 'etudiant'),
(14, 'Candace', 'KLZ46ZOH5KJ', 'quam@Suspendissecommodo.co.uk', 'professeur'),
(15, 'Kirsten', 'MPK62KLI3XQ', 'dapibus.rutrum.justo@Donecnibh.com', 'etudiant'),
(16, 'Fallon', 'QWV88CAH3DL', 'non.feugiat.nec@dictumeu.com', 'etudiant'),
(17, 'Yuli', 'FWA31TAR8SN', 'aliquet.diam.Sed@convalliserateget.net', 'etudiant'),
(18, 'Shafira', 'MJY69GGM3QA', 'non@etlacinia.ca', 'professeur'),
(19, 'Haviva', 'DJW33HAR2ID', 'non.ante.bibendum@at.net', 'professeur'),
(20, 'Whilemina', 'QJW05NVI0LE', 'risus@semvitaealiquam.net', 'etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `question_reponse`
--

CREATE TABLE IF NOT EXISTS `question_reponse` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `titre` text,
  `auteur_id` mediumint(9) DEFAULT NULL,
  `theme` text,
  `reponse` varchar(255) DEFAULT NULL,
  `marqueur` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `question_reponse`
--

INSERT INTO `question_reponse` (`id`, `titre`, `auteur_id`, `theme`, `reponse`, `marqueur`) VALUES
(1, 'Nunc ut erat. Sed nunc', 18, 'lorem ac', 'titi', 3),
(2, 'orci lacus vestibulum lorem, sit amet', 81, 'facilisis', 'toto', 1),
(3, 'elit erat vitae risus. Duis a mi fringilla mi', 10, 'vulputate,', 'tata', 3),
(4, 'molestie pharetra nibh.', 18, 'sagittis. Duis gravida.', 'titi', 3),
(5, 'molestie dapibus ligula. Aliquam erat', 43, 'Curabitur ut odio', 'titi', 4),
(6, 'ligula. Aenean euismod mauris eu elit. Nulla', 81, 'sed tortor.', 'tata', 1),
(7, 'eu, ultrices sit', 75, 'urna justo faucibus', 'tutu', 2),
(8, 'molestie pharetra nibh. Aliquam ornare, libero at', 19, 'luctus et ultrices', 'titi', 4),
(9, 'adipiscing', 44, 'non,', 'tutu', 2),
(10, 'velit.', 43, 'netus et', 'tata', 2),
(11, 'interdum libero dui', 79, 'risus a ultricies', 'titi', 1),
(12, 'amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet', 68, 'nulla', 'tata', 3),
(13, 'vitae diam. Proin dolor. Nulla semper tellus id nunc', 87, 'augue ac', 'toto', 1),
(14, 'mauris ut', 16, 'fringilla mi', 'tata', 1),
(15, 'morbi tristique senectus et netus et malesuada fames ac', 34, 'a nunc. In', 'tutu', 4),
(16, 'ipsum. Phasellus vitae mauris sit amet lorem semper', 30, 'mauris.', 'toto', 1),
(17, 'volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus', 90, 'justo sit amet', 'tata', 1),
(18, 'Nullam velit dui, semper et, lacinia vitae,', 45, 'elit, dictum', 'toto', 3),
(19, 'Cum sociis natoque penatibus et magnis dis parturient', 75, 'purus gravida sagittis.', 'titi', 4),
(20, 'turpis egestas. Fusce aliquet magna a neque. Nullam ut', 7, 'orci tincidunt adipiscing.', 'titi', 3),
(21, 'auctor velit. Aliquam nisl. Nulla eu neque pellentesque', 64, 'aliquet, sem', 'titi', 2),
(22, 'luctus, ipsum', 74, 'Suspendisse', 'titi', 1),
(23, 'habitant morbi tristique senectus et netus et', 18, 'venenatis vel, faucibus', 'titi', 2),
(24, 'pellentesque, tellus sem mollis', 87, 'convallis', 'tutu', 3),
(25, 'dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare', 21, 'non justo. Proin', 'titi', 3),
(26, 'feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem', 37, 'ornare egestas', 'tutu', 2),
(27, 'fringilla purus', 80, 'non, luctus sit', 'titi', 2),
(28, 'elementum, dui quis', 21, 'vitae,', 'toto', 3),
(29, 'auctor. Mauris vel turpis. Aliquam', 48, 'elementum, dui quis', 'tutu', 1),
(30, 'risus odio,', 37, 'elit,', 'titi', 2),
(31, 'auctor vitae, aliquet nec, imperdiet nec, leo. Morbi', 84, 'et netus et', 'titi', 3),
(32, 'magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum', 81, 'sit amet', 'tata', 1),
(33, 'Nunc ut erat. Sed nunc est, mollis non,', 6, 'sodales', 'titi', 1),
(34, 'tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla', 65, 'enim mi tempor', 'tutu', 3),
(35, 'tempus, lorem fringilla ornare placerat, orci lacus', 32, 'egestas.', 'titi', 3),
(36, 'mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', 46, 'sapien. Aenean massa.', 'tata', 4),
(37, 'imperdiet ornare. In faucibus. Morbi', 7, 'egestas a,', 'titi', 1),
(38, 'semper, dui lectus rutrum urna, nec', 39, 'risus. Nulla', 'tutu', 2),
(39, 'et nunc. Quisque ornare tortor at risus. Nunc ac', 71, 'et risus.', 'tutu', 2),
(40, 'nascetur ridiculus mus. Proin vel arcu eu odio tristique', 46, 'ipsum ac', 'titi', 4),
(41, 'ut, molestie in,', 39, 'dolor sit amet,', 'tutu', 1),
(42, 'vitae,', 68, 'Aenean massa. Integer', 'tutu', 2),
(43, 'nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit', 39, 'accumsan', 'titi', 1),
(44, 'mauris', 35, 'condimentum', 'titi', 4),
(45, 'mauris. Integer sem elit, pharetra ut,', 70, 'Nunc', 'toto', 3),
(46, 'metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt', 6, 'orci', 'tata', 3),
(47, 'magna a tortor. Nunc commodo auctor velit. Aliquam nisl.', 39, 'faucibus orci luctus', 'tata', 1),
(48, 'pellentesque. Sed dictum. Proin eget odio.', 71, 'vitae', 'toto', 2),
(49, 'fermentum vel, mauris.', 17, 'rutrum urna, nec', 'tata', 4),
(50, 'accumsan neque et nunc. Quisque ornare tortor at', 68, 'lorem semper auctor.', 'tata', 3),
(51, 'justo. Praesent luctus. Curabitur', 16, 'bibendum sed, est.', 'tutu', 3),
(52, 'velit egestas lacinia. Sed', 57, 'Nulla eu', 'tata', 2),
(53, 'diam. Proin dolor. Nulla', 47, 'risus quis', 'titi', 3),
(54, 'dui, nec tempus mauris erat eget ipsum. Suspendisse', 28, 'magna.', 'titi', 1),
(55, 'Donec tempus, lorem fringilla ornare', 18, 'iaculis', 'tata', 3),
(56, 'dui nec urna suscipit nonummy. Fusce fermentum', 6, 'est, mollis non,', 'tata', 2),
(57, 'et pede. Nunc sed orci lobortis augue scelerisque mollis.', 78, 'Phasellus elit', 'tutu', 2),
(58, 'dui. Cum sociis natoque penatibus et magnis dis parturient', 18, 'Donec non justo.', 'toto', 4),
(59, 'luctus ut, pellentesque', 20, 'cursus. Integer', 'tata', 2),
(60, 'ultrices posuere', 33, 'Aliquam', 'titi', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
