-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 08:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dubaisaferi`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interst` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `contact`, `adult`, `child`, `interst`, `date`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Aamirsohail', 'aamirsohail0445@gmail.com', 'Repudiandae deserunt', '2', '2', 'Watching', '13-Oct-1997', 'i will be there', '2022-08-25 04:49:19', '2022-08-29 04:52:57'),
(3, 'Alana Crawford', 'sebotexag@mailinator.com', 'Quia in aute maxime', '1', '3', 'Voluptas tempore es', '05-Sep-1988', 'Iusto vitae tempor i', '2022-08-29 05:04:41', '2022-08-29 05:04:41'),
(4, 'Hasad Avila', 'xyrare@mailinator.com', 'Et id ad est vel exp', '4', '1', 'Id sit accusantium', '03-Sep-1993', 'Qui eiusmod consequa', '2022-08-29 05:05:02', '2022-08-29 05:05:02'),
(5, 'Aline Mcneil', 'zenone@mailinator.com', 'Quisquam non illum', '3', '4', 'Atque aut omnis ex q', '05-Apr-2013', 'Facere voluptas et a', '2022-08-29 05:05:06', '2022-08-29 05:05:06'),
(6, 'Dana Wheeler', 'kahyluvu@mailinator.com', 'Veniam enim dolorum', '4', '2', 'Nisi hic ut enim quo', '17-Jul-1970', 'Dolorum iusto quidem', '2022-08-29 05:05:13', '2022-08-29 05:05:13'),
(7, 'Virginia Downs', 'reku@mailinator.com', 'Sit vel officiis es', '4', '1', 'Et facilis autem qui', '23-Jan-1996', 'Ullamco consectetur', '2022-08-31 05:27:34', '2022-08-31 05:27:34'),
(8, 'Lillian Rasmussen', 'ledidu@mailinator.com', 'Quia sed esse esse', '4', '4', 'Enim sunt non nesciu', '06-Jul-1986', 'Expedita dolor cillu', '2022-09-12 01:15:40', '2022-09-12 01:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `username`, `email`, `phone`, `location`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'vytykudyko', 'lofu@mailinator.com', '+1 (576) 205-3736', 'Enim eaque voluptas', 'Quia nesciunt do re', 'Deserunt sit ad id', '2022-08-31 05:27:50', '2022-08-31 05:27:50'),
(3, 'sibobyfeha', 'nohequl@mailinator.com', '+1 (892) 304-6053', 'Elit aliquip molest', 'Quia delectus est e', 'Pariatur In eu modi', '2022-08-31 05:27:59', '2022-08-31 05:27:59'),
(4, 'pylicofi', 'tagiwig@mailinator.com', '+1 (611) 906-8663', 'Fugit rem in ea qui', 'Quasi aspernatur qui', 'Nulla quaerat consec', '2022-09-12 01:15:51', '2022-09-12 01:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ckeditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `description`, `ckeditor`, `created_at`, `updated_at`) VALUES
(3, 'DESERT SAFARI DUBAI', 'Desert Safari Dubai is a crazy Desert safari ride from Arabian Company that will bring you here and there\n                in the sand hills. You will enjoy the Dune Bashing in the middle of the desert safari and you will get a\n                chance to ta', '2022-09-13 01:27:23', '2022-09-13 01:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_models`
--

CREATE TABLE `gallery_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_models`
--

INSERT INTO `gallery_models` (`id`, `price`, `country`, `description`, `title`, `file`, `created_at`, `updated_at`) VALUES
(6, '$200', 'London', 'Impressive Tour that was', 'LonDon Place', '202209190612blog1.png', '2022-09-19 01:12:56', '2022-09-19 01:12:56'),
(7, '$345', 'Austrila', 'Amazing That was the sea', 'Austrilan Forest', '202209190614blog3.png', '2022-09-19 01:14:09', '2022-09-19 01:14:09'),
(8, '$145', 'UAE', 'amazing', 'Arbain sea', '202209190614blog4.png', '2022-09-19 01:14:51', '2022-09-19 01:14:51'),
(9, '$245', 'New Zealand', 'amzaing tour the most rembeber', 'Forest Tour', '202209190616blog2.png', '2022-09-19 01:16:02', '2022-09-19 01:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 3),
(5, '2022_08_24_092424_create_booking_table', 3),
(6, '2022_08_25_051104_create_booking_models_table', 3),
(7, '2022_08_25_062136_contactus', 4),
(8, '2022_08_25_062748_booking', 5),
(10, '2022_08_30_061151_description', 6),
(11, '2014_10_12_000000_create_users_table', 7),
(13, '2022_09_13_064529_create_gallery_models_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role_as` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role_as`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julian Holden', 'user@gmail.com', NULL, NULL, '$2y$10$8PMER6dl05e7tGPQfJMD2O/WNGCo9vjRJ5XV1rUzV/sd5SqujdShi', NULL, '2022-09-12 01:12:59', '2022-09-12 01:12:59'),
(2, 'Aamirsohail', 'aamirsohail0445@gmail.com', NULL, '1', '$2y$10$SfNwoFbgr0TB65ASwdOthes6vJ6RLCPpqQBrWFop.N/jABSEXOadu', NULL, '2022-09-12 01:35:07', '2022-09-12 01:35:07'),
(3, 'haseeb', 'user1@gmail.com', NULL, NULL, '$2y$10$28bL50WdDhYcw6nf2n/fFuiqSPFzFjrXM9PmY9HqkQh/JctBUzj92', NULL, '2022-09-14 01:47:35', '2022-09-14 01:47:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery_models`
--
ALTER TABLE `gallery_models`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_models`
--
ALTER TABLE `gallery_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
