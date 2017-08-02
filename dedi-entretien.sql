-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 02 Août 2017 à 14:03
-- Version du serveur :  5.6.31
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dedi-entretien`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `bureau` varchar(25) NOT NULL,
  `problem` text NOT NULL,
  `info_pc` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `suivi` varchar(25) NOT NULL DEFAULT 'En cour'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id`, `nom`, `bureau`, `problem`, `info_pc`, `description`, `date`, `suivi`) VALUES
(1, 'Lambert', '16', 'Un ou plusieurs ordinateur(s)', 'Pc portable et fixe', 'Ã§a fonctionne pas.', '2017-08-02 13:16:40', 'En cour'),
(2, 'Lambert', '16', 'Un ou plusieurs ordinateur(s)', 'Pc portable et fixe', 'Ã§a fonctionne pas.', '2017-08-02 13:18:40', 'En cour'),
(3, 'Lambert', '16', 'Un ou plusieurs ordinateur(s)', 'Pc portable et fixe', 'Ã§a fonctionne pas.', '2017-08-02 13:18:50', 'En cour'),
(4, 'Lambert', '16', 'Un ou plusieurs ordinateur(s)', 'Pc portable et fixe', 'Ã§a fonctionne pas.', '2017-08-02 13:19:15', 'En cour'),
(5, 'Lambert', '16', 'Un ou plusieurs ordinateur(s)', 'Pc portable et fixe', 'Ã§a fonctionne pas.', '2017-08-02 13:19:48', 'Repare'),
(6, 'test', 'test', 'Tous les ordinateurs', 'test', 'test', '2017-08-02 13:20:09', 'Repare');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
