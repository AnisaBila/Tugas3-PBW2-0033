-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 02:37 AM
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
-- Database: `db_php_0033`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_0033`
--

CREATE TABLE `tb_users_0033` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users_0033`
--

INSERT INTO `tb_users_0033` (`id`, `nama`, `jenis_kelamin`, `alamat`, `nohp`, `gambar`) VALUES
(1, 'Ari Putra k', 'Laki-Laki', 'Bojong', '081234566712', ''),
(2, 'Maharani', 'Perempuan', 'Binagriya Pekalongan', '085123456789', ''),
(3, 'Megantara Wati', 'Perempuan', 'Wiradesa', '081237645712', ''),
(5, 'Anisa', 'Perempuan', 'Manunggal', '08912345674', ''),
(7, 'winter minjeong', '', 'Kr', '0891234567', 0x53637265656e73686f7420323032342d31302d3131203132353935382e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users_0033`
--
ALTER TABLE `tb_users_0033`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users_0033`
--
ALTER TABLE `tb_users_0033`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
