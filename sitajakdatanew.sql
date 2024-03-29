-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 03:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitajakdatanew`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayarselanjutnya`
--

CREATE TABLE `bayarselanjutnya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dafken_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_bayar_selanjutnya` date NOT NULL,
  `pemegang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_stnk` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bayarselanjutnya`
--

INSERT INTO `bayarselanjutnya` (`id`, `unit_kerja`, `dafken_id`, `tgl_bayar_selanjutnya`, `pemegang`, `keterangan`, `foto_stnk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Bidang TP', 41, '2023-05-29', 'Aktif', 'belum membayar', '1672252958.png', '2022-11-05 07:03:51', '2022-12-28 10:42:38', NULL),
(8, 'Bidang TP', 42, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-11-05 07:04:33', '2022-12-28 07:52:30', NULL),
(9, 'Bidang KKP', 43, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-11-05 07:05:20', '2022-12-28 07:53:17', NULL),
(10, 'Bidang TP', 44, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-11-05 07:06:09', '2022-12-28 07:53:50', NULL),
(12, 'Bidang Hortik', 46, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-11-05 07:08:16', '2022-12-28 07:54:23', NULL),
(17, 'Sekretariat', 51, '2023-12-17', 'Aktif', 'belum membayar', '', '2022-11-05 07:17:08', '2022-12-28 07:55:40', NULL),
(22, 'Sekretariat', 63, '2023-10-26', 'Aktif', 'belum membayar', '', '2022-11-05 07:20:31', '2022-12-28 07:56:32', NULL),
(23, 'Bidang TP', 64, '2023-10-26', 'Aktif', 'belum membayar', '', '2022-11-05 07:21:10', '2022-12-28 07:57:07', NULL),
(24, 'Sekretariat', 65, '2022-12-01', 'Aktif', 'belum membayar', '', '2022-11-05 07:21:39', '2022-11-05 07:21:39', NULL),
(25, 'Sekretariat', 66, '2022-12-02', 'Aktif', 'belum membayar', '', '2022-11-05 07:22:09', '2022-11-05 07:22:09', NULL),
(37, 'Sekretariat', 6, '2023-08-23', 'Aktif', 'belum membayar', '', '2022-12-28 07:10:38', '2022-12-28 07:10:38', NULL),
(38, 'Bidang KKP', 7, '2023-09-24', 'Aktif', 'belum membayar', '', '2022-12-28 07:11:47', '2022-12-28 07:11:47', NULL),
(39, 'Sekretariat', 9, '2023-01-13', 'Aktif', 'belum membayar', '', '2022-12-28 07:12:39', '2022-12-28 07:12:39', NULL),
(40, 'Sekretariat', 10, '2023-02-14', 'Aktif', 'belum membayar', '', '2022-12-28 07:14:26', '2022-12-28 07:14:26', NULL),
(41, 'Sekretariat', 25, '2023-02-14', 'Aktif', 'belum membayar', '', '2022-12-28 07:15:42', '2022-12-28 07:15:42', NULL),
(42, 'Sekretariat', 28, '2023-05-06', 'Aktif', 'belum membayar', '', '2022-12-28 07:17:40', '2022-12-28 07:17:40', NULL),
(43, 'UPTD Proteksi Tanaman Pangan dan Holtikultura', 29, '2023-11-10', 'Aktif', 'belum membayar', '', '2022-12-28 07:18:32', '2022-12-28 07:18:32', NULL),
(44, 'Bidang Hortik', 30, '2023-11-11', 'Pasif', 'belum membayar', '', '2022-12-28 07:19:39', '2022-12-28 07:19:39', NULL),
(45, 'Sekretariat', 31, '2023-11-19', 'Aktif', 'belum membayar', '', '2022-12-28 07:20:18', '2022-12-28 07:21:46', NULL),
(46, 'Sekretariat', 32, '2023-11-19', 'Pasif', 'belum membayar', '', '2022-12-28 07:21:14', '2022-12-28 07:21:14', NULL),
(47, 'Sekretariat', 35, '2023-11-19', 'Aktif', 'belum membayar', '', '2022-12-28 07:22:40', '2022-12-28 07:22:40', NULL),
(48, 'Sekretariat', 37, '2023-01-10', 'Aktif', 'belum membayar', '', '2022-12-28 07:23:24', '2022-12-28 07:23:24', NULL),
(49, 'Bidang KKP', 38, '2023-03-17', 'Aktif', 'belum membayar', '', '2022-12-28 07:24:27', '2022-12-28 07:24:27', NULL),
(50, 'Bidang TP', 39, '2023-04-12', 'Aktif', 'belum membayar', '', '2022-12-28 07:25:14', '2022-12-28 07:25:14', NULL),
(51, 'Sekretariat', 40, '2023-04-24', 'Aktif', 'belum membayar', '', '2022-12-28 07:25:57', '2022-12-28 07:25:57', NULL),
(52, 'Bidang Hortik', 13, '2023-08-01', 'Aktif', 'belum membayar', '', '2022-12-28 07:27:16', '2022-12-28 07:27:16', NULL),
(53, 'Bidang Hortik', 16, '2023-05-29', 'Pasif', 'belum membayar', '', '2022-12-28 07:30:43', '2022-12-28 07:30:43', NULL),
(54, 'Bidang Hortik', 17, '2023-06-03', 'Aktif', 'belum membayar', '', '2022-12-28 07:49:22', '2022-12-28 07:49:22', NULL),
(55, 'Sekretariat', 19, '2023-05-29', 'Pasif', 'belum membayar', '', '2022-12-28 07:50:07', '2022-12-28 07:50:07', NULL),
(56, 'Bidang KKP', 21, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-12-28 07:50:58', '2022-12-28 07:50:58', NULL),
(57, 'Bidang Hortik', 49, '2023-05-29', 'Aktif', 'belum membayar', '', '2022-12-28 09:08:22', '2022-12-28 09:08:22', NULL),
(58, 'Sekretariat', 52, '2023-08-13', 'Aktif', 'belum membayar', '', '2022-12-28 09:10:09', '2022-12-28 09:10:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blmlunas`
--

CREATE TABLE `blmlunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dafken_id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pemegang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_stnk` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blmlunas`
--

INSERT INTO `blmlunas` (`id`, `unit_kerja`, `dafken_id`, `pembayaran_pajak`, `tgl_bayar`, `pemegang`, `keterangan`, `foto_stnk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Sekretariat', 5, '250000', '2022-09-23', 'Aktif', 'belum membayar', '1672243902.png', '2022-10-20 07:33:01', '2022-12-28 08:11:42', NULL),
(13, 'Sekretariat', 8, '220000', '2022-09-23', 'Aktif', 'belum membayar', '1672243985.png', '2022-10-20 07:38:39', '2022-12-28 08:13:05', NULL),
(16, 'Sekretariat', 11, '350000', '2022-08-07', 'Aktif', 'belum membayar', '1672244060.png', '2022-10-20 07:41:17', '2022-12-28 08:14:20', NULL),
(17, 'Sekretariat', 12, '300000', '2022-06-20', 'Aktif', 'belum membayar', '1672244108.png', '2022-10-20 07:42:16', '2022-12-28 08:15:08', NULL),
(19, 'Bidang KKP', 14, '250000', '2022-08-01', 'Aktif', 'belum membayar', '1672245681.png', '2022-10-20 07:44:09', '2022-12-28 08:41:21', NULL),
(20, 'Bidang TP', 15, '235000', '2022-08-02', 'Aktif', 'belum membayar', '1672245725.png', '2022-10-20 07:44:47', '2022-12-28 08:42:05', NULL),
(23, 'Bidang KKP', 18, '200000', '2022-05-29', 'Aktif', 'belum membayar', '1672245793.png', '2022-10-20 07:47:41', '2022-12-28 08:43:13', NULL),
(25, 'Sekretariat', 20, '250000', '2022-05-29', 'Aktif', 'belum membayar', '1672245849.png', '2022-10-20 07:49:20', '2022-12-28 08:44:09', NULL),
(27, 'Bidang TP', 22, '150000', '2022-05-29', 'Aktif', 'belum membayar', '1672245970.png', '2022-10-20 07:51:26', '2022-12-28 08:46:10', NULL),
(28, 'Sekretariat', 23, '250000', '2022-11-01', 'Aktif', 'belum membayar', '1672244164.png', '2022-10-20 08:08:00', '2022-12-28 08:16:04', NULL),
(29, 'Sekretariat', 24, '300000', '2022-09-08', 'Aktif', 'belum membayar', '1672244233.png', '2022-10-20 08:09:16', '2022-12-28 08:17:13', NULL),
(31, 'Sekretariat', 26, '235000', '2022-12-22', 'Aktif', 'belum membayar', '1672244292.png', '2022-10-20 08:12:35', '2022-12-28 08:18:12', NULL),
(32, 'Bidang KDP', 27, '200000', '2022-12-21', 'Aktif', 'belum membayar', '1672244345.png', '2022-10-20 08:14:00', '2022-12-28 08:19:08', NULL),
(38, '', 33, '350000', '2022-11-16', 'Aktif', 'belum membayar', '1672245406.png', '2022-10-20 08:22:04', '2022-12-28 08:36:46', NULL),
(39, 'Sekretariat', 34, '250000', '2022-12-22', 'Aktif', 'belum membayar', '1672245454.png', '2022-10-20 08:23:45', '2022-12-28 08:37:34', NULL),
(41, 'Sekretariat', 36, '220000', '2022-09-17', 'Aktif', 'belum membayar', '1672245508.png', '2022-10-20 08:25:17', '2022-12-28 08:38:28', NULL),
(46, 'Sekretariat', 45, '250000', '2022-05-29', 'Aktif', 'belum membayar', '1672246054.png', '2022-12-28 08:47:34', '2022-12-28 08:47:34', NULL),
(47, 'Bidang Hortik', 47, '250000', '2022-05-29', 'Aktif', 'belum membayar', '1672247196.png', '2022-12-28 09:06:36', '2022-12-28 09:06:36', NULL),
(48, 'Sekretariat', 53, '250000', '2022-08-19', 'Pasif', 'belum membayar', '1672247526.png', '2022-12-28 09:12:06', '2022-12-28 09:12:06', NULL),
(49, 'Bidang TP', 62, '300000', '2022-10-26', 'Aktif', 'belum membayar', '1672247698.png', '2022-12-28 09:14:58', '2022-12-28 09:14:58', NULL),
(50, 'Sekretariat', 67, '200000', '2022-11-21', 'Aktif', 'belum membayar', '1672247774.png', '2022-12-28 09:16:14', '2022-12-28 09:16:14', NULL),
(51, 'Bidang Hortik', 68, '350000', '2022-12-31', 'Aktif', 'belum membayar', '1672247819.png', '2022-12-28 09:16:59', '2022-12-28 09:16:59', NULL),
(52, 'Bidang KDP', 69, '235000', '2022-11-06', 'Aktif', 'belum membayar', '1672247883.png', '2022-12-28 09:18:03', '2022-12-28 09:18:03', NULL),
(53, 'Sekretariat', 70, '220000', '2022-11-05', 'Pasif', 'belum membayar', '1672247947.png', '2022-12-28 09:19:07', '2022-12-28 09:19:07', NULL),
(54, 'Sekretariat', 71, '200000', '2022-11-06', 'Aktif', 'belum membayar', '1672247994.png', '2022-12-28 09:19:54', '2022-12-28 09:19:54', NULL),
(55, 'Bidang TP', 72, '220000', '2022-11-05', 'Aktif', 'belum membayar', '1672248043.png', '2022-12-28 09:20:43', '2022-12-28 09:20:43', NULL),
(56, 'Bidang KDP', 73, '350000', '2022-11-06', 'Aktif', 'belum membayar', '1672248103.png', '2022-12-28 09:21:43', '2022-12-28 09:21:43', NULL),
(57, 'Sekretariat', 74, '350000', '2022-10-29', 'Aktif', 'belum membayar', '1672248156.png', '2022-12-28 09:22:36', '2022-12-28 09:22:36', NULL),
(58, 'Sekretariat', 75, '300000', '2022-10-29', 'Aktif', 'belum membayar', '1672248438.png', '2022-12-28 09:27:18', '2022-12-28 09:27:18', NULL),
(59, 'Sekretariat', 76, '220000', '2022-10-29', 'Aktif', 'belum membayar', '1672248500.png', '2022-12-28 09:28:20', '2022-12-28 09:28:20', NULL),
(60, 'Bidang KDP', 77, '200000', '2022-11-06', 'Aktif', 'belum membayar', '1672248558.png', '2022-12-28 09:29:18', '2022-12-28 09:29:18', NULL),
(61, 'Sekretariat', 48, '300000', '2022-05-29', 'Aktif', 'belum membayar', '1672248794.png', '2022-12-28 09:33:14', '2022-12-28 09:33:14', NULL),
(62, 'Bidang KKP', 50, '300000', '2022-10-26', 'Aktif', 'belum membayar', '1672248852.png', '2022-12-28 09:34:12', '2022-12-28 09:34:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dafken`
--

CREATE TABLE `dafken` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemegang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_mesin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_perolehan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_dana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_fisik` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dafken`
--

INSERT INTO `dafken` (`id`, `nama_pemegang`, `merk_kendaraan`, `jenis_kendaraan`, `no_polisi`, `no_mesin`, `no_rangka`, `tahun`, `harga_perolehan`, `sumber_dana`, `keterangan`, `foto_fisik`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'M. aswan M', 'toyota kijang pick up', 'Roda 4', 'KT 8275 B', '7K - 0191496', 'MHF31KF6000005766', '1997', '0', 'APBN', 'Rusak', '1670656763.jpg', '2022-10-15 23:27:40', '2022-12-09 23:19:23', NULL),
(4, 'Ambran Hasan', 'toyota kijang pick up', 'Roda 4', 'KT 1086 C', '9941076', '994128', '1999', '0', '', 'proses penghapusan', '1673492463.png', '2022-10-15 23:28:43', '2023-01-11 19:01:04', NULL),
(5, 'pool dinas', 'L200 strada', 'Roda 4', 'KT 8455 BZ', '4D56BT2889', 'MMBJNK7404D080337', '2004', '0', 'APBD', '-', '1671289461.png', '2022-10-15 23:56:02', '2022-12-17 07:04:22', NULL),
(6, 'Pool KTNA', 'ford everest', 'Roda 4', 'KT 1486 BZ', 'WLAT -745276', 'MNBLS406WH11929', '2006', '322500000', 'APBD', '-', '1671289538.png', '2022-10-16 00:09:02', '2022-12-17 07:05:38', NULL),
(7, 'Ir. Diah Adiaty Yahya, M.MT', 'toyota avanza', 'Roda 4', 'KT 1716 BZ', 'DD38014', 'MHFMIBA3J8K113415', '2008', '137385000', 'APBD', '-', '1671289623.png', '2022-10-16 00:14:27', '2022-12-17 07:07:03', NULL),
(8, 'Ir. H. Ibrahim', 'toyota avanza', 'Roda 4', 'KT 1905 B', 'DD14402Z', 'MHFMIBA3J8K100201', '2008', '137385000', 'APBD', '-', '1671289662.png', '2022-10-16 00:26:17', '2022-12-17 07:07:42', NULL),
(9, 'pool Dinas', 'ford everest', 'Roda 4', 'KT 1005 BZ', 'WLTA - 103532', 'MNBLS4D108W212473', '2008', '374976000', '', '-', '1671289714.png', '2022-10-16 08:15:49', '2022-12-17 07:08:34', NULL),
(10, 'Ir. Budi Syahbandi, MP', 'toyota avanza', 'Roda 4', 'KT 1646 BZ', 'DC67660', 'MHFMIBA3J8K071389', '2008', '124992000', 'APBD', '-', '1671289743.png', '2022-10-16 08:21:43', '2022-12-17 07:09:03', NULL),
(11, 'pool dinas', 'ford ranger', 'Roda 4', 'KT 8129 BZ', 'WLAT - 932594', 'MNBSFE408W740028', '2008', '0', 'APBD', '-', '1671289775.png', '2022-10-16 08:23:44', '2022-12-17 07:09:35', NULL),
(12, 'pool dinas', 'toyota avanza', 'Roda 4', 'KT 2919 BZ', 'DC15385', 'MHFM1BA3J7K039806', '2008', '124992000', 'APBD', '-', '1671289819.png', '2022-10-16 08:25:15', '2022-12-17 07:10:19', NULL),
(13, 'Yudha Karsa', 'honda revo 110cc', 'Roda 2', 'KT 4535 MZ', 'HB61E-1413267', 'MH1HB611X8K415473', '2008', '12900000', 'APBD', '-', '1671289879.png', '2022-10-16 08:34:52', '2022-12-17 07:11:19', NULL),
(14, 'Dani Rahmadi', 'honda revo 110cc', 'Roda 2', 'KT 4537 MZ', 'HB61E-1403012', 'MH1HB61128K412020', '2008', '12900000', 'APBD', '-', '1671289928.png', '2022-10-16 08:36:25', '2022-12-17 07:12:08', NULL),
(15, 'sujatmiko suswanto', 'honda revo 110cc', 'Roda 2', 'KT 4544 MZ', 'HB61E-1218426', 'MH1HB61127K217887', '2008', '12900000', 'APBD', '-', '1671289959.png', '2022-10-16 08:37:55', '2022-12-17 07:12:40', NULL),
(16, 'ir. erry eriyadi', 'honda CS 1', 'Roda 2', 'KT 4810 MZ', 'JBA1E1089528', 'MH1JBA1129KO89948', '2009', '19000000', 'APBD', '-', '1671289995.png', '2022-10-16 08:39:37', '2022-12-17 07:13:15', NULL),
(17, 'samsudin', 'honda CS 1', 'Roda 2', 'KT 6190 MZ', '-', '-', '2009', '19000000', 'APBD', '-', '1671290027.png', '2022-10-16 08:40:29', '2022-12-17 07:13:47', NULL),
(18, 'sri wahyuni', 'honda revo 110cc', 'Roda 2', 'KT 4757 MZ', 'JBC2E-1050558', 'MH1JBC2179K047639', '2009', '15300000', 'APBD', '-', '1671290058.png', '2022-10-16 08:42:38', '2022-12-17 07:14:18', NULL),
(19, 'komarudin', 'honda revo 110cc', 'Roda 2', 'KT 4761 MZ', 'JBC2E-1053385', 'MH1JBC2199K052583', '2009', '15300000', 'APBD', '-', '1671290095.png', '2022-10-16 08:44:09', '2022-12-17 07:14:55', NULL),
(20, 'liana wulandari', 'honda revo 110cc', 'Roda 2', 'KT 4763 MZ', 'JBC2E-1053328', 'MH1JBC2179K052579', '2009', '15300000', 'APBD', '-', '1671290127.png', '2022-10-16 08:45:58', '2022-12-17 07:15:27', NULL),
(21, 'sofyan hamdani', 'honda revo 110cc', 'Roda 2', 'KT 4766 MZ', 'JBC2E-1053397', 'MH1JB2149K052605', '2009', '15300000', '', '-', '1671290162.png', '2022-10-16 08:48:56', '2022-12-17 07:16:02', NULL),
(22, 'iwan setiawan', 'honda revo 110cc', 'Roda 2', 'KT 4768 MZ', 'JBC2E-1050480', 'MH1JBC2109K047661', '2009', '15300000', 'APBD', '-', '1671290212.png', '2022-10-16 08:50:32', '2022-12-17 07:16:52', NULL),
(23, 'Pool dinas', 'toyota hilux', 'Roda 4', 'KT 8023 BZ', '1TR - 6388739', 'MROAW12G470004454', '2008', '120000000', 'APBD', '-', '1671290286.png', '2022-10-20 06:48:41', '2022-12-17 07:18:06', NULL),
(24, 'Ir. Devis Hendra, MP', 'toyota avanza', 'Roda 4', 'KT 1746 BZ', 'DC67046', 'MHFMIBA3J8K071529', '2008', '124992000', 'APBD', '-', '1671290339.png', '2022-10-20 06:51:05', '2022-12-17 07:18:59', NULL),
(25, 'Pool dinas', 'toyota avanza', 'Roda 4', 'KT 1751 MZ', 'DC67146', 'MHFMIBA3J8K071001', '2008', '124992000', 'APBD', '-', '1671290373.png', '2022-10-20 06:54:41', '2022-12-17 07:19:33', NULL),
(26, 'Pool dinas', 'mitsubishi strada', 'Roda 4', 'KT 8176 BZ', '4M4OUAB5528', 'MMBJNKB709D037937', '2008', '0', 'APBD', '-', '1671290435.png', '2022-10-20 06:57:20', '2022-12-17 07:20:35', NULL),
(27, 'Pool KDP', 'mitsubishi strada', 'Roda 4', 'KT 8202 BZ', '4M4OUAB6136', 'MMBJNKB709D042918', '2008', '0', 'APBD', '-', '1671290469.png', '2022-10-20 06:59:32', '2022-12-17 07:21:09', NULL),
(28, 'UPTD SPMA', 'L300 station wagon', 'Roda 4', 'KT 1634 BZ', '4D56C-D12297', 'MHMLOWY398K001502', '2008', '170000000', 'APBD', '-', '1671290504.png', '2022-10-20 07:01:20', '2022-12-17 07:21:44', NULL),
(29, 'pool UPTD PTPH', 'suzuki APV', 'Roda 4', 'KT 1254 BZ', 'G15AID193769', 'MHYGDN42V9J327577', '2009', '167832000', 'APBD', '-', '1671290533.png', '2022-10-20 07:02:53', '2022-12-17 07:22:13', NULL),
(30, 'Ir. Erry Eriadi', 'toyota rush', 'Roda 4', 'KT 1264 BZ', 'DBH5466', 'MHF2CJ2J9K011796', '2009', '0', 'APBD', '-', '1671290566.png', '2022-10-20 07:04:37', '2022-12-17 07:22:46', NULL),
(31, 'Ir. Hj. Rini S., M.Si', 'toyota rush', 'Roda 4', 'KT 1261 BZ', 'DBH5726', 'MHFE2CJ2J9K011859', '2009', '0', 'APBD', '-', '1671290601.png', '2022-10-20 07:06:28', '2022-12-17 07:23:21', NULL),
(32, 'Ir. M. Alimuddin, MM', 'toyota rush', 'Roda 4', 'KT 1263 BZ', 'DBH5090', 'MHFE2CJ2J9K011778', '2009', '0', 'APBD', '-', '1671290641.png', '2022-10-20 07:08:50', '2022-12-17 07:24:01', NULL),
(33, 'Pool dinas', 'toyota avanza GMT', 'Roda 4', 'KT 1239 BZ', 'K3DE40281', 'MHFMIBA3J9K1711192', '2009', '156000000', 'APBD', '-', '1671290679.png', '2022-10-20 07:10:12', '2022-12-17 07:24:39', NULL),
(34, 'Pool dinas', 'mitsubishi pajero', 'Roda 4', 'KT 1275 BZ', '4D56UCBR3681', 'MMBGNKH409F009533', '2009', '0', 'APBD', '-', '1671290719.png', '2022-10-20 07:11:34', '2022-12-17 07:25:19', NULL),
(35, 'Pool dinas', 'toyota rush', 'Roda 4', 'KT 1262 BZ', 'DBG7621', 'MHFE2CJ2J9K011225', '2009', '0', 'APBD', '-', '1671290754.png', '2022-10-20 07:12:43', '2022-12-17 07:25:54', NULL),
(36, 'Pool dinas', 'nissan x-trail', 'Roda 4', 'KT 1934 BZ', 'MR20-002711R', 'MHBF2CC3F9J001501', '2009', '343000000', 'APBD', '-', '1671290798.png', '2022-10-20 07:15:01', '2022-12-17 07:26:38', NULL),
(37, 'Pool dinas', 'mitsubishi pajero', 'Roda 4', 'KT 1844 BZ', '4D56UCCY9756', 'MMBGYKH40CF0022825', '2011', '0', 'APBD', '-', '1671290828.png', '2022-10-20 07:16:57', '2022-12-17 07:27:08', NULL),
(38, 'Pool KKP', 'isuzu station wagon', 'Roda 4', 'KT 1335 BZ', '1TR-6838404', 'MHFXW42G592149153', '2013', '0', 'APBD', '-', '1671290866.png', '2022-10-20 07:18:31', '2022-12-17 07:27:46', NULL),
(39, 'Pool Prod.TP', 'toyota hilux', 'Roda 4', 'KT 8440 BZ', '2KDS147190', 'MROFR22G2D075J431', '2013', '0', 'APBD', '-', '1671290898.png', '2022-10-20 07:20:20', '2022-12-17 07:28:18', NULL),
(40, 'Pool SEK', 'toyota hilux', 'Roda 4', 'KT 8392 BZ', '2KDS1733430', 'MROFR22G1D0753856', '2013', '0', 'APBD', '-', '1671290928.png', '2022-10-20 07:21:39', '2022-12-17 07:28:48', NULL),
(41, 'iskamto', 'honda revo 110cc', 'Roda 2', 'KT 4769 MZ', 'JBC2E-1050459', 'MH1JBC2109K047658', '2009', '15300000', 'APBD', '-', '1671290981.png', '2022-11-05 04:57:55', '2022-12-17 07:29:41', NULL),
(42, 'Nor Aida', 'honda revo 110cc', 'Roda 2', 'KT 4771 MZ', 'JBC2E1050474', 'MH1JBC2169K047650', '2009', '15300000', 'APBD', '-', '1671291008.png', '2022-11-05 04:59:32', '2022-12-17 07:30:08', NULL),
(43, 'Suwarjo', 'honda revo 110cc', 'Roda 2', 'KT 4775 MZ', 'JBC2E-1050542', 'MH1JBC2129K052036', '2009', '15300000', 'APBD', '-', '1671291060.png', '2022-11-05 05:00:55', '2022-12-17 07:31:00', NULL),
(44, 'eka bandarayani', 'honda revo 110cc', 'Roda 2', 'KT 4776 MZ', 'JBC2E-1052876', 'MH1JBC2139K052062', '2009', '15300000', 'APBD', '-', '1671291087.png', '2022-11-05 05:02:17', '2022-12-17 07:31:27', NULL),
(45, 'dedy gunawan', 'honda revo 110cc', 'Roda 2', 'KT 4777 MZ', 'JBC2E-1052868', 'MH1JBC2139K052112', '2009', '15300000', 'APBD', '-', '1671291131.png', '2022-11-05 05:03:31', '2022-12-17 07:32:11', NULL),
(46, 'rustiyanti', 'honda revo 110cc', 'Roda 2', 'KT 4781 MZ', 'JBC2E-1050543', 'MH1JBC2189K052042', '2009', '15300000', 'APBD', '-', '1671291167.png', '2022-11-05 05:05:10', '2022-12-17 07:32:47', NULL),
(47, 'syamsuriaty, SP', 'honda revo 110cc', 'Roda 2', 'KT 4783 MZ', 'JBC2E-1052896', 'MH1JBC2179K052078', '2009', '15300000', 'APBD', '-', '1671291206.png', '2022-11-05 05:06:44', '2022-12-17 07:33:26', NULL),
(48, 'sumarlin', 'honda revo 110cc', 'Roda 2', 'KT 4801 MZ', 'JBC2E-1050531', 'MH1JBC2119KO52030', '2009', '15300000', 'APBD', '-', '1671291232.png', '2022-11-05 05:07:57', '2022-12-17 07:33:52', NULL),
(49, 'heru sumantri', 'honda revo 110cc', 'Roda 2', 'KT 4804 MZ', '-', '-', '2009', '15300000', 'APBD', '-', '1671460812.png', '2022-11-05 05:08:46', '2022-12-19 06:40:12', NULL),
(50, 'Ir. Diah Adiaty Yahya, M. MT', 'honda revo 110cc', 'Roda 2', 'KT 6198 BZ', '-', '-', '2009', '15300000', 'APBD', '-', '1671460844.png', '2022-11-05 05:10:19', '2022-12-19 06:40:44', NULL),
(51, 'Pool SEK', 'kawasaki ninja 250R', 'Roda 2', 'KT 4969 MZ', '-', '-', '2009', '67140000', 'APBD', '-', '1671460889.png', '2022-11-05 05:11:16', '2022-12-19 06:41:29', NULL),
(52, 'hernita', 'vega ZR 110cc', 'Roda 2', 'KT 3557 B', '-', '-', '2009', '0', 'APBD', '-', '1671460936.png', '2022-11-05 05:12:10', '2022-12-19 06:42:16', NULL),
(53, 'POOL dinas', 'bajaj pulsar 180 DTSI', 'Roda 2', 'KT 6521 BZ', 'DJGBSM60757', 'MD2DJ17D6ACM01415', '2010', '0', 'APBD', '-', '1671460982.png', '2022-11-05 05:13:32', '2022-12-19 06:43:02', NULL),
(62, 'suriansyah', 'honda supra X 125', 'Roda 2', 'KT 6197 BZ', '-', '-', '2011', '17545000', 'APBD', '-', '1671461073.png', '2022-11-05 06:35:29', '2022-12-19 06:44:33', NULL),
(63, 'umilia wati', 'honda supra X 125', 'Roda 2', 'KT 6202 BZ', '-', '-', '2011', '17545000', 'APBD', '-', '1671463491.png', '2022-11-05 06:39:01', '2022-12-19 07:24:51', NULL),
(64, 'budi harsono', 'honda supra X 125', 'Roda 2', 'KT 6205 BZ', '-', '-', '2011', '17545000', 'APBD', '-', '1671463519.png', '2022-11-05 06:40:04', '2022-12-19 07:25:19', NULL),
(65, 'supini', 'honda vario techno CBS', 'Roda 2', 'KT 6203 MZ', '-', '-', '2011', '16635000', 'APBD', '-', '1671463552.png', '2022-11-05 06:41:25', '2022-12-19 07:25:52', NULL),
(66, 'dimas aprianoor', 'kawasaki LX 150cc', 'Roda 2', 'KT 3251 MZ', '-', '-', '2012', '0', 'APBD', '-', '1671463586.png', '2022-11-05 06:43:31', '2022-12-19 07:26:26', NULL),
(67, 'ridho tantawi', 'honda megapro', 'Roda 2', 'KT 3346 MZ', '-', '-', '2013', '19544000', 'APBD', '-', '1671463614.png', '2022-11-05 06:44:39', '2022-12-19 07:26:54', NULL),
(68, 'supriyanto', 'honda megapro', 'Roda 2', 'KT 3706 MZ', '-', '-', '2013', '19544000', 'APBD', '-', '1671463652.png', '2022-11-05 06:45:44', '2022-12-19 07:27:32', NULL),
(69, 'elyana tri yanuarti', 'honda supra X 125', 'Roda 2', 'KT 4943 MZ', '-', '-', '-', '0', 'APBD', '-', '1671463683.png', '2022-11-05 06:47:05', '2022-12-19 07:28:03', NULL),
(70, 'mariatul qibtiah', 'honda supra X 125', 'Roda 2', 'KT 4935 MZ', '-', '-', '-', '0', 'APBD', '-', '1671463745.png', '2022-11-05 06:48:05', '2022-12-19 07:29:05', NULL),
(71, 'kukuh', 'honda supra X 125', 'Roda 2', 'KT 4949 MZ', '-', '-', '-', '0', 'APBD', '-', '1671463805.png', '2022-11-05 06:49:24', '2022-12-19 07:30:05', NULL),
(72, 'mohadi', 'honda supra X 125', 'Roda 2', 'KT 4948 MZ', '-', '-', '-', '0', 'APBD', '-', '1671463842.png', '2022-11-05 06:50:30', '2022-12-19 07:30:42', NULL),
(73, 'mulyadi agus', 'honda supra X 125', 'Roda 2', 'KT 4944 MZ', '-', '-', '-', '0', 'APBD', '-', '1671463873.png', '2022-11-05 06:51:12', '2022-12-19 07:31:13', NULL),
(74, 'Pool dinas', 'honda megapro', 'Roda 2', 'KT 4920 MZ', '-', '-', '2009', '0', 'APBD', 'rusak ringan', '1671463919.png', '2022-11-05 06:52:05', '2022-12-19 07:31:59', NULL),
(75, 'Pool dinas', 'honda megapro', 'Roda 2', 'KT 4926 MZ', '-', '-', '2009', '0', 'APBD', 'rusak ringan', '1671463946.png', '2022-11-05 06:53:31', '2022-12-19 07:32:26', NULL),
(76, 'Pool dinas', 'honda megapro', 'Roda 2', 'KT 4922 MZ', '-', '-', '2009', '0', 'APBD', 'rusak ringan', '1671463974.png', '2022-11-05 06:54:33', '2022-12-19 07:32:54', NULL),
(77, 'siti mayasari', 'honda supra X 125', 'Roda 2', 'KT 4939 MZ', '-', '-', '-', '0', 'APBD', '-', '1671464003.png', '2022-11-05 06:55:13', '2022-12-19 07:33:23', NULL);

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(57, '2021_12_12_084231_create_bibit', 1),
(58, '2021_12_14_090652_create_petani', 1),
(59, '2022_01_03_150454_create_kelompok', 1),
(60, '2022_10_14_094505_create_dafken_table', 1),
(61, '2022_10_15_051223_create_bayarpajak_table', 1),
(62, '2022_10_15_051602_create_suratkuasa_table', 2),
(63, '2022_10_22_152715_create_perbaruanplat_table', 3),
(64, '2022_10_25_115352_create_blmbayar_table', 4);

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
-- Table structure for table `perbaruanplat`
--

CREATE TABLE `perbaruanplat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dafken_id` bigint(20) UNSIGNED NOT NULL,
  `pergantian_plat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berganti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perbaruanplat`
--

INSERT INTO `perbaruanplat` (`id`, `dafken_id`, `pergantian_plat`, `masa_berganti`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 3, '5 kali', '2022', 'sudah berganti', '2022-11-05 07:31:58', '2022-11-05 07:31:58', NULL),
(4, 4, '4 kali', '2024', 'belum berganti', '2022-11-05 07:33:29', '2022-11-05 07:33:29', NULL),
(5, 5, '3 kali', '2024', 'belum berganti', '2022-11-05 07:34:21', '2022-11-05 07:34:21', NULL),
(6, 6, '3 kali', '2026', 'belum berganti', '2022-11-05 07:35:28', '2022-11-05 07:35:28', NULL),
(7, 7, '2 kali', '2023', 'belum berganti', '2022-11-05 07:36:12', '2022-11-05 07:36:12', NULL),
(8, 8, '2 kali', '2023', 'belum berganti', '2022-11-05 07:36:37', '2022-11-05 07:36:37', NULL),
(9, 9, '2 kali', '2023', 'belum berganti', '2022-11-05 07:37:37', '2022-11-05 07:37:37', NULL),
(11, 10, '2 kali', '2023', 'belum berganti', '2022-11-05 07:38:34', '2022-11-05 07:38:34', NULL),
(12, 11, '2 kali', '2023', 'belum berganti', '2022-11-05 07:39:21', '2022-11-05 07:39:21', NULL),
(13, 12, '2 kali', '2023', 'belum berganti', '2022-11-05 07:39:42', '2022-11-05 07:39:42', NULL),
(14, 13, '2 kali', '2023', 'belum berganti', '2022-11-05 07:41:39', '2022-11-05 07:41:39', NULL),
(15, 14, '2 kali', '2023', 'belum berganti', '2022-11-05 07:42:02', '2022-11-05 07:42:02', NULL),
(16, 15, '2 kali', '2023', 'belum berganti', '2022-11-05 07:42:26', '2022-11-05 07:42:26', NULL),
(17, 16, '2 kali', '2024', 'belum berganti', '2022-11-05 07:43:38', '2022-11-05 07:43:38', NULL),
(18, 17, '2 kali', '2024', 'belum berganti', '2022-11-05 07:44:13', '2022-11-05 07:44:13', NULL),
(19, 18, '2 kali', '2024', 'belum berganti', '2022-11-05 07:44:35', '2022-11-05 07:44:35', NULL),
(20, 19, '2 kali', '2024', 'belum berganti', '2022-11-05 07:45:10', '2022-11-05 07:45:10', NULL),
(21, 20, '2 kali', '2024', 'belum berganti', '2022-11-05 07:45:32', '2022-11-05 07:45:32', NULL),
(22, 21, '2 kali', '2024', 'belum berganti', '2022-11-05 07:45:58', '2022-11-05 07:45:58', NULL),
(23, 22, '2 kali', '2024', 'belum berganti', '2022-11-05 07:46:40', '2022-11-05 07:46:40', NULL),
(24, 23, '2 kali', '2023', 'belum berganti', '2022-11-05 23:31:03', '2022-11-05 23:31:03', NULL),
(25, 24, '2 kali', '2023', 'belum berganti', '2022-11-05 23:31:38', '2022-11-05 23:31:38', NULL),
(26, 25, '2 kali', '2023', 'belum berganti', '2022-11-05 23:32:02', '2022-11-05 23:32:02', NULL),
(27, 26, '2 kali', '2023', 'belum berganti', '2022-11-05 23:32:29', '2022-11-05 23:32:29', NULL),
(28, 27, '2 kali', '2023', 'belum berganti', '2022-11-05 23:32:56', '2022-11-05 23:32:56', NULL),
(29, 28, '2 kali', '2023', 'belum berganti', '2022-11-05 23:33:25', '2022-11-05 23:33:25', NULL),
(30, 29, '2 kali', '2024', 'belum berganti', '2022-11-05 23:34:19', '2022-11-05 23:34:19', NULL),
(31, 30, '2 kali', '2024', 'belum berganti', '2022-11-05 23:34:41', '2022-11-05 23:34:41', NULL),
(32, 31, '2 kali', '2024', 'belum berganti', '2022-11-05 23:35:08', '2022-11-05 23:35:08', NULL),
(33, 32, '2 kali', '2024', 'belum berganti', '2022-11-05 23:35:32', '2022-11-05 23:35:32', NULL),
(34, 33, '2 kali', '2024', 'belum berganti', '2022-11-05 23:36:10', '2022-11-05 23:36:10', NULL),
(35, 34, '2 kali', '2024', 'belum berganti', '2022-11-05 23:36:37', '2022-11-05 23:36:37', NULL),
(36, 35, '2 kali', '2024', 'belum berganti', '2022-11-05 23:37:18', '2022-11-05 23:37:18', NULL),
(37, 36, '2 kali', '2024', 'belum berganti', '2022-11-05 23:37:56', '2022-11-05 23:37:56', NULL),
(38, 37, '2 kali', '2026', 'belum berganti', '2022-11-05 23:38:37', '2022-11-05 23:38:37', NULL),
(39, 38, '1 kali', '2023', 'belum berganti', '2022-11-05 23:39:17', '2022-11-05 23:39:17', NULL),
(40, 39, '1 kali', '2023', 'belum berganti', '2022-11-05 23:39:49', '2022-11-05 23:39:49', NULL),
(41, 40, '1 kali', '2023', 'belum berganti', '2022-11-05 23:40:20', '2022-11-05 23:40:20', NULL),
(42, 41, '2 kali', '2024', 'belum berganti', '2022-11-05 23:41:32', '2022-11-05 23:41:32', NULL),
(43, 42, '2 kali', '2024', 'belum berganti', '2022-11-05 23:41:53', '2022-11-05 23:41:53', NULL),
(44, 43, '2 kali', '2024', 'belum berganti', '2022-11-05 23:42:16', '2022-11-05 23:42:16', NULL),
(45, 44, '2 kali', '2024', 'belum berganti', '2022-11-05 23:42:37', '2022-11-05 23:42:37', NULL),
(46, 45, '2 kali', '2024', 'belum berganti', '2022-11-05 23:43:00', '2022-11-05 23:43:00', NULL),
(47, 46, '2 kali', '2024', 'belum berganti', '2022-11-05 23:43:27', '2022-11-05 23:43:27', NULL),
(48, 47, '2 kali', '2024', 'belum berganti', '2022-11-05 23:43:53', '2022-11-05 23:43:53', NULL),
(49, 48, '2 kali', '2024', 'belum berganti', '2022-11-05 23:44:17', '2022-11-05 23:44:17', NULL),
(50, 49, '2 kali', '2024', 'belum berganti', '2022-11-05 23:44:43', '2022-11-05 23:44:43', NULL),
(51, 50, '2 kali', '2024', 'belum berganti', '2022-11-05 23:45:03', '2022-11-05 23:45:03', NULL),
(52, 51, '2 kali', '2024', 'belum berganti', '2022-11-05 23:45:23', '2022-11-05 23:45:23', NULL),
(53, 52, '2 kali', '2024', 'belum berganti', '2022-11-05 23:45:49', '2022-11-05 23:45:49', NULL),
(54, 53, '2 kali', '2025', 'belum berganti', '2022-11-05 23:46:32', '2022-11-05 23:46:32', NULL),
(56, 62, '2 kali', '2026', 'belum berganti', '2022-11-05 23:47:37', '2022-11-05 23:47:37', NULL),
(57, 63, '2 kali', '2026', 'belum berganti', '2022-11-05 23:48:11', '2022-11-05 23:48:11', NULL),
(58, 64, '2 kali', '2026', 'belum berganti', '2022-11-05 23:49:05', '2022-11-05 23:49:05', NULL),
(59, 65, '2 kali', '2026', 'belum berganti', '2022-11-05 23:49:31', '2022-11-05 23:49:31', NULL),
(60, 66, '2 kali', '2022', 'sudah berganti', '2022-11-05 23:50:07', '2022-11-05 23:50:07', NULL),
(61, 67, '1 kali', '2023', 'belum berganti', '2022-11-05 23:50:52', '2022-11-05 23:50:52', NULL),
(62, 68, '1 kali', '2023', 'belum berganti', '2022-11-05 23:51:11', '2022-11-05 23:51:11', NULL),
(63, 74, '2 kali', '2024', 'belum berganti', '2022-11-05 23:52:13', '2022-11-05 23:52:13', NULL),
(64, 75, '2 kali', '2024', 'belum berganti', '2022-11-05 23:52:36', '2022-11-05 23:52:36', NULL),
(65, 76, '2 kali', '2024', 'belum berganti', '2022-11-05 23:52:58', '2022-11-05 23:52:58', NULL);

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
-- Table structure for table `suratkuasa`
--

CREATE TABLE `suratkuasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dafken_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suratkuasa`
--

INSERT INTO `suratkuasa` (`id`, `dafken_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 3, '2023-01-11 19:07:11', '2023-01-11 19:07:11', NULL),
(10, 4, '2023-01-11 19:07:23', '2023-01-11 19:07:23', NULL),
(11, 5, '2023-01-11 19:07:37', '2023-01-11 19:07:37', NULL),
(12, 6, '2023-01-11 19:08:09', '2023-01-11 19:08:09', NULL),
(13, 9, '2023-01-11 19:08:21', '2023-01-11 19:08:21', NULL),
(14, 11, '2023-01-11 19:08:35', '2023-01-11 19:08:35', NULL),
(15, 12, '2023-01-11 19:08:58', '2023-01-11 19:08:58', NULL),
(16, 19, '2023-01-11 19:09:20', '2023-01-11 19:09:20', NULL),
(17, 23, '2023-01-11 19:10:28', '2023-01-11 19:10:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$sCEc9ljsS26RWi2sXB6p8.jcNBfYiVr8EujBqeSOQmJ09jaMU25/C', NULL, '2022-10-25 06:20:03', '2022-10-25 06:20:03'),
(11, 'user', 'user', 'user@gmail.com', NULL, '$2y$10$SIFegGAhtMu5D3UfTFaepuIsUKu5NZCSx8PzchzsTcDowWCfiO406', NULL, '2022-10-25 06:28:42', '2022-10-25 06:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayarselanjutnya`
--
ALTER TABLE `bayarselanjutnya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blmbayar_dafken_id_foreign` (`dafken_id`);

--
-- Indexes for table `blmlunas`
--
ALTER TABLE `blmlunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bayarpajak_dafken_id_foreign` (`dafken_id`);

--
-- Indexes for table `dafken`
--
ALTER TABLE `dafken`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perbaruanplat`
--
ALTER TABLE `perbaruanplat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perbaruanplat_dafken_id_foreign` (`dafken_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `suratkuasa`
--
ALTER TABLE `suratkuasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suratkuasa_dafken_id_foreign` (`dafken_id`);

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
-- AUTO_INCREMENT for table `bayarselanjutnya`
--
ALTER TABLE `bayarselanjutnya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `blmlunas`
--
ALTER TABLE `blmlunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `dafken`
--
ALTER TABLE `dafken`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `perbaruanplat`
--
ALTER TABLE `perbaruanplat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratkuasa`
--
ALTER TABLE `suratkuasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayarselanjutnya`
--
ALTER TABLE `bayarselanjutnya`
  ADD CONSTRAINT `blmbayar_dafken_id_foreign` FOREIGN KEY (`dafken_id`) REFERENCES `dafken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blmlunas`
--
ALTER TABLE `blmlunas`
  ADD CONSTRAINT `bayarpajak_dafken_id_foreign` FOREIGN KEY (`dafken_id`) REFERENCES `dafken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perbaruanplat`
--
ALTER TABLE `perbaruanplat`
  ADD CONSTRAINT `perbaruanplat_dafken_id_foreign` FOREIGN KEY (`dafken_id`) REFERENCES `dafken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suratkuasa`
--
ALTER TABLE `suratkuasa`
  ADD CONSTRAINT `suratkuasa_dafken_id_foreign` FOREIGN KEY (`dafken_id`) REFERENCES `dafken` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
