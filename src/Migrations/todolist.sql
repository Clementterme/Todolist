-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 mars 2024 à 12:51
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `personnel` varchar(50) DEFAULT NULL,
  `professionnel` varchar(50) DEFAULT NULL,
  `familial` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `priority`
--

DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `id` int NOT NULL AUTO_INCREMENT,
  `peu_urgent` varchar(50) DEFAULT NULL,
  `urgent` varchar(50) DEFAULT NULL,
  `tres_urgent` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  `priorite` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `id_category` int DEFAULT NULL,
  `id_priority` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_id` (`id`),
  KEY `FK_Category_TO_Task` (`id_category`),
  KEY `FK_Priority_TO_Task` (`id_priority`),
  KEY `FK_User_TO_Task` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`id`, `titre`, `description`, `date`, `priorite`, `category`, `id_category`, `id_priority`, `id_user`) VALUES
(2, 'Faire le ménage', 'Nettoyer et ranger le salon', '2024-03-24', '1', '1', NULL, NULL, NULL),
(3, 'Faire les courses', 'Acheter à manger pour la semaine', '2024-03-23', '2', '1', NULL, NULL, NULL),
(4, 'Faire la vaisselle', 'Nettoyer les casseroles et poeles', '2024-03-21', '3', '1', NULL, NULL, NULL),
(7, 'Faire les courses', 'Acheter à manger pour la semaine', '2024-03-24', '1', '1', NULL, NULL, NULL),
(8, 'Faire une lessive', 'Laver des chaussettes', '2024-03-23', '2', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mdp` varchar(300) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mdp`, `email`) VALUES
(1, 'Terme', 'Clément', '1234', 'clement73terme@gmail.com'),
(2, 'Jaegerr', 'Eren', '1234', 'Eren.jaegerr@gmail.com'),
(3, 'test', 'test', 'a', 'test@test.com'),
(4, 'Bon', 'Jean', '1234', 'Jeanbon@gmail.com'),
(5, 'aaa', 'aaa', 'aaa', 'Laurent.gina@miam.com'),
(6, 'tbf', 'fdfd', 'AAA', 'clement.terme.simplon@gmail.com'),
(7, 'Etienne', 'Samuel', '1234', 'Samuel.etienne@gmail.com'),
(8, 'Cena', 'John', '$2y$10$DRQjYPZAzd9p0gANMaxrU.d1zDRhxymHIMbTr7xZjj2PbAz5Yn4g.', 'Johncena@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
