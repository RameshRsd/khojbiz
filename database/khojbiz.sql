-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 08:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khojbiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `alpha_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `district_id`, `address`, `contact`, `image`, `website`, `map_link`, `status`, `details`, `alpha_id`, `cat_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'International Central Zoo', 'international-central-zoo', 1, 'Jawalakhel, Lalitpur', '7152345345', '2155acaa5d71cfeb4ef25b1a2dc077c1.1560014713.jpg', 'https://www.mifuzoko.tv', 'Illum delectus vol', '1', '<p>afdf fdfdfgd</p>', 9, 2, 26, '2019-06-08 11:01:40', '2019-06-08 11:41:49'),
(2, 'Tona Robertson', 'tona-robertson', 1, 'Putalisadak', '274345345', '506344089c494737cae8ae45fa7d9b5c.1560054159.jpg', 'https://www.loryqyr.ca', 'Laboriosam maiores', '1', '<p>sfadf</p>', 20, 4, 26, '2019-06-08 22:37:39', '2019-06-08 22:37:39'),
(3, 'Quinn Crosby', 'quinn-crosby', 1, 'Velit minim sit no', '46', '0ba35388972e773ded6c1045395419a5.1560065269.jpg', 'https://www.renypafuluji.mobi', 'Nostrud quam molesti', '1', '<p>sdfasf asdfasdf</p>', 7, 5, 26, '2019-06-09 01:42:49', '2019-06-09 01:43:08'),
(4, 'Leah Pope', 'leah-pope', 1, 'Ea at in alias iusto', '54', '60490ec0b631e185c918466fde9150fb.1560065365.png', 'https://www.jifozuvoz.cc', 'Architecto reiciendi', '1', '<p>gf</p>', 12, 2, 26, '2019-06-09 01:43:39', '2019-06-09 01:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `location_categories`
--

CREATE TABLE `location_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_categories`
--

INSERT INTO `location_categories` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Treking', 'treking', 1, NULL, NULL),
(2, 'National Park', 'national-park', 1, NULL, '2019-06-09 02:57:47'),
(3, 'National Heritage', 'national-heritage', 1, NULL, '2019-06-09 02:52:22'),
(4, 'Museum', 'museum', 1, NULL, '2019-06-09 01:24:30'),
(5, 'Paragliding', 'paragliding', 26, '2019-06-09 01:19:40', '2019-06-09 01:19:40'),
(6, 'Hiking', 'hiking', 26, '2019-06-09 01:20:02', '2019-06-09 01:20:02'),
(7, 'Pilgrimage', 'pilgrimage', 26, '2019-06-09 02:22:48', '2019-06-09 02:22:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_categories`
--
ALTER TABLE `location_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location_categories`
--
ALTER TABLE `location_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
