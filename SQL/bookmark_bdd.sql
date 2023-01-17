-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 16 jan. 2023 à 10:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookmark_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmark_ID` int(255) NOT NULL,
  `categorie_ID` int(100) NOT NULL,
  `bookmark_name` varchar(100) NOT NULL,
  `bookmark_description` text NOT NULL,
  `bookmark_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bookmark`
--

INSERT INTO `bookmark` (`bookmark_ID`, `categorie_ID`, `bookmark_name`, `bookmark_description`, `bookmark_url`) VALUES
(1, 1, 'Visual Studio Code', 'Éditeur de texte pour développeur', 'https://code.visualstudio.com/'),
(2, 1, 'Skratch', 'Logiciel en ligne de programmation', 'https://scratch.mit.edu/'),
(11, 1, 'Github', 'Gestionnaire de projet colaboratif', 'https://github.com/'),
(12, 1, 'Learn Git Branching', 'Outil interactif de visualisation de Git', 'https://learngitbranching.js.org/?locale=fr_FR'),
(13, 1, 'Figma', 'Outil de maquette en ligne', 'https://www.figma.com/'),
(14, 1, 'Miro', 'Plateforme de collaboration visuelle', 'https://miro.com/fr/'),
(15, 1, 'Tutoriel Figma', 'Vidéo YouTube by Grafikart', 'https://youtu.be/e68PKFYWfoQ'),
(16, 2, 'Maquette une App', 'Qu\'est-ce qu\'un Wireframe ?', 'https://www.usabilis.com/definition-wireframe/'),
(17, 2, 'Open Studio', 'Optimiser l\'ergonomie de son site web', 'https://www.openstudio.fr/2022/10/27/comment-optimiser-lergonomie-de-son-site-web/'),
(18, 2, 'HTML', 'Documentation Developer Mozzilla', 'https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/HTML_basics'),
(19, 2, 'OpenClassrooms', 'Créer votre site web avec HTML & CSS', 'https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3'),
(20, 2, 'OpenClassrooms', 'Programmer avec JavaScript', 'https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript'),
(21, 3, 'OpenClassrooms', 'Le fonctionnement des algorithmes', 'https://openclassrooms.com/fr/courses/4366701-decouvrez-le-fonctionnement-des-algorithmes'),
(22, 3, 'Pixees', 'Découvrir la programmation créative', 'https://pixees.fr/classcode/formations/module1/'),
(23, 3, 'Study Lib', 'Les boucles ou instruction répétitives', 'https://studylibfr.com/doc/179347/cours-sur-les-boucles-ou-instructions-r%C3%A9p%C3%A9titives#'),
(24, 3, 'Youtube', 'Les constantes et les variables', 'https://www.youtube.com/watch?v=cEK4cPTP5qE&ab_channel=HassanELBAHI'),
(25, 3, 'PHP', 'Documentation officielle', 'https://www.php.net/manual/fr/'),
(26, 3, 'OpenClassrooms', 'administrez une base de données - MySQL', ' https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql'),
(27, 3, 'OpenClassrooms', 'Concevoir un site web avec PHP et MySQL', 'https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `categorie_ID` int(100) NOT NULL,
  `categorie_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_ID`, `categorie_name`) VALUES
(1, 'Outils'),
(2, 'Front End'),
(3, 'Back End');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmark_ID`),
  ADD KEY `id_categorie` (`categorie_ID`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorie_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmark_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categorie_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`categorie_ID`) REFERENCES `categorie` (`categorie_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
