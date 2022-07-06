-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 12:24 PM
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
-- Table structure for table `detail_passions`
--

CREATE TABLE `detail_passions` (
  `id` bigint UNSIGNED NOT NULL,
  `passion_id` bigint UNSIGNED NOT NULL,
  `sort` bigint UNSIGNED DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_passions`
--

INSERT INTO `detail_passions` (`id`, `passion_id`, `sort`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 26, NULL, 'key one updated', 'value one updated', '2022-06-23 18:24:11', '2022-06-23 18:49:28'),
(2, 26, NULL, 'key two hehe', 'value two updated only second value updated', '2022-06-23 18:24:11', '2022-06-23 18:55:13'),
(8, 28, NULL, 'key one updated', 'value one updated', '2022-06-23 19:51:16', '2022-06-23 19:52:20'),
(9, 28, NULL, 'key two updated', 'value two updated', '2022-06-23 19:51:16', '2022-06-23 19:52:20'),
(10, 28, NULL, 'key three updated', 'value three updated', '2022-06-23 19:51:16', '2022-06-23 19:52:20'),
(11, 29, NULL, 'first', 'first', '2022-06-23 19:54:16', '2022-06-23 19:54:16'),
(12, 29, NULL, 'second', 'second', '2022-06-23 19:54:16', '2022-06-23 19:54:16'),
(14, 27, NULL, 'new key two', 'new value two', '2022-06-23 20:09:47', '2022-06-23 20:09:47'),
(15, 27, NULL, 'new key three', 'new value three', '2022-06-23 20:09:47', '2022-06-23 20:09:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_passions`
--
ALTER TABLE `detail_passions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_passions_passion_id_foreign` (`passion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_passions`
--
ALTER TABLE `detail_passions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_passions`
--
ALTER TABLE `detail_passions`
  ADD CONSTRAINT `detail_passions_passion_id_foreign` FOREIGN KEY (`passion_id`) REFERENCES `passions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
