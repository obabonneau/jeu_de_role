-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 14 déc. 2024 à 15:39
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeu_de_role`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id_personnage` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `classe` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `civilisation` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `puissance` int NOT NULL,
  `endurance` int NOT NULL,
  `orientation` int NOT NULL,
  `resistance` int NOT NULL,
  PRIMARY KEY (`id_personnage`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id_personnage`, `nom`, `classe`, `civilisation`, `puissance`, `endurance`, `orientation`, `resistance`) VALUES
(1, 'Olivier', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(2, 'Jerome', 'Ouvrier', 'France', 6, 7, 4, 5),
(4, 'Amanda', 'Guerrier', 'Angleterre', 6, 7, 4, 5),
(5, 'Test', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(6, 'Arnaud', 'Guerrier', 'France', 6, 7, 4, 5),
(7, 'Medhi', 'Explorateur', 'Norvège', 6, 7, 4, 5),
(8, 'Antoine', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(9, 'Cecilia', 'Guerrier', 'Norvège', 6, 7, 4, 5),
(10, 'Axel', 'Ouvrier', 'Norvège', 6, 7, 4, 5),
(12, 'Arnaud', 'Guerrier', 'France', 6, 7, 4, 5),
(13, 'Daouda', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(16, 'Adrien', 'Guerrier', 'France', 6, 7, 4, 5),
(17, 'Martiano', 'Explorateur', 'Norvège', 6, 7, 4, 5),
(18, 'Olivier', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(19, 'Léo', 'Explorateur', 'France', 6, 7, 4, 5),
(20, 'Maxence', 'Guerrier', 'France', 6, 7, 4, 5),
(21, 'Anne-Sophie', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(22, 'Anne-Sophie', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(23, 'Anne-Sophie', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(24, 'Anne-Sophie', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(25, 'Anne-Sophie', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(26, 'Anne-Sophie', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(27, 'Essai', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(28, 'essai', 'Ouvrier', 'Angleterre', 6, 7, 4, 5),
(29, 'As', 'Explorateur', 'Angleterre', 6, 7, 4, 5),
(30, 'Manon', 'Explorateur', 'France', 6, 7, 4, 5),
(31, 'Essai', 'Guerrier', 'France', 6, 7, 4, 5),
(32, 'Aurélien', 'Guerrier', 'France', 6, 7, 4, 5),
(33, 'Emilie', 'Guerrier', 'Norvège', 6, 7, 4, 5),
(34, 'Fred', 'Guerrier', 'Angleterre', 6, 7, 4, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
