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
-- Table structure for table `passions`
--

CREATE TABLE `passions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `summary` tinytext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passions`
--

INSERT INTO `passions` (`id`, `title`, `category_id`, `summary`, `created_at`, `updated_at`) VALUES
(1, 'Dr.', 2, 'Itaque qui blanditiis amet voluptatem alias accusantium. Illum deserunt occaecati officia.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(2, 'Prof.', 1, 'Non hic ea autem. Ut recusandae dolorem et et eos vitae aliquid. Tempore et sit eum voluptatem sit.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(3, 'Mrs.', 4, 'Dignissimos suscipit quo veritatis. Rerum eligendi est libero ut quas atque.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(4, 'Mr.', 4, 'Ipsum consequatur est atque quas non aliquam animi. Voluptates accusantium quia dignissimos.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(5, 'Dr.', 2, 'Placeat cupiditate delectus totam inventore ut velit. Atque quos laudantium id eaque quae.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(6, 'Mr.', 4, 'Illum aliquam qui facere natus. Earum est molestiae quam et amet.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(7, 'Prof.', 3, 'Nulla at quisquam praesentium aliquid in mollitia ut. Officiis sint aut sunt molestiae.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(8, 'Mr.', 1, 'Vel perspiciatis est eos rerum. Est ea enim temporibus et dolorem et rem.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(9, 'Mrs.', 4, 'Ullam autem odit illo. Nesciunt et et sed.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(10, 'Prof.', 1, 'Possimus dignissimos aut voluptas deleniti. Neque consequatur non sed qui tenetur tempore.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(11, 'Prof.', 1, 'Sunt est iusto soluta autem voluptatem porro laboriosam. Accusantium autem molestiae vel aut.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(12, 'Dr.', 3, 'Qui modi sint porro. Sint eum consequuntur commodi fugiat est. Sit nisi nobis recusandae.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(13, 'Miss', 2, 'Voluptas in eum et molestiae quia dolor quae repellat. Quas perferendis dolor amet vel quo.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(14, 'Prof.', 1, 'Id ut fuga et sed. Est rem itaque rerum officia quae.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(15, 'Ms.', 1, 'Aut qui possimus amet totam. Voluptatem deserunt ex ea vero. Et reprehenderit voluptatem quis.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(16, 'Mrs.', 2, 'Ex voluptas sunt veniam quam nulla qui. Autem cum molestias corporis.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(17, 'Ms.', 3, 'Aliquid odio nisi voluptas id assumenda. Rerum harum a magnam ut. A minus nostrum aliquam in quasi.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(18, 'Mr.', 4, 'Excepturi et asperiores animi. Id qui ut aut facilis a.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(19, 'Prof.', 1, 'Iste sunt facere illo itaque est aut animi. Sit possimus voluptatem repudiandae qui fuga beatae.', '2022-06-21 00:35:15', '2022-06-21 00:35:15'),
(20, 'Mr.', 1, 'Animi dolorem non quos quis. Error quo quod aut. Ut natus dolor ut esse vel facilis.', '2022-06-21 00:35:15', '2022-06-21 00:35:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passions`
--
ALTER TABLE `passions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passions`
--
ALTER TABLE `passions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
