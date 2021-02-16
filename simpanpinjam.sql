-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 12:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpanpinjam`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_10_07_185027_create_tbl_nasabah_table', 1),
(5, '2020_10_07_185126_create_tbl_transaksi_table', 1),
(6, '2020_10_07_185158_create_tbl_produk_table', 1),
(7, '2020_10_24_135408_create_pembayaran_angsurans_table', 1),
(8, '2020_10_24_135436_create_transaksi_barangs_table', 1),
(9, '2020_10_24_135455_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_nasabah` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jkl` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_ktp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status_brg` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id`, `kd_nasabah`, `nama`, `username`, `email`, `password`, `jkl`, `no_hp`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_ktp`, `status`, `status_brg`, `created_at`, `updated_at`) VALUES
(1, '1', 'io', 'i', 'ioo', 'io', 'pria', NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, '2021-02-16 01:02:22');

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
-- Table structure for table `pembayaran_angsuran`
--

CREATE TABLE `pembayaran_angsuran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenor` double NOT NULL,
  `jumlahbayar` double NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `denda` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran_angsuran`
--

INSERT INTO `pembayaran_angsuran` (`id`, `id_transaksi`, `tenor`, `jumlahbayar`, `tgl_pinjam`, `denda`, `created_at`, `updated_at`) VALUES
(3, 'TR-0001', 1, 55, '2021-02-05', -0, '2021-02-04 16:02:30', '2021-02-04 16:02:30'),
(4, 'TR-0001', 2, 55, '2021-02-06', 1, '2021-02-04 16:02:47', '2021-02-04 16:02:47'),
(5, 'TR-0002', 1, 101, '2021-02-05', -0, '2021-02-04 16:05:08', '2021-02-04 16:05:08'),
(10, 'TR-0003', 1, 505, '2021-03-13', 10, '2021-02-09 20:59:49', '2021-02-09 20:59:49'),
(11, 'TR-0003', 2, 505, '2021-02-16', 0, '2021-02-16 00:46:11', '2021-02-16 00:46:11'),
(12, 'TR-0004', 1, 55.5, '2021-02-16', 0, '2021-02-16 00:50:42', '2021-02-16 00:50:42'),
(13, 'TR-0004', 2, 55.5, '2021-02-16', 0, '2021-02-16 00:52:49', '2021-02-16 00:52:49'),
(14, 'TR-0005', 1, 50500, '2021-02-16', 0, '2021-02-16 00:53:44', '2021-02-16 00:53:44'),
(15, 'TR-0005', 2, 50500, '2021-02-16', 0, '2021-02-16 00:58:38', '2021-02-16 00:58:38'),
(16, 'TR-0006', 1, 550, '2021-02-16', 0, '2021-02-16 01:02:44', '2021-02-16 01:02:44'),
(17, 'TR-0006', 2, 550, '2021-02-16', 0, '2021-02-16 01:03:21', '2021-02-16 01:03:21'),
(18, 'TR-0006', 3, 550, '2021-02-16', 0, '2021-02-16 01:04:04', '2021-02-16 01:04:04'),
(19, 'TR-0006', 4, 550, '2021-02-16', 0, '2021-02-16 01:04:30', '2021-02-16 01:04:30'),
(20, 'TR-0006', 5, 550, '2021-11-25', 13200, '2021-02-16 01:10:38', '2021-02-16 01:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_brg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `status_brg` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_brg`, `stok_brg`, `status_brg`, `status`, `created_at`, `updated_at`) VALUES
(1, '100', 100, '1', '0', '2021-02-04 17:10:27', '2021-02-04 17:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `sisa_saldo` double DEFAULT NULL,
  `profit` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_desa`, `alamat`, `saldo`, `sisa_saldo`, `profit`, `created_at`, `updated_at`) VALUES
(1, 'o', 'o', 210618, NULL, NULL, '2021-02-04 16:00:18', '2021-02-16 01:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_nasabah` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `hrg_sewa` double NOT NULL,
  `total_sewa` double NOT NULL,
  `denda` double DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi_barang`
--

INSERT INTO `transaksi_barang` (`id`, `id_nasabah`, `id_produk`, `tgl_pinjam`, `tgl_kembali`, `hrg_sewa`, `total_sewa`, `denda`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-02-05', '2021-02-05', 100000, 0, NULL, '1', '2021-02-04 17:12:13', '2021-02-04 17:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pinjam_uang`
--

CREATE TABLE `transaksi_pinjam_uang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nasabah` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jaminan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pinjaman` double NOT NULL,
  `bayar_perbulan` double NOT NULL,
  `bunga` double NOT NULL,
  `tenor` double NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi_pinjam_uang`
--

INSERT INTO `transaksi_pinjam_uang` (`id`, `id_transaksi`, `id_nasabah`, `tgl_pinjam`, `tgl_kembali`, `jaminan`, `jumlah_pinjaman`, `bayar_perbulan`, `bunga`, `tenor`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TR-0001', 1, '2021-02-05', '2021-02-05', '100', 100, 55, 10, 2, '0', '2021-02-04 15:59:18', '2021-02-04 16:02:47'),
(2, 'TR-0002', 1, '2021-02-05', '2021-02-05', '1', 100, 101, 1, 1, '0', '2021-02-04 16:04:59', '2021-02-04 16:05:08'),
(3, 'TR-0003', 1, '2021-02-10', '2021-02-10', '1', 1000, 505, 1, 2, '0', '2021-02-09 19:58:27', '2021-02-16 00:46:11'),
(4, 'TR-0004', 1, '2021-02-16', NULL, '1', 100, 55.5, 11, 2, '0', '2021-02-16 00:50:30', '2021-02-16 00:52:49'),
(5, 'TR-0005', 1, '2021-02-16', NULL, '1', 100000, 50500, 1, 2, '0', '2021-02-16 00:53:23', '2021-02-16 00:58:38'),
(6, 'TR-0006', 1, '2021-02-16', NULL, '10', 10000, 550, 10, 2, '1', '2021-02-16 01:02:22', '2021-02-16 01:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ilham', 'ilham@gmail.com', NULL, '$2y$10$BA6X53MBhDQSi.M8opvAWuXZ.Irt4/nqjBgVM06qBnfxtCpJhVHzK', '1', NULL, '2021-02-03 12:22:03', '2021-02-03 12:22:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran_angsuran`
--
ALTER TABLE `pembayaran_angsuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pinjam_uang`
--
ALTER TABLE `transaksi_pinjam_uang`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran_angsuran`
--
ALTER TABLE `pembayaran_angsuran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_pinjam_uang`
--
ALTER TABLE `transaksi_pinjam_uang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
