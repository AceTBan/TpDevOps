-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 avr. 2022 à 14:11
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parionstennis`
--

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `id_joueur` int(11) NOT NULL,
  `id_matchs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jouer`
--

INSERT INTO `jouer` (`id_joueur`, `id_matchs`) VALUES
(1, 1),
(2, 1),
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id_joueur` int(8) NOT NULL,
  `nom_joueur` varchar(50) NOT NULL,
  `prenom_joueur` varchar(50) NOT NULL,
  `classement_joueur` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `nom_joueur`, `prenom_joueur`, `classement_joueur`) VALUES
(1, 'J1', 'Jprenom1', 250),
(2, 'J2', 'Jprenom2', 251),
(5, 'J3', 'Jprenom3', 50),
(6, 'J3', 'Jprenom3', 50),
(7, 'J4', 'Jprenom4', 60),
(8, 'J4', 'Jprenom4', 60);

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE `matchs` (
  `id_matchs` int(8) NOT NULL,
  `date_matchs` datetime NOT NULL,
  `lieu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matchs`
--

INSERT INTO `matchs` (`id_matchs`, `date_matchs`, `lieu`) VALUES
(1, '2022-05-31 20:00:00', 'Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `parier`
--

CREATE TABLE `parier` (
  `id_parier` int(8) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `id_matchs` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `mise` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `mdp_user` varchar(50) NOT NULL,
  `login_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom_user`, `prenom_user`, `mdp_user`, `login_user`) VALUES
(1, 'Truc', 'Muche', 'truc1', 'truc1'),
(2, 'Truc2', 'Muche2', 'truc2', 'truc2'),
(3, 'Truc', 'Muche', 'truc1', 'truc1'),
(4, 'Truc2', 'Muche2', 'truc2', 'truc2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD KEY `id_joueur` (`id_joueur`),
  ADD KEY `id_matchs` (`id_matchs`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id_joueur`);

--
-- Index pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id_matchs`);

--
-- Index pour la table `parier`
--
ALTER TABLE `parier`
  ADD PRIMARY KEY (`id_parier`),
  ADD KEY `id_joueur` (`id_joueur`),
  ADD KEY `id_matchs` (`id_matchs`),
  ADD KEY `id_users` (`id_users`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id_joueur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `parier`
--
ALTER TABLE `parier`
  MODIFY `id_parier` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `parier`
--
ALTER TABLE `parier`
  ADD CONSTRAINT `parier_ibfk_1` FOREIGN KEY (`id_matchs`) REFERENCES `matchs` (`id_matchs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
