-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 03:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_faris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelfaris`
--

CREATE TABLE `tabelfaris` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelfaris`
--

INSERT INTO `tabelfaris` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(7, '320i', 'faris', 'bmw ', '2022-11-08', 'bmw 320i tahun 2014 jerman punya', 'pexels-photo-100653.jpeg', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_faris`
--

CREATE TABLE `user_faris` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_faris`
--

INSERT INTO `user_faris` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'farissalmanan', 'faris@gmail.com', '123456', '081287456789'),
(2, 'dadang', 'dadang@gmail.com', 'dadang', '085156437823'),
(3, 'lele', 'abc@gmail.com', '123', '029292992'),
(4, 'faris salmanan', 'faris149b@gmail.com', 'B8055ris', '081287427824'),
(5, 'aki dudung', 'dudung@gmail.com', 'dudung1', '081287427835'),
(6, 'risky', 'rizky@gmail.com', '123', '0812'),
(7, 'dadang', 'dadang@gmail.com', '123', '123445678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelfaris`
--
ALTER TABLE `tabelfaris`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_faris`
--
ALTER TABLE `user_faris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelfaris`
--
ALTER TABLE `tabelfaris`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_faris`
--
ALTER TABLE `user_faris`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
