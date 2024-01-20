-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 20 jan. 2024 à 17:32
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
(1, 'belaid', 'hanaa', 'belaid.hanaa@etu.uae.ac.ma', '$2y$10$kxAKBl2Cj0sczxmA2ULHBuiUHZTZwLBhicavan/sflGXSsoyeolcq', 'etudiant', NULL, NULL),
(2, 'Lkhoyaali', 'amina', 'Lkhoyaali.amina@etu.uae.ac.ma', '$2y$10$lJ1jGLLxo/8x3xVhM1icxOGnTg4X90PVORqACCV2ud84wy49L53li', 'etudiant', NULL, NULL),
(3, 'Fatmi', 'Firdaous', 'Fatmi.Firdaous@etu.uae.ac.ma', '$2y$10$L/Pcg6M/tIBzg8lr4WKDWuO76OcQZ1M1Z1urypluWCfBQZ6oziAGe', 'etudiant', NULL, NULL),
(4, 'AZOUGA', 'Mourad', 'AZOUGA.Mourad@etu.uae.ac.ma', '$2y$10$pe1TYOkpQfquZXrACLt9JOZhxbj5ekFxTKaNwfgjZ3DKpoHFJaGGO', 'delegue', NULL, NULL),
(5, 'ait_kbir', 'mohamed', 'aitkbir.mohamed@uae.ac.ma', '$2y$10$a7kszmsTWE7rkgLVJYtlluC1R/ZCko2lk3ImPEUAp/oB.Bcl/W012', 'professeur', NULL, NULL),
(6, 'el yusufi', 'yasyn', 'elyusufi.yasyn@uae.ac.ma', '$2y$10$8.Mczfv7r1qSlTJ0PZrP9OQc79xu3L1oc9PMJ.Lp5vusvZfv6r6hS', 'professeur', NULL, NULL),
(7, 'BAIDA', 'OUAFAE', 'BAIDA.OUAFAE@uae.ac.ma', '$2y$10$yPtRoQ.VdECXO94tKJEXGeR9qvXnROZnQ3zry/6ej0yISKXuPuN7q', 'responsable_filiere', NULL, NULL),
(8, 'BOUHORMA', 'Mohammed', 'BOUHORMA.Mohammed@uae.ac.ma', '$2y$10$rDX2ltTsr8UZutBzwcnaTOztaUSYKE.bdon1Ov9qa2Bd6k/xnniKG', 'chef_departement', NULL, NULL),
(9, 'EL FELSOUFI', 'Zoubir', 'EL FELSOUFI.Zoubir@uae.ac.ma', '$2y$10$QPYi99slGw3tUcGkXMiTWOPfvlGpRFOaq8uHcWqENLiI8RVEBQIuG', 'chef_departement', NULL, NULL),
(10, 'DIANI', 'Mustapha DIANI', 'm.diani@fstt.ac.ma', '$2y$10$a.B1BLlcTd7aJHN3w/BWT.cbY/H2yVcS8rGfi584vcsPBmjgjPN8a', 'responsable_pedagogique', NULL, NULL),
(50, 'admin', 'admin', 'admin@admin', '$2y$10$PebcwqOy3fmzi1IxCfLQh./V/.g1JAxGN15rhApme7KAMo6sVTHcS', 'etudiant', NULL, NULL),
(51, 'John', 'Doe', 'john.doe@example.com', '$2y$10$bHJ01ESNyaWHBFp0ncw3IOjCLswAxcRaj.Y5SPL/NWz.8nHwqk3KS', 'etudiant', NULL, NULL),
(52, 'etudiant', 'etudiant', 'etudiant@etudiant', '$2y$10$54ZsdBxTHzEWynPOF85tG.jQBR1gyZ2mRU9thfby80H88eJFqztFC', 'etudiant', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'delegue', 'delegue', 'delegue@delegue', '$2y$10$xnOyPvK8a34US4KKObYoY.7RA6VlIamXME15KyWpF/J/FQHVoW6w.', 'delegue', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'professeur', 'professeur', 'professeur@professeur', '$2y$10$gyyq898UoSedwZ.K7eyu0eZ7Vqayo.bM670EGKlPjZbatObnQC8ki', 'professeur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'responsable_filiere', 'responsable_filiere', 'responsable_filiere@ac', '$2y$10$CPU0KXr3.vTDOdkSJzc/Vu39i01lvYk.PRV7US2pUZbR.X0B69xda', 'responsable_filiere', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'chef_departement', 'chef_departement', 'chef_departement@ac', '$2y$10$i2ETZIJKoGEv814HlLKYLOSqkpVN.qvMvZ1wd.FTgtOmpIZT7gUMe', 'chef_departement', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'responsable_pedagogique', 'responsable_pedagogique', 'responsable_pedagogique@ac', '$2y$10$gHbukker1MviBGgvpSw5LOAnA4bmKR2cmRcfZQdxkpNQlWwVntIiW', 'responsable_pedagogique', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
