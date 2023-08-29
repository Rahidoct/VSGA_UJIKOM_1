-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2023 at 04:43 AM
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
-- Database: `db_ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_beasiswa`
--

CREATE TABLE `pendaftaran_beasiswa` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `semester` int NOT NULL,
  `ipk` decimal(4,2) NOT NULL,
  `pilihan_beasiswa` varchar(50) NOT NULL,
  `file_berkas` varchar(255) NOT NULL,
  `status_ajuan` enum('Belum Diverifikasi','Terverifikasi','Ditolak','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendaftaran_beasiswa`
--

INSERT INTO `pendaftaran_beasiswa` (`id`, `nama_lengkap`, `email`, `nomor_hp`, `semester`, `ipk`, `pilihan_beasiswa`, `file_berkas`, `status_ajuan`) VALUES
(1, 'Rahmat Hidayat', 'rahidoct@gmail.com', '089676113276', 7, '3.25', 'Akademik', 'qwerty.pdf', 'Terverifikasi'),
(2, 'Rasa Coding', 'rasacoding@gmail.com', '082211668896', 7, '3.50', 'Akademik', 'uiopasd.pdf', 'Belum Diverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_beasiswa`
--
ALTER TABLE `pendaftaran_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_beasiswa`
--
ALTER TABLE `pendaftaran_beasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
