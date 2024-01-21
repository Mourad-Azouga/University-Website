-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 21 jan. 2024 à 11:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fst`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `ID_annonce` int(11) NOT NULL,
  `ID_utilisateur` bigint(20) UNSIGNED DEFAULT NULL,
  `ID_module` int(11) DEFAULT NULL,
  `Type_annonce` varchar(255) DEFAULT NULL,
  `Contenu` text DEFAULT NULL,
  `ID_filiere` int(11) DEFAULT NULL,
  `ID_departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `ID_departement` int(11) NOT NULL,
  `Nom_departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`ID_departement`, `Nom_departement`) VALUES
(1, 'GÉNIE INFORMATIQUE'),
(2, 'GÉNIE ELECTRIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `departementusers`
--

CREATE TABLE `departementusers` (
  `id_departement` int(11) NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departementusers`
--

INSERT INTO `departementusers` (`id_departement`, `id_utilisateur`) VALUES
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 70),
(1, 71),
(1, 73),
(2, 62),
(2, 63),
(2, 68),
(2, 69),
(2, 72),
(2, 74);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_filiere` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `id_departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_filiere`, `nom`, `description`, `id_departement`) VALUES
(1, 'Analytique des données', 'La Licence Science et Techniques en analytique des données permet aux étudiants de doter de compétences en matière d\'outils informatiques, des techniques et des méthodes statistiques pour permettre d’organiser, de synthétiser et de traduire efficacement les données métier d’une organisation. L\'étudiant doit être en mesure d\'apporter un appui analytique à la conduite d\'exploration et à l\'analyse complexe de données.', 1),
(2, 'Ingénierie de développement d’applications informatiques', 'La Licence Science et Technique permet aux étudiants en Ingénierie de développement d’applications informatiques de :\r\n- Avoir une culture de base scientifique.\r\n- Acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique : algorithmique, programmation, bases de données, systèmes d’exploitation et réseaux.\r\n- Développer un savoir-faire technique en informatique : technologie objet, informatique distribuée, architectures client-serveur et n-tiers, applications hétérogènes...\r\n- Améliorer leur niveau d’anglais.\r\n- Avoir une culture d’entreprise suffisante pour se faire une idée concrète sur le monde du travail.', 1),
(3, 'Génie Electrique Option: Génie Electrique & Système Industriel', 'L’objectif de la licence Génie électrique est de donner aux étudiants les éléments de base en physique mathématique et informatique et de leur apporter une formation solide dans les domaines du génie électrique, en particulier en électronique électrotechnique. Ce qui leur permettra de préparer un master à dominante ingénierie EEA ou d’intégrer les grandes écoles d’ingénieurs. Ils pourront aussi se présenter aux différentes fonctions publiques ou privées exigeant le niveau de la licence.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `filiereusers`
--

CREATE TABLE `filiereusers` (
  `id_filiere` int(11) NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filiereusers`
--

INSERT INTO `filiereusers` (`id_filiere`, `id_utilisateur`) VALUES
(1, 58),
(1, 59),
(1, 64),
(1, 65),
(1, 70),
(2, 60),
(2, 61),
(2, 66),
(2, 67),
(2, 71),
(3, 62),
(3, 63),
(3, 68),
(3, 69),
(3, 72);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_01_182215_create_utilisateurs_table', 1),
(3, '2024_01_02_172006_add_timestamps_to_utilisateurs_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `id_filiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom`, `description`, `id_filiere`) VALUES
(1, 'Mathématiques pour la science des données', 'Mathématiques pour la science des données', 1),
(2, 'Fondamentaux des bases de données', 'Fondamentaux des bases de données', 1),
(3, 'Systèmes et réseaux informatiques', 'Systèmes et réseaux informatiques', 2),
(4, 'Programmation Orientée Objet en C++/Java', 'Programmation Orientée Objet en C++/Java', 2),
(5, 'Traitement de signal & Télécommunication', 'Traitement de signal & Télécommunication', 3),
(6, 'Automatismes', 'Automatismes', 3);

-- --------------------------------------------------------

--
-- Structure de la table `moduleusers`
--

CREATE TABLE `moduleusers` (
  `id_module` int(11) NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `moduleusers`
--

INSERT INTO `moduleusers` (`id_module`, `id_utilisateur`) VALUES
(1, 58),
(1, 64),
(2, 59),
(2, 65),
(3, 60),
(3, 66),
(4, 61),
(4, 67),
(5, 62),
(5, 68),
(6, 63),
(6, 69);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('delegue','etudiant','professeur','responsable_filiere','chef_departement','responsable_pedagogique') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(58, 'Prof ', '1', 'prof1@ac ', '$2y$10$nvYAB3hRydgn1szRarHwEuq9TbUIkAMos1uNkn6LfIeT5PdGaiFYG', 'professeur', NULL, NULL),
(59, 'prof', '2', 'prof2@ac', '$2y$10$xlPaFbUUyYI34PDWRTMWG.808ev6pb9XiF8CssqTojePwLg7PSihS', 'professeur', NULL, NULL),
(60, 'prof', '3', 'prof3@ac', '$2y$10$53HRenYMwVPZjLjZf1oOLuwWew3y4qySPQuGQXI2aRisvfpMd5zjy', 'professeur', NULL, NULL),
(61, 'prof', '4', 'prof4@ac', '$2y$10$w6tRxwxvO/BPDSnRIfcWoe9whOMruzJshdTqic56n6KDNPNVWcKDq', 'professeur', NULL, NULL),
(62, 'prof', '5', 'prof5@ac', '$2y$10$F80x8Obsy.VzwTK/WhYYyegNJg1dEIMELoAI2VVO8Ljw4KGgmqQrO', 'professeur', NULL, NULL),
(63, 'prof', '6', 'prof6@ac', '$2y$10$/IrY3px96MSogNHvGgZDseV5x68mIXb54ZyS0rlFFJPGQxtm3RRpK', 'professeur', NULL, NULL),
(64, 'etu/delegue', '1', 'etu1@ac', '$2y$10$LjknxPxhIWkx43T8HmDF2upBMc.gKzqr5ynRaKEKsCsYWx4o/ytoi', 'delegue', NULL, NULL),
(65, 'etu', '2', 'etu2@ac', '$2y$10$1C/OIH2kLwEnzhoaFgf8IeOXkcBqB2jn8Z3ksd1ReB6RMt96sumSS', 'etudiant', NULL, NULL),
(66, 'etu', '3', 'etu3@ac', '$2y$10$qZMizJCOyDYEnYf9TX8JzuSkeQr5No5z0rEOSWbMqkOY259KTUIDi', 'etudiant', NULL, NULL),
(67, 'etu', '4', 'etu4@ac', '$2y$10$InVA.qQvKPAJTLwnb2/O1.zGEWzn2pRUpKxLPil7Z7ifh41zu/fv.', 'etudiant', NULL, NULL),
(68, 'etu', '5', 'etu5@ac', '$2y$10$MYRwVWLGdO5LSDsWKxVKjeH0fjkYqEu7tr/gpYsk7MVvPlRlXZlz2', 'etudiant', NULL, NULL),
(69, 'etu', '6', 'etu6@ac', '$2y$10$ovVckuRUTOFdIsPxip3FceTTDI9oaZuLvmYRaOH5gRZ45L7lkvU3m', 'etudiant', NULL, NULL),
(70, 'respo_fil 1', '1', 'respo_fil1@ac', '$2y$10$Ou5pXybM.zlTNtDVBkLTA.vlK7boQDyIQUzuNxGWURB26lhbJbje2', 'responsable_filiere', NULL, NULL),
(71, 'respo_fil 2', '2', 'respo_fil2@ac', '$2y$10$hgKmfduxA61kOvXThJy9bOG.yoXI2RG/ZVNZEF64zAZ5B1jV.ZP.m', 'responsable_filiere', NULL, NULL),
(72, 'respo_fil 3', '3', 'respo_fil3@ac', '$2y$10$i0ZRabLTELkj2t4AQrp8LOvqZCKV.CngcYUCidov.ijHfrudzZLXm', 'responsable_filiere', NULL, NULL),
(73, 'chef_dep1', '1', 'chef_dep1@ac', '$2y$10$qr0qNVHCIPo/E3HVVX.BC.xektxBHGKrBPYm.v9aP6OFJVJRoZtnK', 'chef_departement', NULL, NULL),
(74, 'chef_dep2', '2', 'chef_dep2@ac', '$2y$10$Ap1SJZmvndyCR8GsKtxUFeW.Zh9vW3.NWISKqGaPcaPxwuDCaLe7K', 'chef_departement', NULL, NULL),
(75, 'respo_peda1', '1', 'respo_peda1@ac', '$2y$10$CLUMyr8It5q6jDfRZxwlY.nc8x3yuwKUUVH9dipLWQZisnZ73Ks.2', 'responsable_pedagogique', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`ID_annonce`),
  ADD KEY `ID_utilisateur` (`ID_utilisateur`),
  ADD KEY `ID_module` (`ID_module`),
  ADD KEY `ID_filiere` (`ID_filiere`),
  ADD KEY `ID_departement` (`ID_departement`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`ID_departement`);

--
-- Index pour la table `departementusers`
--
ALTER TABLE `departementusers`
  ADD PRIMARY KEY (`id_departement`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_filiere`),
  ADD KEY `id_departement` (`id_departement`);

--
-- Index pour la table `filiereusers`
--
ALTER TABLE `filiereusers`
  ADD PRIMARY KEY (`id_filiere`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`),
  ADD KEY `id_filiere` (`id_filiere`);

--
-- Index pour la table `moduleusers`
--
ALTER TABLE `moduleusers`
  ADD PRIMARY KEY (`id_module`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `utilisateurs_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `ID_annonce` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `ID_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id_filiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`ID_module`) REFERENCES `module` (`id_module`),
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`ID_filiere`) REFERENCES `filiere` (`id_filiere`),
  ADD CONSTRAINT `annonce_ibfk_4` FOREIGN KEY (`ID_departement`) REFERENCES `departement` (`ID_departement`);

--
-- Contraintes pour la table `departementusers`
--
ALTER TABLE `departementusers`
  ADD CONSTRAINT `departementusers_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`ID_departement`),
  ADD CONSTRAINT `departementusers_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `filiere_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`ID_departement`);

--
-- Contraintes pour la table `filiereusers`
--
ALTER TABLE `filiereusers`
  ADD CONSTRAINT `filiereusers_ibfk_1` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`),
  ADD CONSTRAINT `filiereusers_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`);

--
-- Contraintes pour la table `moduleusers`
--
ALTER TABLE `moduleusers`
  ADD CONSTRAINT `moduleusers_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`),
  ADD CONSTRAINT `moduleusers_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
