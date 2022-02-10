-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 déc. 2021 à 02:56
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel8ajaxcrud`
--

-- --------------------------------------------------------

--
-- Structure de la table `catmatieres`
--

DROP TABLE IF EXISTS `catmatieres`;
CREATE TABLE IF NOT EXISTS `catmatieres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCatMatiere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `catmatieres`
--

INSERT INTO `catmatieres` (`id`, `nomCatMatiere`, `created_at`, `updated_at`) VALUES
(1, 'rerere', '2021-12-08 03:55:02', '2021-12-08 03:55:02'),
(2, 'pp', '2021-12-08 03:55:31', '2021-12-08 03:55:31'),
(3, 'mmmmmm', '2021-12-08 06:50:00', '2021-12-08 06:50:00'),
(4, 'klkk', '2021-12-08 06:50:26', '2021-12-08 06:50:26'),
(5, 'tyytyt', '2021-12-08 06:50:38', '2021-12-08 06:50:38'),
(6, 'ioi', '2021-12-08 06:51:25', '2021-12-08 06:51:25'),
(7, 'qw', '2021-12-08 07:08:45', '2021-12-08 07:08:45'),
(8, 'y', '2021-12-08 07:09:12', '2021-12-08 07:09:12'),
(9, 'rere', '2021-12-08 11:20:35', '2021-12-08 11:20:35'),
(10, 'p', '2021-12-08 11:44:07', '2021-12-08 11:44:07'),
(11, 'eee', '2021-12-09 11:57:26', '2021-12-09 11:57:26'),
(12, 'ytyt', '2021-12-09 11:57:35', '2021-12-09 11:57:35'),
(13, 'o', '2021-12-09 11:57:50', '2021-12-09 11:57:50');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_classe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_classe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_classe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `code_classe`, `category_classe`, `name_classe`, `created_at`, `updated_at`) VALUES
(1, 'ooj', 'PRIMAIRE', '6eme', '2021-11-30 07:10:11', '2021-12-07 16:11:07'),
(2, '4e', 'PRIMAIRE', '3eme', '2021-11-30 10:56:22', '2021-11-30 10:57:24'),
(3, '78', 'SECONDAIRE', '7eme', '2021-12-07 11:28:23', '2021-12-07 11:28:23'),
(4, '08', 'PRIMAIRE', '2emea', '2021-12-07 11:44:42', '2021-12-07 11:44:42'),
(5, '76', 'PRIMAIRE', 'ytyr', '2021-12-07 11:45:46', '2021-12-07 11:45:46'),
(6, '8888', 'KINDERGADEN', '666666', '2021-12-07 11:57:58', '2021-12-07 11:57:58'),
(7, 'kkk', 'SECONDAIRE', 'ooooooooo', '2021-12-07 12:05:29', '2021-12-07 12:05:29'),
(8, 'mmmmmmmmmmm', 'KINDERGADEN', 'mmmmmmmmmmmm', '2021-12-07 12:07:18', '2021-12-07 12:07:18'),
(9, 'o', 'PRIMAIRE', '89', '2021-12-21 10:16:02', '2021-12-21 10:16:02');

-- --------------------------------------------------------

--
-- Structure de la table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `questions_id` int(10) UNSIGNED NOT NULL,
  `quizes_id` int(10) UNSIGNED NOT NULL,
  `ans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_ans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fichiers`
--

DROP TABLE IF EXISTS `fichiers`;
CREATE TABLE IF NOT EXISTS `fichiers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fichiers`
--

INSERT INTO `fichiers` (`id`, `name`, `description`, `file`, `cate_id`, `created_at`, `updated_at`) VALUES
(15, 'jjjjjjjjjjjjj', 'jjjjjjjjjjjjjjj', '1639708820.pdf', 2, '2021-12-17 10:40:20', '2021-12-17 10:40:20'),
(14, 'pppppp', 'ppppppp', '1639656714.docx', 1, '2021-12-16 20:11:54', '2021-12-16 20:11:54'),
(13, 'ooooo', 'ooooooo', '1639656450.pdf', 2, '2021-12-16 20:07:31', '2021-12-16 20:07:31');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cate_id` bigint(20) NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gens` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `cate_id`, `nom`, `prenom`, `gens`, `adresse`, `image`, `created_at`, `updated_at`) VALUES
(13, 3, 'jean', 'joseline', 'MASCULIN', 'petion ville,rue lamarre', '1638861371.PNG', '2021-12-07 15:16:11', '2021-12-07 15:58:44'),
(14, 5, 'jules', 'pierre', 'MASCULIN', 'petion ville', '1638866869.JPG', '2021-12-07 16:47:49', '2021-12-07 16:47:49'),
(15, 2, 'juliop', 'mamane', 'FEMININ', 'vivy mitchel,impasse chaha lageurre', '1639252210.JPG', '2021-12-12 03:50:10', '2021-12-13 09:16:06'),
(16, 2, 'loulou', 'belin', 'MASCULIN', 'rue 4L', '1639369307.JPG', '2021-12-13 12:21:47', '2021-12-13 12:21:47'),
(17, 1, 'ooooo', 'pppp', 'MASCULIN', 'vivy mitchel,rue des collines', '1640053073.jpg', '2021-12-21 10:17:53', '2021-12-21 10:17:53'),
(18, 2, 'colo', 'jean', 'FEMININ', 'petion ville', '1640053391.png', '2021-12-21 10:23:11', '2021-12-21 10:23:11');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cateMat_id` bigint(20) NOT NULL,
  `nomMatiere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coefficient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `cateMat_id`, `nomMatiere`, `coefficient`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'sc soc', '4575', 5, '2021-12-08 04:57:07', '2021-12-08 12:41:38'),
(2, 3, 'mati', '12', 2, '2021-12-08 05:06:28', '2021-12-13 10:13:23'),
(3, 1, 'ang', '7', 6, '2021-12-08 05:11:29', '2021-12-08 05:11:29'),
(4, 2, 'chimie', '300', 2, '2021-12-13 12:22:49', '2021-12-13 12:22:49'),
(5, 1, 'creole', '10', 2, '2021-12-14 12:54:53', '2021-12-14 12:54:53'),
(6, 3, 'francais', '200', 1, '2021-12-14 13:04:25', '2021-12-14 13:04:25'),
(7, 1, 'kkkkkkkkkkkk', '90', 6, '2021-12-21 10:24:53', '2021-12-21 10:24:53');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_06_30_193440_create_countries_table', 1),
(11, '2021_10_19_054741_create_classes_table', 1),
(12, '2021_11_27_152118_create_inscriptions_table', 1),
(13, '2021_12_03_040729_create_fichiers_table', 2),
(14, '2021_12_03_232624_create_quizes_table', 3),
(16, '2021_12_04_045455_create_questions_table', 4),
(17, '2021_12_04_051037_create_options_table', 4),
(18, '2021_12_05_044620_create_exams_table', 5),
(19, '2021_12_05_045125_create_results_table', 5),
(20, '2021_12_07_091946_create_matieres_table', 6),
(21, '2021_12_07_194645_create_catmatieres_table', 7),
(22, '2021_12_07_202412_create_matieres_table', 8),
(23, '2021_12_08_052337_create_professeurs_table', 9),
(24, '2021_12_09_232659_create_notes_table', 10),
(25, '2021_12_13_052232_create_notes_table', 11),
(26, '2021_12_15_044059_create_presences_table', 12),
(27, '2021_12_17_011925_create_send_devoirs_table', 13);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_id` bigint(20) NOT NULL,
  `id_pers` bigint(20) NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note`, `mat_id`, `id_pers`, `cate_id`, `created_at`, `updated_at`) VALUES
(17, '91', 5, 16, 2, NULL, NULL),
(16, '90', 5, 15, 2, NULL, NULL),
(15, '57', 5, 16, 2, NULL, NULL),
(14, '56', 5, 15, 2, NULL, NULL),
(18, '87', 2, 15, 2, NULL, NULL),
(19, '89', 4, 15, 2, NULL, NULL),
(20, '89', 2, 15, 2, NULL, NULL),
(21, '8', 2, 15, 2, NULL, NULL),
(22, '9', 2, 16, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `questions_id` int(10) UNSIGNED NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`id`, `questions_id`, `option`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'ssd', NULL, NULL, NULL),
(2, 3, 'klklk', NULL, NULL, NULL),
(3, 3, 'ssdbbbbbbb', NULL, NULL, '2021-12-05 02:47:20'),
(4, 3, 'uyuyummmmmmm', NULL, NULL, '2021-12-05 02:47:20'),
(5, 4, 'asasa', NULL, NULL, NULL),
(6, 4, 'erer', NULL, NULL, NULL),
(7, 4, 'dfd', NULL, NULL, NULL),
(8, 4, 'tyty', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `presences`
--

DROP TABLE IF EXISTS `presences`;
CREATE TABLE IF NOT EXISTS `presences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `presAbs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pers` bigint(20) NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presences`
--

INSERT INTO `presences` (`id`, `presAbs`, `id_pers`, `cate_id`, `created_at`, `updated_at`) VALUES
(18, 'pres', 16, 2, NULL, NULL),
(17, 'abs', 15, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codeProf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gens` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieuDeNaissance` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailPersonne` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `niveauEd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `codeProf`, `nom`, `prenom`, `gens`, `telephone`, `lieuDeNaissance`, `adresse`, `image`, `emailPersonne`, `cate_id`, `niveauEd`, `remarque`, `created_at`, `updated_at`) VALUES
(1, 'ewewuuyuyu', 'DFD', 'CVCBBB', 'Feminin', '3434', 'TRTRTR', 'fdfdf', '1638943112.JPG', 'wewewewe', 4, 'RERRERE', 'uyuyuyyuuy', '2021-12-08 13:58:33', '2021-12-13 10:23:41'),
(2, '123', 'PIERRE', 'JULES', 'Masculin', '213333', 'DELMAS', 'delmas 2', '1639018341.PNG', 'ewewrwrrr', 6, 'UNIVERSITE', 'eeeertrttttr', '2021-12-09 10:52:21', '2021-12-09 10:52:21');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quizes_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `quizes_id`, `question`, `answer`, `status`, `options`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, 'wqwq', '1', NULL, NULL, '23', NULL, '2021-12-05 02:54:16', '2021-12-05 02:55:06'),
(3, 1, 'ttty', '2', NULL, NULL, '459', NULL, '2021-12-04 13:54:53', '2021-12-05 02:43:38');

-- --------------------------------------------------------

--
-- Structure de la table `quizes`
--

DROP TABLE IF EXISTS `quizes`;
CREATE TABLE IF NOT EXISTS `quizes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizes`
--

INSERT INTO `quizes` (`id`, `quiz_name`, `description`, `quiz_date`, `quiz_time`, `number_of_question`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ytt', 'we', '2021-12-23', '10:00', '20', '1', '2021-12-04 07:57:12', '2021-12-06 13:41:26');

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `quizes_id` int(10) UNSIGNED NOT NULL,
  `total_mark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yes_ans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sample_datas`
--

DROP TABLE IF EXISTS `sample_datas`;
CREATE TABLE IF NOT EXISTS `sample_datas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_id` bigint(20) NOT NULL,
  `id_pers` bigint(20) NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sample_datas`
--

INSERT INTO `sample_datas` (`id`, `note`, `mat_id`, `id_pers`, `cate_id`, `created_at`, `updated_at`) VALUES
(151, '34', 2, 15, 2, NULL, NULL),
(152, '35', 2, 16, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `send_devoirs`
--

DROP TABLE IF EXISTS `send_devoirs`;
CREATE TABLE IF NOT EXISTS `send_devoirs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `send_devoirs`
--

INSERT INTO `send_devoirs` (`id`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '1639706779.pdf', 1, '2021-12-17 10:06:19', '2021-12-17 10:06:19');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_sample`
--

DROP TABLE IF EXISTS `tbl_sample`;
CREATE TABLE IF NOT EXISTS `tbl_sample` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(81, 'Susan', 'Dienerb', '2019-10-14 07:30:00', '2019-10-14 07:30:00'),
(82, 'Williamuuuuuuu', 'Bati', '2019-10-14 07:30:00', '2019-10-14 07:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `picture`, `cate_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jean', 'jeanevens790@gmail.com', 'professeur', NULL, 2, NULL, '$2y$10$6oxtNHTx3PL63x3LIOnPqu5kpIgWAnJmi0BIhf5AqiSRU2bTh/X4G', NULL, '2021-11-30 06:00:56', '2021-11-30 06:00:56'),
(2, 'ADMINEv', 'admin790@gmail.com', 'admin', 'UIMG_2021113061a69c2663751.jpg', 0, NULL, '$2y$10$OOvLLg1Jk77H9eVwM4av2Oa7PXkCN39IZbXOpIAmi1XIaDxlA3Yu6', NULL, '2021-11-30 06:02:54', '2021-12-01 05:48:22'),
(3, 'kolo', 'kolo790@gmial.com', '2', NULL, 0, NULL, '$2y$10$DiK/tLmvbJ3jqYMT49k5muDSqA.0IQO31kSBi.i2iIdKQW1LcVKz6', NULL, '2021-11-30 07:53:44', '2021-11-30 07:53:44'),
(4, 'lo', 'jea790@gmail.com', '2', NULL, 0, NULL, '$2y$10$KVsdp2/eYsC3aXXYdzvEKuHKXhPGNb0pMVJPnutnBVtXI8LX8EgOW', NULL, '2021-11-30 08:08:46', '2021-11-30 08:08:46'),
(5, 'wwew', 'js790@gmail.com', '1', 'UIMG_2021113061a6958756d51.jpg', 0, NULL, '$2y$10$QZGmuwMzvUdvCpBLDYeQNeS0kuiXWCLg/iaOsVFS5gIYtALll3VpK', NULL, '2021-12-01 02:53:51', '2021-12-01 05:20:07'),
(6, 'qewew', 'jr790@gmail.com', 'admin', '142941638308603_avatar.png', 0, NULL, '$2y$10$pCcwIBqlj9x6x75ZFmxHZOutIxM080V.CbrCRu4AtF5eYbtdR3R3G', NULL, '2021-12-01 05:43:23', '2021-12-01 05:43:23'),
(7, 'jean', 'admin1790@gmail.com', 'admin', '193101638417098_avatar.png', 0, NULL, '$2y$10$WPN4CSOqowj6JBD8j4GZZ.EEZKq8vkDAAoodLSZEAmev6.22UU.sC', NULL, '2021-12-02 11:51:38', '2021-12-02 11:51:38'),
(8, 'km', 'admin3790@gmail.com', 'admin', '342941638417365_avatar.png', 0, NULL, '$2y$10$1hqE3E7SwMh/VM/wQApKnuOlZ90ITMdkXezsIS7RFDcIC1ffudYFm', NULL, '2021-12-02 11:56:05', '2021-12-02 11:56:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
