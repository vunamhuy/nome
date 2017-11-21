-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 10:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nome`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2016-06-08 01:10:07', '2016-06-08 01:10:07'),
(2, 3, '2016-06-12 18:57:21', '2016-06-12 18:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'English', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Tây Ban Nha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Đức', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Italia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Việt Nam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'International', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_figures`
--

CREATE TABLE `event_figures` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `ball_process_percent` int(11) NOT NULL,
  `attempt` int(11) NOT NULL,
  `target_in` int(11) NOT NULL,
  `target_out` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_ratio`
--

CREATE TABLE `event_ratio` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `ratio` double(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_ratio`
--

INSERT INTO `event_ratio` (`id`, `event_id`, `team_id`, `result_id`, `ratio`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2.00, 1, '0000-00-00 00:00:00', '2017-11-21 00:34:54'),
(2, 1, 1, 2, 1.50, 0, '0000-00-00 00:00:00', '2017-11-21 00:34:54'),
(3, 1, 1, 3, 3.00, 0, '0000-00-00 00:00:00', '2017-11-21 00:34:54'),
(4, 2, 2, 1, 2.00, 1, '0000-00-00 00:00:00', '2016-07-14 00:50:51'),
(5, 2, 2, 2, 1.50, 0, '0000-00-00 00:00:00', '2016-07-14 00:50:51'),
(6, 2, 2, 3, 3.00, 0, '0000-00-00 00:00:00', '2016-07-14 00:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `event_result`
--

CREATE TABLE `event_result` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_result`
--

INSERT INTO `event_result` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Win', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Draw', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Loss', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_sport`
--

CREATE TABLE `event_sport` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `competitor_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_sport`
--

INSERT INTO `event_sport` (`id`, `name`, `team_id`, `competitor_id`, `group_id`, `league_id`, `created_at`, `updated_at`) VALUES
(1, 'tran dau thu 1', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tran dau thu 2', 2, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'tran dau thu 3', 3, 4, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'tran dau thu 4', 4, 5, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 5, 6, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 6, 7, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 7, 8, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 8, 9, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 9, 10, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 10, 11, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 11, 12, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', 12, 13, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', 13, 14, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', 14, 15, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 15, 16, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_user_books`
--

CREATE TABLE `event_user_books` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ratio_id` int(11) NOT NULL,
  `scores` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_user_books`
--

INSERT INTO `event_user_books` (`id`, `user_id`, `ratio_id`, `scores`, `event_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 545, 0, 1, '2017-11-14 23:40:38', '2017-11-21 00:34:54'),
(6, 1, 1, 57676, 0, 1, '2017-11-14 23:40:57', '2017-11-21 00:34:54'),
(7, 1, 1, 454564, 0, 1, '2017-11-14 23:41:21', '2017-11-21 00:34:54'),
(8, 1, 1, 4455, 0, 1, '2017-11-14 23:42:33', '2017-11-21 00:34:54'),
(9, 1, 1, 3434, 0, 1, '2017-11-14 23:48:20', '2017-11-21 00:34:54'),
(10, 1, 1, 2323, 0, 1, '2017-11-14 23:49:37', '2017-11-21 00:34:54'),
(11, 1, 1, 343, 0, 1, '2017-11-14 23:54:08', '2017-11-21 00:34:54'),
(12, 1, 4, 12345, 0, 0, '2017-11-20 23:25:45', '2017-11-20 23:25:45'),
(13, 1, 1, 123445, 1, 1, '2017-11-20 23:36:45', '2017-11-21 00:34:54'),
(14, 1, 4, 543, 2, 0, '2017-11-20 23:36:58', '2017-11-20 23:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `event_user_scores`
--

CREATE TABLE `event_user_scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `scores` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_user_scores`
--

INSERT INTO `event_user_scores` (`id`, `user_id`, `scores`, `updated_at`) VALUES
(1, 1, 128164258, '2017-11-21 00:34:54'),
(2, 2, 100628510, '2016-07-14 00:47:56'),
(3, 3, 5000, '2016-07-12 03:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `mime`, `original_filename`, `created_at`, `updated_at`) VALUES
(1, 'phpEB02.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(2, 'php242.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(3, 'phpEB02.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(4, 'phpEB02.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(5, 'phpEB02.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(6, 'php242.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(7, 'phpA460.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(8, 'php242.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(9, 'php8461.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(10, 'phpC9F4.tmp.jpg', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 03:16:24', '2016-06-07 03:16:24'),
(11, 'phpC5A5.tmp.png', 'image/png', 'iphone6s-scene2.png', '2016-06-12 21:08:34', '2016-06-12 21:08:34'),
(12, 'php2788.tmp.jpg', 'image/jpeg', 'samsung-galaxy-s7-edge-sg-20.jpg', '2016-06-12 21:10:05', '2016-06-12 21:10:05'),
(13, 'php3426.tmp.jpg', 'image/jpeg', '1520_8.jpg', '2016-06-13 01:41:06', '2016-06-13 01:41:06'),
(14, 'php881F.tmp.jpg', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 03:03:23', '2016-06-13 03:03:23'),
(15, 'php7389.tmp.jpg', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 03:04:23', '2016-06-13 03:04:23'),
(16, 'phpF695.tmp.jpg', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 03:04:57', '2016-06-13 03:04:57'),
(17, 'php1EF5.tmp.JPG', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-14 23:54:29', '2016-06-14 23:54:29'),
(18, 'phpB06F.tmp.JPG', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-14 23:57:17', '2016-06-14 23:57:17'),
(19, 'phpA2FE.tmp.JPG', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-14 23:58:20', '2016-06-14 23:58:20'),
(20, 'php9BD6.tmp.JPG', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-14 23:59:23', '2016-06-14 23:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `countryID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `name`, `countryID`, `created_at`, `updated_at`) VALUES
(1, 'Ngoại hạng anh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'La liga', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bundesliga', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Italia', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Việt Nam', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Euro', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_14_190324_create_table_products', 1),
('2015_09_14_190329_create_table_files', 1),
('2015_09_15_184232_create_table_carts', 1),
('2015_09_15_184236_create_table_carts_item', 1),
('2015_09_19_191803_create_table_orders', 1),
('2015_09_19_191807_create_table_order_items', 1),
('2016_05_31_063945_create_table_cache', 1),
('2016_06_01_085012_create_table_settings', 1),
('2016_06_01_121734_create_table_team', 1),
('2016_06_02_033131_create_table_country', 1),
('2016_06_02_033230_create_table_league', 1),
('2016_06_03_101311_create_table_members', 1),
('2016_06_06_035003_create_table_season', 1),
('2016_06_07_025256_create_table_facebookUser', 1),
('2016_06_07_095734_create_table_role', 1),
('2016_06_07_101425_create-role-user', 1),
('2016_06_09_040643_create_table_password', 2),
('2016_06_13_034212_create_table_product_add_column_user_id', 3),
('2016_06_13_034707_create_table_team_add_column_user_id', 4),
('2016_06_16_031517_add_column_name_phone_address_checkout', 5),
('2016_06_16_040029_add_column_user_namespace', 6),
('2016_06_30_030957_create_table_event_sport', 7),
('2016_06_30_062807_create_table_figures', 8),
('2016_07_01_030801_create_table_event_result', 8),
('2016_07_01_033003_create_table_event_result', 9),
('2016_07_04_025545_create_table_figures', 10),
('2016_07_04_032501_create_table_event_user_books', 10),
('2016_07_04_042538_add_colum_event_result_id_and_ratio', 11),
('2016_07_04_043039_create_table_event_ratio', 12),
('2016_07_04_043313_create_table_event_user_books', 12),
('2016_07_04_061816_create_table_event_figures', 13),
('2016_07_06_065834_create_table_event_user_scores', 14),
('2016_07_06_070355_create_table_event_figures', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_paid` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_paid`, `created_at`, `updated_at`, `name`, `phone`, `address`, `email`) VALUES
(1, 3, 3.89, '2016-06-12 19:11:59', '2016-06-12 19:11:59', 'nam', '098342452', 'Nam định', 'vannam@gmail.com'),
(2, 2, 338.00, '2016-06-12 23:20:13', '2016-06-12 23:20:13', 'Nga', '087689796', 'Bắc giang', 'nga@gmail.com'),
(3, 2, 13186.00, '2016-06-15 20:48:40', '2016-06-15 20:48:40', 'huy', '0987654321', 'hà nội', 'vanhuy.vu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `file_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2016-06-12 19:11:59', '2016-06-12 19:11:59'),
(2, 1, 11, 8, '2016-06-12 19:11:59', '2016-06-12 19:11:59'),
(3, 2, 12, 12, '2016-06-12 23:20:13', '2016-06-12 23:20:13'),
(4, 3, 4, 8, '2016-06-15 20:48:41', '2016-06-15 20:48:41'),
(5, 3, 3, 8, '2016-06-15 20:48:41', '2016-06-15 20:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'vanhuy.vu@gmail.com', '8c8418752cf97596a61de8f6d011f79e9f5f0425', '2016-06-08 21:36:03', '2016-06-08 21:36:03'),
(2, 'vanhuy.vu@gmail.com', 'b5b2bdd26888524614486e24395a24f561e129ac', '2016-06-08 21:47:51', '2016-06-08 21:47:51'),
(3, 'vanhuy.vu@gmail.com', 'a10498a341347e2130b93adce4a5b25eace3668d', '2016-06-08 23:05:18', '2016-06-08 23:05:18'),
(4, 'vanhuy.vu@gmail.com', 'ccf92ef944df2e6d019c13bdea955c67593dbcd2', '2016-06-08 23:05:41', '2016-06-08 23:05:41'),
(5, 'vanhuy.vu@gmail.com', '2b73b7d076695732d9b8f3c42c32d5b795d2678d', '2016-06-08 23:07:23', '2016-06-08 23:07:23'),
(6, 'vanhuy.vu@gmail.com', '993549c294ccb285fc6c7eb9841d746ec38c5110', '2016-06-08 23:16:42', '2016-06-08 23:16:42'),
(7, 'vanhuy.vu@gmail.com', '2b70f5410b97fe96c2623c7d56b97064dfe52e32', '2016-06-08 23:20:29', '2016-06-08 23:20:29'),
(8, 'vanhuy.vu@gmail.com', '212687398f24746602958ec757713e4cba4fe6a3', '2016-06-08 23:22:12', '2016-06-08 23:22:12'),
(9, 'vanhuy.vu@gmail.com', '6234ac7f731f8e32cf239a9adfc71d68dd949f5b', '2016-06-08 23:23:31', '2016-06-08 23:23:31'),
(10, 'vanhuy.vu@gmail.com', '65c938d542766e24e36a66122e0002426afb0d71', '2016-06-08 23:28:45', '2016-06-08 23:28:45'),
(11, 'vanhuy.vu@gmail.com', '10d9165701eec2ebf5afab47c711fff6c50cb027', '2016-06-08 23:29:38', '2016-06-08 23:29:38'),
(12, 'vanhuy.vu@gmail.com', '27379f3e4f84b49c50320902268a915b6db59933', '2016-06-08 23:39:50', '2016-06-08 23:39:50'),
(13, 'vanhuy.vu@gmail.com', 'cef78909bfca8807054e2c12c1d23d6e7ad916d6', '2016-06-08 23:40:49', '2016-06-08 23:40:49'),
(14, 'vanhuy.vu@gmail.com', '8a8d4a457ef946b8375e5c3cfdedb605b3fa16bf', '2016-06-08 23:50:42', '2016-06-08 23:50:42'),
(15, 'vanhuy.vu@gmail.com', 'b2e54a30fdcfeb4aefba76b7705551b9306cd92a', '2016-06-08 23:51:28', '2016-06-08 23:51:28'),
(16, 'vanhuy.vu@gmail.com', 'f2410b9c660b2ef2396f76e58a939d92b1261dc6', '2016-06-09 00:32:58', '2016-06-09 00:32:58'),
(17, 'vanhuy.vu@gmail.com', '3e4ecbd0384e31210217138301fcb1f800e992da', '2016-06-09 00:42:58', '2016-06-09 00:42:58'),
(18, 'vanhuy.vu@gmail.com', 'd5c44358f8a12f4450d98c1a2ba792211bd524d1', '2016-06-09 00:43:18', '2016-06-09 00:43:18'),
(19, 'vanhuy.vu@gmail.com', '8193744c967f7e10849ce31f20966999362f8003', '2016-06-09 00:44:18', '2016-06-09 00:44:18'),
(20, 'vanhuy.vu@gmail.com', '843687487a5469be8b4b2246f8c7b279afc8d11e', '2016-06-09 00:50:40', '2016-06-09 00:50:40'),
(21, 'admin@gmail.com', '7ba47f54a976eb0065da0ae02def3872db4b501a', '2016-06-09 00:51:12', '2016-06-09 00:51:12'),
(22, 'vanhuy.vu@gmail.com', '6734e4b5e141cfb1747caba764b5821a34412c6c', '2016-06-09 00:52:18', '2016-06-09 00:52:18'),
(23, 'vanhuy.vu@gmail.com', 'fbf2dbdc8e3cf46ff99b51e8b03a36db11802a6b', '2016-06-09 00:52:52', '2016-06-09 00:52:52'),
(24, 'vanhuy.vu@gmail.com', 'c6702f760622a69efc82e3d27221585eff7e559b', '2016-06-09 00:54:56', '2016-06-09 00:54:56'),
(25, 'vanhuy.vu@gmail.com', '64020113de8a871a5dab10b319aeeadad6cd93f8', '2016-06-09 00:55:29', '2016-06-09 00:55:29'),
(26, 'vanhuy.vu@gmail.com', '46168d35111de463284649af47e706d2db018dd0', '2016-06-09 00:56:31', '2016-06-09 00:56:31'),
(27, 'toilahoangtubongda@gmail.com', 'ff7a1cd8dea1b8e42780305eeea22f34fcf5b915', '2016-06-09 01:00:27', '2016-06-09 01:00:27'),
(28, 'toilahoangtubongda@gmail.com', '342dbd2c47855f46f3c2684d37ee3055b7402749', '2016-06-09 01:05:17', '2016-06-09 01:05:17'),
(29, 'toilahoangtubongda@gmail.com', 'ac7f94ef8dda32b095b742427184232c5176612d', '2016-06-09 01:09:04', '2016-06-09 01:09:04'),
(30, 'toilahoangtubongda@gmail.com', '4736b3b09746794714c1f623168c54df21fc94f5', '2016-06-09 01:28:49', '2016-06-09 01:28:49'),
(31, 'toilahoangtubongda@gmail.com', 'a9d84f98fa5c5965ed6cc830cb9afa596cb6b95c', '2016-06-09 01:44:16', '2016-06-09 01:44:16'),
(32, 'toilahoangtubongda@gmail.com', 'f7facb9dd09ce1f928d229772349e1a5ef9482c0', '2016-06-09 01:47:19', '2016-06-09 01:47:19'),
(33, 'toilahoangtubongda@gmail.com', '40ee16cfaed85a94cdf91789253f57953e6c13ae', '2016-06-09 01:56:12', '2016-06-09 01:56:12'),
(34, 'toilahoangtubongda@gmail.com', 'c7a96e60e522cd17f4ca5bb1f82561997a9babd3', '2016-06-09 02:19:29', '2016-06-09 02:19:29'),
(35, 'toilahoangtubongda@gmail.com', '9fc427059e2129bcd90d1b82674b6db654f5d126', '2016-06-09 02:24:16', '2016-06-09 02:24:16'),
(36, 'toilahoangtubongda@gmail.com', '87b4d7703e596223ca964ee097e5354ca66f3fb2', '2016-06-09 02:24:50', '2016-06-09 02:24:50'),
(37, 'toilahoangtubongda@gmail.com', '689c0dc824c61de6b5b9ebed2f2ff0d1836cf945', '2016-06-09 02:29:46', '2016-06-09 02:29:46'),
(38, 'toilahoangtubongda@gmail.com', 'd731d45027a39b9bfe42ea9a24d57d6003bf2cc8', '2016-06-09 02:56:16', '2016-06-09 02:56:16'),
(39, 'toilahoangtubongda@gmail.com', 'd54817f5476636823662d9e5c2aa83c5e84c7e73', '2016-06-09 02:58:42', '2016-06-09 02:58:42'),
(40, 'toilahoangtubongda@gmail.com', 'e464799c5c79a10b352635cdc6d6471f78d8b6ed', '2016-06-09 03:02:36', '2016-06-09 03:02:36'),
(41, 'toilahoangtubongda@gmail.com', '5843241b435fc989bfb7668421b4550d18ac5611', '2016-06-09 03:05:34', '2016-06-09 03:05:34'),
(42, 'huongdanml@gmail.com', '05c8090f34e7db124b0d9fce67d8850ed36e66fb', '2016-06-09 03:06:36', '2016-06-09 03:06:36'),
(43, 'huongdanml@gmail.com', 'b313bb1a9fea26e2aa949acf3bfc0ad12adc279d', '2016-06-09 03:13:23', '2016-06-09 03:13:23'),
(44, 'huongdanml@gmail.com', '23b3030fc683c17b2f8566cf8351d9e0cb0bc69c', '2016-06-09 03:13:48', '2016-06-09 03:13:48'),
(45, 'huongdanml@gmail.com', '94be9d280f750b7e7f7aac109a249b8e658dca1c', '2016-06-09 05:29:09', '2016-06-09 05:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `imageurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `imageurl`, `file_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Sony Experia Z5', 'Iphone 6s', 8739.00, '', '7', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 1),
(2, 'Nokia m9123', '<p>Iphone 6s &aacute;dsadsad&nbsp;</p>\r\n', 4327.00, '', '1', '2016-06-07 03:16:24', '2016-06-13 02:34:31', 2),
(3, 'Iphone 6s', 'Sony Experia Z5', 3462.00, '', '8', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 3),
(4, 'Sony Experia Z5', 'Nokia m9', 9724.00, '', '8', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 3),
(5, 'Sony Experia Z5', 'Samsung gl s7', 6396.00, '', '7', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 3),
(6, 'Samsung gl s7', 'Iphone 6s', 1975.00, '', '5', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 2),
(7, 'Sony Experia Z5', 'Iphone 6s', 1936.00, '', '9', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 2),
(8, 'Samsung gl s7', 'Sony Experia Z5', 2152.00, '', '3', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 3),
(9, 'Nokia m9', 'Iphone 6s', 358.00, '', '4', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 1),
(10, 'Iphone 6s', 'Nokia m9', 5926.00, '', '10', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 1),
(11, 'samsung s7 edge', '<p>adsdasd</p>\r\n', 564445.00, '', '11', '2016-06-12 21:08:34', '2016-06-12 21:08:34', 2),
(12, 'samsung s7 ', '<p>drfsdfsd</p>\r\n', 67675.00, '', '12', '2016-06-12 21:10:05', '2016-06-12 21:10:05', 2),
(13, 'Nokia m9', '<p>Iphone 6s</p>\r\n', 4327.00, '', '13', '2016-06-13 01:41:06', '2016-06-13 01:41:06', 2),
(14, 'Samsung gl s7', '<p>Iphone 6s sdfsdf</p>\r\n', 1975.00, '', '13', '2016-06-13 01:49:43', '2016-06-13 01:49:43', 2),
(16, 'samsung s7 213123', '<p><strong>samsung s7 edge</strong></p>\r\n', 423432.00, '', '16', '2016-06-13 03:04:57', '2016-06-13 03:05:10', 2),
(17, 'samsung s7 edge', '<p>fgdfg</p>\r\n', 999999.99, '', '17', '2016-06-14 23:54:29', '2016-06-14 23:54:29', 1),
(18, 'samsung s7 edge', '<p>fgdfg</p>\r\n', 999999.99, '', '18', '2016-06-14 23:57:18', '2016-06-14 23:57:18', 1),
(19, 'samsung s7 edge', '<p>fgdfg</p>\r\n', 999999.99, '', '19', '2016-06-14 23:58:20', '2016-06-14 23:58:20', 1),
(20, 'samsung s7 edge', '<p>fgdfg</p>\r\n', 999999.99, '', '20', '2016-06-14 23:59:23', '2016-06-14 23:59:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'supper_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'basic_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'free_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-06-07 03:16:26', '2016-06-07 03:16:26'),
(2, 2, 2, '2016-06-07 03:16:26', '2016-06-07 03:16:26'),
(3, 3, 2, '2016-06-08 20:02:27', '2016-06-08 20:02:27'),
(5, 5, 4, '2016-06-14 00:36:00', '2016-06-14 00:36:00'),
(6, 6, 4, '2017-10-06 01:29:52', '2017-10-06 01:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(10) UNSIGNED NOT NULL,
  `team_code` text COLLATE utf8_unicode_ci NOT NULL,
  `file_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `league_id`, `team_code`, `file_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Emory Bosco 1123', 3, '', '10', '2016-06-07 03:16:24', '2016-06-21 01:26:51', 1),
(2, 'Bettie Beier', 2, '', '7', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 0),
(3, 'Royal Schinner', 1, '', '5', '2016-06-07 03:16:24', '2016-06-14 19:42:28', 1),
(4, 'Mrs. Jaquelin Gaylord I', 5, '', '3', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(5, 'Ola Osinski', 3, '', '4', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(6, 'Keira Von', 4, '', '5', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(7, 'Renee Cronin', 1, '', '10', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(8, 'Prof. Mortimer McLaughlin I', 4, '', '6', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(9, 'Zora Kovacek', 3, '', '10', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(10, 'Leicester City', 1, '', '3', '2016-06-14 19:40:52', '2016-06-14 19:40:52', 0),
(11, 'Emory Bosco 1123', 3, '', '10', '2016-06-07 03:16:24', '2016-06-21 01:26:51', 1),
(12, 'Bettie Beier', 4, '', '7', '2016-06-07 03:16:24', '2016-06-07 03:16:24', 0),
(13, 'Royal Schinner', 1, '', '5', '2016-06-07 03:16:24', '2016-06-14 19:42:28', 1),
(14, 'Mrs. Jaquelin Gaylord I', 5, '', '3', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(15, 'Ola Osinski', 2, '', '4', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(16, 'Keira Von', 4, '', '5', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(17, 'Renee Cronin', 5, '', '10', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(18, 'Prof. Mortimer McLaughlin I', 4, '', '6', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(19, 'Zora Kovacek', 3, '', '10', '2016-06-07 03:16:25', '2016-06-07 03:16:25', 0),
(20, 'Leicester City', 1, '', '5', '2016-06-14 19:40:52', '2016-06-14 19:40:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `facebookID` bigint(20) UNSIGNED DEFAULT NULL,
  `facebookName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebookEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_namespace` char(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `facebookID`, `facebookName`, `facebookEmail`, `access_token`, `remember_token`, `created_at`, `updated_at`, `user_namespace`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Eio9hk3qVcJGwsS8d9js5.WQytbFYXKjreD8GdE7cufC7rEPge9zG', NULL, '', '', NULL, 'SVqCbiYeh0t5mvaGc0L7A7q7yg9EsI97qvM3GXTz059cRJen5poPVWCLvKhV', '2016-06-07 03:16:25', '2017-10-06 01:29:23', ''),
(2, 'user', 'user@gmail.com', '$2y$10$7kc.ZLOkdistfzslUl69O.5OwCEeXp1ZXrQRRNWjMZbobqegBNRQS', NULL, '', '', NULL, 'kbjgxRxIAw5sTXLFkcli6XiXbvfa22V0y1ZdPyV2AbJYbq5ilOV10QAYFlmp', '2016-06-07 03:16:26', '2016-07-12 00:36:45', ''),
(3, 'Huy', 'huongdanml@gmail.com', '$2y$10$d4TpMmnweRoiObYO8kuGke4YL3SrMeRzPJO2GpAHMzu9ysqAssk8e', NULL, '', '', NULL, 'K7Snhgp4ut12UuFrm6di2UpUnZa6jMjWp41XsqWl1uMbtG8rWdMzwADswrYz', '2016-06-08 20:02:27', '2016-06-12 19:13:00', ''),
(5, 'Huy', 'vanhuy.vu@gmail.com', '$2y$10$8Df5.fw9LS1J7yIPjITaXOidx4IwRFnzc4jXZwCctX/3bBzNurvo.', NULL, '', '', NULL, 'umT83k0hTcFPBcZmOJ0o8F6qXhsPC1kyWk7BAQUvA7T1Y7DbX8CKzeTzJgpH', '2016-06-14 00:36:00', '2016-06-15 01:16:05', ''),
(6, 'Huy', 'huongdaml@gmail.com', '$2y$10$hI01BBveskx6lSWxapaGEek3knldxiFaUJqDNnWlnQ.TMVsEDXd/e', NULL, '', '', NULL, NULL, '2017-10-06 01:29:52', '2017-10-06 01:29:52', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_figures`
--
ALTER TABLE `event_figures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_ratio`
--
ALTER TABLE `event_ratio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_result`
--
ALTER TABLE `event_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_sport`
--
ALTER TABLE `event_sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_user_books`
--
ALTER TABLE `event_user_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_user_scores`
--
ALTER TABLE `event_user_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_index` (`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_facebookid_index` (`facebookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_figures`
--
ALTER TABLE `event_figures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_ratio`
--
ALTER TABLE `event_ratio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_result`
--
ALTER TABLE `event_result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event_sport`
--
ALTER TABLE `event_sport`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `event_user_books`
--
ALTER TABLE `event_user_books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `event_user_scores`
--
ALTER TABLE `event_user_scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
