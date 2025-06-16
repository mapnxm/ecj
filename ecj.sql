-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2024 at 01:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecj`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasiltgs`
--

CREATE TABLE `hasiltgs` (
  `id` bigint UNSIGNED NOT NULL,
  `akun_id` bigint UNSIGNED NOT NULL,
  `tugas_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengumpulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasiltgs`
--

INSERT INTO `hasiltgs` (`id`, `akun_id`, `tugas_id`, `nama`, `nim`, `jurusan`, `dokumen`, `audio`, `semester`, `topic`, `tgl_pengumpulan`, `is_delete`, `nilai`, `created_at`, `updated_at`) VALUES
(3, 10, 2, 'ahmad', 123, 'dkv', 'rectangle-xmark-regular (1).svg', 'tugas1.sql', '1', '2', '07-03-2024', 0, '100', '2024-03-06 21:15:54', '2024-03-06 21:43:50'),
(4, 10, 3, 'ahmad', 123, 'dkv', 'logo.png', '2. Pend Pancasila 2 Fase F.pdf', '1', '3', '07-03-2024', 0, '0', '2024-03-06 21:16:37', '2024-03-06 21:16:37'),
(5, 10, 4, 'ahmad', 123, 'dkv', 'tugas1 (1).sql', 'hasiltgs.sql', '1', '4', '07-03-2024', 0, '0', '2024-03-06 21:16:59', '2024-03-06 21:16:59'),
(6, 10, 5, 'ahmad', 123, 'dkv', 'hasiltgs.sql', 'rectangle-xmark-regular.svg', '1', '5', '07-03-2024', 0, '0', '2024-03-06 21:17:27', '2024-03-06 21:17:27'),
(7, 10, 6, 'ahmad', 123, 'dkv', 'hasiltgs.sql', 'tugas1 (1).sql', '1', '6', '07-03-2024', 0, '0', '2024-03-06 21:18:07', '2024-03-06 21:18:07'),
(8, 10, 7, 'ahmad', 123, 'dkv', 'rectangle-xmark-regular.svg', 'hasiltgs.sql', '1', '7', '07-03-2024', 0, '0', '2024-03-06 21:18:42', '2024-03-06 21:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_042859_tugas', 1),
(6, '2024_01_30_083752_hasil_tgs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint UNSIGNED NOT NULL,
  `topic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_upload` date NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vokab` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `topic_id`, `judul`, `dosen`, `semester`, `topic`, `tgl_upload`, `isi`, `vokab`, `created_at`, `updated_at`) VALUES
(1, '1.1', 'Unforgetable moment/Experience', '-', '1', '1', '2024-01-31', '/s1/1.jpg', '/s1/vokab/1-2page2.png', '2024-02-01 01:12:06', '2024-02-01 01:12:06'),
(2, '1.2', 'Traditional Culture in My Place', '-', '1', '2', '2024-01-31', '/s1/2.jpg', '/s1/vokab/1-2page2.png', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(3, '1.3', 'Describing places/getting around', '-', '1', '3', '2024-01-31', '/s1/3.jpg', '/s1/vokab/3page2.jpg', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(4, '1.4', 'Going shopping', '-', '1', '4', '2024-01-31', '/s1/4.jpg', '/s1/vokab/4page2.jpg', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(5, '1.5', 'Hobby', '-', '1', '5', '2024-01-31', '/s1/5.jpg', '/s1/vokab/5page2.jpg', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(6, '1.6', 'Describing someone', '-', '1', '6', '2024-01-31', '/s1/6.jpg', '/s1/vokab/6page2.jpg', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(7, '1.7', 'My last vacation', '-', '1', '7', '2024-01-31', '/s1/7.jpg', '/s1/vokab/7page2.jpg', '2024-02-01 01:12:07', '2024-02-01 01:12:07'),
(8, '2.1', 'Unforgetable moment/Experience', '-', '2', '1', '2024-01-31', '/s2/1.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:42', '2024-02-01 01:27:42'),
(9, '2.2', 'Traditional Culture in My Place', '-', '2', '2', '2024-01-31', '/s2/2.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:43', '2024-02-01 01:27:43'),
(10, '2.3', 'My Favorite food', '-', '2', '3', '2024-01-31', '/s2/3.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:44', '2024-02-01 01:27:44'),
(11, '2.4', 'My Future/dream holiday', '-', '2', '4', '2024-01-31', '/s2/4.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:44', '2024-02-01 01:27:44'),
(12, '2.5', 'My Health issue', '-', '2', '5', '2024-01-31', '/s2/5.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:44', '2024-02-01 01:27:44'),
(13, '2.6', 'The Trending Topic', '-', '2', '6', '2024-01-31', '/s2/6.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:44', '2024-02-01 01:27:44'),
(14, '2.7', 'English Novel or Short story summary', '-', '2', '7', '2024-01-31', '/s2/7.jpg', '/s2/vokab/1-7page2.png', '2024-02-01 01:27:44', '2024-02-01 01:27:44'),
(15, '3.1', 'My dream work', '-', '3', '1', '2024-01-31', '/s3/1.jpg', '/s3/vokab/1page2.jpg', '2024-02-01 01:43:25', '2024-02-01 01:43:25'),
(16, '3.2', 'Company Profile', '-', '3', '2', '2024-01-31', '/s3/2.jpg', '/s3/vokab/2page2.jpg', '2024-02-01 01:43:26', '2024-02-01 01:43:26'),
(17, '3.3', 'Handling Complaint', '-', '3', '3', '2024-01-31', '/s3/3.jpg', '/s3/vokab/3page2.jpg', '2024-02-01 01:43:26', '2024-02-01 01:43:26'),
(18, '3.4', 'Business Planing', '-', '3', '4', '2024-01-31', '/s3/4.jpg', '/s3/vokab/4page2.jpg', '2024-02-01 01:43:26', '2024-02-01 01:43:26'),
(19, '3.5', 'Promotion product', '-', '3', '5', '2024-01-31', '/s3/5.jpg', '/s3/vokab/5page2.jpg', '2024-02-01 01:43:26', '2024-02-01 01:43:26'),
(20, '3.6', 'How To Be good employer', '-', '3', '6', '2024-01-31', '/s3/6.jpg', '/s3/vokab/6page2.jpg', '2024-02-01 01:43:26', '2024-02-01 01:43:26'),
(21, '3.7', 'Novel/Movie/Short Story/Fable', '-', '3', '7', '2024-01-31', '/s3/7.jpg', '/s3/vokab/7page2.jpg', '2024-02-01 01:43:27', '2024-02-01 01:43:27'),
(22, '4.1', 'My Profesional Profile', '-', '4', '1', '2024-01-31', '/s4/1.png', '/s4/vokab/1-7page2.png', '2024-02-01 01:54:53', '2024-02-01 01:54:53'),
(23, '4.2', 'Traditional Culture in My Place ', '-', '4', '2', '2024-01-31', '/s4/2.png', '/s4/vokab/1-7page2.png', '2024-02-01 01:54:54', '2024-02-01 01:54:54'),
(24, '4.3', 'Job Hunting', '-', '4', '3', '2024-01-31', '/s4/3.png', '/s4/vokab/1-7page2.png', '2024-02-01 01:54:54', '2024-02-01 01:54:54'),
(25, '4.4', 'Job Interview Preparation ', '-', '4', '4', '2024-01-31', '/s4/4.png', '/s4/vokab/1-7page2.png', '2024-02-01 01:54:54', '2024-02-01 01:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','mahasiswa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nama`, `nim`, `jurusan`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'a@gmail.com', 'a', 2, 'p', '$2y$12$kD1tk5GRO77k3ZX/dFUFXO0Zx4Ktvsl6zl46Lx2UYPe2g1tAG9VCG', 'admin', NULL, '2024-02-29 04:25:00', '2024-02-29 04:25:00'),
(9, 'i@gmail.com', 'i', 5, 'RPL', '$2y$12$jAgj479C3iDrnwMPtsPRtO3xt9F5HSeEb1ZaXHTKtYXg6e7ci/8T.', 'mahasiswa', NULL, '2024-02-29 04:25:00', '2024-02-29 04:25:00'),
(10, 'ahmad@gmail.com', 'ahmad', 123, 'dkv', '$2y$12$gOZ.3wxDyx585g6OZLn9.egJ6SqpbR0ZfxJOIz5d9n53qnEFm4dBi', 'mahasiswa', NULL, '2024-02-29 04:25:00', '2024-02-29 04:25:00'),
(11, 'wewe@we.com', 'wewe', 3434, 'rpl', '$2y$12$OSWPYGwGeqbRowDcJoeSWOa7o3Icc1M.YDVQKyVARO72dTUWLKxSa', 'mahasiswa', NULL, '2024-03-06 17:00:00', '2024-03-06 17:00:00'),
(12, 'rere@we.com', 'rere', 123, 'tkr', '$2y$12$uMw7nLDiWGGvVEwKzHJf0OEZHBq0eVVwxDwkcYdQ4R5j.hQChtWXe', 'mahasiswa', NULL, '2024-03-06 17:00:00', '2024-03-06 17:00:00'),
(13, 'gege@we.com', 'gege', 3434, 'kedokteran', '$2y$12$dylz2lGv6Tb6.GsH3waAleVwwrvVok2sQIdlCrJgM5YLJBR6rQEZS', 'mahasiswa', NULL, '2024-03-06 17:00:00', '2024-03-06 17:00:00'),
(14, 'sese@we.com', 'sese', 5454, 'rf', '$2y$12$zRoaDNUd6VDDQfxjF.6x9uoA1CUPzadNvKsWBuNiQ0qmE6Av3lnBi', 'mahasiswa', NULL, '2024-03-06 17:00:00', '2024-03-06 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasiltgs`
--
ALTER TABLE `hasiltgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasiltgs_tugas_id_foreign` (`tugas_id`),
  ADD KEY `hasiltgs_akun_id_foreign` (`akun_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasiltgs`
--
ALTER TABLE `hasiltgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasiltgs`
--
ALTER TABLE `hasiltgs`
  ADD CONSTRAINT `hasiltgs_akun_id_foreign` FOREIGN KEY (`akun_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `hasiltgs_tugas_id_foreign` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
