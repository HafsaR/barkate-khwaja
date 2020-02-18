-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 10:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pages` int(11) DEFAULT NULL,
  `book_section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gujarati` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hindi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urdu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arabic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `pages`, `book_section`, `author`, `editor`, `translator`, `english`, `gujarati`, `hindi`, `urdu`, `arabic`, `book_cover`, `book_pdf`, `note`, `created_at`, `updated_at`) VALUES
(1, 100, 'HI', 'Author name', 'editor', 'Translator', 'on', NULL, NULL, NULL, NULL, 'noimg.png', NULL, 'abc', '2020-02-08 03:44:55', '2020-02-08 03:44:55'),
(5, 500, 'HI', 'sabbir patel', 'abc', 'abc', 'on', NULL, NULL, NULL, NULL, 'gameofthrones_1581272369.jpg', 'noimg.png', 'aaaa', '2020-02-10 00:19:29', '2020-02-10 00:19:29'),
(6, 200, 'Select', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, 'table_1581272442.jpg', 'noimg.png', NULL, '2020-02-10 00:20:42', '2020-02-10 00:20:42'),
(8, 50, 'CA', 'sabbir patel', 'abc', 'abc', 'on', NULL, NULL, NULL, NULL, 'image_17_1581345699.jpg', 'noimg.png', NULL, '2020-02-10 20:41:40', '2020-02-10 20:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

DROP TABLE IF EXISTS `magazines`;
CREATE TABLE IF NOT EXISTS `magazines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magazine_cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magazine_pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `year`, `month`, `magazine_cover`, `magazine_pdf`, `created_at`, `updated_at`) VALUES
(11, '2020', 'jul', 'image_12_1581371923.jpg', 'noimg.png', '2020-02-11 03:58:43', '2020-02-11 03:58:43'),
(12, '2020', 'feb', 'image_27_1581441738.jpg', '4 Diplomatic Language_1581441738.pdf', '2020-02-11 22:52:12', '2020-02-11 23:22:18'),
(13, '2020', 'jun', 'image_17_1581440003.jpg', 'food guide_1581440003.pdf', '2020-02-11 22:53:23', '2020-02-11 22:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_07_162655_create_book_table', 1),
(5, '2020_02_07_220505_create_magazine_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `section_name` varchar(20) NOT NULL,
  `section_name_in_gujarati` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `section_name_in_gujarati`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc', '2020-02-18 23:01:33', '2020-02-18 23:01:33'),
(2, 'abc', 'abc', '2020-02-18 23:04:12', '2020-02-18 23:04:12'),
(3, 'abc', 'abc', '2020-02-19 00:04:03', '2020-02-19 00:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
