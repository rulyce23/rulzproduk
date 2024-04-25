-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:31 PM
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
-- Database: `db_weddinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_family`
--

CREATE TABLE `t_family` (
  `id` int(11) NOT NULL,
  `nama_family` varchar(100) NOT NULL,
  `status_family` varchar(50) NOT NULL,
  `foto_family` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_family`
--

INSERT INTO `t_family` (`id`, `nama_family`, `status_family`, `foto_family`) VALUES
(1, 'Rudi Herianto', 'Ayah', ''),
(2, 'Lisdah Sulistiawati', 'Ibu', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_gallery`
--

CREATE TABLE `t_gallery` (
  `id` int(11) NOT NULL,
  `nama_foto` varchar(155) NOT NULL,
  `tanggal_foto` datetime NOT NULL,
  `foto` text NOT NULL,
  `foto2` text NOT NULL,
  `foto3` text NOT NULL,
  `foto4` text NOT NULL,
  `foto5` text NOT NULL,
  `foto6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_gallery`
--

INSERT INTO `t_gallery` (`id`, `nama_foto`, `tanggal_foto`, `foto`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`) VALUES
(1, 'Ruper Gallery', '2024-04-25 17:14:53', 'me.jfif', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_grooms`
--

CREATE TABLE `t_grooms` (
  `id` int(11) NOT NULL,
  `nama_groomsman` varchar(100) NOT NULL,
  `nama_bridesmaid` varchar(100) NOT NULL,
  `status_groomsman` varchar(50) NOT NULL,
  `status_bridesmaid` varchar(50) NOT NULL,
  `foto_groomsman` text NOT NULL,
  `foto_bridesmaid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengantin`
--

CREATE TABLE `t_pengantin` (
  `id` int(11) NOT NULL DEFAULT 1,
  `nama_pengantinpria` varchar(155) NOT NULL,
  `nama_pengantinwanita` varchar(155) NOT NULL,
  `pengantin_pria` varchar(100) NOT NULL,
  `pengantin_wanita` varchar(100) NOT NULL,
  `foto_pria` text NOT NULL,
  `foto_wanita` text NOT NULL,
  `alamat_meet` varchar(125) NOT NULL,
  `first_date` varchar(100) NOT NULL,
  `proposal` varchar(100) NOT NULL,
  `engagement` varchar(100) NOT NULL,
  `tanggal_married` date NOT NULL,
  `alamat_married` text NOT NULL,
  `waktu_pelaksanaan` varchar(20) NOT NULL,
  `instagram_pria` varchar(155) NOT NULL,
  `facebook_pria` varchar(155) NOT NULL,
  `linkedin_pria` varchar(155) NOT NULL,
  `twitter_pria` varchar(155) NOT NULL,
  `instagram_wanita` varchar(155) NOT NULL,
  `facebook_wanita` varchar(155) NOT NULL,
  `linkedin_wanita` varchar(155) NOT NULL,
  `twitter_wanita` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_pengantin`
--

INSERT INTO `t_pengantin` (`id`, `nama_pengantinpria`, `nama_pengantinwanita`, `pengantin_pria`, `pengantin_wanita`, `foto_pria`, `foto_wanita`, `alamat_meet`, `first_date`, `proposal`, `engagement`, `tanggal_married`, `alamat_married`, `waktu_pelaksanaan`, `instagram_pria`, `facebook_pria`, `linkedin_pria`, `twitter_pria`, `instagram_wanita`, `facebook_wanita`, `linkedin_wanita`, `twitter_wanita`) VALUES
(1, 'Ruly', 'Niken', 'Saya sebagai putra dari keluarga Herianto akan menikahi gadis idaman saya yaitu Niken Sri Wiguna\r\nan', 'Saya sebagai putri dari keluarga Wiguna akan menikahi pria idaman saya yaitu Ruly Rizki\r\nanak pertam', '', '', 'kita bertemu dibukit bogor pada tanggal 20 maret 2025 disitulah kita bertemu berawal berjumpa', 'kita mulai mencintai di tanggal 30 Juli 2025 tanggal tersebutlah menjadi saksi bisu akan pertama kal', 'lamaran kami diajukan pada saat tanggal 30 Juli 2027 disitulah kami untuk mengobrol untuk meneruskan', 'pada tanggal 20 Desember 2027 tidak lama dari tanggal dan bulan Juli 2027  saat kita menyatakan hubu', '2028-04-12', 'Jl. Wasudarso , Bandung ', '11:00 - 14:30', 'https://www.instagram.com/ruperzki23/', 'https://www.facebook.com/traveleraddict/', 'https://id.linkedin.com/in/ruly-rizki-perdana-026a67134', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fruperzki23', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_ucapankehadiran`
--

CREATE TABLE `t_ucapankehadiran` (
  `id` int(11) NOT NULL,
  `nama_visitor` varchar(100) NOT NULL,
  `email_visitor` varchar(155) NOT NULL,
  `banyak_tamu` int(11) NOT NULL,
  `status_visitor` varchar(65) NOT NULL,
  `ucapan_visitor` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_ucapankehadiran`
--

INSERT INTO `t_ucapankehadiran` (`id`, `nama_visitor`, `email_visitor`, `banyak_tamu`, `status_visitor`, `ucapan_visitor`, `created_at`) VALUES
(1, 'run', 'run@gmail.com', 3, 'Busy', 'ok', '2024-04-25 14:38:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_family`
--
ALTER TABLE `t_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_grooms`
--
ALTER TABLE `t_grooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengantin`
--
ALTER TABLE `t_pengantin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ucapankehadiran`
--
ALTER TABLE `t_ucapankehadiran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_family`
--
ALTER TABLE `t_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_gallery`
--
ALTER TABLE `t_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_grooms`
--
ALTER TABLE `t_grooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_ucapankehadiran`
--
ALTER TABLE `t_ucapankehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
