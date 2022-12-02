-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Décembre 2022 à 05:37
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `b.boismenu - site web php`
--
CREATE DATABASE IF NOT EXISTS `grpc1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grpc1`;

-- --------------------------------------------------------

--
-- Structure de la table `carrousel_elem`
--

CREATE TABLE `carrousel_elem` (
  `id` int(2) NOT NULL,
  `img` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `carrousel_elem`
--

INSERT INTO `carrousel_elem` (`id`, `img`, `alt`, `link`) VALUES
(8, 'asset/p2asset1.png', 'Description de l\'image', '5');

-- --------------------------------------------------------

--
-- Structure de la table `duo_member`
--

CREATE TABLE `duo_member` (
  `id` int(1) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `quote` varchar(100) NOT NULL,
  `description` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `duo_member`
--

INSERT INTO `duo_member` (`id`, `pic`, `alt`, `quote`, `description`) VALUES
(1, 'asset/Baptiste.jpg', 'Une photo de Baptiste', 'Un jour j\'aurais un bureau à Nintendo', 'J\'ai eu la chance de savoir très tôt dans ma vie que mon métier rêvé résidais dans la programmation. Je suis très enthousiaste à l\'idée de pouvoir présenter ici mes anciens travaux ! Un jour il y aura un trailer de jeu ici, c\'est promis !'),
(2, 'asset/Mathias.jpg', 'Une photo de Mathias', 'J\'aime coder et je souhaite en faire mon métier', 'Étudiant en première année de Gtech, j\'apprend l\'encodage informatique. J\'ai commencé pour le moment un projet de site web en utilisant le language PHP, et cette page est un autre de mes projets dans lequel j\'apprend à maitriser le Jquery. Je souhaite devenir un développeur de jeu vidéo, mais j\'ai encore beacoup à apprendre au Gaming Campus !'),
(4, 'asset/PLACEHOLDER.png', 'Description de l\'image', 'DEBUG', 'LOREM IPSUM');

-- --------------------------------------------------------

--
-- Structure de la table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(1) NOT NULL,
  `member1` int(2) NOT NULL,
  `member2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `home_page`
--

INSERT INTO `home_page` (`id`, `member1`, `member2`) VALUES
(1, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `project_page`
--

CREATE TABLE `project_page` (
  `id` int(3) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_details` varchar(1000) NOT NULL,
  `details_img` varchar(50) NOT NULL,
  `details_alt` varchar(50) NOT NULL,
  `project_subject` varchar(1000) NOT NULL,
  `subject_img` varchar(50) NOT NULL,
  `subject_alt` varchar(50) NOT NULL,
  `project_teachings` varchar(1000) NOT NULL,
  `teachings_img` varchar(50) NOT NULL,
  `teachings_alt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `project_page`
--

INSERT INTO `project_page` (`id`, `project_title`, `project_details`, `details_img`, `details_alt`, `project_subject`, `subject_img`, `subject_alt`, `project_teachings`, `teachings_img`, `teachings_alt`) VALUES
(5, 'Exemple', 'Les détails du projet...', 'asset/arborescence-projet3.jpg', 'Description de l\'image', 'Le sujet du projet...', 'asset/carr2.png', 'Description de l\'image', 'Les acquis apportés par le projet...', 'asset/écrans.png', 'Description de l\'image');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `admin`) VALUES
(2, 'admin', 'dde8edf5741cbf800c0a13714e883bb2', 1),
(6, 'baka sussy', 'e7fa6da0b185a546e0930133bdd4e00c', 0),
(8, 'yes', 'c4188ccb0933a8daf4bf0403dd05c24c', 1),
(9, 'test', 'd154960c6686d5f5dec5541b9a123054', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `carrousel_elem`
--
ALTER TABLE `carrousel_elem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `duo_member`
--
ALTER TABLE `duo_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project_page`
--
ALTER TABLE `project_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `carrousel_elem`
--
ALTER TABLE `carrousel_elem`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `duo_member`
--
ALTER TABLE `duo_member`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `project_page`
--
ALTER TABLE `project_page`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
