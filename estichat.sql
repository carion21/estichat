-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 20 juil. 2020 à 19:34
-- Version du serveur :  8.0.20-0ubuntu0.20.04.1
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `estichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int NOT NULL,
  `code_groupe` varchar(255) NOT NULL,
  `nb_elt` int NOT NULL,
  `date_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `code_message` varchar(255) NOT NULL,
  `destinateur` varchar(255) NOT NULL,
  `destinataire` varchar(255) NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_register` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `code_message`, `destinateur`, `destinataire`, `message`, `date_register`) VALUES
(18, 'message-856216', 'esti', 'carion', 'yann', '2020-03-12 20:30:27'),
(19, 'message-646967', 'carion', 'esti', 'esti', '2020-03-12 20:30:35'),
(20, 'message-188791', 'carion', 'musk', '', '2020-03-12 20:44:13'),
(21, 'message-640866', 'carion', 'xerone', '', '2020-03-12 20:44:17'),
(22, 'message-44519', 'esti', 'musk', 'salut', '2020-03-12 20:44:24'),
(23, 'message-91329', 'carion', 'esti', 'wi', '2020-03-12 21:58:01'),
(24, 'message-657548', 'esti', 'carion', 'wi', '2020-03-12 21:58:08'),
(25, 'message-170968', 'carion', 'esti', 'a ok cmt tu vas ???', '2020-03-12 21:58:21'),
(26, 'message-9116', 'esti', 'carion', 'wi wi cva bien ???', '2020-03-12 21:58:33'),
(27, 'message-199125', 'carion', 'esti', 'tufkw', '2020-03-12 21:59:15'),
(28, 'message-671589', 'esti', 'carion', 'rien d\'important', '2020-03-12 21:59:24'),
(29, 'message-584944', 'david', 'estelle', 'bonjour', '2020-03-13 02:22:34'),
(30, 'message-1795', 'estelle', 'david', 'cmt tu vas ???', '2020-03-13 02:23:39'),
(31, 'message-725123', 'david', 'estelle', 'je veux ton numéro', '2020-03-13 02:24:34'),
(32, 'message-72148', 'estelle', 'david', '58789636', '2020-03-13 02:24:43'),
(33, 'message-46953', 'carion', 'esti', 'tufkw', '2020-04-04 17:21:55'),
(34, 'message-321128', 'esti', 'carion', 'rien de bon', '2020-04-04 17:22:12'),
(35, 'message-683227', 'esti', 'carion', 'rien de bon', '2020-04-04 17:22:14'),
(36, 'message-209449', 'musk', 'xerone', 'salut', '2020-04-04 17:23:17'),
(37, 'message-217197', 'xerone', 'musk', 'salut', '2020-04-04 17:23:22'),
(38, 'message-228294', 'carion', 'xerone', 'saluit', '2020-05-26 13:42:58'),
(39, 'message-237156', 'xerone', 'carion', 'cc', '2020-05-26 13:43:04'),
(40, 'message-784210', 'carion', 'xerone', 'cm tu vas', '2020-05-26 13:43:19'),
(41, 'message-567696', 'xerone', 'carion', 'pas mal', '2020-05-26 13:43:31');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `code_user` varchar(255) NOT NULL,
  `groupe` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `code_user`, `groupe`, `pseudo`, `motdepasse`, `sexe`) VALUES
(8, 'user-607249', '', 'carion', 'root', 'masculin'),
(9, 'user-713664', '', 'esti', 'root', 'feminin'),
(10, 'user-373536', '', 'musk', 'root', 'masculin'),
(11, 'user-349686', '', 'xerone', 'root', 'masculin'),
(12, 'user-704747', '', 'elly', 'root', 'feminin'),
(13, 'user-162819', '', 'fannie', 'root', 'feminin'),
(14, 'user-444986', '', 'estelle', '1234', 'feminin'),
(15, 'user-123673', '', 'david', '1234', 'masculin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
