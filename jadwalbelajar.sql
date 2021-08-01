-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 06:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edulabbdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwalbelajar`
--

CREATE TABLE `jadwalbelajar` (
  `id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwalbelajar`
--

INSERT INTO `jadwalbelajar` (`id`, `hari`, `tanggal`, `kelas`, `subjects`) VALUES
(1122132, 'Thursday', '2021-08-05', '11-B', 'Fisika'),
(1122134, 'Wednesday', '2021-08-04', '12-C', 'Biologi'),
(1122136, 'Thursday', '2021-08-05', '12-C', 'Biologi'),
(1122138, 'Monday', '2021-07-26', '11-A', 'Biologi'),
(1122139, 'Friday', '2021-07-02', '12-A', 'Kimia'),
(1122140, 'Tuesday', '2021-08-03', '11-B', 'Fisika'),
(1122141, 'Monday', '2021-07-11', '11-A', 'Biologi'),
(1122142, 'Thursday', '2021-07-08', '12-B', 'Biologi'),
(1122143, 'Monday', '2021-08-02', '12-A', 'Fisika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalbelajar`
--
ALTER TABLE `jadwalbelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalbelajar`
--
ALTER TABLE `jadwalbelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
