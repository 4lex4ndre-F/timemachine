-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 10 Août 2017 à 16:18
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `TimeMachine`
--
CREATE DATABASE IF NOT EXISTS `TimeMachine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TimeMachine`;

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
  `date_picture` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `users_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tags_picture`
--
ALTER TABLE `tags_picture`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
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
