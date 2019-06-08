-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 05:14 PM
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
(1, 'Global GS IT Soluction', '50ce0bd47d26c7e467164a56f6bd34c4.1558955281.jpg', 'https://getbootstrap.com', NULL, NULL, 'active', 'top', 1, '2019-05-25 08:39:20', '2019-05-27 05:23:01'),
(2, 'Global GS IT Soluction', '29aaa24ddd409ebe425274df75beb937.1558855239.jpg', 'https://getbootstrap.com', NULL, NULL, 'active', 'general', 1, '2019-05-26 01:35:39', '2019-05-26 01:35:39'),
(3, 'Global GS IT Soluction', '2deed0e53a0dc1f6acc363ae60d08e1a.1558855288.jpg', 'https://getbootstrap.com', NULL, NULL, 'active', 'general', 1, '2019-05-26 01:36:28', '2019-05-26 01:36:28');

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
(1, 'College', 'college', 3, 'c249ffd38e964279211887d6c5fe7189.1558890181.png', '2019-05-26 11:18:01', '2019-05-26 11:18:01'),
(2, 'Security Service', 'security-service', 19, 'e04ec248516493bce716bbd25fa3cc3c.1558921618.png', '2019-05-26 20:01:58', '2019-05-26 20:01:58'),
(3, 'Movie Hall', 'movie-hall', 13, '651dbab52f986febd0a9a99d1b98c9f7.1558952064.png', '2019-05-27 04:29:24', '2019-05-27 04:29:24'),
(4, 'Access Control Systems', 'access-control-systems', 1, NULL, '2019-05-29 07:47:52', '2019-05-29 07:47:52'),
(5, 'Accessories & Fancy Items', 'accessories-fancy-items', 1, NULL, '2019-05-29 07:48:09', '2019-05-29 07:48:09'),
(6, 'Accountants', 'accountants', 1, NULL, '2019-05-29 07:48:33', '2019-05-29 07:48:33'),
(7, 'Accountants Auditors & Tax Consultants', 'accountants-auditors-tax-consultants', 1, NULL, '2019-05-29 07:49:45', '2019-05-29 07:49:45'),
(8, 'Accounting Software', 'accounting-software', 1, NULL, '2019-05-29 07:50:16', '2019-05-29 07:50:16'),
(9, 'IT Services', 'it-services', 9, NULL, '2019-06-05 03:08:34', '2019-06-05 03:08:34');

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
(26, 21, 2, '2019-06-05 04:00:21', '2019-06-05 04:00:21'),
(27, 21, 3, '2019-06-05 04:00:21', '2019-06-05 04:00:21');

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
(1, 'Holloway and Head LLC', 'holloway-and-head-llc', 'Sosa Boyd Co', '24a15cc0a00043003d3efa925c062702.1558790983.jpeg', '61f2897effbce2b628931352c31a8aec.1558790983.jpg', 'https://www.bucufibok.cm', NULL, 'Merrill Dickson Co', '9843683504', '1234567', 'diamond', 'business', '<p>NA</p>', 2, 1, 1, 8, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 07:44:43', '2019-05-25 07:44:43'),
(2, 'Henry Horton Associates iddi', 'henry-horton-associates', 'Wynn and Mendoza Co', '0a17d6296fc076f018299157d2f6b13e.1558791360.jpeg', 'e64f68927e1d11d5d21ea304f0209ece.1558791360.jpg', 'https://www.babegowerymixev.ca', NULL, 'Terry and Garrett Associates', '9843683504', '123456', 'diamond', 'business', '<p>NA</p>', 3, 2, 1, 8, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 07:51:00', '2019-05-25 07:51:00'),
(3, 'Atkins and Nelson Inc', 'atkins-and-nelson-inc', 'Suarez Britt Plc', 'bd7e9448473babca7efc37b4c8bcf291.1559721749.jpeg', '4666c54610d2ada5bfe173c4a91d9ab2.1559721749.jpg', 'https://www.lutetakufuli.com', NULL, 'Duran Sosa Trading', '9843683504', '7912345', 'diamond', 'business', '<p>NA</p>', 4, 2, 1, 1, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 09:09:03', '2019-06-05 02:17:29'),
(4, 'Manning and Serrano Trading', 'manning-and-serrano-trading', 'King Beck Plc', '58392fe7360d289fdc10f6bfc031be63.1558796411.png', 'ae17d945375fa522b3936077ff376a08.1558796411.jpg', 'https://www.nemyhuqime.cm', NULL, 'Norman Howard Inc', '9843683504', '12345697', 'diamond', 'business', '<p>NA</p>', 5, 1, 1, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 09:15:11', '2019-05-25 09:15:11'),
(5, 'Graves and Erickson Co', 'graves-and-erickson-co', 'Savage Cannon Associates', '4d2da7b2f58083578177e8d68613e0fc.1558796505.jpeg', '9f609ff02647b288055431f7eee35765.1558796505.jpg', 'https://www.tomudelevocofyh.co.uk', NULL, 'Barrera and Horton LLC', '9843683504', '1012345', 'diamond', 'business', '<p>NS</p>', 6, 1, 1, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 09:16:45', '2019-05-25 09:16:45'),
(6, 'Bartlett and Fisher LLC', 'bartlett-and-fisher-llc', 'Powers and Solis Co', 'ec335189b3763d805687cd9a3a4a7868.1558797660.png', '370fbb9126faca7aa074c63ac5c43551.1558797660.png', 'https://www.kase.info', NULL, 'Becker Thompson Plc', '9821990578', '123456', '', NULL, '<p><strong>Lorem Ipsum</strong></p>\r\n\r\n<h1>&nbsp;is simply dummy text of the printing and typesetting industry.</h1>\r\n\r\n<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 7, 1, 1, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-25 09:36:00', '2019-05-25 09:36:00'),
(7, 'Nicholson and Hobbs Co', 'nicholson-and-hobbs-co', 'Torres Berger Traders', '6880625da8b7841f26bbb7a295c815a6.1558855352.jpeg', '9352e6f1adeb277b3f55fa613d56dce3.1558855352.jpg', 'https://www.woqi.tv', NULL, 'Lyons and Riggs Trading', '9821990578', '12345', 'bronze', NULL, '<p>NA</p>', 8, 1, 1, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-26 01:37:32', '2019-05-26 01:37:32'),
(8, 'Cervantes and Foster LLC', 'cervantes-and-foster-llc', 'Moss Noel Associates', 'c6cb7467b86eca208d5753c9c20390e7.1558855392.jpg', 'a9f629c3d63f0052011b39779c74abbf.1558855392.jpg', 'https://www.dexijena.com', NULL, 'Dickerson and Erickson Plc', '9821990578', '12345668', '', NULL, '<p>NA</p>', 9, 1, 1, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-26 01:38:12', '2019-05-26 01:38:12'),
(9, 'Higgins Simon Trading', 'higgins-simon-trading', 'Aguirre Perkins Co', NULL, NULL, 'https://www.nuqutudot.cm', NULL, 'Flores and Sandoval Inc', '88', '64', '', NULL, '<p>NA</p>', 11, 1, 2, NULL, NULL, 'Pa$$w0rd!', NULL, '2019-05-26 20:27:04', '2019-05-26 20:27:04'),
(10, 'Global Security Services Pvt. Ltd.', 'global-security-services-pvt-ltd', 'Kathmandu -12, Putalisadak', 'a37c650a4fc86138daca9ed201c29783.1558923303.png', '3d14be07d5766738334ace60b3bc1ab7.1558923303.jpg', 'https://www.dybyqyqyze.us', NULL, 'Ana Bdr Pandey', '9843683504', '123456', 'diamond', NULL, '<p>NA</p>', 12, 1, 2, 7, NULL, '12345', NULL, '2019-05-26 20:30:03', '2019-05-26 20:30:03'),
(11, 'Strong Coleman Traders', 'strong-coleman-traders', 'Villarreal and Doyle Inc', NULL, NULL, 'https://www.syjucuv.org.uk', NULL, 'Mccray and Talley Inc', '15', '10', '', NULL, '<p>Z</p>', 13, 1, 1, NULL, 'Velit molestiae qui', 'Pa$$w0rd!', NULL, '2019-05-26 20:47:30', '2019-05-26 20:47:30'),
(12, 'Pacheco and Clarke Inc', 'pacheco-and-clarke-inc', 'Owen Morgan Plc', NULL, NULL, 'https://www.hekokokutemuw.biz', NULL, 'Lee Flynn Co', '9843683504', '11234567', 'diamond', NULL, '<p>NA</p>', 15, 1, 1, NULL, 'Ea ad et explicabo', 'Pa$$w0rd!', 1, '2019-05-27 03:00:24', '2019-05-27 03:00:24'),
(13, 'Frost and Kelley LLC', 'frost-and-kelley-llc', 'Maynard and Crosby Plc', NULL, NULL, 'https://www.seca.com.au', NULL, 'Nolan Keith Trading', '9843683504', '123456713', '', NULL, '<p>NA</p>', 16, 1, 1, NULL, 'Unde illo sit deseru', 'Pa$$w0rd!', 1, '2019-05-27 03:02:05', '2019-05-27 03:02:05'),
(14, 'Callahan and Farley Trading', 'callahan-and-farley-trading', 'Nunez Chen Trading', NULL, NULL, 'https://www.jilehiselose.cm', NULL, 'Roy Mcintyre Associates', '9843683504', '123456', '', NULL, '<p>NA</p>', 17, 1, 2, 3, 'Distinctio Minima u', 'Pa$$w0rd!', 1, '2019-05-27 03:06:43', '2019-05-27 03:06:43'),
(15, 'Ganesh Era Perry and Morse Plc', 'ganesh-era-perry-and-morse-plc', 'Woodard Duffy Co', '982db78a1b545b27138b7f68a242a2bc.1559697503.jpg', 'edc651df397bcf54c91f3d6a7e93f80d.1559697442.jpg', 'https://www.gggggggggggg.tv', NULL, 'Griffith and Martin Inc', '9821990578', '12345', 'diamond', NULL, '<p>Na Ganesh</p>\r\n\r\n<p>&nbsp;</p>', 18, 2, 6, 6, 'Cum soluta alias ame', 'Pa$$w0rd!', 1, '2019-05-31 01:21:34', '2019-06-04 20:12:29'),
(16, 'Lott Howell LLC', 'lott-howell-llc', 'Whitaker Ward Inc', '8a35194ac92fb4f07734d244ab0da883.1559286435.png', '0180d1bcad1dda32323f27e2677116b1.1559286435.jpg', 'https://www.veqo.cm', NULL, 'Cooley Spence Co', '9843683504', '86123432', 'platinum', NULL, '<p>Na</p>', 19, 1, 4, 22, 'Qui voluptatum sed f', 'Pa$$w0rd!', 1, '2019-05-31 01:22:15', '2019-05-31 01:22:15'),
(17, 'Griffin and Snyder Inc', 'griffin-and-snyder-inc', 'Witt Davis Associates', 'f1d2a1f6dce2417526d3ff8f3acf0d59.1559286512.png', '296c2919ac4f3e17a11b9c35187ac0ae.1559286512.png', 'https://www.waxehywe.com', NULL, 'Alvarado and Carr Associates', '9821990578', '7623432123', 'silver', NULL, '<p>Na</p>', 20, 1, 1, 6, 'Quaerat consequatur', 'Pa$$w0rd!', 1, '2019-05-31 01:23:32', '2019-05-31 01:23:32'),
(18, 'Ray and Mcmillan Plc', 'ray-and-mcmillan-plc', 'Heath and Howe Co', NULL, NULL, 'https://www.qacokuzys.org.uk', NULL, 'Strickland and Carter Co', '5', '79', 'platinum', NULL, NULL, 23, 1, NULL, 1, 'Voluptas a architect', 'Pa$$w0rd!', 1, '2019-06-04 08:45:51', '2019-06-04 08:45:51'),
(19, 'Graves and Solis Traders', 'graves-and-solis-traders', 'Patterson and Guzman LLC', NULL, NULL, 'https://www.xomu.biz', NULL, 'Hardin Matthews Inc', '46', '97', 'silver', NULL, NULL, 24, 1, NULL, 23, 'Autem harum nostrum', 'Pa$$w0rd!', 1, '2019-06-04 08:49:17', '2019-06-04 08:49:17'),
(20, 'Raesh Ganesh', 'raesh-ganesh', 'Bass Hopkins Co', NULL, NULL, 'https://www.dukury.me', NULL, 'Faulkner and Mcclain Inc', '92', '67', 'platinum', NULL, NULL, 25, 1, NULL, 7, 'Quibusdam velit vol', 'Pa$$w0rd!', 1, '2019-06-04 08:50:03', '2019-06-04 08:50:03'),
(21, 'Next Nepal pvt.Ld.', 'next-nepal-pvtld', 'Benson and Olson LLC', '14ec7918c2a74c0c308a146c31097cea.1559722337.png', '5d67514dd88152390f459496855dfaa2.1559722337.jpg', 'https://www.vycehulonowu.tv', NULL, 'Ganesh Bdr Thapa', '9821990578', '612345', 'diamond', NULL, '<p>NA</p>\r\n\r\n<p>&nbsp;</p>', 28, 2, NULL, NULL, 'Deleniti odit quisqu', '12345678', 26, '2019-06-05 02:27:17', '2019-06-05 02:57:21'),
(22, 'Hensley and Snyder LLC \'manufacture\',\'business\',\'product\'', 'hensley-and-snyder-llc-manufacturebusinessproduct', 'Shields and Christian Traders', '5167bf5631ed2b94cab8f52d593b9e87.1559758987.jpg', 'fc81efe4fb4d62fb20e049d5ace86ecd.1559758987.jpg', 'https://www.cahagalipinapod.me.uk', NULL, 'Wells and Owen Inc', '24', '28', 'diamond', 'manufacture', '<p>Na</p>', 32, 2, NULL, NULL, 'Duis provident dolo', 'Pa$$w0rd!', 1, '2019-06-05 11:27:21', '2019-06-05 12:38:07'),
(23, 'Norris and Parker Associates', 'norris-and-parker-associates', 'Bennett Simpson LLC', '765ee8f51795ec52bcc5f90cad6b7423.1559759143.jpg', '2e9a1d4df355c5e6b6cffd14d20ab008.1559759143.jpg', 'https://www.tofewyzyloxu.co', NULL, 'Lott and Hampton Inc', '15', '9', 'platinum', 'manufacture', '<p>NA</p>', 33, 1, NULL, 2, 'Provident ut dolor', 'Pa$$w0rd!', 1, '2019-06-05 12:40:43', '2019-06-05 12:40:43'),
(24, 'Mcconnell and Cameron Inc Kalanki', 'mcconnell-and-cameron-inc-kalanki', 'Ayala and Franco Inc', '863601d34ab489ab0a2bd07c386b0ac5.1559759610.jpg', 'a9b31c2f8d8bd91cad72dc9e3944bb64.1559808535.jpg', 'https://www.roqacetikozys.cc', NULL, 'Hester Wall Traders', '46', '51', 'silver', 'manufacture', '<p><strong>Q1. Are&nbsp;you Manufacturer or Trading Company?</strong></p>\r\n\r\n<p>A: We are a professional factory with 15&nbsp;years experience,and we have more competitive price and the best after-sales service.Apart from this,we can provide a wide range of steel products to meet the needs of customers.</p>\r\n\r\n<p><strong>Q2. Will you delivery the goods on time?</strong></p>\r\n\r\n<p>A: Yes,we promise to provide best quality products and delivery in time no matter if the market price change lot or not.Honesty is our company&rsquo;s tenet.</p>\r\n\r\n<p><strong>Q3. What is your standard of packing?</strong></p>\r\n\r\n<p>A: Generally, &nbsp;Original package is&nbsp;steel strip.&nbsp;We can also do package according to customers&#39; request.</p>\r\n\r\n<p><strong>Q4. What is your terms of payment?</strong><br />\r\nA: T/T 30% as deposit, and 70% before delivery. We&#39;ll show you the photos of the products and packages&nbsp;before the shipment.</p>\r\n\r\n<p><strong>Q5. How about your delivery time?</strong><br />\r\nA: Generally, Within 15-30 days after receiving the deposit or L/C at sight. The specific delivery time depends&nbsp;on the items and the quantity of your order.</p>\r\n\r\n<p><strong>Q6. Can you produce according to the samples?</strong><br />\r\nA: Yes, we can produce by your samples or technical drawings. We can build the molds and fixtures.</p>\r\n\r\n<p><strong>Q7. What is your sample policy?</strong><br />\r\nA: We can supply the sample if we have ready parts in stock, but the customers have to pay the sample and&nbsp;the express&nbsp;cost.&nbsp;We will give back the cost after we finish the deal.</p>\r\n\r\n<p><strong>Q8. Do you test all your goods before shipment?</strong></p>\r\n\r\n<p>A: Yes, we have 100% test before shipment.</p>', 34, 2, NULL, NULL, 'Optio omnis adipisi', 'Pa$$w0rd!', 1, '2019-06-05 12:48:30', '2019-06-06 02:23:55'),
(25, 'Head Deleon Traders Company pvt.Ltd.', 'head-deleon-traders-company-pvtltd', 'Putalisadak, Ramsahapath, Kathmandu, Nepal', '0877ee26eb99572570081e7428deea0f.1559790193.jpg', '9397d7069d8626822eb81ddcf349c9bb.1559808381.jpg', 'https://www.kitutyju.cc', NULL, 'Ganesh Bdr Thapa', '9843683504', '801234567', 'gold', 'manufacture', '<p>中央美術学園は1947年（昭和22年）に帝国美術学校（現武蔵野美術大学）の若き指導者だった郡山三郎が日本で最初と思われる美術通信教育機関として創立しました。芸術を生み出す感動が原点。一歩でも理想的な美術学校へ近づこうと、常に自由で新しくをモットーに前進発展。教育機関として独自の活動を実践し、2017年に創立70周年をむかえました。</p>', 35, 2, NULL, NULL, 'Provident deleniti', 'Pa$$w0rd!', 1, '2019-06-05 21:18:13', '2019-06-06 02:21:21'),
(26, 'Global Era Multi Services Pvt Ltd', 'global-era-multi-services-pvt-ltd', 'Kathmandu -12, kalanki', '3602053fbc04148ad5735e54b256bb2f.1559808799.png', '2b0d5f1f9b8c867e541778ca6b7f53f4.1559808799.jpg', 'https://www.fipykijekibivu.cm', NULL, 'Sykes and Morales Associates', '9821990578', '16123456', 'diamond', 'business', '<p><strong>Q1. Are&nbsp;you Manufacturer or Trading Company?</strong></p>\r\n\r\n<p>A: We are a professional factory with 15&nbsp;years experience,and we have more competitive price and the best after-sales service.Apart from this,we can provide a wide range of steel products to meet the needs of customers.</p>\r\n\r\n<p><strong>Q2. Will you delivery the goods on time?</strong></p>\r\n\r\n<p>A: Yes,we promise to provide best quality products and delivery in time no matter if the market price change lot or not.Honesty is our company&rsquo;s tenet.</p>\r\n\r\n<p><strong>Q3. What is your standard of packing?</strong></p>\r\n\r\n<p>A: Generally, &nbsp;Original package is&nbsp;steel strip.&nbsp;We can also do package according to customers&#39; request.</p>\r\n\r\n<p><strong>Q4. What is your terms of payment?</strong><br />\r\nA: T/T 30% as deposit, and 70% before delivery. We&#39;ll show you the photos of the products and packages&nbsp;before the shipment.</p>\r\n\r\n<p><strong>Q5. How about your delivery time?</strong><br />\r\nA: Generally, Within 15-30 days after receiving the deposit or L/C at sight. The specific delivery time depends&nbsp;on the items and the quantity of your order.</p>\r\n\r\n<p><strong>Q6. Can you produce according to the samples?</strong><br />\r\nA: Yes, we can produce by your samples or technical drawings. We can build the molds and fixtures.</p>\r\n\r\n<p><strong>Q7. What is your sample policy?</strong><br />\r\nA: We can supply the sample if we have ready parts in stock, but the customers have to pay the sample and&nbsp;the express&nbsp;cost.&nbsp;We will give back the cost after we finish the deal.</p>\r\n\r\n<p><strong>Q8. Do you test all your goods before shipment?</strong></p>\r\n\r\n<p>A: Yes, we have 100% test before shipment.</p>', 36, 1, NULL, 7, 'Corporis totam sapie', 'Pa$$w0rd!', 1, '2019-06-06 02:28:19', '2019-06-06 02:28:19'),
(27, 'Nepal Global Era Multi Services Pvt Ltd', 'nepal-global-era-multi-services-pvt-ltd', 'Curtis Fitzgerald Co', 'ed9f210647339423894360af781f7f67.1559809437.jpeg', '53d73c56a4ad36401ec8ded6fb79aca1.1559809437.jpg', 'https://www.fuvybyhydujy.me', NULL, 'Dennis Whitney Associates', '9843683504', '9812345', 'diamond', 'business', '<p><strong>Q4. What is your terms of payment?</strong><br />\r\nA: T/T 30% as deposit, and 70% before delivery. We&#39;ll show you the photos of the products and packages&nbsp;before the shipment.</p>\r\n\r\n<p><strong>Q5. How about your delivery time?</strong><br />\r\nA: Generally, Within 15-30 days after receiving the deposit or L/C at sight. The specific delivery time depends&nbsp;on the items and the quantity of your order.</p>\r\n\r\n<p><strong>Q6. Can you produce according to the samples?</strong><br />\r\nA: Yes, we can produce by your samples or technical drawings. We can build the molds and fixtures.</p>\r\n\r\n<p><strong>Q7. What is your sample policy?</strong><br />\r\nA: We can supply the sample if we have ready parts in stock, but the customers have to pay the sample and&nbsp;the express&nbsp;cost.&nbsp;We will give back the cost after we finish the deal.</p>\r\n\r\n<p><strong>Q8. Do you test all your goods before shipment?</strong></p>\r\n\r\n<p>A: Yes, we have 100% test before shipment.</p>', 37, 1, NULL, 7, 'Error aute veritatis', '123456', 1, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'free_listing', NULL, NULL, 47, NULL, NULL, NULL, NULL, 'ramesh', NULL, '2019-06-08 09:00:58', '2019-06-08 09:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `client_about_us`
--

CREATE TABLE `client_about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 'Business', 'business', '2019-06-05 04:34:42', '2019-06-05 04:34:42'),
(5, 'Manufacture', 'manufacture', '2019-06-05 04:34:42', '2019-06-05 04:34:42'),
(6, 'Product', 'product', '2019-06-05 04:34:42', '2019-06-05 04:34:42');

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
(1, 'Nepal', 1, '2019-05-25 07:40:58', '2019-05-25 07:40:58');

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
(1, 'Kathmandu', 1, 1, '2019-05-25 07:40:58', '2019-05-25 07:40:58'),
(2, 'Bhaktapur', NULL, NULL, NULL, NULL);

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
(1, 22, 1, '2019-06-05 11:40:03', '2019-06-05 11:40:03'),
(2, 22, 2, '2019-06-05 12:19:26', '2019-06-05 12:19:26'),
(3, 24, 1, '2019-06-05 12:48:30', '2019-06-05 12:48:30'),
(4, 24, 3, '2019-06-05 12:48:30', '2019-06-05 12:48:30'),
(5, 24, 2, '2019-06-05 12:48:30', '2019-06-05 12:48:30'),
(6, 25, 1, '2019-06-05 21:18:13', '2019-06-05 21:18:13'),
(7, 25, 3, '2019-06-05 21:18:13', '2019-06-05 21:18:13'),
(8, 25, 2, '2019-06-05 21:18:13', '2019-06-05 21:18:13'),
(9, 27, 7, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(10, 27, 1, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(11, 27, 9, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(12, 27, 3, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(13, 28, 3, '2019-06-06 03:31:31', '2019-06-06 03:31:31'),
(14, 28, 2, '2019-06-06 03:31:31', '2019-06-06 03:31:31'),
(15, 29, 6, '2019-06-06 06:27:07', '2019-06-06 06:27:07'),
(16, 29, 8, '2019-06-06 06:27:08', '2019-06-06 06:27:08'),
(17, 29, 1, '2019-06-06 06:27:08', '2019-06-06 06:27:08'),
(18, 29, 3, '2019-06-06 06:27:08', '2019-06-06 06:27:08'),
(19, 29, 2, '2019-06-06 06:27:08', '2019-06-06 06:27:08'),
(20, 30, 5, '2019-06-06 06:27:45', '2019-06-06 06:27:45'),
(21, 30, 6, '2019-06-06 06:27:45', '2019-06-06 06:27:45'),
(22, 30, 1, '2019-06-06 06:27:45', '2019-06-06 06:27:45'),
(23, 30, 9, '2019-06-06 06:27:45', '2019-06-06 06:27:45'),
(24, 30, 2, '2019-06-06 06:27:45', '2019-06-06 06:27:45'),
(25, 31, 8, '2019-06-06 06:30:08', '2019-06-06 06:30:08'),
(26, 32, 6, '2019-06-06 06:31:54', '2019-06-06 06:31:54'),
(27, 32, 8, '2019-06-06 06:31:54', '2019-06-06 06:31:54'),
(28, 33, 5, '2019-06-07 08:05:13', '2019-06-07 08:05:13'),
(29, 33, 7, '2019-06-07 08:05:13', '2019-06-07 08:05:13'),
(30, 33, 8, '2019-06-07 08:05:13', '2019-06-07 08:05:13'),
(31, 33, 1, '2019-06-07 08:05:13', '2019-06-07 08:05:13'),
(32, 33, 2, '2019-06-07 08:05:13', '2019-06-07 08:05:13'),
(33, 34, 5, '2019-06-07 08:20:20', '2019-06-07 08:20:20'),
(34, 34, 6, '2019-06-07 08:20:20', '2019-06-07 08:20:20'),
(35, 34, 7, '2019-06-07 08:20:20', '2019-06-07 08:20:20'),
(36, 34, 8, '2019-06-07 08:20:20', '2019-06-07 08:20:20'),
(37, 35, 6, '2019-06-07 09:13:28', '2019-06-07 09:13:28'),
(38, 35, 7, '2019-06-07 09:13:28', '2019-06-07 09:13:28'),
(39, 35, 8, '2019-06-07 09:13:28', '2019-06-07 09:13:28'),
(40, 35, 3, '2019-06-07 09:13:28', '2019-06-07 09:13:28'),
(41, 36, 7, '2019-06-07 09:14:45', '2019-06-07 09:14:45'),
(42, 36, 2, '2019-06-07 09:14:45', '2019-06-07 09:14:45');

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
(1, 'Cold Heading Steel', 'cold-heading-steel', 3, NULL, '2019-06-05 07:46:43', '2019-06-05 08:01:24'),
(2, 'Mobile', 'mobile', 13, NULL, '2019-06-05 12:19:12', '2019-06-05 12:19:12'),
(3, 'Laptop', 'laptop', 12, NULL, '2019-06-05 12:20:38', '2019-06-05 12:20:38');

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

--
-- Dumping data for table `menu_sub_categories`
--

INSERT INTO `menu_sub_categories` (`id`, `name`, `slug`, `alphabet_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Bowls', 'bowls', 2, 1, '2019-06-05 08:06:29', '2019-06-05 08:06:29'),
(2, 'Commerce', 'commerce', 2, 1, '2019-06-05 08:11:39', '2019-06-05 08:11:39'),
(4, 'Ganesh Bdr Thapa', 'ganesh-bdr-thapa', 2, 1, '2019-06-05 08:13:02', '2019-06-05 08:13:02');

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
(10, '2019_05_23_032813_create_categories_table', 1),
(11, '2019_05_26_154155_create_alphabates_table', 2),
(12, '2019_05_26_155529_create_categories_table', 3),
(13, '2019_05_26_155645_create_sub_categories_table', 4),
(14, '2019_05_27_034856_create_staff_table', 5),
(15, '2019_05_29_093816_create_client_profiles_table', 6),
(16, '2019_05_29_093909_create_client_product_services_table', 6),
(17, '2019_05_29_094016_create_client_image_galleries_table', 6),
(18, '2019_05_29_094047_create_client_contact_us_table', 6),
(19, '2019_05_29_094117_create_client_about_us_table', 6),
(20, '2019_06_03_083919_create_category_wise_clients_table', 6),
(21, '2019_06_05_125927_create_menu_categories_table', 7),
(22, '2019_06_05_130038_create_menu_sub_categories_table', 7),
(23, '2019_06_05_172224_create_manufacture_wise_categories_table', 8);

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
(2, 26, 'Ganesh Bdr', NULL, 'Thapa', '9843683504', 'Arghakhanchi-Nepal', 'Ramesh', '98888', 'Naya', 'dddce76e22d7b045e822eb17dc9978ed.1559703925.jpg', '12345', 'bffe6b967bc4120347e0ea01acd9f6ee.1559704910.jpg', '1efd34c131f2193d1e42cfc8fa1f2f17.1559703925.jpg', 'narayan', '2019-06-04 21:20:25', '2019-06-04 21:46:02');

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
(1, 'State-3', 1, 1, '2019-05-25 07:40:58', '2019-05-25 07:40:58');

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

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `alphabate_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Ganesh Bdr Thapadas', 'ganesh-bdr-thapadas', NULL, 2, '2019-05-26 11:42:26', '2019-06-05 03:42:27'),
(2, 'Web Designer', 'web-designer', 23, 9, '2019-06-05 03:15:32', '2019-06-05 03:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','staff','client','candidate') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@khojbiz.com', NULL, '$2y$10$ru0Jy5hUCfL3GyI3yK69B.1c2SPssH1S9H952JmHHPfZ2WBbOfcp2', 'admin', 'active', NULL, '2019-05-25 07:40:58', '2019-05-25 07:40:58'),
(2, 'Coby Porter', 'cywyl@mailinator.net', NULL, '$2y$10$djifeyHGuruMyfJR7qi9QemezWo9XUYnAol3BCTKduoMNCZsDHZm2', 'client', 'active', NULL, '2019-05-25 07:44:42', '2019-05-25 07:44:42'),
(3, 'Keelie Franklin', 'vikazi@mailinator.net', NULL, '$2y$10$hZaAMNPa6C/nTEvzEIJjQuqO0SkVbXILiONbbNDURpa/Ufx9rcgcy', 'client', 'active', NULL, '2019-05-25 07:51:00', '2019-05-25 07:51:00'),
(4, 'Kiona Galloway', 'rigena@mailinator.net', NULL, '$2y$10$/13U5wxqVLJ4Wj3cFdTLD.MACDDWugxxTwVbMDBjlBU82HzefDOOS', 'client', 'active', NULL, '2019-05-25 09:09:03', '2019-05-25 09:09:03'),
(5, 'Denton Banks', 'vyvokufem@mailinator.com', NULL, '$2y$10$kU27DfMfuKsOg57R7TzuOe79QpaRNpGsUg8GRE3R79dEiKoDal7l6', 'client', 'active', NULL, '2019-05-25 09:15:11', '2019-05-25 09:15:11'),
(6, 'Morgan Rodriquez', 'waho@mailinator.net', NULL, '$2y$10$t4uPDb5i8/sKPHVxMBPYMexpHlzRZTAoCYwu4Y/2/VUk3IvrqJPNi', 'client', 'active', NULL, '2019-05-25 09:16:45', '2019-05-25 09:16:45'),
(7, 'Myles Bonner', 'muzyzak@mailinator.com', NULL, '$2y$10$yHV2aAZDlyQoQ6MtbceqGum8cQIoJh6X1iYPmFWKp7iobmLigzm/q', 'client', 'active', NULL, '2019-05-25 09:36:00', '2019-05-25 09:36:00'),
(8, 'Chaim Hendrix', 'fybasoryma@mailinator.net', NULL, '$2y$10$OQ73p2Zhf86QnXYY60Uwr.sdEmJxSuKRx4Cp2Y7vc4ZWtEIEMCZX6', 'client', 'active', NULL, '2019-05-26 01:37:32', '2019-05-26 01:37:32'),
(9, 'Kiayada Good', 'kuvyp@mailinator.com', NULL, '$2y$10$FeSg2JHKcBOrA7qz8bSRHuSUcB7x6GgwkBsh4y4AqKnYe44Wc8GpS', 'client', 'active', NULL, '2019-05-26 01:38:12', '2019-05-26 01:38:12'),
(10, 'global', 'globalsecurity@gmail.com', NULL, '$2y$10$LNBbVx/jlLOjNZKaX5KcQ.OERosimO0vtz4puncbnyYFEqkqRSbcC', 'client', 'active', NULL, '2019-05-26 20:11:13', '2019-05-26 20:11:13'),
(11, 'Regan Rosa', 'tepyh@mailinator.com', NULL, '$2y$10$serRebNr15rvwHyo/1E2L.u9TyLD0rqX1zBO4EbUvV7cycwWVOhve', 'client', 'active', NULL, '2019-05-26 20:27:04', '2019-05-26 20:27:04'),
(12, 'globalsecurity', 'globalsecuritr@gmail.com', NULL, '$2y$10$PxRqsJpmFqem5VeV5yWi3.bcRry41Cixm2v0USfNdF7xdhvMSZewO', 'client', 'active', NULL, '2019-05-26 20:30:03', '2019-05-26 20:30:03'),
(13, 'Tyrone Mcdowell', 'sapo@mailinator.com', NULL, '$2y$10$XZ.QanM10oKlNXmn.B3fY.xqeAKeQfMIghcEZry14FJfp0kr1DqBq', 'client', 'active', NULL, '2019-05-26 20:47:30', '2019-05-26 20:47:30'),
(14, 'ganesh', 'ganessays@gmail.com', NULL, '$2y$10$nPe58gPI7MjAcHkxq02hJ.u.ff2wdCSlHlTM9t8IrY4dofRJKmu5q', 'staff', 'active', NULL, '2019-05-26 22:39:44', '2019-05-26 22:39:44'),
(15, 'Blossom Russo', 'mybis@mailinator.com', NULL, '$2y$10$uYphAELxpJwVGokoz8zWUeOd12SI5SwHf07m7uw0BywKcTBp8nK4K', 'client', 'active', NULL, '2019-05-27 03:00:23', '2019-05-27 03:00:23'),
(16, 'Sharon Nelson', 'pitot@mailinator.net', NULL, '$2y$10$HwhmiYIfW6BxkhX/0jCLNOlMN2S5Kz6tii4IfDV8yg6kv6Y/vGqSK', 'client', 'active', NULL, '2019-05-27 03:02:05', '2019-05-27 03:02:05'),
(17, 'Jakeem Brady', 'hatojaziq@mailinator.net', NULL, '$2y$10$TOduW1jUg22Kb.8mt45ONeNqBk4Pn3Z5dpfvJ/RzFVyBHSkRs29aq', 'client', 'active', NULL, '2019-05-27 03:06:43', '2019-05-27 03:06:43'),
(18, 'Ursa Cooper', 'kurapoqu@mailinator.net', NULL, '$2y$10$VgzFo8UnLjQsdc0KZ94GBuIRLWKrISD5f6WO3IdFFD6C/BP3vR55a', 'client', 'active', NULL, '2019-05-31 01:21:34', '2019-05-31 01:21:34'),
(19, 'Rahim Reynolds', 'taqurov@mailinator.net', NULL, '$2y$10$w8pDoexQ20YtcFmQVMZNLuDujA8ZnCTOaNSvLSNKdk7nIUp7mZJsG', 'client', 'active', NULL, '2019-05-31 01:22:15', '2019-05-31 01:22:15'),
(20, 'Harding Norman', 'wixek@mailinator.net', NULL, '$2y$10$CNc6oKYZX28UomRsvVK0ku1RosXx/eRIffwJw8g7//eSz9fthibEu', 'client', 'active', NULL, '2019-05-31 01:23:32', '2019-05-31 01:23:32'),
(21, 'Francesca Moss', 'lixuzid@mailinator.com', NULL, '$2y$10$jCw08jorj5N2897nyIVuHuruurrC9gGkg86.q6kA/zes6VwKYiaLC', 'client', 'active', NULL, '2019-06-03 02:44:35', '2019-06-03 02:44:35'),
(22, 'Fallon Alvarado', 'kurur@mailinator.net', NULL, '$2y$10$HAlTTBGqP664YNx9Cvm7p.zIlqbakuhZ5uATeH4FHgL6y4oPEmDtW', 'client', 'active', NULL, '2019-06-03 02:49:02', '2019-06-03 02:49:02'),
(23, 'Jaden Bullock', 'gonaceh@mailinator.net', NULL, '$2y$10$EYlnavQPD07U3bVOU21ePuc7e.8oEyGM1An5W4kgF4HnVC8s2Z16y', 'client', 'active', NULL, '2019-06-04 08:45:51', '2019-06-04 08:45:51'),
(24, 'Ezekiel Reynolds', 'zosor@mailinator.com', NULL, '$2y$10$fEFrXI7Ke6jkFn7Y5mfQeeuvEC80Gb57NEfT6IlwuZuzLCe2ZG3kO', 'client', 'active', NULL, '2019-06-04 08:49:17', '2019-06-04 08:49:17'),
(25, 'Dieter Hickman', 'hipufyx@mailinator.com', NULL, '$2y$10$xWOypfuKAJ8dBhDTG28Iue7CtuSiVZPZt//as.tsMxdHV32fvaNFa', 'client', 'active', NULL, '2019-06-04 08:50:03', '2019-06-04 08:50:03'),
(26, 'narayan', 'narayan@gmail.com', NULL, '$2y$10$O4O5/Z25wURCnS0uO4rTMOiwD4u3cJY.Vq4IGtFL02ON9IqHv0Z/S', 'staff', 'active', NULL, '2019-06-04 21:20:25', '2019-06-04 21:20:25'),
(27, 'Solomon-Shaffer', 'cevy@mailinator.com', NULL, '$2y$10$0KInSdSQ2rihJYj7sDxanOOhmqoughDrommuG4jadOA5TD4LoCgn2', 'client', 'active', NULL, '2019-06-05 02:26:14', '2019-06-05 02:26:14'),
(28, 'next-nepal', 'next@mailinator.com', NULL, '$2y$10$atnRTMx9f9o0vdH7qmQOvevvfO39S0tne3.Cn7cuTCHOp2E8WUSpu', 'client', 'active', NULL, '2019-06-05 02:27:16', '2019-06-05 02:27:16'),
(30, 'Buffy-Lawrence', 'hijocazovi@mailinator.com', NULL, '$2y$10$MQD4Zth5UPYQ.xVdzq.pCeH8cNpFAaH8G/aZ4udZxWI8kKd6.ytMi', 'client', 'active', NULL, '2019-06-05 11:24:40', '2019-06-05 11:24:40'),
(31, 'Ethan Ramirez', 'hebac@mailinator.net', NULL, '$2y$10$jz.pH/ukTK9z8fCp3cW86u3LdU.SIJna1au5lI7LDuC.vL/dch5yu', 'client', 'active', NULL, '2019-06-05 11:25:37', '2019-06-05 11:25:37'),
(32, 'Conan Vargas', 'ziveze@mailinator.net', NULL, '$2y$10$cVsfB1ydRD/MhVjoBKpGEeqUks6OTiHXCVHlt3zXszyWacEuRbWGG', 'client', 'active', NULL, '2019-06-05 11:27:21', '2019-06-05 11:27:21'),
(33, 'Ina Harris', 'vyviris@mailinator.net', NULL, '$2y$10$ezY6q.I48M0EO6TWFeyS/O61MDOvF63kFU2IwizxfFNZu4jK5xB26', 'client', 'active', NULL, '2019-06-05 12:40:43', '2019-06-05 12:40:43'),
(34, 'Maryam Riley', 'fetazaly@mailinator.net', NULL, '$2y$10$5EhKfFonQHWczqost1Giyutl9532z.bt1ZuWb6f0gDGQIWdYftwBO', 'client', 'active', NULL, '2019-06-05 12:48:30', '2019-06-05 12:48:30'),
(35, 'shelby-hillips', 'pygixili@mailinator.net', NULL, '$2y$10$EhvVjv1NCfm5GizoX232DOAiBtKFUCdt17tmRawSS/3KAbFRy00Yu', 'client', 'active', NULL, '2019-06-05 21:18:13', '2019-06-05 21:18:13'),
(36, 'Urielle Deleon', 'gilupowy@mailinator.com', NULL, '$2y$10$1/.keke1z9gE2zXpHUHKDuoxq2ZGxFQUTbIdlN61RCPGd0OO.sauS', 'client', 'active', NULL, '2019-06-06 02:28:19', '2019-06-06 02:28:19'),
(37, 'Beau Hartmandd', 'kiteteci@mailinator.com', NULL, '$2y$10$jHklVkm8BjpNROKs18hrF.6FrcRKKH50wAC4f7n6XHjrveMDD5doS', 'client', 'active', NULL, '2019-06-06 02:38:57', '2019-06-06 02:38:57'),
(38, 'Mallory-Tanner', 'fuxekiku@mailinator.com', NULL, '$2y$10$nLveSSDt2xsXdXpYXW5mye0vVxkHxU0MVHnt926DY4h/1MMUM42nO', 'client', 'active', NULL, '2019-06-06 03:31:30', '2019-06-06 03:31:30'),
(44, 'global security', 'xupa@mailinator.net', NULL, '$2y$10$XskNus37Fug3xu7V8meSMOl2XzU3y/BmF/iyH95UdYDeYMTOkV6iS', 'client', 'active', NULL, '2019-06-07 08:20:20', '2019-06-07 08:20:20'),
(45, 'kibo hudson', 'pupy@mailinator.com', NULL, '$2y$10$o1kCnEKoGzIwt6n0NfSQYOg4KnCZgJrkLjYAAIKZq2.Ylsu6bZmOa', 'client', 'active', NULL, '2019-06-07 09:13:28', '2019-06-07 09:13:28'),
(46, 'larissa duncan', 'murize@mailinator.net', NULL, '$2y$10$qs4d08KhgdRVvdTVW1KyzOrpjqK/u69Er5w1Nl.TD4RSZIIIM6/aW', 'client', 'active', NULL, '2019-06-07 09:14:45', '2019-06-07 09:14:45'),
(47, 'ramesh', 'youramesh5@gmail.com', NULL, '$2y$10$pUkdFRclB64AQyg94AOQF.5IEJUO4wg76ogdG4C3i24HHpJ9ijIHO', 'client', 'inactive', NULL, '2019-06-08 09:00:58', '2019-06-08 09:00:58');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alphabates`
--
ALTER TABLE `alphabates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_wise_clients`
--
ALTER TABLE `category_wise_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `client_about_us`
--
ALTER TABLE `client_about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `company_natures`
--
ALTER TABLE `company_natures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacture_wise_categories`
--
ALTER TABLE `manufacture_wise_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_sub_categories`
--
ALTER TABLE `menu_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
