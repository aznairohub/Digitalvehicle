-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 09:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlisences`
--

CREATE TABLE `addlisences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `sof` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `vf` varchar(255) NOT NULL,
  `vt` varchar(255) NOT NULL,
  `dlno` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addlisences`
--

INSERT INTO `addlisences` (`id`, `username`, `sof`, `address`, `dob`, `bg`, `cat`, `vf`, `vt`, `dlno`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'muneer', 'sadasdsa', '2000-09-12', 'o+ve', 'dwsefdsf', '42323-02-23', '3232-02-23', '1234', NULL, NULL),
(2, '2323', '343433', '3434', '43432-03-31', '34234', '34234', '2322-02-12', '2333-03-12', '24343', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addrcbooks`
--

CREATE TABLE `addrcbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rto` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `eno` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `regdate` varchar(255) NOT NULL,
  `fit` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `expin` varchar(255) NOT NULL,
  `regnumber` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `unload` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addrcbooks`
--

INSERT INTO `addrcbooks` (`id`, `name`, `rto`, `model`, `class`, `fuel`, `eno`, `cno`, `regdate`, `fit`, `expiry`, `expin`, `regnumber`, `color`, `unload`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'kl07', '123', '2', 'petrol', '2324355', '3453454', '2020-04-12', '2045-05-12', '2023-03-12', '2024-03-12', '123456789', 'black', '2', NULL, NULL),
(2, 'krish', 'kl07', 'qwerty', 'qwerty', 'qwerty', '234234', '34334', '2222-03-31', '1222-02-23', '1323-02-23', '0032-02-23', '232313', '232312', '23234', NULL, NULL);

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(35, '2023_03_14_093811_create_addrcbooks_table', 1),
(36, '2023_03_17_093704_create_addlisences_table', 1),
(37, '2023_03_21_110029_create_msgs_table', 1),
(47, '2023_03_23_094059_create_registrations_table', 2),
(48, '2023_03_28_102558_create_punishments_table', 2),
(49, '2023_03_29_091704_create_policeregs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `policeregs`
--

CREATE TABLE `policeregs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `punishments`
--

CREATE TABLE `punishments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dlid` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `punishments`
--

INSERT INTO `punishments` (`id`, `dlid`, `first`, `second`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '\'Not Completed\'', '\'Not Completed\'', 'Not Completed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `hgt` varchar(255) NOT NULL,
  `wgt` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `psd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `address`, `dob`, `bg`, `hgt`, `wgt`, `username`, `psd`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'aaaaa', '2000-04-12', 'O+ve', '156', '49', 'azna', 'azna', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlisences`
--
ALTER TABLE `addlisences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addrcbooks`
--
ALTER TABLE `addrcbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policeregs`
--
ALTER TABLE `policeregs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punishments`
--
ALTER TABLE `punishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
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
-- AUTO_INCREMENT for table `addlisences`
--
ALTER TABLE `addlisences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addrcbooks`
--
ALTER TABLE `addrcbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policeregs`
--
ALTER TABLE `policeregs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `punishments`
--
ALTER TABLE `punishments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
