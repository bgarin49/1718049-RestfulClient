-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 07:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_jpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'wpu-jpos', 1, 0, 0, NULL, 191220);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/tulungagung/index:get', 13, 1608703477, 'wpu-jpos'),
(2, 'uri:api/tulungagung/index:delete', 1, 1608703494, 'wpu-jpos'),
(3, 'uri:api/tulungagung/index:post', 2, 1608439063, 'wpu-jpos'),
(4, 'uri:api/tulungagung/index:put', 2, 1608439907, 'wpu-jpos');

-- --------------------------------------------------------

--
-- Table structure for table `tulungagung`
--

CREATE TABLE `tulungagung` (
  `id` int(11) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `desa` varchar(32) NOT NULL,
  `wilayah` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tulungagung`
--

INSERT INTO `tulungagung` (`id`, `kode_pos`, `desa`, `wilayah`) VALUES
(1, 66212, 'Kampungdalem', 'Tulungagung'),
(2, 66216, 'Tertek', 'Tulungagung'),
(3, 66224, 'Kedungwaru', 'Kedungwaru'),
(4, 66229, 'Bulusari', 'Kedungwaru'),
(5, 66234, 'Boyolangu', 'Kepuh'),
(6, 66293, 'Aryojeding', 'Rejotangan'),
(7, 66213, 'Botoran', 'Tulungagung'),
(8, 66217, 'Karangwaru', 'Tulungagung'),
(9, 66225, 'Rejoagung', 'Kedungwaru'),
(10, 66231, 'Gedangsewu', 'Boyolangu'),
(11, 66235, 'Karangrejo', 'Boyolangu'),
(12, 66281, 'Tunggangri', 'Kalidawir'),
(13, 66214, 'Panggungrejo', 'Tulungagung'),
(14, 66218, 'Jepun', 'Tulungagung'),
(15, 66232, 'Sobontoro', 'Boyolangu'),
(16, 66261, 'Batangsaren', 'Kauman'),
(17, 66219, 'Kepatihan', 'Tulungagung'),
(18, 66215, 'Kedungsoko', 'Tulungagung'),
(19, 66233, 'Beji', 'Boyolangu'),
(20, 66292, 'Pulosari', 'Ngunut'),
(21, 66227, 'Tawangsari', 'Kedungwaru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tulungagung`
--
ALTER TABLE `tulungagung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tulungagung`
--
ALTER TABLE `tulungagung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
