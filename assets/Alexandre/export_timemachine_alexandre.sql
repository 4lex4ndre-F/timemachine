-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Août 2017 à 16:25
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `timemachine`
--
CREATE DATABASE IF NOT EXISTS `timemachine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `timemachine`;

-- --------------------------------------------------------

--
-- Structure de la table `comments_picture`
--

CREATE TABLE `comments_picture` (
  `id` int(3) NOT NULL,
  `content` text NOT NULL,
  `pictures_id` int(3) NOT NULL,
  `users_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments_story`
--

CREATE TABLE `comments_story` (
  `id` int(3) NOT NULL,
  `content` text NOT NULL,
  `stories_id` int(3) NOT NULL,
  `users_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `content` text,
  `date_record` datetime NOT NULL,
  `date_picture` year(4) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `users_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `title`, `header`, `content`, `date_record`, `date_picture`, `country`, `city`, `users_id`) VALUES
(5, 'Bangkok', 'Vue de la ville.', NULL, '0000-00-00 00:00:00', 2008, 'Thailande', 'Bangkok', NULL),
(6, 'Bangkok', 'Vue de la ville n2.', NULL, '2017-08-15 00:00:00', 2008, 'Thailande', 'Bangkok', 1),
(7, 'Vacances à Bangkok', 'Vue de la ville n3.', 'Vue depuis une chambre d’hôtel.', '2017-08-15 00:00:00', 2008, 'Thaïlande', 'Bangkok', 1),
(8, 'Bangkok 4', 'Vue de la ville n4.', 'Priviliegiez le skytrain ou les tuktuk.', '2017-08-15 00:00:00', 2008, 'Thaïlande', 'Bangkok', 1),
(9, 'Bangkok sur le fleuve', 'Ballade en bateau', NULL, '2017-08-15 00:00:00', 2008, 'Thaïlande', 'Bangkok', 1),
(10, 'Bangkok temple', NULL, 'Le temple ou il y a le grand boudha allongé.', '2017-08-15 00:00:00', 2008, 'Thaïlande', 'Bangkok', 1),
(11, 'Week end Cabourg 2008', NULL, NULL, '2017-08-15 00:00:00', 2008, 'France', 'Cabourg', 1),
(12, 'Week end Cabourg 2008', 'Le vol de la mouette.', NULL, '2017-08-15 00:00:00', 2008, 'France', 'Cabourg', 1),
(13, 'Cambodge 2008', 'Attention, passage d’éléphants!', NULL, '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(14, 'Angkor Wat', 'Vieux temple', 'Il fesait une chaleur épouvantable et l\'air était saturé d\'humidité. On pouvait essorer nos vêtements!', '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(15, 'Voyage 2008', 'Angkor Wat', NULL, '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(16, 'Cambodge, photo 4', 'Dans un couloir d\'un vieux temple à Angkor Wat.', NULL, '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(17, 'Angkor wat', 'Un lieu très calme.', 'J\'ai pas la moindre idée de ce que cet endroit était au temps de sa splendeur, mais j\'y ai fait une pause.', '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(18, 'Angkor Wat - voyage 2008', 'La cour d\'un palais', NULL, '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(19, 'Les arbres poussent sur les vieilles pierres.', NULL, 'Toujours à Angkor Wat, c\'est impressionant de voir à quel point la nature reprend le dessus dès que l\'humanité tourne le dos...', '2017-08-15 00:00:00', 2008, 'Cambodge', 'Siem Reap', 1),
(20, 'Bienvenue au Mozambique', NULL, 'Le blason du Mozambique qui orne aussi le drapeau: La b^^eche, le livre et la kalash...', '2017-08-15 00:00:00', 2009, 'Mozambique', 'Maputo', 1),
(21, 'Vue sur le lac Niassa...', 'depuis la fenêtre de la petite case que j\'occupe.', 'Le lac Niassa est en réalité le lac Malawi sur les cartes du monde. Il est appellé différemment selon que l\'on est au Mozambique ou partout ailleurs dans le monde.', '2017-08-15 00:00:00', 2009, 'Mozambique', 'Chuwanga', 1),
(22, 'Vue sur le lac Niassa', NULL, 'En ballade avant de partir de cette région et de retrouver Paris.', '2017-08-15 00:00:00', 2009, 'Mozanbique', 'Metangula', 1),
(23, 'Habitations à Metangula', NULL, 'Il y a de plus belles maisons de style colonial portugais mais pas sur cette photo.', '2017-08-15 00:00:00', 2009, 'Mozambique', 'Metangula', 1),
(24, 'Un bateau de transport de fret et de passagers sur le lac Niassa', NULL, 'Ce bateau a été mis en service dans les années 1950 et il flotte toujours!', '2017-08-15 00:00:00', 2009, 'Mozambique', 'Metangula', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pictures_has_stories`
--

CREATE TABLE `pictures_has_stories` (
  `pictures_id` int(3) NOT NULL,
  `stories_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stories`
--

CREATE TABLE `stories` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `users_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tags_picture`
--

CREATE TABLE `tags_picture` (
  `id` int(3) NOT NULL,
  `keywords` varchar(45) DEFAULT NULL,
  `pictures_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tags_theme`
--

CREATE TABLE `tags_theme` (
  `id` int(3) NOT NULL,
  `keywords` varchar(45) DEFAULT NULL,
  `stories_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `pseudo`, `email`, `password`, `status`) VALUES
(1, 'Fernandes', 'Alexandre', 'm', '4lex', '4lex.fernandes@gmail.com', '123Soleil', 1),
(2, 'admin', 'admin', 'm', 'admin', 'admin@mail.fr', '123Soleil', 1),
(3, 'user1firstname', 'user1lastname', 'm', 'user1', 'user1@mail.fr', '123Soleil', 0),
(4, 'user2firstname', 'user2lastname', 'f', 'user2', 'user2@mail.fr', '123Soleil', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments_picture`
--
ALTER TABLE `comments_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_picture_pictures1_idx` (`pictures_id`),
  ADD KEY `fk_comments_picture_users1_idx` (`users_id`);

--
-- Index pour la table `comments_story`
--
ALTER TABLE `comments_story`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_story_stories1_idx` (`stories_id`),
  ADD KEY `fk_comments_story_users1_idx` (`users_id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pictures_users1_idx` (`users_id`);

--
-- Index pour la table `pictures_has_stories`
--
ALTER TABLE `pictures_has_stories`
  ADD PRIMARY KEY (`pictures_id`,`stories_id`),
  ADD KEY `fk_pictures_has_stories_pictures1_idx` (`pictures_id`),
  ADD KEY `fk_pictures_has_stories_stories1_idx` (`stories_id`);

--
-- Index pour la table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_stories_users1_idx` (`users_id`);

--
-- Index pour la table `tags_picture`
--
ALTER TABLE `tags_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tags ingredient_pictures1_idx` (`pictures_id`);

--
-- Index pour la table `tags_theme`
--
ALTER TABLE `tags_theme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tags_theme_stories1_idx` (`stories_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `pseudo_UNIQUE` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments_picture`
--
ALTER TABLE `comments_picture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comments_story`
--
ALTER TABLE `comments_story`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `tags_picture`
--
ALTER TABLE `tags_picture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments_picture`
--
ALTER TABLE `comments_picture`
  ADD CONSTRAINT `fk_comments_picture_pictures1` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comments_picture_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comments_story`
--
ALTER TABLE `comments_story`
  ADD CONSTRAINT `fk_comments_story_stories1` FOREIGN KEY (`stories_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comments_story_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `fk_pictures_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `pictures_has_stories`
--
ALTER TABLE `pictures_has_stories`
  ADD CONSTRAINT `fk_pictures_has_stories_pictures1` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pictures_has_stories_stories1` FOREIGN KEY (`stories_id`) REFERENCES `stories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `fk_stories_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tags_picture`
--
ALTER TABLE `tags_picture`
  ADD CONSTRAINT `fk_tags ingredient_pictures1` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tags_theme`
--
ALTER TABLE `tags_theme`
  ADD CONSTRAINT `fk_tags_theme_stories1` FOREIGN KEY (`stories_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
