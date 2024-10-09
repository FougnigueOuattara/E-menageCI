-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 09 oct. 2024 à 03:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emenage`
--

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evaluated_id` bigint(20) UNSIGNED DEFAULT NULL,
  `evaluator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_title` varchar(255) NOT NULL,
  `evaluator_pseudo` varchar(255) NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `note` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

CREATE TABLE `metiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_04_11_190944_user', 1),
(5, '2024_04_11_191133_user_statut', 1),
(6, '2024_06_16_155852_create_evaluations_table', 1),
(7, '2024_06_16_160022_create_paiements_table', 1),
(8, '2024_06_19_152853_create_metiers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `nationnality` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `age`, `gender`, `phoneNumber`, `nationnality`, `city`, `quarter`, `photo`, `staff`, `etat`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Griffin', 'Borer', 'elfrieda.ortiz@example.com', 20, 'M', '+13232292265', NULL, 'Kertzmannfort', 'Tillmanshire', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:32', '$2y$10$F8.9Mo7Ftt7Qb1j/d90yt.H/9Q7qeUb1RXrfckJ0Zga5nvLpi.8Jy', 'Q0dp0asy9Q', '2024-09-23 16:59:32', '2024-09-23 16:59:59'),
(2, 'Rickie', 'Leannon', 'btowne@example.org', 20, 'M', '(561) 803-5783', NULL, 'West Rodolfomouth', 'Makaylaborough', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:35', '$2y$10$gv1VRrzUrqJhvYIQetCOgerJJiEXM1dxGV4zX2fO3kcEk7OGsjELq', 'NoLkzVR8pC', '2024-09-23 16:59:35', '2024-09-23 16:59:59'),
(3, 'Liam', 'Witting', 'wolf.leola@example.net', 20, 'M', '+1.859.313.2765', NULL, 'Dellfurt', 'North Retaland', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:37', '$2y$10$wI7xB7IqLUkn33sEKGJSg.ydDe0REfBoJTZBhTYP3durEulc0LGSC', 'V2m0NVeWkf', '2024-09-23 16:59:37', '2024-09-23 16:59:59'),
(4, 'Roberta', 'Gleason', 'hackett.horace@example.com', 20, 'M', '1-785-754-2868', NULL, 'Georgetteburgh', 'East Mikemouth', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:42', '$2y$10$LM6/2P/mveQOEjHVeQXUe.vQXzPVic457y5UyioX9tf62BOx73Gui', 'ucpbdJzzzN', '2024-09-23 16:59:42', '2024-09-23 16:59:59'),
(5, 'Justice', 'Mayer', 'towne.neoma@example.com', 20, 'M', '628-308-9006', NULL, 'Deanfurt', 'Rippinstad', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:44', '$2y$10$lF5X466TrJeVUHpaz/VKluJ9jvlYexDr5ryuVl61vukHub1wIxBuq', 'tWUedsW5pD', '2024-09-23 16:59:44', '2024-09-23 16:59:59'),
(6, 'Zander', 'Beahan', 'edouglas@example.com', 20, 'M', '936-708-8150', NULL, 'New Victormouth', 'New Manleychester', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:47', '$2y$10$cQxJ3jcoHQ13LCBc6Wt9F.f0lTMNyW2oV5MC1bURIeTjYMg.tVytO', 'RtntryliNp', '2024-09-23 16:59:47', '2024-09-23 16:59:59'),
(7, 'Buster', 'Jones', 'terrance.torphy@example.net', 20, 'M', '(760) 412-3605', NULL, 'East Katlynn', 'Juanitafurt', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:49', '$2y$10$5xLY9BApw3SRoqcvoWl/reRckuZPRVkVQr73W0uCaokRJv2QusPYW', 'cFkId7nWA9', '2024-09-23 16:59:49', '2024-09-23 16:59:59'),
(8, 'Joshuah', 'Jenkins', 'qgoldner@example.net', 20, 'M', '938-632-9794', NULL, 'Port Presley', 'Rohanberg', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:53', '$2y$10$tdzWTikzw0TdHjHN1vgiGOgxw5ewfET/.Cfwbi8FwK585TiBWzVlO', '7doVxZmh0Y', '2024-09-23 16:59:53', '2024-09-23 16:59:59'),
(9, 'Amiya', 'Kub', 'lauriane.turner@example.org', 20, 'M', '423.785.3680', NULL, 'East Randi', 'Caspertown', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:56', '$2y$10$CPH5MpUyZm0Kj20tL1wUU.ABEVntTvTvrkIdFOJKiJ7MteY95rmvi', '5hTAnsDGYg', '2024-09-23 16:59:56', '2024-09-23 16:59:59'),
(10, 'Paxton', 'Maggio', 'doug27@example.org', 20, 'M', '762.255.4355', NULL, 'North Sean', 'North Justine', '6BJdFMzAHufsnuSV8p66QILvwYqKsEAQbJ0JMYrT.jpg', 'plombiers', 0, '2024-09-23 16:59:59', '$2y$10$9B6RD00kCHVBBsy2v04dNOzndvnyk0p.aeqSG79Hh0GaCEBfx2RTK', 'HukZkHLJSs', '2024-09-23 16:59:59', '2024-09-23 16:59:59');

-- --------------------------------------------------------

--
-- Structure de la table `user_statuts`
--

CREATE TABLE `user_statuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `premium` varchar(255) NOT NULL DEFAULT 'inactif',
  `vip` varchar(255) NOT NULL DEFAULT 'inactif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `evaluations_evaluator_id_evaluated_id_unique` (`evaluator_id`,`evaluated_id`),
  ADD KEY `evaluations_evaluated_id_foreign` (`evaluated_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paiements_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_statuts`
--
ALTER TABLE `user_statuts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_statuts_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user_statuts`
--
ALTER TABLE `user_statuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_evaluated_id_foreign` FOREIGN KEY (`evaluated_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_evaluator_id_foreign` FOREIGN KEY (`evaluator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_statuts`
--
ALTER TABLE `user_statuts`
  ADD CONSTRAINT `user_statuts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
