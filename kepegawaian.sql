-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2024 at 03:59 PM
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
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomer_seluler` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis_kelamin`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `nomer_seluler`, `status_perkawinan`) VALUES
(1, 'Safarina', 'Perempuan', 'Jln. Simpang Line Pipa, Padang Sakti - Lhokseumawe', 'Kutablang', '1998-03-05', '081263132787', 'Belum Nikah'),
(2, 'Nurfazillah', 'Perempuan', 'Payabakong Aceh Utara', 'Lhokseumawe', '2000-07-26', '082234345656', 'Belum Nikah'),
(3, 'Sucita Amalia', 'Perempuan', 'Jl.Balesetui Gp. Abeuk Jaloh', 'Abeuk Jaloh', '2000-07-07', '081269157303', 'Belum Nikah'),
(4, 'Cut Shavira Nabila', 'Perempuan', 'Jl. Gampong Raya Tambo - Kapa', 'Pulo Redeup', '2000-04-02', '085349778166', 'Nikah'),
(5, 'M. Zurfaqi', 'Laki -Laki', 'Jl. Jangka Kec. Peusangan', 'Pante Piyeu', '1997-07-03', '082276637370', 'Belum Nikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
