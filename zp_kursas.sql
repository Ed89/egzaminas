-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 12:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `zp_kursas`
--

CREATE TABLE `zp_kursas` (
  `id` int(11) NOT NULL,
  `Kurso_autorius` varchar(255) NOT NULL,
  `Kurso_ikelimo_data` date NOT NULL,
  `Kurso_pavadinimas` varchar(255) NOT NULL,
  `Kurso_trumpas_aprasas` varchar(200) NOT NULL,
  `Kurso_platsnis_aprasas` varchar(255) NOT NULL,
  `Nuotraukos` varchar(255) DEFAULT NULL,
  `Kurso_populiarumas` int(11) DEFAULT NULL,
  `Kurso_komentarai` varchar(255) DEFAULT NULL,
  `Kurso_kaina` float DEFAULT NULL,
  `Kurso_reitingas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zp_kursas`
--

INSERT INTO `zp_kursas` (`id`, `Kurso_autorius`, `Kurso_ikelimo_data`, `Kurso_pavadinimas`, `Kurso_trumpas_aprasas`, `Kurso_platsnis_aprasas`, `Nuotraukos`, `Kurso_populiarumas`, `Kurso_komentarai`, `Kurso_kaina`, `Kurso_reitingas`) VALUES
(1, 'Autorius 1', '2021-06-22', 'PHP Pagrindai', 'web programaviams', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s......', 'php.jpg', NULL, NULL, NULL, NULL),
(2, 'Autorius 2', '2021-06-22', 'HTML/CSS Ivadas', 'web programaviams', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s......', 'css.jpg', NULL, NULL, NULL, NULL),
(3, 'Autorius 3', '2021-06-22', 'Pazintis Su GIT', 'web programaviams', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s......', 'git.jpg', NULL, NULL, NULL, NULL),
(4, 'Autorius 3', '2021-06-22', 'JavaScript Zaliems', 'web programaviams', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s......', 'js.jpg', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zp_kursas`
--
ALTER TABLE `zp_kursas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
