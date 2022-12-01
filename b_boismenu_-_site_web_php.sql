-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 19:07
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `b.boismenu - site web php`
--
CREATE DATABASE IF NOT EXISTS `b.boismenu - site web php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `b.boismenu - site web php`;

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
(4, 'asset/backgroundus.png', 'Description de l\'image', '1');

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
(2, 'asset/Mathias.jpg', 'Une photo de Mathias', 'J\'aime coder et je souhaite en faire mon métier', 'Étudiant en première année de Gtech, j\'apprend l\'encodage informatique. J\'ai commencé pour le moment un projet de site web en utilisant le language PHP, et cette page est un autre de mes projets dans lequel j\'apprend à maitriser le Jquery. Je souhaite devenir un développeur de jeu vidéo, mais j\'ai encore beacoup à apprendre au Gaming Campus !');

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
(1, 'sus', 'a', 'asset/Mathius.jpg', 'Description de l\'image', 'mo', 'asset/Dripsus.webp', 'Description de l\'image', 'gus', 'asset/Baptistus.jpg', 'Description de l\'image');

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
(3, 'user', '75a4bc87498f397f2dbce57203117c35', 0);

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `duo_member`
--
ALTER TABLE `duo_member`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `project_page`
--
ALTER TABLE `project_page`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
