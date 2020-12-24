-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 25 oct. 2020 à 14:31
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dgi_immatriculation_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_dgi_clients`
--

CREATE TABLE `tb_dgi_clients` (
  `client_id` int(11) NOT NULL,
  `noms_complet` varchar(75) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `profession` varchar(75) DEFAULT NULL,
  `adresse` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_dgi_clients`
--

INSERT INTO `tb_dgi_clients` (`client_id`, `noms_complet`, `telephone`, `email`, `profession`, `adresse`) VALUES
(1, 'melanie chirene Feminin', '+243853385285', 'rumbu@trecazad.com', 'Medecin', '25, savonnier, bel-air, kampemba, rdc');

-- --------------------------------------------------------

--
-- Structure de la table `tb_dgi_fiches`
--

CREATE TABLE `tb_dgi_fiches` (
  `fiche_id` int(11) NOT NULL,
  `numero_fiche` varchar(75) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `plaque_vehicule_sid` int(11) DEFAULT NULL,
  `nombre_kilometrage` int(11) DEFAULT NULL,
  `date_entree_vehicule` date DEFAULT NULL,
  `statut_declaration` varchar(75) DEFAULT NULL,
  `observation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_dgi_notes`
--

CREATE TABLE `tb_dgi_notes` (
  `note_id` int(11) NOT NULL,
  `numero_reference_note` varchar(25) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `numero_impot` varchar(75) DEFAULT NULL,
  `numero_compte_bancaire` varchar(75) DEFAULT NULL,
  `nom_banque` varchar(75) DEFAULT NULL,
  `devise_compte` varchar(75) DEFAULT NULL,
  `pourcentage_impot` varchar(10) DEFAULT NULL,
  `montant_impot_du` float DEFAULT NULL,
  `observation` text,
  `fiche_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_dgi_paiements`
--

CREATE TABLE `tb_dgi_paiements` (
  `paiement_id` int(11) NOT NULL,
  `date_paiement` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `montant_verser` float DEFAULT NULL,
  `statut_paiement` varchar(75) DEFAULT NULL,
  `observation` text,
  `numero_note_sid` int(11) DEFAULT NULL,
  `client_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_dgi_vehicules`
--

CREATE TABLE `tb_dgi_vehicules` (
  `vehicule_id` int(11) NOT NULL,
  `client_sid` int(11) DEFAULT NULL,
  `chasis` varchar(75) DEFAULT NULL,
  `num_plaque` varchar(25) DEFAULT NULL,
  `marque_vehicule` varchar(75) DEFAULT NULL,
  `type_vehicule` varchar(75) DEFAULT NULL,
  `poids_vehicule` varchar(75) DEFAULT NULL,
  `couleur_vehicule` varchar(75) DEFAULT NULL,
  `nombre_place_passagers` int(11) DEFAULT NULL,
  `annee_fabrication_vehicule` varchar(75) DEFAULT NULL,
  `type_pays_provenance` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'agent',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(21, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'admin', '2020-09-11 10:08:58', '2020-09-21 10:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'admin', '11220'),
(26, 'Emma Tshinenge', 'tshinenge', '$2y$12$iYgPuYl0T3Xn6HBQgocdeuFu1ZGN0qGfvzPexk60RU6l.q9YdS9Ju', 'emmabilldo3@gmail.com', 'masculin', '0993076047', 'user', '2020-09-21 09:59:39', '2020-09-21 10:42:27', 'active', NULL, NULL, 'guichetier', '202005'),
(27, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243+243903774951', 'admin', '2020-09-21 10:01:52', '2020-10-25 12:27:05', 'active', 'global/img/avatars/12f5af7aaaaf19c688cbddeb0cac45a5.jpg', '2020-10-25 14:26:54', 'admin', '2020010');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_dgi_clients`
--
ALTER TABLE `tb_dgi_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `tb_dgi_fiches`
--
ALTER TABLE `tb_dgi_fiches`
  ADD PRIMARY KEY (`fiche_id`),
  ADD KEY `plaque_vehicule_sid` (`plaque_vehicule_sid`);

--
-- Index pour la table `tb_dgi_notes`
--
ALTER TABLE `tb_dgi_notes`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `fiche_sid` (`fiche_sid`);

--
-- Index pour la table `tb_dgi_paiements`
--
ALTER TABLE `tb_dgi_paiements`
  ADD PRIMARY KEY (`paiement_id`),
  ADD KEY `client_sid` (`client_sid`),
  ADD KEY `numero_note_sid` (`numero_note_sid`);

--
-- Index pour la table `tb_dgi_vehicules`
--
ALTER TABLE `tb_dgi_vehicules`
  ADD PRIMARY KEY (`vehicule_id`),
  ADD KEY `client_sid` (`client_sid`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_dgi_clients`
--
ALTER TABLE `tb_dgi_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_dgi_fiches`
--
ALTER TABLE `tb_dgi_fiches`
  MODIFY `fiche_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_dgi_notes`
--
ALTER TABLE `tb_dgi_notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_dgi_paiements`
--
ALTER TABLE `tb_dgi_paiements`
  MODIFY `paiement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_dgi_vehicules`
--
ALTER TABLE `tb_dgi_vehicules`
  MODIFY `vehicule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tb_dgi_fiches`
--
ALTER TABLE `tb_dgi_fiches`
  ADD CONSTRAINT `tb_dgi_fiches_ibfk_1` FOREIGN KEY (`plaque_vehicule_sid`) REFERENCES `tb_dgi_vehicules` (`vehicule_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_dgi_notes`
--
ALTER TABLE `tb_dgi_notes`
  ADD CONSTRAINT `tb_dgi_notes_ibfk_1` FOREIGN KEY (`fiche_sid`) REFERENCES `tb_dgi_fiches` (`fiche_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_dgi_paiements`
--
ALTER TABLE `tb_dgi_paiements`
  ADD CONSTRAINT `tb_dgi_paiements_ibfk_1` FOREIGN KEY (`client_sid`) REFERENCES `tb_dgi_clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_dgi_paiements_ibfk_2` FOREIGN KEY (`numero_note_sid`) REFERENCES `tb_dgi_notes` (`note_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_dgi_vehicules`
--
ALTER TABLE `tb_dgi_vehicules`
  ADD CONSTRAINT `tb_dgi_vehicules_ibfk_1` FOREIGN KEY (`client_sid`) REFERENCES `tb_dgi_clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
