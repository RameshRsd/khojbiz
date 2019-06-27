-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 07:50 AM
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
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('general','feature','top') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `organization`, `image`, `url`, `start_date`, `end_date`, `status`, `type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Global GS IT Soluction', '6f46b4fc53045f6f2adaa334d7558fd1.1560099269.jpg', 'http://khojbiz.com', NULL, NULL, 'active', 'top', 1, '2019-06-09 11:09:29', '2019-06-09 11:09:29'),
(2, 'Global GS IT Soluction', '03b4235a9abdc368af2cd3fc52f38b2f.1560355943.png', 'https://getbootstrap.com', NULL, '2019-06-30', 'active', 'general', 1, '2019-06-12 10:27:23', '2019-06-12 10:28:47'),
(3, 'Global GS IT Soluction', '8e9b09482609d508a2497e8ccd940dee.1560356064.jpg', 'https://getbootstrap.com', '2019-06-26', NULL, 'active', 'general', 1, '2019-06-12 10:29:24', '2019-06-12 10:29:24'),
(4, 'Global GS IT Soluction', 'd8b4455735cf16ebd0c005df6463cb66.1560356269.gif', 'https://getbootstrap.com', '2019-06-26', NULL, 'active', 'feature', 1, '2019-06-12 10:31:57', '2019-06-12 10:32:49'),
(5, 'Global GS IT Soluction', '35e18313d87d69e109c0f6fa11f0ef74.1560356254.gif', 'https://getbootstrap.com', NULL, '2019-07-01', 'active', 'feature', 1, '2019-06-12 10:32:34', '2019-06-12 10:32:34'),
(6, 'Global GS IT Soluction', 'c461fc2d033060563c1b7778be1de7d7.1561028268.png', 'https://getbootstrap.com', NULL, NULL, 'active', 'general', 1, '2019-06-20 05:12:48', '2019-06-20 05:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `alphabates`
--

CREATE TABLE `alphabates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alphabates`
--

INSERT INTO `alphabates` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL),
(4, 'D', NULL, NULL),
(5, 'E', NULL, NULL),
(6, 'F', NULL, NULL),
(7, 'G', NULL, NULL),
(8, 'H', NULL, NULL),
(9, 'I', NULL, NULL),
(10, 'J', NULL, NULL),
(11, 'K', NULL, NULL),
(12, 'L', NULL, NULL),
(13, 'M', NULL, NULL),
(14, 'N', NULL, NULL),
(15, 'O', NULL, NULL),
(16, 'P', NULL, NULL),
(17, 'Q', NULL, NULL),
(18, 'R', NULL, NULL),
(19, 'S', NULL, NULL),
(20, 'T', NULL, NULL),
(21, 'U', NULL, NULL),
(22, 'V', NULL, NULL),
(23, 'W', NULL, NULL),
(24, 'X', NULL, NULL),
(25, 'Y', NULL, NULL),
(26, 'Z', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `automobiles`
--

CREATE TABLE `automobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_type` enum('bronze','silver','gold','diamond','platinum','free_listing') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `alpha_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell_sub_categories`
--

CREATE TABLE `buy_sell_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Married','Un-Married') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_district_id` int(11) DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perm_district_id` int(11) DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preference_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alphabate_id` int(11) DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `alphabate_id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Movie Hall', 'movie-hall', 39, '7de973a1685d558fe7586fd2ff53ea17.1558952157.png', '2019-05-27 15:15:57', '2019-05-27 15:15:57'),
(2, 'Clothing Store', 'clothing-store', 3, '76e2a40c882776ff96d99fa7c523b4fd.1558952753.png', '2019-05-27 15:25:53', '2019-05-27 15:25:53'),
(3, 'Education', 'education', 5, '2b71d0dccc9378d4cc447af2d3138eba.1558952779.png', '2019-05-27 15:26:19', '2019-05-27 15:26:19'),
(4, 'Finance', 'finance', 6, 'eeb819d59f34b70ed8056fb9be951058.1558952822.png', '2019-05-27 15:27:02', '2019-05-27 15:27:02'),
(7, 'Restaurant', 'restaurant', 18, 'f20f73eff144ecd4bc15b931de7d0315.1558952932.png', '2019-05-27 15:28:52', '2019-05-27 15:28:52'),
(8, 'Wine Shop', 'wine-shop', 23, '24aa71af9b94baf02391750d4852848b.1558952962.png', '2019-05-27 15:29:22', '2019-05-27 15:29:22'),
(9, 'ATM', 'atm', 1, '920eef7dd106c70b9df2a937be32fa28.1558952978.png', '2019-05-27 15:29:38', '2019-05-27 15:29:38'),
(10, 'Courier Service', 'courier-service', 3, 'f74c99913bdf40941f25c83dcbcbfe0b.1558953003.png', '2019-05-27 15:30:03', '2019-05-27 15:30:03'),
(11, 'Abayas', 'abayas', 1, NULL, '2019-05-29 14:16:12', '2019-05-29 14:16:12'),
(12, 'Abrasives', 'abrasives', 1, NULL, '2019-05-29 18:36:32', '2019-05-29 18:36:32'),
(13, 'Access Control Systems', 'access-control-systems', 1, NULL, '2019-05-29 18:36:43', '2019-05-29 18:36:43'),
(14, 'Accessories & Fancy Items', 'accessories-fancy-items', 1, NULL, '2019-05-29 18:36:55', '2019-05-29 18:36:55'),
(15, 'Accountants', 'accountants', 1, NULL, '2019-05-29 18:37:06', '2019-05-29 18:37:06'),
(16, 'Accountants Auditors & Tax Consultants', 'accountants-auditors-tax-consultants', 1, NULL, '2019-05-29 18:37:14', '2019-05-29 18:37:14'),
(17, 'Accounting Software', 'accounting-software', 1, NULL, '2019-05-29 18:37:25', '2019-05-29 18:37:25'),
(18, 'Acrylic Sheets', 'acrylic-sheets', 1, NULL, '2019-05-29 18:37:36', '2019-05-29 18:37:36'),
(19, 'Adhesives & Glues', 'adhesives-glues', 1, NULL, '2019-05-29 18:37:46', '2019-05-29 18:37:46'),
(20, 'Adventure Sports', 'adventure-sports', 1, NULL, '2019-05-29 18:37:53', '2019-05-29 18:37:53'),
(21, 'Advertising', 'advertising', 1, NULL, '2019-05-29 18:38:02', '2019-05-29 18:38:02'),
(22, 'Advertising - Internet', 'advertising-internet', 1, NULL, '2019-05-29 18:38:13', '2019-05-29 18:38:13'),
(23, 'Advertising - Neon', 'advertising-neon', 1, NULL, '2019-05-29 18:38:20', '2019-05-29 18:38:20'),
(24, 'Advertising - Outdoor', 'advertising-outdoor', 1, NULL, '2019-05-29 18:38:29', '2019-05-29 18:38:29'),
(25, 'Advertising - Overseas', 'advertising-overseas', 1, NULL, '2019-05-29 18:38:35', '2019-05-29 18:38:35'),
(26, 'Advertising - Televisions', 'advertising-televisions', 1, NULL, '2019-05-29 18:38:44', '2019-05-29 18:38:44'),
(27, 'Advertising Agencies & Counsellors', 'advertising-agencies-counsellors', 1, NULL, '2019-05-29 18:38:52', '2019-05-29 18:38:52'),
(28, 'Advertising LED', 'advertising-led', 1, NULL, '2019-05-29 18:38:59', '2019-05-29 18:38:59'),
(29, 'Advertising Specialists', 'advertising-specialists', 1, NULL, '2019-05-29 18:39:13', '2019-05-29 18:39:13'),
(30, 'Aerosols', 'aerosols', 1, NULL, '2019-05-29 18:39:21', '2019-05-29 18:39:21'),
(31, 'Agency Post Offices', 'agency-post-offices', 1, NULL, '2019-05-29 18:39:28', '2019-05-29 18:39:28'),
(32, 'Aggregate & Crusher Products', 'aggregate-crusher-products', 1, NULL, '2019-05-29 18:39:35', '2019-05-29 18:39:35'),
(33, 'Aggregate Production', 'aggregate-production', 1, NULL, '2019-05-29 18:39:43', '2019-05-29 18:39:43'),
(34, 'Agricultural Chemicals', 'agricultural-chemicals', 1, NULL, '2019-05-29 18:39:55', '2019-05-29 18:39:55'),
(35, 'Agricultural Equipment & Supplies', 'agricultural-equipment-supplies', 1, NULL, '2019-05-29 18:40:02', '2019-05-29 18:40:02'),
(36, 'Agricultural Products', 'agricultural-products', 1, NULL, '2019-05-29 18:40:11', '2019-05-29 18:40:11'),
(37, 'Agricultural Seeds & Chemicals', 'agricultural-seeds-chemicals', 1, NULL, '2019-05-29 18:40:19', '2019-05-29 18:40:19'),
(38, 'Air Cargo Services', 'air-cargo-services', 1, NULL, '2019-05-29 18:40:30', '2019-05-29 18:40:30'),
(39, 'Air Compressors', 'air-compressors', 1, NULL, '2019-05-29 18:40:41', '2019-05-29 18:40:41'),
(40, 'Air Conditioning - Outdoor Cooling', 'air-conditioning-outdoor-cooling', 1, NULL, '2019-05-29 18:40:48', '2019-05-29 18:40:48'),
(41, 'Air Conditioning Contractors', 'air-conditioning-contractors', 1, NULL, '2019-05-29 18:40:55', '2019-05-29 18:40:55'),
(42, 'Air Conditioning Equipment & System Supplies & Parts - Retail', 'air-conditioning-equipment-system-supplies-parts-retail', 1, NULL, '2019-05-29 18:41:02', '2019-05-29 18:41:02'),
(43, 'Air Conditioning Equipment & Systems', 'air-conditioning-equipment-systems', 1, NULL, '2019-05-29 18:41:08', '2019-05-29 18:41:08'),
(44, 'Air Conditioning Equipment & Systems - Repairing', 'air-conditioning-equipment-systems-repairing', 1, NULL, '2019-05-29 18:41:15', '2019-05-29 18:41:15'),
(45, 'Air Craft Equipment Parts & Supplies', 'air-craft-equipment-parts-supplies', 1, NULL, '2019-05-29 18:41:23', '2019-05-29 18:41:23'),
(46, 'Air Curtain', 'air-curtain', 1, NULL, '2019-05-29 18:41:30', '2019-05-29 18:41:30'),
(47, 'Air Hoses', 'air-hoses', 1, NULL, '2019-05-29 18:41:39', '2019-05-29 18:41:39'),
(48, 'Air Pollution Controls', 'air-pollution-controls', 1, NULL, '2019-05-29 18:41:47', '2019-05-29 18:41:47'),
(49, 'Air Taxi', 'air-taxi', 1, NULL, '2019-05-29 18:41:55', '2019-05-29 18:41:55'),
(50, 'Air Travel Ticket Agencies', 'air-travel-ticket-agencies', 1, NULL, '2019-05-29 18:42:02', '2019-05-29 18:42:02'),
(51, 'Airline Companies', 'airline-companies', 1, NULL, '2019-05-29 18:42:08', '2019-05-29 18:42:08'),
(52, 'Airline Schools', 'airline-schools', 1, NULL, '2019-05-29 18:42:24', '2019-05-29 18:42:24'),
(53, 'Airlines', 'airlines', 1, NULL, '2019-05-29 18:42:32', '2019-05-29 18:42:32'),
(54, 'Airport Aviation', 'airport-aviation', 1, NULL, '2019-05-29 18:42:40', '2019-05-29 18:42:40'),
(55, 'Airports', 'airports', 1, NULL, '2019-05-29 18:42:58', '2019-05-29 18:42:58'),
(56, 'Airtel Short Codes', 'airtel-short-codes', 1, NULL, '2019-05-29 18:43:04', '2019-05-29 18:43:04'),
(57, 'Alloy Wheels', 'alloy-wheels', 1, NULL, '2019-05-29 18:43:11', '2019-05-29 18:43:11'),
(58, 'Aluminium', 'aluminium', 1, NULL, '2019-05-29 18:43:18', '2019-05-29 18:43:18'),
(59, 'Aluminium Composite Panals', 'aluminium-composite-panals', 1, NULL, '2019-05-29 18:43:30', '2019-05-29 18:43:30'),
(60, 'Aluminium Fabricators', 'aluminium-fabricators', 1, NULL, '2019-05-29 18:43:38', '2019-05-29 18:43:38'),
(61, 'Aluminium Products', 'aluminium-products', 1, NULL, '2019-05-29 18:43:49', '2019-05-29 18:43:49'),
(62, 'Ambulance Services', 'ambulance-services', 1, NULL, '2019-05-29 18:44:06', '2019-05-29 18:44:06'),
(63, 'Analytical Services', 'analytical-services', 1, NULL, '2019-05-29 18:44:13', '2019-05-29 18:44:13'),
(64, 'Animal Feeds', 'animal-feeds', 1, NULL, '2019-05-29 18:44:20', '2019-05-29 18:44:20'),
(65, 'Animal Hospital', 'animal-hospital', 1, NULL, '2019-05-29 18:44:27', '2019-05-29 18:44:27'),
(66, 'Anodizing', 'anodizing', 1, NULL, '2019-05-29 18:44:34', '2019-05-29 18:44:34'),
(67, 'Antenna Installation Services', 'antenna-installation-services', 1, NULL, '2019-05-29 18:44:41', '2019-05-29 18:44:41'),
(68, 'Antennas', 'antennas', 1, NULL, '2019-05-29 18:44:49', '2019-05-29 18:44:49'),
(69, 'Antiques - Dealers', 'antiques-dealers', 1, NULL, '2019-05-29 18:44:55', '2019-05-29 18:44:55'),
(70, 'Apartments', 'apartments', 1, NULL, '2019-05-29 18:45:02', '2019-05-29 18:45:02'),
(71, 'Application Service Providers', 'application-service-providers', 1, NULL, '2019-05-29 18:45:10', '2019-05-29 18:45:10'),
(72, 'Aquaculture', 'aquaculture', 1, NULL, '2019-05-29 18:45:25', '2019-05-29 18:45:25'),
(73, 'Aquariums & Aquarium Supplies', 'aquariums-aquarium-supplies', 1, NULL, '2019-05-29 18:47:31', '2019-05-29 18:47:31'),
(74, 'Aquatic Clubs (Swimming Clubs)', 'aquatic-clubs-swimming-clubs', 1, NULL, '2019-05-29 18:47:39', '2019-05-29 18:47:39'),
(75, 'Archery Clubs', 'archery-clubs', 1, NULL, '2019-05-29 18:47:47', '2019-05-29 18:47:47'),
(76, 'Architects', 'architects', 1, NULL, '2019-05-29 18:47:55', '2019-05-29 18:47:55'),
(77, 'Architects Equipment & Supplies', 'architects-equipment-supplies', 1, NULL, '2019-05-29 18:48:03', '2019-05-29 18:48:03'),
(78, 'Architects - Suppliers', 'architects-suppliers', 1, NULL, '2019-05-29 18:48:11', '2019-05-29 18:48:11'),
(79, 'Archives Management', 'archives-management', 1, NULL, '2019-05-29 18:48:20', '2019-05-29 18:48:20'),
(80, 'Arms & Ammunitions', 'arms-ammunitions', 1, NULL, '2019-05-29 18:48:28', '2019-05-29 18:48:28'),
(81, 'Aroma Therapy', 'aroma-therapy', 1, NULL, '2019-05-29 18:48:36', '2019-05-29 18:48:36'),
(82, 'Aromatic Oils', 'aromatic-oils', 1, NULL, '2019-05-29 18:48:43', '2019-05-29 18:48:43'),
(83, 'Art Gallery', 'art-gallery', 1, NULL, '2019-05-29 18:48:49', '2019-05-29 18:48:49'),
(84, 'Artists', 'artists', 1, NULL, '2019-05-29 18:48:56', '2019-05-29 18:48:56'),
(85, 'Artists Materials & Supplies', 'artists-materials-supplies', 1, NULL, '2019-05-29 18:49:04', '2019-05-29 18:49:04'),
(86, 'Arts & Crafts', 'arts-crafts', 1, NULL, '2019-05-29 18:49:09', '2019-05-29 18:49:09'),
(87, 'Asbestos & Asbestos Products', 'asbestos-asbestos-products', 1, NULL, '2019-05-29 18:49:15', '2019-05-29 18:49:15'),
(88, 'Ashtaka & Jayamangala Gatha', 'ashtaka-jayamangala-gatha', 1, NULL, '2019-05-29 18:49:22', '2019-05-29 18:49:22'),
(89, 'Asphalt & Asphalt Products', 'asphalt-asphalt-products', 1, NULL, '2019-05-29 18:49:28', '2019-05-29 18:49:28'),
(90, 'Associations', 'associations', 1, NULL, '2019-05-29 18:49:35', '2019-05-29 18:49:35'),
(91, 'Astrological Services', 'astrological-services', 1, NULL, '2019-05-29 18:49:42', '2019-05-29 18:49:42'),
(92, 'Attorneys-at-Law', 'attorneys-at-law', 1, NULL, '2019-05-29 18:49:49', '2019-05-29 18:49:49'),
(93, 'Auctioneers', 'auctioneers', 1, NULL, '2019-05-29 18:49:58', '2019-05-29 18:49:58'),
(94, 'Audio Tapes Duplicating/Recording', 'audio-tapes-duplicatingrecording', 1, NULL, '2019-05-29 18:50:05', '2019-05-29 18:50:05'),
(95, 'Audio Tapes, CDs, VCDs - Wholesale & Retail', 'audio-tapes-cds-vcds-wholesale-retail', 1, NULL, '2019-05-29 18:50:12', '2019-05-29 18:50:12'),
(96, 'Audio Visual Equipment Repairs & Services', 'audio-visual-equipment-repairs-services', 1, NULL, '2019-05-29 18:50:19', '2019-05-29 18:50:19'),
(97, 'Audio-Visual Equipment & Supplies', 'audio-visual-equipment-supplies', 1, NULL, '2019-05-29 18:50:31', '2019-05-29 18:50:31'),
(98, 'Auditorium', 'auditorium', 1, NULL, '2019-05-29 18:50:38', '2019-05-29 18:50:38'),
(99, 'Authorities', 'authorities', 1, NULL, '2019-05-29 18:50:45', '2019-05-29 18:50:45'),
(100, 'Automatic Teller Machines(ATM)', 'automatic-teller-machinesatm', 1, NULL, '2019-05-29 18:50:52', '2019-05-29 18:50:52'),
(101, 'Automation Systems & Equipment', 'automation-systems-equipment', 1, NULL, '2019-05-29 18:50:57', '2019-05-29 18:50:57'),
(102, 'Automobile AC', 'automobile-ac', 1, NULL, '2019-05-29 18:51:04', '2019-05-29 18:51:04'),
(103, 'Aviation Schools', 'aviation-schools', 1, NULL, '2019-05-29 18:51:10', '2019-05-29 18:51:10'),
(104, 'Awnings & Canopies Supplies', 'awnings-canopies-supplies', 1, NULL, '2019-05-29 18:51:16', '2019-05-29 18:51:16'),
(105, 'Ayurvedic Beauty Culture', 'ayurvedic-beauty-culture', 1, NULL, '2019-05-29 18:51:23', '2019-05-29 18:51:23'),
(106, 'Ayurvedic Drugs / Ayurvedic Pharmacy', 'ayurvedic-drugs-ayurvedic-pharmacy', 1, NULL, '2019-05-29 18:51:28', '2019-05-29 18:51:28'),
(107, 'Ayurvedic Health Centre / Ayurvedic Medical Centre', 'ayurvedic-health-centre-ayurvedic-medical-centre', 1, NULL, '2019-05-29 18:51:53', '2019-05-29 18:51:53'),
(108, 'Ayurvedic Herbles - Wholesale', 'ayurvedic-herbles-wholesale', 1, NULL, '2019-05-29 18:51:59', '2019-05-29 18:51:59'),
(109, 'Ayurvedic Hospital - Government', 'ayurvedic-hospital-government', 1, NULL, '2019-05-29 18:52:05', '2019-05-29 18:52:05'),
(110, 'Ayurvedic Hospitals', 'ayurvedic-hospitals', 1, NULL, '2019-05-29 18:52:12', '2019-05-29 18:52:12'),
(111, 'Ayurvedic Medician Educational Centers', 'ayurvedic-medician-educational-centers', 1, NULL, '2019-05-29 18:52:19', '2019-05-29 18:52:19'),
(112, 'Ayurvedic Physicians', 'ayurvedic-physicians', 1, NULL, '2019-05-29 18:52:26', '2019-05-29 18:52:26'),
(113, 'Ayurvedic Physicians - Apothicias Doctors', 'ayurvedic-physicians-apothicias-doctors', 1, NULL, '2019-05-29 18:54:36', '2019-05-29 18:54:36'),
(114, 'Ayurvedic Physicians- Ayurvedic Doctors', 'ayurvedic-physicians-ayurvedic-doctors', 1, NULL, '2019-05-29 18:54:43', '2019-05-29 18:54:43'),
(115, 'Ayurvedic Physicians-Acupunture Doctors', 'ayurvedic-physicians-acupunture-doctors', 1, NULL, '2019-05-29 18:54:48', '2019-05-29 18:54:48'),
(116, 'Ayurvedic Physicians-Traditional Doctors', 'ayurvedic-physicians-traditional-doctors', 1, NULL, '2019-05-29 18:54:56', '2019-05-29 18:54:56'),
(117, 'Ayurvedic Physicians-Yunani Doctors', 'ayurvedic-physicians-yunani-doctors', 1, NULL, '2019-05-29 18:55:03', '2019-05-29 18:55:03'),
(118, 'Ayurvedic Products', 'ayurvedic-products', 1, NULL, '2019-05-29 18:55:09', '2019-05-29 18:55:09'),
(119, 'Ayurvedic Research Centers', 'ayurvedic-research-centers', 1, NULL, '2019-05-29 18:55:15', '2019-05-29 18:55:15'),
(120, 'Ayurvedic Resorts', 'ayurvedic-resorts', 1, NULL, '2019-05-29 18:55:22', '2019-05-29 18:55:22'),
(121, 'Ayurvedic Spa', 'ayurvedic-spa', 1, NULL, '2019-05-29 18:55:27', '2019-05-29 18:55:27'),
(122, 'Baby Care Products', 'baby-care-products', 2, NULL, '2019-05-29 18:55:45', '2019-05-29 18:55:45'),
(123, 'Backlit Moulding Powder', 'backlit-moulding-powder', 2, NULL, '2019-05-29 18:55:52', '2019-05-29 18:55:52'),
(124, 'Bag Closing Machine ', 'bag-closing-machine', 2, NULL, '2019-05-29 18:55:58', '2019-05-29 18:55:58'),
(125, 'Bakery', 'bakery', 2, NULL, '2019-05-29 18:56:05', '2019-05-29 18:56:05'),
(126, 'Ball Pen & Wood Pencil', 'ball-pen-wood-pencil', 2, NULL, '2019-05-29 18:56:12', '2019-05-29 18:56:12'),
(127, 'Bank ', 'bank', 2, NULL, '2019-05-29 18:56:19', '2019-05-29 18:56:19'),
(128, 'Bank Equipment Suppliers', 'bank-equipment-suppliers', 2, NULL, '2019-05-29 18:56:25', '2019-05-29 18:56:25'),
(129, 'Bar Coding Equipment And Servi', 'bar-coding-equipment-and-servi', 2, NULL, '2019-05-29 18:56:32', '2019-05-29 18:56:32'),
(130, 'Barristers', 'barristers', 2, NULL, '2019-05-29 18:56:38', '2019-05-29 18:56:38'),
(131, 'Bars & Disco', 'bars-disco', 2, NULL, '2019-05-29 18:56:45', '2019-05-29 18:56:45'),
(132, 'Battery Charger/Component', 'battery-chargercomponent', 2, NULL, '2019-05-29 18:56:52', '2019-05-29 18:56:52'),
(133, 'Battery Sellers/Distributor', 'battery-sellersdistributor', 2, NULL, '2019-05-29 18:56:57', '2019-05-29 18:56:57'),
(134, 'Beauty Care Training Center', 'beauty-care-training-center', 2, NULL, '2019-05-29 18:57:04', '2019-05-29 18:57:04'),
(135, 'Beauty Parlour', 'beauty-parlour', 2, NULL, '2019-05-29 18:57:10', '2019-05-29 18:57:10'),
(136, 'Beauty Skin Care', 'beauty-skin-care', 2, NULL, '2019-05-29 18:57:16', '2019-05-29 18:57:16'),
(137, 'Bed Cloth Stores', 'bed-cloth-stores', 2, NULL, '2019-05-29 18:57:23', '2019-05-29 18:57:23'),
(138, 'Beverage ', 'beverage', 2, NULL, '2019-05-29 18:57:29', '2019-05-29 18:57:29'),
(139, 'Bicycle & Parts', 'bicycle-parts', 2, NULL, '2019-05-29 18:57:36', '2019-05-29 18:57:36'),
(140, 'Bycyle stand', 'bycyle-stand', 2, NULL, '2019-05-29 18:57:43', '2019-05-29 18:57:43'),
(141, 'Bycle Store', 'bycle-store', 2, NULL, '2019-05-29 18:57:49', '2019-05-29 18:57:49'),
(142, 'Biometric Solutions ', 'biometric-solutions', 2, NULL, '2019-05-29 18:57:57', '2019-05-29 18:57:57'),
(143, 'Biscuit & Bread Mfrs. ', 'biscuit-bread-mfrs', 2, NULL, '2019-05-29 18:58:06', '2019-05-29 18:58:06'),
(144, 'Blood Bank', 'blood-bank', 2, NULL, '2019-05-29 18:58:12', '2019-05-29 18:58:12'),
(145, 'Boat Builders ', 'boat-builders', 2, NULL, '2019-05-29 18:58:19', '2019-05-29 18:58:19'),
(146, 'Bobbin & Shuttle', 'bobbin-shuttle', 2, NULL, '2019-05-29 18:58:27', '2019-05-29 18:58:27'),
(147, 'Body Building & Slimming Point', 'body-building-slimming-point', 2, NULL, '2019-05-29 18:58:34', '2019-05-29 18:58:34'),
(148, 'Boiler Installation & Maintena', 'boiler-installation-maintena', 2, NULL, '2019-05-29 18:58:40', '2019-05-29 18:58:40'),
(149, 'Boilers', 'boilers', 2, NULL, '2019-05-29 18:58:47', '2019-05-29 18:58:47'),
(150, 'Bolts & Nuts', 'bolts-nuts', 2, NULL, '2019-05-29 18:58:54', '2019-05-29 18:58:54'),
(151, 'Bone/Horn & Hoofs', 'bonehorn-hoofs', 2, NULL, '2019-05-29 18:58:59', '2019-05-29 18:58:59'),
(152, 'Book-Publishers/Distributor', 'book-publishersdistributor', 2, NULL, '2019-05-29 18:59:05', '2019-05-29 18:59:05'),
(153, 'Bottle Mfrs (Plastic)', 'bottle-mfrs-plastic', 2, NULL, '2019-05-29 19:00:00', '2019-05-29 19:00:00'),
(154, 'Bottle Mfrs. (Glass)', 'bottle-mfrs-glass', 2, NULL, '2019-05-29 19:00:09', '2019-05-29 19:00:09'),
(155, 'Bottles Mfrs (Pet)', 'bottles-mfrs-pet', 2, NULL, '2019-05-29 19:00:16', '2019-05-29 19:00:16'),
(156, 'Boulders', 'boulders', 2, NULL, '2019-05-29 19:00:24', '2019-05-29 19:00:24'),
(157, 'Boutique', 'boutique', 2, NULL, '2019-05-29 19:00:32', '2019-05-29 19:00:32'),
(158, 'Boutique & Velvet Print', 'boutique-velvet-print', 2, NULL, '2019-05-29 19:00:39', '2019-05-29 19:00:39'),
(159, 'Brick Mfrs. & Suppliers', 'brick-mfrs-suppliers', 2, NULL, '2019-05-29 19:00:46', '2019-05-29 19:00:46'),
(160, 'Briefcase', 'briefcase', 2, NULL, '2019-05-29 19:00:53', '2019-05-29 19:00:53'),
(161, 'Broadcust Production House', 'broadcust-production-house', 2, NULL, '2019-05-29 19:01:00', '2019-05-29 19:01:00'),
(162, 'Brokers Stock/Shares', 'brokers-stockshares', 2, NULL, '2019-05-29 19:01:07', '2019-05-29 19:01:07'),
(163, 'Builders & Building Contractor', 'builders-building-contractor', 2, NULL, '2019-05-29 19:01:14', '2019-05-29 19:01:14'),
(164, 'Building & Land Developer', 'building-land-developer', 2, NULL, '2019-05-29 19:01:20', '2019-05-29 19:01:20'),
(165, 'Building Decorative Materials', 'building-decorative-materials', 2, NULL, '2019-05-29 19:02:07', '2019-05-29 19:02:07'),
(166, 'Building Designers', 'building-designers', 2, NULL, '2019-05-29 19:02:14', '2019-05-29 19:02:14'),
(167, 'Building Machinery', 'building-machinery', 2, NULL, '2019-05-29 19:02:20', '2019-05-29 19:02:20'),
(168, 'Building Materials', 'building-materials', 2, NULL, '2019-05-29 19:02:27', '2019-05-29 19:02:27'),
(169, 'Bunker Supplier', 'bunker-supplier', 2, NULL, '2019-05-29 19:02:35', '2019-05-29 19:02:35'),
(170, 'Bus Stand Enquiry', 'bus-stand-enquiry', 2, NULL, '2019-05-29 19:02:41', '2019-05-29 19:02:41'),
(171, 'Baby Furniture', 'baby-furniture', 2, NULL, '2019-05-29 19:02:48', '2019-05-29 19:02:48'),
(172, 'Baby Goods', 'baby-goods', 2, NULL, '2019-05-29 19:02:55', '2019-05-29 19:02:55'),
(173, 'Bags - Traveling Suitcase & Brief Case', 'bags-traveling-suitcase-brief-case', 2, NULL, '2019-05-29 19:03:04', '2019-05-29 19:03:04'),
(174, 'Bakeries & Patisseries', 'bakeries-patisseries', 2, NULL, '2019-05-29 19:03:11', '2019-05-29 19:03:11'),
(175, 'Bakers - Retail', 'bakers-retail', 2, NULL, '2019-05-29 19:03:18', '2019-05-29 19:03:18'),
(176, 'Bakers Supplies', 'bakers-supplies', 2, NULL, '2019-05-29 19:03:25', '2019-05-29 19:03:25'),
(177, 'Bakery Equipment', 'bakery-equipment', 2, NULL, '2019-05-29 19:03:32', '2019-05-29 19:03:32'),
(178, 'Balloons - Custom Printing', 'balloons-custom-printing', 2, NULL, '2019-05-29 19:03:38', '2019-05-29 19:03:38'),
(179, 'Bamboo Blinds', 'bamboo-blinds', 2, NULL, '2019-05-29 19:03:45', '2019-05-29 19:03:45'),
(180, 'Bamboo Products', 'bamboo-products', 2, NULL, '2019-05-29 19:03:52', '2019-05-29 19:03:52'),
(181, 'Banana Boat Riding', 'banana-boat-riding', 2, NULL, '2019-05-29 19:03:58', '2019-05-29 19:03:58'),
(182, 'Bands', 'bands', 2, NULL, '2019-05-29 19:04:05', '2019-05-29 19:04:05'),
(183, 'Bands & Orchestras', 'bands-orchestras', 2, NULL, '2019-05-29 19:04:12', '2019-05-29 19:04:12'),
(184, 'Bank Notes for Collectors', 'bank-notes-for-collectors', 2, NULL, '2019-05-29 19:04:17', '2019-05-29 19:04:17'),
(185, 'Banks - Merchant', 'banks-merchant', 2, NULL, '2019-05-29 19:04:25', '2019-05-29 19:04:25'),
(186, 'Banquet Halls', 'banquet-halls', 2, NULL, '2019-05-29 19:04:33', '2019-05-29 19:04:33'),
(187, 'Bar-coding Equipment & Systems', 'bar-coding-equipment-systems', 2, NULL, '2019-05-29 19:04:39', '2019-05-29 19:04:39'),
(188, 'Bater Trade Exchange', 'bater-trade-exchange', 2, NULL, '2019-05-29 19:04:46', '2019-05-29 19:04:46'),
(189, 'Bathroom Fixtures & Accessories', 'bathroom-fixtures-accessories', 2, NULL, '2019-05-29 19:04:53', '2019-05-29 19:04:53'),
(190, 'Batteries - Automobile', 'batteries-automobile', 2, NULL, '2019-05-29 19:04:58', '2019-05-29 19:04:58'),
(191, 'Batteries - Storage - Retail', 'batteries-storage-retail', 2, NULL, '2019-05-29 19:05:05', '2019-05-29 19:05:05'),
(192, 'Batteries - Storage -Wholesale & Manufacturers', 'batteries-storage-wholesale-manufacturers', 2, NULL, '2019-05-29 19:05:12', '2019-05-29 19:05:12'),
(193, 'Batteries Dry Cells Retail', 'batteries-dry-cells-retail', 2, NULL, '2019-05-29 19:05:18', '2019-05-29 19:05:18'),
(194, 'Battery - Hybrid', 'battery-hybrid', 2, NULL, '2019-05-29 19:05:25', '2019-05-29 19:05:25'),
(195, 'Battery Charging Equipment', 'battery-charging-equipment', 2, NULL, '2019-05-29 19:05:32', '2019-05-29 19:05:32'),
(196, 'Beauty Saloons Equipment & Supplies', 'beauty-saloons-equipment-supplies', 2, NULL, '2019-05-29 19:05:38', '2019-05-29 19:05:38'),
(197, 'Bed Linen Supplies', 'bed-linen-supplies', 2, NULL, '2019-05-29 19:05:45', '2019-05-29 19:05:45'),
(198, 'Beddings', 'beddings', 2, NULL, '2019-05-29 19:05:53', '2019-05-29 19:05:53'),
(199, 'Bells - Church & Temple', 'bells-church-temple', 2, NULL, '2019-05-29 19:06:01', '2019-05-29 19:06:01'),
(200, 'Beltings - Automobile', 'beltings-automobile', 2, NULL, '2019-05-29 19:06:07', '2019-05-29 19:06:07'),
(201, 'Beltings - Mechanical', 'beltings-mechanical', 2, NULL, '2019-05-29 19:06:14', '2019-05-29 19:06:14'),
(202, 'Beverage Manufacturers & Distributors', 'beverage-manufacturers-distributors', 2, NULL, '2019-05-29 19:06:20', '2019-05-29 19:06:20'),
(203, 'Bicycle Dealers', 'bicycle-dealers', 2, NULL, '2019-05-29 19:06:27', '2019-05-29 19:06:27'),
(204, 'bicycle hiring', 'bicycle-hiring', 2, NULL, '2019-05-29 19:06:35', '2019-05-29 19:06:35'),
(205, 'Bicycles & Spare Parts', 'bicycles-spare-parts', 2, NULL, '2019-05-29 19:06:40', '2019-05-29 19:06:40'),
(206, 'Bicycles - Parts & Supplies Wholesale & Manufacturers', 'bicycles-parts-supplies-wholesale-manufacturers', 2, NULL, '2019-05-29 19:06:47', '2019-05-29 19:06:47'),
(207, 'Binding & Laminating Machines', 'binding-laminating-machines', 2, NULL, '2019-05-29 19:06:54', '2019-05-29 19:06:54'),
(208, 'Biotechnology Services', 'biotechnology-services', 2, NULL, '2019-05-29 19:07:00', '2019-05-29 19:07:00'),
(209, 'Boats - Charter & Rental', 'boats-charter-rental', 2, NULL, '2019-05-29 19:07:06', '2019-05-29 19:07:06'),
(210, 'Boats Services', 'boats-services', 2, NULL, '2019-05-29 19:07:13', '2019-05-29 19:07:13'),
(211, 'Body Kit Manufacturing & Reparing', 'body-kit-manufacturing-reparing', 2, NULL, '2019-05-29 19:07:20', '2019-05-29 19:07:20'),
(212, 'Boiler Equipment & Supplies', 'boiler-equipment-supplies', 2, NULL, '2019-05-29 19:07:26', '2019-05-29 19:07:26'),
(213, 'Boiler Supplies & Parts', 'boiler-supplies-parts', 2, NULL, '2019-05-29 19:07:34', '2019-05-29 19:07:34'),
(214, 'Bolts & Nuts -Automobile', 'bolts-nuts-automobile', 2, NULL, '2019-05-29 19:08:12', '2019-05-29 19:08:12'),
(215, 'Bombay Sweets', 'bombay-sweets', 2, NULL, '2019-05-29 19:08:19', '2019-05-29 19:08:19'),
(216, 'Book Binders - Commercial', 'book-binders-commercial', 2, NULL, '2019-05-29 19:08:41', '2019-05-29 19:08:41'),
(217, 'Book Binders Equipment & Supplies', 'book-binders-equipment-supplies', 2, NULL, '2019-05-29 19:08:47', '2019-05-29 19:08:47'),
(218, 'Book Dealers - Retail', 'book-dealers-retail', 2, NULL, '2019-05-29 19:08:54', '2019-05-29 19:08:54'),
(219, 'Book Dealers - Wholesale', 'book-dealers-wholesale', 2, NULL, '2019-05-29 19:09:02', '2019-05-29 19:09:02'),
(220, 'Book Shops', 'book-shops', 2, NULL, '2019-05-29 19:09:07', '2019-05-29 19:09:07'),
(221, 'Botanical Gardens', 'botanical-gardens', 2, NULL, '2019-05-29 19:09:14', '2019-05-29 19:09:14'),
(222, 'Botanical Gardens & Wild Parks', 'botanical-gardens-wild-parks', 2, NULL, '2019-05-29 19:09:22', '2019-05-29 19:09:22'),
(223, 'Bottle Caps & Seals', 'bottle-caps-seals', 2, NULL, '2019-05-29 19:09:28', '2019-05-29 19:09:28'),
(224, 'Bottles', 'bottles', 2, NULL, '2019-05-29 19:09:35', '2019-05-29 19:09:35'),
(225, 'Bottles - Used', 'bottles-used', 2, NULL, '2019-05-29 19:09:42', '2019-05-29 19:09:42'),
(226, 'Bottling Plants & Machinery', 'bottling-plants-machinery', 2, NULL, '2019-05-29 19:09:48', '2019-05-29 19:09:48'),
(227, 'Boutique Hotel', 'boutique-hotel', 2, NULL, '2019-05-29 19:09:55', '2019-05-29 19:09:55'),
(228, 'Boutique Villa', 'boutique-villa', 2, NULL, '2019-05-29 19:10:00', '2019-05-29 19:10:00'),
(229, 'Bowsers & Tractor Trailers', 'bowsers-tractor-trailers', 2, NULL, '2019-05-29 19:10:06', '2019-05-29 19:10:06'),
(230, 'Boxes - Corrugated & Fibre', 'boxes-corrugated-fibre', 2, NULL, '2019-05-29 19:10:13', '2019-05-29 19:10:13'),
(231, 'Boxes - Wooden', 'boxes-wooden', 2, NULL, '2019-05-29 19:10:19', '2019-05-29 19:10:19'),
(232, 'Brake Down Wrecker Services', 'brake-down-wrecker-services', 2, NULL, '2019-05-29 19:10:27', '2019-05-29 19:10:27'),
(233, 'Brake Shoes Bonding & Exchange', 'brake-shoes-bonding-exchange', 2, NULL, '2019-05-29 19:10:33', '2019-05-29 19:10:33'),
(234, 'Branches', 'branches', 2, NULL, '2019-05-29 19:10:40', '2019-05-29 19:10:40'),
(235, 'Brass Products', 'brass-products', 2, NULL, '2019-05-29 19:10:46', '2019-05-29 19:10:46'),
(236, 'Brassieres, Corsets & Girdles - Wholesale & Manufacturers', 'brassieres-corsets-girdles-wholesale-manufacturers', 2, NULL, '2019-05-29 19:10:53', '2019-05-29 19:10:53'),
(237, 'BreakDownService', 'breakdownservice', 2, NULL, '2019-05-29 19:10:59', '2019-05-29 19:10:59'),
(238, 'Bricks', 'bricks', 2, NULL, '2019-05-29 19:11:06', '2019-05-29 19:11:06'),
(239, 'Bridal Jewellery - Other', 'bridal-jewellery-other', 2, NULL, '2019-05-29 19:11:13', '2019-05-29 19:11:13'),
(240, 'Bridal Mehendi', 'bridal-mehendi', 2, NULL, '2019-05-29 19:11:18', '2019-05-29 19:11:18'),
(241, 'Bridal Shops', 'bridal-shops', 2, NULL, '2019-05-29 19:11:25', '2019-05-29 19:11:25'),
(242, 'Bridal Wear', 'bridal-wear', 2, NULL, '2019-05-29 19:11:32', '2019-05-29 19:11:32'),
(243, 'Brushes', 'brushes', 2, NULL, '2019-05-29 19:11:39', '2019-05-29 19:11:39'),
(244, 'Brushes - Wholesale & Manufacturers', 'brushes-wholesale-manufacturers', 2, NULL, '2019-05-29 19:11:48', '2019-05-29 19:11:48'),
(245, 'Buckets - Manufacturers', 'buckets-manufacturers', 2, NULL, '2019-05-29 19:11:55', '2019-05-29 19:11:55'),
(246, 'Buddhist', 'buddhist', 2, NULL, '2019-05-29 19:12:02', '2019-05-29 19:12:02'),
(247, 'Building - Pre cut & Pre fabricated', 'building-pre-cut-pre-fabricated', 2, NULL, '2019-05-29 19:12:07', '2019-05-29 19:12:07'),
(248, 'Building Contractors', 'building-contractors', 2, NULL, '2019-05-29 19:12:14', '2019-05-29 19:12:14'),
(249, 'Building Demolishing & Clearing', 'building-demolishing-clearing', 2, NULL, '2019-05-29 19:12:19', '2019-05-29 19:12:19'),
(250, 'Building Maintenance Equipment', 'building-maintenance-equipment', 2, NULL, '2019-05-29 19:12:31', '2019-05-29 19:12:31'),
(251, 'Building Management Systems', 'building-management-systems', 2, NULL, '2019-05-29 19:12:40', '2019-05-29 19:12:40'),
(252, 'Building Partition', 'building-partition', 2, NULL, '2019-05-29 19:12:53', '2019-05-29 19:12:53'),
(253, 'Building Plastering & Finishing', 'building-plastering-finishing', 2, NULL, '2019-05-29 19:12:59', '2019-05-29 19:12:59'),
(254, 'Building Services', 'building-services', 2, NULL, '2019-05-29 19:13:06', '2019-05-29 19:13:06'),
(255, 'Building- Facilities & Management', 'building-facilities-management', 2, NULL, '2019-05-29 19:13:13', '2019-05-29 19:13:13'),
(256, 'Bulbs & CFLs', 'bulbs-cfls', 2, NULL, '2019-05-29 19:13:22', '2019-05-29 19:13:22'),
(257, 'Bulbs - CFLs and LEDs', 'bulbs-cfls-and-leds', 2, NULL, '2019-05-29 19:13:28', '2019-05-29 19:13:28'),
(258, 'Bungalows', 'bungalows', 2, NULL, '2019-05-29 19:13:36', '2019-05-29 19:13:36'),
(259, 'Burglar Alarm Systems', 'burglar-alarm-systems', 2, NULL, '2019-05-29 19:13:43', '2019-05-29 19:13:43'),
(260, 'Business Consultants', 'business-consultants', 2, NULL, '2019-05-29 19:13:49', '2019-05-29 19:13:49'),
(261, 'Bussines Organizations', 'bussines-organizations', 2, NULL, '2019-05-29 19:13:56', '2019-05-29 19:13:56'),
(262, 'Cabanas', 'cabanas', 3, NULL, '2019-05-29 19:14:10', '2019-05-29 19:14:10'),
(263, 'Cabinet Of Ministers', 'cabinet-of-ministers', 3, NULL, '2019-05-29 19:14:17', '2019-05-29 19:14:17'),
(264, 'Cable Television Networks', 'cable-television-networks', 3, NULL, '2019-05-29 19:14:25', '2019-05-29 19:14:25'),
(265, 'Cables - Importers & Wholesales', 'cables-importers-wholesales', 3, NULL, '2019-05-29 19:14:31', '2019-05-29 19:14:31'),
(266, 'Cables - Manufacturers', 'cables-manufacturers', 3, NULL, '2019-05-29 19:14:39', '2019-05-29 19:14:39'),
(267, 'Cafe', 'cafe', 3, NULL, '2019-05-29 19:14:45', '2019-05-29 19:14:45'),
(268, 'Cake Ingredients', 'cake-ingredients', 3, NULL, '2019-05-29 19:14:53', '2019-05-29 19:14:53'),
(269, 'Cake Structures', 'cake-structures', 3, NULL, '2019-05-29 19:15:00', '2019-05-29 19:15:00'),
(270, 'Cakes', 'cakes', 3, NULL, '2019-05-29 19:15:07', '2019-05-29 19:15:07'),
(271, 'Calculating & Adding Machines Supplies', 'calculating-adding-machines-supplies', 3, NULL, '2019-05-29 19:15:15', '2019-05-29 19:15:15'),
(272, 'Calibrations', 'calibrations', 3, NULL, '2019-05-29 19:15:23', '2019-05-29 19:15:23'),
(273, 'Call Centers', 'call-centers', 3, NULL, '2019-05-29 19:15:29', '2019-05-29 19:15:29'),
(274, 'Call Centre Solutions', 'call-centre-solutions', 3, NULL, '2019-05-29 19:15:38', '2019-05-29 19:15:38'),
(275, 'Camera & Video Camera Repairs & Services', 'camera-video-camera-repairs-services', 3, NULL, '2019-05-29 19:15:45', '2019-05-29 19:15:45'),
(276, 'Cameras', 'cameras', 3, NULL, '2019-05-29 19:15:53', '2019-05-29 19:15:53'),
(277, 'Camping', 'camping', 3, NULL, '2019-05-29 19:15:59', '2019-05-29 19:15:59'),
(278, 'Camping Equipment', 'camping-equipment', 3, NULL, '2019-05-29 19:16:06', '2019-05-29 19:16:06'),
(279, 'Can Manufacturers', 'can-manufacturers', 3, NULL, '2019-05-29 19:16:14', '2019-05-29 19:16:14'),
(280, 'Candles', 'candles', 3, NULL, '2019-05-29 19:16:22', '2019-05-29 19:16:22'),
(281, 'Cantons', 'cantons', 3, NULL, '2019-05-29 19:16:29', '2019-05-29 19:16:29'),
(282, 'Canvas - Wholesale & Manufacturers', 'canvas-wholesale-manufacturers', 3, NULL, '2019-05-29 19:16:36', '2019-05-29 19:16:36'),
(283, 'Capacitors', 'capacitors', 3, NULL, '2019-05-29 19:16:44', '2019-05-29 19:16:44'),
(284, 'Capping Machines', 'capping-machines', 3, NULL, '2019-05-29 19:16:50', '2019-05-29 19:16:50'),
(285, 'Caps & Hats', 'caps-hats', 3, NULL, '2019-05-29 19:16:57', '2019-05-29 19:16:57'),
(286, 'Car Hire & Limousines', 'car-hire-limousines', 3, NULL, '2019-05-29 19:17:04', '2019-05-29 19:17:04'),
(287, 'Car Park Management Systems', 'car-park-management-systems', 3, NULL, '2019-05-29 19:17:10', '2019-05-29 19:17:10'),
(288, 'Car Parking Systems', 'car-parking-systems', 3, NULL, '2019-05-29 19:17:18', '2019-05-29 19:17:18'),
(289, 'Car Wash', 'car-wash', 3, NULL, '2019-05-29 19:17:25', '2019-05-29 19:17:25'),
(290, 'Carbon Activated', 'carbon-activated', 3, NULL, '2019-05-29 19:17:33', '2019-05-29 19:17:33'),
(291, 'Carbon Products', 'carbon-products', 3, NULL, '2019-05-29 19:17:39', '2019-05-29 19:17:39'),
(292, 'Cargo - Forwarding And Clearing - Movers', 'cargo-forwarding-and-clearing-movers', 3, NULL, '2019-05-29 19:17:47', '2019-05-29 19:17:47'),
(293, 'Cargo Lashing', 'cargo-lashing', 3, NULL, '2019-05-29 19:17:54', '2019-05-29 19:17:54'),
(294, 'Cargo Surveyors', 'cargo-surveyors', 3, NULL, '2019-05-29 19:18:01', '2019-05-29 19:18:01'),
(295, 'Carpenters', 'carpenters', 3, NULL, '2019-05-29 19:18:09', '2019-05-29 19:18:09'),
(296, 'Carpet & Rug', 'carpet-rug', 3, NULL, '2019-05-29 19:19:26', '2019-05-29 19:19:26'),
(297, 'Carpet & Rug Cleaners', 'carpet-rug-cleaners', 3, NULL, '2019-05-29 19:19:33', '2019-05-29 19:19:33'),
(298, 'Carpet & Rug Dealers - New', 'carpet-rug-dealers-new', 3, NULL, '2019-05-29 19:19:40', '2019-05-29 19:19:40'),
(299, 'Carvings', 'carvings', 3, NULL, '2019-05-29 19:19:46', '2019-05-29 19:19:46'),
(300, 'Cash Counting Machines', 'cash-counting-machines', 3, NULL, '2019-05-29 19:19:52', '2019-05-29 19:19:52'),
(301, 'Cash Registers & Supplies', 'cash-registers-supplies', 3, NULL, '2019-05-29 19:19:58', '2019-05-29 19:19:58'),
(302, 'Casino', 'casino', 3, NULL, '2019-05-29 19:20:10', '2019-05-29 19:20:10'),
(303, 'Casters & Wheels', 'casters-wheels', 3, NULL, '2019-05-29 19:20:16', '2019-05-29 19:20:16'),
(304, 'Caterers', 'caterers', 3, NULL, '2019-05-29 19:20:22', '2019-05-29 19:20:22'),
(305, 'Caterers Equipment & Supplies', 'caterers-equipment-supplies', 3, NULL, '2019-05-29 19:20:28', '2019-05-29 19:20:28'),
(306, 'Caving', 'caving', 3, NULL, '2019-05-29 19:20:34', '2019-05-29 19:20:34'),
(307, 'CCTV', 'cctv', 3, NULL, '2019-05-29 19:20:41', '2019-05-29 19:20:41'),
(308, 'CCTV Repairs', 'cctv-repairs', 3, NULL, '2019-05-29 19:20:48', '2019-05-29 19:20:48'),
(309, 'CD VCD & DVD', 'cd-vcd-dvd', 3, NULL, '2019-05-29 19:20:55', '2019-05-29 19:20:55'),
(310, 'Ceilings', 'ceilings', 3, NULL, '2019-05-29 19:21:02', '2019-05-29 19:21:02'),
(311, 'Cellular Companies', 'cellular-companies', 3, NULL, '2019-05-29 19:21:08', '2019-05-29 19:21:08'),
(312, 'Cement - Retail', 'cement-retail', 3, NULL, '2019-05-29 19:21:14', '2019-05-29 19:21:14'),
(313, 'Cement - Wholesale & Manufacturers', 'cement-wholesale-manufacturers', 3, NULL, '2019-05-29 19:21:19', '2019-05-29 19:21:19'),
(314, 'Cement Based Products', 'cement-based-products', 3, NULL, '2019-05-29 19:21:26', '2019-05-29 19:21:26'),
(315, 'Cemetrey', 'cemetrey', 3, NULL, '2019-05-29 19:21:33', '2019-05-29 19:21:33'),
(316, 'Central Bank', 'central-bank', 3, NULL, '2019-05-29 19:21:39', '2019-05-29 19:21:39'),
(317, 'Central Bus Stand', 'central-bus-stand', 3, NULL, '2019-05-29 19:21:45', '2019-05-29 19:21:45'),
(318, 'Ceramic - Equipment & Supplies', 'ceramic-equipment-supplies', 3, NULL, '2019-05-29 19:21:57', '2019-05-29 19:21:57'),
(319, 'Ceramic Products - Decorative', 'ceramic-products-decorative', 3, NULL, '2019-05-29 19:22:05', '2019-05-29 19:22:05'),
(320, 'Chains & Sprockets', 'chains-sprockets', 3, NULL, '2019-05-29 19:22:16', '2019-05-29 19:22:16'),
(321, 'Chalk', 'chalk', 3, NULL, '2019-05-29 19:22:23', '2019-05-29 19:22:23'),
(322, 'Chambers of Commerce', 'chambers-of-commerce', 3, NULL, '2019-05-29 19:22:28', '2019-05-29 19:22:28'),
(323, 'Channeling Centers', 'channeling-centers', 3, NULL, '2019-05-29 19:22:36', '2019-05-29 19:22:36'),
(324, 'Chartered Accountants', 'chartered-accountants', 3, NULL, '2019-05-29 19:22:42', '2019-05-29 19:22:42'),
(325, 'Chemicals', 'chemicals', 3, NULL, '2019-05-29 19:22:48', '2019-05-29 19:22:48'),
(326, 'Children Homes', 'children-homes', 3, NULL, '2019-05-29 19:22:56', '2019-05-29 19:22:56'),
(327, 'Children Park Equipment', 'children-park-equipment', 3, NULL, '2019-05-29 19:23:03', '2019-05-29 19:23:03'),
(328, 'Chillers', 'chillers', 3, NULL, '2019-05-29 19:23:09', '2019-05-29 19:23:09'),
(329, 'Christian', 'christian', 3, NULL, '2019-05-29 19:23:20', '2019-05-29 19:23:20'),
(330, 'Churches - Apostolic Prophetic', 'churches-apostolic-prophetic', 3, NULL, '2019-05-29 19:23:28', '2019-05-29 19:23:28'),
(331, 'Churches - Baptist', 'churches-baptist', 3, NULL, '2019-05-29 19:23:35', '2019-05-29 19:23:35'),
(332, 'Churches - Evangelical Free', 'churches-evangelical-free', 3, NULL, '2019-05-29 19:23:41', '2019-05-29 19:23:41'),
(333, 'Churches - Jehovah s Witnesses', 'churches-jehovah-s-witnesses', 3, NULL, '2019-05-29 19:23:48', '2019-05-29 19:23:48'),
(334, 'Churches - Pentecostal', 'churches-pentecostal', 3, NULL, '2019-05-29 19:23:54', '2019-05-29 19:23:54'),
(335, 'Churches - Reformed', 'churches-reformed', 3, NULL, '2019-05-29 19:24:01', '2019-05-29 19:24:01'),
(336, 'Churches - Seventh Day Adventist', 'churches-seventh-day-adventist', 3, NULL, '2019-05-29 19:24:09', '2019-05-29 19:24:09'),
(337, 'Churches - Various Denominations', 'churches-various-denominations', 3, NULL, '2019-05-29 19:24:16', '2019-05-29 19:24:16'),
(338, 'Cinnamon Suppliers', 'cinnamon-suppliers', 3, NULL, '2019-05-29 19:24:22', '2019-05-29 19:24:22'),
(339, 'Circuit Breakers', 'circuit-breakers', 3, NULL, '2019-05-29 19:24:31', '2019-05-29 19:24:31'),
(340, 'Cladding & Cladding Sheets', 'cladding-cladding-sheets', 3, NULL, '2019-05-29 19:24:40', '2019-05-29 19:24:40'),
(341, 'Classical Musicians', 'classical-musicians', 3, NULL, '2019-05-29 19:24:46', '2019-05-29 19:24:46'),
(342, 'Cleaners & Dryers', 'cleaners-dryers', 3, NULL, '2019-05-29 19:24:53', '2019-05-29 19:24:53'),
(343, 'Cleaning Equipment', 'cleaning-equipment', 3, NULL, '2019-05-29 19:25:11', '2019-05-29 19:25:11'),
(344, 'Clearing & Forwarding Agents ', 'clearing-forwarding-agents', 3, NULL, '2019-05-29 19:25:19', '2019-05-29 19:25:19'),
(345, 'Clinics', 'clinics', 3, NULL, '2019-05-29 19:25:26', '2019-05-29 19:25:26'),
(346, 'Clocks Repairing', 'clocks-repairing', 3, NULL, '2019-05-29 19:25:45', '2019-05-29 19:25:45'),
(347, 'Clubs', 'clubs', 3, NULL, '2019-05-29 19:25:51', '2019-05-29 19:25:51'),
(348, 'Co-operative Societies', 'co-operative-societies', 3, NULL, '2019-05-29 19:25:58', '2019-05-29 19:25:58'),
(349, 'Coding Machines', 'coding-machines', 3, NULL, '2019-05-29 19:26:09', '2019-05-29 19:26:09'),
(350, 'Coffee', 'coffee', 3, NULL, '2019-05-29 19:26:15', '2019-05-29 19:26:15'),
(351, 'Coffee Grinding Mills', 'coffee-grinding-mills', 3, NULL, '2019-05-29 19:26:22', '2019-05-29 19:26:22'),
(352, 'Coffee Machine - Renting', 'coffee-machine-renting', 3, NULL, '2019-05-29 19:26:31', '2019-05-29 19:26:31'),
(353, 'Coffee Shops', 'coffee-shops', 3, NULL, '2019-05-29 19:26:38', '2019-05-29 19:26:38'),
(354, 'Coffee Beans', 'coffee-beans', 3, NULL, '2019-05-29 19:26:54', '2019-05-29 19:26:54'),
(355, 'Coir Products', 'coir-products', 3, NULL, '2019-05-29 19:27:02', '2019-05-29 19:27:02'),
(356, 'Cold Storage Rooms', 'cold-storage-rooms', 3, NULL, '2019-05-29 19:27:09', '2019-05-29 19:27:09'),
(357, 'Collapsible Tubes', 'collapsible-tubes', 3, NULL, '2019-05-29 19:27:15', '2019-05-29 19:27:15'),
(358, 'Colour Separations - Offset Photo Engraving etc', 'colour-separations-offset-photo-engraving-etc', 3, NULL, '2019-05-29 19:27:23', '2019-05-29 19:27:23'),
(359, 'Communication Bureaux', 'communication-bureaux', 3, NULL, '2019-05-29 19:27:46', '2019-05-29 19:27:46'),
(360, 'Commission Agents', 'commission-agents', 3, NULL, '2019-05-29 19:27:54', '2019-05-29 19:27:54'),
(361, 'Communication Centres', 'communication-centres', 3, NULL, '2019-05-29 19:28:01', '2019-05-29 19:28:01'),
(362, 'Communication Companies', 'communication-companies', 3, NULL, '2019-05-29 19:28:08', '2019-05-29 19:28:08'),
(363, 'Communication Equipment & Repairs', 'communication-equipment-repairs', 3, NULL, '2019-05-29 19:28:15', '2019-05-29 19:28:15'),
(364, 'Compact Discs Duplicating Recording', 'compact-discs-duplicating-recording', 3, NULL, '2019-05-29 19:28:23', '2019-05-29 19:28:23'),
(365, 'Compact Discs Manufacturers & Wholesalers', 'compact-discs-manufacturers-wholesalers', 3, NULL, '2019-05-29 19:28:30', '2019-05-29 19:28:30'),
(366, 'Compact Discs VCD & Audio Cassettes- Repair & Services', 'compact-discs-vcd-audio-cassettes-repair-services', 3, NULL, '2019-05-29 19:28:36', '2019-05-29 19:28:36'),
(367, 'Compactors Earth', 'compactors-earth', 3, NULL, '2019-05-29 19:28:43', '2019-05-29 19:28:43'),
(368, 'Compressors - Air & Gas', 'compressors-air-gas', 3, NULL, '2019-05-29 19:28:49', '2019-05-29 19:28:49'),
(369, 'Computer - IT Consultants', 'computer-it-consultants', 3, NULL, '2019-05-29 19:29:04', '2019-05-29 19:29:04'),
(370, 'Computer - IT Skills - Corporate Training', 'computer-it-skills-corporate-training', 3, NULL, '2019-05-29 19:29:10', '2019-05-29 19:29:10'),
(371, 'Computer / Laptop Dealers', 'computer-laptop-dealers', 3, NULL, '2019-05-29 19:29:16', '2019-05-29 19:29:16'),
(372, 'Computer Accessories', 'computer-accessories', 3, NULL, '2019-05-29 19:29:23', '2019-05-29 19:29:23'),
(373, 'Computer Books', 'computer-books', 3, NULL, '2019-05-29 19:29:30', '2019-05-29 19:29:30'),
(374, 'Computer Data Storage Solutions', 'computer-data-storage-solutions', 3, NULL, '2019-05-29 19:29:37', '2019-05-29 19:29:37'),
(375, 'Computer Furniture', 'computer-furniture', 3, NULL, '2019-05-29 19:29:45', '2019-05-29 19:29:45'),
(376, 'Computer Furniture Manufacture', 'computer-furniture-manufacture', 3, NULL, '2019-05-29 19:29:51', '2019-05-29 19:29:51'),
(377, 'Computer Hiring', 'computer-hiring', 3, NULL, '2019-05-29 19:29:59', '2019-05-29 19:29:59'),
(378, 'Computer Information Security Systems', 'computer-information-security-systems', 3, NULL, '2019-05-29 19:30:08', '2019-05-29 19:30:08'),
(379, 'Computer Laptops Sales, Services & Repairs', 'computer-laptops-sales-services-repairs', 3, NULL, '2019-05-29 19:30:15', '2019-05-29 19:30:15'),
(380, 'Computer Manufacture', 'computer-manufacture', 3, NULL, '2019-05-29 19:30:24', '2019-05-29 19:30:24'),
(381, 'Computer Networking', 'computer-networking', 3, NULL, '2019-05-29 19:30:33', '2019-05-29 19:30:33'),
(382, 'Computer Power Solutions Lighting Protection', 'computer-power-solutions-lighting-protection', 3, NULL, '2019-05-29 19:30:39', '2019-05-29 19:30:39'),
(383, 'Computer Printers', 'computer-printers', 3, NULL, '2019-05-29 19:30:46', '2019-05-29 19:30:46'),
(384, 'Computer Renting', 'computer-renting', 3, NULL, '2019-05-29 19:30:53', '2019-05-29 19:30:53'),
(385, 'Computer Scanning (Digitizing) Equipment & Services', 'computer-scanning-digitizing-equipment-services', 3, NULL, '2019-05-29 19:31:00', '2019-05-29 19:31:00'),
(386, 'Computer Security', 'computer-security', 3, NULL, '2019-05-29 19:31:06', '2019-05-29 19:31:06'),
(387, 'Computer Services & Repairs', 'computer-services-repairs', 3, NULL, '2019-05-29 19:31:14', '2019-05-29 19:31:14'),
(388, 'Computer Software Development & Packages', 'computer-software-development-packages', 3, NULL, '2019-05-29 19:31:20', '2019-05-29 19:31:20'),
(389, 'Computer Stationery', 'computer-stationery', 3, NULL, '2019-05-29 19:31:27', '2019-05-29 19:31:27'),
(390, 'Computer Technology', 'computer-technology', 3, NULL, '2019-05-29 19:31:35', '2019-05-29 19:31:35'),
(391, 'Computer Training Cente', 'computer-training-cente', 3, NULL, '2019-05-29 19:31:42', '2019-05-29 19:31:42'),
(392, 'Computer Training Schools', 'computer-training-schools', 3, NULL, '2019-05-29 19:31:48', '2019-05-29 19:31:48'),
(393, 'Concrete Power troweling', 'concrete-power-troweling', 3, NULL, '2019-05-29 19:32:04', '2019-05-29 19:32:04'),
(394, 'Concrete - Ready Mixed', 'concrete-ready-mixed', 3, NULL, '2019-05-29 19:34:27', '2019-05-29 19:34:27'),
(395, 'Concrete Additives', 'concrete-additives', 3, NULL, '2019-05-29 19:38:07', '2019-05-29 19:38:07'),
(396, 'Concrete Admixtures', 'concrete-admixtures', 3, NULL, '2019-05-29 19:40:56', '2019-05-29 19:40:56'),
(397, 'Concrete Based Products', 'concrete-based-products', 3, NULL, '2019-05-29 19:41:08', '2019-05-29 19:41:08'),
(398, 'Concrete Block & Product Moulding Machinery', 'concrete-block-product-moulding-machinery', 3, NULL, '2019-05-29 19:41:14', '2019-05-29 19:41:14'),
(399, 'Concrete Blocks & Shapes', 'concrete-blocks-shapes', 3, NULL, '2019-05-29 19:41:22', '2019-05-29 19:41:22'),
(400, 'Concrete Demolishing & Removing', 'concrete-demolishing-removing', 3, NULL, '2019-05-29 19:41:30', '2019-05-29 19:41:30'),
(401, 'Concrete Doors Windows & Ventilators', 'concrete-doors-windows-ventilators', 3, NULL, '2019-05-29 19:41:36', '2019-05-29 19:41:36'),
(402, 'Concrete Mixtures', 'concrete-mixtures', 3, NULL, '2019-05-29 19:41:44', '2019-05-29 19:41:44'),
(403, 'Concrete Pipes', 'concrete-pipes', 3, NULL, '2019-05-29 19:41:51', '2019-05-29 19:41:51'),
(404, 'Concrete Repair Products', 'concrete-repair-products', 3, NULL, '2019-05-29 19:41:58', '2019-05-29 19:41:58'),
(405, 'Confectionary & Candy Manufacturers', 'confectionary-candy-manufacturers', 3, NULL, '2019-05-29 19:42:07', '2019-05-29 19:42:07'),
(406, 'Construction & Mining Equipment Machinery', 'construction-mining-equipment-machinery', 3, NULL, '2019-05-29 19:42:15', '2019-05-29 19:42:15'),
(407, 'Construction - Fixing Materials', 'construction-fixing-materials', 3, NULL, '2019-05-29 19:42:22', '2019-05-29 19:42:22'),
(408, 'Construction Chemicals', 'construction-chemicals', 3, NULL, '2019-05-29 19:42:32', '2019-05-29 19:42:32'),
(409, 'Containers', 'containers', 3, NULL, '2019-05-29 19:43:02', '2019-05-29 19:43:02'),
(410, 'Containers - Freight & Cargo Maintenance & Repairing', 'containers-freight-cargo-maintenance-repairing', 3, NULL, '2019-05-29 19:43:10', '2019-05-29 19:43:10'),
(411, 'Contractors - Building & General', 'contractors-building-general', 3, NULL, '2019-05-29 19:43:29', '2019-05-29 19:43:29'),
(412, 'Contractors - Civil', 'contractors-civil', 3, NULL, '2019-05-29 19:43:35', '2019-05-29 19:43:35'),
(413, 'Contractors Equipment & Supplies', 'contractors-equipment-supplies', 3, NULL, '2019-05-29 19:43:48', '2019-05-29 19:43:48'),
(414, 'Convention Services & Facilities', 'convention-services-facilities', 3, NULL, '2019-05-29 19:44:02', '2019-05-29 19:44:02'),
(415, 'Conveyors', 'conveyors', 3, NULL, '2019-05-29 19:44:08', '2019-05-29 19:44:08'),
(416, 'Cookers & Stoves - Dealers', 'cookers-stoves-dealers', 3, NULL, '2019-05-29 19:44:16', '2019-05-29 19:44:16'),
(417, 'Cooking Utensils - Retail', 'cooking-utensils-retail', 3, NULL, '2019-05-29 19:44:22', '2019-05-29 19:44:22'),
(418, 'Cooling Towers', 'cooling-towers', 3, NULL, '2019-05-29 19:44:29', '2019-05-29 19:44:29'),
(419, 'Copper', 'copper', 3, NULL, '2019-05-29 19:44:35', '2019-05-29 19:44:35'),
(420, 'Copying & Duplicating Services', 'copying-duplicating-services', 3, NULL, '2019-05-29 19:44:43', '2019-05-29 19:44:43'),
(421, 'Copying Machines & Supplies', 'copying-machines-supplies', 3, NULL, '2019-05-29 19:44:51', '2019-05-29 19:44:51'),
(422, 'Cosmetic Products', 'cosmetic-products', 3, NULL, '2019-05-29 19:45:09', '2019-05-29 19:45:09'),
(423, 'Cost consultants', 'cost-consultants', 3, NULL, '2019-05-29 19:45:19', '2019-05-29 19:45:19'),
(424, 'Costume Jewellery', 'costume-jewellery', 3, NULL, '2019-05-29 19:45:27', '2019-05-29 19:45:27'),
(425, 'Counselors', 'counselors', 3, NULL, '2019-05-29 19:45:34', '2019-05-29 19:45:34'),
(426, 'Couplings', 'couplings', 3, NULL, '2019-05-29 19:45:40', '2019-05-29 19:45:40'),
(427, 'Couplings - Automobile', 'couplings-automobile', 3, NULL, '2019-05-29 19:45:47', '2019-05-29 19:45:47'),
(428, 'Courier Services', 'courier-services', 3, NULL, '2019-05-29 19:45:53', '2019-05-29 19:45:53'),
(429, 'Craftmen - Bamboo Work', 'craftmen-bamboo-work', 3, NULL, '2019-05-29 19:46:00', '2019-05-29 19:46:00'),
(430, 'Craftmen - Batik Wall Hangings', 'craftmen-batik-wall-hangings', 3, NULL, '2019-05-29 19:46:06', '2019-05-29 19:46:06'),
(431, 'Craftmen - Bobbin (beeralu) Lace', 'craftmen-bobbin-beeralu-lace', 3, NULL, '2019-05-29 19:46:15', '2019-05-29 19:46:15'),
(432, 'Craftmen - Cane Work', 'craftmen-cane-work', 3, NULL, '2019-05-29 19:46:43', '2019-05-29 19:46:43'),
(433, 'Craftmen - Carved Masks', 'craftmen-carved-masks', 3, NULL, '2019-05-29 19:46:49', '2019-05-29 19:46:49'),
(434, 'Craftmen - Coconut (whole) Related', 'craftmen-coconut-whole-related', 3, NULL, '2019-05-29 19:46:59', '2019-05-29 19:46:59'),
(435, 'Craftmen - Coconut Shell', 'craftmen-coconut-shell', 3, NULL, '2019-05-29 19:47:06', '2019-05-29 19:47:06'),
(436, 'Craftmen - Coir (coconut Fiber)', 'craftmen-coir-coconut-fiber', 3, NULL, '2019-05-29 19:47:13', '2019-05-29 19:47:13'),
(437, 'Craftmen - Cotton', 'craftmen-cotton', 3, NULL, '2019-05-29 19:47:20', '2019-05-29 19:47:20'),
(438, 'Craftmen - Fabric Painting', 'craftmen-fabric-painting', 3, NULL, '2019-05-29 19:47:32', '2019-05-29 19:47:32'),
(439, 'Craftmen - Glazed Pottery (ceramics)', 'craftmen-glazed-pottery-ceramics', 3, NULL, '2019-05-29 19:47:42', '2019-05-29 19:47:42'),
(440, 'Craftmen - Gold Carving', 'craftmen-gold-carving', 3, NULL, '2019-05-29 19:47:49', '2019-05-29 19:47:49'),
(441, 'Craftmen - Hand Embroidery', 'craftmen-hand-embroidery', 3, NULL, '2019-05-29 19:47:56', '2019-05-29 19:47:56'),
(442, 'Craftmen - Hand Lace', 'craftmen-hand-lace', 3, NULL, '2019-05-29 19:48:03', '2019-05-29 19:48:03'),
(443, 'Craftmen - Hand Made Paper', 'craftmen-hand-made-paper', 3, NULL, '2019-05-29 19:48:12', '2019-05-29 19:48:12'),
(444, 'Craftmen - Jute', 'craftmen-jute', 3, NULL, '2019-05-29 19:48:19', '2019-05-29 19:48:19'),
(445, 'Craftmen - Lacquer Work', 'craftmen-lacquer-work', 3, NULL, '2019-05-29 19:48:26', '2019-05-29 19:48:26'),
(446, 'Craftmen - Leather Crafts', 'craftmen-leather-crafts', 3, NULL, '2019-05-29 19:48:43', '2019-05-29 19:48:43'),
(447, 'Craftmen - Leaves & Grass (other Than Talipot And Palmyra)', 'craftmen-leaves-grass-other-than-talipot-and-palmyra', 3, NULL, '2019-05-29 19:48:51', '2019-05-29 19:48:51'),
(448, 'Crane Services', 'crane-services', 3, NULL, '2019-05-29 19:49:10', '2019-05-29 19:49:10'),
(449, 'Cranes ', 'cranes', 3, NULL, '2019-05-29 19:49:18', '2019-05-29 19:49:18'),
(450, 'Crates', 'crates', 3, NULL, '2019-05-29 19:49:25', '2019-05-29 19:49:25'),
(451, 'Credit Cards ', 'credit-cards', 3, NULL, '2019-05-29 19:49:32', '2019-05-29 19:49:32'),
(452, 'Cricket Clubs', 'cricket-clubs', 3, NULL, '2019-05-29 19:49:39', '2019-05-29 19:49:39'),
(453, 'Crucibles', 'crucibles', 3, NULL, '2019-05-29 19:49:45', '2019-05-29 19:49:45'),
(454, 'Cultural Centres', 'cultural-centres', 3, NULL, '2019-05-29 19:49:52', '2019-05-29 19:49:52'),
(455, 'Currency Notes for Collectors', 'currency-notes-for-collectors', 3, NULL, '2019-05-29 19:49:59', '2019-05-29 19:49:59'),
(456, 'Curtains - PVC Strip', 'curtains-pvc-strip', 3, NULL, '2019-05-29 19:50:05', '2019-05-29 19:50:05'),
(457, 'Curtains - Retail', 'curtains-retail', 3, NULL, '2019-05-29 19:50:13', '2019-05-29 19:50:13'),
(458, 'Cushion Works', 'cushion-works', 3, NULL, '2019-05-29 19:50:31', '2019-05-29 19:50:31');
INSERT INTO `categories` (`id`, `name`, `slug`, `alphabate_id`, `icon`, `created_at`, `updated_at`) VALUES
(459, 'Cutting Dies', 'cutting-dies', 3, NULL, '2019-05-29 19:50:38', '2019-05-29 19:50:38'),
(460, 'Cyber Cafes', 'cyber-cafes', 3, NULL, '2019-05-29 19:50:45', '2019-05-29 19:50:45'),
(461, 'Cycling & Mountain-Biking', 'cycling-mountain-biking', 3, NULL, '2019-05-29 19:50:53', '2019-05-29 19:50:53'),
(462, 'Dairy Equipment & Supplies', 'dairy-equipment-supplies', 4, NULL, '2019-05-29 19:51:17', '2019-05-29 19:51:17'),
(463, 'Dairy products', 'dairy-products', 4, NULL, '2019-05-29 19:51:24', '2019-05-29 19:51:24'),
(464, 'Dancing Groups', 'dancing-groups', 4, NULL, '2019-05-29 19:52:32', '2019-05-29 19:52:32'),
(465, 'Dancing Instructors', 'dancing-instructors', 4, NULL, '2019-05-29 19:52:39', '2019-05-29 19:52:39'),
(466, 'Data Communication Services', 'data-communication-services', 4, NULL, '2019-05-29 19:52:46', '2019-05-29 19:52:46'),
(467, 'Data Networking & Cabling', 'data-networking-cabling', 4, NULL, '2019-05-29 19:52:53', '2019-05-29 19:52:53'),
(468, 'Data Processing Equipment', 'data-processing-equipment', 4, NULL, '2019-05-29 19:53:02', '2019-05-29 19:53:02'),
(469, 'Day Care/Montessori Schools', 'day-caremontessori-schools', 4, NULL, '2019-05-29 19:53:10', '2019-05-29 19:53:10'),
(470, 'Deep Well Constructors', 'deep-well-constructors', 4, NULL, '2019-05-29 19:53:17', '2019-05-29 19:53:17'),
(471, 'Dental Equipment & Supplies', 'dental-equipment-supplies', 4, NULL, '2019-05-29 19:53:30', '2019-05-29 19:53:30'),
(472, 'Dental Materials', 'dental-materials', 4, NULL, '2019-05-29 19:53:37', '2019-05-29 19:53:37'),
(473, 'Dental Specialists', 'dental-specialists', 4, NULL, '2019-05-29 19:53:44', '2019-05-29 19:53:44'),
(474, 'Dental Surgeons', 'dental-surgeons', 4, NULL, '2019-05-29 19:53:52', '2019-05-29 19:53:52'),
(475, 'Denture Technicians', 'denture-technicians', 4, NULL, '2019-05-29 19:53:59', '2019-05-29 19:53:59'),
(476, 'Departments', 'departments', 4, NULL, '2019-05-29 19:54:05', '2019-05-29 19:54:05'),
(477, 'Designing & Sewing', 'designing-sewing', 4, NULL, '2019-05-29 19:54:12', '2019-05-29 19:54:12'),
(478, 'Detergents', 'detergents', 4, NULL, '2019-05-29 19:54:20', '2019-05-29 19:54:20'),
(479, 'Diabetic Centre', 'diabetic-centre', 4, NULL, '2019-05-29 19:54:26', '2019-05-29 19:54:26'),
(480, 'Dialog Short Codes', 'dialog-short-codes', 4, NULL, '2019-05-29 19:54:34', '2019-05-29 19:54:34'),
(481, 'Diamonds', 'diamonds', 4, NULL, '2019-05-29 19:54:42', '2019-05-29 19:54:42'),
(482, 'Diaries', 'diaries', 4, NULL, '2019-05-29 19:54:49', '2019-05-29 19:54:49'),
(483, 'Digital Cameras', 'digital-cameras', 4, NULL, '2019-05-29 19:54:55', '2019-05-29 19:54:55'),
(484, 'Digital Copy Printing', 'digital-copy-printing', 4, NULL, '2019-05-29 19:55:52', '2019-05-29 19:55:52'),
(485, 'Digital Duplicators', 'digital-duplicators', 4, NULL, '2019-05-29 19:56:01', '2019-05-29 19:56:01'),
(486, 'Digital Imaging Services', 'digital-imaging-services', 4, NULL, '2019-05-29 19:56:09', '2019-05-29 19:56:09'),
(487, 'Digital Marketing', 'digital-marketing', 4, NULL, '2019-05-29 19:56:15', '2019-05-29 19:56:15'),
(488, 'Digital Payment Solutions', 'digital-payment-solutions', 4, NULL, '2019-05-29 19:56:23', '2019-05-29 19:56:23'),
(489, 'Digital Printing', 'digital-printing', 4, NULL, '2019-05-29 19:56:32', '2019-05-29 19:56:32'),
(490, 'Digital Printing Machine Dealers', 'digital-printing-machine-dealers', 4, NULL, '2019-05-29 19:56:39', '2019-05-29 19:56:39'),
(491, 'Digital Signage', 'digital-signage', 4, NULL, '2019-05-29 19:56:46', '2019-05-29 19:56:46'),
(492, 'Direct Mailing Services', 'direct-mailing-services', 4, NULL, '2019-05-29 19:57:03', '2019-05-29 19:57:03'),
(493, 'Directory Services', 'directory-services', 4, NULL, '2019-05-29 19:57:11', '2019-05-29 19:57:11'),
(494, 'Disinfections & Germicides', 'disinfections-germicides', 4, NULL, '2019-05-29 19:57:20', '2019-05-29 19:57:20'),
(495, 'Diving & Underwater Services', 'diving-underwater-services', 4, NULL, '2019-05-29 19:57:35', '2019-05-29 19:57:35'),
(496, 'Diving (Scuba/Snorkeling/Shipwrek)', 'diving-scubasnorkelingshipwrek', 4, NULL, '2019-05-29 19:57:42', '2019-05-29 19:57:42'),
(497, 'Diving Equipment & Supplies', 'diving-equipment-supplies', 4, NULL, '2019-05-29 19:57:54', '2019-05-29 19:57:54'),
(498, 'DJ', 'dj', 4, NULL, '2019-05-29 19:58:06', '2019-05-29 19:58:06'),
(499, 'Domestic Flights - Helicopters', 'domestic-flights-helicopters', 4, NULL, '2019-05-29 19:58:24', '2019-05-29 19:58:24'),
(500, 'Donut Shops', 'donut-shops', 4, NULL, '2019-05-29 19:58:32', '2019-05-29 19:58:32'),
(501, 'Door Closers & Checks', 'door-closers-checks', 4, NULL, '2019-05-29 19:58:40', '2019-05-29 19:58:40'),
(502, 'Doors', 'doors', 4, NULL, '2019-05-29 19:58:54', '2019-05-29 19:58:54'),
(503, 'Doors - Auto', 'doors-auto', 4, NULL, '2019-05-29 19:59:00', '2019-05-29 19:59:00'),
(504, 'Drainage & Sewer Pipes & Fittings', 'drainage-sewer-pipes-fittings', 4, NULL, '2019-05-29 19:59:08', '2019-05-29 19:59:08'),
(505, 'Dressmakers', 'dressmakers', 4, NULL, '2019-05-29 19:59:15', '2019-05-29 19:59:15'),
(506, 'Drilling Equipment & Supplies', 'drilling-equipment-supplies', 4, NULL, '2019-05-29 19:59:24', '2019-05-29 19:59:24'),
(507, 'Drinking Water', 'drinking-water', 4, NULL, '2019-05-29 19:59:31', '2019-05-29 19:59:31'),
(508, 'Drivers', 'drivers', 4, NULL, '2019-05-29 19:59:38', '2019-05-29 19:59:38'),
(509, 'Driving Instructors ', 'driving-instructors', 4, NULL, '2019-05-29 19:59:48', '2019-05-29 19:59:48'),
(510, 'Driving Schools ', 'driving-schools', 4, NULL, '2019-05-29 19:59:55', '2019-05-29 19:59:55'),
(511, 'Drummers', 'drummers', 4, NULL, '2019-05-29 20:01:49', '2019-05-29 20:01:49'),
(512, 'Dry Cleaners', 'dry-cleaners', 4, NULL, '2019-05-29 20:01:56', '2019-05-29 20:01:56'),
(513, 'Dry Fish', 'dry-fish', 4, NULL, '2019-05-29 20:02:04', '2019-05-29 20:02:04'),
(514, 'Dry Ice', 'dry-ice', 4, NULL, '2019-05-29 20:02:10', '2019-05-29 20:02:10'),
(515, 'Dryers - Industrial', 'dryers-industrial', 4, NULL, '2019-05-29 20:02:18', '2019-05-29 20:02:18'),
(516, 'Ductile Iron', 'ductile-iron', 4, NULL, '2019-05-29 20:02:25', '2019-05-29 20:02:25'),
(517, 'Dust Collectors Machine', 'dust-collectors-machine', 4, NULL, '2019-05-29 20:02:44', '2019-05-29 20:02:44'),
(518, 'Duty Free Shops', 'duty-free-shops', 4, NULL, '2019-05-29 20:02:51', '2019-05-29 20:02:51'),
(519, 'DVD Players - Repairs & Services', 'dvd-players-repairs-services', 4, NULL, '2019-05-29 20:02:59', '2019-05-29 20:02:59'),
(520, 'Dyes & Dyestuffs', 'dyes-dyestuffs', 4, NULL, '2019-05-29 20:03:08', '2019-05-29 20:03:08'),
(521, 'Disco', 'disco', 4, NULL, '2019-05-29 20:03:17', '2019-05-29 20:03:17'),
(522, 'E-Commerce', 'e-commerce', 5, NULL, '2019-05-29 20:03:32', '2019-05-29 20:03:32'),
(523, 'E-mail Services', 'e-mail-services', 5, NULL, '2019-05-29 20:03:40', '2019-05-29 20:03:40'),
(524, 'Earth Moving Equipment', 'earth-moving-equipment', 5, NULL, '2019-05-29 20:03:59', '2019-05-29 20:03:59'),
(525, 'Earthing Systems', 'earthing-systems', 5, NULL, '2019-05-29 20:04:07', '2019-05-29 20:04:07'),
(526, 'Eco Hotel', 'eco-hotel', 5, NULL, '2019-05-29 20:04:20', '2019-05-29 20:04:20'),
(527, 'EDM Machines', 'edm-machines', 5, NULL, '2019-05-29 20:04:28', '2019-05-29 20:04:28'),
(528, 'Education - Account Finance and Banking', 'education-account-finance-and-banking', 5, NULL, '2019-05-29 20:04:39', '2019-05-29 20:04:39'),
(529, 'Education - Business Management', 'education-business-management', 5, NULL, '2019-05-29 20:04:47', '2019-05-29 20:04:47'),
(530, 'Education - Day Care', 'education-day-care', 5, NULL, '2019-05-29 20:04:58', '2019-05-29 20:04:58'),
(531, 'Education - Engineering', 'education-engineering', 5, NULL, '2019-05-29 20:05:05', '2019-05-29 20:05:05'),
(532, 'Education - Hospitality', 'education-hospitality', 5, NULL, '2019-05-29 20:05:12', '2019-05-29 20:05:12'),
(533, 'Education - Human Resources', 'education-human-resources', 5, NULL, '2019-05-29 20:05:20', '2019-05-29 20:05:20'),
(534, 'Education - Information Technologies', 'education-information-technologies', 5, NULL, '2019-05-29 20:05:27', '2019-05-29 20:05:27'),
(535, 'Education - Language', 'education-language', 5, NULL, '2019-05-29 20:05:35', '2019-05-29 20:05:35'),
(536, 'Education - Law', 'education-law', 5, NULL, '2019-05-29 20:05:42', '2019-05-29 20:05:42'),
(537, 'Education - Marketing', 'education-marketing', 5, NULL, '2019-05-29 20:05:49', '2019-05-29 20:05:49'),
(538, 'Education - Medical-Pharmaceuutical-Nursing', 'education-medical-pharmaceuutical-nursing', 5, NULL, '2019-05-29 20:05:58', '2019-05-29 20:05:58'),
(539, 'Education - Montessori', 'education-montessori', 5, NULL, '2019-05-29 20:06:31', '2019-05-29 20:06:31'),
(540, 'Education - Overseas Representatives', 'education-overseas-representatives', 5, NULL, '2019-05-29 20:06:44', '2019-05-29 20:06:44'),
(541, 'Education - Schools', 'education-schools', 5, NULL, '2019-05-29 20:06:52', '2019-05-29 20:06:52'),
(542, 'Education - Tuition O/L-A/L', 'education-tuition-ol-al', 5, NULL, '2019-05-29 20:07:00', '2019-05-29 20:07:00'),
(543, 'Educational Software', 'educational-software', 5, NULL, '2019-05-29 20:07:13', '2019-05-29 20:07:13'),
(544, 'Educational Training Equipment', 'educational-training-equipment', 5, NULL, '2019-05-29 20:07:21', '2019-05-29 20:07:21'),
(545, 'EFI - Petrol Injector Diagnostic And Cleaning', 'efi-petrol-injector-diagnostic-and-cleaning', 5, NULL, '2019-05-29 20:07:28', '2019-05-29 20:07:28'),
(546, 'Eggs - Wholesale', 'eggs-wholesale', 5, NULL, '2019-05-29 20:07:36', '2019-05-29 20:07:36'),
(547, 'Elder Homes', 'elder-homes', 5, NULL, '2019-05-29 20:07:52', '2019-05-29 20:07:52'),
(548, 'Electric & Electronic Appliances', 'electric-electronic-appliances', 5, NULL, '2019-05-29 20:07:59', '2019-05-29 20:07:59'),
(549, 'Electric Appliances - Major', 'electric-appliances-major', 5, NULL, '2019-05-29 20:08:05', '2019-05-29 20:08:05'),
(550, 'Electric Appliances - Small', 'electric-appliances-small', 5, NULL, '2019-05-29 20:08:14', '2019-05-29 20:08:14'),
(551, 'Electric Appliances - Small -Repairing', 'electric-appliances-small-repairing', 5, NULL, '2019-05-29 20:08:21', '2019-05-29 20:08:21'),
(552, 'Electric Companies', 'electric-companies', 5, NULL, '2019-05-29 20:08:30', '2019-05-29 20:08:30'),
(553, 'Electric Constructors', 'electric-constructors', 5, NULL, '2019-05-29 20:08:38', '2019-05-29 20:08:38'),
(554, 'Electric Equipment - Services & Repairing', 'electric-equipment-services-repairing', 5, NULL, '2019-05-29 20:08:48', '2019-05-29 20:08:48'),
(555, 'Electric Fences', 'electric-fences', 5, NULL, '2019-05-29 20:08:56', '2019-05-29 20:08:56'),
(556, 'Electric Heating Elements', 'electric-heating-elements', 5, NULL, '2019-05-29 20:09:06', '2019-05-29 20:09:06'),
(557, 'Electric Motor Controls -Wholesale & Manufacturers', 'electric-motor-controls-wholesale-manufacturers', 5, NULL, '2019-05-29 20:09:21', '2019-05-29 20:09:21'),
(558, 'Electric Motors - Dealers & Repairing', 'electric-motors-dealers-repairing', 5, NULL, '2019-05-29 20:09:28', '2019-05-29 20:09:28'),
(559, 'Electric Motors - Parts & Supplies', 'electric-motors-parts-supplies', 5, NULL, '2019-05-29 20:09:35', '2019-05-29 20:09:35'),
(560, 'Electric Motors - Repairing', 'electric-motors-repairing', 5, NULL, '2019-05-29 20:09:42', '2019-05-29 20:09:42'),
(561, 'Electric Switch Boards', 'electric-switch-boards', 5, NULL, '2019-05-29 20:09:49', '2019-05-29 20:09:49'),
(562, 'Electric Switchgears', 'electric-switchgears', 5, NULL, '2019-05-29 20:09:56', '2019-05-29 20:09:56'),
(563, 'Electric Transformers', 'electric-transformers', 5, NULL, '2019-05-29 20:10:04', '2019-05-29 20:10:04'),
(564, 'Electric Vehicle Charging Point', 'electric-vehicle-charging-point', 5, NULL, '2019-05-29 20:10:11', '2019-05-29 20:10:11'),
(565, 'Electric Voltage Stabilisers', 'electric-voltage-stabilisers', 5, NULL, '2019-05-29 20:10:18', '2019-05-29 20:10:18'),
(566, 'Electrical Trunkings & Cable Ladders', 'electrical-trunkings-cable-ladders', 5, NULL, '2019-05-29 20:10:27', '2019-05-29 20:10:27'),
(567, 'Electrical Contractors', 'electrical-contractors', 5, NULL, '2019-05-29 20:10:35', '2019-05-29 20:10:35'),
(568, 'Electrical Installations', 'electrical-installations', 5, NULL, '2019-05-29 20:10:41', '2019-05-29 20:10:41'),
(569, 'Electrical Suppliers', 'electrical-suppliers', 5, NULL, '2019-05-29 20:10:50', '2019-05-29 20:10:50'),
(570, 'Electrical Supplies - Retail', 'electrical-supplies-retail', 5, NULL, '2019-05-29 20:10:57', '2019-05-29 20:10:57'),
(571, 'Electrical Supplies -Manufacturers', 'electrical-supplies-manufacturers', 5, NULL, '2019-05-29 20:11:05', '2019-05-29 20:11:05'),
(572, 'Electrical Supplies -Wholesale', 'electrical-supplies-wholesale', 5, NULL, '2019-05-29 20:11:15', '2019-05-29 20:11:15'),
(573, 'Electrical Switchgears', 'electrical-switchgears', 5, NULL, '2019-05-29 20:11:21', '2019-05-29 20:11:21'),
(574, 'Electricians', 'electricians', 5, NULL, '2019-05-29 20:11:29', '2019-05-29 20:11:29'),
(575, 'Electricity Board', 'electricity-board', 5, NULL, '2019-05-29 20:11:39', '2019-05-29 20:11:39'),
(576, 'Electro - Plating', 'electro-plating', 5, NULL, '2019-05-29 20:11:45', '2019-05-29 20:11:45'),
(577, 'Electronic Components', 'electronic-components', 5, NULL, '2019-05-29 20:11:55', '2019-05-29 20:11:55'),
(578, 'Electronic Equipment', 'electronic-equipment', 5, NULL, '2019-05-29 20:12:03', '2019-05-29 20:12:03'),
(579, 'Electronic Equipment - Repairing', 'electronic-equipment-repairing', 5, NULL, '2019-05-29 20:12:54', '2019-05-29 20:12:54'),
(580, 'Electronic Testing Equipment', 'electronic-testing-equipment', 5, NULL, '2019-05-29 20:13:01', '2019-05-29 20:13:01'),
(581, 'Electroplating Chemicals', 'electroplating-chemicals', 5, NULL, '2019-05-29 20:13:08', '2019-05-29 20:13:08'),
(582, 'Elevators ', 'elevators', 5, NULL, '2019-05-29 20:13:16', '2019-05-29 20:13:16'),
(583, 'Embassies', 'embassies', 5, NULL, '2019-05-29 20:13:24', '2019-05-29 20:13:24'),
(584, 'Employment Agencies', 'employment-agencies', 5, NULL, '2019-05-29 20:13:38', '2019-05-29 20:13:38'),
(585, 'Energy Management & Conservation Consultants', 'energy-management-conservation-consultants', 5, NULL, '2019-05-29 20:13:46', '2019-05-29 20:13:46'),
(586, 'Energy Management Systems', 'energy-management-systems', 5, NULL, '2019-05-29 20:13:57', '2019-05-29 20:13:57'),
(587, 'Engineering', 'engineering', 5, NULL, '2019-05-29 20:14:18', '2019-05-29 20:14:18'),
(588, 'Engineering - Marine', 'engineering-marine', 5, NULL, '2019-05-29 20:14:25', '2019-05-29 20:14:25'),
(589, 'Engineering Works', 'engineering-works', 5, NULL, '2019-05-29 20:14:35', '2019-05-29 20:14:35'),
(590, 'Engineers - Bio', 'engineers-bio', 5, NULL, '2019-05-29 20:14:43', '2019-05-29 20:14:43'),
(591, 'Engineers - Civil', 'engineers-civil', 5, NULL, '2019-05-29 20:14:51', '2019-05-29 20:14:51'),
(592, 'Engineers - Consulting', 'engineers-consulting', 5, NULL, '2019-05-29 20:14:58', '2019-05-29 20:14:58'),
(593, 'Engineers - Electrical', 'engineers-electrical', 5, NULL, '2019-05-29 20:15:06', '2019-05-29 20:15:06'),
(594, 'Engineers - Energy Management', 'engineers-energy-management', 5, NULL, '2019-05-29 20:15:13', '2019-05-29 20:15:13'),
(595, 'Engineers - Foundation', 'engineers-foundation', 5, NULL, '2019-05-29 20:15:20', '2019-05-29 20:15:20'),
(596, 'Engineers - Mechanical', 'engineers-mechanical', 5, NULL, '2019-05-29 20:15:33', '2019-05-29 20:15:33'),
(597, 'English Language Schools', 'english-language-schools', 5, NULL, '2019-05-29 20:15:53', '2019-05-29 20:15:53'),
(598, 'Enterprise Solutions', 'enterprise-solutions', 5, NULL, '2019-05-29 20:16:01', '2019-05-29 20:16:01'),
(599, 'Environmental Pollution Controls', 'environmental-pollution-controls', 5, NULL, '2019-05-29 20:16:14', '2019-05-29 20:16:14'),
(600, 'Envelopes & Envelope Manufacturers', 'envelopes-envelope-manufacturers', 5, NULL, '2019-05-29 20:16:21', '2019-05-29 20:16:21'),
(601, 'Estate Management', 'estate-management', 5, NULL, '2019-05-29 20:16:36', '2019-05-29 20:16:36'),
(602, 'Estate Suppliers', 'estate-suppliers', 5, NULL, '2019-05-29 20:16:43', '2019-05-29 20:16:43'),
(603, 'Etisalat Short Codes', 'etisalat-short-codes', 5, NULL, '2019-05-29 20:16:52', '2019-05-29 20:16:52'),
(604, 'Event Management', 'event-management', 5, NULL, '2019-05-29 20:17:00', '2019-05-29 20:17:00'),
(605, 'Executive Search Consultants', 'executive-search-consultants', 5, NULL, '2019-05-29 20:17:15', '2019-05-29 20:17:15'),
(606, 'Exercising Equipment', 'exercising-equipment', 5, NULL, '2019-05-29 20:17:23', '2019-05-29 20:17:23'),
(607, 'Exhibition Halls', 'exhibition-halls', 5, NULL, '2019-05-29 20:18:01', '2019-05-29 20:18:01'),
(608, 'Exhibition Display Equipment', 'exhibition-display-equipment', 5, NULL, '2019-05-29 20:18:55', '2019-05-29 20:18:55'),
(609, 'Explosives', 'explosives', 5, NULL, '2019-05-29 20:19:03', '2019-05-29 20:19:03'),
(610, 'Exporters', 'exporters', 5, NULL, '2019-05-29 20:19:12', '2019-05-29 20:19:12'),
(611, 'Eye Care', 'eye-care', 5, NULL, '2019-05-29 20:19:21', '2019-05-29 20:19:21'),
(612, 'Fabrics', 'fabrics', 6, NULL, '2019-05-29 20:19:35', '2019-05-29 20:19:35'),
(613, 'Fabrics & Silks', 'fabrics-silks', 6, NULL, '2019-05-29 20:19:45', '2019-05-29 20:19:45'),
(614, 'Facility Management Services', 'facility-management-services', 6, NULL, '2019-05-29 20:20:00', '2019-05-29 20:20:00'),
(615, 'Facsimile Communication Equipment', 'facsimile-communication-equipment', 6, NULL, '2019-05-29 20:20:11', '2019-05-29 20:20:11'),
(616, 'Family Planning & Reproductive Health', 'family-planning-reproductive-health', 6, NULL, '2019-05-29 20:20:38', '2019-05-29 20:20:38'),
(617, 'Family Planning Organizations', 'family-planning-organizations', 6, NULL, '2019-05-29 20:20:46', '2019-05-29 20:20:46'),
(618, 'Fancy Goods', 'fancy-goods', 6, NULL, '2019-05-29 20:20:56', '2019-05-29 20:20:56'),
(619, 'Fashion Shoes', 'fashion-shoes', 6, NULL, '2019-05-29 20:21:10', '2019-05-29 20:21:10'),
(620, 'Fast Food', 'fast-food', 6, NULL, '2019-05-29 20:21:18', '2019-05-29 20:21:18'),
(621, 'Fax Equipment & Systems - Repairs', 'fax-equipment-systems-repairs', 6, NULL, '2019-05-29 20:21:28', '2019-05-29 20:21:28'),
(622, 'Felt & Felt Products', 'felt-felt-products', 6, NULL, '2019-05-29 20:21:52', '2019-05-29 20:21:52'),
(623, 'Fence Materials', 'fence-materials', 6, NULL, '2019-05-29 20:22:02', '2019-05-29 20:22:02'),
(624, 'Fertility Care', 'fertility-care', 6, NULL, '2019-05-29 20:22:16', '2019-05-29 20:22:16'),
(625, 'Fertilizers - Retail', 'fertilizers-retail', 6, NULL, '2019-05-29 20:38:50', '2019-05-29 20:38:50'),
(626, 'Fertilizers - Wholesale & Manufacturers', 'fertilizers-wholesale-manufacturers', 6, NULL, '2019-05-29 20:39:00', '2019-05-29 20:39:00'),
(627, 'Fibre Exporters', 'fibre-exporters', 6, NULL, '2019-05-29 20:39:17', '2019-05-29 20:39:17'),
(628, 'Film Locations', 'film-locations', 6, NULL, '2019-05-29 20:39:43', '2019-05-29 20:39:43'),
(629, 'Film Production', 'film-production', 6, NULL, '2019-05-29 20:39:59', '2019-05-29 20:39:59'),
(630, 'Filters - Air & Gas Commercial & Industrial', 'filters-air-gas-commercial-industrial', 6, NULL, '2019-05-29 20:40:14', '2019-05-29 20:40:14'),
(631, 'Filters - Automobile', 'filters-automobile', 6, NULL, '2019-05-29 20:40:23', '2019-05-29 20:40:23'),
(632, 'Filters - Water', 'filters-water', 6, NULL, '2019-05-29 20:40:34', '2019-05-29 20:40:34'),
(633, 'Financial Institute', 'financial-institute', 6, NULL, '2019-05-29 20:40:46', '2019-05-29 20:40:46'),
(634, 'Financial Machines', 'financial-machines', 6, NULL, '2019-05-29 20:40:55', '2019-05-29 20:40:55'),
(635, 'Financing Consultants', 'financing-consultants', 6, NULL, '2019-05-29 20:41:07', '2019-05-29 20:41:07'),
(636, 'Fire Alarm Systems', 'fire-alarm-systems', 6, NULL, '2019-05-29 20:41:16', '2019-05-29 20:41:16'),
(637, 'Fire Bricks', 'fire-bricks', 6, NULL, '2019-05-29 20:41:26', '2019-05-29 20:41:26'),
(638, 'Fire Extinguishers -Commercial & Industrial', 'fire-extinguishers-commercial-industrial', 6, NULL, '2019-05-29 20:41:36', '2019-05-29 20:41:36'),
(639, 'Fire Hydrants', 'fire-hydrants', 6, NULL, '2019-05-29 20:41:50', '2019-05-29 20:41:50'),
(640, 'Fire Protection Consultants', 'fire-protection-consultants', 6, NULL, '2019-05-29 20:41:59', '2019-05-29 20:41:59'),
(641, 'Fire Protection Equipment', 'fire-protection-equipment', 6, NULL, '2019-05-29 20:42:09', '2019-05-29 20:42:09'),
(642, 'Fire Vehicles & Equipment Supplies', 'fire-vehicles-equipment-supplies', 6, NULL, '2019-05-29 20:42:19', '2019-05-29 20:42:19'),
(643, 'Fireproofing & Firestops', 'fireproofing-firestops', 6, NULL, '2019-05-29 20:42:34', '2019-05-29 20:42:34'),
(644, 'Firewood Suppliers', 'firewood-suppliers', 6, NULL, '2019-05-29 20:42:43', '2019-05-29 20:42:43'),
(645, 'Fish Nets', 'fish-nets', 6, NULL, '2019-05-29 20:42:57', '2019-05-29 20:42:57'),
(646, 'Fish Sea Food - Wholesale', 'fish-sea-food-wholesale', 6, NULL, '2019-05-29 20:43:06', '2019-05-29 20:43:06'),
(647, 'Fishing Supplies', 'fishing-supplies', 6, NULL, '2019-05-29 20:43:15', '2019-05-29 20:43:15'),
(648, 'Fishing Tackles - Retails', 'fishing-tackles-retails', 6, NULL, '2019-05-29 20:43:24', '2019-05-29 20:43:24'),
(649, 'Fitness Centre', 'fitness-centre', 6, NULL, '2019-05-29 20:43:33', '2019-05-29 20:43:33'),
(650, 'Flags & Banners', 'flags-banners', 6, NULL, '2019-05-29 20:43:53', '2019-05-29 20:43:53'),
(651, 'Flasks', 'flasks', 6, NULL, '2019-05-29 20:44:23', '2019-05-29 20:44:23'),
(652, 'Flavouring & Fragrances', 'flavouring-fragrances', 6, NULL, '2019-05-29 20:44:32', '2019-05-29 20:44:32'),
(653, 'Flexitanks', 'flexitanks', 6, NULL, '2019-05-29 20:44:42', '2019-05-29 20:44:42'),
(654, 'Flood Lights', 'flood-lights', 6, NULL, '2019-05-29 20:44:55', '2019-05-29 20:44:55'),
(655, 'Floor & Wall Tiles', 'floor-wall-tiles', 6, NULL, '2019-05-29 20:45:05', '2019-05-29 20:45:05'),
(656, 'Floor - Materials & Laying', 'floor-materials-laying', 6, NULL, '2019-05-29 20:45:14', '2019-05-29 20:45:14'),
(657, 'Floor Tiles', 'floor-tiles', 6, NULL, '2019-05-29 20:45:23', '2019-05-29 20:45:23'),
(658, 'Floor Tiles Laying Services', 'floor-tiles-laying-services', 6, NULL, '2019-05-29 20:45:33', '2019-05-29 20:45:33'),
(659, 'Floor Waxing, Polishing & Cleaning', 'floor-waxing-polishing-cleaning', 6, NULL, '2019-05-29 20:45:43', '2019-05-29 20:45:43'),
(660, 'Flooring - Industrial', 'flooring-industrial', 6, NULL, '2019-05-29 20:45:52', '2019-05-29 20:45:52'),
(661, 'Flooring Materials', 'flooring-materials', 6, NULL, '2019-05-29 20:46:01', '2019-05-29 20:46:01'),
(662, 'Florists', 'florists', 6, NULL, '2019-05-29 20:46:09', '2019-05-29 20:46:09'),
(663, 'Florists - Wholesale', 'florists-wholesale', 6, NULL, '2019-05-29 20:46:19', '2019-05-29 20:46:19'),
(664, 'Florists Supplies', 'florists-supplies', 6, NULL, '2019-05-29 20:46:27', '2019-05-29 20:46:27'),
(665, 'Flowers & Plants - Artificial', 'flowers-plants-artificial', 6, NULL, '2019-05-29 20:47:09', '2019-05-29 20:47:09'),
(666, 'Fly & Insect Killer', 'fly-insect-killer', 6, NULL, '2019-05-29 20:47:16', '2019-05-29 20:47:16'),
(667, 'Food Exporters', 'food-exporters', 6, NULL, '2019-05-29 20:47:33', '2019-05-29 20:47:33'),
(668, 'Food Importers & Distributors', 'food-importers-distributors', 6, NULL, '2019-05-29 20:47:41', '2019-05-29 20:47:41'),
(669, 'Food Manufacturers & Distributors', 'food-manufacturers-distributors', 6, NULL, '2019-05-29 20:48:02', '2019-05-29 20:48:02'),
(670, 'Food Packaging Products', 'food-packaging-products', 6, NULL, '2019-05-29 20:48:11', '2019-05-29 20:48:11'),
(671, 'Food Processing & Packaging', 'food-processing-packaging', 6, NULL, '2019-05-29 20:48:22', '2019-05-29 20:48:22'),
(672, 'Food Processing Equipment & Supplies', 'food-processing-equipment-supplies', 6, NULL, '2019-05-29 20:48:32', '2019-05-29 20:48:32'),
(673, 'Foot Massage Centers', 'foot-massage-centers', 6, NULL, '2019-05-29 20:48:48', '2019-05-29 20:48:48'),
(674, 'Footware', 'footware', 6, NULL, '2019-05-29 20:48:57', '2019-05-29 20:48:57'),
(675, 'Foreign Employment Agencies', 'foreign-employment-agencies', 6, NULL, '2019-05-29 20:49:06', '2019-05-29 20:49:06'),
(676, 'Forest Exploration', 'forest-exploration', 6, NULL, '2019-05-29 20:49:16', '2019-05-29 20:49:16'),
(677, 'Forklifts', 'forklifts', 6, NULL, '2019-05-29 20:49:24', '2019-05-29 20:49:24'),
(678, 'Foundries - Brass, Bronze,Aluminium Magnesium etc', 'foundries-brass-bronzealuminium-magnesium-etc', 6, NULL, '2019-05-29 20:49:35', '2019-05-29 20:49:35'),
(679, 'Freight Forwarding', 'freight-forwarding', 6, NULL, '2019-05-29 20:49:54', '2019-05-29 20:49:54'),
(680, 'Fruit & Vegetable Growers & Exporters', 'fruit-vegetable-growers-exporters', 6, NULL, '2019-05-29 20:50:36', '2019-05-29 20:50:36'),
(681, 'Fruit & Vegetable Juices -Distributors & Manufacturers', 'fruit-vegetable-juices-distributors-manufacturers', 6, NULL, '2019-05-29 20:50:46', '2019-05-29 20:50:46'),
(682, 'Fuel Emission Test', 'fuel-emission-test', 6, NULL, '2019-05-29 20:50:55', '2019-05-29 20:50:55'),
(683, 'Fuel Injection Services', 'fuel-injection-services', 6, NULL, '2019-05-29 20:51:04', '2019-05-29 20:51:04'),
(684, 'Fuel Treatment', 'fuel-treatment', 6, NULL, '2019-05-29 20:51:12', '2019-05-29 20:51:12'),
(685, 'Fumigation', 'fumigation', 6, NULL, '2019-05-29 20:51:22', '2019-05-29 20:51:22'),
(686, 'Funeral Directors', 'funeral-directors', 6, NULL, '2019-05-29 20:51:31', '2019-05-29 20:51:31'),
(687, 'Furniture', 'furniture', 6, NULL, '2019-05-29 20:51:39', '2019-05-29 20:51:39'),
(688, 'Furniture Dealers ', 'furniture-dealers', 6, NULL, '2019-05-29 20:51:48', '2019-05-29 20:51:48'),
(689, 'Furniture Manufacturers', 'furniture-manufacturers', 6, NULL, '2019-05-29 20:51:56', '2019-05-29 20:51:56'),
(690, 'Furniture Manufacturers Equipment & Supplies', 'furniture-manufacturers-equipment-supplies', 6, NULL, '2019-05-29 20:52:05', '2019-05-29 20:52:05'),
(691, 'Furniture Renting', 'furniture-renting', 6, NULL, '2019-05-29 20:52:14', '2019-05-29 20:52:14'),
(692, 'Gabions', 'gabions', 7, NULL, '2019-05-29 20:52:25', '2019-05-29 20:52:25'),
(693, 'Galleries', 'galleries', 7, NULL, '2019-05-29 20:52:38', '2019-05-29 20:52:38'),
(694, 'Galvanizing', 'galvanizing', 7, NULL, '2019-05-29 20:52:46', '2019-05-29 20:52:46'),
(695, 'Garages/Breakdown Services', 'garagesbreakdown-services', 7, NULL, '2019-05-29 20:52:59', '2019-05-29 20:52:59'),
(696, 'Garbage Chutes', 'garbage-chutes', 7, NULL, '2019-05-29 20:53:11', '2019-05-29 20:53:11'),
(697, 'Garden & Lawn Equipment & Supplies', 'garden-lawn-equipment-supplies', 7, NULL, '2019-05-29 20:53:20', '2019-05-29 20:53:20'),
(698, 'Garment Accessories', 'garment-accessories', 7, NULL, '2019-05-29 20:53:28', '2019-05-29 20:53:28'),
(699, 'Garments', 'garments', 7, NULL, '2019-05-29 20:53:37', '2019-05-29 20:53:37'),
(700, 'Garments Ready Made - Retail', 'garments-ready-made-retail', 7, NULL, '2019-05-29 20:53:45', '2019-05-29 20:53:45'),
(701, 'Garments & Accessories', 'garments-accessories', 7, NULL, '2019-05-29 20:53:54', '2019-05-29 20:53:54'),
(702, 'Garments - Testing & Inspection', 'garments-testing-inspection', 7, NULL, '2019-05-29 20:54:02', '2019-05-29 20:54:02'),
(703, 'Garments - Washing & Finishing Plants', 'garments-washing-finishing-plants', 7, NULL, '2019-05-29 20:54:11', '2019-05-29 20:54:11'),
(704, 'Garments Buyers Representatives', 'garments-buyers-representatives', 7, NULL, '2019-05-29 20:54:19', '2019-05-29 20:54:19'),
(705, 'Garments Industry Equipment & Supplies', 'garments-industry-equipment-supplies', 7, NULL, '2019-05-29 20:54:27', '2019-05-29 20:54:27'),
(706, 'Garments Manufacturers Supplies', 'garments-manufacturers-supplies', 7, NULL, '2019-05-29 20:54:36', '2019-05-29 20:54:36'),
(707, 'Garments Quilting', 'garments-quilting', 7, NULL, '2019-05-29 20:54:45', '2019-05-29 20:54:45'),
(708, 'Garments Ready made - Manufacturers & Wholesalers', 'garments-ready-made-manufacturers-wholesalers', 7, NULL, '2019-05-29 20:54:53', '2019-05-29 20:54:53'),
(709, 'Garments Ready-made - Exporters', 'garments-ready-made-exporters', 7, NULL, '2019-05-29 20:55:01', '2019-05-29 20:55:01'),
(710, 'Gas - Industrial & Medical Cylinders & Bulk', 'gas-industrial-medical-cylinders-bulk', 7, NULL, '2019-05-29 20:55:21', '2019-05-29 20:55:21'),
(711, 'Gas - Liquid Petroleum -Bottled & Bulk', 'gas-liquid-petroleum-bottled-bulk', 7, NULL, '2019-05-29 20:55:29', '2019-05-29 20:55:29'),
(712, 'Gas Appliances', 'gas-appliances', 7, NULL, '2019-05-29 20:55:38', '2019-05-29 20:55:38'),
(713, 'Gas Appliances -Household', 'gas-appliances-household', 7, NULL, '2019-05-29 20:55:48', '2019-05-29 20:55:48'),
(714, 'Gas Converters -Automobile', 'gas-converters-automobile', 7, NULL, '2019-05-29 20:55:56', '2019-05-29 20:55:56'),
(715, 'Gas Cooker Repairs', 'gas-cooker-repairs', 7, NULL, '2019-05-29 20:56:03', '2019-05-29 20:56:03'),
(716, 'Gem Dealers - Retail', 'gem-dealers-retail', 7, NULL, '2019-05-29 20:56:20', '2019-05-29 20:56:20'),
(717, 'Gem Dealers - Wholesale', 'gem-dealers-wholesale', 7, NULL, '2019-05-29 20:56:30', '2019-05-29 20:56:30'),
(718, 'Gem Exporters', 'gem-exporters', 7, NULL, '2019-05-29 20:56:38', '2019-05-29 20:56:38'),
(719, 'Gemmological Laboratories', 'gemmological-laboratories', 7, NULL, '2019-05-29 20:56:50', '2019-05-29 20:56:50'),
(720, 'Gems - Lapidary', 'gems-lapidary', 7, NULL, '2019-05-29 20:57:00', '2019-05-29 20:57:00'),
(721, 'General Merchandise - Retail', 'general-merchandise-retail', 7, NULL, '2019-05-29 20:57:12', '2019-05-29 20:57:12'),
(722, 'General Merchants - Wholesale', 'general-merchants-wholesale', 7, NULL, '2019-05-29 20:57:20', '2019-05-29 20:57:20'),
(723, 'Generator-LPG Powered', 'generator-lpg-powered', 7, NULL, '2019-05-29 20:57:31', '2019-05-29 20:57:31'),
(724, 'Generators', 'generators', 7, NULL, '2019-05-29 20:57:39', '2019-05-29 20:57:39'),
(725, 'Generators - Commercial & Industrial', 'generators-commercial-industrial', 7, NULL, '2019-05-29 20:57:50', '2019-05-29 20:57:50'),
(726, 'Generators - Renting & Leasing', 'generators-renting-leasing', 7, NULL, '2019-05-29 20:57:59', '2019-05-29 20:57:59'),
(727, 'Generators Service & Repairing', 'generators-service-repairing', 7, NULL, '2019-05-29 20:58:07', '2019-05-29 20:58:07'),
(728, 'Geo Grips', 'geo-grips', 7, NULL, '2019-05-29 20:58:15', '2019-05-29 20:58:15'),
(729, 'Geo Technical Engineers', 'geo-technical-engineers', 7, NULL, '2019-05-29 20:58:23', '2019-05-29 20:58:23'),
(730, 'Gift Items', 'gift-items', 7, NULL, '2019-05-29 20:58:42', '2019-05-29 20:58:42'),
(731, 'Glass ', 'glass', 7, NULL, '2019-05-29 20:59:01', '2019-05-29 20:59:01'),
(732, 'Glass - Bend Glass', 'glass-bend-glass', 7, NULL, '2019-05-29 20:59:09', '2019-05-29 20:59:09'),
(733, 'Glass - Motorcar, Plate,Window etc', 'glass-motorcar-platewindow-etc', 7, NULL, '2019-05-29 20:59:17', '2019-05-29 20:59:17'),
(734, 'Glass - Tempered Glass', 'glass-tempered-glass', 7, NULL, '2019-05-29 21:00:40', '2019-05-29 21:00:40'),
(735, 'Glass Bevelling', 'glass-bevelling', 7, NULL, '2019-05-29 21:00:51', '2019-05-29 21:00:51'),
(736, 'Glass Bottles & Closures', 'glass-bottles-closures', 7, NULL, '2019-05-29 21:01:00', '2019-05-29 21:01:00'),
(737, 'Glass Coating & Tinting', 'glass-coating-tinting', 7, NULL, '2019-05-29 21:01:09', '2019-05-29 21:01:09'),
(738, 'Glass Containers', 'glass-containers', 7, NULL, '2019-05-29 21:01:18', '2019-05-29 21:01:18'),
(739, 'Glassware - Retail', 'glassware-retail', 7, NULL, '2019-05-29 21:02:48', '2019-05-29 21:02:48'),
(740, 'Gloves - Domestic', 'gloves-domestic', 7, NULL, '2019-05-29 21:02:56', '2019-05-29 21:02:56'),
(741, 'Gloves - Work & Industrial', 'gloves-work-industrial', 7, NULL, '2019-05-29 21:03:06', '2019-05-29 21:03:06'),
(742, 'Gold Bridal Jewellery', 'gold-bridal-jewellery', 7, NULL, '2019-05-29 21:03:15', '2019-05-29 21:03:15'),
(743, 'Golf Clubs', 'golf-clubs', 7, NULL, '2019-05-29 21:03:25', '2019-05-29 21:03:25'),
(744, 'Golf Course Equipment', 'golf-course-equipment', 7, NULL, '2019-05-29 21:03:34', '2019-05-29 21:03:34'),
(745, 'GPS Navigation', 'gps-navigation', 7, NULL, '2019-05-29 21:03:43', '2019-05-29 21:03:43'),
(746, 'Granulators', 'granulators', 7, NULL, '2019-05-29 21:03:55', '2019-05-29 21:03:55'),
(747, 'Graphic Designers', 'graphic-designers', 7, NULL, '2019-05-29 21:04:03', '2019-05-29 21:04:03'),
(748, 'Grass', 'grass', 7, NULL, '2019-05-29 21:04:13', '2019-05-29 21:04:13'),
(749, 'Greeting Cards - Retail', 'greeting-cards-retail', 7, NULL, '2019-05-29 21:04:22', '2019-05-29 21:04:22'),
(750, 'Greeting Cards -Wholesale & Manufacturers', 'greeting-cards-wholesale-manufacturers', 7, NULL, '2019-05-29 21:04:30', '2019-05-29 21:04:30'),
(751, 'Grinding Machines & Equipment', 'grinding-machines-equipment', 7, NULL, '2019-05-29 21:04:38', '2019-05-29 21:04:38'),
(752, 'Grinding Mills & Food Processing', 'grinding-mills-food-processing', 7, NULL, '2019-05-29 21:04:45', '2019-05-29 21:04:45'),
(753, 'Groceries - Retail', 'groceries-retail', 7, NULL, '2019-05-29 21:04:53', '2019-05-29 21:04:53'),
(754, 'Groceries - Retail & Wholesale', 'groceries-retail-wholesale', 7, NULL, '2019-05-29 21:05:02', '2019-05-29 21:05:02'),
(755, 'Guest Houses', 'guest-houses', 7, NULL, '2019-05-29 21:05:13', '2019-05-29 21:05:13'),
(756, 'Gunny Bags', 'gunny-bags', 7, NULL, '2019-05-29 21:05:22', '2019-05-29 21:05:22'),
(757, 'Guns & Gunsmith', 'guns-gunsmith', 7, NULL, '2019-05-29 21:05:30', '2019-05-29 21:05:30'),
(758, 'Gutters', 'gutters', 7, NULL, '2019-05-29 21:05:38', '2019-05-29 21:05:38'),
(759, 'Gymnasium', 'gymnasium', 7, NULL, '2019-05-29 21:05:47', '2019-05-29 21:05:47'),
(760, 'Gymnasium - Equipment & Supplies', 'gymnasium-equipment-supplies', 7, NULL, '2019-05-29 21:05:56', '2019-05-29 21:05:56'),
(761, 'Zippers - Manufacturers & Distributors', 'zippers-manufacturers-distributors', 26, NULL, '2019-05-29 21:10:02', '2019-05-29 21:10:02'),
(762, 'Zoological Gardens', 'zoological-gardens', 26, NULL, '2019-05-29 21:10:12', '2019-05-29 21:10:12'),
(763, 'Zipper Mfg. & Distributors', 'zipper-mfg-distributors', 26, NULL, '2019-05-29 21:10:28', '2019-05-29 21:10:28'),
(764, 'Zoo', 'zoo', 26, NULL, '2019-05-29 21:10:40', '2019-05-29 21:10:40'),
(765, 'Zinc Ingots', 'zinc-ingots', 26, NULL, '2019-05-29 21:11:06', '2019-05-29 21:11:06'),
(766, 'Zinc Oxide', 'zinc-oxide', 26, NULL, '2019-05-29 21:11:18', '2019-05-29 21:11:18'),
(767, 'Zip Lock Plastic Bags', 'zip-lock-plastic-bags', 26, NULL, '2019-05-29 21:11:28', '2019-05-29 21:11:28'),
(768, 'Zipper All Sorts', 'zipper-all-sorts', 26, NULL, '2019-05-29 21:11:37', '2019-05-29 21:11:37'),
(769, 'Zipper Manufacturing Machineries', 'zipper-manufacturing-machineries', 26, NULL, '2019-05-29 21:11:49', '2019-05-29 21:11:49'),
(770, 'Zip Fastener', 'zip-fastener', 26, NULL, '2019-05-29 21:11:57', '2019-05-29 21:11:57'),
(771, 'X-Ray Apparatus & Supplies', 'x-ray-apparatus-supplies', 24, NULL, '2019-05-29 21:12:23', '2019-05-29 21:12:23'),
(772, 'X-Ray Centres', 'x-ray-centres', 24, NULL, '2019-05-29 21:12:32', '2019-05-29 21:12:32'),
(773, 'X-Ray Equipment & Supplies', 'x-ray-equipment-supplies', 24, NULL, '2019-05-29 21:12:47', '2019-05-29 21:12:47'),
(774, 'X-Ray Films Manufacturers', 'x-ray-films-manufacturers', 24, NULL, '2019-05-29 21:13:00', '2019-05-29 21:13:00'),
(775, 'X- Ray Chemicals', 'x-ray-chemicals', 24, NULL, '2019-05-29 21:13:09', '2019-05-29 21:13:09'),
(776, 'Umbrellas - Wholesale & Manufacturers', 'umbrellas-wholesale-manufacturers', 21, NULL, '2019-05-29 21:13:33', '2019-05-29 21:13:33'),
(777, 'Unclassified', 'unclassified', 21, NULL, '2019-05-29 21:13:43', '2019-05-29 21:13:43'),
(778, 'Underwear - Men s -Wholesale & Manufacturers', 'underwear-men-s-wholesale-manufacturers', 21, NULL, '2019-05-29 21:13:53', '2019-05-29 21:13:53'),
(779, 'Underwear - Women s -Wholesale & Manufacturers', 'underwear-women-s-wholesale-manufacturers', 21, NULL, '2019-05-29 21:14:04', '2019-05-29 21:14:04'),
(780, 'Uniforms', 'uniforms', 21, NULL, '2019-05-29 21:14:13', '2019-05-29 21:14:13'),
(781, 'Universities', 'universities', 21, NULL, '2019-05-29 21:14:23', '2019-05-29 21:14:23'),
(782, 'Upholsterers', 'upholsterers', 21, NULL, '2019-05-29 21:14:34', '2019-05-29 21:14:34'),
(783, 'Upholsterers - Automobile', 'upholsterers-automobile', 21, NULL, '2019-05-29 21:14:49', '2019-05-29 21:14:49'),
(784, 'Urban Councils', 'urban-councils', 21, NULL, '2019-05-29 21:14:58', '2019-05-29 21:14:58'),
(785, 'Used Computers/Laptop Dealers', 'used-computerslaptop-dealers', 21, NULL, '2019-05-29 21:15:08', '2019-05-29 21:15:08'),
(786, 'Quality Management Services', 'quality-management-services', 17, NULL, '2019-05-29 21:15:40', '2019-05-29 21:15:40'),
(787, 'Quantity Surveyors', 'quantity-surveyors', 17, NULL, '2019-05-29 21:15:50', '2019-05-29 21:15:50'),
(788, 'Yachting & Boating', 'yachting-boating', 25, NULL, '2019-05-29 21:16:09', '2019-05-29 21:16:09'),
(789, 'Yarn - Wholesale & Manufacturers', 'yarn-wholesale-manufacturers', 25, NULL, '2019-05-29 21:16:19', '2019-05-29 21:16:19'),
(790, 'Yoga / Meditation Centers', 'yoga-meditation-centers', 25, NULL, '2019-05-29 21:16:30', '2019-05-29 21:16:30'),
(791, 'Yoga Institute', 'yoga-institute', 25, NULL, '2019-05-29 21:16:38', '2019-05-29 21:16:38'),
(792, 'Yoghurt', 'yoghurt', 25, NULL, '2019-05-29 21:16:46', '2019-05-29 21:16:46'),
(793, 'Yarn shop', 'yarn-shop', 25, NULL, '2019-05-29 21:16:55', '2019-05-29 21:16:55'),
(794, 'Yarn Dyeing', 'yarn-dyeing', 25, NULL, '2019-05-29 21:17:03', '2019-05-29 21:17:03'),
(795, 'Yarn Dyeing Machines & Apparatus', 'yarn-dyeing-machines-apparatus', 25, NULL, '2019-05-29 21:17:11', '2019-05-29 21:17:11'),
(796, 'Yarn Merchants', 'yarn-merchants', 25, NULL, '2019-05-29 21:17:20', '2019-05-29 21:17:20'),
(797, 'Yarn Processing Machinery', 'yarn-processing-machinery', 25, NULL, '2019-05-29 21:17:29', '2019-05-29 21:17:29'),
(798, 'Yarn Processor', 'yarn-processor', 25, NULL, '2019-05-29 21:17:38', '2019-05-29 21:17:38'),
(799, 'Yarn Steaming & Moistening Machines', 'yarn-steaming-moistening-machines', 25, NULL, '2019-05-29 21:17:50', '2019-05-29 21:17:50'),
(800, 'Yarn Waste', 'yarn-waste', 25, NULL, '2019-05-29 21:17:59', '2019-05-29 21:17:59'),
(801, 'Yarns & Threads', 'yarns-threads', 25, NULL, '2019-05-29 21:18:08', '2019-05-29 21:18:08'),
(802, 'Yoga Centers', 'yoga-centers', 25, NULL, '2019-05-29 21:18:16', '2019-05-29 21:18:16'),
(803, 'Racking & Storage Systems', 'racking-storage-systems', 18, NULL, '2019-05-30 07:27:25', '2019-05-30 07:27:25'),
(804, 'Radiation Detection Equipment', 'radiation-detection-equipment', 18, NULL, '2019-05-30 07:27:43', '2019-05-30 07:27:43'),
(805, 'Radiators & Radiator Repairing', 'radiators-radiator-repairing', 18, NULL, '2019-05-30 07:27:56', '2019-05-30 07:27:56'),
(806, 'Radio Communication Equipment & Systems', 'radio-communication-equipment-systems', 18, NULL, '2019-05-30 07:28:11', '2019-05-30 07:28:11'),
(807, 'Radio Parts & Supplies -Wholesale & Manufacturers', 'radio-parts-supplies-wholesale-manufacturers', 18, NULL, '2019-05-30 07:28:26', '2019-05-30 07:28:26'),
(808, 'Radio Stations', 'radio-stations', 18, NULL, '2019-05-30 07:28:35', '2019-05-30 07:28:35'),
(809, 'Railway Stations', 'railway-stations', 18, NULL, '2019-05-30 07:28:46', '2019-05-30 07:28:46'),
(810, 'Real Estate Developers ', 'real-estate-developers', 18, NULL, '2019-05-30 07:28:56', '2019-05-30 07:28:56'),
(811, 'Real Estates', 'real-estates', 18, NULL, '2019-05-30 07:29:06', '2019-05-30 07:29:06'),
(812, 'Reception Halls', 'reception-halls', 18, NULL, '2019-05-30 07:29:15', '2019-05-30 07:29:15'),
(813, 'Recording Studio', 'recording-studio', 18, NULL, '2019-05-30 07:29:35', '2019-05-30 07:29:35'),
(814, 'Records Management Services', 'records-management-services', 18, NULL, '2019-05-30 07:29:44', '2019-05-30 07:29:44'),
(815, 'Recruiting Agencies', 'recruiting-agencies', 18, NULL, '2019-05-30 07:29:57', '2019-05-30 07:29:57'),
(816, 'Recycling Centres', 'recycling-centres', 18, NULL, '2019-05-30 07:30:06', '2019-05-30 07:30:06'),
(817, 'Refractories', 'refractories', 18, NULL, '2019-05-30 07:30:15', '2019-05-30 07:30:15'),
(818, 'Refrigeration Equipment -Commercial & Industrial', 'refrigeration-equipment-commercial-industrial', 18, NULL, '2019-05-30 07:30:24', '2019-05-30 07:30:24'),
(819, 'Refrigeration Equipment -Parts & Supplies Wholesale & Manufacturers', 'refrigeration-equipment-parts-supplies-wholesale-manufacturers', 18, NULL, '2019-05-30 07:30:35', '2019-05-30 07:30:35'),
(820, 'Refrigeration Services - Commercial & Industrial', 'refrigeration-services-commercial-industrial', 18, NULL, '2019-05-30 07:30:44', '2019-05-30 07:30:44'),
(821, 'Refrigerators & Deep Freezers', 'refrigerators-deep-freezers', 18, NULL, '2019-05-30 07:30:54', '2019-05-30 07:30:54'),
(822, 'Refrigerators & Deep Freezers -Servicing', 'refrigerators-deep-freezers-servicing', 18, NULL, '2019-05-30 07:31:05', '2019-05-30 07:31:05'),
(823, 'Refrigerators & Deep Freezers -Supplies & Spare Parts - Retail', 'refrigerators-deep-freezers-supplies-spare-parts-retail', 18, NULL, '2019-05-30 07:31:13', '2019-05-30 07:31:13'),
(824, 'Religious Goods', 'religious-goods', 18, NULL, '2019-05-30 07:31:24', '2019-05-30 07:31:24'),
(825, 'Religious Organizations', 'religious-organizations', 18, NULL, '2019-05-30 07:31:33', '2019-05-30 07:31:33'),
(826, 'Removals & Relocations', 'removals-relocations', 18, NULL, '2019-05-30 07:31:46', '2019-05-30 07:31:46'),
(827, 'Renewable Energy - Equipment & Suppliers', 'renewable-energy-equipment-suppliers', 18, NULL, '2019-05-30 07:31:55', '2019-05-30 07:31:55'),
(828, 'Rent-A-Car Services', 'rent-a-car-services', 18, NULL, '2019-05-30 07:32:07', '2019-05-30 07:32:07'),
(829, 'Research - Dcientific Enviornment', 'research-dcientific-enviornment', 18, NULL, '2019-05-30 07:32:17', '2019-05-30 07:32:17'),
(830, 'Research Institute', 'research-institute', 18, NULL, '2019-05-30 07:32:27', '2019-05-30 07:32:27'),
(831, 'Residencies', 'residencies', 18, NULL, '2019-05-30 07:32:35', '2019-05-30 07:32:35'),
(832, 'Resorts', 'resorts', 18, NULL, '2019-05-30 07:32:45', '2019-05-30 07:32:45'),
(833, 'Restaurants-Arabic', 'restaurants-arabic', 18, NULL, '2019-05-30 07:33:16', '2019-05-30 07:33:16'),
(834, 'Restaurants-Chinese', 'restaurants-chinese', 18, NULL, '2019-05-30 07:33:26', '2019-05-30 07:33:26'),
(835, 'Restaurants-German', 'restaurants-german', 18, NULL, '2019-05-30 07:33:36', '2019-05-30 07:33:36'),
(836, 'Restaurants-Indian', 'restaurants-indian', 18, NULL, '2019-05-30 07:33:53', '2019-05-30 07:33:53'),
(837, 'Restaurants-Italian', 'restaurants-italian', 18, NULL, '2019-05-30 07:34:02', '2019-05-30 07:34:02'),
(838, 'Restaurants-Japanese', 'restaurants-japanese', 18, NULL, '2019-05-30 07:34:12', '2019-05-30 07:34:12'),
(839, 'Restaurants-Mexican', 'restaurants-mexican', 18, NULL, '2019-05-30 07:34:21', '2019-05-30 07:34:21'),
(840, 'Restaurants-Sea Food', 'restaurants-sea-food', 18, NULL, '2019-05-30 07:34:31', '2019-05-30 07:34:31'),
(841, 'Restaurants-Thai', 'restaurants-thai', 18, NULL, '2019-05-30 07:34:41', '2019-05-30 07:34:41'),
(842, 'Restaurants-Vegetarian', 'restaurants-vegetarian', 18, NULL, '2019-05-30 07:34:54', '2019-05-30 07:34:54'),
(843, 'Restaurants-Western', 'restaurants-western', 18, NULL, '2019-05-30 07:35:04', '2019-05-30 07:35:04'),
(844, 'Rice Mill Machinery & Spares', 'rice-mill-machinery-spares', 18, NULL, '2019-05-30 07:35:15', '2019-05-30 07:35:15'),
(845, 'Rice Mills', 'rice-mills', 18, NULL, '2019-05-30 07:35:25', '2019-05-30 07:35:25'),
(846, 'Road Building Equipment', 'road-building-equipment', 18, NULL, '2019-05-30 07:35:38', '2019-05-30 07:35:38'),
(847, 'Robes - Wholesale & Manufacturers', 'robes-wholesale-manufacturers', 18, NULL, '2019-05-30 07:35:49', '2019-05-30 07:35:49'),
(848, 'Rock Climbing', 'rock-climbing', 18, NULL, '2019-05-30 07:36:00', '2019-05-30 07:36:00'),
(849, 'Roller Shutter Parts', 'roller-shutter-parts', 18, NULL, '2019-05-30 07:36:09', '2019-05-30 07:36:09'),
(850, 'Roller Shutters', 'roller-shutters', 18, NULL, '2019-05-30 07:36:19', '2019-05-30 07:36:19'),
(851, 'Roofing Contractors', 'roofing-contractors', 18, NULL, '2019-05-30 07:36:32', '2019-05-30 07:36:32'),
(852, 'Roofing Materials', 'roofing-materials', 18, NULL, '2019-05-30 07:36:41', '2019-05-30 07:36:41'),
(853, 'Roofing Tiles', 'roofing-tiles', 18, NULL, '2019-05-30 07:36:50', '2019-05-30 07:36:50'),
(854, 'Rubber - Compound', 'rubber-compound', 18, NULL, '2019-05-30 07:37:05', '2019-05-30 07:37:05'),
(855, 'Rubber - Recycled', 'rubber-recycled', 18, NULL, '2019-05-30 07:37:14', '2019-05-30 07:37:14'),
(856, 'Rubber Brokers & Dealers', 'rubber-brokers-dealers', 18, NULL, '2019-05-30 07:37:24', '2019-05-30 07:37:24'),
(857, 'Rubber Crudes', 'rubber-crudes', 18, NULL, '2019-05-30 07:37:35', '2019-05-30 07:37:35'),
(858, 'Rubber Exporters', 'rubber-exporters', 18, NULL, '2019-05-30 07:38:10', '2019-05-30 07:38:10'),
(859, 'Rubber Processing Machinery', 'rubber-processing-machinery', 18, NULL, '2019-05-30 07:38:19', '2019-05-30 07:38:19'),
(860, 'Rubber Solution', 'rubber-solution', 18, NULL, '2019-05-30 07:38:40', '2019-05-30 07:38:40'),
(861, 'Rugger Clubs', 'rugger-clubs', 18, NULL, '2019-05-30 07:38:51', '2019-05-30 07:38:51'),
(862, 'Vaastu Consultancies', 'vaastu-consultancies', 22, NULL, '2019-05-30 07:39:40', '2019-05-30 07:39:40'),
(863, 'Vaccum Cleaners', 'vaccum-cleaners', 22, NULL, '2019-05-30 07:39:51', '2019-05-30 07:39:51'),
(864, 'Vaccum Cleaners - Automobile', 'vaccum-cleaners-automobile', 22, NULL, '2019-05-30 07:40:01', '2019-05-30 07:40:01'),
(865, 'Vacuum Cleaners -Repairing', 'vacuum-cleaners-repairing', 22, NULL, '2019-05-30 07:40:11', '2019-05-30 07:40:11'),
(866, 'Vacuum Pumps', 'vacuum-pumps', 22, NULL, '2019-05-30 07:40:22', '2019-05-30 07:40:22'),
(867, 'Vegetables Shops', 'vegetables-shops', 22, NULL, '2019-05-30 07:40:37', '2019-05-30 07:40:37'),
(868, 'Vehicle Emission Testing Centres', 'vehicle-emission-testing-centres', 22, NULL, '2019-05-30 07:40:47', '2019-05-30 07:40:47'),
(869, 'Vehicle Hire', 'vehicle-hire', 22, NULL, '2019-05-30 07:40:56', '2019-05-30 07:40:56'),
(870, 'Venetian Blinds - Retail', 'venetian-blinds-retail', 22, NULL, '2019-05-30 07:41:08', '2019-05-30 07:41:08'),
(871, 'Ventilating Equipment', 'ventilating-equipment', 22, NULL, '2019-05-30 07:41:17', '2019-05-30 07:41:17'),
(872, 'Venture Capital', 'venture-capital', 22, NULL, '2019-05-30 07:41:27', '2019-05-30 07:41:27'),
(873, 'Veterinarians', 'veterinarians', 22, NULL, '2019-05-30 07:41:41', '2019-05-30 07:41:41'),
(874, 'Veterinary Equipment & Supplies', 'veterinary-equipment-supplies', 22, NULL, '2019-05-30 07:42:12', '2019-05-30 07:42:12'),
(875, 'Veterinary Supplies', 'veterinary-supplies', 22, NULL, '2019-05-30 07:42:21', '2019-05-30 07:42:21'),
(876, 'Video Camera - Repair & Service', 'video-camera-repair-service', 22, NULL, '2019-05-30 07:42:32', '2019-05-30 07:42:32'),
(877, 'Video Conferencing', 'video-conferencing', 22, NULL, '2019-05-30 07:42:42', '2019-05-30 07:42:42'),
(878, 'Video Door Phone', 'video-door-phone', 22, NULL, '2019-05-30 07:42:51', '2019-05-30 07:42:51'),
(879, 'Video Filming - Wedding, Parties etc', 'video-filming-wedding-parties-etc', 22, NULL, '2019-05-30 07:43:01', '2019-05-30 07:43:01'),
(880, 'Video Productions', 'video-productions', 22, NULL, '2019-05-30 07:43:10', '2019-05-30 07:43:10'),
(881, 'Video Tape Duplicating & Recording', 'video-tape-duplicating-recording', 22, NULL, '2019-05-30 07:43:19', '2019-05-30 07:43:19'),
(882, 'Video Tape Cleaning Services', 'video-tape-cleaning-services', 22, NULL, '2019-05-30 07:43:28', '2019-05-30 07:43:28'),
(883, 'Video Tape Recorders - Repairing & Services', 'video-tape-recorders-repairing-services', 22, NULL, '2019-05-30 07:43:39', '2019-05-30 07:43:39'),
(884, 'Video Tape Recording & Duplicating Services', 'video-tape-recording-duplicating-services', 22, NULL, '2019-05-30 07:43:48', '2019-05-30 07:43:48'),
(885, 'Video Tapes Prerecorded/Films & Teledramas', 'video-tapes-prerecordedfilms-teledramas', 22, NULL, '2019-05-30 07:43:57', '2019-05-30 07:43:57'),
(886, 'Videographers', 'videographers', 22, NULL, '2019-05-30 07:44:07', '2019-05-30 07:44:07'),
(887, 'Visa Consultancy Services', 'visa-consultancy-services', 22, NULL, '2019-05-30 07:44:15', '2019-05-30 07:44:15'),
(888, 'Visa Services', 'visa-services', 22, NULL, '2019-05-30 07:44:28', '2019-05-30 07:44:28'),
(889, 'Hair Dresser', 'hair-dresser', 8, NULL, '2019-05-30 07:45:01', '2019-05-30 07:45:01'),
(890, 'Hair Growing Extract & Replace', 'hair-growing-extract-replace', 8, NULL, '2019-05-30 07:45:11', '2019-05-30 07:45:11'),
(891, 'Hair Oil', 'hair-oil', 8, NULL, '2019-05-30 07:45:21', '2019-05-30 07:45:21'),
(892, 'Hajj Foundation / Agencies', 'hajj-foundation-agencies', 8, NULL, '2019-05-30 07:45:31', '2019-05-30 07:45:31'),
(893, 'Hand Loom Products/Mfg', 'hand-loom-productsmfg', 8, NULL, '2019-05-30 07:45:41', '2019-05-30 07:45:41'),
(894, 'Handicrafts Mfrs. & Exporters', 'handicrafts-mfrs-exporters', 8, NULL, '2019-05-30 07:45:51', '2019-05-30 07:45:51'),
(895, 'Handloom Textile', 'handloom-textile', 8, NULL, '2019-05-30 07:45:59', '2019-05-30 07:45:59'),
(896, 'Hardboard Mfg.', 'hardboard-mfg', 8, NULL, '2019-05-30 07:46:08', '2019-05-30 07:46:08'),
(897, 'Hardware & Machinery', 'hardware-machinery', 8, NULL, '2019-05-30 07:46:18', '2019-05-30 07:46:18'),
(898, 'Hat, Cap, Uniform Assm./Dist.', 'hat-cap-uniform-assmdist', 8, NULL, '2019-05-30 07:46:27', '2019-05-30 07:46:27'),
(899, 'Hatchery Products', 'hatchery-products', 8, NULL, '2019-05-30 07:46:38', '2019-05-30 07:46:38'),
(900, 'Health & Fitness Center', 'health-fitness-center', 8, NULL, '2019-05-30 07:46:47', '2019-05-30 07:46:47'),
(901, 'Healthcare Services', 'healthcare-services', 8, NULL, '2019-05-30 07:46:56', '2019-05-30 07:46:56'),
(902, 'Herbal Products', 'herbal-products', 8, NULL, '2019-05-30 07:47:06', '2019-05-30 07:47:06'),
(903, 'High Voltage Switch Gear', 'high-voltage-switch-gear', 8, NULL, '2019-05-30 07:47:14', '2019-05-30 07:47:14'),
(904, 'Hologram Manufacturer', 'hologram-manufacturer', 8, NULL, '2019-05-30 07:47:24', '2019-05-30 07:47:24'),
(905, 'Home Healthcare Services', 'home-healthcare-services', 8, NULL, '2019-05-30 07:47:36', '2019-05-30 07:47:36'),
(906, 'Homeo Medicine Manufacturer', 'homeo-medicine-manufacturer', 8, NULL, '2019-05-30 07:47:44', '2019-05-30 07:47:44'),
(907, 'Homeopathic Medicine', 'homeopathic-medicine', 8, NULL, '2019-05-30 07:47:54', '2019-05-30 07:47:54'),
(908, 'Homeopathic Pharmacy', 'homeopathic-pharmacy', 8, NULL, '2019-05-30 07:48:03', '2019-05-30 07:48:03'),
(909, 'Hosiery Industries ', 'hosiery-industries', 8, NULL, '2019-05-30 07:48:15', '2019-05-30 07:48:15');
INSERT INTO `categories` (`id`, `name`, `slug`, `alphabate_id`, `icon`, `created_at`, `updated_at`) VALUES
(910, 'Hospital Eqpt./Appliances', 'hospital-eqptappliances', 8, NULL, '2019-05-30 07:48:26', '2019-05-30 07:48:26'),
(911, 'Hospital', 'hospital', 8, NULL, '2019-05-30 07:48:38', '2019-05-30 07:48:38'),
(912, 'Hospital Specialized', 'hospital-specialized', 8, NULL, '2019-05-30 07:48:47', '2019-05-30 07:48:47'),
(913, 'Hostel', 'hostel', 8, NULL, '2019-05-30 07:48:57', '2019-05-30 07:48:57'),
(914, 'Hotel / Residential', 'hotel-residential', 8, NULL, '2019-05-30 07:49:07', '2019-05-30 07:49:07'),
(915, 'Hotel Management Training Inst', 'hotel-management-training-inst', 8, NULL, '2019-05-30 07:49:17', '2019-05-30 07:49:17'),
(916, 'House Keeping Service', 'house-keeping-service', 8, NULL, '2019-05-30 07:49:26', '2019-05-30 07:49:26'),
(917, 'House Rental Service', 'house-rental-service', 8, NULL, '2019-05-30 07:49:36', '2019-05-30 07:49:36'),
(918, 'Human Settlement Consultant', 'human-settlement-consultant', 8, NULL, '2019-05-30 07:49:46', '2019-05-30 07:49:46'),
(919, 'Hydraulic Eqpt. & Press', 'hydraulic-eqpt-press', 8, NULL, '2019-05-30 07:49:54', '2019-05-30 07:49:54'),
(920, 'High Fidelity & Stereophonic Equipment - Dealers & Service', 'high-fidelity-stereophonic-equipment-dealers-service', 8, NULL, '2019-05-30 07:50:03', '2019-05-30 07:50:03'),
(921, 'Holiday Resort', 'holiday-resort', 8, NULL, '2019-05-30 07:50:29', '2019-05-30 07:50:29'),
(922, 'Holograms', 'holograms', 8, NULL, '2019-05-30 07:50:40', '2019-05-30 07:50:40'),
(923, 'Home Appliances', 'home-appliances', 8, NULL, '2019-05-30 07:50:57', '2019-05-30 07:50:57'),
(924, 'Home Builders', 'home-builders', 8, NULL, '2019-05-30 07:51:05', '2019-05-30 07:51:05'),
(925, 'Home Nursing Services', 'home-nursing-services', 8, NULL, '2019-05-30 07:51:14', '2019-05-30 07:51:14'),
(926, 'Homeopathy', 'homeopathy', 8, NULL, '2019-05-30 07:51:24', '2019-05-30 07:51:24'),
(927, 'Homes for Destitute Elders', 'homes-for-destitute-elders', 8, NULL, '2019-05-30 07:51:33', '2019-05-30 07:51:33'),
(928, 'Homoeopathic Physicians', 'homoeopathic-physicians', 8, NULL, '2019-05-30 07:51:46', '2019-05-30 07:51:46'),
(929, 'Honeymoon & Tours Packages', 'honeymoon-tours-packages', 8, NULL, '2019-05-30 07:51:54', '2019-05-30 07:51:54'),
(930, 'Horse Drawn Carriage', 'horse-drawn-carriage', 8, NULL, '2019-05-30 07:52:04', '2019-05-30 07:52:04'),
(931, 'Hose & Tubing - Rubber', 'hose-tubing-rubber', 8, NULL, '2019-05-30 07:52:15', '2019-05-30 07:52:15'),
(932, 'Hose & Tubing - Rubber -Automobile', 'hose-tubing-rubber-automobile', 8, NULL, '2019-05-30 07:52:24', '2019-05-30 07:52:24'),
(933, 'Hospital - Mother & Baby Care', 'hospital-mother-baby-care', 8, NULL, '2019-05-30 07:52:33', '2019-05-30 07:52:33'),
(934, 'Hospital Equipment & Supplies', 'hospital-equipment-supplies', 8, NULL, '2019-05-30 07:52:42', '2019-05-30 07:52:42'),
(935, 'Hospital Equipment & Supplies - Wholesale & Manufacturers', 'hospital-equipment-supplies-wholesale-manufacturers', 8, NULL, '2019-05-30 07:52:52', '2019-05-30 07:52:52'),
(936, 'Hospitals - Private', 'hospitals-private', 8, NULL, '2019-05-30 07:53:03', '2019-05-30 07:53:03'),
(937, 'Hospitals-Government', 'hospitals-government', 8, NULL, '2019-05-30 07:53:13', '2019-05-30 07:53:13'),
(938, 'Hot Air Ballooning', 'hot-air-ballooning', 8, NULL, '2019-05-30 07:53:22', '2019-05-30 07:53:22'),
(939, 'Hot Stamping Foil', 'hot-stamping-foil', 8, NULL, '2019-05-30 07:53:32', '2019-05-30 07:53:32'),
(940, 'Hot Water Heaters & Gayzers', 'hot-water-heaters-gayzers', 8, NULL, '2019-05-30 07:53:40', '2019-05-30 07:53:40'),
(941, 'Hot Water Pipes & Fittings', 'hot-water-pipes-fittings', 8, NULL, '2019-05-30 07:53:49', '2019-05-30 07:53:49'),
(942, 'Hairclips', 'hairclips', 8, NULL, '2019-05-30 07:53:59', '2019-05-30 07:53:59'),
(943, 'Handicrafts', 'handicrafts', 8, NULL, '2019-05-30 07:54:09', '2019-05-30 07:54:09'),
(944, 'Handloom Textiles', 'handloom-textiles', 8, NULL, '2019-05-30 07:54:19', '2019-05-30 07:54:19'),
(945, 'Handlooms', 'handlooms', 8, NULL, '2019-05-30 07:54:28', '2019-05-30 07:54:28'),
(946, 'Hardware - Retail', 'hardware-retail', 8, NULL, '2019-05-30 07:54:40', '2019-05-30 07:54:40'),
(947, 'Hardware - Wholesale & Manufacturers', 'hardware-wholesale-manufacturers', 8, NULL, '2019-05-30 07:54:51', '2019-05-30 07:54:51'),
(948, 'Hardware - Wholesale & Retail', 'hardware-wholesale-retail', 8, NULL, '2019-05-30 07:55:05', '2019-05-30 07:55:05'),
(949, 'Head Hunting Consultants', 'head-hunting-consultants', 8, NULL, '2019-05-30 07:55:14', '2019-05-30 07:55:14'),
(950, 'Health Care', 'health-care', 8, NULL, '2019-05-30 07:55:26', '2019-05-30 07:55:26'),
(951, 'Health Care - Mobile', 'health-care-mobile', 8, NULL, '2019-05-30 07:55:35', '2019-05-30 07:55:35'),
(952, 'Heat Exchangers', 'heat-exchangers', 8, NULL, '2019-05-30 07:55:46', '2019-05-30 07:55:46'),
(953, 'Heavy Machine and Technical Training', 'heavy-machine-and-technical-training', 8, NULL, '2019-05-30 07:55:58', '2019-05-30 07:55:58'),
(954, 'Helicopter & Airlines', 'helicopter-airlines', 8, NULL, '2019-05-30 07:56:11', '2019-05-30 07:56:11'),
(955, 'Helmets & Protective Head Gears', 'helmets-protective-head-gears', 8, NULL, '2019-05-30 07:56:20', '2019-05-30 07:56:20'),
(956, 'Herbal Plantations', 'herbal-plantations', 8, NULL, '2019-05-30 07:56:29', '2019-05-30 07:56:29'),
(957, 'Herbal Products - Drinks', 'herbal-products-drinks', 8, NULL, '2019-05-30 07:56:41', '2019-05-30 07:56:41'),
(958, 'Herbal Products - Facial Pack', 'herbal-products-facial-pack', 8, NULL, '2019-05-30 07:57:02', '2019-05-30 07:57:02'),
(959, 'Herbal Products - Hair Oil etc', 'herbal-products-hair-oil-etc', 8, NULL, '2019-05-30 07:57:11', '2019-05-30 07:57:11'),
(960, 'Herbal Products - Mouthwash', 'herbal-products-mouthwash', 8, NULL, '2019-05-30 07:57:20', '2019-05-30 07:57:20'),
(961, 'Herbal Products - Paper Tissues', 'herbal-products-paper-tissues', 8, NULL, '2019-05-30 07:57:29', '2019-05-30 07:57:29'),
(962, 'Herbal Products - Perfumes', 'herbal-products-perfumes', 8, NULL, '2019-05-30 07:57:39', '2019-05-30 07:57:39'),
(963, 'Herbal Products - Shampoo', 'herbal-products-shampoo', 8, NULL, '2019-05-30 07:57:50', '2019-05-30 07:57:50'),
(964, 'Herbal Products - Soap', 'herbal-products-soap', 8, NULL, '2019-05-30 07:57:59', '2019-05-30 07:57:59'),
(965, 'Herbal Products - Toothpaste / Powder', 'herbal-products-toothpaste-powder', 8, NULL, '2019-05-30 07:58:09', '2019-05-30 07:58:09'),
(966, 'Herbal Products -Manufacturers & Wholesale', 'herbal-products-manufacturers-wholesale', 8, NULL, '2019-05-30 07:58:19', '2019-05-30 07:58:19'),
(967, 'Herbal Products -Tea', 'herbal-products-tea', 8, NULL, '2019-05-30 07:58:29', '2019-05-30 07:58:29'),
(968, 'Herbal Products Importers/ Exporters', 'herbal-products-importers-exporters', 8, NULL, '2019-05-30 07:58:38', '2019-05-30 07:58:38'),
(969, 'Herbal Products- Balms', 'herbal-products-balms', 8, NULL, '2019-05-30 07:58:47', '2019-05-30 07:58:47'),
(970, 'Hotel & Motel Equipment & Supplies', 'hotel-motel-equipment-supplies', 8, NULL, '2019-05-30 07:59:16', '2019-05-30 07:59:16'),
(971, 'Janitorial Services', 'janitorial-services', 10, NULL, '2019-05-30 08:01:30', '2019-05-30 08:01:30'),
(972, 'Janitors Supplies', 'janitors-supplies', 10, NULL, '2019-05-30 08:01:39', '2019-05-30 08:01:39'),
(973, 'Jet-Skiing', 'jet-skiing', 10, NULL, '2019-05-30 08:01:48', '2019-05-30 08:01:48'),
(974, 'Jewellers & Pawn Brokers', 'jewellers-pawn-brokers', 10, NULL, '2019-05-30 08:02:01', '2019-05-30 08:02:01'),
(975, 'Jewellers - Manufacturers', 'jewellers-manufacturers', 10, NULL, '2019-05-30 08:02:11', '2019-05-30 08:02:11'),
(976, 'Jewellers - Retail', 'jewellers-retail', 10, NULL, '2019-05-30 08:02:21', '2019-05-30 08:02:21'),
(977, 'Jewellers - Wholesale', 'jewellers-wholesale', 10, NULL, '2019-05-30 08:02:31', '2019-05-30 08:02:31'),
(978, 'Jewellery & Gem Equipment & Accessories', 'jewellery-gem-equipment-accessories', 10, NULL, '2019-05-30 08:02:43', '2019-05-30 08:02:43'),
(979, 'Juice Station', 'juice-station', 10, NULL, '2019-05-30 08:02:52', '2019-05-30 08:02:52'),
(980, 'Justice of Peace', 'justice-of-peace', 10, NULL, '2019-05-30 08:03:02', '2019-05-30 08:03:02'),
(981, 'Jute Products', 'jute-products', 10, NULL, '2019-05-30 08:03:13', '2019-05-30 08:03:13'),
(982, 'Jewellery (Gold/Silver)', 'jewellery-goldsilver', 10, NULL, '2019-05-30 08:03:23', '2019-05-30 08:03:23'),
(983, 'Jewellery (Imitation)', 'jewellery-imitation', 10, NULL, '2019-05-30 08:03:32', '2019-05-30 08:03:32'),
(984, 'Jute (Raw) Exporter/Suppliers', 'jute-raw-exportersuppliers', 10, NULL, '2019-05-30 08:03:42', '2019-05-30 08:03:42'),
(985, 'Jute (Yarn & Twine)', 'jute-yarn-twine', 10, NULL, '2019-05-30 08:03:51', '2019-05-30 08:03:51'),
(986, 'Jute Goods (Manufacturer/Suppl', 'jute-goods-manufacturersuppl', 10, NULL, '2019-05-30 08:06:46', '2019-05-30 08:06:46'),
(987, 'Jute Industries', 'jute-industries', 10, NULL, '2019-05-30 08:06:57', '2019-05-30 08:06:57'),
(988, 'Jute Mills Machinery & Spares', 'jute-mills-machinery-spares', 10, NULL, '2019-05-30 08:07:07', '2019-05-30 08:07:07'),
(989, 'Office & Educational Stationer', 'office-educational-stationer', 15, NULL, '2019-05-30 08:19:03', '2019-05-30 08:19:03'),
(990, 'Office Automation & Communicat', 'office-automation-communicat', 15, NULL, '2019-05-30 08:19:13', '2019-05-30 08:19:13'),
(991, 'Office Machinery & Eqpt. ', 'office-machinery-eqpt', 15, NULL, '2019-05-30 08:19:31', '2019-05-30 08:19:31'),
(992, 'Oil & Gas Industries', 'oil-gas-industries', 15, NULL, '2019-05-30 08:19:42', '2019-05-30 08:19:42'),
(993, 'Old Age Home', 'old-age-home', 15, NULL, '2019-05-30 08:20:00', '2019-05-30 08:20:00'),
(994, 'Optical Stores', 'optical-stores', 15, NULL, '2019-05-30 08:20:10', '2019-05-30 08:20:10'),
(995, 'Overhead Traveling Cranes', 'overhead-traveling-cranes', 15, NULL, '2019-05-30 08:20:20', '2019-05-30 08:20:20'),
(996, 'Oxygen-Gas/Liquid', 'oxygen-gasliquid', 15, NULL, '2019-05-30 08:20:31', '2019-05-30 08:20:31'),
(997, 'Office - For Rent', 'office-for-rent', 15, NULL, '2019-05-30 08:20:42', '2019-05-30 08:20:42'),
(998, 'Office Equipment & Suppliers', 'office-equipment-suppliers', 15, NULL, '2019-05-30 08:20:53', '2019-05-30 08:20:53'),
(999, 'Office Furniture & Equipment', 'office-furniture-equipment', 15, NULL, '2019-05-30 08:21:03', '2019-05-30 08:21:03'),
(1000, 'Office Furniture & Equipment - Manufacturers & Wholesale', 'office-furniture-equipment-manufacturers-wholesale', 15, NULL, '2019-05-30 08:21:12', '2019-05-30 08:21:12'),
(1001, 'Office Furniture Repairs', 'office-furniture-repairs', 15, NULL, '2019-05-30 08:21:23', '2019-05-30 08:21:23'),
(1002, 'Office Machines', 'office-machines', 15, NULL, '2019-05-30 08:21:35', '2019-05-30 08:21:35'),
(1003, 'Oils - Essential', 'oils-essential', 15, NULL, '2019-05-30 08:21:47', '2019-05-30 08:21:47'),
(1004, 'Oils - Essential Cooking', 'oils-essential-cooking', 15, NULL, '2019-05-30 08:21:59', '2019-05-30 08:21:59'),
(1005, 'Optical Goods', 'optical-goods', 15, NULL, '2019-05-30 08:22:10', '2019-05-30 08:22:10'),
(1006, 'Opticians', 'opticians', 15, NULL, '2019-05-30 08:22:20', '2019-05-30 08:22:20'),
(1007, 'Opticians - Dispensing', 'opticians-dispensing', 15, NULL, '2019-05-30 08:22:33', '2019-05-30 08:22:33'),
(1008, 'Opticians Equipment & Supplies', 'opticians-equipment-supplies', 15, NULL, '2019-05-30 08:22:45', '2019-05-30 08:22:45'),
(1009, 'Opticians Ophthalmic (Optometrists)', 'opticians-ophthalmic-optometrists', 15, NULL, '2019-05-30 08:22:56', '2019-05-30 08:22:56'),
(1010, 'Orchid Growers', 'orchid-growers', 15, NULL, '2019-05-30 08:23:07', '2019-05-30 08:23:07'),
(1011, 'Organic Essential Oils', 'organic-essential-oils', 15, NULL, '2019-05-30 08:23:18', '2019-05-30 08:23:18'),
(1012, 'Orphanages', 'orphanages', 15, NULL, '2019-05-30 08:23:29', '2019-05-30 08:23:29'),
(1013, 'Orthopaedic Appliances', 'orthopaedic-appliances', 15, NULL, '2019-05-30 08:23:40', '2019-05-30 08:23:40'),
(1014, 'Other Foreign Representations', 'other-foreign-representations', 15, NULL, '2019-05-30 08:23:50', '2019-05-30 08:23:50'),
(1015, 'Out Word Bound Training', 'out-word-bound-training', 15, NULL, '2019-05-30 08:24:05', '2019-05-30 08:24:05'),
(1016, 'Ovens Industrial', 'ovens-industrial', 15, NULL, '2019-05-30 08:24:16', '2019-05-30 08:24:16'),
(1017, 'Overseas Education Representatives', 'overseas-education-representatives', 15, NULL, '2019-05-30 08:24:28', '2019-05-30 08:24:28'),
(1018, 'Ozone Generator', 'ozone-generator', 15, NULL, '2019-05-30 08:24:46', '2019-05-30 08:24:46'),
(1019, 'Nails & Tacks', 'nails-tacks', 14, NULL, '2019-05-30 08:26:07', '2019-05-30 08:26:07'),
(1020, 'Name Plates', 'name-plates', 14, NULL, '2019-05-30 08:26:18', '2019-05-30 08:26:18'),
(1021, 'National Park', 'national-park', 14, NULL, '2019-05-30 08:26:35', '2019-05-30 08:26:35'),
(1022, 'Navigation Aids & Equipment', 'navigation-aids-equipment', 14, NULL, '2019-05-30 08:26:46', '2019-05-30 08:26:46'),
(1023, 'Nescafe Machines On Hire', 'nescafe-machines-on-hire', 14, NULL, '2019-05-30 08:26:57', '2019-05-30 08:26:57'),
(1024, 'Nets Plastic', 'nets-plastic', 14, NULL, '2019-05-30 08:27:06', '2019-05-30 08:27:06'),
(1025, 'News Papers', 'news-papers', 14, NULL, '2019-05-30 08:27:17', '2019-05-30 08:27:17'),
(1026, 'Night Clubs', 'night-clubs', 14, NULL, '2019-05-30 08:27:28', '2019-05-30 08:27:28'),
(1027, 'Non Government Organisations', 'non-government-organisations', 15, NULL, '2019-05-30 08:27:41', '2019-05-30 08:27:41'),
(1028, 'Nurseries - Wholesale', 'nurseries-wholesale', 14, NULL, '2019-05-30 08:27:51', '2019-05-30 08:27:51'),
(1029, 'Nursing Homes', 'nursing-homes', 14, NULL, '2019-05-30 08:28:11', '2019-05-30 08:28:11'),
(1030, 'Needle Importer', 'needle-importer', 14, NULL, '2019-05-30 08:28:22', '2019-05-30 08:28:22'),
(1031, 'News Agency', 'news-agency', 14, NULL, '2019-05-30 08:28:31', '2019-05-30 08:28:31'),
(1032, 'News Magazine Fortnightly', 'news-magazine-fortnightly', 14, NULL, '2019-05-30 08:28:41', '2019-05-30 08:28:41'),
(1033, 'News Magazine Weekly', 'news-magazine-weekly', 14, NULL, '2019-05-30 08:28:51', '2019-05-30 08:28:51'),
(1034, 'News Paper Daily', 'news-paper-daily', 14, NULL, '2019-05-30 08:29:01', '2019-05-30 08:29:01'),
(1035, 'News Paper Online', 'news-paper-online', 14, NULL, '2019-05-30 08:29:12', '2019-05-30 08:29:12'),
(1036, 'News Print Mfrs./Exporters', 'news-print-mfrsexporters', 14, NULL, '2019-05-30 08:29:22', '2019-05-30 08:29:22'),
(1037, 'Non Ferrous Metal', 'non-ferrous-metal', 14, NULL, '2019-05-30 08:29:33', '2019-05-30 08:29:33'),
(1038, 'Nurseries', 'nurseries', 14, NULL, '2019-05-30 08:29:43', '2019-05-30 08:29:43'),
(1039, 'Nursing Training Institute', 'nursing-training-institute', 14, NULL, '2019-05-30 08:29:55', '2019-05-30 08:29:55'),
(1040, 'Karate Schools', 'karate-schools', 11, NULL, '2019-05-30 08:30:49', '2019-05-30 08:30:49'),
(1041, 'Kayaking & Canoeing', 'kayaking-canoeing', 11, NULL, '2019-05-30 08:31:02', '2019-05-30 08:31:02'),
(1042, 'Key Cutting', 'key-cutting', 11, NULL, '2019-05-30 08:31:11', '2019-05-30 08:31:11'),
(1043, 'Kids Clothing', 'kids-clothing', 11, NULL, '2019-05-30 08:31:21', '2019-05-30 08:31:21'),
(1044, 'Kitchen Cabinets & Equipment - Household', 'kitchen-cabinets-equipment-household', 11, NULL, '2019-05-30 08:31:31', '2019-05-30 08:31:31'),
(1045, 'Kitchen Equipment Supplies - Commercial', 'kitchen-equipment-supplies-commercial', 11, NULL, '2019-05-30 08:31:41', '2019-05-30 08:31:41'),
(1046, 'Kitchen Equipment & Supplies', 'kitchen-equipment-supplies', 11, NULL, '2019-05-30 08:31:53', '2019-05-30 08:31:53'),
(1047, 'Kitchen Units', 'kitchen-units', 11, NULL, '2019-05-30 08:32:03', '2019-05-30 08:32:03'),
(1048, 'Knitted Fabrics', 'knitted-fabrics', 11, NULL, '2019-05-30 08:32:17', '2019-05-30 08:32:17'),
(1049, 'Knitting Fabric Manufacturers', 'knitting-fabric-manufacturers', 11, NULL, '2019-05-30 08:32:26', '2019-05-30 08:32:26'),
(1050, 'Kitchen Cabinet', 'kitchen-cabinet', 11, NULL, '2019-05-30 08:32:36', '2019-05-30 08:32:36'),
(1051, 'Knitting Machines & Eqpt.', 'knitting-machines-eqpt', 11, NULL, '2019-05-30 08:32:45', '2019-05-30 08:32:45'),
(1052, 'Knitting Spare Parts', 'knitting-spare-parts', 11, NULL, '2019-05-30 08:32:55', '2019-05-30 08:32:55'),
(1053, 'Key Maker', 'key-maker', 11, NULL, '2019-05-30 08:33:16', '2019-05-30 08:33:16'),
(1054, 'Identification Equipment & Supplies', 'identification-equipment-supplies', 9, NULL, '2019-05-30 21:08:31', '2019-05-30 21:08:31'),
(1055, 'Illuminations', 'illuminations', 9, NULL, '2019-05-30 21:08:44', '2019-05-30 21:08:44'),
(1056, 'Immigration Consultancy Service', 'immigration-consultancy-service', 9, NULL, '2019-05-30 21:08:55', '2019-05-30 21:08:55'),
(1057, 'Incense Sticks', 'incense-sticks', 9, NULL, '2019-05-30 21:09:08', '2019-05-30 21:09:08'),
(1058, 'Indenting Agents', 'indenting-agents', 9, NULL, '2019-05-30 21:09:20', '2019-05-30 21:09:20'),
(1059, 'Industrial Automation Systems', 'industrial-automation-systems', 9, NULL, '2019-05-30 21:09:31', '2019-05-30 21:09:31'),
(1060, 'Information Technologies', 'information-technologies', 9, NULL, '2019-05-30 21:11:32', '2019-05-30 21:11:32'),
(1061, 'Injection Moulding Machine', 'injection-moulding-machine', 9, NULL, '2019-05-30 21:11:42', '2019-05-30 21:11:42'),
(1062, 'Inks - Printing & Lithography', 'inks-printing-lithography', 9, NULL, '2019-05-30 21:11:53', '2019-05-30 21:11:53'),
(1063, 'Insecticides', 'insecticides', 9, NULL, '2019-05-30 21:12:08', '2019-05-30 21:12:08'),
(1064, 'Instrumentation & Controls', 'instrumentation-controls', 9, NULL, '2019-05-30 21:12:20', '2019-05-30 21:12:20'),
(1065, 'Insulation Materials - Cold & Heat', 'insulation-materials-cold-heat', 9, NULL, '2019-05-30 21:12:31', '2019-05-30 21:12:31'),
(1066, 'Insurance', 'insurance', 9, NULL, '2019-05-30 21:12:41', '2019-05-30 21:12:41'),
(1067, 'Insurance Agents & Brokers', 'insurance-agents-brokers', 9, NULL, '2019-05-30 21:12:51', '2019-05-30 21:12:51'),
(1068, 'Insurance Consultants', 'insurance-consultants', 9, NULL, '2019-05-30 21:13:02', '2019-05-30 21:13:02'),
(1069, 'Interior Decor Products - Retail', 'interior-decor-products-retail', 9, NULL, '2019-05-30 21:13:12', '2019-05-30 21:13:12'),
(1070, 'Interior Decorators & Designers', 'interior-decorators-designers', 9, NULL, '2019-05-30 21:13:23', '2019-05-30 21:13:23'),
(1071, 'Internet Cafe', 'internet-cafe', 9, NULL, '2019-05-30 21:13:46', '2019-05-30 21:13:46'),
(1072, 'Internet Service Providers -Licensed', 'internet-service-providers-licensed', 9, NULL, '2019-05-30 21:13:56', '2019-05-30 21:13:56'),
(1073, 'Internet Solution Providers', 'internet-solution-providers', 9, NULL, '2019-05-30 21:14:07', '2019-05-30 21:14:07'),
(1074, 'Investment Advisory Services', 'investment-advisory-services', 9, NULL, '2019-05-30 21:14:18', '2019-05-30 21:14:18'),
(1075, 'Investment Management', 'investment-management', 9, NULL, '2019-05-30 21:14:29', '2019-05-30 21:14:29'),
(1076, 'IT - Education', 'it-education', 9, NULL, '2019-05-30 21:14:42', '2019-05-30 21:14:42'),
(1077, 'IT - Solutions', 'it-solutions', 9, NULL, '2019-05-30 21:14:52', '2019-05-30 21:14:52'),
(1078, 'IT - Training Centres', 'it-training-centres', 9, NULL, '2019-05-30 21:15:03', '2019-05-30 21:15:03'),
(1079, 'Ice Cream Machinery & Eqpt.', 'ice-cream-machinery-eqpt', 9, NULL, '2019-05-30 21:15:13', '2019-05-30 21:15:13'),
(1080, 'Ice Cream Mfrs. / Distributors', 'ice-cream-mfrs-distributors', 9, NULL, '2019-05-30 21:15:28', '2019-05-30 21:15:28'),
(1081, 'Ice Cream & Frozen Desserts Manufacturers & Distributors', 'ice-cream-frozen-desserts-manufacturers-distributors', 9, NULL, '2019-05-30 21:15:40', '2019-05-30 21:15:40'),
(1082, 'Ice Cream Manufacturing Equipment', 'ice-cream-manufacturing-equipment', 9, NULL, '2019-05-30 21:15:53', '2019-05-30 21:15:53'),
(1083, 'Identity Card Mfrs. & Supplier', 'identity-card-mfrs-supplier', 9, NULL, '2019-05-30 21:16:04', '2019-05-30 21:16:04'),
(1084, 'International Donor Agency', 'international-donor-agency', 9, NULL, '2019-05-30 21:16:27', '2019-05-30 21:16:27'),
(1085, 'International Freight Forwarde', 'international-freight-forwarde', 9, NULL, '2019-05-30 21:16:38', '2019-05-30 21:16:38'),
(1086, 'Internet/Web Publication', 'internetweb-publication', 9, NULL, '2019-05-30 21:16:50', '2019-05-30 21:16:50'),
(1087, 'ISO Certification Consultancy', 'iso-certification-consultancy', 9, NULL, '2019-05-30 21:17:01', '2019-05-30 21:17:01'),
(1088, 'Machinery Manufacturers', 'machinery-manufacturers', 13, NULL, '2019-05-30 21:21:50', '2019-05-30 21:21:50'),
(1089, 'Machinery Repairs -Rubber, Tea', 'machinery-repairs-rubber-tea', 13, NULL, '2019-05-30 21:22:04', '2019-05-30 21:22:04'),
(1090, 'Magazine Subscription Agents', 'magazine-subscription-agents', 13, NULL, '2019-05-30 21:22:18', '2019-05-30 21:22:18'),
(1091, 'Magicians', 'magicians', 13, NULL, '2019-05-30 21:22:30', '2019-05-30 21:22:30'),
(1092, 'Mailing Machines & Equipment', 'mailing-machines-equipment', 13, NULL, '2019-05-30 21:22:42', '2019-05-30 21:22:42'),
(1093, 'Maintenance - Office & Houses', 'maintenance-office-houses', 13, NULL, '2019-05-30 21:23:00', '2019-05-30 21:23:00'),
(1094, 'Manpower Agencies', 'manpower-agencies', 13, NULL, '2019-05-30 21:23:13', '2019-05-30 21:23:13'),
(1095, 'Map Publishers', 'map-publishers', 13, NULL, '2019-05-30 21:23:26', '2019-05-30 21:23:26'),
(1096, 'Margarines', 'margarines', 13, NULL, '2019-05-30 21:23:40', '2019-05-30 21:23:40'),
(1097, 'Marketing Consultants', 'marketing-consultants', 13, NULL, '2019-05-30 21:23:54', '2019-05-30 21:23:54'),
(1098, 'Marriage Registrars', 'marriage-registrars', 13, NULL, '2019-05-30 21:24:09', '2019-05-30 21:24:09'),
(1099, 'Marriage Brokers', 'marriage-brokers', 13, NULL, '2019-05-30 21:24:22', '2019-05-30 21:24:22'),
(1100, 'Masons', 'masons', 13, NULL, '2019-05-30 21:24:34', '2019-05-30 21:24:34'),
(1101, 'Material Handling Equipment', 'material-handling-equipment', 13, NULL, '2019-05-30 21:24:47', '2019-05-30 21:24:47'),
(1102, 'Mattress - Retail & Wholesale', 'mattress-retail-wholesale', 13, NULL, '2019-05-30 21:24:58', '2019-05-30 21:24:58'),
(1103, 'Mattress Manufacturers', 'mattress-manufacturers', 13, NULL, '2019-05-30 21:25:10', '2019-05-30 21:25:10'),
(1104, 'Mattresses - Water & Air', 'mattresses-water-air', 13, NULL, '2019-05-30 21:25:22', '2019-05-30 21:25:22'),
(1105, 'Mechanics', 'mechanics', 13, NULL, '2019-05-30 21:25:36', '2019-05-30 21:25:36'),
(1106, 'Medical Assistance And Hospitals', 'medical-assistance-and-hospitals', 13, NULL, '2019-05-30 21:25:48', '2019-05-30 21:25:48'),
(1107, 'Medical Assistance Services', 'medical-assistance-services', 13, NULL, '2019-05-30 21:26:00', '2019-05-30 21:26:00'),
(1108, 'Medical Diagnostic Services', 'medical-diagnostic-services', 13, NULL, '2019-05-30 21:26:12', '2019-05-30 21:26:12'),
(1109, 'Medical Diagnostic Test Kits & Lab Equipment', 'medical-diagnostic-test-kits-lab-equipment', 13, NULL, '2019-05-30 21:26:24', '2019-05-30 21:26:24'),
(1110, 'Medical Equipment & Supplies', 'medical-equipment-supplies', 13, NULL, '2019-05-30 21:26:36', '2019-05-30 21:26:36'),
(1111, 'Medical Practitioners - Equipment & Supplies', 'medical-practitioners-equipment-supplies', 13, NULL, '2019-05-30 21:26:47', '2019-05-30 21:26:47'),
(1112, 'Medical Practitioners - Registered', 'medical-practitioners-registered', 13, NULL, '2019-05-30 21:26:58', '2019-05-30 21:26:58'),
(1113, 'Members Of Parliament', 'members-of-parliament', 13, NULL, '2019-05-30 21:27:17', '2019-05-30 21:27:17'),
(1114, 'Metal Crushers', 'metal-crushers', 13, NULL, '2019-05-30 21:27:30', '2019-05-30 21:27:30'),
(1115, 'Meters & Measuring Instruments', 'meters-measuring-instruments', 13, NULL, '2019-05-30 21:27:45', '2019-05-30 21:27:45'),
(1116, 'Microwave Ovens -Repairs & Services', 'microwave-ovens-repairs-services', 13, NULL, '2019-05-30 21:27:56', '2019-05-30 21:27:56'),
(1117, 'Migration Consultants', 'migration-consultants', 13, NULL, '2019-05-30 21:28:09', '2019-05-30 21:28:09'),
(1118, 'Milk & Milk Products', 'milk-milk-products', 13, NULL, '2019-05-30 21:28:20', '2019-05-30 21:28:20'),
(1119, 'Milk Fountains or Champagne Fountains', 'milk-fountains-or-champagne-fountains', 13, NULL, '2019-05-30 21:28:33', '2019-05-30 21:28:33'),
(1120, 'Milling Machines -CNC', 'milling-machines-cnc', 13, NULL, '2019-05-30 21:28:45', '2019-05-30 21:28:45'),
(1121, 'Mineral Industry Products', 'mineral-industry-products', 13, NULL, '2019-05-30 21:28:56', '2019-05-30 21:28:56'),
(1122, 'Ministries', 'ministries', 13, NULL, '2019-05-30 21:29:13', '2019-05-30 21:29:13'),
(1123, 'Mobile Phone Accessories ', 'mobile-phone-accessories', 13, NULL, '2019-05-30 21:29:26', '2019-05-30 21:29:26'),
(1124, 'Mobile Phone Repairs', 'mobile-phone-repairs', 13, NULL, '2019-05-30 21:29:38', '2019-05-30 21:29:38'),
(1125, 'Mobile Toilet', 'mobile-toilet', 13, NULL, '2019-05-30 21:29:51', '2019-05-30 21:29:51'),
(1126, 'Moisture Controlling Systems', 'moisture-controlling-systems', 13, NULL, '2019-05-30 21:30:04', '2019-05-30 21:30:04'),
(1127, 'Money Transfering Services', 'money-transfering-services', 13, NULL, '2019-05-30 21:30:16', '2019-05-30 21:30:16'),
(1128, 'Motion Picture Equipment & Supplies - Renting', 'motion-picture-equipment-supplies-renting', 13, NULL, '2019-05-30 21:30:34', '2019-05-30 21:30:34'),
(1129, 'Motor Cycle Spare Parts, Accessories & Repairing', 'motor-cycle-spare-parts-accessories-repairing', 13, NULL, '2019-05-30 21:30:46', '2019-05-30 21:30:46'),
(1130, 'Motor Cycles & Machinery', 'motor-cycles-machinery', 13, NULL, '2019-05-30 21:30:58', '2019-05-30 21:30:58'),
(1131, 'Motor Racing', 'motor-racing', 13, NULL, '2019-05-30 21:31:15', '2019-05-30 21:31:15'),
(1132, 'Motor Spare Parts ', 'motor-spare-parts', 13, NULL, '2019-05-30 21:31:27', '2019-05-30 21:31:27'),
(1133, 'Motor Spare Parts & Repairs', 'motor-spare-parts-repairs', 13, NULL, '2019-05-30 21:31:39', '2019-05-30 21:31:39'),
(1134, 'Motor Spares & Machinery', 'motor-spares-machinery', 13, NULL, '2019-05-30 21:31:52', '2019-05-30 21:31:52'),
(1135, 'Motor Vehicle - Energy Servers', 'motor-vehicle-energy-servers', 13, NULL, '2019-05-30 21:32:05', '2019-05-30 21:32:05'),
(1136, 'Motor Vehicle Breakdown Services', 'motor-vehicle-breakdown-services', 13, NULL, '2019-05-30 21:32:17', '2019-05-30 21:32:17'),
(1137, 'Motor Vehicle Dealers', 'motor-vehicle-dealers', 13, NULL, '2019-05-30 21:32:29', '2019-05-30 21:32:29'),
(1138, 'Motor Vehicle Distributors', 'motor-vehicle-distributors', 13, NULL, '2019-05-30 21:32:50', '2019-05-30 21:32:50'),
(1139, 'Motor Vehicle Insurance', 'motor-vehicle-insurance', 13, NULL, '2019-05-30 21:33:02', '2019-05-30 21:33:02'),
(1140, 'Motor Vehicle Insurance Agents & Brokers', 'motor-vehicle-insurance-agents-brokers', 13, NULL, '2019-05-30 21:33:15', '2019-05-30 21:33:15'),
(1141, 'Motor Vehicle Leasing', 'motor-vehicle-leasing', 13, NULL, '2019-05-30 21:33:28', '2019-05-30 21:33:28'),
(1142, 'Motor Vehicle Repairing & Servicing', 'motor-vehicle-repairing-servicing', 13, NULL, '2019-05-30 21:33:42', '2019-05-30 21:33:42'),
(1143, 'Motorcar / Vehicle Repairing Servising & Testing Equipment Suppliers', 'motorcar-vehicle-repairing-servising-testing-equipment-suppliers', 13, NULL, '2019-05-30 21:33:54', '2019-05-30 21:33:54'),
(1144, 'Motorcar Accessories', 'motorcar-accessories', 13, NULL, '2019-05-30 21:34:05', '2019-05-30 21:34:05'),
(1145, 'Motorcar Air Conditioning Equipment', 'motorcar-air-conditioning-equipment', 13, NULL, '2019-05-30 21:34:18', '2019-05-30 21:34:18'),
(1146, 'Motorcar Alarms & Security Systems', 'motorcar-alarms-security-systems', 13, NULL, '2019-05-30 21:34:29', '2019-05-30 21:34:29'),
(1147, 'Motorcar Body Repairing & Painting', 'motorcar-body-repairing-painting', 13, NULL, '2019-05-30 21:34:41', '2019-05-30 21:34:41'),
(1148, 'Motorcar Electrical Services', 'motorcar-electrical-services', 13, NULL, '2019-05-30 21:34:57', '2019-05-30 21:34:57'),
(1149, 'Motorcar Parts & Supplies - Rebuilt', 'motorcar-parts-supplies-rebuilt', 13, NULL, '2019-05-30 21:35:09', '2019-05-30 21:35:09'),
(1150, 'Motorcar Parts & Supplies - Retail', 'motorcar-parts-supplies-retail', 13, NULL, '2019-05-30 21:35:21', '2019-05-30 21:35:21'),
(1151, 'Motorcar Parts & Supplies - Used', 'motorcar-parts-supplies-used', 13, NULL, '2019-05-30 21:35:32', '2019-05-30 21:35:32'),
(1152, 'Motorcar Parts & Supplies - Wholesale', 'motorcar-parts-supplies-wholesale', 13, NULL, '2019-05-30 21:35:59', '2019-05-30 21:35:59'),
(1153, 'Motorcar Polishing & Waxing', 'motorcar-polishing-waxing', 13, NULL, '2019-05-30 21:36:11', '2019-05-30 21:36:11'),
(1154, 'Motorcar Radio & Stereophonic Systems', 'motorcar-radio-stereophonic-systems', 13, NULL, '2019-05-30 21:36:22', '2019-05-30 21:36:22'),
(1155, 'Motorcar Radio & Stereophonic Systems -Repairs & Service', 'motorcar-radio-stereophonic-systems-repairs-service', 13, NULL, '2019-05-30 21:37:24', '2019-05-30 21:37:24'),
(1156, 'Motorcar Renting & Leasing', 'motorcar-renting-leasing', 13, NULL, '2019-05-30 21:37:36', '2019-05-30 21:37:36'),
(1157, 'Motorcar Repairing & Lubrication Service', 'motorcar-repairing-lubrication-service', 13, NULL, '2019-05-30 21:37:48', '2019-05-30 21:37:48'),
(1158, 'Motorcar Repairing & Services - Equipment & Supplies', 'motorcar-repairing-services-equipment-supplies', 13, NULL, '2019-05-30 21:38:00', '2019-05-30 21:38:00'),
(1159, 'Motorcar Rust Proofing Service', 'motorcar-rust-proofing-service', 13, NULL, '2019-05-30 21:38:13', '2019-05-30 21:38:13'),
(1160, 'Motorcar Vehicle - EFI', 'motorcar-vehicle-efi', 13, NULL, '2019-05-30 21:38:46', '2019-05-30 21:38:46'),
(1161, 'Motorcar Vehicle Dealers - New -Authorised & Distributors', 'motorcar-vehicle-dealers-new-authorised-distributors', 13, NULL, '2019-05-30 21:39:00', '2019-05-30 21:39:00'),
(1162, 'Motorcar Vehicle Dealers - New Cars', 'motorcar-vehicle-dealers-new-cars', 13, NULL, '2019-05-30 21:40:03', '2019-05-30 21:40:03'),
(1163, 'Motorcar Vehicle Dealers - Re-Conditioned', 'motorcar-vehicle-dealers-re-conditioned', 13, NULL, '2019-05-30 21:40:15', '2019-05-30 21:40:15'),
(1164, 'Motorcar Vehicle Detailing Services', 'motorcar-vehicle-detailing-services', 13, NULL, '2019-05-30 21:42:59', '2019-05-30 21:42:59'),
(1165, 'Motorcycles & Motor Scooters', 'motorcycles-motor-scooters', 13, NULL, '2019-05-30 21:43:12', '2019-05-30 21:43:12'),
(1166, 'Motorcycles & Motor Scooters - Repairing ', 'motorcycles-motor-scooters-repairing', 13, NULL, '2019-05-30 21:43:26', '2019-05-30 21:43:26'),
(1167, 'Motorcycles & Motor Scooters - Wholesale & Manufacturers', 'motorcycles-motor-scooters-wholesale-manufacturers', 13, NULL, '2019-05-30 21:43:38', '2019-05-30 21:43:38'),
(1168, 'Motorcycles & Motor Scooters - Supplies & Parts', 'motorcycles-motor-scooters-supplies-parts', 13, NULL, '2019-05-30 21:43:51', '2019-05-30 21:43:51'),
(1169, 'Music - Bands', 'music-bands', 13, NULL, '2019-05-30 21:44:11', '2019-05-30 21:44:11'),
(1170, 'Music Schools', 'music-schools', 13, NULL, '2019-05-30 21:44:25', '2019-05-30 21:44:25'),
(1171, 'Music Systems - Repairs & Services', 'music-systems-repairs-services', 13, NULL, '2019-05-30 21:44:37', '2019-05-30 21:44:37'),
(1172, 'Musical Instruments -Wholesale & Manufacturers', 'musical-instruments-wholesale-manufacturers', 13, NULL, '2019-05-30 21:44:49', '2019-05-30 21:44:49'),
(1173, 'Musical Instruments ', 'musical-instruments', 13, NULL, '2019-05-30 21:45:02', '2019-05-30 21:45:02'),
(1174, 'Wallpapers & Wallcoverings - Retail', 'wallpapers-wallcoverings-retail', 23, NULL, '2019-05-30 21:45:53', '2019-05-30 21:45:53'),
(1175, 'Washing Machine - Parts Supplies', 'washing-machine-parts-supplies', 23, NULL, '2019-05-30 21:46:08', '2019-05-30 21:46:08'),
(1176, 'Washing Machines Dryers & Ironers - Retail & Wholesale', 'washing-machines-dryers-ironers-retail-wholesale', 23, NULL, '2019-05-30 21:46:21', '2019-05-30 21:46:21'),
(1177, 'Washing Machines, Dryers & Ironers - Repairing', 'washing-machines-dryers-ironers-repairing', 23, NULL, '2019-05-30 21:46:34', '2019-05-30 21:46:34'),
(1178, 'Waste management solutions', 'waste-management-solutions', 23, NULL, '2019-05-30 21:46:47', '2019-05-30 21:46:47'),
(1179, 'Watch Dealers & Repairing', 'watch-dealers-repairing', 23, NULL, '2019-05-30 21:47:02', '2019-05-30 21:47:02'),
(1180, 'Watches - Repairing', 'watches-repairing', 23, NULL, '2019-05-30 21:47:20', '2019-05-30 21:47:20'),
(1181, 'Water & Waste Water Treatment', 'water-waste-water-treatment', 23, NULL, '2019-05-30 21:47:33', '2019-05-30 21:47:33'),
(1182, 'Water Pollution Controls', 'water-pollution-controls', 23, NULL, '2019-05-30 21:48:09', '2019-05-30 21:48:09'),
(1183, 'Water Proofing Contractors', 'water-proofing-contractors', 23, NULL, '2019-05-30 21:48:22', '2019-05-30 21:48:22'),
(1184, 'Water Proofing Materials', 'water-proofing-materials', 23, NULL, '2019-05-30 21:48:35', '2019-05-30 21:48:35'),
(1185, 'Water Pumps', 'water-pumps', 23, NULL, '2019-05-30 21:48:47', '2019-05-30 21:48:47'),
(1186, 'Water Pumps Installing & Repairing', 'water-pumps-installing-repairing', 23, NULL, '2019-05-30 21:49:01', '2019-05-30 21:49:01'),
(1187, 'Water Purification & Filtration Equipment', 'water-purification-filtration-equipment', 23, NULL, '2019-05-30 21:49:16', '2019-05-30 21:49:16'),
(1188, 'Water Skiing', 'water-skiing', 23, NULL, '2019-05-30 21:49:31', '2019-05-30 21:49:31'),
(1189, 'Water Sports & Leisure Activities', 'water-sports-leisure-activities', 23, NULL, '2019-05-30 21:49:44', '2019-05-30 21:49:44'),
(1190, 'Water Treatment - Pipe Installation', 'water-treatment-pipe-installation', 23, NULL, '2019-05-30 21:49:59', '2019-05-30 21:49:59'),
(1191, 'Water Treatment Equipment, Services & Supplies', 'water-treatment-equipment-services-supplies', 23, NULL, '2019-05-30 21:50:12', '2019-05-30 21:50:12'),
(1192, 'Web Designing & Developing', 'web-designing-developing', 23, NULL, '2019-05-30 21:50:35', '2019-05-30 21:50:35'),
(1193, 'Web Hosting & Developing', 'web-hosting-developing', 23, NULL, '2019-05-30 21:50:47', '2019-05-30 21:50:47'),
(1194, 'Wedding Announcements & Invitations', 'wedding-announcements-invitations', 23, NULL, '2019-05-30 21:51:01', '2019-05-30 21:51:01'),
(1195, 'Welding Equipment & Supplies', 'welding-equipment-supplies', 23, NULL, '2019-05-30 21:51:23', '2019-05-30 21:51:23'),
(1196, 'Welding Equipment Manufacturers', 'welding-equipment-manufacturers', 23, NULL, '2019-05-30 21:51:43', '2019-05-30 21:51:43'),
(1197, 'Well Drilling', 'well-drilling', 23, NULL, '2019-05-30 21:51:57', '2019-05-30 21:51:57'),
(1198, 'Wheel Alignment & Tyre Balancing Services', 'wheel-alignment-tyre-balancing-services', 23, NULL, '2019-05-30 21:52:11', '2019-05-30 21:52:11'),
(1199, 'White Water Rafting', 'white-water-rafting', 23, NULL, '2019-05-30 21:52:29', '2019-05-30 21:52:29'),
(1200, 'Windows', 'windows', 23, NULL, '2019-05-30 21:52:44', '2019-05-30 21:52:44'),
(1201, 'Window - Films', 'window-films', 23, NULL, '2019-05-30 21:52:58', '2019-05-30 21:52:58'),
(1202, 'Wrapping Machines', 'wrapping-machines', 23, NULL, '2019-05-30 21:53:13', '2019-05-30 21:53:13'),
(1203, 'Wooden Flooring', 'wooden-flooring', 23, NULL, '2019-05-30 21:53:31', '2019-05-30 21:53:31'),
(1204, 'Packaging - Craft Paper Sacks', 'packaging-craft-paper-sacks', 16, NULL, '2019-05-31 06:55:12', '2019-05-31 06:55:12'),
(1205, 'Packaging - Corrugated Boxes', 'packaging-corrugated-boxes', 16, NULL, '2019-05-31 06:55:31', '2019-05-31 06:55:31'),
(1206, 'Packaging - Flexible', 'packaging-flexible', 16, NULL, '2019-05-31 06:55:46', '2019-05-31 06:55:46'),
(1207, 'Packaging - Machinery', 'packaging-machinery', 16, NULL, '2019-05-31 06:55:59', '2019-05-31 06:55:59'),
(1208, 'Packaging - Polysacks', 'packaging-polysacks', 16, NULL, '2019-05-31 06:56:11', '2019-05-31 06:56:11'),
(1209, 'Packaging - Printing', 'packaging-printing', 16, NULL, '2019-05-31 06:56:24', '2019-05-31 06:56:24'),
(1210, 'Packaging - Pvc Shrink Films', 'packaging-pvc-shrink-films', 16, NULL, '2019-05-31 06:56:38', '2019-05-31 06:56:38'),
(1211, 'Packaging Materials', 'packaging-materials', 16, NULL, '2019-05-31 06:56:51', '2019-05-31 06:56:51'),
(1212, 'Packaging Services', 'packaging-services', 16, NULL, '2019-05-31 06:57:04', '2019-05-31 06:57:04'),
(1213, 'Packing & Crating Services', 'packing-crating-services', 16, NULL, '2019-05-31 06:57:16', '2019-05-31 06:57:16'),
(1214, 'Paint Dealers - Retail', 'paint-dealers-retail', 16, NULL, '2019-05-31 06:58:02', '2019-05-31 06:58:02'),
(1215, 'Paint Dealers - Wholesale', 'paint-dealers-wholesale', 16, NULL, '2019-05-31 06:58:17', '2019-05-31 06:58:17'),
(1216, 'Paint Manufacturers', 'paint-manufacturers', 16, NULL, '2019-05-31 06:58:31', '2019-05-31 06:58:31'),
(1217, 'Painting Contractors', 'painting-contractors', 16, NULL, '2019-05-31 06:58:46', '2019-05-31 06:58:46'),
(1218, 'Paints - Auto / Decorative', 'paints-auto-decorative', 16, NULL, '2019-05-31 06:58:59', '2019-05-31 06:58:59'),
(1219, 'Paints - Marine & Industrial', 'paints-marine-industrial', 16, NULL, '2019-05-31 06:59:16', '2019-05-31 06:59:16'),
(1220, 'Pallets', 'pallets', 16, NULL, '2019-05-31 07:01:03', '2019-05-31 07:01:03'),
(1221, 'Pallets Manufacturers', 'pallets-manufacturers', 16, NULL, '2019-05-31 07:01:15', '2019-05-31 07:01:15'),
(1222, 'Panels-PVC', 'panels-pvc', 16, NULL, '2019-05-31 07:03:35', '2019-05-31 07:03:35'),
(1223, 'Paper Bags', 'paper-bags', 16, NULL, '2019-05-31 07:03:48', '2019-05-31 07:03:48'),
(1224, 'Paper Brokers & Mill Representatives', 'paper-brokers-mill-representatives', 16, NULL, '2019-05-31 07:04:01', '2019-05-31 07:04:01'),
(1225, 'Paper Dealers', 'paper-dealers', 16, NULL, '2019-05-31 07:04:13', '2019-05-31 07:04:13'),
(1226, 'Paper Distributors', 'paper-distributors', 16, NULL, '2019-05-31 07:04:25', '2019-05-31 07:04:25'),
(1227, 'Paper Manufacturers', 'paper-manufacturers', 16, NULL, '2019-05-31 07:04:38', '2019-05-31 07:04:38'),
(1228, 'Paper Manufacturers Re-Cycle', 'paper-manufacturers-re-cycle', 16, NULL, '2019-05-31 07:04:50', '2019-05-31 07:04:50'),
(1229, 'Paper Products', 'paper-products', 16, NULL, '2019-05-31 07:05:01', '2019-05-31 07:05:01'),
(1230, 'Paper Shredding Services', 'paper-shredding-services', 16, NULL, '2019-05-31 07:05:15', '2019-05-31 07:05:15'),
(1231, 'Paper Tubes', 'paper-tubes', 16, NULL, '2019-05-31 07:05:27', '2019-05-31 07:05:27'),
(1232, 'Papers & Boards', 'papers-boards', 16, NULL, '2019-05-31 07:05:41', '2019-05-31 07:05:41'),
(1233, 'Para Motoring', 'para-motoring', 16, NULL, '2019-05-31 07:05:53', '2019-05-31 07:05:53'),
(1234, 'Paragliding', 'paragliding', 16, NULL, '2019-05-31 07:06:06', '2019-05-31 07:06:06'),
(1235, 'Parachuting', 'parachuting', 16, NULL, '2019-05-31 07:06:19', '2019-05-31 07:06:19'),
(1236, 'Parasailing', 'parasailing', 16, NULL, '2019-05-31 07:06:31', '2019-05-31 07:06:31'),
(1237, 'Partition Materials', 'partition-materials', 16, NULL, '2019-05-31 07:06:49', '2019-05-31 07:06:49'),
(1238, 'Payroll Services', 'payroll-services', 16, NULL, '2019-05-31 07:07:08', '2019-05-31 07:07:08'),
(1239, 'Perfumes', 'perfumes', 16, NULL, '2019-05-31 07:07:22', '2019-05-31 07:07:22'),
(1240, 'Pest Control', 'pest-control', 16, NULL, '2019-05-31 07:07:34', '2019-05-31 07:07:34'),
(1241, 'Pet - care', 'pet-care', 16, NULL, '2019-05-31 07:07:48', '2019-05-31 07:07:48'),
(1242, 'Pet Ambulance', 'pet-ambulance', 16, NULL, '2019-05-31 07:08:01', '2019-05-31 07:08:01'),
(1243, 'Pet Bottles', 'pet-bottles', 16, NULL, '2019-05-31 07:08:13', '2019-05-31 07:08:13'),
(1244, 'Pet Breed', 'pet-breed', 16, NULL, '2019-05-31 07:08:26', '2019-05-31 07:08:26'),
(1245, 'Pet Foods Companies', 'pet-foods-companies', 16, NULL, '2019-05-31 07:08:41', '2019-05-31 07:08:41'),
(1246, 'Pet Hostels', 'pet-hostels', 16, NULL, '2019-05-31 07:08:54', '2019-05-31 07:08:54'),
(1247, 'Petrol Sheds', 'petrol-sheds', 16, NULL, '2019-05-31 07:09:07', '2019-05-31 07:09:07'),
(1248, 'Petroleum Tapes', 'petroleum-tapes', 16, NULL, '2019-05-31 07:11:57', '2019-05-31 07:11:57'),
(1249, 'Pharamaceutical Equipment And Supplies', 'pharamaceutical-equipment-and-supplies', 16, NULL, '2019-05-31 07:12:12', '2019-05-31 07:12:12'),
(1250, 'Pharmaceutical Products -Importers', 'pharmaceutical-products-importers', 16, NULL, '2019-05-31 07:12:25', '2019-05-31 07:12:25'),
(1251, 'Pharmaceutical Products -Wholesale & Manufacturers', 'pharmaceutical-products-wholesale-manufacturers', 16, NULL, '2019-05-31 07:12:38', '2019-05-31 07:12:38'),
(1252, 'Pharmacies', 'pharmacies', 16, NULL, '2019-05-31 07:13:28', '2019-05-31 07:13:28'),
(1253, 'Photo Copy Machines & Type Writers', 'photo-copy-machines-type-writers', 16, NULL, '2019-05-31 07:13:43', '2019-05-31 07:13:43'),
(1254, 'Photo Copying', 'photo-copying', 16, NULL, '2019-05-31 07:13:59', '2019-05-31 07:13:59'),
(1255, 'Photographers', 'photographers', 16, NULL, '2019-05-31 07:14:13', '2019-05-31 07:14:13'),
(1256, 'Photographers - Portrait, Wedding, Parties etc', 'photographers-portrait-wedding-parties-etc', 16, NULL, '2019-05-31 07:14:25', '2019-05-31 07:14:25'),
(1257, 'Photographers -Commercial', 'photographers-commercial', 16, NULL, '2019-05-31 07:14:39', '2019-05-31 07:14:39'),
(1258, 'Photographic Colour Prints & Transparencies', 'photographic-colour-prints-transparencies', 16, NULL, '2019-05-31 07:14:53', '2019-05-31 07:14:53'),
(1259, 'Photographic Equipment & Supplies - Retail', 'photographic-equipment-supplies-retail', 16, NULL, '2019-05-31 07:15:06', '2019-05-31 07:15:06'),
(1260, 'Photographic Equipment & Supplies - Wholesale & Manufacturers', 'photographic-equipment-supplies-wholesale-manufacturers', 16, NULL, '2019-05-31 07:15:18', '2019-05-31 07:15:18'),
(1261, 'Photographic Restoration', 'photographic-restoration', 16, NULL, '2019-05-31 07:15:30', '2019-05-31 07:15:30'),
(1262, 'Pianos', 'pianos', 16, NULL, '2019-05-31 07:15:42', '2019-05-31 07:15:42'),
(1263, 'Pianos - Tuning & Repairing', 'pianos-tuning-repairing', 16, NULL, '2019-05-31 07:15:53', '2019-05-31 07:15:53'),
(1264, 'Pilgrimage Services', 'pilgrimage-services', 16, NULL, '2019-05-31 07:16:12', '2019-05-31 07:16:12'),
(1265, 'Piling & Piling Contractors', 'piling-piling-contractors', 16, NULL, '2019-05-31 07:16:26', '2019-05-31 07:16:26'),
(1266, 'Piling Product Supplies', 'piling-product-supplies', 16, NULL, '2019-05-31 07:16:39', '2019-05-31 07:16:39'),
(1267, 'Pipe Fittings', 'pipe-fittings', 16, NULL, '2019-05-31 07:16:53', '2019-05-31 07:16:53'),
(1268, 'Plan Printing Equipment & Supplies', 'plan-printing-equipment-supplies', 16, NULL, '2019-05-31 07:17:07', '2019-05-31 07:17:07'),
(1269, 'Plastic Products - Wholesale & Manufacturers', 'plastic-products-wholesale-manufacturers', 16, NULL, '2019-05-31 07:17:20', '2019-05-31 07:17:20'),
(1270, 'Plastic Cards & Machinery Supplies', 'plastic-cards-machinery-supplies', 16, NULL, '2019-05-31 07:17:33', '2019-05-31 07:17:33'),
(1271, 'Plastic Fabricating & Decorating', 'plastic-fabricating-decorating', 16, NULL, '2019-05-31 07:17:46', '2019-05-31 07:17:46'),
(1272, 'Plastic Machinery & Equipment', 'plastic-machinery-equipment', 16, NULL, '2019-05-31 07:18:00', '2019-05-31 07:18:00'),
(1273, 'Plastic Packaging', 'plastic-packaging', 16, NULL, '2019-05-31 07:18:12', '2019-05-31 07:18:12'),
(1274, 'Plastic Pallets', 'plastic-pallets', 16, NULL, '2019-05-31 07:18:26', '2019-05-31 07:18:26'),
(1275, 'Plastics - Moulders', 'plastics-moulders', 16, NULL, '2019-05-31 07:18:40', '2019-05-31 07:18:40'),
(1276, 'Plastics - Raw Materials -Powders, Liquids, Resins etc', 'plastics-raw-materials-powders-liquids-resins-etc', 16, NULL, '2019-05-31 07:18:54', '2019-05-31 07:18:54'),
(1277, 'Plumbers', 'plumbers', 16, NULL, '2019-05-31 07:19:07', '2019-05-31 07:19:07'),
(1278, 'Plumbing Contractors', 'plumbing-contractors', 16, NULL, '2019-05-31 07:19:21', '2019-05-31 07:19:21'),
(1279, 'Plumbing Repairs & Services', 'plumbing-repairs-services', 16, NULL, '2019-05-31 07:19:34', '2019-05-31 07:19:34'),
(1280, 'Plywood', 'plywood', 16, NULL, '2019-05-31 07:19:47', '2019-05-31 07:19:47'),
(1281, 'Plywood & Veneers', 'plywood-veneers', 16, NULL, '2019-05-31 07:20:06', '2019-05-31 07:20:06'),
(1282, 'Pneumatic Equipment & Components', 'pneumatic-equipment-components', 16, NULL, '2019-05-31 07:20:18', '2019-05-31 07:20:18'),
(1283, 'Police Kennel Division', 'police-kennel-division', 16, NULL, '2019-05-31 07:20:36', '2019-05-31 07:20:36'),
(1284, 'Police Mounted Division', 'police-mounted-division', 16, NULL, '2019-05-31 07:20:54', '2019-05-31 07:20:54'),
(1285, 'Police Stations', 'police-stations', 16, NULL, '2019-05-31 07:21:07', '2019-05-31 07:21:07'),
(1286, 'Polypropylene Materials & Products', 'polypropylene-materials-products', 16, NULL, '2019-05-31 07:21:22', '2019-05-31 07:21:22'),
(1287, 'Polythene Manufacturing & Printing', 'polythene-manufacturing-printing', 16, NULL, '2019-05-31 07:21:34', '2019-05-31 07:21:34'),
(1288, 'Polythene Materials and Products', 'polythene-materials-and-products', 16, NULL, '2019-05-31 07:21:47', '2019-05-31 07:21:47'),
(1289, 'Polythene Dealers', 'polythene-dealers', 16, NULL, '2019-05-31 07:22:04', '2019-05-31 07:22:04'),
(1290, 'Portable Cabins', 'portable-cabins', 16, NULL, '2019-05-31 07:22:20', '2019-05-31 07:22:20'),
(1291, 'Portrait Artists', 'portrait-artists', 16, NULL, '2019-05-31 07:22:33', '2019-05-31 07:22:33'),
(1292, 'Post Offices', 'post-offices', 16, NULL, '2019-05-31 07:22:45', '2019-05-31 07:22:45'),
(1293, 'Poultry - Retail', 'poultry-retail', 16, NULL, '2019-05-31 07:22:57', '2019-05-31 07:22:57'),
(1294, 'Poultry Equipment & Supplies', 'poultry-equipment-supplies', 16, NULL, '2019-05-31 07:23:09', '2019-05-31 07:23:09'),
(1295, 'Poultry Farms', 'poultry-farms', 16, NULL, '2019-05-31 07:23:22', '2019-05-31 07:23:22'),
(1296, 'Poultry Feeds', 'poultry-feeds', 16, NULL, '2019-05-31 07:23:35', '2019-05-31 07:23:35'),
(1297, 'Powder Coating', 'powder-coating', 16, NULL, '2019-05-31 07:23:48', '2019-05-31 07:23:48'),
(1298, 'Powder Coating & Powder Coating Equipment', 'powder-coating-powder-coating-equipment', 16, NULL, '2019-05-31 07:24:00', '2019-05-31 07:24:00'),
(1299, 'Printing Barcode', 'printing-barcode', 16, NULL, '2019-05-31 07:24:30', '2019-05-31 07:24:30'),
(1300, 'Printing - 3D', 'printing-3d', 16, NULL, '2019-05-31 07:24:43', '2019-05-31 07:24:43'),
(1301, 'Printing - Data', 'printing-data', 16, NULL, '2019-05-31 07:24:56', '2019-05-31 07:24:56'),
(1302, 'Printing Ink Manufacturers & Supplies', 'printing-ink-manufacturers-supplies', 16, NULL, '2019-05-31 07:25:09', '2019-05-31 07:25:09'),
(1303, 'Project Management', 'project-management', 16, NULL, '2019-05-31 07:25:26', '2019-05-31 07:25:26'),
(1304, 'Public Relation Agencies', 'public-relation-agencies', 16, NULL, '2019-05-31 07:25:48', '2019-05-31 07:25:48'),
(1305, 'Publishers - Books', 'publishers-books', 16, NULL, '2019-05-31 07:26:02', '2019-05-31 07:26:02'),
(1306, 'Publishers - Periodicals', 'publishers-periodicals', 16, NULL, '2019-05-31 07:26:16', '2019-05-31 07:26:16'),
(1307, 'Pubs and Bars', 'pubs-and-bars', 16, NULL, '2019-05-31 07:26:29', '2019-05-31 07:26:29'),
(1308, 'PVC & PVC Products', 'pvc-pvc-products', 16, NULL, '2019-05-31 07:26:42', '2019-05-31 07:26:42'),
(1309, 'PVC Doors', 'pvc-doors', 16, NULL, '2019-05-31 07:26:55', '2019-05-31 07:26:55'),
(1310, 'Safari Tours', 'safari-tours', 19, NULL, '2019-05-31 07:27:43', '2019-05-31 07:27:43'),
(1311, 'Safety & Rescue Equipment', 'safety-rescue-equipment', 19, NULL, '2019-05-31 07:27:58', '2019-05-31 07:27:58'),
(1312, 'Safety Equipment & Clothing', 'safety-equipment-clothing', 19, NULL, '2019-05-31 07:28:10', '2019-05-31 07:28:10'),
(1313, 'Safety Shoes', 'safety-shoes', 19, NULL, '2019-05-31 07:28:23', '2019-05-31 07:28:23'),
(1314, 'Salons', 'salons', 19, NULL, '2019-05-31 07:28:36', '2019-05-31 07:28:36'),
(1315, 'Sandwitches & Burger Shops', 'sandwitches-burger-shops', 19, NULL, '2019-05-31 07:28:48', '2019-05-31 07:28:48'),
(1316, 'Sanitary & Tapware', 'sanitary-tapware', 19, NULL, '2019-05-31 07:29:00', '2019-05-31 07:29:00'),
(1317, 'Satellite Systems', 'satellite-systems', 19, NULL, '2019-05-31 07:29:15', '2019-05-31 07:29:15'),
(1318, 'Sattelite Broadcasting & Communication Companies', 'sattelite-broadcasting-communication-companies', 19, NULL, '2019-05-31 07:29:26', '2019-05-31 07:29:26'),
(1319, 'Scaffoldings', 'scaffoldings', 19, NULL, '2019-05-31 07:29:38', '2019-05-31 07:29:38'),
(1320, 'School Stationery', 'school-stationery', 19, NULL, '2019-05-31 07:29:54', '2019-05-31 07:29:54'),
(1321, 'Schools - Academic -Elementary & Secondary', 'schools-academic-elementary-secondary', 19, NULL, '2019-05-31 07:30:07', '2019-05-31 07:30:07'),
(1322, 'Schools - Academic -Special Purpose', 'schools-academic-special-purpose', 19, NULL, '2019-05-31 07:30:20', '2019-05-31 07:30:20'),
(1323, 'Schools - Academic Colleges & Universities', 'schools-academic-colleges-universities', 19, NULL, '2019-05-31 07:30:34', '2019-05-31 07:30:34'),
(1324, 'Schools - Business & Secretarial', 'schools-business-secretarial', 19, NULL, '2019-05-31 07:30:49', '2019-05-31 07:30:49'),
(1325, 'Schools - Government', 'schools-government', 19, NULL, '2019-05-31 07:31:01', '2019-05-31 07:31:01'),
(1326, 'Schools - International', 'schools-international', 19, NULL, '2019-05-31 07:31:14', '2019-05-31 07:31:14'),
(1327, 'Scientific Apparatus & Instruments', 'scientific-apparatus-instruments', 19, NULL, '2019-05-31 07:31:27', '2019-05-31 07:31:27'),
(1328, 'Sculptors', 'sculptors', 19, NULL, '2019-05-31 07:31:41', '2019-05-31 07:31:41'),
(1329, 'Sea Food Exporters', 'sea-food-exporters', 19, NULL, '2019-05-31 07:31:53', '2019-05-31 07:31:53'),
(1330, 'Security Consultant Protective', 'security-consultant-protective', 19, NULL, '2019-05-31 07:32:15', '2019-05-31 07:32:15'),
(1331, 'Security Control Equipment & Supplies', 'security-control-equipment-supplies', 19, NULL, '2019-05-31 07:32:28', '2019-05-31 07:32:28'),
(1332, 'Security Control Equipment & Systems', 'security-control-equipment-systems', 19, NULL, '2019-05-31 07:32:41', '2019-05-31 07:32:41'),
(1333, 'Security Guards & Patrol Services', 'security-guards-patrol-services', 19, NULL, '2019-05-31 07:32:54', '2019-05-31 07:32:54'),
(1334, 'Security Solutions & Emergency Services', 'security-solutions-emergency-services', 19, NULL, '2019-05-31 07:33:07', '2019-05-31 07:33:07'),
(1335, 'Security Systems Consultants', 'security-systems-consultants', 19, NULL, '2019-05-31 07:33:20', '2019-05-31 07:33:20'),
(1336, 'Security Transport', 'security-transport', 19, NULL, '2019-05-31 07:33:34', '2019-05-31 07:33:34'),
(1337, 'Seeds & Bulbs - Wholesale', 'seeds-bulbs-wholesale', 19, NULL, '2019-05-31 07:33:46', '2019-05-31 07:33:46');
INSERT INTO `categories` (`id`, `name`, `slug`, `alphabate_id`, `icon`, `created_at`, `updated_at`) VALUES
(1338, 'Septic Tanks & Systems', 'septic-tanks-systems', 19, NULL, '2019-05-31 07:33:59', '2019-05-31 07:33:59'),
(1339, 'Service Station Equipment', 'service-station-equipment', 19, NULL, '2019-05-31 07:34:12', '2019-05-31 07:34:12'),
(1340, 'Service Stations - Petrol & Oil', 'service-stations-petrol-oil', 19, NULL, '2019-05-31 07:34:26', '2019-05-31 07:34:26'),
(1341, 'Sewage Treatment Equipment', 'sewage-treatment-equipment', 19, NULL, '2019-05-31 07:34:41', '2019-05-31 07:34:41'),
(1342, 'Sewing Machines - Household', 'sewing-machines-household', 19, NULL, '2019-05-31 07:34:54', '2019-05-31 07:34:54'),
(1343, 'Sewing Machines - Industrial', 'sewing-machines-industrial', 19, NULL, '2019-05-31 07:35:07', '2019-05-31 07:35:07'),
(1344, 'Sewing Machines - Industrial Supplies & Attachments', 'sewing-machines-industrial-supplies-attachments', 19, NULL, '2019-05-31 07:35:20', '2019-05-31 07:35:20'),
(1345, 'Shelving - Commercial & Industrial', 'shelving-commercial-industrial', 19, NULL, '2019-05-31 07:35:36', '2019-05-31 07:35:36'),
(1346, 'Ship Builders & Repairs', 'ship-builders-repairs', 19, NULL, '2019-05-31 07:35:49', '2019-05-31 07:35:49'),
(1347, 'Ship Chandlers', 'ship-chandlers', 19, NULL, '2019-05-31 07:36:02', '2019-05-31 07:36:02'),
(1348, 'Shoe Machinery', 'shoe-machinery', 19, NULL, '2019-05-31 07:36:15', '2019-05-31 07:36:15'),
(1349, 'Shoe Materials & Supplies', 'shoe-materials-supplies', 19, NULL, '2019-05-31 07:36:28', '2019-05-31 07:36:28'),
(1350, 'Shoe Repairs', 'shoe-repairs', 19, NULL, '2019-05-31 07:36:41', '2019-05-31 07:36:41'),
(1351, 'Shoe Resoling', 'shoe-resoling', 19, NULL, '2019-05-31 07:36:54', '2019-05-31 07:36:54'),
(1352, 'Shoes - Wholesale & Manufacturers', 'shoes-wholesale-manufacturers', 19, NULL, '2019-05-31 07:37:07', '2019-05-31 07:37:07'),
(1353, 'Shopping Centres', 'shopping-centres', 19, NULL, '2019-05-31 07:37:21', '2019-05-31 07:37:21'),
(1354, 'Shopping Malls', 'shopping-malls', 19, NULL, '2019-05-31 07:37:36', '2019-05-31 07:37:36'),
(1355, 'Shredders Machines -Paper', 'shredders-machines-paper', 19, NULL, '2019-05-31 07:37:51', '2019-05-31 07:37:51'),
(1356, 'Shrink Packaging Machines', 'shrink-packaging-machines', 19, NULL, '2019-05-31 07:38:13', '2019-05-31 07:38:13'),
(1357, 'Sign Boards', 'sign-boards', 19, NULL, '2019-05-31 07:38:27', '2019-05-31 07:38:27'),
(1358, 'Silencers', 'silencers', 19, NULL, '2019-05-31 07:38:40', '2019-05-31 07:38:40'),
(1359, 'Smart Class Room Equipment', 'smart-class-room-equipment', 19, NULL, '2019-05-31 07:38:58', '2019-05-31 07:38:58'),
(1360, 'Soaps & Detergents - Wholesale & Manufacturers', 'soaps-detergents-wholesale-manufacturers', 19, NULL, '2019-05-31 07:39:12', '2019-05-31 07:39:12'),
(1361, 'Social Services & Welfare Organizations', 'social-services-welfare-organizations', 19, NULL, '2019-05-31 07:39:25', '2019-05-31 07:39:25'),
(1362, 'Software Developers', 'software-developers', 19, NULL, '2019-05-31 07:39:38', '2019-05-31 07:39:38'),
(1363, 'Software Solutions', 'software-solutions', 19, NULL, '2019-05-31 07:39:51', '2019-05-31 07:39:51'),
(1364, 'Soil - Testing', 'soil-testing', 19, NULL, '2019-05-31 07:40:03', '2019-05-31 07:40:03'),
(1365, 'Soil Nailing', 'soil-nailing', 19, NULL, '2019-05-31 07:40:18', '2019-05-31 07:40:18'),
(1366, 'Soil Testing Equipment', 'soil-testing-equipment', 19, NULL, '2019-05-31 07:40:31', '2019-05-31 07:40:31'),
(1367, 'Solar Heating Systems', 'solar-heating-systems', 19, NULL, '2019-05-31 07:40:44', '2019-05-31 07:40:44'),
(1368, 'Sound Systems & Equipment', 'sound-systems-equipment', 19, NULL, '2019-05-31 07:40:58', '2019-05-31 07:40:58'),
(1369, 'Sound Systems & Equipment - Renting', 'sound-systems-equipment-renting', 19, NULL, '2019-05-31 07:41:12', '2019-05-31 07:41:12'),
(1370, 'Spa', 'spa', 19, NULL, '2019-05-31 07:41:26', '2019-05-31 07:41:26'),
(1371, 'Spices', 'spices', 19, NULL, '2019-05-31 07:41:39', '2019-05-31 07:41:39'),
(1372, 'Sport Goods - Retail & Wholesale', 'sport-goods-retail-wholesale', 19, NULL, '2019-05-31 07:41:52', '2019-05-31 07:41:52'),
(1373, 'Sports Academy', 'sports-academy', 19, NULL, '2019-05-31 07:43:15', '2019-05-31 07:43:15'),
(1374, 'Sports And Leisure Activities', 'sports-and-leisure-activities', 19, NULL, '2019-05-31 07:43:28', '2019-05-31 07:43:28'),
(1375, 'Sports clubs & Associations', 'sports-clubs-associations', 19, NULL, '2019-05-31 07:43:40', '2019-05-31 07:43:40'),
(1376, 'Sports Complexes', 'sports-complexes', 19, NULL, '2019-05-31 07:43:53', '2019-05-31 07:43:53'),
(1377, 'Sports Fedaration', 'sports-fedaration', 19, NULL, '2019-05-31 07:44:07', '2019-05-31 07:44:07'),
(1378, 'Sports Goods - Retail', 'sports-goods-retail', 19, NULL, '2019-05-31 07:44:20', '2019-05-31 07:44:20'),
(1379, 'Springs - Manufacturers', 'springs-manufacturers', 19, NULL, '2019-05-31 07:44:32', '2019-05-31 07:44:32'),
(1380, 'Stage Lighting', 'stage-lighting', 19, NULL, '2019-05-31 07:44:45', '2019-05-31 07:44:45'),
(1381, 'Stainless Steel', 'stainless-steel', 19, NULL, '2019-05-31 07:44:56', '2019-05-31 07:44:56'),
(1382, 'Stainless Steel Fabricators', 'stainless-steel-fabricators', 19, NULL, '2019-05-31 07:45:09', '2019-05-31 07:45:09'),
(1383, 'Stationery - Retail', 'stationery-retail', 19, NULL, '2019-05-31 07:45:30', '2019-05-31 07:45:30'),
(1384, 'Stationery - Wholesale', 'stationery-wholesale', 19, NULL, '2019-05-31 07:45:43', '2019-05-31 07:45:43'),
(1385, 'Stationery - Wholesale & Retail', 'stationery-wholesale-retail', 19, NULL, '2019-05-31 07:45:59', '2019-05-31 07:45:59'),
(1386, 'Stationery Supplies', 'stationery-supplies', 19, NULL, '2019-05-31 07:46:14', '2019-05-31 07:46:14'),
(1387, 'Steam Bath Equipment & Supplies', 'steam-bath-equipment-supplies', 19, NULL, '2019-05-31 07:46:30', '2019-05-31 07:46:30'),
(1388, 'Steam Specialists', 'steam-specialists', 19, NULL, '2019-05-31 07:46:48', '2019-05-31 07:46:48'),
(1389, 'Steel - Manufacturers', 'steel-manufacturers', 19, NULL, '2019-05-31 07:47:00', '2019-05-31 07:47:00'),
(1390, 'Steel Contractors', 'steel-contractors', 19, NULL, '2019-05-31 07:47:18', '2019-05-31 07:47:18'),
(1391, 'Steel Fabricators', 'steel-fabricators', 19, NULL, '2019-05-31 07:47:31', '2019-05-31 07:47:31'),
(1392, 'Steel Furniture', 'steel-furniture', 19, NULL, '2019-05-31 07:47:45', '2019-05-31 07:47:45'),
(1393, 'Steel Products', 'steel-products', 19, NULL, '2019-05-31 07:47:58', '2019-05-31 07:47:58'),
(1394, 'Steel Sheets', 'steel-sheets', 19, NULL, '2019-05-31 07:48:10', '2019-05-31 07:48:10'),
(1395, 'Stock & Bond Brokers', 'stock-bond-brokers', 19, NULL, '2019-05-31 07:48:43', '2019-05-31 07:48:43'),
(1396, 'Stock Exchange', 'stock-exchange', 19, NULL, '2019-05-31 07:48:56', '2019-05-31 07:48:56'),
(1397, 'Stone Aggregates', 'stone-aggregates', 19, NULL, '2019-05-31 07:49:07', '2019-05-31 07:49:07'),
(1398, 'Storage Solutions', 'storage-solutions', 19, NULL, '2019-05-31 07:49:20', '2019-05-31 07:49:20'),
(1399, 'Sugar-free Food, Beverages & Confectionaries', 'sugar-free-food-beverages-confectionaries', 19, NULL, '2019-05-31 07:49:38', '2019-05-31 07:49:38'),
(1400, 'Super Markets', 'super-markets', 19, NULL, '2019-05-31 07:49:51', '2019-05-31 07:49:51'),
(1401, 'Supermarket Equipment & Supplies', 'supermarket-equipment-supplies', 19, NULL, '2019-05-31 07:50:06', '2019-05-31 07:50:06'),
(1402, 'Supplements & Vitamins', 'supplements-vitamins', 19, NULL, '2019-05-31 07:50:18', '2019-05-31 07:50:18'),
(1403, 'Surgical Appliances', 'surgical-appliances', 19, NULL, '2019-05-31 07:50:31', '2019-05-31 07:50:31'),
(1404, 'Surveying Instruments', 'surveying-instruments', 19, NULL, '2019-05-31 07:50:44', '2019-05-31 07:50:44'),
(1405, 'Surveying Instruments Repairing', 'surveying-instruments-repairing', 19, NULL, '2019-05-31 07:50:57', '2019-05-31 07:50:57'),
(1406, 'Surveyors', 'surveyors', 19, NULL, '2019-05-31 07:51:09', '2019-05-31 07:51:09'),
(1407, 'Surveyors - Land', 'surveyors-land', 19, NULL, '2019-05-31 07:51:22', '2019-05-31 07:51:22'),
(1408, 'Surveyors - Marine', 'surveyors-marine', 19, NULL, '2019-05-31 07:51:36', '2019-05-31 07:51:36'),
(1409, 'Surveyors Commodity', 'surveyors-commodity', 19, NULL, '2019-05-31 07:51:49', '2019-05-31 07:51:49'),
(1410, 'Swimming Clubs', 'swimming-clubs', 19, NULL, '2019-05-31 07:52:03', '2019-05-31 07:52:03'),
(1411, 'Swimming Pool Equipment Supplies & Contractors', 'swimming-pool-equipment-supplies-contractors', 19, NULL, '2019-05-31 07:52:18', '2019-05-31 07:52:18'),
(1412, 'Swimming Pools ', 'swimming-pools', 19, NULL, '2019-05-31 07:52:31', '2019-05-31 07:52:31'),
(1413, 'Systems Integrators', 'systems-integrators', 19, NULL, '2019-05-31 07:52:47', '2019-05-31 07:52:47'),
(1414, 'Tailors - Men s', 'tailors-men-s', 20, NULL, '2019-05-31 07:53:09', '2019-05-31 07:53:09'),
(1415, 'Tailors - Men s & women s - (Uni sex)', 'tailors-men-s-women-s-uni-sex', 20, NULL, '2019-05-31 07:53:27', '2019-05-31 07:53:27'),
(1416, 'Tailors - Women s', 'tailors-women-s', 20, NULL, '2019-05-31 07:53:45', '2019-05-31 07:53:45'),
(1417, 'Tapes - Sound Prerecording Manufacturers & Wholesale', 'tapes-sound-prerecording-manufacturers-wholesale', 20, NULL, '2019-05-31 07:53:59', '2019-05-31 07:53:59'),
(1418, 'Tapes Adhesives', 'tapes-adhesives', 20, NULL, '2019-05-31 07:54:13', '2019-05-31 07:54:13'),
(1419, 'Tatooes And Body Piercing', 'tatooes-and-body-piercing', 20, NULL, '2019-05-31 07:54:26', '2019-05-31 07:54:26'),
(1420, 'Tax Consultants', 'tax-consultants', 20, NULL, '2019-05-31 07:54:40', '2019-05-31 07:54:40'),
(1421, 'Taxi Cabs', 'taxi-cabs', 20, NULL, '2019-05-31 07:54:55', '2019-05-31 07:54:55'),
(1422, 'Tea - Flavours Suppliers', 'tea-flavours-suppliers', 20, NULL, '2019-05-31 07:55:08', '2019-05-31 07:55:08'),
(1423, 'Tea Bagging Materials', 'tea-bagging-materials', 20, NULL, '2019-05-31 07:55:22', '2019-05-31 07:55:22'),
(1424, 'Tea Brokers', 'tea-brokers', 20, NULL, '2019-05-31 07:55:42', '2019-05-31 07:55:42'),
(1425, 'Tea Centers', 'tea-centers', 20, NULL, '2019-05-31 07:55:53', '2019-05-31 07:55:53'),
(1426, 'Tea Exporters', 'tea-exporters', 20, NULL, '2019-05-31 07:56:08', '2019-05-31 07:56:08'),
(1427, 'Tea Factories & Estates', 'tea-factories-estates', 20, NULL, '2019-05-31 07:56:22', '2019-05-31 07:56:22'),
(1428, 'Tea Lounge', 'tea-lounge', 20, NULL, '2019-05-31 07:56:36', '2019-05-31 07:56:36'),
(1429, 'Tea Manufacturing Machinery & Spares', 'tea-manufacturing-machinery-spares', 20, NULL, '2019-05-31 07:56:50', '2019-05-31 07:56:50'),
(1430, 'Tea Packers - Bulk, Packets & Bags', 'tea-packers-bulk-packets-bags', 20, NULL, '2019-05-31 07:57:03', '2019-05-31 07:57:03'),
(1431, 'Tea Serving', 'tea-serving', 20, NULL, '2019-05-31 07:57:15', '2019-05-31 07:57:15'),
(1432, 'Tele - Shopping', 'tele-shopping', 20, NULL, '2019-05-31 07:57:26', '2019-05-31 07:57:26'),
(1433, 'Tele Dramas And Films', 'tele-dramas-and-films', 20, NULL, '2019-05-31 07:57:39', '2019-05-31 07:57:39'),
(1434, 'Telecommunication Accessories, Equipment & Radios', 'telecommunication-accessories-equipment-radios', 20, NULL, '2019-05-31 07:57:53', '2019-05-31 07:57:53'),
(1435, 'Telecommunication Equipment & Systems', 'telecommunication-equipment-systems', 20, NULL, '2019-05-31 07:58:08', '2019-05-31 07:58:08'),
(1436, 'Telecommunication Services', 'telecommunication-services', 20, NULL, '2019-05-31 07:58:21', '2019-05-31 07:58:21'),
(1437, 'Telecommunication Services Providers', 'telecommunication-services-providers', 20, NULL, '2019-05-31 07:58:34', '2019-05-31 07:58:34'),
(1438, 'Telecommunications', 'telecommunications', 20, NULL, '2019-05-31 07:58:48', '2019-05-31 07:58:48'),
(1439, 'Telephone Data & Power Cables', 'telephone-data-power-cables', 20, NULL, '2019-05-31 07:59:01', '2019-05-31 07:59:01'),
(1440, 'Telephone Equipment & System Repairing & Services', 'telephone-equipment-system-repairing-services', 20, NULL, '2019-05-31 07:59:15', '2019-05-31 07:59:15'),
(1441, 'Telephone Equipment & Systems', 'telephone-equipment-systems', 20, NULL, '2019-05-31 07:59:26', '2019-05-31 07:59:26'),
(1442, 'Television (TV) & Radio Dealers - Retail', 'television-tv-radio-dealers-retail', 20, NULL, '2019-05-31 07:59:37', '2019-05-31 07:59:37'),
(1443, 'Television (TV) & Radio Repairs & Services', 'television-tv-radio-repairs-services', 20, NULL, '2019-05-31 07:59:50', '2019-05-31 07:59:50'),
(1444, 'Television (TV) Programme Producers', 'television-tv-programme-producers', 20, NULL, '2019-05-31 08:00:02', '2019-05-31 08:00:02'),
(1445, 'Television (TV) Stations & Broadcasting Companies', 'television-tv-stations-broadcasting-companies', 20, NULL, '2019-05-31 08:00:16', '2019-05-31 08:00:16'),
(1446, 'Television (TV) Video Lighting', 'television-tv-video-lighting', 20, NULL, '2019-05-31 08:00:29', '2019-05-31 08:00:29'),
(1447, 'Television - Cables & Satellites', 'television-cables-satellites', 20, NULL, '2019-05-31 08:00:42', '2019-05-31 08:00:42'),
(1448, 'Textile Dealers', 'textile-dealers', 20, NULL, '2019-05-31 08:01:02', '2019-05-31 08:01:02'),
(1449, 'Textile Machinery', 'textile-machinery', 20, NULL, '2019-05-31 08:01:15', '2019-05-31 08:01:15'),
(1450, 'Textile Manufacturers', 'textile-manufacturers', 20, NULL, '2019-05-31 08:01:27', '2019-05-31 08:01:27'),
(1451, 'Theatre', 'theatre', 20, NULL, '2019-05-31 08:01:39', '2019-05-31 08:01:39'),
(1452, 'Theatre - Consultants', 'theatre-consultants', 20, NULL, '2019-05-31 08:01:52', '2019-05-31 08:01:52'),
(1453, 'Theme Parks', 'theme-parks', 20, NULL, '2019-05-31 08:02:06', '2019-05-31 08:02:06'),
(1454, 'Tiles - Ceramic', 'tiles-ceramic', 20, NULL, '2019-05-31 08:02:21', '2019-05-31 08:02:21'),
(1455, 'Tiles - Non Ceramic -Manufacturers & Distributors', 'tiles-non-ceramic-manufacturers-distributors', 20, NULL, '2019-05-31 08:02:34', '2019-05-31 08:02:34'),
(1456, 'Timber - Exporters & Importers', 'timber-exporters-importers', 20, NULL, '2019-05-31 08:02:49', '2019-05-31 08:02:49'),
(1457, 'Timber - Retail', 'timber-retail', 20, NULL, '2019-05-31 08:03:02', '2019-05-31 08:03:02'),
(1458, 'Timber - Wholesale', 'timber-wholesale', 20, NULL, '2019-05-31 08:15:20', '2019-05-31 08:15:20'),
(1459, 'Timber Dealers & Carpenters', 'timber-dealers-carpenters', 20, NULL, '2019-05-31 08:15:33', '2019-05-31 08:15:33'),
(1460, 'Timber Cutting Machine Manufacturing', 'timber-cutting-machine-manufacturing', 20, NULL, '2019-05-31 08:15:47', '2019-05-31 08:15:47'),
(1461, 'Timber Importers', 'timber-importers', 20, NULL, '2019-05-31 08:16:00', '2019-05-31 08:16:00'),
(1462, 'Timber Mills', 'timber-mills', 20, NULL, '2019-05-31 08:16:15', '2019-05-31 08:16:15'),
(1463, 'Toll Gates & Parking Systems', 'toll-gates-parking-systems', 20, NULL, '2019-05-31 08:16:28', '2019-05-31 08:16:28'),
(1464, 'Touch Screen & Large Format Displays', 'touch-screen-large-format-displays', 20, NULL, '2019-05-31 08:16:45', '2019-05-31 08:16:45'),
(1465, 'Tourist Guide', 'tourist-guide', 20, NULL, '2019-05-31 08:16:56', '2019-05-31 08:16:56'),
(1466, 'Tourist Police', 'tourist-police', 20, NULL, '2019-05-31 08:17:14', '2019-05-31 08:17:14'),
(1467, 'Toys - Manufacturers', 'toys-manufacturers', 20, NULL, '2019-05-31 08:17:26', '2019-05-31 08:17:26'),
(1468, 'Toys - Retail & Wholesale', 'toys-retail-wholesale', 20, NULL, '2019-05-31 08:17:39', '2019-05-31 08:17:39'),
(1469, 'Tractor Dealers', 'tractor-dealers', 20, NULL, '2019-05-31 08:17:51', '2019-05-31 08:17:51'),
(1470, 'Tractor Distributors', 'tractor-distributors', 20, NULL, '2019-05-31 08:18:04', '2019-05-31 08:18:04'),
(1471, 'Tractor Equipment & Parts', 'tractor-equipment-parts', 20, NULL, '2019-05-31 08:18:18', '2019-05-31 08:18:18'),
(1472, 'Trade Unions', 'trade-unions', 20, NULL, '2019-05-31 08:18:32', '2019-05-31 08:18:32'),
(1473, 'Traffic Signal Systems', 'traffic-signal-systems', 20, NULL, '2019-05-31 08:18:49', '2019-05-31 08:18:49'),
(1474, 'Trailer Manufacturers', 'trailer-manufacturers', 20, NULL, '2019-05-31 08:19:01', '2019-05-31 08:19:01'),
(1475, 'Trailers - Equipment & Parts', 'trailers-equipment-parts', 20, NULL, '2019-05-31 08:19:15', '2019-05-31 08:19:15'),
(1476, 'Training - Human Resources Development', 'training-human-resources-development', 20, NULL, '2019-05-31 08:19:28', '2019-05-31 08:19:28'),
(1477, 'Transformers', 'transformers', 20, NULL, '2019-05-31 08:19:40', '2019-05-31 08:19:40'),
(1478, 'Translators', 'translators', 20, NULL, '2019-05-31 08:19:53', '2019-05-31 08:19:53'),
(1479, 'Translators - Interpreters', 'translators-interpreters', 20, NULL, '2019-05-31 08:20:04', '2019-05-31 08:20:04'),
(1480, 'Transport & Transport Agencies', 'transport-transport-agencies', 20, NULL, '2019-05-31 08:20:18', '2019-05-31 08:20:18'),
(1481, 'Transportation & Utility Vehicle ', 'transportation-utility-vehicle', 20, NULL, '2019-05-31 08:20:32', '2019-05-31 08:20:32'),
(1482, 'Travel Agents', 'travel-agents', 20, NULL, '2019-05-31 08:20:45', '2019-05-31 08:20:45'),
(1483, 'Travel Bureaux', 'travel-bureaux', 20, NULL, '2019-05-31 08:20:59', '2019-05-31 08:20:59'),
(1484, 'Treasury Bills & Bonds - Primary Dealers', 'treasury-bills-bonds-primary-dealers', 20, NULL, '2019-05-31 08:21:13', '2019-05-31 08:21:13'),
(1485, 'Tree Cutter', 'tree-cutter', 20, NULL, '2019-05-31 08:21:26', '2019-05-31 08:21:26'),
(1486, 'Tree Cutting & Garden Cleaning', 'tree-cutting-garden-cleaning', 20, NULL, '2019-05-31 08:21:39', '2019-05-31 08:21:39'),
(1487, 'Trophies - Manufacturers & Retail', 'trophies-manufacturers-retail', 20, NULL, '2019-05-31 08:21:55', '2019-05-31 08:21:55'),
(1488, 'Truck Body - Manufacturers', 'truck-body-manufacturers', 20, NULL, '2019-05-31 08:22:08', '2019-05-31 08:22:08'),
(1489, 'Tube Wells', 'tube-wells', 20, NULL, '2019-05-31 08:22:22', '2019-05-31 08:22:22'),
(1490, 'Tyre Manufacturers, Distributors & Dealers', 'tyre-manufacturers-distributors-dealers', 20, NULL, '2019-05-31 08:22:38', '2019-05-31 08:22:38'),
(1491, 'Tyre & Tubes - Retail & Wholesale', 'tyre-tubes-retail-wholesale', 20, NULL, '2019-05-31 08:22:51', '2019-05-31 08:22:51'),
(1492, 'Tyre Changing & Service Equipment', 'tyre-changing-service-equipment', 20, NULL, '2019-05-31 08:23:05', '2019-05-31 08:23:05'),
(1493, 'Tyre Manufacturing Materials', 'tyre-manufacturing-materials', 20, NULL, '2019-05-31 08:23:17', '2019-05-31 08:23:17'),
(1494, 'Tyre Dealers', 'tyre-dealers', 20, NULL, '2019-05-31 08:23:31', '2019-05-31 08:23:31'),
(1495, 'Tyres & Tyre Services', 'tyres-tyre-services', 20, NULL, '2019-05-31 08:23:44', '2019-05-31 08:23:44'),
(1496, 'Labelling Machines', 'labelling-machines', 12, NULL, '2019-05-31 08:24:25', '2019-05-31 08:24:25'),
(1497, 'Labels - Plastic, Metal, Foil etc', 'labels-plastic-metal-foil-etc', 12, NULL, '2019-05-31 08:24:40', '2019-05-31 08:24:40'),
(1498, 'Labels Fabric', 'labels-fabric', 12, NULL, '2019-05-31 08:24:52', '2019-05-31 08:24:52'),
(1499, 'Laboratories - Medical', 'laboratories-medical', 12, NULL, '2019-05-31 08:25:05', '2019-05-31 08:25:05'),
(1500, 'Laboratories - Testing', 'laboratories-testing', 12, NULL, '2019-05-31 08:25:18', '2019-05-31 08:25:18'),
(1501, 'Laboratory Equipment & Supplies', 'laboratory-equipment-supplies', 12, NULL, '2019-05-31 08:25:31', '2019-05-31 08:25:31'),
(1502, 'Laboratory Equipment Services & Calibration', 'laboratory-equipment-services-calibration', 12, NULL, '2019-05-31 08:25:44', '2019-05-31 08:25:44'),
(1503, 'Ladders', 'ladders', 12, NULL, '2019-05-31 08:25:57', '2019-05-31 08:25:57'),
(1504, 'Laminating Suppliers & Equipment', 'laminating-suppliers-equipment', 12, NULL, '2019-05-31 08:26:12', '2019-05-31 08:26:12'),
(1505, 'Land Sales', 'land-sales', 12, NULL, '2019-05-31 08:26:26', '2019-05-31 08:26:26'),
(1506, 'Land Sales - Brokers', 'land-sales-brokers', 12, NULL, '2019-05-31 08:26:39', '2019-05-31 08:26:39'),
(1507, 'Landscape Architects', 'landscape-architects', 12, NULL, '2019-05-31 08:26:52', '2019-05-31 08:26:52'),
(1508, 'Landscape Contractors', 'landscape-contractors', 12, NULL, '2019-05-31 08:27:04', '2019-05-31 08:27:04'),
(1509, 'Lapidary Equipment & Supplies', 'lapidary-equipment-supplies', 12, NULL, '2019-05-31 08:27:17', '2019-05-31 08:27:17'),
(1510, 'Laser Cutting & Engraving - Fabric Plastic Glass etc', 'laser-cutting-engraving-fabric-plastic-glass-etc', 12, NULL, '2019-05-31 08:27:29', '2019-05-31 08:27:29'),
(1511, 'Lathe Machines -CNC', 'lathe-machines-cnc', 12, NULL, '2019-05-31 08:27:44', '2019-05-31 08:27:44'),
(1512, 'Lathe Works', 'lathe-works', 12, NULL, '2019-05-31 08:27:57', '2019-05-31 08:27:57'),
(1513, 'Lathe Works - Automobile', 'lathe-works-automobile', 12, NULL, '2019-05-31 08:28:10', '2019-05-31 08:28:10'),
(1514, 'Laundries', 'laundries', 12, NULL, '2019-05-31 08:28:26', '2019-05-31 08:28:26'),
(1515, 'Laundries - Commercial', 'laundries-commercial', 12, NULL, '2019-05-31 08:28:39', '2019-05-31 08:28:39'),
(1516, 'Laundry Equipment', 'laundry-equipment', 12, NULL, '2019-05-31 08:28:52', '2019-05-31 08:28:52'),
(1517, 'Leather Goods', 'leather-goods', 12, NULL, '2019-05-31 08:29:10', '2019-05-31 08:29:10'),
(1518, 'Leisure Park Equipment & Supplies', 'leisure-park-equipment-supplies', 12, NULL, '2019-05-31 08:29:22', '2019-05-31 08:29:22'),
(1519, 'Libraries', 'libraries', 12, NULL, '2019-05-31 08:29:35', '2019-05-31 08:29:35'),
(1520, 'Lifting Equipment', 'lifting-equipment', 12, NULL, '2019-05-31 08:29:48', '2019-05-31 08:29:48'),
(1521, 'Lighting - Fittings', 'lighting-fittings', 12, NULL, '2019-05-31 08:30:05', '2019-05-31 08:30:05'),
(1522, 'Lighting Consultants', 'lighting-consultants', 12, NULL, '2019-05-31 08:30:18', '2019-05-31 08:30:18'),
(1523, 'Lighting Equipment & Systems - Renting', 'lighting-equipment-systems-renting', 12, NULL, '2019-05-31 08:30:31', '2019-05-31 08:30:31'),
(1524, 'Lighting Fixtures - Retail', 'lighting-fixtures-retail', 12, NULL, '2019-05-31 08:30:45', '2019-05-31 08:30:45'),
(1525, 'Lighting Fixtures -Wholesale & Manufacturers', 'lighting-fixtures-wholesale-manufacturers', 12, NULL, '2019-05-31 08:30:57', '2019-05-31 08:30:57'),
(1526, 'Lightning Protection Equipment', 'lightning-protection-equipment', 12, NULL, '2019-05-31 08:31:11', '2019-05-31 08:31:11'),
(1527, 'Lingerie', 'lingerie', 12, NULL, '2019-05-31 08:31:24', '2019-05-31 08:31:24'),
(1528, 'Liquid Transportation', 'liquid-transportation', 12, NULL, '2019-05-31 08:31:38', '2019-05-31 08:31:38'),
(1529, 'Liquidators', 'liquidators', 12, NULL, '2019-05-31 08:31:56', '2019-05-31 08:31:56'),
(1530, 'Livestock Equipment & Supplies', 'livestock-equipment-supplies', 12, NULL, '2019-05-31 08:32:10', '2019-05-31 08:32:10'),
(1531, 'Logistics Support Companies And/Or Facilities', 'logistics-support-companies-andor-facilities', 12, NULL, '2019-05-31 08:32:24', '2019-05-31 08:32:24'),
(1532, 'Lotteries', 'lotteries', 12, NULL, '2019-05-31 08:32:38', '2019-05-31 08:32:38'),
(1533, 'Labels Printed & Weaven', 'labels-printed-weaven', 12, NULL, '2019-05-31 08:32:53', '2019-05-31 08:32:53'),
(1534, 'Land Developers', 'land-developers', 12, NULL, '2019-05-31 08:33:06', '2019-05-31 08:33:06'),
(1535, 'Language Training Center', 'language-training-center', 12, NULL, '2019-05-31 08:33:18', '2019-05-31 08:33:18'),
(1536, 'Law Firm', 'law-firm', 12, NULL, '2019-05-31 08:33:31', '2019-05-31 08:33:31'),
(1537, 'Lawyers (Civil)', 'lawyers-civil', 12, NULL, '2019-05-31 08:33:45', '2019-05-31 08:33:45'),
(1538, 'Lawyers (Criminal)', 'lawyers-criminal', 12, NULL, '2019-05-31 08:34:00', '2019-05-31 08:34:00'),
(1539, 'Leather Chemical', 'leather-chemical', 12, NULL, '2019-05-31 08:34:14', '2019-05-31 08:34:14'),
(1540, 'Library', 'library', 12, NULL, '2019-05-31 08:34:27', '2019-05-31 08:34:27'),
(1541, 'Lifts, Elevators & Escalators', 'lifts-elevators-escalators', 12, NULL, '2019-05-31 08:34:40', '2019-05-31 08:34:40'),
(1542, 'Logistic Support', 'logistic-support', 12, NULL, '2019-05-31 08:34:52', '2019-05-31 08:34:52'),
(1543, 'College', 'college', 3, NULL, '2019-06-15 15:25:15', '2019-06-15 15:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_wise_clients`
--

CREATE TABLE `category_wise_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_wise_clients`
--

INSERT INTO `category_wise_clients` (`id`, `client_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 8, 3, '2019-06-17 00:32:19', '2019-06-17 00:32:19'),
(2, 1, 1335, '2019-06-17 00:34:16', '2019-06-17 00:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_head` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ofc_tel_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_type` enum('bronze','silver','gold','diamond','platinum','free_listing') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_nature` enum('manufacture','business','product') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_profile` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `alpha_id` int(11) DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `slug`, `company_address`, `logo`, `banner`, `website`, `office_contact`, `company_head`, `mobile`, `ofc_tel_no`, `client_type`, `company_nature`, `company_profile`, `user_id`, `district_id`, `cat_id`, `alpha_id`, `map_link`, `password`, `entry_by`, `created_at`, `updated_at`) VALUES
(1, 'Global Security Services Pvt. Ltd', 'global-security-services-pvt-ltd', 'Putalisadak, Ramsahapath, Kathmandu, Nepal', NULL, '66bf465769aaf78a9a1d0a3f8fd34a46.1560584471.jpg', 'https://www.nohyd.com.au', NULL, 'Ganesh Bdr Thapa', '9843683504', '234566', 'diamond', 'business', '<p>Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:</p>', 2, 3, NULL, 7, 'https://www.dybyqyqyze.us', 'ganesh', NULL, '2019-06-09 11:10:31', '2019-06-15 01:56:11'),
(2, 'Velasquez and Burton Trading Pvt.Ltd', 'velasquez-and-burton-trading-pvtltd', 'Humphrey and Moody Trading', '604e6398bc4e4595180100bcd61a821f.1560243632.jpeg', 'f5ea2cf502d9694f71485b78945d63e4.1560243632.jpg', 'https://www.mawi.in', NULL, 'Cooley and Moran Co', '9843683504', '561234', 'diamond', 'business', '<p>Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:</p>', 4, 3, NULL, 22, 'Inventore nesciunt', 'ganesh', 3, '2019-06-11 03:15:32', '2019-06-15 22:18:11'),
(3, 'Mueller and Townsend Plc', 'mueller-and-townsend-plc', 'Hoover Parker Co', NULL, NULL, 'https://www.nohebinityty.me', NULL, 'Frank Hoffman Trading', '7', '39', 'diamond', 'business', NULL, 6, 1, NULL, 23, 'Quia velit perspici', 'Pa$$w0rd!', 5, '2019-06-11 03:34:01', '2019-06-11 03:34:01'),
(4, 'Stout and Alvarez Manufactures', 'stout-and-alvarez-manufactures', 'Wells and Hardy Plc', '6da915c2c58716724b4509637a4250b8.1560246090.png', '3b4f8484bc0951bf2672da52f6da58e1.1560246090.jpg', 'https://www.mavolex.com', NULL, 'Beach Obrien Inc', '9843683504', '112345', 'gold', 'manufacture', '<p>&nbsp;District Name Created Successfully&nbsp;District Name Created Successfully&nbsp;District Name Created Successfully</p>', 7, 1, NULL, 19, 'Autem veniam numqua', 'Pa$$w0rd!', 1, '2019-06-11 03:56:30', '2019-06-11 03:56:30'),
(5, 'Campos and Peterson Company Pvt.Ltd.', 'campos-and-peterson-company-pvtltd', 'p', 'ca8c612bdf66fb3177d9bda4757c5b2c.1560354373.jpeg', '1ba28b7546da1adc7b0e33e1f151e987.1560354373.jpg', 'https://www.dekakeg.ws', NULL, 'Jordan and Steele LLC', '9843683504', '12345678', 'diamond', 'business', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 8, 2, NULL, 22, 'Kathmandu', 'Pa$$w0rd!', 1, '2019-06-12 10:01:13', '2019-06-12 10:01:13'),
(6, 'Fry Solis Trading College Pvt.Ltd.', 'fry-solis-trading-college-pvtltd', 'Strickland and Huber Associates', '6c099f61a6bd0e6416915cc61c5d4551.1560354663.png', '62d02280fe6e25d87e400610b356313a.1560354663.jpg', 'https://www.xiso.cm', NULL, 'Sutton and Wolf Plc', '9843683504', '4912345', 'diamond', 'business', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 9, 3, NULL, NULL, 'Dolor laboriosam id', 'Pa$$w0rd!', 1, '2019-06-12 10:06:03', '2019-06-12 10:06:31'),
(7, 'Boston Education Consultancy', 'boston-education-consultancy', 'Garrett Walters Traders', 'bed74ca517765c02d8febc4a8d8b7069.1560354803.png', '8d13b31a2351b2aa42ac331d3b5d27f0.1560354803.jpg', 'https://www.bycamu.us', NULL, 'Hester Mckee Associates', '9821990578', '12345', 'diamond', 'business', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 10, 1, NULL, 2, 'Ab obcaecati deserun', 'Pa$$w0rd!', 1, '2019-06-12 10:08:23', '2019-06-12 10:08:23'),
(8, 'Connect Education Consultancy', 'connect-education-consultancy', 'Putalisadak, Ramsahapath, Kathmandu, Nepal', '35e7a9352024dfe1db49538c2c5c3cd8.1560354910.png', '8045a322c180db9c4dfc386770154169.1560354910.jpg', 'https://www.lekeceseruwyru.tv', NULL, 'Jenkins and Walters Co', '9843683504', '132345', 'diamond', 'business', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 11, 2, NULL, 3, 'Expedita impedit au', 'Pa$$w0rd!', 1, '2019-06-12 10:10:10', '2019-06-12 10:10:10'),
(9, 'OrgansCare Pvt. Ltd.', 'organscare-pvt-ltd', 'Kathmandu -12, kalanki', 'e53e643f6ba02f593cfe39d5de3c050c.1560355006.png', '1c47882bf69ec354bdc9084087bac1f3.1560355006.jpg', 'https://www.jykyju.com', NULL, 'Meyers Reid Plc', '9843683504', '40', 'diamond', 'business', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 12, 1, NULL, 15, 'In amet nisi offici', 'Pa$$w0rd!', 1, '2019-06-12 10:11:46', '2019-06-12 10:11:46'),
(10, 'Mack Manufacturing  Company Pvt.Ltd.', 'mack-manufacturing-company-pvtltd', 'Chandler Francis Associates', '5ed0497ed48e388221d954734795cbfb.1560355450.jpeg', 'dbf81aa1bc68cd62b9b6e9a207fe3a5c.1560355450.jpg', 'https://www.voxu.net', NULL, 'Jackson Sheppard Trading', '9843683504', '100123456', 'diamond', 'manufacture', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 13, 3, NULL, NULL, 'Obcaecati voluptatem', 'Pa$$w0rd!', 1, '2019-06-12 10:19:10', '2019-06-12 10:19:23'),
(11, 'Apple Manufacturing   Comapny', 'apple-manufacturing-comapny', 'Kathmandu -12, Putalisadak', 'cd3ec7b1040240c00f9bef478fa919c6.1560355664.png', 'b75b98b155787833470e838d53005982.1560355664.jpg', 'https://www.niqyv.info', NULL, 'Lindsey and Mack Trading', '36', '67', 'diamond', 'manufacture', '<p>Manufacturing category</p>\r\n\r\n<p><strong>Types of&nbsp;<strong>Manufacturing</strong>&nbsp;Industries</strong></p>\r\n\r\n<ul>\r\n	<li>Clothing and Textiles. Companies that process raw wool, cotton and flax to make cloth are categorized under the clothing and textiles sector. ...</li>\r\n	<li>Petroleum, Chemicals and Plastics. ...</li>\r\n	<li>Electronics, Computers and Transportation. ...</li>\r\n	<li>Food Production. ...</li>\r\n	<li>Metal&nbsp;<strong>Manufacturing</strong>. ...</li>\r\n	<li>Wood, Leather and Paper.</li>\r\n</ul>', 14, 3, NULL, NULL, 'Qui rerum est at sit', 'Pa$$w0rd!', 1, '2019-06-12 10:22:44', '2019-06-12 10:22:55'),
(12, 'Sellers and Williams Manufacture', 'sellers-and-williams-manufacture', 'Balaju Nepal', '698da48d2a94bd3acf3f5251b207038e.1560355827.png', 'f12cebbaddaec2249c06194bd5ca70e0.1560355886.jpg', 'https://www.vomivehofax.cm', NULL, 'Crosby Vazquez Plc', '9843683504', '12345682', 'diamond', 'manufacture', '<p>Manufacturing category</p>\r\n\r\n<p><strong>Types of&nbsp;<strong>Manufacturing</strong>&nbsp;Industries</strong></p>\r\n\r\n<ul>\r\n	<li>Clothing and Textiles. Companies that process raw wool, cotton and flax to make cloth are categorized under the clothing and textiles sector. ...</li>\r\n	<li>Petroleum, Chemicals and Plastics. ...</li>\r\n	<li>Electronics, Computers and Transportation. ...</li>\r\n	<li>Food Production. ...</li>\r\n	<li>Metal&nbsp;<strong>Manufacturing</strong>. ...</li>\r\n	<li>Wood, Leather and Paper.</li>\r\n</ul>', 15, 3, NULL, NULL, 'Inventore pariatur', 'Pa$$w0rd!', 1, '2019-06-12 10:25:27', '2019-06-12 10:26:26'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 16, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:26:41', '2019-06-15 00:26:41'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 17, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:26:55', '2019-06-15 00:26:55'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 18, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:28:09', '2019-06-15 00:28:09'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 19, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:29:30', '2019-06-15 00:29:30'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 20, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:32:07', '2019-06-15 00:32:07'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 21, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 00:34:27', '2019-06-15 00:34:27'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, 'Ram Company ', 22, NULL, NULL, NULL, NULL, 'ram12', NULL, '2019-06-15 00:39:16', '2019-06-15 00:39:16'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 23, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 08:38:30', '2019-06-15 08:38:30'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 24, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 09:03:14', '2019-06-15 09:03:14'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 25, NULL, NULL, NULL, NULL, '12345', NULL, '2019-06-15 09:06:08', '2019-06-15 09:06:08'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 26, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 09:08:31', '2019-06-15 09:08:31'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 27, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-15 09:19:58', '2019-06-15 09:19:58'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 28, NULL, NULL, NULL, NULL, 'ganesh', NULL, '2019-06-18 09:55:23', '2019-06-18 09:55:23'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 29, NULL, NULL, NULL, NULL, 'rambdr', NULL, '2019-06-19 04:39:46', '2019-06-19 04:39:46'),
(27, 'Aguilar and Finch Associates', 'aguilar-and-finch-associates', 'Parks and Cervantes Plc', '1f6036141f923a4f31b55d6c23a935ed.1561003727.jpg', 'dca72c9b9f76ba36f20995f465a1a9b3.1561003727.jpg', 'https://www.givycuj.info', NULL, 'Santana and Nieves Associates', '9821990578', '73123456', 'bronze', 'manufacture', '<p>High quality shoes for ladies and gentlemen.&nbsp;Available for wholesale and retails throughout Nepal.&nbsp;Remember us to make shoes as per your order.</p>', 30, 3, NULL, NULL, 'Iure officia in quia', 'Pa$$w0rd!', 3, '2019-06-19 22:23:47', '2019-06-20 04:19:04'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 31, NULL, NULL, NULL, NULL, 'ganesh', NULL, '2019-06-20 04:29:05', '2019-06-20 04:29:05'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 32, NULL, NULL, NULL, NULL, '123', NULL, '2019-06-21 02:23:57', '2019-06-21 02:23:57'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 33, NULL, NULL, NULL, NULL, 'admin1', NULL, '2019-06-21 02:26:02', '2019-06-21 02:26:02'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'business', NULL, 34, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-21 09:32:50', '2019-06-21 09:32:50'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'business', NULL, 35, NULL, NULL, NULL, NULL, '12345', NULL, '2019-06-21 09:33:48', '2019-06-21 09:33:48'),
(33, 'Stein and Dodson Traders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111111111111111111111111111', NULL, 'business', NULL, 36, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-21 09:37:13', '2019-06-21 09:37:13'),
(34, 'Global Security Services Pvt. Ltd', 'Global Security Services Pvt. Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9888888888888', NULL, 'business', NULL, 37, NULL, NULL, NULL, NULL, 'sagar1', NULL, '2019-06-21 10:49:25', '2019-06-21 10:49:25'),
(35, 'Asian Technology Pvt. Ltd.', 'Asian Technology Pvt. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '011234567', NULL, 'business', NULL, 38, NULL, NULL, NULL, NULL, 'asian', NULL, '2019-06-23 06:20:17', '2019-06-23 06:20:17'),
(36, 'Asian Technology Pvt. Ltd.', 'Asian Technology Pvt. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9843683504', NULL, 'business', NULL, 39, NULL, NULL, NULL, NULL, 'asian', NULL, '2019-06-23 06:21:38', '2019-06-23 06:21:38'),
(37, 'Test Demo Manufacture Pvt. Ltd.', 'Test Demo Manufacture Pvt. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9843683504', NULL, 'business', NULL, 40, NULL, NULL, NULL, NULL, 'test2', NULL, '2019-06-23 06:30:20', '2019-06-23 06:30:20'),
(38, 'Singleton and Watkins Trading', 'Singleton and Watkins Trading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nulla in sit velit n', NULL, 'business', NULL, 41, NULL, NULL, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-06-23 07:00:47', '2019-06-23 07:00:47'),
(39, 'Tyler and Harrell Co', 'Tyler and Harrell Co', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'In soluta velit qui', NULL, 'business', NULL, 42, NULL, NULL, NULL, NULL, 'test', NULL, '2019-06-23 07:01:16', '2019-06-23 07:01:16'),
(40, 'Demo1 Manufacture Pvt. Ltd.', 'Demo1 Manufacture Pvt. Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9843683504', NULL, 'business', NULL, 43, NULL, NULL, NULL, NULL, 'demo', NULL, '2019-06-23 07:03:14', '2019-06-23 07:03:14'),
(41, 'Global Security Services Pvt. Ltd', 'Global Security Services Pvt. Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9843683504', NULL, 'business', NULL, 44, NULL, NULL, NULL, NULL, '123', NULL, '2019-06-24 00:07:38', '2019-06-24 00:07:38'),
(42, 'Global Security Services Pvt. Ltd', 'Global Security Services Pvt. Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09843683504', NULL, 'business', NULL, 45, NULL, NULL, NULL, NULL, 'ganesh', NULL, '2019-06-24 01:12:49', '2019-06-24 01:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `client_about_us`
--

CREATE TABLE `client_about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `status` enum('publish','draft','trash') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_about_us`
--

INSERT INTO `client_about_us` (`id`, `title`, `slug`, `client_id`, `status`, `file`, `details`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, NULL, NULL, '<p>Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:Your model name should start with an uppercase letter and your file name should be the same. And I suspect Laravel is picking your model name as t_orders because your model name is starting with a lowercase letter. However, in your case for example, your filename should be&nbsp;<code>Torders.php</code>&nbsp;and code should be:</p>', '2019-06-09 11:10:31', '2019-06-09 11:16:48'),
(2, NULL, NULL, 13, NULL, NULL, NULL, '2019-06-15 00:26:41', '2019-06-15 00:26:41'),
(3, NULL, NULL, 14, NULL, NULL, NULL, '2019-06-15 00:26:55', '2019-06-15 00:26:55'),
(4, NULL, NULL, 15, NULL, NULL, NULL, '2019-06-15 00:28:09', '2019-06-15 00:28:09'),
(5, NULL, NULL, 16, NULL, NULL, NULL, '2019-06-15 00:29:30', '2019-06-15 00:29:30'),
(6, NULL, NULL, 17, NULL, NULL, NULL, '2019-06-15 00:32:07', '2019-06-15 00:32:07'),
(7, NULL, NULL, 18, NULL, NULL, NULL, '2019-06-15 00:34:27', '2019-06-15 00:34:27'),
(8, NULL, NULL, 19, NULL, NULL, NULL, '2019-06-15 00:39:16', '2019-06-15 00:39:16'),
(9, NULL, NULL, 20, NULL, NULL, NULL, '2019-06-15 08:38:30', '2019-06-15 08:38:30'),
(10, NULL, NULL, 21, NULL, NULL, NULL, '2019-06-15 09:03:14', '2019-06-15 09:03:14'),
(11, NULL, NULL, 22, NULL, NULL, NULL, '2019-06-15 09:06:08', '2019-06-15 09:06:08'),
(12, NULL, NULL, 23, NULL, NULL, NULL, '2019-06-15 09:08:31', '2019-06-15 09:08:31'),
(13, NULL, NULL, 24, NULL, NULL, NULL, '2019-06-15 09:19:58', '2019-06-15 09:19:58'),
(14, NULL, NULL, 25, NULL, NULL, NULL, '2019-06-18 09:55:23', '2019-06-18 09:55:23'),
(15, NULL, NULL, 26, NULL, NULL, NULL, '2019-06-19 04:39:47', '2019-06-19 04:39:47'),
(16, NULL, NULL, 28, NULL, NULL, NULL, '2019-06-20 04:29:05', '2019-06-20 04:29:05'),
(17, NULL, NULL, 29, NULL, NULL, NULL, '2019-06-21 02:23:57', '2019-06-21 02:23:57'),
(18, NULL, NULL, 30, NULL, NULL, NULL, '2019-06-21 02:26:02', '2019-06-21 02:26:02'),
(19, NULL, NULL, 31, NULL, NULL, NULL, '2019-06-21 09:32:50', '2019-06-21 09:32:50'),
(20, NULL, NULL, 32, NULL, NULL, NULL, '2019-06-21 09:33:48', '2019-06-21 09:33:48'),
(21, NULL, NULL, 33, NULL, NULL, NULL, '2019-06-21 09:37:13', '2019-06-21 09:37:13'),
(22, NULL, NULL, 34, NULL, NULL, NULL, '2019-06-21 10:49:25', '2019-06-21 10:49:25'),
(23, NULL, NULL, 35, NULL, NULL, NULL, '2019-06-23 06:20:17', '2019-06-23 06:20:17'),
(24, NULL, NULL, 36, NULL, NULL, NULL, '2019-06-23 06:21:38', '2019-06-23 06:21:38'),
(25, NULL, NULL, 37, NULL, NULL, NULL, '2019-06-23 06:30:20', '2019-06-23 06:30:20'),
(26, NULL, NULL, 38, NULL, NULL, NULL, '2019-06-23 07:00:47', '2019-06-23 07:00:47'),
(27, NULL, NULL, 39, NULL, NULL, NULL, '2019-06-23 07:01:16', '2019-06-23 07:01:16'),
(28, NULL, NULL, 40, NULL, NULL, NULL, '2019-06-23 07:03:14', '2019-06-23 07:03:14'),
(29, NULL, NULL, 41, NULL, NULL, NULL, '2019-06-24 00:07:38', '2019-06-24 00:07:38'),
(30, NULL, NULL, 42, NULL, NULL, NULL, '2019-06-24 01:12:49', '2019-06-24 01:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `client_contact_us`
--

CREATE TABLE `client_contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_image_galleries`
--

CREATE TABLE `client_image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_product_services`
--

CREATE TABLE `client_product_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_profiles`
--

CREATE TABLE `client_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client__types`
--

CREATE TABLE `client__types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_natures`
--

CREATE TABLE `company_natures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_natures`
--

INSERT INTO `company_natures` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'business', '2019-06-09 11:02:21', '2019-06-09 11:02:21'),
(2, 'Manufacture', 'manufacture', '2019-06-09 11:02:21', '2019-06-09 11:02:21'),
(3, 'Product', 'product', '2019-06-09 11:02:21', '2019-06-09 11:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 1, '2019-06-09 11:02:20', '2019-06-09 11:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `state_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 1, 1, '2019-06-09 11:02:20', '2019-06-09 11:02:20'),
(2, 'Bhaktapur', 1, 1, '2019-06-11 03:41:08', '2019-06-11 03:41:08'),
(3, 'Arghakhanchi', 2, 1, '2019-06-11 03:42:17', '2019-06-11 03:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) NOT NULL,
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
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `alpha_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `district_id`, `address`, `contact`, `image`, `website`, `map_link`, `status`, `details`, `cat_id`, `user_id`, `alpha_id`, `created_at`, `updated_at`) VALUES
(1, 'Janaki Mandir', 'janaki-mandir', 21, 'Janakpurdham, Dhanusha', NULL, 'e0ec036b8c9de15b53f693f99073468a.1560995166.jpg', NULL, NULL, '0', '<p>Janaki Mandir is a Hindu temple in Janakpur in the Mithila region of Nepal, dedicated to the Hindu goddess Sita. It is an example of Hindu-Rajput Nepali architecture. It is often considered the most important model of Rajput architecture in Nepal.</p>', 41, 1, 10, '2019-06-20 06:46:06', '2019-06-20 06:46:06'),
(2, 'Chandragiri Hills Resort', 'chandragiri-hills-resort', 1, 'Thankot Kathmandu, Nepal', '9823284814', 'cca4c43e48878a53b696ba575ccf9350.1560995649.jpg', 'http://www.chandragirihills.com', NULL, '0', '<p>&nbsp;</p>\r\n\r\n<p>Hotel Resort</p>', 23, 1, 3, '2019-06-20 06:54:09', '2019-06-20 06:54:09'),
(3, 'Manakamana Cable Car', 'manakamana-cable-car', 48, 'Manakamana, Gorkha.', '014434860', 'f8ef94d488769aa9968eb34941bfcf5a.1560996215.jpg', 'http://www.chitawoncoe.com.np', NULL, '1', '<p>Manakamana Cable Car, is an ISO 9001 : 2008 certified company is owned and operated by Manakamana Darshan P. Ltd., a Subsidiary of Chitawon Co E Group, is the first &amp; pioneering Cable Car Service of Nepal Providing service from Cheres, Darechowk VDC Chitwan to the one of the most important hindu Pilgrimage Manakamana at Gorkha.&nbsp;<br />\r\nThe Commercial operation started in November 23, 1998 and has completed 17 years of operation and has provided service to over 10 Million visitors as of now.<br />\r\nUsing the world&rsquo;s leader in ropeway technology from Doppelmayr of Austria,it provides excellent services including parking facility, a multi cuisine restaurant, fast food, Souvenir shop etc for the comfort of our visitors.<br />\r\nThe Cable Car service has promoted the Manakamana Temple as a must visit place while in Nepal and around the globe for pilgrimage, leisure, recreation as well as adventure tourism and has contributed to the upliftment of the economy in the surrounding area of Manakamana and Darechowk VDC&rsquo;s.&nbsp;<br />\r\nThe Cable Car ride covers a distance of 2.8 KM with 31 Passangers and 3 Cargo Cars, each with a seating capacity of 6 people. The system has the overall capacity of handling 600 persons per hour and takes about 10 minutes to reach the Manakamana Temple.</p>', 63, 1, 13, '2019-06-20 07:00:38', '2019-06-20 07:03:35'),
(4, 'Mustang Travel & Tours', 'mustang-travel-tours', 1, 'In Front of the Shiva Mandir, New Buspark Kathmandu, Nepal', '014381454', '542d909e2f4e99d655c6984ad8863cf1.1560996510.jpg', 'https://www.mustangtravelntours.com', NULL, '0', '<p>We are overjoyed to announce direct flight to Japan through Nepal Airlines, tickets are now available for Kathmandu - Osaka - Kathmandu sector on Nepal Airlines.<br />\r\nPlease visit Mustang Travels and Tours Pvt.Ltd. Kathmandu Office or Feel freely contact us through phone or viber too.</p>', 64, 1, 13, '2019-06-20 07:08:31', '2019-06-20 07:08:31'),
(5, 'Chandragiri Cabel Car Kathmandu', 'chandragiri-cabel-car-kathmandu', 1, 'Kathmandu Kathmandu, Nepal', '014310576', 'f073d262ff6b4a5e60822152845e0439.1561305867.jpg', 'https://www.nepalguideinfo.com', NULL, '0', '<p>N/A</p>', 63, 1, 3, '2019-06-23 10:34:27', '2019-06-23 10:34:27');

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
(1, 'Temple', 'temple', 3, '2019-06-15 21:59:14', '2019-06-15 21:59:14'),
(2, 'Park In Nepal', 'park-in-nepal', 1, '2019-06-16 00:11:11', '2019-06-16 00:13:13'),
(3, 'Library Demo', 'library-demo', 1, '2019-06-16 03:42:10', '2019-06-16 03:42:19'),
(4, 'Temple', 'temple', 1, '2019-06-16 03:42:57', '2019-06-16 03:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture_wise_categories`
--

CREATE TABLE `manufacture_wise_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacture_wise_categories`
--

INSERT INTO `manufacture_wise_categories` (`id`, `client_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '2019-06-11 03:56:30', '2019-06-11 03:56:30'),
(2, 5, 3, '2019-06-12 10:01:13', '2019-06-12 10:01:13'),
(3, 5, 2, '2019-06-12 10:01:13', '2019-06-12 10:01:13'),
(4, 6, 3, '2019-06-12 10:06:03', '2019-06-12 10:06:03'),
(5, 6, 1, '2019-06-12 10:06:03', '2019-06-12 10:06:03'),
(6, 6, 4, '2019-06-12 10:06:03', '2019-06-12 10:06:03'),
(7, 6, 2, '2019-06-12 10:06:03', '2019-06-12 10:06:03'),
(8, 7, 3, '2019-06-12 10:08:23', '2019-06-12 10:08:23'),
(9, 8, 3, '2019-06-12 10:10:10', '2019-06-12 10:10:10'),
(10, 8, 1, '2019-06-12 10:10:10', '2019-06-12 10:10:10'),
(11, 8, 6, '2019-06-12 10:10:10', '2019-06-12 10:10:10'),
(12, 9, 3, '2019-06-12 10:11:46', '2019-06-12 10:11:46'),
(13, 9, 4, '2019-06-12 10:11:46', '2019-06-12 10:11:46'),
(14, 9, 2, '2019-06-12 10:11:46', '2019-06-12 10:11:46'),
(15, 10, 2, '2019-06-12 10:19:10', '2019-06-12 10:19:10'),
(16, 11, 6, '2019-06-12 10:22:44', '2019-06-12 10:22:44'),
(17, 11, 3, '2019-06-12 10:22:44', '2019-06-12 10:22:44'),
(18, 12, 6, '2019-06-12 10:25:27', '2019-06-12 10:25:27'),
(19, 12, 5, '2019-06-12 10:25:27', '2019-06-12 10:25:27'),
(20, 12, 4, '2019-06-12 10:25:27', '2019-06-12 10:25:27'),
(21, 12, 2, '2019-06-12 10:25:27', '2019-06-12 10:25:27'),
(22, 27, 13, '2019-06-19 22:23:47', '2019-06-19 22:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alphabet_id` int(11) DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `slug`, `alphabet_id`, `icon`, `created_at`, `updated_at`) VALUES
(2, '3D printer manufacturers', '3d-printer-manufacturers', 16, NULL, '2019-06-15 21:28:24', '2019-06-15 21:28:24'),
(3, 'Aerial Lift manufacturers', 'aerial-lift-manufacturers', 1, NULL, '2019-06-15 21:28:39', '2019-06-15 21:28:39'),
(4, 'Astronomical instrument makers', 'astronomical-instrument-makers', 1, NULL, '2019-06-15 21:28:54', '2019-06-15 21:28:54'),
(5, 'Bicycle manufacturers', 'bicycle-manufacturers', 2, NULL, '2019-06-15 21:29:34', '2019-06-15 21:29:34'),
(6, 'Capacitor manufacturers', 'capacitor-manufacturers', 3, NULL, '2019-06-15 21:29:51', '2019-06-15 21:29:51'),
(7, 'Chocolate manufacturers', 'chocolate-manufacturers', 3, NULL, '2019-06-15 21:30:07', '2019-06-15 21:30:07'),
(8, 'CIGS companies', 'cigs-companies', 3, NULL, '2019-06-15 21:30:19', '2019-06-15 21:30:19'),
(9, 'Computer hardware manufacturers', 'computer-hardware-manufacturers', 3, NULL, '2019-06-15 21:30:31', '2019-06-15 21:30:31'),
(10, 'Computer system manufacturers', 'computer-system-manufacturers', 3, NULL, '2019-06-15 21:30:43', '2019-06-15 21:30:43'),
(11, 'Cymbal manufacturers', 'cymbal-manufacturers', 3, NULL, '2019-06-15 21:31:12', '2019-06-15 21:31:12'),
(12, 'Electric bus makers and models', 'electric-bus-makers-and-models', 5, NULL, '2019-06-15 21:31:26', '2019-06-15 21:31:26'),
(13, 'Electric vehicle battery manufacturers', 'electric-vehicle-battery-manufacturers', 5, NULL, '2019-06-15 21:31:50', '2019-06-15 21:31:50'),
(14, 'Elevator manufacturers', 'elevator-manufacturers', 5, NULL, '2019-06-15 21:32:11', '2019-06-15 21:32:11'),
(15, 'Eyewear companies', 'eyewear-companies', 5, NULL, '2019-06-15 21:32:24', '2019-06-15 21:32:24'),
(16, 'Flash memory controller manufacturers', 'flash-memory-controller-manufacturers', 6, NULL, '2019-06-15 21:32:38', '2019-06-15 21:32:38'),
(17, 'Game manufacturers', 'game-manufacturers', 7, NULL, '2019-06-15 21:32:51', '2019-06-15 21:32:51'),
(18, 'Glossy display branding manufacturers', 'glossy-display-branding-manufacturers', 7, NULL, '2019-06-15 21:33:07', '2019-06-15 21:33:07'),
(19, 'Horn makers', 'horn-makers', 8, NULL, '2019-06-15 21:33:19', '2019-06-15 21:33:19'),
(20, 'Lingerie brands', 'lingerie-brands', 12, NULL, '2019-06-15 21:33:40', '2019-06-15 21:33:40'),
(21, 'Cube manufacturers', 'cube-manufacturers', 3, NULL, '2019-06-15 21:34:27', '2019-06-15 21:34:27'),
(22, 'Bus manufacturers', 'bus-manufacturers', 2, NULL, '2019-06-15 21:34:41', '2019-06-15 21:34:41'),
(23, 'Semiconductor fabrication plants', 'semiconductor-fabrication-plants', 19, NULL, '2019-06-15 21:34:54', '2019-06-15 21:34:54'),
(24, 'Locomotive builders', 'locomotive-builders', 12, NULL, '2019-06-15 21:35:05', '2019-06-15 21:35:05'),
(25, 'Aircraft manufacturers', 'aircraft-manufacturers', 1, NULL, '2019-06-15 21:35:22', '2019-06-15 21:35:22'),
(26, 'Armament manufacturers', 'armament-manufacturers', 1, NULL, '2019-06-15 21:35:35', '2019-06-15 21:35:35'),
(27, 'Motorcycle manufacturers', 'motorcycle-manufacturers', 13, NULL, '2019-06-15 21:35:51', '2019-06-15 21:35:51'),
(28, 'Phonograph manufacturers', 'phonograph-manufacturers', 16, NULL, '2019-06-15 21:36:04', '2019-06-15 21:36:04'),
(29, 'PLC manufacturers', 'plc-manufacturers', 16, NULL, '2019-06-15 21:38:29', '2019-06-15 21:38:29'),
(30, 'Radio Controlled kit manufacturers', 'radio-controlled-kit-manufacturers', 18, NULL, '2019-06-15 21:39:13', '2019-06-15 21:39:13'),
(31, 'Rolling stock manufacturers', 'rolling-stock-manufacturers', 18, NULL, '2019-06-15 21:39:28', '2019-06-15 21:39:28'),
(32, 'Scooter manufacturers', 'scooter-manufacturers', 19, NULL, '2019-06-15 21:39:49', '2019-06-15 21:39:49'),
(33, 'Soft drink producers', 'soft-drink-producers', 19, NULL, '2019-06-15 21:40:04', '2019-06-15 21:40:04'),
(34, 'Solid state drive manufacturers', 'solid-state-drive-manufacturers', 19, NULL, '2019-06-15 21:40:23', '2019-06-15 21:40:23'),
(35, 'Sporting goods manufacturers', 'sporting-goods-manufacturers', 19, NULL, '2019-06-15 21:40:38', '2019-06-15 21:40:38'),
(36, 'Steam car makers', 'steam-car-makers', 19, NULL, '2019-06-15 21:40:52', '2019-06-15 21:40:52'),
(37, 'Toy manufacturers', 'toy-manufacturers', 20, NULL, '2019-06-15 21:41:06', '2019-06-15 21:41:06'),
(38, 'Swimwear brands', 'swimwear-brands', 19, NULL, '2019-06-15 21:41:16', '2019-06-15 21:41:16'),
(39, 'Touch solution manufacturers', 'touch-solution-manufacturers', 20, NULL, '2019-06-15 21:41:34', '2019-06-15 21:41:34'),
(40, 'Traction engine manufacturers', 'traction-engine-manufacturers', 20, NULL, '2019-06-15 21:41:46', '2019-06-15 21:41:46'),
(41, 'Traction motor manufacturers', 'traction-motor-manufacturers', 20, NULL, '2019-06-15 21:41:58', '2019-06-15 21:41:58'),
(42, 'Tram builders', 'tram-builders', 20, NULL, '2019-06-15 21:42:09', '2019-06-15 21:42:09'),
(43, 'Trolleybus manufacturers', 'trolleybus-manufacturers', 20, NULL, '2019-06-15 21:42:20', '2019-06-15 21:42:20'),
(44, 'Vacuum cleaners manufacturers', 'vacuum-cleaners-manufacturers', 22, NULL, '2019-06-15 21:43:02', '2019-06-15 21:43:02'),
(45, 'Watch manufacturers', 'watch-manufacturers', 23, NULL, '2019-06-15 21:43:15', '2019-06-15 21:43:15'),
(46, 'Wind turbine manufacturers', 'wind-turbine-manufacturers', 23, NULL, '2019-06-15 21:43:28', '2019-06-15 21:43:28'),
(47, 'Food manufacturers', 'food-manufacturers', 6, NULL, '2019-06-15 21:51:45', '2019-06-15 21:51:45'),
(48, 'Animal food manufacturers', 'animal-food-manufacturers', 1, NULL, '2019-06-15 21:52:01', '2019-06-15 21:52:01'),
(49, 'Glassmaking companies‎', 'glassmaking-companies', 7, NULL, '2019-06-15 21:54:37', '2019-06-15 21:54:37'),
(50, 'Helmet manufacturers‎', 'helmet-manufacturers', 8, NULL, '2019-06-15 21:54:49', '2019-06-15 21:54:49'),
(51, 'Horsecar manufacturers‎', 'horsecar-manufacturers', 8, NULL, '2019-06-15 21:55:00', '2019-06-15 21:55:00'),
(52, 'Hovercraft manufacturers‎', 'hovercraft-manufacturers', 8, NULL, '2019-06-15 21:55:11', '2019-06-15 21:55:11'),
(53, 'HVAC manufacturing companies‎', 'hvac-manufacturing-companies', 8, NULL, '2019-06-15 21:55:22', '2019-06-15 21:55:22'),
(54, 'Figurine manufacturers‎', 'figurine-manufacturers', 6, NULL, '2019-06-15 21:55:43', '2019-06-15 21:55:43'),
(55, 'Fireworks companies‎', 'fireworks-companies', 6, NULL, '2019-06-15 21:55:54', '2019-06-15 21:55:54'),
(56, 'Flag manufacturers‎', 'flag-manufacturers', 6, NULL, '2019-06-15 21:56:03', '2019-06-15 21:56:03'),
(57, 'Fuel cell manufacturers‎', 'fuel-cell-manufacturers', 6, NULL, '2019-06-15 21:56:13', '2019-06-15 21:56:13'),
(58, 'Pen manufacturers‎', 'pen-manufacturers', 16, NULL, '2019-06-15 21:57:43', '2019-06-15 21:57:43'),
(59, 'Pipe makers‎', 'pipe-makers', 16, NULL, '2019-06-15 21:57:52', '2019-06-15 21:57:52'),
(60, 'Plastics companies‎', 'plastics-companies', 16, NULL, '2019-06-15 21:58:02', '2019-06-15 21:58:02'),
(61, 'Portable stove manufacturers‎', 'portable-stove-manufacturers', 16, NULL, '2019-06-15 21:58:12', '2019-06-15 21:58:12'),
(62, 'Power supply manufacturers', 'power-supply-manufacturers', 16, NULL, '2019-06-15 21:58:23', '2019-06-15 21:58:23'),
(63, 'Printing press manufacturers‎', 'printing-press-manufacturers', 16, NULL, '2019-06-15 21:58:33', '2019-06-15 21:58:33'),
(64, 'Pulp and paper companies‎', 'pulp-and-paper-companies', 16, NULL, '2019-06-15 21:58:43', '2019-06-15 21:58:43'),
(65, 'Rail infrastructure manufacturers‎', 'rail-infrastructure-manufacturers', 18, NULL, '2019-06-15 21:58:52', '2019-06-15 21:58:52'),
(66, 'Saddle manufacturers‎', 'saddle-manufacturers', 19, NULL, '2019-06-15 21:59:00', '2019-06-15 21:59:00'),
(67, 'Security equipment manufacturers', 'security-equipment-manufacturers', 19, NULL, '2019-06-15 21:59:10', '2019-06-15 21:59:10'),
(68, 'Shipbuilding companies‎', 'shipbuilding-companies', 19, NULL, '2019-06-15 21:59:23', '2019-06-15 21:59:23'),
(69, 'Sporting goods manufacturers‎', 'sporting-goods-manufacturers', 19, NULL, '2019-06-15 21:59:35', '2019-06-15 21:59:35'),
(70, 'Steam engine manufacturers‎', 'steam-engine-manufacturers', 19, NULL, '2019-06-15 21:59:45', '2019-06-15 21:59:45'),
(71, 'Subterranean excavating equipment companies‎', 'subterranean-excavating-equipment-companies', 19, NULL, '2019-06-15 21:59:55', '2019-06-15 21:59:55'),
(72, 'Teddy bear manufacturers‎', 'teddy-bear-manufacturers', 20, NULL, '2019-06-15 22:00:07', '2019-06-15 22:00:07'),
(73, 'Textile companies‎', 'textile-companies', 20, NULL, '2019-06-15 22:00:21', '2019-06-15 22:00:21'),
(74, 'Textile machinery manufacturers‎', 'textile-machinery-manufacturers', 20, NULL, '2019-06-15 22:00:31', '2019-06-15 22:00:31'),
(75, 'Tire manufacturers‎', 'tire-manufacturers', 20, NULL, '2019-06-15 22:00:41', '2019-06-15 22:00:41'),
(76, 'Tobacco companies‎', 'tobacco-companies', 20, NULL, '2019-06-15 22:00:50', '2019-06-15 22:00:50'),
(77, 'Tool manufacturers', 'tool-manufacturers', 20, NULL, '2019-06-15 22:01:04', '2019-06-15 22:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sub_categories`
--

CREATE TABLE `menu_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alphabet_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_22_074818_create_advertisements_table', 1),
(4, '2019_04_22_074850_create_company_natures_table', 1),
(5, '2019_04_22_074939_create_clients_table', 1),
(6, '2019_04_22_075014_create_districts_table', 1),
(7, '2019_04_22_075039_create_countries_table', 1),
(8, '2019_04_22_075059_create_states_table', 1),
(9, '2019_04_22_075148_create_candidates_table', 1),
(10, '2019_05_26_154155_create_alphabates_table', 1),
(11, '2019_05_26_155529_create_categories_table', 1),
(12, '2019_05_26_155645_create_sub_categories_table', 1),
(13, '2019_05_27_034856_create_staff_table', 1),
(14, '2019_05_29_093816_create_client_profiles_table', 1),
(15, '2019_05_29_093909_create_client_product_services_table', 1),
(16, '2019_05_29_094016_create_client_image_galleries_table', 1),
(17, '2019_05_29_094047_create_client_contact_us_table', 1),
(18, '2019_06_03_083919_create_category_wise_clients_table', 1),
(19, '2019_06_05_125927_create_menu_categories_table', 1),
(20, '2019_06_05_130038_create_menu_sub_categories_table', 1),
(21, '2019_06_05_172224_create_manufacture_wise_categories_table', 1),
(22, '2019_06_08_153256_create_client_about_us_table', 1),
(23, '2019_06_09_065556_create_buying_sellings_table', 1),
(24, '2019_06_09_074013_create_buy_sell_categories_table', 1),
(25, '2019_06_09_074027_create_buy_sell_sub_categories_table', 1),
(26, '2019_06_09_100433_create_automobiles_table', 1),
(27, '2019_06_08_154623_create_location_categories_table', 2),
(28, '2019_06_08_155834_create_locations_table', 3),
(29, '2019_06_12_054049_create_products_table', 3),
(30, '2019_06_12_060637_create_product_categories_table', 4),
(31, '2019_06_12_081210_create_product_wise_categories_table', 5),
(32, '2019_06_17_070737_create_product_wise_suppliers_table', 6),
(33, '2019_06_19_103815_create_client__types_table', 7),
(34, '2019_06_19_104502_create_types_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alpha_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `product_type` enum('bronze','silver','gold','diamond','platinum','free_listing') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_name`, `slug`, `alpha_id`, `cat_id`, `product_type`, `feature`, `contact_no`, `website`, `contact_person`, `email`, `address`, `product_details`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ramesh Gernal Store', 'ramesh-gernal-store-1', 18, NULL, 'diamond', '7c6a4ac9bb2eb867788266e3441f7d38.1560742217.jpg', 'Impedit consequuntu', 'https://www.ramesh.us', 'Ramesh Dahal', 'mesusyqaw@mailinator.net', 'Aperiam vel labore d', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-16 21:45:17', '2019-06-18 09:46:45'),
(2, 1, 'Ganesh It Solution', 'ganesh-it-solution-2', 7, NULL, 'diamond', '3428ba30cdba9b9e53de8fc4107d3bf5.1560742319.jpg', '9843683504', NULL, NULL, 'kibakyme@mailinator.net', 'Pasupati Kathmandu, Nepal', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-16 21:47:00', '2019-06-17 21:48:36'),
(3, 1, 'Sagar Sir Gernal Store', 'sagar-sir-gernal-store-3', 19, NULL, 'diamond', '5757aa1b4e8fb0aa16177506ecd0e302.1560742410.jpg', '9843683504', 'https://www.dybyqyqyze.us', 'Sagar Bhusal', NULL, 'Kalimati', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-16 21:48:30', '2019-06-19 08:07:04'),
(4, 1, 'Christine Ellison', 'christine-ellison', 13, NULL, 'diamond', 'a2c46a29659851e01121a912b74ee720.1560743256.jpg', 'In nihil quisquam od', NULL, NULL, 'hehox@mailinator.net', 'Culpa quaerat at li', '<p>NA</p>', '2019-06-16 22:01:50', '2019-06-16 22:02:36'),
(5, 1, 'Lana Morrow', 'lana-morrow', 12, NULL, 'diamond', 'eeda5882b61b3929ea9e5eb7e5070965.1560754665.jpg', 'Laudantium facilis', NULL, NULL, 'nyhyteh@mailinator.com', 'Voluptatem Accusant', '<p>NA</p>', '2019-06-17 01:12:45', '2019-06-17 01:12:45'),
(6, 1, 'Stephanie BentleyffffS', 'stephanie-bentleyffffs', 19, NULL, 'diamond', '25e51abe79be93194a35941f243b1005.1560754709.jpg', 'Architecto in laboru', NULL, NULL, 'tyruxuxow@mailinator.net', 'Velit voluptatem nos', '<p>DD</p>', '2019-06-17 01:13:29', '2019-06-17 01:13:29'),
(7, 1, 'Martena Rivers', 'martena-rivers', 5, NULL, 'silver', NULL, 'Nihil et autem quia', NULL, NULL, 'cilisipah@mailinator.com', 'Quia vero ea dicta q', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-17 09:13:59', '2019-06-17 09:13:59'),
(8, 1, 'Lani Lloyd', 'lani-lloyd', 26, NULL, 'silver', NULL, 'Consectetur non nihi', NULL, NULL, 'cesise@mailinator.net', 'Omnis enim repellend', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-17 09:14:33', '2019-06-17 09:14:33'),
(9, 1, 'Lani Lloyd', 'lani-lloyd', 26, NULL, 'silver', NULL, 'Consectetur non nihi', NULL, NULL, 'cesise@mailinator.net', 'Omnis enim repellend', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-17 09:16:25', '2019-06-17 09:16:25'),
(10, 1, 'Lani Lloyd', 'lani-lloyd', 26, NULL, 'silver', NULL, 'Consectetur non nihi', NULL, NULL, 'cesise@mailinator.net', 'Omnis enim repellend', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-17 09:17:03', '2019-06-17 09:17:03'),
(11, 1, 'Lani Lloyd', 'lani-lloyd', 26, NULL, 'silver', NULL, 'Consectetur non nihi', NULL, NULL, 'cesise@mailinator.net', 'Omnis enim repellend', '<p>Batteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage StabilizersBatteries, Battery Material &amp; Dry Cells,Inverters,Uninterrupted Power Systems,Voltage Stabilizers</p>', '2019-06-17 09:18:43', '2019-06-17 09:18:43'),
(12, 1, 'Helen Burt', 'helen-burt', 2, NULL, 'diamond', NULL, '9843683504', 'https://www.molokufi.me.uk', 'Ganesh Thapa', 'nimanavada@mailinator.com', 'Laborum Dolorum sed', '<pre>\r\ncontact_person</pre>\r\n\r\n<pre>\r\ncontact_person</pre>\r\n\r\n<pre>\r\ncontact_person</pre>', '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(13, 1, 'Sammpanna Stationary', 'sammpanna-stationary-13', 20, NULL, 'diamond', NULL, 'Ad laboriosam dolor', NULL, NULL, 'xygigiho@mailinator.com', 'Non temporibus sunt', '<p>dsaf</p>', '2019-06-17 21:45:08', '2019-06-17 21:46:02'),
(14, 3, 'Echo Cummings', 'echo-cummings-14', 26, NULL, 'gold', NULL, 'Iusto doloremque sun', 'https://www.kunej.in', 'Fugiat omnis amet', 'kuduwysoru@mailinator.net', 'Natus aut nobis hic', '<p>HY</p>', '2019-06-19 10:36:17', '2019-06-19 10:36:17'),
(15, 3, 'Kalanki Super Market', 'kalanki-super-market-15', 11, NULL, 'diamond', '488af96ef1208f4fc1441209e3ba47e6.1561000870.jpg', 'Ea culpa ut possimu', 'https://www.xehubapididany.ca', 'Provident qui et at', 'xalosoq@mailinator.net', 'Quis lorem est esse', '<p>NA</p>', '2019-06-19 21:36:10', '2019-06-19 21:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alphabet_id` int(11) DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `entry_by` int(191) DEFAULT NULL,
  `status` enum('publish','draft','trash') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `alphabet_id`, `icon`, `created_at`, `updated_at`, `entry_by`, `status`) VALUES
(2, 'Electronic', 'electronic', 5, NULL, '2019-06-15 21:16:52', '2019-06-15 21:16:52', NULL, 'publish'),
(3, 'Printer manufacturers', 'printer-manufacturers', 16, NULL, '2019-06-15 21:25:23', '2019-06-15 21:25:23', NULL, 'publish'),
(4, 'Aerial Lift manufacturers', 'aerial-lift-manufacturers', 1, NULL, '2019-06-15 21:26:04', '2019-06-15 21:26:04', NULL, 'publish'),
(5, 'Astronomical instrument makers', 'astronomical-instrument-makers', 1, NULL, '2019-06-15 21:26:47', '2019-06-15 21:26:47', NULL, 'publish'),
(6, 'Bicycle manufacturers', 'bicycle-manufacturers', NULL, NULL, '2019-06-15 21:27:25', '2019-06-15 21:27:25', NULL, 'publish'),
(7, 'Armament manufacturers', 'armament-manufacturers', 1, NULL, '2019-06-16 06:19:55', '2019-06-16 06:19:55', NULL, 'publish'),
(8, 'Amusement ride manufacturers‎', 'amusement-ride-manufacturers', 1, NULL, '2019-06-16 06:20:03', '2019-06-16 06:20:03', NULL, 'publish'),
(9, 'Animal Pharmaceuticals manufacturers', 'animal-pharmaceuticals-manufacturers', 1, NULL, '2019-06-16 06:20:13', '2019-06-16 06:20:13', NULL, 'publish'),
(10, 'Animal Feedstuffs manufacturers', 'animal-feedstuffs-manufacturers', 1, NULL, '2019-06-16 06:20:20', '2019-06-16 06:20:20', NULL, 'publish'),
(11, 'Astronomical instrument makers', 'astronomical-instrument-makers', 1, NULL, '2019-06-16 06:20:29', '2019-06-16 06:20:29', NULL, 'publish'),
(12, 'Animal food manufacturers', 'animal-food-manufacturers', 1, NULL, '2019-06-16 06:20:35', '2019-06-16 06:20:35', NULL, 'publish'),
(13, 'Agricultural machinery manufacturers‎', 'agricultural-machinery-manufacturers', 1, NULL, '2019-06-16 06:20:44', '2019-06-16 06:20:44', NULL, 'publish'),
(14, 'Antibiotics manufacturers', 'antibiotics-manufacturers', 1, NULL, '2019-06-16 06:20:51', '2019-06-16 06:20:51', NULL, 'publish'),
(15, 'Acid manufacturers', 'acid-manufacturers', 1, NULL, '2019-06-16 06:20:57', '2019-06-16 06:20:57', NULL, 'publish'),
(16, 'Aircraft manufacturers', 'aircraft-manufacturers', 1, NULL, '2019-06-16 06:21:04', '2019-06-16 06:21:04', NULL, 'publish'),
(17, 'Audio equipment manufacturers‎', 'audio-equipment-manufacturers', 1, NULL, '2019-06-16 06:21:12', '2019-06-16 06:21:12', NULL, 'publish'),
(18, 'Anesthetic Drugs manufacturers', 'anesthetic-drugs-manufacturers', 1, NULL, '2019-06-16 06:21:18', '2019-06-16 06:21:18', NULL, 'publish'),
(19, 'Agrochemicals and Fertilizers manufacturers', 'agrochemicals-and-fertilizers-manufacturers', 1, NULL, '2019-06-16 06:21:26', '2019-06-16 06:21:26', NULL, 'publish'),
(20, 'Acetic Acid', 'acetic-acid', 1, NULL, '2019-06-16 14:59:50', '2019-06-16 14:59:50', NULL, 'publish'),
(21, ' Zirconated Tungsten Electrodes', 'zirconated-tungsten-electrodes', 26, NULL, '2019-06-16 19:22:48', '2019-06-16 19:22:48', NULL, 'publish'),
(22, ' ZINC DROSS', 'zinc-dross', 26, NULL, '2019-06-16 19:22:56', '2019-06-16 19:22:56', NULL, 'publish'),
(23, ' Zips Plastiic And Nylon', 'zips-plastiic-and-nylon', 26, NULL, '2019-06-16 19:23:07', '2019-06-16 19:23:07', NULL, 'publish'),
(24, ' Zip Lock Bags', 'zip-lock-bags', 26, NULL, '2019-06-16 19:23:14', '2019-06-16 19:23:14', NULL, 'publish'),
(25, ' Zip Fasteners', 'zip-fasteners', 26, NULL, '2019-06-16 19:23:21', '2019-06-16 19:23:21', NULL, 'publish'),
(26, ' Zinc Die Castings', 'zinc-die-castings', 26, NULL, '2019-06-16 19:23:28', '2019-06-16 19:23:28', NULL, 'publish'),
(27, ' Zinc Castings', 'zinc-castings', 26, NULL, '2019-06-16 19:23:35', '2019-06-16 19:23:35', NULL, 'publish'),
(28, ' Zinc Pressure Die Casting', 'zinc-pressure-die-casting', 26, NULL, '2019-06-16 19:23:48', '2019-06-16 19:23:48', NULL, 'publish'),
(29, ' Zinc Ingots', 'zinc-ingots', 26, NULL, '2019-06-16 19:23:56', '2019-06-16 19:23:56', NULL, 'publish'),
(30, ' Zirmul Bricks', 'zirmul-bricks', 26, NULL, '2019-06-16 19:24:03', '2019-06-16 19:24:03', NULL, 'publish'),
(31, ' Zinc Rolling Mills', 'zinc-rolling-mills', 26, NULL, '2019-06-16 19:24:11', '2019-06-16 19:24:11', NULL, 'publish'),
(32, ' Zinc Alloy Castings', 'zinc-alloy-castings', 26, NULL, '2019-06-16 19:24:23', '2019-06-16 19:24:23', NULL, 'publish'),
(33, ' Zircon Based Refractories', 'zircon-based-refractories', 26, NULL, '2019-06-16 19:24:30', '2019-06-16 19:24:30', NULL, 'publish'),
(34, ' Zirconia Fiber', 'zirconia-fiber', 26, NULL, '2019-06-16 19:24:37', '2019-06-16 19:24:37', NULL, 'publish'),
(35, ' Zinc Casting Carburetors', 'zinc-casting-carburetors', 26, NULL, '2019-06-16 19:24:44', '2019-06-16 19:24:44', NULL, 'publish'),
(36, ' Zinc Die Casting Parts', 'zinc-die-casting-parts', 26, NULL, '2019-06-16 19:24:51', '2019-06-16 19:24:51', NULL, 'publish'),
(37, ' Zebra Blinds', 'zebra-blinds', 26, NULL, '2019-06-16 19:24:58', '2019-06-16 19:24:58', NULL, 'publish'),
(38, ' Zero Discharge System', 'zero-discharge-system', 26, NULL, '2019-06-16 19:25:04', '2019-06-16 19:25:04', NULL, 'publish'),
(39, ' Zircon Coatings', 'zircon-coatings', 26, NULL, '2019-06-16 19:25:22', '2019-06-16 19:25:22', NULL, 'publish'),
(40, ' Zero Dead Leg Valves', 'zero-dead-leg-valves', 26, NULL, '2019-06-16 19:25:29', '2019-06-16 19:25:29', NULL, 'publish'),
(41, ' Zero Air Generator', 'zero-air-generator', 26, NULL, '2019-06-16 19:25:35', '2019-06-16 19:25:35', NULL, 'publish'),
(42, ' Zinc Plated Hose Clamps', 'zinc-plated-hose-clamps', 26, NULL, '2019-06-16 19:25:57', '2019-06-16 19:25:57', NULL, 'publish'),
(43, ' Zinc Plated Hose Clips', 'zinc-plated-hose-clips', 26, NULL, '2019-06-16 19:26:03', '2019-06-16 19:26:03', NULL, 'publish'),
(44, ' Zinc Plating', 'zinc-plating', 26, NULL, '2019-06-16 19:26:11', '2019-06-16 19:26:11', NULL, 'publish'),
(45, ' Zinc Electroplating', 'zinc-electroplating', 26, NULL, '2019-06-16 19:26:17', '2019-06-16 19:26:17', NULL, 'publish'),
(46, ' Zinc Diecast Hinges', 'zinc-diecast-hinges', 26, NULL, '2019-06-16 19:26:24', '2019-06-16 19:26:24', NULL, 'publish'),
(47, ' Zinc Nickel Alloy Plating', 'zinc-nickel-alloy-plating', 26, NULL, '2019-06-16 19:26:32', '2019-06-16 19:26:32', NULL, 'publish'),
(48, ' Zero Cut Mower', 'zero-cut-mower', 26, NULL, '2019-06-16 19:26:39', '2019-06-16 19:26:39', NULL, 'publish'),
(49, ' Zero Holdup Sparkler Filter Press', 'zero-holdup-sparkler-filter-press', 26, NULL, '2019-06-16 19:26:45', '2019-06-16 19:26:45', NULL, 'publish'),
(50, ' Zero Hold Filter Press', 'zero-hold-filter-press', 26, NULL, '2019-06-16 19:26:54', '2019-06-16 19:26:54', NULL, 'publish'),
(51, ' Zero Hold Up Filter Press', 'zero-hold-up-filter-press', 26, NULL, '2019-06-16 19:27:02', '2019-06-16 19:27:02', NULL, 'publish'),
(52, ' Zero Air Purifier', 'zero-air-purifier', 26, NULL, '2019-06-16 19:27:09', '2019-06-16 19:27:09', NULL, 'publish'),
(53, ' Zero Degree Chambers', 'zero-degree-chambers', 26, NULL, '2019-06-16 19:27:16', '2019-06-16 19:27:16', NULL, 'publish'),
(54, ' Zoom Microscope', 'zoom-microscope', 26, NULL, '2019-06-16 19:27:25', '2019-06-16 19:27:25', NULL, 'publish'),
(55, ' Zoom Stereo Microscopes', 'zoom-stereo-microscopes', 26, NULL, '2019-06-16 19:27:32', '2019-06-16 19:27:32', NULL, 'publish'),
(56, ' Zero Ohm Resistors', 'zero-ohm-resistors', 26, NULL, '2019-06-16 19:28:57', '2019-06-16 19:28:57', NULL, 'publish'),
(57, ' Zhfr Wires', 'zhfr-wires', 26, NULL, '2019-06-16 19:29:05', '2019-06-16 19:29:05', NULL, 'publish'),
(58, ' Zinc Ash', 'zinc-ash', 26, NULL, '2019-06-16 19:29:13', '2019-06-16 19:29:13', NULL, 'publish'),
(59, ' Zhfr Insulated Wires', 'zhfr-insulated-wires', 26, NULL, '2019-06-16 19:29:22', '2019-06-16 19:29:22', NULL, 'publish'),
(60, ' Zerox Machines', 'zerox-machines', 26, NULL, '2019-06-16 19:29:28', '2019-06-16 19:29:28', NULL, 'publish'),
(61, ' Zero Pressure Transmitters', 'zero-pressure-transmitters', 26, NULL, '2019-06-16 19:29:35', '2019-06-16 19:29:35', NULL, 'publish'),
(62, ' Zinc', 'zinc', 26, NULL, '2019-06-16 19:29:43', '2019-06-16 19:29:43', NULL, 'publish'),
(63, ' Zhfr Insulated Cables', 'zhfr-insulated-cables', 26, NULL, '2019-06-16 19:29:51', '2019-06-16 19:29:51', NULL, 'publish'),
(64, ' Zinc Stearate', 'zinc-stearate', 26, NULL, '2019-06-16 19:29:58', '2019-06-16 19:29:58', NULL, 'publish'),
(65, ' Zhfr House Wires', 'zhfr-house-wires', 26, NULL, '2019-06-16 19:30:06', '2019-06-16 19:30:06', NULL, 'publish'),
(66, ' Zinc Oxide', 'zinc-oxide', 26, NULL, '2019-06-16 19:30:13', '2019-06-16 19:30:13', NULL, 'publish'),
(67, ' Zeolites Products', 'zeolites-products', 26, NULL, '2019-06-16 19:30:21', '2019-06-16 19:30:21', NULL, 'publish'),
(68, ' Zinc Stearate', 'zinc-stearate', 26, NULL, '2019-06-16 19:30:29', '2019-06-16 19:30:29', NULL, 'publish'),
(69, ' Zinc Sulphate', 'zinc-sulphate', 26, NULL, '2019-06-16 19:30:36', '2019-06-16 19:30:36', NULL, 'publish'),
(70, ' Zeolites And Allied Products', 'zeolites-and-allied-products', 26, NULL, '2019-06-16 19:30:45', '2019-06-16 19:30:45', NULL, 'publish'),
(71, ' Zinc Compounds', 'zinc-compounds', 26, NULL, '2019-06-16 19:30:52', '2019-06-16 19:30:52', NULL, 'publish'),
(72, ' Zinc Sulphide', 'zinc-sulphide', 26, NULL, '2019-06-16 19:31:00', '2019-06-16 19:31:00', NULL, 'publish'),
(73, ' Zinc Picolinate', 'zinc-picolinate', 26, NULL, '2019-06-16 19:31:07', '2019-06-16 19:31:07', NULL, 'publish'),
(74, ' Zinc Acetate', 'zinc-acetate', 26, NULL, '2019-06-16 19:31:15', '2019-06-16 19:31:15', NULL, 'publish'),
(75, ' Zinc Dust', 'zinc-dust', 26, NULL, '2019-06-16 19:31:25', '2019-06-16 19:31:25', NULL, 'publish'),
(76, ' Zinc Chloride', 'zinc-chloride', 26, NULL, '2019-06-16 19:31:33', '2019-06-16 19:31:33', NULL, 'publish'),
(77, ' Zinc Hydroxide', 'zinc-hydroxide', 26, NULL, '2019-06-16 19:31:41', '2019-06-16 19:31:41', NULL, 'publish'),
(78, ' Zeolite Compounds', 'zeolite-compounds', 26, NULL, '2019-06-16 19:31:48', '2019-06-16 19:31:48', NULL, 'publish'),
(79, ' Zinc Phosphate Primer Paints', 'zinc-phosphate-primer-paints', 26, NULL, '2019-06-16 19:31:55', '2019-06-16 19:31:55', NULL, 'publish'),
(80, ' Zinc Cyanide', 'zinc-cyanide', 26, NULL, '2019-06-16 19:32:03', '2019-06-16 19:32:03', NULL, 'publish'),
(81, ' Zinc Stabilizers', 'zinc-stabilizers', 26, NULL, '2019-06-16 19:32:10', '2019-06-16 19:32:10', NULL, 'publish'),
(82, ' Zinc Oxide Metal Treatment Chemical', 'zinc-oxide-metal-treatment-chemical', 26, NULL, '2019-06-16 19:32:18', '2019-06-16 19:32:18', NULL, 'publish'),
(83, ' Zmbt Accelerators', 'zmbt-accelerators', 26, NULL, '2019-06-16 19:32:24', '2019-06-16 19:32:24', NULL, 'publish'),
(84, ' Zinc Oxide Electroplating', 'zinc-oxide-electroplating', 26, NULL, '2019-06-16 19:32:32', '2019-06-16 19:32:32', NULL, 'publish'),
(85, ' Zinc Carbonate', 'zinc-carbonate', 26, NULL, '2019-06-16 19:32:39', '2019-06-16 19:32:39', NULL, 'publish'),
(86, ' Zdc Accelerators', 'zdc-accelerators', 26, NULL, '2019-06-16 19:32:47', '2019-06-16 19:32:47', NULL, 'publish'),
(87, ' YARN DYEING MACHINES', 'yarn-dyeing-machines', 25, NULL, '2019-06-16 19:33:19', '2019-06-16 19:33:19', NULL, 'publish'),
(88, ' Yarn Sensors', 'yarn-sensors', 25, NULL, '2019-06-16 19:33:26', '2019-06-16 19:33:26', NULL, 'publish'),
(89, ' Yarn Plastic', 'yarn-plastic', 25, NULL, '2019-06-16 19:33:51', '2019-06-16 19:33:51', NULL, 'publish'),
(90, ' Yarn Nylon', 'yarn-nylon', 25, NULL, '2019-06-16 19:33:58', '2019-06-16 19:33:58', NULL, 'publish'),
(91, ' Yogic Linguistic Program', 'yogic-linguistic-program', 25, NULL, '2019-06-16 19:34:05', '2019-06-16 19:34:05', NULL, 'publish'),
(92, ' Yoga Center', 'yoga-center', 25, NULL, '2019-06-16 19:34:13', '2019-06-16 19:34:13', NULL, 'publish'),
(93, ' Yoga Institute', 'yoga-institute', 25, NULL, '2019-06-16 19:34:21', '2019-06-16 19:34:21', NULL, 'publish'),
(94, ' Yantra', 'yantra', 25, NULL, '2019-06-16 19:34:29', '2019-06-16 19:34:29', NULL, 'publish'),
(95, ' Yo Yo Lanyards', 'yo-yo-lanyards', 25, NULL, '2019-06-16 19:34:37', '2019-06-16 19:34:37', NULL, 'publish'),
(96, ' Yoga School', 'yoga-school', 25, NULL, '2019-06-16 19:34:51', '2019-06-16 19:34:51', NULL, 'publish'),
(97, ' Y Type Control Valves', 'y-type-control-valves', 25, NULL, '2019-06-16 19:35:03', '2019-06-16 19:35:03', NULL, 'publish'),
(98, ' Y Type Lead Valve', 'y-type-lead-valve', 25, NULL, '2019-06-16 19:35:11', '2019-06-16 19:35:11', NULL, 'publish'),
(99, ' Y Type Flush Bottom Tank Valves', 'y-type-flush-bottom-tank-valves', 25, NULL, '2019-06-16 19:35:18', '2019-06-16 19:35:18', NULL, 'publish'),
(100, ' Y Bearings', 'y-bearings', 25, NULL, '2019-06-16 19:35:26', '2019-06-16 19:35:26', NULL, 'publish'),
(101, ' Yarn Tension Meter', 'yarn-tension-meter', 25, NULL, '2019-06-16 19:35:33', '2019-06-16 19:35:33', NULL, 'publish'),
(102, ' Yarn Mercerising Machine', 'yarn-mercerising-machine', 25, NULL, '2019-06-16 19:35:42', '2019-06-16 19:35:42', NULL, 'publish'),
(103, ' Yarn Oiling Device For Tfo Machines', 'yarn-oiling-device-for-tfo-machines', 25, NULL, '2019-06-16 19:35:50', '2019-06-16 19:35:50', NULL, 'publish'),
(104, ' Yarn Oiling Devices', 'yarn-oiling-devices', 25, NULL, '2019-06-16 19:35:57', '2019-06-16 19:35:57', NULL, 'publish'),
(105, ' Yarn Dryers', 'yarn-dryers', 25, NULL, '2019-06-16 19:36:04', '2019-06-16 19:36:04', NULL, 'publish'),
(106, ' Y Blenders', 'y-blenders', 25, NULL, '2019-06-16 19:36:12', '2019-06-16 19:36:12', NULL, 'publish'),
(107, ' Yarn Detectors', 'yarn-detectors', 25, NULL, '2019-06-16 19:36:20', '2019-06-16 19:36:20', NULL, 'publish'),
(108, ' Y Type Strainers', 'y-type-strainers', 25, NULL, '2019-06-16 19:36:28', '2019-06-16 19:36:28', NULL, 'publish'),
(109, ' York Compressor Spares', 'york-compressor-spares', 25, NULL, '2019-06-16 19:36:36', '2019-06-16 19:36:36', NULL, 'publish'),
(110, ' Yogurt Packaging Machines', 'yogurt-packaging-machines', 25, NULL, '2019-06-16 19:36:44', '2019-06-16 19:36:44', NULL, 'publish'),
(111, ' Yarn Twist Testers', 'yarn-twist-testers', 25, NULL, '2019-06-16 19:36:52', '2019-06-16 19:36:52', NULL, 'publish'),
(112, ' Yarn Strength Testers', 'yarn-strength-testers', 25, NULL, '2019-06-16 19:37:02', '2019-06-16 19:37:02', NULL, 'publish'),
(113, ' Yaskawa Drive Panels', 'yaskawa-drive-panels', 25, NULL, '2019-06-16 19:37:15', '2019-06-16 19:37:15', NULL, 'publish'),
(114, ' Yellow Oxide', 'yellow-oxide', 25, NULL, '2019-06-16 19:37:24', '2019-06-16 19:37:24', NULL, 'publish'),
(115, ' Yellow Petroleum Jelly', 'yellow-petroleum-jelly', 25, NULL, '2019-06-16 19:37:32', '2019-06-16 19:37:32', NULL, 'publish'),
(116, ' Yellow Beeswax', 'yellow-beeswax', 25, NULL, '2019-06-16 19:37:43', '2019-06-16 19:37:43', NULL, 'publish'),
(117, ' Xerox Services And Material Dealer', 'xerox-services-and-material-dealer', 24, NULL, '2019-06-16 19:38:21', '2019-06-16 19:38:21', NULL, 'publish'),
(118, ' X Ray Equipment', 'x-ray-equipment', 24, NULL, '2019-06-16 19:38:30', '2019-06-16 19:38:30', NULL, 'publish'),
(119, ' Xray And Other Machines And Accessories', 'xray-and-other-machines-and-accessories', 24, NULL, '2019-06-16 19:38:38', '2019-06-16 19:38:38', NULL, 'publish'),
(120, ' X Ray And Other Machines And Accessories', 'x-ray-and-other-machines-and-accessories', 24, NULL, '2019-06-16 19:38:48', '2019-06-16 19:38:48', NULL, 'publish'),
(121, ' Xylan Ptfe Coatings', 'xylan-ptfe-coatings', 24, NULL, '2019-06-16 19:39:25', '2019-06-16 19:39:25', NULL, 'publish'),
(122, ' Xylan Coating', 'xylan-coating', 24, NULL, '2019-06-16 19:39:34', '2019-06-16 19:39:34', NULL, 'publish'),
(123, ' Xerox Offset Press', 'xerox-offset-press', 24, NULL, '2019-06-16 19:39:43', '2019-06-16 19:39:43', NULL, 'publish'),
(124, ' Xylan Coated Moulds', 'xylan-coated-moulds', 24, NULL, '2019-06-16 19:39:51', '2019-06-16 19:39:51', NULL, 'publish'),
(125, ' X Ray Films', 'x-ray-films', 24, NULL, '2019-06-16 19:40:00', '2019-06-16 19:40:00', NULL, 'publish'),
(126, ' Xray Equipments', 'xray-equipments', 24, NULL, '2019-06-16 19:40:09', '2019-06-16 19:40:09', NULL, 'publish'),
(127, ' X Ray Baggage Scanners', 'x-ray-baggage-scanners', 24, NULL, '2019-06-16 19:40:20', '2019-06-16 19:40:20', NULL, 'publish'),
(128, ' Xray Accessories', 'xray-accessories', 24, NULL, '2019-06-16 19:40:28', '2019-06-16 19:40:28', NULL, 'publish'),
(129, ' X Ray Equipments', 'x-ray-equipments', 24, NULL, '2019-06-16 19:40:37', '2019-06-16 19:40:37', NULL, 'publish'),
(130, ' Xray And Other Machines And Accessories', 'xray-and-other-machines-and-accessories', 24, NULL, '2019-06-16 19:40:46', '2019-06-16 19:40:46', NULL, 'publish'),
(131, ' X-Ray Equipment', 'x-ray-equipment', 24, NULL, '2019-06-16 19:40:55', '2019-06-16 19:40:55', NULL, 'publish'),
(132, ' X-Ray Machines', 'x-ray-machines', 24, NULL, '2019-06-16 19:41:05', '2019-06-16 19:41:05', NULL, 'publish'),
(133, ' X Ray Accessories', 'x-ray-accessories', 24, NULL, '2019-06-16 19:41:14', '2019-06-16 19:41:14', NULL, 'publish'),
(134, ' X Ray Machines', 'x-ray-machines', 24, NULL, '2019-06-16 19:41:22', '2019-06-16 19:41:22', NULL, 'publish'),
(135, ' Xray Machines', 'xray-machines', 24, NULL, '2019-06-16 19:41:31', '2019-06-16 19:41:31', NULL, 'publish'),
(136, ' X-Ray And Other Machines And Accessories', 'x-ray-and-other-machines-and-accessories', 24, NULL, '2019-06-16 19:41:41', '2019-06-16 19:41:41', NULL, 'publish'),
(137, ' Xenon Lamps', 'xenon-lamps', 24, NULL, '2019-06-16 19:41:54', '2019-06-16 19:41:54', NULL, 'publish'),
(138, ' Xlpe Insulated Cables', 'xlpe-insulated-cables', 24, NULL, '2019-06-16 19:42:03', '2019-06-16 19:42:03', NULL, 'publish'),
(139, ' Xlpe Cables', 'xlpe-cables', 24, NULL, '2019-06-16 19:42:18', '2019-06-16 19:42:18', NULL, 'publish'),
(140, ' Xylene', 'xylene', 24, NULL, '2019-06-16 19:42:29', '2019-06-16 19:42:29', NULL, 'publish'),
(141, ' Xylene Chemicals', 'xylene-chemicals', 24, NULL, '2019-06-16 19:42:38', '2019-06-16 19:42:38', NULL, 'publish'),
(142, ' Water Swellable Tapes', 'water-swellable-tapes', 23, NULL, '2019-06-16 19:43:20', '2019-06-16 19:43:20', NULL, 'publish'),
(143, ' Water Sensors', 'water-sensors', 23, NULL, '2019-06-16 19:43:30', '2019-06-16 19:43:30', NULL, 'publish'),
(144, ' Workwear Clothings', 'workwear-clothings', 23, NULL, '2019-06-16 19:43:40', '2019-06-16 19:43:40', NULL, 'publish'),
(145, ' Water Repellents', 'water-repellents', 23, NULL, '2019-06-16 19:43:51', '2019-06-16 19:43:51', NULL, 'publish'),
(146, ' Wood Peeling Knives', 'wood-peeling-knives', 23, NULL, '2019-06-16 19:44:00', '2019-06-16 19:44:00', NULL, 'publish'),
(147, ' White Waterproof Tapes', 'white-waterproof-tapes', 23, NULL, '2019-06-16 19:44:09', '2019-06-16 19:44:09', NULL, 'publish'),
(148, 'Walk In Seed Germinators', 'walk-in-seed-germinators', 23, NULL, '2019-06-16 19:44:18', '2019-06-16 19:44:18', NULL, 'publish'),
(149, ' Water Treatment For Process / Industrial Applications', 'water-treatment-for-process-industrial-applications', 23, NULL, '2019-06-16 19:44:28', '2019-06-16 19:44:28', NULL, 'publish'),
(150, ' WATER BASED PRINTING INKS', 'water-based-printing-inks', 23, NULL, '2019-06-16 19:44:37', '2019-06-16 19:44:37', NULL, 'publish'),
(151, ' WEAVE CONVEYOR BELTS', 'weave-conveyor-belts', 23, NULL, '2019-06-16 19:44:46', '2019-06-16 19:44:46', NULL, 'publish'),
(152, ' Washroom Panels', 'washroom-panels', 23, NULL, '2019-06-16 19:44:55', '2019-06-16 19:44:55', NULL, 'publish'),
(153, ' WASTE OIL REREFINING PLANTS', 'waste-oil-rerefining-plants', 23, NULL, '2019-06-16 19:45:04', '2019-06-16 19:45:04', NULL, 'publish'),
(154, ' WATER COOLED SCREW CHILLERS', 'water-cooled-screw-chillers', 23, NULL, '2019-06-16 19:45:13', '2019-06-16 19:45:13', NULL, 'publish'),
(155, ' Wafer Check Valves', 'wafer-check-valves', 23, NULL, '2019-06-16 19:45:23', '2019-06-16 19:45:23', NULL, 'publish'),
(156, ' Water Submersible Pumps', 'water-submersible-pumps', 23, NULL, '2019-06-16 19:45:33', '2019-06-16 19:45:33', NULL, 'publish'),
(157, ' WATER COOLED SCROLL CHILLERS', 'water-cooled-scroll-chillers', 23, NULL, '2019-06-16 19:45:43', '2019-06-16 19:45:43', NULL, 'publish'),
(158, ' Wall Paper Mfrs.And Dealers', 'wall-paper-mfrsand-dealers', 23, NULL, '2019-06-16 19:45:52', '2019-06-16 19:45:52', NULL, 'publish'),
(159, ' WNRF Flanges', 'wnrf-flanges', 23, NULL, '2019-06-16 19:46:02', '2019-06-16 19:46:02', NULL, 'publish'),
(160, ' WELDING LINE MACHINERY', 'welding-line-machinery', 23, NULL, '2019-06-16 19:46:11', '2019-06-16 19:46:11', NULL, 'publish'),
(161, ' WORKSHOP TOOLS', 'workshop-tools', 23, NULL, '2019-06-16 19:46:20', '2019-06-16 19:46:20', NULL, 'publish'),
(162, ' Welding Skill Upgradation Courses', 'welding-skill-upgradation-courses', 23, NULL, '2019-06-16 19:46:29', '2019-06-16 19:46:29', NULL, 'publish'),
(163, ' Waterproof Junction Boxes', 'waterproof-junction-boxes', 23, NULL, '2019-06-16 19:46:38', '2019-06-16 19:46:38', NULL, 'publish'),
(164, ' Wire Type Capacitors', 'wire-type-capacitors', 23, NULL, '2019-06-16 19:46:47', '2019-06-16 19:46:47', NULL, 'publish'),
(165, ' Wood Coating', 'wood-coating', 23, NULL, '2019-06-16 19:47:28', '2019-06-16 19:47:28', NULL, 'publish'),
(166, ' Wood Preservative Oil', 'wood-preservative-oil', 23, NULL, '2019-06-16 19:47:37', '2019-06-16 19:47:37', NULL, 'publish'),
(167, ' Wetting Agents', 'wetting-agents', 23, NULL, '2019-06-16 19:47:46', '2019-06-16 19:47:46', NULL, 'publish'),
(168, ' Whiting Powders', 'whiting-powders', 23, NULL, '2019-06-16 19:47:56', '2019-06-16 19:47:56', NULL, 'publish'),
(169, ' Water Proof Lubricants', 'water-proof-lubricants', 23, NULL, '2019-06-16 19:48:07', '2019-06-16 19:48:07', NULL, 'publish'),
(170, ' Water Soluble Cutting Oil', 'water-soluble-cutting-oil', 23, NULL, '2019-06-16 19:48:17', '2019-06-16 19:48:17', NULL, 'publish'),
(171, ' White Microcrystalline Wax', 'white-microcrystalline-wax', 23, NULL, '2019-06-16 19:48:28', '2019-06-16 19:48:28', NULL, 'publish'),
(172, ' Wood Stain', 'wood-stain', 23, NULL, '2019-06-16 19:48:39', '2019-06-16 19:48:39', NULL, 'publish'),
(173, ' White Mineral Oil', 'white-mineral-oil', 23, NULL, '2019-06-16 20:07:07', '2019-06-16 20:07:07', NULL, 'publish'),
(174, ' Wall Coatings', 'wall-coatings', 23, NULL, '2019-06-16 20:07:17', '2019-06-16 20:07:17', NULL, 'publish'),
(175, ' Weatherproofing', 'weatherproofing', 23, NULL, '2019-06-16 20:07:28', '2019-06-16 20:07:28', NULL, 'publish'),
(176, ' Wet Look Styling Gel', 'wet-look-styling-gel', 23, NULL, '2019-06-16 20:07:38', '2019-06-16 20:07:38', NULL, 'publish'),
(177, ' Welding Cleaning Paste', 'welding-cleaning-paste', 23, NULL, '2019-06-16 20:07:47', '2019-06-16 20:07:47', NULL, 'publish'),
(178, ' Waterproofing Admixtures', 'waterproofing-admixtures', 23, NULL, '2019-06-16 20:08:00', '2019-06-16 20:08:00', NULL, 'publish'),
(179, ' Water Soluble Dyes', 'water-soluble-dyes', 23, NULL, '2019-06-16 20:08:16', '2019-06-16 20:08:16', NULL, 'publish'),
(180, ' White Oil', 'white-oil', 23, NULL, '2019-06-16 20:08:27', '2019-06-16 20:08:27', NULL, 'publish'),
(181, ' Water Based Over Print Varnishes', 'water-based-over-print-varnishes', 23, NULL, '2019-06-16 20:08:39', '2019-06-16 20:08:39', NULL, 'publish'),
(182, ' Water Softeners', 'water-softeners', 23, NULL, '2019-06-16 20:08:51', '2019-06-16 20:08:51', NULL, 'publish'),
(183, ' Weather Proof Adhesive', 'weather-proof-adhesive', 23, NULL, '2019-06-16 20:09:02', '2019-06-16 20:09:02', NULL, 'publish'),
(184, ' Water Proofing Chemicals', 'water-proofing-chemicals', 23, NULL, '2019-06-16 20:09:12', '2019-06-16 20:09:12', NULL, 'publish'),
(185, ' White Petroleum Jelly', 'white-petroleum-jelly', 23, NULL, '2019-06-16 20:09:22', '2019-06-16 20:09:22', NULL, 'publish'),
(186, ' Water Proofing Materials', 'water-proofing-materials', 23, NULL, '2019-06-16 20:09:51', '2019-06-16 20:09:51', NULL, 'publish'),
(187, ' White Beeswax', 'white-beeswax', 23, NULL, '2019-06-16 20:10:02', '2019-06-16 20:10:02', NULL, 'publish'),
(188, ' Wood Preservatives', 'wood-preservatives', 23, NULL, '2019-06-16 20:10:12', '2019-06-16 20:10:12', NULL, 'publish'),
(189, ' Water Based Polyurethane Dispersions', 'water-based-polyurethane-dispersions', 23, NULL, '2019-06-16 20:10:51', '2019-06-16 20:10:51', NULL, 'publish'),
(190, ' Wax Candles', 'wax-candles', 23, NULL, '2019-06-16 20:11:01', '2019-06-16 20:11:01', NULL, 'publish'),
(191, ' Wax', 'wax', 23, NULL, '2019-06-16 20:11:47', '2019-06-16 20:11:47', NULL, 'publish'),
(192, ' Weatherproof Teelphone', 'weatherproof-teelphone', 23, NULL, '2019-06-16 20:12:00', '2019-06-16 20:12:00', NULL, 'publish'),
(193, ' Wood Adhesive', 'wood-adhesive', 23, NULL, '2019-06-16 20:12:16', '2019-06-16 20:12:16', NULL, 'publish'),
(194, ' Walkway Marking', 'walkway-marking', 23, NULL, '2019-06-16 20:12:27', '2019-06-16 20:12:27', NULL, 'publish'),
(195, ' Water Based Polyurethanes', 'water-based-polyurethanes', 23, NULL, '2019-06-16 20:12:41', '2019-06-16 20:12:41', NULL, 'publish'),
(196, ' White Glues', 'white-glues', 23, NULL, '2019-06-16 20:12:57', '2019-06-16 20:12:57', NULL, 'publish'),
(197, ' Water Proofing Compounds', 'water-proofing-compounds', 23, NULL, '2019-06-16 20:15:53', '2019-06-16 20:15:53', NULL, 'publish'),
(198, ' Waterbased Polyurethane Dispersion', 'waterbased-polyurethane-dispersion', 23, NULL, '2019-06-16 20:16:05', '2019-06-16 20:16:05', NULL, 'publish'),
(199, ' Waterproofing Polymers', 'waterproofing-polymers', 23, NULL, '2019-06-16 20:16:17', '2019-06-16 20:16:17', NULL, 'publish'),
(200, ' Web Development', 'web-development', 23, NULL, '2019-06-16 20:16:30', '2019-06-16 20:16:30', NULL, 'publish'),
(201, ' Weld Bright Stainless Steel Pickling Gel', 'weld-bright-stainless-steel-pickling-gel', 23, NULL, '2019-06-16 20:16:41', '2019-06-16 20:16:41', NULL, 'publish'),
(202, ' Water Treatment Chemicals', 'water-treatment-chemicals', 23, NULL, '2019-06-16 20:16:54', '2019-06-16 20:16:54', NULL, 'publish'),
(203, ' Wireless Solutions', 'wireless-solutions', 23, NULL, '2019-06-16 20:17:05', '2019-06-16 20:17:05', NULL, 'publish'),
(204, ' Wireless Communication Devices', 'wireless-communication-devices', 23, NULL, '2019-06-16 20:18:31', '2019-06-16 20:18:31', NULL, 'publish'),
(205, ' Water Chilling Plants', 'water-chilling-plants', 23, NULL, '2019-06-16 20:18:43', '2019-06-16 20:18:43', NULL, 'publish'),
(206, ' Water Cooler Tanks', 'water-cooler-tanks', 23, NULL, '2019-06-16 20:18:55', '2019-06-16 20:18:55', NULL, 'publish'),
(207, ' Water Cooler Spares', 'water-cooler-spares', 23, NULL, '2019-06-16 20:19:05', '2019-06-16 20:19:05', NULL, 'publish'),
(208, ' Water Coolers', 'water-coolers', 23, NULL, '2019-06-16 20:19:17', '2019-06-16 20:19:17', NULL, 'publish'),
(209, ' Wiring Looms Auto', 'wiring-looms-auto', 23, NULL, '2019-06-16 20:19:30', '2019-06-16 20:19:30', NULL, 'publish'),
(210, ' Wind Inverters', 'wind-inverters', 23, NULL, '2019-06-16 20:19:42', '2019-06-16 20:19:42', NULL, 'publish'),
(211, ' Web Hosting', 'web-hosting', 23, NULL, '2019-06-16 20:19:55', '2019-06-16 20:19:55', NULL, 'publish'),
(212, ' Walkie Talkie Systems', 'walkie-talkie-systems', 23, NULL, '2019-06-16 20:20:07', '2019-06-16 20:20:07', NULL, 'publish'),
(213, ' Web Designing', 'web-designing', 23, NULL, '2019-06-16 20:20:19', '2019-06-16 20:20:19', NULL, 'publish'),
(214, ' Website Development', 'website-development', 23, NULL, '2019-06-16 20:21:25', '2019-06-16 20:21:25', NULL, 'publish'),
(215, ' Wireless Equipments', 'wireless-equipments', 23, NULL, '2019-06-16 20:21:38', '2019-06-16 20:21:38', NULL, 'publish'),
(216, ' Wall Mounting Manual Screens', 'wall-mounting-manual-screens', 23, NULL, '2019-06-16 20:21:49', '2019-06-16 20:21:49', NULL, 'publish'),
(217, ' Water Cooled Capacitors', 'water-cooled-capacitors', 23, NULL, '2019-06-16 20:22:01', '2019-06-16 20:22:01', NULL, 'publish'),
(218, ' White Precipitated Silica', 'white-precipitated-silica', 23, NULL, '2019-06-16 20:22:13', '2019-06-16 20:22:13', NULL, 'publish'),
(219, ' Wiring Harness', 'wiring-harness', 23, NULL, '2019-06-16 20:22:24', '2019-06-16 20:22:24', NULL, 'publish'),
(220, ' Wan Lan Management', 'wan-lan-management', 23, NULL, '2019-06-16 20:22:37', '2019-06-16 20:22:37', NULL, 'publish'),
(221, ' Window Air Conditioners', 'window-air-conditioners', 23, NULL, '2019-06-16 20:22:49', '2019-06-16 20:22:49', NULL, 'publish'),
(222, ' Web Based Solutions', 'web-based-solutions', 23, NULL, '2019-06-16 20:22:59', '2019-06-16 20:22:59', NULL, 'publish'),
(223, ' Winged Knobs', 'winged-knobs', 23, NULL, '2019-06-16 20:23:15', '2019-06-16 20:23:15', NULL, 'publish'),
(224, ' Weatherproof Control Panels', 'weatherproof-control-panels', 23, NULL, '2019-06-16 20:23:27', '2019-06-16 20:23:27', NULL, 'publish'),
(225, ' Water Leak Detection Cables', 'water-leak-detection-cables', 23, NULL, '2019-06-16 20:26:23', '2019-06-16 20:26:23', NULL, 'publish'),
(226, ' Wall Automatic Roll Back Spring Action Screens', 'wall-automatic-roll-back-spring-action-screens', 23, NULL, '2019-06-16 20:26:39', '2019-06-16 20:26:39', NULL, 'publish'),
(227, ' Wire Wound Resistor Coils', 'wire-wound-resistor-coils', 23, NULL, '2019-06-16 20:28:16', '2019-06-16 20:28:16', NULL, 'publish'),
(228, ' Web Design', 'web-design', 23, NULL, '2019-06-16 20:28:29', '2019-06-16 20:28:29', NULL, 'publish'),
(229, ' Web Site Designing', 'web-site-designing', 23, NULL, '2019-06-16 20:28:40', '2019-06-16 20:28:40', NULL, 'publish'),
(230, ' Water Cooled Chillers', 'water-cooled-chillers', 23, NULL, '2019-06-16 20:28:52', '2019-06-16 20:28:52', NULL, 'publish'),
(231, ' Wiring Harness Auto', 'wiring-harness-auto', 23, NULL, '2019-06-16 20:29:05', '2019-06-16 20:29:05', NULL, 'publish'),
(232, ' Winding Disc', 'winding-disc', 23, NULL, '2019-06-16 20:29:17', '2019-06-16 20:29:17', NULL, 'publish'),
(233, ' Water Chillers', 'water-chillers', 23, NULL, '2019-06-16 20:29:38', '2019-06-16 20:29:38', NULL, 'publish'),
(234, ' Water Cooled Chilling Plants', 'water-cooled-chilling-plants', 23, NULL, '2019-06-16 20:30:46', '2019-06-16 20:30:46', NULL, 'publish'),
(235, ' Weatherproof Lighting Distribution Boards', 'weatherproof-lighting-distribution-boards', 23, NULL, '2019-06-16 20:31:00', '2019-06-16 20:31:00', NULL, 'publish'),
(236, ' Water Purifier Repairs', 'water-purifier-repairs', 23, NULL, '2019-06-16 20:31:12', '2019-06-16 20:31:12', NULL, 'publish'),
(237, ' Water Level Control Panel', 'water-level-control-panel', 23, NULL, '2019-06-16 20:31:24', '2019-06-16 20:31:24', NULL, 'publish'),
(238, ' Wire Gride Accessories', 'wire-gride-accessories', 23, NULL, '2019-06-16 20:31:37', '2019-06-16 20:31:37', NULL, 'publish'),
(239, ' Weatherproof Busbar Distribution Boards', 'weatherproof-busbar-distribution-boards', 23, NULL, '2019-06-16 20:31:51', '2019-06-16 20:31:51', NULL, 'publish'),
(240, ' Water Dispensers', 'water-dispensers', 23, NULL, '2019-06-16 20:32:06', '2019-06-16 20:32:06', NULL, 'publish'),
(241, ' Weatherproof Housing For Camera', 'weatherproof-housing-for-camera', 23, NULL, '2019-06-16 20:32:18', '2019-06-16 20:32:18', NULL, 'publish'),
(242, ' Wet Strength Abrasive Kraft Papers', 'wet-strength-abrasive-kraft-papers', 23, NULL, '2019-06-16 20:32:31', '2019-06-16 20:32:31', NULL, 'publish'),
(243, ' Weatherproof Panels', 'weatherproof-panels', 23, NULL, '2019-06-16 20:32:46', '2019-06-16 20:32:46', NULL, 'publish'),
(244, ' Weather Proof Enclosure Cctv Camera', 'weather-proof-enclosure-cctv-camera', 23, NULL, '2019-06-16 20:34:18', '2019-06-16 20:34:18', NULL, 'publish'),
(245, ' Woven Polyester Tapes', 'woven-polyester-tapes', 23, NULL, '2019-06-16 20:34:32', '2019-06-16 20:34:32', NULL, 'publish'),
(246, ' Welding Cable Reels', 'welding-cable-reels', 23, NULL, '2019-06-16 20:34:45', '2019-06-16 20:34:45', NULL, 'publish'),
(247, ' Water Treatment Plant Control Panels', 'water-treatment-plant-control-panels', 23, NULL, '2019-06-16 20:34:57', '2019-06-16 20:34:57', NULL, 'publish'),
(248, ' Wireless Security Systems', 'wireless-security-systems', 23, NULL, '2019-06-16 20:35:10', '2019-06-16 20:35:10', NULL, 'publish'),
(249, ' Water Cooled Housing Cctv Camera', 'water-cooled-housing-cctv-camera', 23, NULL, '2019-06-16 20:35:31', '2019-06-16 20:35:31', NULL, 'publish'),
(250, ' Warning Lights', 'warning-lights', 23, NULL, '2019-06-16 20:35:42', '2019-06-16 20:35:42', NULL, 'publish'),
(251, ' Weatherproof Mcc Panels', 'weatherproof-mcc-panels', 23, NULL, '2019-06-16 20:35:54', '2019-06-16 20:35:54', NULL, 'publish'),
(252, ' Water Filters', 'water-filters', 23, NULL, '2019-06-16 20:36:56', '2019-06-16 20:36:56', NULL, 'publish'),
(253, ' Water Cooled Housing Lens', 'water-cooled-housing-lens', 23, NULL, '2019-06-16 20:37:08', '2019-06-16 20:37:08', NULL, 'publish'),
(254, ' Welded Wire Fabrics', 'welded-wire-fabrics', 23, NULL, '2019-06-16 20:37:47', '2019-06-16 20:37:47', NULL, 'publish'),
(255, ' Woollen Combing Units', 'woollen-combing-units', 23, NULL, '2019-06-16 20:37:59', '2019-06-16 20:37:59', NULL, 'publish'),
(256, ' Woollen Carpets', 'woollen-carpets', 23, NULL, '2019-06-16 20:42:57', '2019-06-16 20:42:57', NULL, 'publish'),
(257, ' Warehousing Distribution', 'warehousing-distribution', 23, NULL, '2019-06-16 20:43:12', '2019-06-16 20:43:12', NULL, 'publish'),
(258, ' Wire Cloth', 'wire-cloth', 23, NULL, '2019-06-16 20:43:25', '2019-06-16 20:43:25', NULL, 'publish'),
(259, ' Wire Woven Mesh', 'wire-woven-mesh', 23, NULL, '2019-06-16 20:44:03', '2019-06-16 20:44:03', NULL, 'publish'),
(260, ' Writing Paper', 'writing-paper', 23, NULL, '2019-06-16 20:44:18', '2019-06-16 20:44:18', NULL, 'publish'),
(261, ' Waste Papers', 'waste-papers', 23, NULL, '2019-06-16 20:50:31', '2019-06-16 20:50:31', NULL, 'publish'),
(262, ' Wooden Packing', 'wooden-packing', 23, NULL, '2019-06-16 20:50:46', '2019-06-16 20:50:46', NULL, 'publish'),
(263, ' Wire Drawing Ferrous And Non Ferrous', 'wire-drawing-ferrous-and-non-ferrous', 23, NULL, '2019-06-16 20:50:59', '2019-06-16 20:50:59', NULL, 'publish'),
(264, ' Water Paper', 'water-paper', 23, NULL, '2019-06-16 20:52:22', '2019-06-16 20:52:22', NULL, 'publish'),
(265, ' Wooden Battens', 'wooden-battens', 23, NULL, '2019-06-16 20:52:35', '2019-06-16 20:52:35', NULL, 'publish'),
(266, ' Wooden Crates', 'wooden-crates', 23, NULL, '2019-06-16 20:52:56', '2019-06-16 20:52:56', NULL, 'publish'),
(267, ' Welded Wire Mesh', 'welded-wire-mesh', 23, NULL, '2019-06-16 20:53:48', '2019-06-16 20:53:48', NULL, 'publish'),
(268, ' Wads Nylon', 'wads-nylon', 23, NULL, '2019-06-16 20:54:02', '2019-06-16 20:54:02', NULL, 'publish'),
(269, ' Watering Tanks', 'watering-tanks', 23, NULL, '2019-06-16 20:54:15', '2019-06-16 20:54:15', NULL, 'publish'),
(270, ' Wood Storage Pallets', 'wood-storage-pallets', 23, NULL, '2019-06-16 20:54:28', '2019-06-16 20:54:28', NULL, 'publish'),
(271, ' Wooden Packaging Box', 'wooden-packaging-box', 23, NULL, '2019-06-16 20:56:47', '2019-06-16 20:56:47', NULL, 'publish'),
(272, 'Earthing Materials', 'earthing-materials', 5, NULL, '2019-06-16 20:57:58', '2019-06-16 20:57:58', NULL, 'publish'),
(273, 'Ecoflam Burners', 'ecoflam-burners', 5, NULL, '2019-06-16 20:58:15', '2019-06-16 20:58:15', NULL, 'publish'),
(274, 'Edible Oils', 'edible-oils', 5, NULL, '2019-06-16 20:58:49', '2019-06-16 20:58:49', NULL, 'publish'),
(275, 'Electric Motors', 'electric-motors', 5, NULL, '2019-06-16 20:59:12', '2019-06-16 20:59:12', NULL, 'publish'),
(276, 'Electrical Contractors', 'electrical-contractors', 5, NULL, '2019-06-16 20:59:25', '2019-06-16 20:59:25', NULL, 'publish'),
(277, 'Electrical Control Panels', 'electrical-control-panels', 5, NULL, '2019-06-16 20:59:40', '2019-06-16 20:59:40', NULL, 'publish'),
(278, 'Electrical Earthing Materials', 'electrical-earthing-materials', 5, NULL, '2019-06-16 20:59:54', '2019-06-16 20:59:54', NULL, 'publish'),
(279, 'Electrical Job Work', 'electrical-job-work', 5, NULL, '2019-06-16 21:00:10', '2019-06-16 21:00:10', NULL, 'publish'),
(280, 'Electrical Materials', 'electrical-materials', 5, NULL, '2019-06-16 21:00:24', '2019-06-16 21:00:24', NULL, 'publish'),
(281, 'Electro Plating Equipments', 'electro-plating-equipments', 5, NULL, '2019-06-16 21:00:38', '2019-06-16 21:00:38', NULL, 'publish'),
(282, 'Electronic Ballasts', 'electronic-ballasts', 5, NULL, '2019-06-16 21:00:52', '2019-06-16 21:00:52', NULL, 'publish'),
(283, 'Electronic Hooters', 'electronic-hooters', 5, NULL, '2019-06-16 21:01:08', '2019-06-16 21:01:08', NULL, 'publish'),
(284, 'Electroplating Chemicals', 'electroplating-chemicals', 5, NULL, '2019-06-16 21:01:27', '2019-06-16 21:01:27', NULL, 'publish'),
(285, 'Elevator Parts', 'elevator-parts', 5, NULL, '2019-06-16 21:01:42', '2019-06-16 21:01:42', NULL, 'publish'),
(286, 'Empty Capsules', 'empty-capsules', 5, NULL, '2019-06-16 21:01:57', '2019-06-16 21:01:57', NULL, 'publish'),
(287, 'Enamelled Copper Wire', 'enamelled-copper-wire', 5, NULL, '2019-06-16 21:02:12', '2019-06-16 21:02:12', NULL, 'publish'),
(288, 'Enclosures', 'enclosures', 5, NULL, '2019-06-16 21:02:27', '2019-06-16 21:02:27', NULL, 'publish'),
(289, 'Encoder', 'encoder', 5, NULL, '2019-06-16 21:02:45', '2019-06-16 21:02:45', NULL, 'publish'),
(290, 'Energy Meters', 'energy-meters', 5, NULL, '2019-06-16 21:03:05', '2019-06-16 21:03:05', NULL, 'publish'),
(291, 'Energy Saving Devices', 'energy-saving-devices', 5, NULL, '2019-06-16 21:03:19', '2019-06-16 21:03:19', NULL, 'publish'),
(292, 'Engine Oil', 'engine-oil', 5, NULL, '2019-06-16 21:03:50', '2019-06-16 21:03:50', NULL, 'publish'),
(293, 'Engineering Consultants', 'engineering-consultants', 5, NULL, '2019-06-16 21:04:04', '2019-06-16 21:04:04', NULL, 'publish'),
(294, 'Engineering Research Centers', 'engineering-research-centers', 5, NULL, '2019-06-16 21:04:17', '2019-06-16 21:04:17', NULL, 'publish'),
(295, 'Epabx', 'epabx', 5, NULL, '2019-06-16 21:04:31', '2019-06-16 21:04:31', NULL, 'publish'),
(296, 'Epabx Systems', 'epabx-systems', 5, NULL, '2019-06-16 21:04:45', '2019-06-16 21:04:45', NULL, 'publish'),
(297, 'Epe Foam', 'epe-foam', 5, NULL, '2019-06-16 21:05:03', '2019-06-16 21:05:03', NULL, 'publish'),
(298, 'Epoxy Resins', 'epoxy-resins', 5, NULL, '2019-06-16 21:05:16', '2019-06-16 21:05:16', NULL, 'publish'),
(299, 'Epr Cables', 'epr-cables', 5, NULL, '2019-06-16 21:05:29', '2019-06-16 21:05:29', NULL, 'publish'),
(300, 'Eps', 'eps', 5, NULL, '2019-06-16 21:05:42', '2019-06-16 21:05:42', NULL, 'publish'),
(301, 'Erection Contractors', 'erection-contractors', 5, NULL, '2019-06-16 21:05:57', '2019-06-16 21:05:57', NULL, 'publish'),
(302, 'Essential Oils', 'essential-oils', 5, NULL, '2019-06-16 21:06:12', '2019-06-16 21:06:12', NULL, 'publish'),
(303, 'Ethanol', 'ethanol', 5, NULL, '2019-06-16 21:06:25', '2019-06-16 21:06:25', NULL, 'publish'),
(304, 'Ethyl Acetate', 'ethyl-acetate', 5, NULL, '2019-06-16 21:06:40', '2019-06-16 21:06:40', NULL, 'publish'),
(305, 'Eucalyptus Oil', 'eucalyptus-oil', 5, NULL, '2019-06-16 21:06:56', '2019-06-16 21:06:56', NULL, 'publish'),
(306, 'Excavator', 'excavator', 5, NULL, '2019-06-16 21:07:11', '2019-06-16 21:07:11', NULL, 'publish'),
(307, 'Exothermic Sleeves', 'exothermic-sleeves', 5, NULL, '2019-06-16 21:07:24', '2019-06-16 21:07:24', NULL, 'publish'),
(308, 'Expansion Bellows', 'expansion-bellows', 5, NULL, '2019-06-16 21:07:38', '2019-06-16 21:07:38', NULL, 'publish'),
(309, 'Fabrication', 'fabrication', 6, NULL, '2019-06-17 05:53:06', '2019-06-17 05:53:06', NULL, 'publish'),
(310, 'Factory Automation Products', 'factory-automation-products', 6, NULL, '2019-06-17 05:53:25', '2019-06-17 05:53:25', NULL, 'publish'),
(311, 'Fan Parts', 'fan-parts', 6, NULL, '2019-06-17 05:53:44', '2019-06-17 05:53:44', NULL, 'publish'),
(312, 'Fans All Types', 'fans-all-types', 6, NULL, '2019-06-17 05:54:05', '2019-06-17 05:54:05', NULL, 'publish'),
(313, 'Farsan', 'farsan', 6, NULL, '2019-06-17 05:55:49', '2019-06-17 05:55:49', NULL, 'publish'),
(314, 'Fasteners', 'fasteners', 6, NULL, '2019-06-17 05:56:07', '2019-06-17 05:56:07', NULL, 'publish'),
(315, 'Fatty Acids', 'fatty-acids', 6, NULL, '2019-06-17 05:56:28', '2019-06-17 05:56:28', NULL, 'publish'),
(316, 'Fencing Contractors', 'fencing-contractors', 6, NULL, '2019-06-17 05:56:52', '2019-06-17 05:56:52', NULL, 'publish'),
(317, 'Ferric Alum', 'ferric-alum', 6, NULL, '2019-06-17 05:57:07', '2019-06-17 05:57:07', NULL, 'publish'),
(318, 'Ferrite Magnets', 'ferrite-magnets', 6, NULL, '2019-06-17 05:57:29', '2019-06-17 05:57:29', NULL, 'publish'),
(319, 'Ffs Machines', 'ffs-machines', 6, NULL, '2019-06-17 05:57:43', '2019-06-17 05:57:43', NULL, 'publish'),
(320, 'Fibre Glass Sleeves', 'fibre-glass-sleeves', 6, NULL, '2019-06-17 05:58:10', '2019-06-17 05:58:10', NULL, 'publish'),
(321, 'Filter Pads', 'filter-pads', 6, NULL, '2019-06-17 05:58:19', '2019-06-17 05:58:19', NULL, 'publish'),
(322, 'Filter Paper', 'filter-paper', 6, NULL, '2019-06-17 05:58:38', '2019-06-17 05:58:38', NULL, 'publish'),
(323, 'Finance Consultants', 'finance-consultants', 6, NULL, '2019-06-17 05:58:47', '2019-06-17 05:58:47', NULL, 'publish'),
(324, 'Financial Consultancy', 'financial-consultancy', 6, NULL, '2019-06-17 05:59:14', '2019-06-17 05:59:14', NULL, 'publish'),
(325, 'Fire Alarms', 'fire-alarms', 6, NULL, '2019-06-17 05:59:23', '2019-06-17 05:59:23', NULL, 'publish'),
(326, 'Fire Bricks', 'fire-bricks', 6, NULL, '2019-06-17 05:59:40', '2019-06-17 05:59:40', NULL, 'publish'),
(327, 'Fire Extinguishers', 'fire-extinguishers', 6, NULL, '2019-06-17 05:59:52', '2019-06-17 05:59:52', NULL, 'publish'),
(328, 'Fire Fighting Equipments', 'fire-fighting-equipments', 6, NULL, '2019-06-17 06:00:08', '2019-06-17 06:00:08', NULL, 'publish'),
(329, 'Fire Hydrant Systems', 'fire-hydrant-systems', 6, NULL, '2019-06-17 06:00:22', '2019-06-17 06:00:22', NULL, 'publish'),
(330, 'Fire Hydrants', 'fire-hydrants', 6, NULL, '2019-06-17 06:00:45', '2019-06-17 06:00:45', NULL, 'publish'),
(331, 'Fire Protection Systems', 'fire-protection-systems', 6, NULL, '2019-06-17 06:00:57', '2019-06-17 06:00:57', NULL, 'publish'),
(332, 'Fire Sprinkler Systems', 'fire-sprinkler-systems', 6, NULL, '2019-06-17 06:01:08', '2019-06-17 06:01:08', NULL, 'publish'),
(333, 'Fire Tender Power Take Off', 'fire-tender-power-take-off', 6, NULL, '2019-06-17 06:01:26', '2019-06-17 06:01:26', NULL, 'publish'),
(334, 'Fish Processing Machinery', 'fish-processing-machinery', 6, NULL, '2019-06-17 06:01:39', '2019-06-17 06:01:39', NULL, 'publish'),
(335, 'Fish Processing Plants', 'fish-processing-plants', 6, NULL, '2019-06-17 06:02:00', '2019-06-17 06:02:00', NULL, 'publish'),
(336, 'Fitness Equipments', 'fitness-equipments', 6, NULL, '2019-06-17 06:02:09', '2019-06-17 06:02:09', NULL, 'publish'),
(337, 'Fixtures', 'fixtures', 6, NULL, '2019-06-17 06:02:26', '2019-06-17 06:02:26', NULL, 'publish'),
(338, 'Flame Arrestor', 'flame-arrestor', 6, NULL, '2019-06-17 06:03:59', '2019-06-17 06:03:59', NULL, 'publish'),
(339, 'Flame Proof Motors', 'flame-proof-motors', 6, NULL, '2019-06-17 06:04:08', '2019-06-17 06:04:08', NULL, 'publish'),
(340, 'Flameproof Equipments', 'flameproof-equipments', 6, NULL, '2019-06-17 06:04:54', '2019-06-17 06:04:54', NULL, 'publish'),
(341, 'Flattening Machine For Stitching Wire', 'flattening-machine-for-stitching-wire', 6, NULL, '2019-06-17 06:05:19', '2019-06-17 06:05:19', NULL, 'publish'),
(342, 'Fleet Owners', 'fleet-owners', 6, NULL, '2019-06-17 06:05:44', '2019-06-17 06:05:44', NULL, 'publish'),
(343, 'Floor Care And Cleaning Machines', 'floor-care-and-cleaning-machines', 6, NULL, '2019-06-17 06:06:21', '2019-06-17 06:06:21', NULL, 'publish'),
(344, 'Flour Mills Atta', 'flour-mills-atta', 6, NULL, '2019-06-17 06:09:24', '2019-06-17 06:09:24', NULL, 'publish'),
(345, 'Flour Mills Maida', 'flour-mills-maida', 6, NULL, '2019-06-17 06:09:35', '2019-06-17 06:09:35', NULL, 'publish'),
(346, 'Flux Cored Wire', 'flux-cored-wire', 6, NULL, '2019-06-17 06:09:50', '2019-06-17 06:09:50', NULL, 'publish'),
(347, 'Foil And Foil Products', 'foil-and-foil-products', 6, NULL, '2019-06-17 06:10:11', '2019-06-17 06:10:11', NULL, 'publish'),
(348, 'Food Additives', 'food-additives', 6, NULL, '2019-06-17 06:12:07', '2019-06-17 06:12:07', NULL, 'publish'),
(349, 'Food Colours', 'food-colours', 6, NULL, '2019-06-17 06:12:29', '2019-06-17 06:12:29', NULL, 'publish'),
(350, 'Food Processed', 'food-processed', 6, NULL, '2019-06-17 06:12:59', '2019-06-17 06:12:59', NULL, 'publish'),
(351, 'Food Processing Machinery Equipment', 'food-processing-machinery-equipment', 6, NULL, '2019-06-17 06:13:10', '2019-06-17 06:13:10', NULL, 'publish'),
(352, 'Food Product', 'food-product', 6, NULL, '2019-06-17 06:13:25', '2019-06-17 06:13:25', NULL, 'publish'),
(353, 'Fork Lift Spares', 'fork-lift-spares', 6, NULL, '2019-06-17 07:11:30', '2019-06-17 07:11:30', NULL, 'publish'),
(354, 'Forklift Operator Training', 'forklift-operator-training', 6, NULL, '2019-06-17 07:12:00', '2019-06-17 07:12:00', NULL, 'publish'),
(355, 'Forklift Services And Hiring', 'forklift-services-and-hiring', 6, NULL, '2019-06-17 07:12:25', '2019-06-17 07:12:25', NULL, 'publish'),
(356, 'Formaldehyde', 'formaldehyde', 6, NULL, '2019-06-17 07:12:47', '2019-06-17 07:12:47', NULL, 'publish'),
(357, 'Foundry Equipments', 'foundry-equipments', 6, NULL, '2019-06-17 07:13:12', '2019-06-17 07:13:12', NULL, 'publish'),
(358, 'Foundry Raw Material', 'foundry-raw-material', 6, NULL, '2019-06-17 07:13:36', '2019-06-17 07:13:36', NULL, 'publish'),
(359, 'Freight Forwarders', 'freight-forwarders', 6, NULL, '2019-06-17 07:13:57', '2019-06-17 07:13:57', NULL, 'publish'),
(360, 'Frequency Meters', 'frequency-meters', 6, NULL, '2019-06-17 07:14:20', '2019-06-17 07:14:20', NULL, 'publish'),
(361, 'Frp Wedding Rath', 'frp-wedding-rath', 6, NULL, '2019-06-17 07:14:43', '2019-06-17 07:14:43', NULL, 'publish'),
(362, 'Fully Automatic Chapati Making Machines', 'fully-automatic-chapati-making-machines', 6, NULL, '2019-06-17 07:15:08', '2019-06-17 07:15:08', NULL, 'publish'),
(363, 'Fume Extraction Systems', 'fume-extraction-systems', 6, NULL, '2019-06-17 07:15:37', '2019-06-17 07:15:37', NULL, 'publish'),
(364, 'Furan', 'furan', 6, NULL, '2019-06-17 07:19:04', '2019-06-17 07:19:04', NULL, 'publish'),
(365, 'Furnaces', 'furnaces', 6, NULL, '2019-06-17 07:19:26', '2019-06-17 07:19:26', NULL, 'publish'),
(366, 'Gas Chromatography', 'gas-chromatography', 7, NULL, '2019-06-17 07:20:55', '2019-06-17 07:20:55', NULL, 'publish'),
(367, 'Gas Manifold Systems', 'gas-manifold-systems', 7, NULL, '2019-06-17 07:21:50', '2019-06-17 07:21:50', NULL, 'publish'),
(368, 'Gaskets', 'gaskets', 7, NULL, '2019-06-17 07:22:13', '2019-06-17 07:22:13', NULL, 'publish'),
(369, 'Gate Valves', 'gate-valves', 7, NULL, '2019-06-17 07:22:36', '2019-06-17 07:22:36', NULL, 'publish'),
(370, 'Gauges', 'gauges', 7, NULL, '2019-06-17 07:23:01', '2019-06-17 07:23:01', NULL, 'publish'),
(371, 'Gear Boxes', 'gear-boxes', 7, NULL, '2019-06-17 07:23:26', '2019-06-17 07:23:26', NULL, 'publish'),
(372, 'Geared Lathe Machines', 'geared-lathe-machines', 7, NULL, '2019-06-17 07:23:49', '2019-06-17 07:23:49', NULL, 'publish'),
(373, 'Geared Lathe Machines', 'geared-lathe-machines', 7, NULL, '2019-06-17 07:26:14', '2019-06-17 07:26:14', NULL, 'publish'),
(374, 'Geared Motors', 'geared-motors', 7, NULL, '2019-06-17 07:31:07', '2019-06-17 07:31:07', NULL, 'publish'),
(375, 'Gi Wires', 'gi-wires', 7, NULL, '2019-06-17 07:31:30', '2019-06-17 07:31:30', NULL, 'publish'),
(376, 'Gi Wires', 'gi-wires', 7, NULL, '2019-06-17 07:35:28', '2019-06-17 07:35:28', NULL, 'publish'),
(377, 'Test Demr', 'test-demr', 20, NULL, '2019-06-21 09:27:57', '2019-06-21 03:42:57', 3, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `product_wise_suppliers`
--

CREATE TABLE `product_wise_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wise_suppliers`
--

INSERT INTO `product_wise_suppliers` (`id`, `product_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, '2019-06-17 02:09:56', '2019-06-17 02:09:56'),
(2, NULL, 6, '2019-06-17 02:11:38', '2019-06-17 02:11:38'),
(3, 3, 2, '2019-06-17 02:14:46', '2019-06-17 02:14:46'),
(4, 3, 3, '2019-06-17 02:14:46', '2019-06-17 02:14:46'),
(5, 11, 169, '2019-06-17 09:18:43', '2019-06-17 09:18:43'),
(6, 11, 338, '2019-06-17 09:18:43', '2019-06-17 09:18:43'),
(7, 11, 361, '2019-06-17 09:18:43', '2019-06-17 09:18:43'),
(8, 12, 3, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(9, 12, 4, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(10, 12, 6, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(11, 12, 8, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(12, 12, 10, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(13, 12, 13, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(14, 12, 15, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(15, 12, 17, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(16, 12, 22, '2019-06-17 09:46:32', '2019-06-17 09:46:32'),
(17, 12, 23, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(18, 12, 26, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(19, 12, 27, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(20, 12, 29, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(21, 12, 30, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(22, 12, 31, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(23, 12, 32, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(24, 12, 33, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(25, 12, 34, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(26, 12, 38, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(27, 12, 39, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(28, 12, 42, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(29, 12, 44, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(30, 12, 48, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(31, 12, 49, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(32, 12, 53, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(33, 12, 58, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(34, 12, 62, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(35, 12, 66, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(36, 12, 69, '2019-06-17 09:46:33', '2019-06-17 09:46:33'),
(37, 12, 70, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(38, 12, 71, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(39, 12, 80, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(40, 12, 81, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(41, 12, 84, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(42, 12, 85, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(43, 12, 87, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(44, 12, 93, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(45, 12, 94, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(46, 12, 96, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(47, 12, 97, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(48, 12, 99, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(49, 12, 100, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(50, 12, 102, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(51, 12, 105, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(52, 12, 110, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(53, 12, 112, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(54, 12, 114, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(55, 12, 115, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(56, 12, 116, '2019-06-17 09:46:34', '2019-06-17 09:46:34'),
(57, 12, 117, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(58, 12, 119, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(59, 12, 121, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(60, 12, 122, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(61, 12, 124, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(62, 12, 125, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(63, 12, 126, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(64, 12, 127, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(65, 12, 131, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(66, 12, 137, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(67, 12, 138, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(68, 12, 142, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(69, 12, 144, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(70, 12, 145, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(71, 12, 146, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(72, 12, 147, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(73, 12, 148, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(74, 12, 152, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(75, 12, 154, '2019-06-17 09:46:35', '2019-06-17 09:46:35'),
(76, 12, 157, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(77, 12, 159, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(78, 12, 160, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(79, 12, 162, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(80, 12, 166, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(81, 12, 167, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(82, 12, 168, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(83, 12, 170, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(84, 12, 172, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(85, 12, 173, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(86, 12, 174, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(87, 12, 177, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(88, 12, 178, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(89, 12, 180, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(90, 12, 181, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(91, 12, 183, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(92, 12, 187, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(93, 12, 188, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(94, 12, 192, '2019-06-17 09:46:36', '2019-06-17 09:46:36'),
(95, 12, 193, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(96, 12, 194, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(97, 12, 196, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(98, 12, 208, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(99, 12, 209, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(100, 12, 211, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(101, 12, 214, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(102, 12, 215, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(103, 12, 217, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(104, 12, 220, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(105, 12, 221, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(106, 12, 222, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(107, 12, 223, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(108, 12, 224, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(109, 12, 225, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(110, 12, 230, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(111, 12, 232, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(112, 12, 237, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(113, 12, 238, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(114, 12, 239, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(115, 12, 241, '2019-06-17 09:46:37', '2019-06-17 09:46:37'),
(116, 12, 242, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(117, 12, 243, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(118, 12, 246, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(119, 12, 248, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(120, 12, 249, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(121, 12, 253, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(122, 12, 256, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(123, 12, 257, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(124, 12, 261, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(125, 12, 262, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(126, 12, 264, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(127, 12, 265, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(128, 12, 270, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(129, 12, 271, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(130, 12, 272, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(131, 12, 273, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(132, 12, 276, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(133, 12, 277, '2019-06-17 09:46:38', '2019-06-17 09:46:38'),
(134, 12, 281, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(135, 12, 282, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(136, 12, 284, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(137, 12, 286, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(138, 12, 287, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(139, 12, 289, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(140, 12, 298, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(141, 12, 300, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(142, 12, 302, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(143, 12, 304, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(144, 12, 305, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(145, 12, 306, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(146, 12, 307, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(147, 12, 308, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(148, 12, 309, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(149, 12, 310, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(150, 12, 311, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(151, 12, 313, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(152, 12, 314, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(153, 12, 316, '2019-06-17 09:46:39', '2019-06-17 09:46:39'),
(154, 12, 317, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(155, 12, 318, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(156, 12, 320, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(157, 12, 322, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(158, 12, 325, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(159, 12, 326, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(160, 12, 329, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(161, 12, 330, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(162, 12, 331, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(163, 12, 332, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(164, 12, 335, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(165, 12, 338, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(166, 12, 341, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(167, 12, 343, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(168, 12, 346, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(169, 12, 348, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(170, 12, 349, '2019-06-17 09:46:40', '2019-06-17 09:46:40'),
(171, 12, 350, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(172, 12, 351, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(173, 12, 352, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(174, 12, 354, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(175, 12, 357, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(176, 12, 359, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(177, 12, 360, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(178, 12, 363, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(179, 12, 365, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(180, 12, 367, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(181, 12, 368, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(182, 12, 372, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(183, 12, 373, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(184, 12, 374, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(185, 12, 375, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(186, 12, 376, '2019-06-17 09:46:41', '2019-06-17 09:46:41'),
(187, 2, 3, '2019-06-17 21:33:14', '2019-06-17 21:33:14'),
(188, 2, 4, '2019-06-17 21:33:14', '2019-06-17 21:33:14'),
(189, 2, 5, '2019-06-17 21:33:14', '2019-06-17 21:33:14'),
(190, 2, 6, '2019-06-17 21:33:14', '2019-06-17 21:33:14'),
(191, 2, 7, '2019-06-17 21:33:14', '2019-06-17 21:33:14'),
(192, 2, 8, '2019-06-17 21:39:27', '2019-06-17 21:39:27'),
(193, 2, 9, '2019-06-17 21:39:27', '2019-06-17 21:39:27'),
(194, 2, 13, '2019-06-17 21:39:27', '2019-06-17 21:39:27'),
(195, 2, 14, '2019-06-17 21:39:27', '2019-06-17 21:39:27'),
(196, 2, 18, '2019-06-17 21:39:27', '2019-06-17 21:39:27'),
(197, 2, 24, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(198, 2, 27, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(199, 2, 29, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(200, 2, 30, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(201, 2, 32, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(202, 2, 37, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(203, 2, 40, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(204, 2, 42, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(205, 2, 43, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(206, 2, 44, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(207, 2, 46, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(208, 2, 47, '2019-06-17 21:39:28', '2019-06-17 21:39:28'),
(209, 2, 51, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(210, 2, 61, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(211, 2, 67, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(212, 2, 70, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(213, 2, 73, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(214, 2, 74, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(215, 2, 75, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(216, 2, 76, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(217, 2, 77, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(218, 2, 78, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(219, 2, 79, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(220, 2, 81, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(221, 2, 84, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(222, 2, 85, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(223, 2, 86, '2019-06-17 21:39:29', '2019-06-17 21:39:29'),
(224, 2, 88, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(225, 2, 91, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(226, 2, 92, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(227, 2, 95, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(228, 2, 99, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(229, 2, 100, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(230, 2, 102, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(231, 2, 103, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(232, 2, 106, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(233, 2, 109, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(234, 2, 114, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(235, 2, 117, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(236, 2, 125, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(237, 2, 129, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(238, 2, 132, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(239, 2, 134, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(240, 2, 136, '2019-06-17 21:39:30', '2019-06-17 21:39:30'),
(241, 2, 137, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(242, 2, 138, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(243, 2, 141, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(244, 2, 142, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(245, 2, 144, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(246, 2, 147, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(247, 2, 148, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(248, 2, 149, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(249, 2, 150, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(250, 2, 158, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(251, 2, 160, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(252, 2, 162, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(253, 2, 163, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(254, 2, 164, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(255, 2, 167, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(256, 2, 168, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(257, 2, 171, '2019-06-17 21:39:31', '2019-06-17 21:39:31'),
(258, 2, 174, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(259, 2, 176, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(260, 2, 179, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(261, 2, 184, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(262, 2, 188, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(263, 2, 192, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(264, 2, 193, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(265, 2, 195, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(266, 2, 197, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(267, 2, 199, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(268, 2, 200, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(269, 2, 201, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(270, 2, 203, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(271, 2, 205, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(272, 2, 210, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(273, 2, 212, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(274, 2, 213, '2019-06-17 21:39:32', '2019-06-17 21:39:32'),
(275, 2, 222, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(276, 2, 225, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(277, 2, 227, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(278, 2, 235, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(279, 2, 236, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(280, 2, 238, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(281, 2, 244, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(282, 2, 246, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(283, 2, 248, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(284, 2, 249, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(285, 2, 251, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(286, 2, 253, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(287, 2, 256, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(288, 2, 257, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(289, 2, 258, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(290, 2, 259, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(291, 2, 261, '2019-06-17 21:39:33', '2019-06-17 21:39:33'),
(292, 2, 262, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(293, 2, 269, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(294, 2, 273, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(295, 2, 274, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(296, 2, 277, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(297, 2, 278, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(298, 2, 282, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(299, 2, 285, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(300, 2, 287, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(301, 2, 291, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(302, 2, 298, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(303, 2, 299, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(304, 2, 301, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(305, 2, 302, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(306, 2, 303, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(307, 2, 305, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(308, 2, 309, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(309, 2, 310, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(310, 2, 312, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(311, 2, 319, '2019-06-17 21:39:34', '2019-06-17 21:39:34'),
(312, 2, 320, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(313, 2, 322, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(314, 2, 324, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(315, 2, 326, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(316, 2, 327, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(317, 2, 334, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(318, 2, 338, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(319, 2, 340, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(320, 2, 341, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(321, 2, 342, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(322, 2, 345, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(323, 2, 346, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(324, 2, 348, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(325, 2, 349, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(326, 2, 351, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(327, 2, 354, '2019-06-17 21:39:35', '2019-06-17 21:39:35'),
(328, 2, 355, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(329, 2, 356, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(330, 2, 362, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(331, 2, 366, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(332, 2, 367, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(333, 2, 372, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(334, 2, 374, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(335, 2, 376, '2019-06-17 21:39:36', '2019-06-17 21:39:36'),
(336, 13, 2, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(337, 13, 4, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(338, 13, 6, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(339, 13, 7, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(340, 13, 10, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(341, 13, 12, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(342, 13, 14, '2019-06-17 21:45:08', '2019-06-17 21:45:08'),
(343, 13, 16, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(344, 13, 17, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(345, 13, 18, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(346, 13, 19, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(347, 13, 20, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(348, 13, 21, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(349, 13, 27, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(350, 13, 28, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(351, 13, 30, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(352, 13, 31, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(353, 13, 32, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(354, 13, 36, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(355, 13, 37, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(356, 13, 38, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(357, 13, 39, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(358, 13, 42, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(359, 13, 43, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(360, 13, 44, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(361, 13, 49, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(362, 13, 50, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(363, 13, 52, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(364, 13, 53, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(365, 13, 54, '2019-06-17 21:45:09', '2019-06-17 21:45:09'),
(366, 13, 57, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(367, 13, 58, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(368, 13, 59, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(369, 13, 60, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(370, 13, 61, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(371, 13, 62, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(372, 13, 64, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(373, 13, 66, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(374, 13, 68, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(375, 13, 69, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(376, 13, 71, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(377, 13, 73, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(378, 13, 74, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(379, 13, 75, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(380, 13, 76, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(381, 13, 77, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(382, 13, 79, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(383, 13, 80, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(384, 13, 81, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(385, 13, 84, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(386, 13, 90, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(387, 13, 91, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(388, 13, 92, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(389, 13, 94, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(390, 13, 96, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(391, 13, 97, '2019-06-17 21:45:10', '2019-06-17 21:45:10'),
(392, 13, 100, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(393, 13, 103, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(394, 13, 104, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(395, 13, 105, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(396, 13, 106, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(397, 13, 109, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(398, 13, 110, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(399, 13, 111, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(400, 13, 112, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(401, 13, 113, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(402, 13, 114, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(403, 13, 117, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(404, 13, 119, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(405, 13, 121, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(406, 13, 122, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(407, 13, 124, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(408, 13, 126, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(409, 13, 128, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(410, 13, 129, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(411, 13, 130, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(412, 13, 133, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(413, 13, 135, '2019-06-17 21:45:11', '2019-06-17 21:45:11'),
(414, 13, 136, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(415, 13, 137, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(416, 13, 139, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(417, 13, 144, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(418, 13, 145, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(419, 13, 147, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(420, 13, 148, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(421, 13, 149, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(422, 13, 150, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(423, 13, 151, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(424, 13, 152, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(425, 13, 153, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(426, 13, 155, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(427, 13, 157, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(428, 13, 158, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(429, 13, 159, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(430, 13, 160, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(431, 13, 162, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(432, 13, 166, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(433, 13, 171, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(434, 13, 174, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(435, 13, 178, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(436, 13, 179, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(437, 13, 180, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(438, 13, 182, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(439, 13, 184, '2019-06-17 21:45:12', '2019-06-17 21:45:12'),
(440, 13, 185, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(441, 13, 186, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(442, 13, 187, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(443, 13, 188, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(444, 13, 190, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(445, 13, 191, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(446, 13, 193, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(447, 13, 194, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(448, 13, 196, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(449, 13, 197, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(450, 13, 198, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(451, 13, 209, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(452, 13, 210, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(453, 13, 211, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(454, 13, 212, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(455, 13, 213, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(456, 13, 214, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(457, 13, 215, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(458, 13, 216, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(459, 13, 219, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(460, 13, 223, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(461, 13, 225, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(462, 13, 226, '2019-06-17 21:45:13', '2019-06-17 21:45:13'),
(463, 13, 227, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(464, 13, 229, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(465, 13, 232, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(466, 13, 234, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(467, 13, 236, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(468, 13, 237, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(469, 13, 238, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(470, 13, 240, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(471, 13, 243, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(472, 13, 244, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(473, 13, 245, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(474, 13, 247, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(475, 13, 248, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(476, 13, 251, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(477, 13, 252, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(478, 13, 255, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(479, 13, 256, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(480, 13, 257, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(481, 13, 259, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(482, 13, 262, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(483, 13, 265, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(484, 13, 266, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(485, 13, 267, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(486, 13, 269, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(487, 13, 270, '2019-06-17 21:45:14', '2019-06-17 21:45:14'),
(488, 13, 271, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(489, 13, 272, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(490, 13, 273, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(491, 13, 274, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(492, 13, 276, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(493, 13, 277, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(494, 13, 283, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(495, 13, 286, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(496, 13, 287, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(497, 13, 289, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(498, 13, 290, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(499, 13, 292, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(500, 13, 293, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(501, 13, 294, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(502, 13, 295, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(503, 13, 296, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(504, 13, 299, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(505, 13, 300, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(506, 13, 301, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(507, 13, 302, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(508, 13, 307, '2019-06-17 21:45:15', '2019-06-17 21:45:15'),
(509, 13, 309, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(510, 13, 310, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(511, 13, 312, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(512, 13, 313, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(513, 13, 317, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(514, 13, 318, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(515, 13, 319, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(516, 13, 321, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(517, 13, 326, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(518, 13, 328, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(519, 13, 330, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(520, 13, 332, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(521, 13, 333, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(522, 13, 337, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(523, 13, 338, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(524, 13, 339, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(525, 13, 341, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(526, 13, 343, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(527, 13, 344, '2019-06-17 21:45:16', '2019-06-17 21:45:16'),
(528, 13, 346, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(529, 13, 348, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(530, 13, 349, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(531, 13, 352, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(532, 13, 353, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(533, 13, 355, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(534, 13, 357, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(535, 13, 358, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(536, 13, 363, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(537, 13, 366, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(538, 13, 367, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(539, 13, 369, '2019-06-17 21:45:17', '2019-06-17 21:45:17'),
(540, 14, 12, '2019-06-19 10:36:17', '2019-06-19 10:36:17'),
(541, 14, 14, '2019-06-19 10:36:17', '2019-06-19 10:36:17'),
(542, 14, 17, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(543, 14, 23, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(544, 14, 24, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(545, 14, 27, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(546, 14, 30, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(547, 14, 35, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(548, 14, 37, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(549, 14, 38, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(550, 14, 39, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(551, 14, 40, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(552, 14, 41, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(553, 14, 48, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(554, 14, 49, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(555, 14, 55, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(556, 14, 57, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(557, 14, 59, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(558, 14, 63, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(559, 14, 65, '2019-06-19 10:36:18', '2019-06-19 10:36:18'),
(560, 14, 68, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(561, 14, 81, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(562, 14, 82, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(563, 14, 87, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(564, 14, 91, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(565, 14, 92, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(566, 14, 95, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(567, 14, 102, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(568, 14, 104, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(569, 14, 106, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(570, 14, 113, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(571, 14, 119, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(572, 14, 124, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(573, 14, 126, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(574, 14, 128, '2019-06-19 10:36:19', '2019-06-19 10:36:19'),
(575, 14, 134, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(576, 14, 137, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(577, 14, 142, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(578, 14, 145, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(579, 14, 147, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(580, 14, 153, '2019-06-19 10:36:20', '2019-06-19 10:36:20'),
(581, 14, 157, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(582, 14, 166, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(583, 14, 170, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(584, 14, 171, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(585, 14, 174, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(586, 14, 183, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(587, 14, 186, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(588, 14, 189, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(589, 14, 192, '2019-06-19 10:36:21', '2019-06-19 10:36:21'),
(590, 14, 201, '2019-06-19 10:36:22', '2019-06-19 10:36:22'),
(591, 14, 215, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(592, 14, 222, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(593, 14, 225, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(594, 14, 228, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(595, 14, 232, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(596, 14, 233, '2019-06-19 10:36:23', '2019-06-19 10:36:23'),
(597, 14, 235, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(598, 14, 238, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(599, 14, 242, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(600, 14, 246, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(601, 14, 250, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(602, 14, 255, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(603, 14, 260, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(604, 14, 263, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(605, 14, 267, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(606, 14, 268, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(607, 14, 271, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(608, 14, 273, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(609, 14, 282, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(610, 14, 289, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(611, 14, 290, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(612, 14, 292, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(613, 14, 295, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(614, 14, 301, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(615, 14, 302, '2019-06-19 10:36:24', '2019-06-19 10:36:24'),
(616, 14, 306, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(617, 14, 312, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(618, 14, 314, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(619, 14, 326, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(620, 14, 329, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(621, 14, 332, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(622, 14, 333, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(623, 14, 335, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(624, 14, 342, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(625, 14, 344, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(626, 14, 345, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(627, 14, 347, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(628, 14, 349, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(629, 14, 356, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(630, 14, 357, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(631, 14, 359, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(632, 14, 360, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(633, 14, 364, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(634, 14, 366, '2019-06-19 10:36:25', '2019-06-19 10:36:25'),
(635, 15, 10, '2019-06-19 21:36:10', '2019-06-19 21:36:10'),
(636, 15, 22, '2019-06-19 21:36:10', '2019-06-19 21:36:10'),
(637, 15, 34, '2019-06-19 21:36:10', '2019-06-19 21:36:10'),
(638, 15, 38, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(639, 15, 42, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(640, 15, 44, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(641, 15, 46, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(642, 15, 50, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(643, 15, 57, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(644, 15, 60, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(645, 15, 62, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(646, 15, 68, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(647, 15, 72, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(648, 15, 73, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(649, 15, 76, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(650, 15, 87, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(651, 15, 88, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(652, 15, 91, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(653, 15, 101, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(654, 15, 103, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(655, 15, 105, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(656, 15, 112, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(657, 15, 115, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(658, 15, 116, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(659, 15, 117, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(660, 15, 118, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(661, 15, 120, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(662, 15, 126, '2019-06-19 21:36:11', '2019-06-19 21:36:11'),
(663, 15, 127, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(664, 15, 130, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(665, 15, 141, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(666, 15, 147, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(667, 15, 148, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(668, 15, 150, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(669, 15, 155, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(670, 15, 156, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(671, 15, 160, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(672, 15, 162, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(673, 15, 163, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(674, 15, 164, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(675, 15, 170, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(676, 15, 172, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(677, 15, 175, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(678, 15, 176, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(679, 15, 178, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(680, 15, 184, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(681, 15, 188, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(682, 15, 192, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(683, 15, 203, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(684, 15, 204, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(685, 15, 205, '2019-06-19 21:36:12', '2019-06-19 21:36:12'),
(686, 15, 209, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(687, 15, 210, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(688, 15, 213, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(689, 15, 216, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(690, 15, 217, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(691, 15, 224, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(692, 15, 228, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(693, 15, 231, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(694, 15, 236, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(695, 15, 240, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(696, 15, 242, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(697, 15, 249, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(698, 15, 253, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(699, 15, 254, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(700, 15, 256, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(701, 15, 260, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(702, 15, 261, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(703, 15, 267, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(704, 15, 268, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(705, 15, 269, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(706, 15, 271, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(707, 15, 299, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(708, 15, 305, '2019-06-19 21:36:13', '2019-06-19 21:36:13'),
(709, 15, 309, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(710, 15, 311, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(711, 15, 314, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(712, 15, 315, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(713, 15, 321, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(714, 15, 323, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(715, 15, 334, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(716, 15, 339, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(717, 15, 354, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(718, 15, 356, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(719, 15, 357, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(720, 15, 358, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(721, 15, 372, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(722, 15, 374, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(723, 15, 376, '2019-06-19 21:36:14', '2019-06-19 21:36:14'),
(724, 15, 3, '2019-06-19 21:53:31', '2019-06-19 21:53:31'),
(725, 15, 4, '2019-06-19 21:53:31', '2019-06-19 21:53:31'),
(726, 15, 5, '2019-06-19 21:53:31', '2019-06-19 21:53:31'),
(727, 15, 6, '2019-06-19 21:53:32', '2019-06-19 21:53:32'),
(728, 14, 3, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(729, 14, 4, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(730, 14, 6, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(731, 14, 9, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(732, 14, 16, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(733, 14, 20, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(734, 14, 22, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(735, 14, 26, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(736, 14, 29, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(737, 14, 31, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(738, 14, 32, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(739, 14, 34, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(740, 14, 36, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(741, 14, 42, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(742, 14, 43, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(743, 14, 45, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(744, 14, 47, '2019-06-19 22:05:26', '2019-06-19 22:05:26'),
(745, 14, 54, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(746, 14, 62, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(747, 14, 64, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(748, 14, 69, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(749, 14, 70, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(750, 14, 72, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(751, 14, 73, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(752, 14, 78, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(753, 14, 86, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(754, 14, 88, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(755, 14, 90, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(756, 14, 100, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(757, 14, 101, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(758, 14, 105, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(759, 14, 108, '2019-06-19 22:05:27', '2019-06-19 22:05:27'),
(760, 14, 122, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(761, 14, 125, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(762, 14, 131, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(763, 14, 136, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(764, 14, 139, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(765, 14, 140, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(766, 14, 141, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(767, 14, 143, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(768, 14, 149, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(769, 14, 152, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(770, 14, 158, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(771, 14, 160, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(772, 14, 161, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(773, 14, 163, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(774, 14, 164, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(775, 14, 168, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(776, 14, 173, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(777, 14, 178, '2019-06-19 22:05:28', '2019-06-19 22:05:28'),
(778, 14, 179, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(779, 14, 181, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(780, 14, 182, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(781, 14, 187, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(782, 14, 188, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(783, 14, 190, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(784, 14, 193, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(785, 14, 194, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(786, 14, 195, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(787, 14, 196, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(788, 14, 197, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(789, 14, 198, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(790, 14, 202, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(791, 14, 204, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(792, 14, 206, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(793, 14, 208, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(794, 14, 209, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(795, 14, 212, '2019-06-19 22:05:29', '2019-06-19 22:05:29'),
(796, 14, 216, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(797, 14, 218, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(798, 14, 220, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(799, 14, 221, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(800, 14, 223, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(801, 14, 224, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(802, 14, 227, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(803, 14, 229, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(804, 14, 237, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(805, 14, 240, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(806, 14, 249, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(807, 14, 252, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(808, 14, 253, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(809, 14, 254, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(810, 14, 256, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(811, 14, 258, '2019-06-19 22:05:30', '2019-06-19 22:05:30'),
(812, 14, 259, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(813, 14, 262, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(814, 14, 264, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(815, 14, 265, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(816, 14, 274, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(817, 14, 278, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(818, 14, 279, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(819, 14, 283, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(820, 14, 284, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(821, 14, 287, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(822, 14, 296, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(823, 14, 299, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(824, 14, 300, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(825, 14, 304, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(826, 14, 305, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(827, 14, 307, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(828, 14, 315, '2019-06-19 22:05:31', '2019-06-19 22:05:31'),
(829, 14, 318, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(830, 14, 320, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(831, 14, 321, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(832, 14, 322, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(833, 14, 324, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(834, 14, 327, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(835, 14, 331, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(836, 14, 334, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(837, 14, 338, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(838, 14, 340, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(839, 14, 341, '2019-06-19 22:05:32', '2019-06-19 22:05:32');
INSERT INTO `product_wise_suppliers` (`id`, `product_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(840, 14, 348, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(841, 14, 350, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(842, 14, 351, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(843, 14, 352, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(844, 14, 354, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(845, 14, 369, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(846, 14, 371, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(847, 14, 372, '2019-06-19 22:05:32', '2019-06-19 22:05:32'),
(848, 14, 373, '2019-06-19 22:05:33', '2019-06-19 22:05:33'),
(849, 14, 375, '2019-06-19 22:05:33', '2019-06-19 22:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_person_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_person_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ctn_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `f_name`, `m_name`, `l_name`, `mobile`, `address`, `ref_person`, `ref_person_no`, `ref_person_address`, `doc`, `ctn_no`, `photo`, `cv`, `password`, `created_at`, `updated_at`) VALUES
(1, 3, 'Sagar', NULL, 'Bhusal', '9843683504', 'Putalisadak', 'Non doloremque qui u', '31', 'Eum adipisicing in q', '7f7984225e747c9de9be254711ab35da.1560241918.jpg', '12345/12', 'ebd6ee0a05bff49ddf956b88a6001a01.1560241918.jpg', 'd2cbca29cd8091458deac83b06026f74.1560241918.jpg', 'sagar', '2019-06-11 02:46:58', '2019-06-11 02:46:58'),
(2, 5, 'Ramesh', NULL, 'Dahal', '9843683504', 'Eiusmod consectetur', 'Facilis aut expedita', '4712345', 'In quia possimus ha', NULL, 'Accusamus magna quia', NULL, NULL, 'ramesh', '2019-06-11 03:32:40', '2019-06-11 03:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `user_id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'State-3', 1, 1, '2019-06-09 11:02:20', '2019-06-09 11:02:20'),
(2, 'State-5', 1, 1, '2019-06-11 03:42:00', '2019-06-11 03:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alphabate_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Business', 1, '2019-06-19 05:06:08', '2019-06-19 05:06:08'),
(2, 'Product', 1, '2019-06-19 05:06:08', '2019-06-19 05:06:08'),
(3, 'Manufacture', 1, '2019-06-19 05:06:08', '2019-06-19 05:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','staff','client','users','business','manufacture','product','candidate') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `terms`, `email_verified_at`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@khojbiz.com', NULL, NULL, '$2y$10$9VHAEFKePjRdy4BpNYZI1.lfx.kLeIhhwI3roY1.kYksg.Q1nrE4y', 'admin', 'active', NULL, '2019-06-09 11:02:20', '2019-06-09 11:02:20'),
(2, 'ganesh', 'ganessays@gmail.com', NULL, NULL, '$2y$10$dz0vRg.eYvpfQIKESa5E1ek0VZDhSzmz0SgPKfukThqJiqd.v5Fc6', 'client', 'active', NULL, '2019-06-09 11:10:31', '2019-06-09 11:10:31'),
(3, 'sagar', 'sagar@gmail.com', NULL, NULL, '$2y$10$KHemJgoJlMNm8crNvRimfuPUXvxHueplslF1mL/vo1SVf3rTnnlm6', 'staff', 'active', NULL, '2019-06-11 02:46:58', '2019-06-11 02:46:58'),
(4, 'Meadows', 'sosotoxy@mailinator.net', NULL, NULL, '$2y$10$Ntuet5lURyo4DEFOLoUsBOBiDQA7Rc6z8WSPhDz8e1NeLT2dnAWJm', 'client', 'active', NULL, '2019-06-11 03:15:32', '2019-06-11 03:15:32'),
(5, 'ramesh', 'ramesh@gmail.com', NULL, NULL, '$2y$10$xtTNh1S.ZGLVnsqQJiLUX.IhtamQ45OxPefa6sLPgqxBWVtshqUoW', 'staff', 'active', NULL, '2019-06-11 03:32:40', '2019-06-11 03:32:40'),
(6, 'Candace Bean', 'voca@mailinator.net', NULL, NULL, '$2y$10$9dZ5tcDeVNRVhuChZHOh7.rj6/ndwq6MNa6QzWIROaQ/PnPHNitpO', 'client', 'active', NULL, '2019-06-11 03:34:01', '2019-06-11 03:34:01'),
(7, 'Romero', 'qovofup@mailinator.net', NULL, NULL, '$2y$10$tzW2xmsxIScyQmtN4El5DOQE85EYf.ua5gN5xqP2GykYwvwsx2iD6', 'client', 'active', NULL, '2019-06-11 03:56:30', '2019-06-11 03:56:30'),
(8, 'leeberger', 'minosy@mailinator.net', NULL, NULL, '$2y$10$hd.u2Zo2dfA8LblwTLnIEech5ghc.X6YulBqOn6VuLBC.2rcNGRn.', 'client', 'active', NULL, '2019-06-12 10:01:12', '2019-06-12 10:01:12'),
(9, 'felix-guzman', 'qihoq@mailinator.com', NULL, NULL, '$2y$10$3aAZTmho.l0QMHfhIlciKuCoC.PtlfVTw3at0CG1FvpKYNUGjKepW', 'client', 'active', NULL, '2019-06-12 10:06:03', '2019-06-12 10:06:03'),
(10, 'boston', 'fyhy@mailinator.net', NULL, NULL, '$2y$10$vl1E3jgWrQ9uOuJmdBg17uzkBtihJjx/ImBgz7PCpq2gtCFOExBeO', 'client', 'active', NULL, '2019-06-12 10:08:23', '2019-06-12 10:08:23'),
(11, 'connect', 'zykuvuqyp@mailinator.com', NULL, NULL, '$2y$10$JRVnbIU7.1wxroBQMKK1rOdjy9RYEDj4OgyJWmgqclnaoZrgbS/ty', 'client', 'active', NULL, '2019-06-12 10:10:10', '2019-06-12 10:10:10'),
(12, 'organscare', 'kylukewany@mailinator.net', NULL, NULL, '$2y$10$/mcCHVgVietWh7LlDZ3oRuWnunpkjn2IuZSseLMFaivOrI58fATly', 'client', 'active', NULL, '2019-06-12 10:11:46', '2019-06-12 10:11:46'),
(13, 'Manufacture1', 'toqi@mailinator.net', NULL, NULL, '$2y$10$jrk9vrVFuz0ln3/8AR689e2SH5CCMLptiLV9oGEwGxOoSeNqIq28y', 'client', 'active', NULL, '2019-06-12 10:19:10', '2019-06-12 10:19:10'),
(14, 'Manufacture2', 'synexiguj@mailinator.net', NULL, NULL, '$2y$10$9JGNDhS53F0t1fhC161KoOF6zukRx5//3ons.cut5cpaDJxc9zjPS', 'client', 'active', NULL, '2019-06-12 10:22:44', '2019-06-12 10:22:44'),
(15, 'Manufacture3', 'qinapeh@mailinator.com', NULL, NULL, '$2y$10$QKSN1VkLBVDyIbWI58onXeKwBWtvpf2NwxgKeozDHnsRWAH/IVAf.', 'client', 'active', NULL, '2019-06-12 10:25:27', '2019-06-12 10:25:27'),
(16, 'qiloho', 'dukicu@mailinator.net', NULL, NULL, '$2y$10$8RR0IE8FHruvWKxuMYMRPubRRB.TJPIMdR/2EUJhSMK5K/qcLaJRS', 'client', 'active', NULL, '2019-06-15 00:26:41', '2019-06-15 00:26:41'),
(17, 'gopine', 'bivylemym@mailinator.com', NULL, NULL, '$2y$10$Q/Nf8c4x5tWrXJSxYddZ2OP/wHVDn1vlLTnZrIRnwdr7EGlV188WC', 'client', 'active', NULL, '2019-06-15 00:26:55', '2019-06-15 00:26:55'),
(18, 'vykyk', 'gezefusa@mailinator.net', NULL, NULL, '$2y$10$BNEPc9PoTRRIFmN9CqhkiO0RWgayzRO9mV3hKQyG.WPWy9.8z7I06', 'client', 'active', NULL, '2019-06-15 00:28:09', '2019-06-15 00:28:09'),
(19, 'nezozuvig', 'wonyna@mailinator.com', NULL, NULL, '$2y$10$xz1/iHwN3JbeY9d9XoT4deMOyikEzbgoV71Cdg25o9Z8r/w9wMNSe', 'client', 'active', NULL, '2019-06-15 00:29:30', '2019-06-15 00:29:30'),
(20, 'tokit', 'wofivy@mailinator.com', NULL, NULL, '$2y$10$HNjolH40bXWrzEeULIvrzuxSFLVgxorJ9ET7Fhj6lgyXQ4fsq8zJe', 'client', 'active', NULL, '2019-06-15 00:32:07', '2019-06-15 00:32:07'),
(21, 'kedylafeke', 'fycydeli@mailinator.com', NULL, NULL, '$2y$10$8fon.FdYFnibEEz5ZowlCuPR1jHj29cEuqk2htb6VvWZElpmpglVC', 'client', 'active', NULL, '2019-06-15 00:34:27', '2019-06-15 00:34:27'),
(22, 'ram12', 'ram12@gmail.com', NULL, NULL, '$2y$10$BibXsRuzfK4D/w3XzVcwGeh.nP3wZWRLMYaG17FaxTsp/pCi/kBDK', 'users', 'active', NULL, '2019-06-15 00:39:16', '2019-06-15 00:39:16'),
(23, 'lugajas', 'sunepy@mailinator.com', NULL, NULL, '$2y$10$d2pjuyWCry.UHHDxPHrex.8oW0NTqmmSXQHor9tqCPK4zu5v4V6Xa', 'client', 'active', NULL, '2019-06-15 08:38:30', '2019-06-15 08:38:30'),
(24, 'tydum', 'hofadybyb@mailinator.net', 'terms', NULL, '$2y$10$Mqm1t7UqsMjWOfCJpDkxyeg1t0pJ3sD8IlVJUloitQ0Ky2pZskUT.', 'client', 'active', NULL, '2019-06-15 09:03:14', '2019-06-15 09:03:14'),
(25, 'Ganesh Bdr Thapa', 'admin@gmail.com', 'terms', NULL, '$2y$10$.olGLtkgI53FfcFiFt1yW.rOkTbiwlFczn879vjLZuWSW0VgggJ/.', 'client', 'active', NULL, '2019-06-15 09:06:07', '2019-06-15 09:06:07'),
(26, 'xiqoqys', 'tusegaxaj@mailinator.com', 'terms', NULL, '$2y$10$IrNc5SN7qQfvtWg71Yjhku5NNZVytMsb7Axn3Wol49t/6FbZHVKMq', 'client', 'active', NULL, '2019-06-15 09:08:31', '2019-06-15 09:08:31'),
(27, 'kunifo', 'jikyqesere@mailinator.com', 'terms', NULL, '$2y$10$UNMK7kzRLC7DLcfOX4kaMeENzf3Sx2gP8U9attmKRD0Vy2irt2Zf.', 'client', 'active', NULL, '2019-06-15 09:19:58', '2019-06-15 09:19:58'),
(28, 'ganesh002', 'ganesh002@gmail.com', 'terms', NULL, '$2y$10$MhJ.Zt12yHgFHXI17EZQyeuAdMBJWPkmABAGiPGuYukmLTJujFckG', 'users', 'active', NULL, '2019-06-18 09:55:22', '2019-06-18 09:55:22'),
(29, 'rambdr', 'rambdr@gmail.com', 'terms', NULL, '$2y$10$o9WX958hkF8bORqaJ8WEj.ftQaiZvYemnPoLf3fAtwe9pB2tBNGpm', 'users', 'active', NULL, '2019-06-19 04:39:46', '2019-06-19 04:39:46'),
(30, 'HallSanders', 'ququ@mailinator.com', NULL, NULL, '$2y$10$yR.Dj7WymGzJkLl2T63vQOFdQiTB9.VPsddG6G6fuRb6hip2yuUXK', 'client', 'active', NULL, '2019-06-19 22:23:47', '2019-06-19 22:23:47'),
(31, 'ganesh11', 'ganesh11@gmail.com', 'terms', NULL, '$2y$10$8t3sHbhC8aT3KAIcl9rQCOOBPhtutZlxC7EQGcz3jgW02sEAlGtRG', 'users', 'active', NULL, '2019-06-20 04:29:05', '2019-06-20 04:29:05'),
(32, '123', '12@gmail.com', 'terms', NULL, '$2y$10$KiHQGKMFzSm5NV4Wg/XG4esfxZ9cr3R2iGpzn4euBoItsDjKhZe0e', 'users', 'active', NULL, '2019-06-21 02:23:57', '2019-06-21 02:23:57'),
(33, 'admin1', 'admin1@gmail.com', 'terms', NULL, '$2y$10$vm8bh.tFr0apnGLp865gdeL6Kfa6gs2l9SesIz00PJ8gKIx06Exb6', 'users', 'active', NULL, '2019-06-21 02:26:02', '2019-06-21 02:26:02'),
(34, 'Newton Lowery Plc', 'kovudejy@mailinator.com', NULL, NULL, '$2y$10$Ck6C50HZGkQL0TVFPnkNf.o2dHJlzn30YmJmMAi6jHhaU1/hTRsUq', 'users', 'active', NULL, '2019-06-21 09:32:50', '2019-06-21 09:32:50'),
(35, 'Sudarsan Singh', 'sudarsn@mailinator.net', NULL, NULL, '$2y$10$2cQg6mkWNUVNNQwef6TFbegnrOKivM95Mt3jCez6oPxSNhfrEk27y', 'users', 'active', NULL, '2019-06-21 09:33:48', '2019-06-21 09:33:48'),
(36, 'Stein and Dodson Traders', 'qicazybag@mailinator.net', NULL, NULL, '$2y$10$L.ngmEhZyFCY95ctK.iIXuDR/QPYZGua72EdkatNxXXUzb/Pj3zkq', 'business', 'active', NULL, '2019-06-21 09:37:13', '2019-06-21 09:37:13'),
(37, 'Global Security Services Pvt. Ltd', 'sagar1@gmail.com', NULL, NULL, '$2y$10$YUUqkKv5v26xJZSB4OMf6ugH3pNbKqu11kOmIN39IxqDK/kAAnCxa', 'business', 'active', NULL, '2019-06-21 10:49:25', '2019-06-21 10:49:25'),
(38, 'Asian Technology Pvt. Ltd.', 'asian@gmail.com', NULL, NULL, '$2y$10$.3M/EB24aQ4wMzVbqB98E.STnYAjxAYA0XN.k6a/SjmPS5rp6CNoa', 'manufacture', 'active', NULL, '2019-06-23 06:20:17', '2019-06-23 06:20:17'),
(39, 'Asian Technology Pvt. Ltd.', 'asian2@gmail.com', NULL, NULL, '$2y$10$1ZNkwcVcR9ovZqt5Ea3bBuvHpVj8N8GOWcNSkwttgsMsHBYz4WRq.', 'manufacture', 'active', NULL, '2019-06-23 06:21:38', '2019-06-23 06:21:38'),
(40, 'Test Demo Manufacture Pvt. Ltd.', 'test2@gmail.com', NULL, NULL, '$2y$10$V0mAeHIlKc4.ei3uxaZxNuDeMzMLD2ISGIX6hPW.Ff4WG7eFD5AqK', 'manufacture', 'active', NULL, '2019-06-23 06:30:20', '2019-06-23 06:30:20'),
(41, 'Singleton and Watkins Trading', 'wyfatori@mailinator.net', NULL, NULL, '$2y$10$phNJkOTtpF7GHfeueaXOH.2B.m8xI.dItSRiw0fK8z4fuY2G3o5DG', 'business', 'active', NULL, '2019-06-23 07:00:47', '2019-06-23 07:00:47'),
(42, 'Tyler and Harrell Co', 'test3@gamil.com', NULL, NULL, '$2y$10$SaskQySvyU7105hRQD/W..OCtwapbr4QwTzAv/YhIaX2OrmMB/zNG', 'business', 'active', NULL, '2019-06-23 07:01:16', '2019-06-23 07:01:16'),
(43, 'Demo1 Manufacture Pvt. Ltd.', 'demo1@gmail.com', NULL, NULL, '$2y$10$mJbNaLDwklH.OM3fksY4VeQHqaplil13QBMfCft6iZofg77s0IQR6', 'manufacture', 'active', NULL, '2019-06-23 07:03:14', '2019-06-23 07:03:14'),
(44, 'Global Security Services Pvt. Ltd', 'sss@khojbiz.com', NULL, NULL, '$2y$10$1fGsbHvjov9a/qKotmPEQO7GKVmtDNeTVGWa5xZJ5DNnIYlh7CfHe', 'manufacture', 'active', NULL, '2019-06-24 00:07:38', '2019-06-24 00:07:38'),
(45, 'demo12', 'ganessays121@gmail.com', NULL, NULL, '$2y$10$uIcIecYX2ijNQbABpozMp.ny40j0caeAtMg3/rfpwjrVRee/C1r5y', 'business', 'active', NULL, '2019-06-24 01:12:49', '2019-06-24 01:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alphabates`
--
ALTER TABLE `alphabates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automobiles`
--
ALTER TABLE `automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_sell_sub_categories`
--
ALTER TABLE `buy_sell_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_wise_clients`
--
ALTER TABLE `category_wise_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_about_us`
--
ALTER TABLE `client_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_contact_us`
--
ALTER TABLE `client_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_image_galleries`
--
ALTER TABLE `client_image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_product_services`
--
ALTER TABLE `client_product_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_profiles`
--
ALTER TABLE `client_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client__types`
--
ALTER TABLE `client__types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_natures`
--
ALTER TABLE `company_natures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `manufacture_wise_categories`
--
ALTER TABLE `manufacture_wise_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sub_categories`
--
ALTER TABLE `menu_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_sub_categories_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_wise_suppliers`
--
ALTER TABLE `product_wise_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_name_unique` (`name`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `alphabates`
--
ALTER TABLE `alphabates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `automobiles`
--
ALTER TABLE `automobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buy_sell_sub_categories`
--
ALTER TABLE `buy_sell_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1544;

--
-- AUTO_INCREMENT for table `category_wise_clients`
--
ALTER TABLE `category_wise_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `client_about_us`
--
ALTER TABLE `client_about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `client_contact_us`
--
ALTER TABLE `client_contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_image_galleries`
--
ALTER TABLE `client_image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_product_services`
--
ALTER TABLE `client_product_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_profiles`
--
ALTER TABLE `client_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client__types`
--
ALTER TABLE `client__types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_natures`
--
ALTER TABLE `company_natures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location_categories`
--
ALTER TABLE `location_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacture_wise_categories`
--
ALTER TABLE `manufacture_wise_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `menu_sub_categories`
--
ALTER TABLE `menu_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `product_wise_suppliers`
--
ALTER TABLE `product_wise_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=850;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
