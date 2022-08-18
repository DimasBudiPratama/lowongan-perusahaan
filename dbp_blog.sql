-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 01:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbp_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'web-development', '2022-07-21 10:50:21', '2022-07-21 10:50:21'),
(2, 'Mobile Development', 'mobile-development', '2022-07-21 10:50:31', '2022-07-21 10:50:31'),
(3, 'Web Design', 'web-design', '2022-07-21 10:50:43', '2022-07-21 10:50:43'),
(4, 'Database Administrator', 'database-administrator', '2022-08-02 07:26:03', '2022-08-02 07:26:03');

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
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lamar_id` bigint(20) UNSIGNED NOT NULL,
  `waktu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `lamar_id`, `waktu`, `jenis`, `tempat`, `created_at`, `updated_at`) VALUES
(10, 18, '2022-08-08', 'Wawancara Kerja', 'Jl. Pulau Damar 2, Gedung Putih Lantai 6', '2022-08-08 06:43:18', '2022-08-08 06:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `keahlians`
--

CREATE TABLE `keahlians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_keahlian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keahlians`
--

INSERT INTO `keahlians` (`id`, `name_keahlian`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2022-07-21 10:49:53', '2022-07-21 10:49:58'),
(2, 'Laravel', '2022-07-21 10:50:04', '2022-07-21 10:50:04'),
(3, 'CodeIgniter', '2022-07-21 10:50:08', '2022-07-21 10:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `lamars`
--

CREATE TABLE `lamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelamar_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lamars`
--

INSERT INTO `lamars` (`id`, `pelamar_id`, `post_id`, `berkas`, `waktu`, `status`, `created_at`, `updated_at`) VALUES
(18, 13, 9, 'pelamar-file/2ZmeYnunBIlrcGr6xAoz8SjDBcTRQvwZ72cuLCms.pdf', 'Mon, Aug 8, 2022 1:42 PM', 'Seleksi Wawancara', '2022-08-08 06:42:23', '2022-08-08 06:43:18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_09_163933_create_posts_table', 1),
(6, '2022_07_11_063006_create_categories_table', 1),
(7, '2022_07_21_061057_create_pendidikans_table', 1),
(8, '2022_07_21_071618_create_keahlians_table', 1),
(9, '2022_07_25_160949_create_pelamar_table', 2),
(10, '2022_07_25_161736_create_pelamars_table', 3),
(11, '2022_07_25_172212_create_pelamars_table', 4),
(12, '2022_07_27_160851_create_lamars_table', 5),
(13, '2022_08_01_134935_create_lamars_table', 6),
(14, '2022_08_01_135236_create_lamars_table', 7),
(15, '2022_08_01_135358_create_lamars_table', 8),
(16, '2022_08_03_134828_create_jadwals_table', 9);

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
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lulus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamars`
--

INSERT INTO `pelamars` (`id`, `user_id`, `pendidikan_id`, `name`, `email`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `foto`, `status`, `tahun_lulus`, `agama`, `created_at`, `updated_at`) VALUES
(13, 36, 2, 'DimasJunior', 'dimasbudipratama007@gmail.com', 'Laki-Laki', 'Tokyo', '2000-07-11', 'Jl. Shibuya, Distrik Kota Tokyo', '0822382114818', 'pelamar-images/FcHC80e3yIPfkY7Q1MiXQ9U1m6uZrB38qRBrdWv8.jpg', '1', '2022', 'Islam', '2022-08-08 06:38:07', '2022-08-08 06:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_pendidikan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `name_pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'SMA/SMK', '2022-07-21 10:49:26', '2022-07-21 10:49:26'),
(2, 'D3', '2022-07-21 10:49:30', '2022-07-21 10:49:30'),
(3, 'S1', '2022-07-21 10:49:37', '2022-07-21 10:49:37'),
(4, 'S2', '2022-07-21 10:49:40', '2022-07-21 10:49:40');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selesai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `pendidikan_id`, `lowongan`, `slug`, `sampul`, `keterangan`, `jenis_pekerjaan`, `pengalaman`, `gaji`, `mulai`, `selesai`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 2, 'IT Admin', 'it-admin', 'post-images/dDNE6Gpg4fBQT29zOIksz7tQxDdoRGqQ5MKNRZdV.jpg', '<div>Deskripsi Pekerjaan:<br>1. Terbuka untuk freshgraduate<br>2. Mengerti dan memahami Microsoft Visio<br>3. Bekerja dan berpengalaman sebagai Technical Writer dalam IT (diutamakan).<br>4. Menginput, mendata, dan merekap semua hal yang berkaitan dengan administrasi proyek IT dengan jelas dan terorganisir.<br>5. Membuat rencana anggaran biaya dan perkiraan harga dalam proyek IT yang sedang beroperasional atau yang akan datang.<br>6. Melakukan koordinasi dan meeting terkait progress atau aktifitas IT.<br>7. Melakukan sesi dokumentasi dan memastikan dokumen IT berjalan dengan baik dan lancar seperti: dokumen teknis IT, Standard Operating Procedure (SOP), Working Instruction (WI), Minutes Of Meeting (MOM), laporan periodik, dan lain-lain.<br>8. Menjalin komunikasi yang baik kepada tim IT atau user dalam menjalin kerjasama.</div><div><br>Kualifikasi:<br>- Memahami proses purchasing (terutama di bidang IT).<br>- Terbiasa membuat rencana anggaran biaya.<br>- Terbiasa membuat dokumentasi IT seperti dokumen teknis proyek, prosedur, working instruction (WI), minutes of meeting (MOM), dll.<br>- Komunikatif, jujur teliti, cekatan, rapih, percaya diri, dapat bekerjasama dalam tim dan dapat menjunjung tinggi kerahasiaan informasi.<br>- Bersedia bekerja di bawah tekanan.</div>', 'Penuh Waktu', '3 Tahun', 'Negoitable', '2022-07-17', '2022-07-23', 1, NULL, '2022-07-21 20:50:41', '2022-08-02 07:41:30'),
(17, 2, 1, 3, 'Data Enginner', 'data-enginner', 'post-images/E7Lt4l8AaSeoswJND0rQPRu25GHAeTHDBvCPUAz9.jpg', '<div>Deskripsi Pekerjaan :<br><br>1. Minimal D3</div>', 'Penuh Waktu', '1 Tahun', 'Negoitable', '2022-08-01', '2022-08-10', 1, NULL, '2022-08-01 23:08:35', '2022-08-02 20:19:52'),
(18, 1, 1, 2, 'Back End Developer', 'back-end-developer', 'post-images/Lt4hgljHnb5XzpEeuHZO4avFzmnvygG7MK7scuHO.jpg', '<div>Web</div>', 'Penuh Waktu', '1 Tahun', 'Rp.1.500.000', '2022-08-01', '2022-08-10', 0, NULL, '2022-08-02 07:35:05', '2022-08-02 07:35:05'),
(19, 4, 1, 2, 'IT APPLICATION', 'it-application', 'post-images/Ab5jPs4LfYuthdJ4lfmCmz9JTEHL6yIgpwLyaoIz.jpg', '<div>Deskripsi Pekerjaan</div><div><strong><br>Kualifikasi:<br></strong><br></div><ul><li>Usia maksimal 35 Tahun</li><li>Pendidikan minimal S-1 Teknik Informatika</li><li>Memiliki pengalaman bekerja minimal 01 (satu) tahun dibidang yang sama</li><li>Mengerti konsep pemrograman berorientasi objek.</li><li>Menguasai sistem opersi berbasis Dos, Windows dan sistem operasi berbasis Open Source (Mis Linux).</li><li>Menguasai berbagai koneksi Database (MySQL, Oracle dan lain-lain)</li><li>Mampu membuat modul dengan Metoda Client Server, pemrograman berbasis Web Base.</li><li>Mempunyai pemahaman terhadap database dan logic programming dengan baik</li><li>Memiliki pengalaman terkait API dan Elastic Search</li><li>Menguasai berbagai perkembangan Hardware dan Software, Antivirus dan Program Bantu lainnya.</li><li>Sehat secara Jasmani dan Rohani.</li></ul>', 'Penuh Waktu', '1 Tahun', 'Rp.5.000.000', '2022-08-05', '2022-08-10', 1, NULL, '2022-08-04 21:04:51', '2022-08-04 21:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) DEFAULT 3,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'dimas', 'dimasbudipratama12345@gmail.com', 1, '2022-07-26 07:35:04', '$2y$10$ZlMxUZ2py57zDoK8EVUkw./skzXEfkQbNLrBvuXj7p2qL3iHSEDfS', NULL, '2022-07-21 10:47:53', '2022-07-26 07:35:04'),
(34, 'Manager', 'manager', 'dimasbudipratama@gmail.com', 2, NULL, '$2y$10$C.iXrlJRBDfCKnHtPLtZUu2NaOOxUqgjG/vkEZZgdMdKWjpuqSBS6', NULL, '2022-08-04 21:02:21', '2022-08-04 21:02:21'),
(36, 'DimasJunior', 'junior', 'dimasbudipratama007@gmail.com', 3, '2022-08-08 06:40:08', '$2y$10$tyZS4wAKVWqcydSabPl0z.EGTTAjzskreR9Y6li0sSxBRDxHQEWpK', NULL, '2022-08-08 06:38:07', '2022-08-08 06:40:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlians`
--
ALTER TABLE `keahlians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamars`
--
ALTER TABLE `lamars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lamars_pelamar_id_foreign` (`pelamar_id`),
  ADD KEY `lamars_post_id_foreign` (`post_id`);

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
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keahlians`
--
ALTER TABLE `keahlians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lamars`
--
ALTER TABLE `lamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamars`
--
ALTER TABLE `lamars`
  ADD CONSTRAINT `lamars_pelamar_id_foreign` FOREIGN KEY (`pelamar_id`) REFERENCES `pelamars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lamars_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
