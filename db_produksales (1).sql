-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 12:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produksales`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailconfig`
--

CREATE TABLE `emailconfig` (
  `id` int(11) NOT NULL,
  `fromemail` varchar(255) NOT NULL,
  `fromname` varchar(255) NOT NULL,
  `protocol` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emailconfig`
--

INSERT INTO `emailconfig` (`id`, `fromemail`, `fromname`, `protocol`, `host`, `username`, `security`, `port`, `password`, `created_at`, `updated_at`) VALUES
(1, 'codeigniter@example.com', 'Codeigniter Auth', 'smtp', 'gmail.google.com', 'official@gmail.com', 'tls', '22', '$2y$10$PK65kpF6SflIk/iAJql6R.PRXX9GEaoRrJHHORqReU2I0E/60pVtC', '2020-08-21 17:43:51', '2020-09-11 14:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reference` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `browser` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `date`, `time`, `reference`, `name`, `ip`, `location`, `browser`, `status`, `created_at`, `updated_at`) VALUES
(13, '2024-05-21', '12:46:01', 1, 'Admin', '::1', NULL, 'Edge', 'Success', '2024-05-21 12:46:01', '2024-05-21 12:46:01'),
(14, '2024-05-21', '13:32:04', 1, 'Admin', '::1', NULL, 'Edge', 'Success', '2024-05-21 13:32:04', '2024-05-21 13:32:04'),
(15, '2024-05-21', '18:12:14', 17, 'Rulz', '::1', NULL, 'Edge', 'Success', '2024-05-21 18:12:14', '2024-05-21 18:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` bigint(25) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`id`, `kode`, `nama`, `harga`, `jenis`, `updated_at`, `created_at`) VALUES
(1, 'A0001', 'POLYTRON SMART TV 50\" ', 5450000, 'TV', '2024-05-19 12:03:06', '2024-05-19 12:03:06'),
(2, 'A2UnZS', 'Samsung UHDTV Smart TV', 80000000, 'Smart TV', '2024-05-19 05:04:40', '2024-05-19 05:04:40'),
(3, 'AQTSOh', 'LG Smart TV', 4226265, 'Smart TV', '2024-05-19 05:08:15', '2024-05-19 05:08:15'),
(4, 'KRA01994', 'Lithium Batery acer aspire', 8500000, 'Baterai Laptop', '2024-05-21 10:23:52', '2024-05-21 10:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`id`, `nama`, `telepon`, `alamat`, `goldar`, `nik`, `tgl_lahir`, `jk`, `kode`, `updated_at`, `created_at`) VALUES
(1, 'Rizki Perdana', '081328306288', 'Komplek GBA 3 Blok B1 No.10 Kec Bojongsoang Bandung', 'O', 3204082307960001, '1996-07-23', 'Laki-laki', 'AW5lxT', '2024-05-19 06:14:45', '2024-05-19 06:14:45'),
(2, 'Ruly', '081328306288', 'Komplek GBA 3 Blok B1 No.10 Kec Bojongsoang Bandung', 'O', 43101941955185919, '1986-07-16', 'Laki-laki', 'A491', '2024-05-21 10:19:58', '2024-05-21 10:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `dateformat` varchar(255) NOT NULL,
  `timeformat` varchar(255) NOT NULL,
  `iprestriction` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `language`, `timezone`, `dateformat`, `timeformat`, `iprestriction`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Asia/Manila', 'yyyy-mm-dd', '24', '', '2020-08-21 17:43:51', '2020-09-11 14:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `t_sales`
--

CREATE TABLE `t_sales` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `tgl` datetime NOT NULL,
  `id_cust` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `ongkir` decimal(10,0) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sales`
--

INSERT INTO `t_sales` (`id`, `kode`, `tgl`, `id_cust`, `subtotal`, `diskon`, `ongkir`, `total_bayar`, `created_at`, `updated_at`) VALUES
(1, '202101-0001', '2024-05-19 16:32:58', 1, 4500, 5, 2500, 45000, '2024-05-19 14:33:54', '2024-05-19 14:33:54'),
(2, '202101-0002', '2024-05-19 17:48:31', 1, 5400, 10, 5000, 16700, '2024-05-19 15:49:06', '2024-05-19 15:49:06'),
(3, '202405-0003', '2024-05-21 00:00:00', 1, 285311211, 3000, 1500, 285306711, '2024-05-19 21:23:58', '2024-05-20 04:31:29'),
(4, '202405-0004', '2024-05-21 00:00:00', 1, 285311211, 3000, 1500, 285306711, '2024-05-19 21:24:24', '2024-05-20 04:31:33'),
(5, '202405-0005', '2024-05-21 00:00:00', 1, 285311211, 3000, 1500, 285306711, '2024-05-19 21:25:29', '2024-05-20 04:31:37'),
(6, '202405-0006', '2024-05-23 00:00:00', 1, 79886203, 31222, 31111, 79823870, '2024-05-21 10:12:48', '2024-05-21 10:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `t_sales_detail`
--

CREATE TABLE `t_sales_detail` (
  `id` int(11) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_bandrol` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `diskon_pct` decimal(10,0) NOT NULL,
  `diskon_nilai` decimal(10,0) NOT NULL,
  `harga_diskon` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sales_detail`
--

INSERT INTO `t_sales_detail` (`id`, `id_sales`, `id_barang`, `harga_bandrol`, `qty`, `diskon_pct`, `diskon_nilai`, `harga_diskon`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4500000, 2, 15, 25, 1000000, 2850000, '2024-05-20 04:25:26', '2024-05-20 04:25:26'),
(2, 2, 2, 2500000, 1, 15, 15, 400000, 2100000, '2024-05-20 04:25:26', '2024-05-20 04:25:26'),
(3, 3, 1, 45000002, 2, 15, 6750000, 37575002, 75150003, '2024-05-19 21:25:29', '2024-05-20 04:26:32'),
(4, 4, 2, 250000009, 1, 15, 37500001, 208750008, 208750008, '2024-05-19 21:25:29', '2024-05-20 04:26:37'),
(5, 5, 3, 480000, 3, 2, 9600, 470400, 1411200, '2024-05-19 21:25:30', '2024-05-19 21:25:30'),
(6, 6, 1, 4500000, 0, 15, 25, 1000000, 2850000, '2024-05-21 10:12:48', '2024-05-21 10:12:48'),
(7, 6, 2, 2500000, 0, 15, 15, 400000, 2100000, '2024-05-21 10:12:48', '2024-05-21 10:12:48'),
(8, 6, 1, 45000002, 0, 15, 6750000, 37575002, 75150003, '2024-05-21 10:12:48', '2024-05-21 10:12:48'),
(9, 6, 2, 2500000, 0, 15, 375000, -1625000, -1625000, '2024-05-21 10:12:48', '2024-05-21 10:12:48'),
(10, 6, 3, 480000, 0, 2, 9600, 470400, 1411200, '2024-05-21 10:12:48', '2024-05-21 10:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `new_email` varchar(191) DEFAULT NULL,
  `password_hash` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `firstname` varchar(191) DEFAULT NULL,
  `lastname` varchar(191) DEFAULT NULL,
  `activate_hash` varchar(191) DEFAULT NULL,
  `reset_hash` varchar(191) DEFAULT NULL,
  `reset_expires` bigint(20) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `new_email`, `password_hash`, `name`, `firstname`, `lastname`, `activate_hash`, `reset_hash`, `reset_expires`, `active`, `created_at`, `updated_at`) VALUES
(1, 'rulyce23@gmail.com', NULL, '$2y$10$/clmNLUUxGnREFHqraU7P.aVfJ5Mk0iEKRgKVz8.ZKOZIUGJGXlya', 'Admin', 'Admin', 'User', 'ZEWv2TUIY5oDqgw9FkjnmAS78zJNKfpL', NULL, NULL, 1, '2020-08-04 16:07:50', '2020-09-11 14:32:51'),
(17, 'rulyrizky23@gmail.com', NULL, '$2y$10$Ss7Oqw/zV4/WoQcOlmqY3.26whbzDg8CsaI8ocU1/mt2gDrfplBfG', 'Rulz', 'Ruly', 'Rizki Perdana', 'Jm5kYSVBUxNKBGfb78mIvv3e3VEUCEbn', NULL, NULL, 1, '2024-05-21 18:10:10', '2024-05-21 18:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailconfig`
--
ALTER TABLE `emailconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sales`
--
ALTER TABLE `t_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cust` (`id_cust`);

--
-- Indexes for table `t_sales_detail`
--
ALTER TABLE `t_sales_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailconfig`
--
ALTER TABLE `emailconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_sales`
--
ALTER TABLE `t_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_sales_detail`
--
ALTER TABLE `t_sales_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
