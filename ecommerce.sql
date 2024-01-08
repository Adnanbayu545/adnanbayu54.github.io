-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 05:43 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(112, 'abs', '123'),
(113, 'hri3hri3hr', 'sdhsidhishd'),
(114, '11', '11'),
(115, '11', '11'),
(116, '11', '11'),
(117, '11', '123'),
(118, '11', '123'),
(119, 'aaa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE `tbproduct` (
  `namaproduct` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` varchar(2000) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbproduct`
--

INSERT INTO `tbproduct` (`namaproduct`, `deskripsi`, `harga`, `stok`) VALUES
('j0000', '1331', '13', 3),
('sepatu', 'qq', '1000', 1000),
('qq', 'qq', '111', 111);

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomorhp` int(20) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `hargaproduk` varchar(20) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `alamatpengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`username`, `email`, `nomorhp`, `namaproduk`, `hargaproduk`, `pembayaran`, `alamatpengiriman`) VALUES
('lukman', 'LUKMAN@GMAIL', 19298, 'Produk1', '120.000', 'ShopeePay', 'WWWW\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
