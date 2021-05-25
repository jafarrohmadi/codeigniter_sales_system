-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 07:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elly`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kategori_barang` varchar(100) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_beli` varchar(100) DEFAULT NULL,
  `harga_jual` varchar(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kategori_barang`, `kode_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`, `satuan`) VALUES
(0, 'Alat Make Up', '14788615', 'Bedak Tabur', '11000', '12500', 190, 'pcs'),
(0, 'Alat Make Up', '16535492', 'Bedak Padat', '23500', '25000', 65, 'pcs'),
(0, 'Alat Make Up', '47042371', 'Pensil Alia', '15000', '17000', 245, 'pcs'),
(0, 'Alat Make Up', '99548108', 'Pelembab', '30000', '32000', 195, 'pcs'),
(0, 'Alat Make Up', '12753419', 'Consiller', '15000', '18000', 85, 'pcs'),
(0, 'Alat Make Up', '29460388', 'Sisir Jembut', '3000', '5000', 251, 'pcs'),
(0, 'Alat Make Up', '40875130', 'Handbody Lotion', '12500', '15000', 221, 'pcs'),
(0, 'Alat Make Up', '58547663', 'Sunblock', '24000', '26500', 80, 'pcs'),
(0, 'Alat Make Up', '63542600', 'Masker Wajah', '8000', '10000', 58, 'sachet'),
(0, 'Alat Make Up', '54437872', 'Masker Mata', '5000', '7000', 55, 'sachet'),
(0, 'Alat Make Up', '61412841', 'Minyak Wangi', '15000', '18000', 219, 'pcs'),
(0, 'Alat Make Up', '37051249', 'Mascarra', '45000', '48000', 205, 'pcs'),
(0, 'Alat Make Up', '94767177', 'Air Pembersih', '30000', '32000', 202, 'pcs'),
(0, 'Alat Make Up', '47402541', 'Eyeliner', '18000', '21000', 19, 'pcs'),
(0, 'Alat Make Up', '49958633', 'Serum Wajah', '23000', '25000', 230, 'pcs'),
(0, 'Alat Make Up', '47998406', 'Lipstik', '40000', '45000', 158, 'pcs'),
(0, 'Alat Mandi', '95057265', 'Sabun Batang', '2000', '3500', 195, 'pcs'),
(0, 'Alat Mandi', '16150521', 'Sabun Cair', '3000', '4500', 39, 'pcs'),
(0, 'Alat Mandi', '26233577', 'Shampo Botol', '13000', '15000', 258, 'pcs'),
(0, 'Alat Mandi', '29213372', 'Pasta Gigi', '10000', '13000', 193, 'pcs'),
(0, 'Alat Mandi', '48187113', 'Conditioner', '10000', '12000', 29, 'sachet'),
(0, 'Alat Mandi', '76371302', 'Sikat Gigi', '10000', '12000', 214, 'pcs'),
(0, 'Alat Mandi', '75446053', 'Spons Mandi', '5000', '7000', 83, 'pcs'),
(0, 'Alat Mandi', '88308112', 'Lulur Mandi', '15000', '18000', 277, 'pcs'),
(0, 'Alat Mandi', '90506663', 'Handuk', '30000', '35000', 91, 'pcs'),
(0, 'Alat Mandi', '47097881', 'Shampo Ecer', '350', '1000', 180, 'sachet'),
(0, 'Kebutuhan Rumah', '56547939', 'Spons Cuci Piring', '1000', '2000', 75, 'sachet'),
(0, 'Kebutuhan Rumah', '43270052', 'Sabun CuciPiring', '3000', '5000', 68, 'sachet'),
(0, 'Kebutuhan Rumah', '98500049', 'Deterjen', '3000', '5000', 189, 'sachet'),
(0, 'Kebutuhan Rumah', '66012097', 'Softenner', '5000', '7000', 225, 'pcs'),
(0, 'Kebutuhan Rumah', '21645210', 'Pembersih Lantai', '25000', '28000', 13, 'pcs'),
(0, 'Kebutuhan Rumah', '67732078', 'Pemutih Pakaian', '28000', '31000', 62, 'pcs'),
(0, 'Kebutuhan Rumah', '61289666', 'Sikat Baju', '5000', '7000', 288, 'pcs'),
(0, 'Kebutuhan Rumah', '96767029', 'Pelicin Pakaian', '3000', '5000', 279, 'sachet'),
(0, 'Kebutuhan Rumah', '33757651', 'Pengharum Ruangan', '80000', '85000', 62, 'pcs'),
(0, 'Kebutuhan Rumah', '23873830', 'Rokok', '15000', '20000', 151, 'pcs'),
(0, 'Kebutuhan Rumah', '97499397', 'Lampu', '10000', '12000', 55, 'pcs'),
(0, 'Kebutuhan Rumah', '64074312', 'Lem Perekat', '7000', '9000', 81, 'pcs'),
(0, 'Kebutuhan Rumah', '46758208', 'Kertas Minyak', '100', '500', 225, 'pcs'),
(0, 'Kebutuhan Rumah', '39044149', 'Air Isi Ulang Galon', '2500', '4500', 186, 'pcs'),
(0, 'Kebutuhan Rumah', '46527553', 'Gas LPG', '16000', '19000', 190, 'pcs'),
(0, 'Kebutuhan Rumah', '11403519', 'Sendal', '8000', '11000', 73, 'pcs'),
(0, 'Kebutuhan Rumah', '97951757', 'Gula', '10000', '13000', 251, 'kg'),
(0, 'Kebutuhan Rumah', '68902133', 'Kopi Sachet', '800', '1500', 70, 'sachet'),
(0, 'Kebutuhan Rumah', '46547315', 'Air Mineral Botol', '2000', '5000', 243, 'pcs'),
(0, 'Kebutuhan Rumah', '43625100', 'Air Kardusan', '18000', '23000', 58, 'pak');

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id` int(30) NOT NULL,
  `kode_barang` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `kategori_barang` varchar(100) DEFAULT NULL,
  `harga_jual` varchar(100) DEFAULT NULL,
  `Omset` varchar(100) DEFAULT NULL,
  `Penjualan` varchar(100) DEFAULT NULL,
  `stok_barang` int(100) DEFAULT NULL,
  `animo` varchar(100) DEFAULT NULL,
  `profit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(80) DEFAULT NULL,
  `nama_pemilik` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` (`id`, `nama_toko`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(1, 'Toserba Elly', 'Elly', '081299764535', 'Lamongan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `kategori_barang` varchar(100) DEFAULT NULL,
  `harga_barang` varchar(20) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `sub_total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `nama_barang`, `kategori_barang`, `harga_barang`, `jumlah_barang`, `satuan`, `sub_total`) VALUES
('PJ1621573114', 'Bedak Tabur', 'Alat Make Up', '12500', 110, 'pcs', '1375000'),
('PJ1621573139', 'Bedak Padat', 'Alat Make Up', '25000', 35, 'pcs', '875000'),
('PJ1621573158', 'Pensil Alia', 'Alat Make Up', '17000', 55, 'pcs', '935000'),
('PJ1621573180', 'Pelembab', 'Alat Make Up', '32000', 105, 'pcs', '3360000'),
('PJ1621573201', 'Consiller', 'Alat Make Up', '18000', 15, 'pcs', '270000'),
('PJ1621573226', 'Sisir Jembut', 'Alat Make Up', '5000', 49, 'pcs', '245000'),
('PJ1621573243', 'Handbody Lotion', 'Alat Make Up', '15000', 79, 'pcs', '1185000'),
('PJ1621573264', 'Sunblock', 'Alat Make Up', '26500', 20, 'pcs', '530000'),
('PJ1621573284', 'Masker Wajah', 'Alat Make Up', '10000', 42, 'sachet', '420000'),
('PJ1621573301', 'Masker Mata', 'Alat Make Up', '7000', 45, 'sachet', '315000'),
('PJ1621573319', 'Minyak Wangi', 'Alat Make Up', '18000', 81, 'pcs', '1458000'),
('PJ1621573335', 'Mascarra', 'Alat Make Up', '48000', 95, 'pcs', '4560000'),
('PJ1621573389', 'Air Pembersih', 'Alat Make Up', '32000', 98, 'pcs', '3136000'),
('PJ1621573413', 'Eyeliner', 'Alat Make Up', '21000', 81, 'pcs', '1701000'),
('PJ1621573431', 'Serum Wajah', 'Alat Make Up', '25000', 70, 'pcs', '1750000'),
('PJ1621573455', 'Lipstik', 'Alat Make Up', '45000', 142, 'pcs', '6390000'),
('PJ1621573623', 'Sabun Batang', 'Alat Mandi', '3500', 105, 'pcs', '367500'),
('PJ1621573642', 'Sabun Cair', 'Alat Mandi', '4500', 61, 'pcs', '274500'),
('PJ1621573670', 'Shampo Botol', 'Alat Mandi', '15000', 42, 'pcs', '630000'),
('PJ1621573689', 'Pasta Gigi', 'Alat Mandi', '13000', 107, 'pcs', '1391000'),
('PJ1621573706', 'Conditioner', 'Alat Mandi', '12000', 71, 'sachet', '852000'),
('PJ1621573777', 'Sikat Gigi', 'Alat Mandi', '12000', 86, 'pcs', '1032000'),
('PJ1621573804', 'Spons Mandi', 'Alat Mandi', '7000', 17, 'pcs', '119000'),
('PJ1621573823', 'Lulur Mandi', 'Alat Mandi', '18000', 23, 'pcs', '414000'),
('PJ1621573843', 'Handuk', 'Alat Mandi', '35000', 9, 'pcs', '315000'),
('PJ1621573856', 'Shampo Ecer', 'Alat Mandi', '1000', 120, 'sachet', '120000'),
('PJ1621574009', 'Spons Cuci Piring', 'Kebutuhan Rumah', '2000', 25, 'sachet', '50000'),
('PJ1621574091', 'Sabun CuciPiring', 'Kebutuhan Rumah', '5000', 112, 'sachet', '560000'),
('PJ1621574110', 'Deterjen', 'Kebutuhan Rumah', '5000', 111, 'sachet', '555000'),
('PJ1621574128', 'Softenner', 'Kebutuhan Rumah', '7000', 75, 'pcs', '525000'),
('PJ1621574256', 'Pembersih Lantai', 'Kebutuhan Rumah', '28000', 49, 'pcs', '1372000'),
('PJ1621574290', 'Pembersih Lantai', 'Kebutuhan Rumah', '28000', 38, 'pcs', '1064000'),
('PJ1621574390', 'Pemutih Pakaian', 'Kebutuhan Rumah', '31000', 38, 'pcs', '1178000'),
('PJ1621574405', 'Sikat Baju', 'Kebutuhan Rumah', '7000', 12, 'pcs', '84000'),
('PJ1621574423', 'Pelicin Pakaian', 'Kebutuhan Rumah', '5000', 21, 'sachet', '105000'),
('PJ1621574440', 'Pengharum Ruangan', 'Kebutuhan Rumah', '85000', 38, 'pcs', '3230000'),
('PJ1621574460', 'Rokok', 'Kebutuhan Rumah', '20000', 149, 'pcs', '2980000'),
('PJ1621574507', 'Lampu', 'Kebutuhan Rumah', '12000', 45, 'pcs', '540000'),
('PJ1621574525', 'Lem Perekat', 'Kebutuhan Rumah', '9000', 19, 'pcs', '171000'),
('PJ1621574541', 'Kertas Minyak', 'Kebutuhan Rumah', '500', 75, 'pcs', '37500'),
('PJ1621574558', 'Air Isi Ulang Galon', 'Kebutuhan Rumah', '4500', 114, 'pcs', '513000'),
('PJ1621574578', 'Gas LPG', 'Kebutuhan Rumah', '19000', 110, 'pcs', '2090000'),
('PJ1621574592', 'Sendal', 'Kebutuhan Rumah', '11000', 27, 'pcs', '297000'),
('PJ1621574606', 'Gula', 'Kebutuhan Rumah', '13000', 49, 'kg', '637000'),
('PJ1621574659', 'Kopi Sachet', 'Kebutuhan Rumah', '1500', 130, 'sachet', '195000'),
('PJ1621574681', 'Air Mineral Botol', 'Kebutuhan Rumah', '5000', 57, 'pcs', '285000'),
('PJ1621574694', 'Air Kardusan', 'Kebutuhan Rumah', '23000', 42, 'pak', '966000');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `kode_kasir` varchar(10) DEFAULT NULL,
  `nama_kasir` varchar(100) DEFAULT NULL,
  `username_kasir` varchar(20) DEFAULT NULL,
  `password_kasir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `kode_kasir`, `nama_kasir`, `username_kasir`, `password_kasir`) VALUES
(2, 'KASIR - 58', 'yulia', 'KSR58', 'yulia');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `kode_pengguna` varchar(10) DEFAULT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username_pengguna` varchar(20) DEFAULT NULL,
  `password_pengguna` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `kode_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`) VALUES
(1, 'PGN17', 'elly', 'elly', 'elly');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(20) DEFAULT NULL,
  `nama_kasir` varchar(100) DEFAULT NULL,
  `tgl_penjualan` varchar(20) DEFAULT NULL,
  `jam_penjualan` varchar(20) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `nama_kasir`, `tgl_penjualan`, `jam_penjualan`, `total`) VALUES
(0, 'PJ1621573114', 'elly', '21/05/2021', '11:58:34', 1375000),
(0, 'PJ1621573139', 'elly', '21/05/2021', '11:58:59', 875000),
(0, 'PJ1621573158', 'elly', '21/05/2021', '11:59:18', 935000),
(0, 'PJ1621573180', 'elly', '21/05/2021', '11:59:40', 3360000),
(0, 'PJ1621573201', 'elly', '21/05/2021', '12:00:01', 270000),
(0, 'PJ1621573226', 'elly', '21/05/2021', '12:00:26', 245000),
(0, 'PJ1621573243', 'elly', '21/05/2021', '12:00:43', 1185000),
(0, 'PJ1621573264', 'elly', '21/05/2021', '12:01:04', 530000),
(0, 'PJ1621573284', 'elly', '21/05/2021', '12:01:24', 420000),
(0, 'PJ1621573301', 'elly', '21/05/2021', '12:01:41', 315000),
(0, 'PJ1621573319', 'elly', '21/05/2021', '12:01:59', 1458000),
(0, 'PJ1621573335', 'elly', '21/05/2021', '12:02:15', 4560000),
(0, 'PJ1621573389', 'elly', '21/05/2021', '12:03:09', 3136000),
(0, 'PJ1621573413', 'elly', '21/05/2021', '12:03:33', 1701000),
(0, 'PJ1621573431', 'elly', '21/05/2021', '12:03:51', 1750000),
(0, 'PJ1621573455', 'elly', '21/05/2021', '12:04:15', 6390000),
(0, 'PJ1621573623', 'elly', '21/05/2021', '12:07:03', 367500),
(0, 'PJ1621573642', 'elly', '21/05/2021', '12:07:22', 274500),
(0, 'PJ1621573670', 'elly', '21/05/2021', '12:07:50', 630000),
(0, 'PJ1621573689', 'elly', '21/05/2021', '12:08:09', 1391000),
(0, 'PJ1621573706', 'elly', '21/05/2021', '12:08:26', 852000),
(0, 'PJ1621573777', 'elly', '21/05/2021', '12:09:37', 1032000),
(0, 'PJ1621573804', 'elly', '21/05/2021', '12:10:04', 119000),
(0, 'PJ1621573823', 'elly', '21/05/2021', '12:10:23', 414000),
(0, 'PJ1621573843', 'elly', '21/05/2021', '12:10:43', 315000),
(0, 'PJ1621573856', 'elly', '21/05/2021', '12:10:56', 120000),
(0, 'PJ1621574009', 'elly', '21/05/2021', '12:13:29', 50000),
(0, 'PJ1621574091', 'elly', '21/05/2021', '12:14:51', 560000),
(0, 'PJ1621574110', 'elly', '21/05/2021', '12:15:10', 555000),
(0, 'PJ1621574128', 'elly', '21/05/2021', '12:15:28', 525000),
(0, 'PJ1621574256', 'elly', '21/05/2021', '12:17:36', 1372000),
(0, 'PJ1621574290', 'elly', '21/05/2021', '12:18:10', 1064000),
(0, 'PJ1621574390', 'elly', '21/05/2021', '12:19:50', 1178000),
(0, 'PJ1621574405', 'elly', '21/05/2021', '12:20:05', 84000),
(0, 'PJ1621574423', 'elly', '21/05/2021', '12:20:23', 105000),
(0, 'PJ1621574440', 'elly', '21/05/2021', '12:20:40', 3230000),
(0, 'PJ1621574460', 'elly', '21/05/2021', '12:21:00', 2980000),
(0, 'PJ1621574507', 'elly', '21/05/2021', '12:21:47', 540000),
(0, 'PJ1621574525', 'elly', '21/05/2021', '12:22:05', 171000),
(0, 'PJ1621574541', 'elly', '21/05/2021', '12:22:21', 37500),
(0, 'PJ1621574558', 'elly', '21/05/2021', '12:22:38', 513000),
(0, 'PJ1621574578', 'elly', '21/05/2021', '12:22:58', 2090000),
(0, 'PJ1621574592', 'elly', '21/05/2021', '12:23:12', 297000),
(0, 'PJ1621574606', 'elly', '21/05/2021', '12:23:26', 637000),
(0, 'PJ1621574659', 'elly', '21/05/2021', '12:24:19', 195000),
(0, 'PJ1621574681', 'elly', '21/05/2021', '12:24:41', 285000),
(0, 'PJ1621574694', 'elly', '21/05/2021', '12:24:54', 966000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
