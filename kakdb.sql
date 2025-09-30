-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 sep. 2025 à 06:01
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
-- Base de données : `kakdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idagent` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `categorie` varchar(250) NOT NULL,
  `dateAgent` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`idagent`, `name`, `phone`, `password`, `categorie`, `dateAgent`) VALUES
(100, 'Mboloko believe', '0817723066', '$2y$10$E1hIExSjMxc6HFvfbyLVHOCWlq0gUmzZ0U86WC2LFKcWe6487Zc5O', 'Développeur', '06/04/23, 12:30'),
(101, 'Djodjo Kiamodja', '0819619099', 'fort', 'Médecin, initiateur', '');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idarticle` int(11) NOT NULL,
  `titreArt` varchar(250) NOT NULL,
  `photoArt` varchar(250) NOT NULL,
  `contenuArt` text NOT NULL,
  `dateArt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `titreArt`, `photoArt`, `contenuArt`, `dateArt`) VALUES
(312, 'Comment stabiliser son diabète avec KaK glycémie ?', '312.png', 'KaK Glycémie c\'est une première application web qui permet aux diabètique de Contrôler, Surveiller et Harmoniser leur prise en charge.\r\nElle est utilisable partout et à tout moment, vous pouvez vous connecter sur KaK Glycémie 24h/7j\r\n\r\nKaK Glycémie peut être utiliser par tout le monde, pour surveiller sa glycémie et harmoniser son traitement pendant toute la période de la vie du malade et permet de transfèrer des informations fiables et vérifiables chez son médecin pour des avis spécialisés.\r\nAlors Inscrivez vous maintenant pour commencer le suivi de votre prise en charge par KaK Glycémie Gratuitement', '07/04/23, 07:50'),
(809, 'Comment utiliser KaK glycémie ?', '809.png', 'Pour le diabètique, l\'utilisation de KaK glycémie est imparatif car cette application vous permet de faire le suivi de votre état de santé en ligne, h24 et 7j/7, de ce fait, cette application vous aidera jusqu\'à ce que vous allez stabiliser votre etat de santé', '07/04/23, 18:29'),
(852, 'lo', '852.jpg', 'vie4\r\n', '26/06/23, 14:20');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idcontact`, `iduser`, `nom`, `email`, `message`) VALUES
(1, 2641, 'Jonathan M', NULL, 'Mon abba'),
(2, 2900, 'Dev unbelievable', NULL, 'Vous pouvez contacter l\'administration de KaK Glycémie, posez toutes vos questions et préoccuptations. Une équipe de KaK glycémie pourra vous contacter au moment venu.');

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
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `idfriends` int(20) UNSIGNED NOT NULL,
  `idpatient` int(11) DEFAULT NULL,
  `idmedecin` int(11) DEFAULT NULL,
  `dateFriend` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`idfriends`, `idpatient`, `idmedecin`, `dateFriend`) VALUES
(1, 1035, 2911, '2024-03-31 07:10:58'),
(2, 1035, 2911, '2024-03-31 07:12:30');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idmedecin` int(11) NOT NULL,
  `ordreMed` text DEFAULT NULL,
  `hopital` text DEFAULT NULL,
  `specialite` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `valider` varchar(5) NOT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_on` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idmedecin`, `ordreMed`, `hopital`, `specialite`, `description`, `valider`, `created_on`, `updated_on`) VALUES
(1200, NULL, 'Diamand Hospital +', 'Diamand ', 'Diamand Hospital +', 'non', '2024-04-11 12:51:42', '28-08-2025, 22:00'),
(2143, NULL, NULL, NULL, NULL, 'oui', '2025-05-13 03:50:56', NULL),
(2641, '2641.pdf', 'HJ hospital', 'Medecin parfait', 'John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.\n\n', 'oui', '2024-03-25 15:27:13', '26-03-2024, 18:12'),
(2900, '2900.pdf', 'HJ Hospital king', 'Docteur generaliste', 'if ($request->hasFile(\'cv\')) {\r\n            $file = $request->file(\'cv\');\r\n            $path = $file->store(\'cvs\', \'public\'); // Stocke dans le dossier \'storage/app/public/cvs\'\r\n\r\n            // Vous pouvez également sauvegarder le chemin dans la base de données ici\r\n\r\n            return back()->with(\'success\', \'CV téléchargé avec succès !\');', 'oui', '2025-08-22 04:27:30', '31-08-2025, 06:53'),
(2910, 'hh', 'Diamand Hospital +', '\nPediatre', 'John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.\n', 'oui', '2024-03-25 15:27:13', '25-03-2024, 16:25'),
(2911, 'Kinsha', 'Initiative plus Hospital', 'Forever et moi ', 'John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.\n', 'oui', '2024-03-25 15:27:13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_22_155138_create_all_users_table', 1),
(6, '2024_01_10_145142_create_messages_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idpatient` int(11) NOT NULL,
  `datePat` varchar(25) NOT NULL,
  `avatarPat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idpatient`, `datePat`, `avatarPat`) VALUES
(596, '13-04-2024, 19:47', NULL),
(1035, '05-03-2024, 15:03', NULL),
(1129, '22-08-2025, 03:54', NULL),
(1828, '12-05-2025, 06:11', NULL),
(2133, '04-09-2025, 20:56', NULL),
(2512, '30-03-2024, 08:46', NULL);

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
-- Structure de la table `private_messages`
--

CREATE TABLE `private_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('DOCUMENT','TEXT') NOT NULL,
  `value` varchar(255) NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `private_messages`
--

INSERT INTO `private_messages` (`id`, `receiver_id`, `sender_id`, `type`, `value`, `read_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'TEXT', 'Bonjour', '2024-02-19 11:53:24', '2024-02-19 10:20:10', '2024-02-19 11:53:24', NULL),
(2, 1, 2, 'TEXT', 'salut', '2024-02-19 12:12:32', '2024-02-19 12:10:58', '2024-02-19 12:12:32', NULL),
(3, 2, 1, 'TEXT', 'bonjour patient', '2024-02-19 12:12:42', '2024-02-19 12:12:40', '2024-02-19 12:12:42', NULL),
(4, 1, 2, 'TEXT', 'je me sens pas bien, ma glycémie est de 400 et que faire ?', '2024-02-19 12:13:21', '2024-02-19 12:13:20', '2024-02-19 12:13:21', NULL),
(5, 2, 1, 'TEXT', 'jkdgdjdhdjdhd jdjd', '2024-02-19 12:13:32', '2024-02-19 12:13:29', '2024-02-19 12:13:32', NULL),
(6, 2, 1, 'TEXT', 'cc', NULL, '2024-02-19 12:30:15', '2024-02-19 12:30:15', NULL),
(7, 2, 1, 'TEXT', 'salut notif', NULL, '2024-02-19 12:30:53', '2024-02-19 12:30:53', NULL),
(8, 1035, 2911, 'TEXT', 'cc', '2025-05-13 03:17:27', '2024-04-06 11:53:59', '2025-05-13 03:17:27', NULL),
(9, 2911, 1035, 'TEXT', 'poui', NULL, '2025-05-13 03:17:43', '2025-05-13 03:17:43', NULL),
(10, 1035, 2143, 'TEXT', 'jop', NULL, '2025-05-13 03:19:57', '2025-05-13 03:19:57', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `idsuivi` int(20) UNSIGNED NOT NULL,
  `idpatient` int(11) NOT NULL,
  `idmedecin` int(11) NOT NULL,
  `suivi` varchar(5) NOT NULL,
  `remarque` text DEFAULT NULL,
  `dateSuivi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `suivi`
--

INSERT INTO `suivi` (`idsuivi`, `idpatient`, `idmedecin`, `suivi`, `remarque`, `dateSuivi`) VALUES
(8, 1129, 2143, 'non', NULL, '2025-08-22 19:09:49'),
(9, 1129, 2911, 'non', NULL, '2025-08-22 21:33:30'),
(10, 1129, 2641, 'oui', NULL, '2025-08-26 20:44:54'),
(11, 1129, 2900, 'non', NULL, '2025-09-04 19:21:46'),
(12, 1035, 2900, 'oui', NULL, '2025-09-04 19:26:26');

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

CREATE TABLE `traitement` (
  `idtrait` int(11) NOT NULL,
  `idpat` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `taux` int(11) NOT NULL,
  `traitement` text NOT NULL,
  `datetrait` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `traitement2`
--

CREATE TABLE `traitement2` (
  `idtraitement` int(11) NOT NULL,
  `idpatient` int(11) NOT NULL,
  `jour` varchar(8) NOT NULL,
  `taux` int(11) NOT NULL,
  `traitement` text NOT NULL,
  `datetrait` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `traitement2`
--

INSERT INTO `traitement2` (`idtraitement`, `idpatient`, `jour`, `taux`, `traitement`, `datetrait`) VALUES
(4, 1035, '1', 90, 'jesus is the king', '11-04-2024, 12:57'),
(5, 1035, '2', 68, 'David okkkit', '13-04-2024, 20:25'),
(6, 1828, '1', 125, 'i need the presence of god', '12-05-2025, 06:13'),
(7, 1828, '2', 50, 'i need the presence of god 2', '12-05-2025, 06:14'),
(8, 1035, '3', 120, '15 Ui/Insuline', '13-05-2025, 04:05'),
(9, 1129, '1', 68, 'David okkkit', '22-08-2025, 04:36'),
(10, 1129, '2', 135, 'Djibril cisse, je vais reussir malgre tout. Je suis un champion', '27-08-2025, 03:31'),
(11, 1129, '3', 110, 'i need the presence of god 2', '31-08-2025, 06:57'),
(12, 1035, '4', 210, '15 Ui/Insuline', '03-09-2025, 21:34'),
(13, 1035, '5', 360, '15 Ui/Insuline', '03-09-2025, 21:34'),
(14, 1035, '6', 20, '15 Ui/Insuline', '03-09-2025, 21:35'),
(15, 1035, '7', 120, '15 Ui/Insuline', '03-09-2025, 21:37'),
(16, 1035, '8', 120, '15 Ui/Insuline', '03-09-2025, 21:38'),
(17, 1035, '9', 82, '15 Ui/Insuline', '03-09-2025, 21:40'),
(18, 1035, '10', 300, '15 Ui/Insuline', '03-09-2025, 21:40'),
(19, 2133, '1', 125, '15 Ui/insuline avec paracetamol', '04-09-2025, 21:04'),
(20, 2133, '2', 110, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:05'),
(21, 2133, '3', 50, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:05'),
(22, 2133, '4', 250, '15 Ui/insuline avec paracetamol', '04-09-2025, 21:05'),
(23, 2133, '5', 50, '15 Ui/insuline avec paracetamol', '04-09-2025, 21:06'),
(24, 2133, '6', 50, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:06'),
(25, 2133, '7', 50, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:08'),
(26, 2133, '8', 250, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:08'),
(27, 2133, '9', 365, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:09'),
(28, 2133, '10', 456, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:10'),
(29, 2133, '11', 50, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:10'),
(30, 2133, '12', 110, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:11'),
(31, 2133, '13', 365, '150 Ui/insuline avec paracetamol', '04-09-2025, 21:20'),
(32, 1035, '11', 82, '15 Ui/Insuline', '08-09-2025, 04:21'),
(41, 1035, '30', 221, 'Traitement A', '2025-09-08 05:38:33'),
(42, 1035, '31', 394, 'Traitement B', '2025-09-08 05:38:33'),
(43, 1035, '32', 254, 'Traitement C', '2025-09-08 05:38:33'),
(44, 1035, '33', 242, 'Traitement D', '2025-09-08 05:38:33'),
(45, 1035, '34', 298, 'Traitement E', '2025-09-08 05:38:33'),
(46, 1035, '35', 313, 'Traitement F', '2025-09-08 05:38:33'),
(47, 1035, '36', 220, 'Traitement G', '2025-09-08 05:38:33'),
(48, 1035, '37', 311, 'Traitement H', '2025-09-08 05:38:33'),
(49, 1035, '38', 446, 'Traitement I', '2025-09-08 05:38:33'),
(50, 1035, '39', 245, 'Traitement J', '2025-09-08 05:38:33'),
(51, 1035, '40', 341, 'Traitement K', '2025-09-08 05:38:33'),
(52, 1035, '41', 216, 'Traitement L', '2025-09-08 05:38:33'),
(53, 1035, '42', 211, 'Traitement M', '2025-09-08 05:38:33'),
(54, 1035, '43', 257, 'Traitement N', '2025-09-08 05:38:33'),
(55, 1035, '44', 200, 'Traitement O', '2025-09-08 05:38:33'),
(56, 1035, '45', 382, 'Traitement P', '2025-09-08 05:38:33'),
(57, 1035, '46', 258, 'Traitement Q', '2025-09-08 05:38:33'),
(58, 1035, '47', 297, 'Traitement R', '2025-09-08 05:38:33'),
(59, 1035, '48', 258, 'Traitement S', '2025-09-08 05:38:33'),
(60, 1035, '49', 249, 'Traitement T', '2025-09-08 05:38:33'),
(61, 1035, '50', 322, 'Traitement U', '2025-09-08 05:38:33'),
(62, 1035, '51', 413, 'Traitement V', '2025-09-08 05:38:33'),
(63, 1035, '52', 347, 'Traitement W', '2025-09-08 05:38:33'),
(64, 1035, '53', 345, 'Traitement X', '2025-09-08 05:38:33'),
(65, 1035, '54', 233, 'Traitement Y', '2025-09-08 05:38:33'),
(66, 1035, '55', 284, 'Traitement Z', '2025-09-08 05:38:33'),
(67, 1035, '56', 269, 'Traitement AA', '2025-09-08 05:38:33'),
(68, 1035, '57', 345, 'Traitement AB', '2025-09-08 05:38:33'),
(69, 1035, '58', 167, 'Traitement AC', '2025-09-08 05:38:33'),
(70, 1035, '59', 253, 'Traitement AD', '2025-09-08 05:38:33'),
(71, 1035, '130', 391, 'Traitement A', '2025-09-09 04:45:36'),
(72, 1035, '131', 188, 'Traitement B', '2025-09-09 04:45:36'),
(73, 1035, '132', 221, 'Traitement C', '2025-09-09 04:45:36'),
(74, 1035, '133', 391, 'Traitement D', '2025-09-09 04:45:36'),
(75, 1035, '134', 240, 'Traitement E', '2025-09-09 04:45:36'),
(76, 1035, '135', 177, 'Traitement F', '2025-09-09 04:45:36'),
(77, 1035, '136', 318, 'Traitement G', '2025-09-09 04:45:36'),
(78, 1035, '137', 307, 'Traitement H', '2025-09-09 04:45:36'),
(79, 1035, '138', 432, 'Traitement I', '2025-09-09 04:45:36'),
(80, 1035, '139', 186, 'Traitement J', '2025-09-09 04:45:36'),
(81, 1035, '140', 389, 'Traitement K', '2025-09-09 04:45:36'),
(82, 1035, '141', 332, 'Traitement L', '2025-09-09 04:45:36'),
(83, 1035, '142', 346, 'Traitement M', '2025-09-09 04:45:36'),
(84, 1035, '143', 281, 'Traitement N', '2025-09-09 04:45:36'),
(85, 1035, '144', 219, 'Traitement O', '2025-09-09 04:45:36'),
(86, 1035, '145', 403, 'Traitement P', '2025-09-09 04:45:36'),
(87, 1035, '146', 308, 'Traitement Q', '2025-09-09 04:45:36'),
(88, 1035, '147', 178, 'Traitement R', '2025-09-09 04:45:36'),
(89, 1035, '148', 421, 'Traitement S', '2025-09-09 04:45:36'),
(90, 1035, '149', 215, 'Traitement T', '2025-09-09 04:45:36'),
(91, 1035, '150', 265, 'Traitement U', '2025-09-09 04:45:36'),
(92, 1035, '151', 232, 'Traitement V', '2025-09-09 04:45:36'),
(93, 1035, '152', 213, 'Traitement W', '2025-09-09 04:45:36'),
(94, 1035, '153', 220, 'Traitement X', '2025-09-09 04:45:36'),
(95, 1035, '154', 310, 'Traitement Y', '2025-09-09 04:45:36'),
(96, 1035, '155', 439, 'Traitement Z', '2025-09-09 04:45:36'),
(97, 1035, '156', 213, 'Traitement AA', '2025-09-09 04:45:36'),
(98, 1035, '157', 203, 'Traitement AB', '2025-09-09 04:45:36'),
(99, 1035, '158', 224, 'Traitement AC', '2025-09-09 04:45:36'),
(100, 1035, '159', 362, 'Traitement AD', '2025-09-09 04:45:36'),
(309, 1035, '33', 150, 'Traitement A', '2025-09-01'),
(310, 1035, '34', 282, '85 Ui/Insuline', '14-09-2025, 04:57'),
(311, 1129, '4', 310, '150 Ui/insuline avec paracetamol', '14-09-2025, 05:00'),
(312, 1035, '35', 2, '15 Ui/Insuline', '14-09-2025, 05:07'),
(313, 1129, '5', 100, '150 Ui/insuline avec du paracetamol', '14-09-2025, 06:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `sexe`, `email`, `phone`, `password`, `type`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(596, 'king Just BM', 'Feminin', 'lon@gmail.com', '0817723053', '$2y$10$YYPSTRImgOIgouzEuWHe7.8RUUH/rFKSmgGrKbtSyLRQzJ8UuOBSW', 'patient', NULL, NULL, '2024-04-13 18:47:58', '2024-04-13 18:47:58'),
(1035, 'Dena mwana kin', 'Feminin', 'dev@gmail.com', '0817723066', '$2y$10$E1hIExSjMxc6HFvfbyLVHOCWlq0gUmzZ0U86WC2LFKcWe6487Zc5O', 'patient', NULL, NULL, '2024-03-05 14:03:49', '2024-04-03 00:03:28'),
(1129, 'David okit', 'Masculin', 'dav@gmail.com', '0899954912', '$2y$10$atydqipt7hdSbOvY57Oj1.H8dNWOfgPPZ7HZr00dNsVWKLvCfVGvS', 'patient', NULL, NULL, '2025-08-22 02:54:27', '2025-08-22 02:54:27'),
(1200, 'Dr Laza', 'Feminin', 'drlaza@gmail.com', '0817723051', '$2y$10$2vBdjZ6JJ3nsJDyvea6gZewnwxN7VwGqfbNw6oSV26pJ3T2n.uEQC', 'medecin', NULL, NULL, '2024-04-11 11:51:42', '2024-04-11 11:51:42'),
(1828, 'Lisa', 'Masculin', 'christianM@gmail.com', '0817723000', '$2y$10$mbFpNHLGEv8IaS1hicOw..eSciFzS6SYQ.y31xv/2IeW/FYplecWi', 'patient', NULL, NULL, '2025-05-12 05:11:36', '2025-05-12 05:11:36'),
(2133, 'king Music', 'Masculin', 'mbolokobelieve2@gmail.com', '0899954910', '$2y$10$xj59/zNuXNqxAhVsz56x0O9XYIwqQyZoR0iuCYtYQMxN41aGXaMty', 'patient', NULL, NULL, '2025-09-04 19:56:14', '2025-09-04 19:56:14'),
(2143, 'Dr Red Bull', 'Feminin', 'phcffr@gmail.com', '0817723001', '$2y$10$MRvzF5h6EiDf/kqJDImCiOffxvCZfJ6Nluf2JwwTwGPZIEeJYeTbC', 'medecin', NULL, NULL, '2025-05-13 02:50:55', '2025-05-13 02:50:55'),
(2512, 'David Okitakula.', 'Masculin', 'mbolokobeli2eve@gmail.com', '0817723061', '$2y$10$dVw4/Ffpk4be49tOiox64OAafBfGiSYIka2aLG2NOTfyiEb3/mkoi', 'patient', NULL, NULL, '2024-03-30 07:46:46', '2024-03-30 07:46:46'),
(2641, 'mon medecin Just mboloko', 'Masculin', 'mbolokobelieve@gmail.com', '0817723060', '$2y$10$fvBbfQsJq8E7aOZ1VfwW7OuF/W/sOg05VFsA1UTyh7zlHuYvJZnWi', 'medecin', NULL, NULL, '2024-03-05 14:08:56', '2024-03-05 14:08:56'),
(2900, 'Dr Elsa mbos', 'Feminin', 'elsa@gmail.com', '0899954911', '$2y$10$xE1zY9TfR3FO80i2bB4z3uPEptbaHdZ34k4Lvarlb511DaqFWm2mO', 'medecin', NULL, NULL, '2025-08-22 03:27:30', '2025-08-22 03:27:30'),
(2910, 'Never say Never.', 'Feminin', 'loin@gmail.com', '0817723064', 'Kinshshh', 'medecin', NULL, NULL, NULL, NULL),
(2911, 'Athoms MB', 'Masculin', 'ketshia@gmail.com', '0817723062', '$2y$10$E1hIExSjMxc6HFvfbyLVHOCWlq0gUmzZ0U86WC2LFKcWe6487Zc5O', 'medecin', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idagent`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idarticle`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idfriends`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idmedecin`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idpatient`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`idsuivi`);

--
-- Index pour la table `traitement`
--
ALTER TABLE `traitement`
  ADD PRIMARY KEY (`idtrait`),
  ADD KEY `idpat` (`idpat`);

--
-- Index pour la table `traitement2`
--
ALTER TABLE `traitement2`
  ADD PRIMARY KEY (`idtraitement`),
  ADD KEY `idpat` (`idpatient`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `idagent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `idfriends` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `private_messages`
--
ALTER TABLE `private_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `idsuivi` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `traitement`
--
ALTER TABLE `traitement`
  MODIFY `idtrait` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `traitement2`
--
ALTER TABLE `traitement2`
  MODIFY `idtraitement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `traitement`
--
ALTER TABLE `traitement`
  ADD CONSTRAINT ` cle idpat` FOREIGN KEY (`idpat`) REFERENCES `patient` (`idpatient`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
