-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2022 at 04:50 PM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semart_sechools`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_passions`
--

CREATE TABLE `category_passions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_passions`
--

INSERT INTO `category_passions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hukum', '2022-06-21 00:35:14', '2022-06-21 00:35:14'),
(2, 'Politik', '2022-06-21 00:35:14', '2022-06-21 00:35:14'),
(3, 'Agama', '2022-06-21 00:35:14', '2022-06-21 00:35:14'),
(4, 'Balapan', '2022-06-21 00:35:14', '2022-06-21 00:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_passions`
--
ALTER TABLE `category_passions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_passions`
--
ALTER TABLE `category_passions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
