-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ki`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sertifikat`
--

CREATE TABLE `data_sertifikat` (
  `id` int(11) NOT NULL,
  `no_sertifikat` varchar(50) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `jenis_pelatihan` varchar(100) NOT NULL,
  `pengesah` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ciphertext` text NOT NULL,
  `qrcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sertifikat`
--

INSERT INTO `data_sertifikat` (`id`, `no_sertifikat`, `nama_peserta`, `jenis_pelatihan`, `pengesah`, `tanggal`, `ciphertext`, `qrcode`) VALUES
(1, '345', 'Dodi', 'ABCD', ' 1 ', '2023-12-14', 'brPJkWTvJl6I5iAqOaXBBpe2X+ykl4UhMRtkzyc16QfhSy3nKujW05lPh4VPfQ/xdxjSdVFlPM9pco1L/oKbYLJT3wzxnQU3RxfIQfdych1JHyXTzXS279BSqAOie6e0toTdUq9t1itgf0xl7AcDA7CaL0dlZOOAF7gAh1qf9yU=', 'qrcode_6579dbd4314b2.png'),
(2, '29/X/3035', 'Dodi Wahyono', 'Pelatihan MS Word', ' 3 ', '2023-12-14', 'C/gW6VeOPdv18fvyNw7suGwgxx02h5Lkq1fjOkKauw9efUOZyN0NGlB2UE8nBsv99VItV+Qod8ymsMdZtsixZiQmmGUm0qEQeNOxaFFAmfLIp3MV7+ADgjQXiu80RL39jQpvuSvyWENMJrUQNVj7EABsL0jkMDpgFpaCWEIKnM0=', 'qrcode_657b24fedef31.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengesah`
--

CREATE TABLE `pengesah` (
  `id` int(11) NOT NULL,
  `nama_pengesah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengesah`
--

INSERT INTO `pengesah` (`id`, `nama_pengesah`) VALUES
(1, 'dodi'),
(3, 'Defri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sertifikat`
--
ALTER TABLE `data_sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengesah`
--
ALTER TABLE `pengesah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sertifikat`
--
ALTER TABLE `data_sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengesah`
--
ALTER TABLE `pengesah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
