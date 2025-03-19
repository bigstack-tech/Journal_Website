-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 12:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rppt`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal_submissions`
--

CREATE TABLE `journal_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `institute_organization` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `abstract` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `year` bigint(20) UNSIGNED NOT NULL,
  `citation_title` varchar(255) NOT NULL,
  `citation_issue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_submissions`
--

INSERT INTO `journal_submissions` (`id`, `author_name`, `email`, `contact`, `institute_organization`, `country`, `title`, `abstract`, `file`, `status`, `email_status`, `created_at`, `updated_at`, `user_id`, `year`, `citation_title`, `citation_issue`) VALUES
(2, 'real', 'ametijah3@gmail.com', '0993936468', 'nig', 'Aland Islands', 'fine demo', 'helo', '1702384897.pdf', 'Approved', 'Pending', '2023-12-12 17:41:37', '2023-12-13 17:06:37', 3, 2020, '', ''),
(3, 'real', 'ametijah3@gmail.com', '0993936468', 'nig', 'Aland Islands', 'fine demo', 'helo', '1702384897.pdf', 'Approved', 'Pending', '2023-12-12 17:41:37', '2023-12-13 18:05:05', 3, 2020, '', ''),
(4, 'real', 'ametijah3@gmail.com', '0993936468', 'nig', 'Aland Islands', 'fine demo', 'helo', '1702384897.pdf', 'Approved', 'Pending', '2023-12-12 17:41:37', '2023-12-13 18:05:05', 3, 2021, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_submissions_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  ADD CONSTRAINT `journal_submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
