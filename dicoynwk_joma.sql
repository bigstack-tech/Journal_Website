-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2025 at 10:58 AM
-- Server version: 10.6.21-MariaDB-cll-lve-log
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dicoynwk_joma`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact__admins`
--

CREATE TABLE `contact__admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact__admins`
--

INSERT INTO `contact__admins` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(55, 'Unia Bitterwolf', 'ezbsaseszbuj@dont-reply.me', '+14722162930', 'When it was pretty foolish to the table By the bridge Kinda social formation the last one defender', '2024-11-22 12:21:08', '2024-11-22 12:21:08'),
(56, 'Unia Bitterwolf', 'ezbsaseszbuj@dont-reply.me', '+14722162930', 'When it was pretty foolish to the table By the bridge Kinda social formation the last one defender', '2024-11-22 12:21:11', '2024-11-22 12:21:11'),
(57, 'Unia Bitterwolf', 'ezbsaseszbuj@dont-reply.me', '+14722162930', 'When it was pretty foolish to the table By the bridge Kinda social formation the last one defender', '2024-11-22 12:21:13', '2024-11-22 12:21:13'),
(58, 'Unia Bitterwolf', 'ezbsaseszbuj@dont-reply.me', '+14722162930', 'When it was pretty foolish to the table By the bridge Kinda social formation the last one defender', '2024-11-22 12:21:16', '2024-11-22 12:21:16'),
(59, 'Yarisleidi Romero Ressi', 'erzsssjssruj@do-not-respond.me', '+13052085282', 'The ones who had any ID Act the huge thick layer', '2024-11-29 07:44:03', '2024-11-29 07:44:03'),
(60, 'Yarisleidi Romero Ressi', 'erzsssjssruj@do-not-respond.me', '+13052085282', 'The ones who had any ID Act the huge thick layer', '2024-11-29 07:44:06', '2024-11-29 07:44:06'),
(61, 'Yarisleidi Romero Ressi', 'erzsssjssruj@do-not-respond.me', '+13052085282', 'The ones who had any ID Act the huge thick layer', '2024-11-29 07:44:07', '2024-11-29 07:44:07'),
(62, 'Yarisleidi Romero Ressi', 'erzsssjssruj@do-not-respond.me', '+13052085282', 'The ones who had any ID Act the huge thick layer', '2024-11-29 07:44:09', '2024-11-29 07:44:09'),
(63, 'Devlin Maghoma', 'eisibembsiuj@dont-reply.me', '+17302009110', 'Stay away Some even the question was bragging If like their shoulders', '2024-12-05 10:21:35', '2024-12-05 10:21:35'),
(64, 'Devlin Maghoma', 'eisibembsiuj@dont-reply.me', '+17302009110', 'Stay away Some even the question was bragging If like their shoulders', '2024-12-05 10:21:39', '2024-12-05 10:21:39'),
(65, 'Devlin Maghoma', 'eisibembsiuj@dont-reply.me', '+17302009110', 'Stay away Some even the question was bragging If like their shoulders', '2024-12-05 10:21:42', '2024-12-05 10:21:42'),
(66, 'Devlin Maghoma', 'eisibembsiuj@dont-reply.me', '+17302009110', 'Stay away Some even the question was bragging If like their shoulders', '2024-12-05 10:21:45', '2024-12-05 10:21:45'),
(67, 'Sonnette Lefosse', 'emjrlbamriuj@do-not-respond.me', '+16899849805', 'My head Shut up that son or enemy', '2024-12-10 15:39:12', '2024-12-10 15:39:12'),
(68, 'Sonnette Lefosse', 'emjrlbamriuj@do-not-respond.me', '+16899849805', 'My head Shut up that son or enemy', '2024-12-10 15:39:16', '2024-12-10 15:39:16'),
(69, 'Sonnette Lefosse', 'emjrlbamriuj@do-not-respond.me', '+16899849805', 'My head Shut up that son or enemy', '2024-12-10 15:39:18', '2024-12-10 15:39:18'),
(70, 'Sonnette Lefosse', 'emjrlbamriuj@do-not-respond.me', '+16899849805', 'My head Shut up that son or enemy', '2024-12-10 15:39:21', '2024-12-10 15:39:21'),
(71, 'Kryslin Solley', 'bzbbbreaziuj@dont-reply.me', '+14359742247', 'Aviation bomb Now the other side This night', '2024-12-16 00:42:23', '2024-12-16 00:42:23'),
(72, 'Kryslin Solley', 'bzbbbreaziuj@dont-reply.me', '+14359742247', 'Aviation bomb Now the other side This night', '2024-12-16 00:42:34', '2024-12-16 00:42:34'),
(73, 'Kryslin Solley', 'bzbbbreaziuj@dont-reply.me', '+14359742247', 'Aviation bomb Now the other side This night', '2024-12-16 00:42:44', '2024-12-16 00:42:44'),
(74, 'Kryslin Solley', 'bzbbbreaziuj@dont-reply.me', '+14359742247', 'Aviation bomb Now the other side This night', '2024-12-16 00:42:54', '2024-12-16 00:42:54'),
(75, 'Symone Shragai', 'bbizlrmjliuj@dont-reply.me', '+15055467982', 'I ll try to go Youra yet either pull them Panic and nothing around a', '2024-12-20 22:01:50', '2024-12-20 22:01:50'),
(76, 'Symone Shragai', 'bbizlrmjliuj@dont-reply.me', '+15055467982', 'I ll try to go Youra yet either pull them Panic and nothing around a', '2024-12-20 22:01:52', '2024-12-20 22:01:52'),
(77, 'Symone Shragai', 'bbizlrmjliuj@dont-reply.me', '+15055467982', 'I ll try to go Youra yet either pull them Panic and nothing around a', '2024-12-20 22:01:54', '2024-12-20 22:01:54'),
(78, 'Symone Shragai', 'bbizlrmjliuj@dont-reply.me', '+15055467982', 'I ll try to go Youra yet either pull them Panic and nothing around a', '2024-12-20 22:01:56', '2024-12-20 22:01:56'),
(79, 'Zykirah Darneille', 'bamjbaaiaiuj@do-not-respond.me', '+14724329121', 'Ivan we ll go You note that lay', '2024-12-25 23:14:28', '2024-12-25 23:14:28'),
(80, 'Zykirah Darneille', 'bamjbaaiaiuj@do-not-respond.me', '+14724329121', 'Ivan we ll go You note that lay', '2024-12-25 23:14:30', '2024-12-25 23:14:30'),
(81, 'Zykirah Darneille', 'bamjbaaiaiuj@do-not-respond.me', '+14724329121', 'Ivan we ll go You note that lay', '2024-12-25 23:14:31', '2024-12-25 23:14:31'),
(82, 'Zykirah Darneille', 'bamjbaaiaiuj@do-not-respond.me', '+14724329121', 'Ivan we ll go You note that lay', '2024-12-25 23:14:33', '2024-12-25 23:14:33'),
(83, 'Kataliya Ngankam', 'blzllieeeiuj@dont-reply.me', '+15058891671', 'It could find out of the first group ready Have', '2024-12-31 04:17:41', '2024-12-31 04:17:41'),
(84, 'Kataliya Ngankam', 'blzllieeeiuj@dont-reply.me', '+15058891671', 'It could find out of the first group ready Have', '2024-12-31 04:17:44', '2024-12-31 04:17:44'),
(85, 'Kataliya Ngankam', 'blzllieeeiuj@dont-reply.me', '+15058891671', 'It could find out of the first group ready Have', '2024-12-31 04:17:46', '2024-12-31 04:17:46'),
(86, 'Kataliya Ngankam', 'blzllieeeiuj@dont-reply.me', '+15058891671', 'It could find out of the first group ready Have', '2024-12-31 04:17:49', '2024-12-31 04:17:49'),
(87, 'Autmn Scarff', 'rjrsbilsmiuj@do-not-respond.me', '+19019343525', 'Mironov continue racing to half swallow and looked like yours now', '2025-01-06 00:32:40', '2025-01-06 00:32:40'),
(88, 'Autmn Scarff', 'rjrsbilsmiuj@do-not-respond.me', '+19019343525', 'Mironov continue racing to half swallow and looked like yours now', '2025-01-06 00:32:42', '2025-01-06 00:32:42'),
(89, 'Autmn Scarff', 'rjrsbilsmiuj@do-not-respond.me', '+19019343525', 'Mironov continue racing to half swallow and looked like yours now', '2025-01-06 00:32:43', '2025-01-06 00:32:43'),
(90, 'Autmn Scarff', 'rjrsbilsmiuj@do-not-respond.me', '+19019343525', 'Mironov continue racing to half swallow and looked like yours now', '2025-01-06 00:32:44', '2025-01-06 00:32:44'),
(91, 'Franchester Cimarro', 'resalsabiiuj@dont-reply.me', '+13052079912', 'The owner might be able to come from the remaining firewood It', '2025-01-11 23:13:36', '2025-01-11 23:13:36'),
(92, 'Franchester Cimarro', 'resalsabiiuj@dont-reply.me', '+13052079912', 'The owner might be able to come from the remaining firewood It', '2025-01-11 23:13:39', '2025-01-11 23:13:39'),
(93, 'Franchester Cimarro', 'resalsabiiuj@dont-reply.me', '+13052079912', 'The owner might be able to come from the remaining firewood It', '2025-01-11 23:13:41', '2025-01-11 23:13:41'),
(94, 'Franchester Cimarro', 'resalsabiiuj@dont-reply.me', '+13052079912', 'The owner might be able to come from the remaining firewood It', '2025-01-11 23:13:43', '2025-01-11 23:13:43'),
(95, 'Erick Foxall', 'foxall.erick41@msn.com', '6223205195', 'Want millions of people to notice your website affordably? More Info: http://xqhm9m.formblastmarketing.top', '2025-01-28 21:12:53', '2025-01-28 21:12:53'),
(96, 'MuhammadBop', 'ibucezevuda439@gmail.com', '85116319795', 'Hallo, ek wou jou prys ken.', '2025-01-31 03:02:39', '2025-01-31 03:02:39'),
(97, 'TedBop', 'moqagides18@gmail.com', '89632891836', 'Hi, kam dashur të di çmimin tuaj', '2025-02-01 16:47:42', '2025-02-01 16:47:42'),
(98, 'GeorgeBop', 'ibucezevuda439@gmail.com', '86288978829', 'Hallo, ek wou jou prys ken.', '2025-02-09 20:50:12', '2025-02-09 20:50:12'),
(99, 'TedBop', 'moqagides18@gmail.com', '84848447899', 'Hola, volia saber el seu preu.', '2025-02-11 12:18:46', '2025-02-11 12:18:46'),
(100, 'AvaBop', 'ebojajuje04@gmail.com', '88227287743', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-02-14 13:59:23', '2025-02-14 13:59:23'),
(101, 'ArchieBop', 'ebojajuje04@gmail.com', '86327216715', 'Hola, quería saber tu precio..', '2025-02-16 01:51:00', '2025-02-16 01:51:00'),
(102, 'GeorgeBop', 'ocopesuq299@gmail.com', '83692929745', 'Sawubona, bengifuna ukwazi intengo yakho.', '2025-02-18 10:44:32', '2025-02-18 10:44:32'),
(103, 'TedBop', 'ocopesuq299@gmail.com', '84853235131', 'Ola, quería saber o seu prezo.', '2025-02-24 22:38:01', '2025-02-24 22:38:01'),
(104, 'GeorgeBop', 'ocopesuq299@gmail.com', '89879862456', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-02-24 22:49:04', '2025-02-24 22:49:04'),
(105, 'MyName', 'becczdzv@do-not-respond.me', 'randomValue', 'tnAXQJEc BDRWak jDtT maQuUD zOsMdyN BJmfO', '2025-03-01 02:12:33', '2025-03-01 02:12:33'),
(106, 'TedBop', 'ocopesuq299@gmail.com', '87656333139', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-03-03 19:40:27', '2025-03-03 19:40:27'),
(107, 'GregoryCrito', 'nomin.momin+467k2@mail.ru', '81622925677', 'Nfwhdkjdwj rdqskwjfej wkdwodkwkifjejr okeowjrfiejfiej rowjedowkrfiejfi jrowkorwkjrfejfi jorkdworefoijfeijfowek okdwofjiejgierjfoe jomaarducth.com', '2025-03-08 09:19:12', '2025-03-08 09:19:12'),
(108, 'GeorgeBop', 'ocopesuq299@gmail.com', '89762859847', 'Sawubona, bengifuna ukwazi intengo yakho.', '2025-03-09 22:17:08', '2025-03-09 22:17:08'),
(109, 'GeorgeBop', 'ocopesuq299@gmail.com', '83622187131', 'Salam, qiymətinizi bilmək istədim.', '2025-03-10 08:19:10', '2025-03-10 08:19:10'),
(110, 'MyName', 'trkyxfxb@do-not-respond.me', 'randomValue', 'eyug eawu PkbIykEe wxYy AzUVd qcXgGXm cdF', '2025-03-10 15:23:02', '2025-03-10 15:23:02'),
(111, 'JohnBop', 'duqotayowud23@gmail.com', '84972753832', 'Hola, volia saber el seu preu.', '2025-03-10 21:19:00', '2025-03-10 21:19:00'),
(112, 'AvaBop', 'duqotayowud23@gmail.com', '89331626548', 'Hi, kam dashur të di çmimin tuaj', '2025-03-12 18:32:22', '2025-03-12 18:32:22'),
(113, 'TedBop', 'ocopesuq299@gmail.com', '85786754831', 'Salut, ech wollt Äre Präis wëssen.', '2025-03-13 20:17:29', '2025-03-13 20:17:29'),
(114, 'ArchieBop', 'duqotayowud23@gmail.com', '85923758773', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-03-15 03:03:57', '2025-03-15 03:03:57'),
(115, 'Eula Carreno', 'carreno.eula@yahoo.com', '2295150269', 'Want millions of people to engage with your content on a budget? For Details: http://387gzy.blastmillions.top', '2025-03-18 08:12:20', '2025-03-18 08:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `editorials`
--

CREATE TABLE `editorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `greeting` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `action_text` varchar(255) DEFAULT NULL,
  `action_url` varchar(255) DEFAULT NULL,
  `end_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `word` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `abstract` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `year` bigint(20) UNSIGNED DEFAULT NULL,
  `citation_title` varchar(255) DEFAULT NULL,
  `citation_issue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_submissions`
--

INSERT INTO `journal_submissions` (`id`, `author_name`, `email`, `contact`, `institute_organization`, `word`, `page`, `country`, `title`, `first`, `last`, `abstract`, `file`, `cover`, `status`, `email_status`, `created_at`, `updated_at`, `user_id`, `year`, `citation_title`, `citation_issue`) VALUES
(1, 'Test Test', 'agbatom@gmail.com', '+2348177367777', 'UNIVERSITY OF CALABAR, CALABAR, NIGERIA', '23', '4', 'select country', 'Test Journal', '1', '13', 'My test journal', '1733924318.pdf', NULL, 'Pending', 'Pending', '2024-12-11 18:38:38', '2024-12-11 19:24:09', 2, 2024, 'Test Journal', '1'),
(2, 'Egbai, O. O.', 'egbaioruk@yahoo.com', '+2349036552684', 'Department of Environmental Resource Management, University of Calabar, Calabar', '3416', '9', 'select country', 'A SURVEY OF GULLY EROSION SITES IN CALABAR METROPOLIS, CROSS RIVER STATE- NIGERIA', '1', '9', 'The study assessed and severity of gully erosion in Calabar Metropolis. Geographic Information System (GIS) and cross sectional survey were employed to identify spatial location of gully sites as well as understand residents’ perception of the gullies, Data were also collected on the gully parameters (depth, length) using measuring tape. A total of 383 copies of structured questionnaires were distributed and 382 were retrieved. The study revealed that 35 per cent of the sampled population attributed the cause of the gullies to deforestation, 30 per cent claimed that poor drainage system was the root cause, 22.5 per cent traced it to urbanization while the remaining 12.5 per cent linked it to heavy rainfall. The result also revealed that the largest gully site was that of Ikot Awatim which covered a total of 65089sqm with 59m depth followed by Mbaccoc with a dimension of 59112sqm and depth of 34m. Rapid urbanization, inadequate drainage systems and improper land use practices were identified to exacerbate the problem of erosion perturbation, leading to significant environmental degradation and posing serious threats to infrastructure and human settlements in the area.  The study recommends improved drainage systems and sustainable urban planning practices to mitigate future erosion risks.\r\nKeywords: Calabar Metropolis; Urbanization; Drainage Systems; Gully Erosion', '1733927816.pdf', NULL, 'Approved', 'Approved', '2024-12-11 19:36:56', '2024-12-11 19:51:24', 2, 2024, 'A SURVEY OF GULLY EROSION SITES IN CALABAR METROPOLIS, CROSS RIVER STATE- NIGERIA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_26_135228_create_sessions_table', 1),
(7, '2023_07_03_124528_create_journal_submissions_table', 1),
(8, '2023_07_06_200918_create_editorials_table', 1),
(9, '2023_07_13_105310_create_notifications_table', 1),
(10, '2023_07_23_173658_create_contact__admins_table', 1),
(11, '2023_08_07_095335_create_email_templates_table', 1),
(12, '2023_11_09_125345_create_years_table', 1),
(13, '2023_12_05_170639_create_permission_tables', 2),
(14, '2023_12_12_115314_add_user_id_to_journal_submissions', 3),
(15, '2023_12_12_145920_create_reviews_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2023-12-06 03:20:13', '2023-12-06 03:20:13'),
(2, 'Author', 'web', '2023-12-06 03:20:13', '2023-12-06 03:20:13'),
(3, 'admin', 'web', '2023-12-06 03:20:13', '2023-12-06 03:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6nyd03JJpC6Hpo5TY8si751woVhfOpjPGE3mv3Jb', NULL, '106.219.162.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:114.0) Gecko/20100101 Firefox/114.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXhZdmVRTllJcG1pVVY1V2k2ZFFsR1BETVpJbTZGTnFzU21LNnRRRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vam9tYWFyZHVjdGguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742391652),
('Bj6GpFkF8NRrUXvTFkb3VKLci5wHMPitpbFO4IPL', NULL, '5.133.192.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXJNcUxzbENiSlNRMDVNY2xORjVpQ05YR3hyS1VzbUxUcE1meDMxeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vam9tYWFyZHVjdGguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742376836),
('eWgbkWOKv1wEINWzjoU3ocaHO96JhlTIdAMy2v9c', NULL, '182.44.67.97', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDM5REFPUERYS090U1loMmdKUGttZGJ5YjFmTVZDUkhSVURiYzNSZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vam9tYWFyZHVjdGguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742373155),
('MUvPPB48VeCzHOxMsM0tSMDU9jHQ4txAWKIljksu', NULL, '93.127.222.80', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSk5TTjV4ZkZHbnJnUE14TjVrYVFEY3l5dFIzWnlYaVAxWTRxZEJLSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vam9tYWFyZHVjdGguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742375364),
('V5EyIJfY1nGJTR2EwFXuJvbpGZYkOX0bFQ5rHtmh', NULL, '43.157.188.74', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWQ4OFBjM09hV25Sb3N3aVpqYkNWbnp1U2ZqeU5TUTI0T2NZTlo3cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vam9tYWFyZHVjdGguY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742370046),
('X3xF4eWvVqhVKlOoUn0PEspnGqb2cFe85SV4Okgj', NULL, '43.153.74.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUldweEcyTUtEM3gwYjJDWm01ZDlUMTlMVjVJRmFoRlJ1M2ljeWxrTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LmpvbWFhcmR1Y3RoLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742374522);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(191) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'name', '', 'name@gmail.com', NULL, '$2y$12$iTu30z27ZHy/rnL5xEHjHet0wX1NfcpDbz0O0yiqMFmQcQK3jNimS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 21:49:20', '2023-12-05 21:49:20'),
(2, 'WEJ Admin', 'admin', 'editor@wej-unical.com', NULL, '$2y$12$bIvGGxfQAJTE81gbWSjzXO/0e4ahGg4imga3aLz.xTgGk164z8uzK', NULL, NULL, NULL, 'QJMskDE7zqIcyzUQ7Scp27UDC8iODapCUMdI6MCsZ0zYXRWhQkQmfykeLDso', NULL, NULL, NULL, '2024-07-30 20:40:40'),
(3, 'Thomas Agba', 'user', 'agbatom1@gmail.com', NULL, '$2y$12$bIvGGxfQAJTE81gbWSjzXO/0e4ahGg4imga3aLz.xTgGk164z8uzK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-14 17:09:36', '2023-12-14 17:09:36'),
(4, 'George Owusu', 'user', 'geo4christ2003@gmail.com', NULL, '$2y$12$KTn7ivfoHQ/uRXB2xWzYLe3W8VoXDUr5kQzks55N0o.oJC9GM1ZPi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-21 01:48:28', '2025-01-21 01:48:28'),
(5, 'fDghAtcWEv', 'user', 'riddlerozamondtb1999@gmail.com', NULL, '$2y$12$/GHJ48bm1PNIyB41O4s16uwpIKiNkyoaQPH69bVxNaDJcYEaTnij6', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-22 05:15:00', '2025-02-22 05:15:00'),
(6, 'FkKOoPKbcnuRsW', 'user', 'nahsdaphuecxh@yahoo.com', NULL, '$2y$12$EiM00rmfRAkGs.X8bVnBluT1y1P5BKvVV/79Z5rTXXKwKBacHhRlu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-24 13:52:42', '2025-02-24 13:52:42'),
(7, 'dlOqioEniRSMc', 'user', 'okholpalidis@yahoo.com', NULL, '$2y$12$cd8QCGz3xMHS8JQ62jqKUu3NYFRHHs/DBxmvCgsE9VevyHEBP2rkW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-25 15:50:11', '2025-02-25 15:50:11'),
(8, 'qUomDcbovBtBH', 'user', 'acevedobenediktj34@gmail.com', NULL, '$2y$12$h1/nCxlZoUMKTFx4GbAx8ubOvMP4NQUfKPu8Ru9xo8hilKegXikcC', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-27 12:49:44', '2025-02-27 12:49:44'),
(9, 'CYLRtdzIgsZX', 'user', 'valdezdidin@gmail.com', NULL, '$2y$12$xBoiHcL9ItfATyVMY3/CSuR8w0hC0ctg4bidv7uvJzQmkIeU8GOw.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-28 13:35:30', '2025-02-28 13:35:30'),
(10, 'tvmBTZFclOKfJ', 'user', 'luprlchurxwlelcj@yahoo.com', NULL, '$2y$12$pQlcvxx09SoL5hTJsj8/aOtLRnD2nYwOgFXlouiART3tFvX6Mgb.e', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-01 07:46:00', '2025-03-01 07:46:00'),
(11, 'BGlYtuKsvLT', 'user', 'aqtxtsdeokeeho@yahoo.com', NULL, '$2y$12$P2UEoNDft290HbFQRgr8nuh0I4nvbX0W2jVKcmxsHKXq7xKqhHIce', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-01 22:41:50', '2025-03-01 22:41:50'),
(12, 'qxaQdDbHWF', 'user', 'volfbartonhk@gmail.com', NULL, '$2y$12$6hS8J3tOz5uE/GjrMax.XOSTmn8U9uzm7jlhz2l9LA.CE8wZewSES', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-02 17:55:04', '2025-03-02 17:55:04'),
(13, 'NRRdIGZhDO', 'user', 'cabvenj@gmail.com', NULL, '$2y$12$pLv3LkYVH0uZgwHTXP.mTerA2mFjeyIcQelMBvK.ybqnUr79/ejAW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-03 11:00:39', '2025-03-03 11:00:39'),
(14, 'HwZtcdxDgDg', 'user', 'fletcherosmynd47@gmail.com', NULL, '$2y$12$rLnaqlRss.GMXlDwQGMwDOWPHHkNvQKYPqlfBx1gdVeV8cklMl1zO', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-04 11:43:07', '2025-03-04 11:43:07'),
(15, 'eIkkUYyKIIa', 'user', 'shakyillsb1993@gmail.com', NULL, '$2y$12$sSkANZb.j8hSNlepw/QCl.hIMBkGZmNxR8jXUZkK/V89OPMY/21rO', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-06 18:28:19', '2025-03-06 18:28:19'),
(16, 'calnaeHn', 'user', 'nmartinx41@gmail.com', NULL, '$2y$12$Ed.xi2/eY03.3Yx8DwRK2.4ZU5sCfhqkCa0cwgkp4K2PI2h0AXbUK', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 23:06:41', '2025-03-07 23:06:41'),
(17, 'YTUKdOcOBx', 'user', 'williamsteri2002@gmail.com', NULL, '$2y$12$95ZO3to5aJZ5cZzJvYgks.NDyX2rgTlvl0DAkyt5gyChQdK3a69Ji', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-08 16:35:46', '2025-03-08 16:35:46'),
(18, 'XmeKOkLNlA', 'user', 'faitgvv1999@gmail.com', NULL, '$2y$12$7.Q.ZIyTQSLZ1LqdRGXMfu5bAgCLu7hcahkiZl4ZTlvF361D.0s5y', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 04:15:59', '2025-03-11 04:15:59'),
(19, 'AHiXBoaWsI', 'user', 'trnpyshynki@yahoo.com', NULL, '$2y$12$RGNLf/SNUIo59Q5yf/IjgOPnviuBQUHubJo.4tPH44ENfFblTLPRS', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-13 03:30:35', '2025-03-13 03:30:35'),
(20, 'RknIqzaFMNB', 'user', 'camposlarkin@gmail.com', NULL, '$2y$12$78Ho3MhXUzpybrDZ69ATcuvg.HtYQ3DQzlKDFc8oPaPZDMApBSy0W', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-15 06:11:33', '2025-03-15 06:11:33'),
(21, 'vWCiwINhSwQIr', 'user', 'mienalf5@gmail.com', NULL, '$2y$12$cHS9XpH2LbcB4G6YLx2T9uLvlDu5U8exOf3lYvT5mRxK4QylNY/ru', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-15 23:48:45', '2025-03-15 23:48:45'),
(22, 'uGfhLsFruX', 'user', 'reyes.lori278121@yahoo.com', NULL, '$2y$12$OI1jG/bOyD6T670PhH2idO9ejk63/oVsUPyIDmzdU3b0U677ncEuS', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-18 20:14:04', '2025-03-18 20:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `issue`, `created_at`, `updated_at`) VALUES
(1, '2017', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(2, '2018', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(3, '2019', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(4, '2020', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(5, '2021', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(6, '2022', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28'),
(7, '2024', '1', '2023-12-13 12:53:28', '2023-12-13 12:53:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact__admins`
--
ALTER TABLE `contact__admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_submissions_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_journal_id_foreign` (`journal_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact__admins`
--
ALTER TABLE `contact__admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journal_submissions`
--
ALTER TABLE `journal_submissions`
  ADD CONSTRAINT `journal_submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_journal_id_foreign` FOREIGN KEY (`journal_id`) REFERENCES `journal_submissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
