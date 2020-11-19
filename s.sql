-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 nov. 2020 à 14:49
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `engine`
--

CREATE TABLE `engine` (
  `id` int(11) NOT NULL,
  `ligne_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `engine`
--

INSERT INTO `engine` (`id`, `ligne_id`, `name`) VALUES
(1, 3, 'M3-1'),
(2, 3, 'M3-2');

-- --------------------------------------------------------

--
-- Structure de la table `ligne`
--

CREATE TABLE `ligne` (
  `id` int(11) NOT NULL,
  `start_station_id` int(11) NOT NULL,
  `end_station_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ligne`
--

INSERT INTO `ligne` (`id`, `start_station_id`, `end_station_id`, `site_id`, `code`, `name`) VALUES
(3, 11, 6, 1, '15', 'ligne 15'),
(4, 11, 10, 1, '2', 'Line 2');

-- --------------------------------------------------------

--
-- Structure de la table `path`
--

CREATE TABLE `path` (
  `id` int(11) NOT NULL,
  `ligne_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `rang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `path`
--

INSERT INTO `path` (`id`, `ligne_id`, `station_id`, `rang`) VALUES
(1, 3, 11, 1),
(2, 3, 1, 2),
(3, 3, 5, 3),
(4, 3, 6, 4),
(5, 4, 11, 1),
(6, 4, 7, 2),
(7, 4, 2, 3),
(8, 4, 8, 4),
(9, 4, 9, 5),
(10, 4, 10, 6);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `name`, `code`) VALUES
(1, 'Site 1', 'si');

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `name`, `longitude`) VALUES
(1, 'Beb saadoun', 123),
(2, 'Med5', 654),
(3, 'Barcelone', 5654),
(4, 'Manar2', 123456),
(5, 'Charle nicole', 123),
(6, 'Mallassine', 1232345),
(7, 'Mandella', 2345),
(8, 'Palestine', 2345),
(9, 'Jardin', 987),
(10, 'Zone Urbaine Nord', 123),
(11, 'Passage', 123);

-- --------------------------------------------------------

--
-- Structure de la table `timing`
--

CREATE TABLE `timing` (
  `id` int(11) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  `arrival_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `timing`
--

INSERT INTO `timing` (`id`, `engine_id`, `path_id`, `arrival_at`) VALUES
(1, 1, 1, '10:00:00'),
(2, 1, 2, '10:15:00'),
(3, 1, 3, '10:45:00'),
(4, 1, 4, '11:00:00'),
(5, 2, 1, '10:30:00'),
(6, 2, 2, '10:45:00'),
(7, 2, 3, '11:00:00'),
(8, 2, 4, '11:15:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E8A81A8D5A438E76` (`ligne_id`);

--
-- Index pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_57F0DB8353721DCB` (`start_station_id`),
  ADD KEY `IDX_57F0DB832FF5EABB` (`end_station_id`),
  ADD KEY `IDX_57F0DB83F6BD1646` (`site_id`);

--
-- Index pour la table `path`
--
ALTER TABLE `path`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B548B0F5A438E76` (`ligne_id`),
  ADD KEY `IDX_B548B0F21BDB235` (`station_id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_13B196EBE78C9C0A` (`engine_id`),
  ADD KEY `IDX_13B196EBD96C566B` (`path_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `engine`
--
ALTER TABLE `engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ligne`
--
ALTER TABLE `ligne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `path`
--
ALTER TABLE `path`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `timing`
--
ALTER TABLE `timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `engine`
--
ALTER TABLE `engine`
  ADD CONSTRAINT `FK_E8A81A8D5A438E76` FOREIGN KEY (`ligne_id`) REFERENCES `ligne` (`id`);

--
-- Contraintes pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD CONSTRAINT `FK_57F0DB832FF5EABB` FOREIGN KEY (`end_station_id`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `FK_57F0DB8353721DCB` FOREIGN KEY (`start_station_id`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `FK_57F0DB83F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `path`
--
ALTER TABLE `path`
  ADD CONSTRAINT `FK_B548B0F21BDB235` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `FK_B548B0F5A438E76` FOREIGN KEY (`ligne_id`) REFERENCES `ligne` (`id`);

--
-- Contraintes pour la table `timing`
--
ALTER TABLE `timing`
  ADD CONSTRAINT `FK_13B196EBD96C566B` FOREIGN KEY (`path_id`) REFERENCES `path` (`id`),
  ADD CONSTRAINT `FK_13B196EBE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
