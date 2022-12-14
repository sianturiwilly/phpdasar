-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` char(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Willi Sianturi', '92316073', 'prajudiwilliam10@gmail.com', 'Sistem Informasi', 'willi.jpg'),
(2, 'Darwis Purba', '91078933', 'darwispurba93@gmail.com', 'Hukum', 'Cristiano_Ronaldo_Portugal.jpg'),
(3, 'Willi', '55411549', 'willymusermufc@hotmail.com', 'Teknik Informatika', 'willi1.jpg'),
(4, 'Nike Ratnadilla', '74452033', 'nike1975@gmail.com', 'Psikologi', '294121575_117873404309820_8737278965127091866_n.jpg'),
(5, 'Nike Ardilla', '54029399', 'nikeardilla75@gmail.com', 'Hukum', 'gadis_ayu.jpg'),
(6, 'Harry Kane', '34002877', 'harrykane@gmail.com', 'Teknik Elektro', '36002911_10155277558837447_5597773740373966848_n.jpg'),
(10, 'Cristiano Ronaldo', '5432033', 'cristianoronaldo@gmail.com', 'Olahraga', 'Cristiano_Ronaldo_Portugal.jpg'),
(11, 'Mason Mount', '92209334', 'masonmount@yahoo.com', 'Teknik Mesin', '309306247_10158423814552447_8006655480584783785_n.jpg'),
(12, 'Prajudi William Chrisdeardo', '55411550', 'sianturiwilly374@yahoo.com', 'Teknik Informatika', 'willi.jpg'),
(13, 'Harry Kane England', '90112544', 'kane1993@yahoo.com', 'Teknik Industri', '309255147_10158423890627447_1902815608765748466_n.jpg'),
(14, 'Jude Bellingham', '2993488', 'judebellingham@gmail.com', 'Sastra Inggris', '309159089_10158423932692447_4160728332740279410_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'willi', '$2y$10$JplNIeA2ltxXTTFwv61LbONkKpbakhli9rs4XLEJe4rbHvIARXeyW'),
(2, 'admin', '$2y$10$WksQSCdjgngyOSLWEiULM.GAG//WRI896N1VxkNvDg3Pg5tLF/4Nu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
