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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idmedecin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
