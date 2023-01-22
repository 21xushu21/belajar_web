-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221006.cd15c26e1f
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 03:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skirpsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_csv`
--

CREATE TABLE `data_csv` (
  `id` int(25) NOT NULL,
  `data_csv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_csv`
--

INSERT INTO `data_csv` (`id`, `data_csv`) VALUES
(1, 'csv/8FPZIm6BbaliEYD5auWhGpPjRTwJqdVOU56c9iUg.csv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_csv`
--
ALTER TABLE `data_csv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_csv`
--
ALTER TABLE `data_csv`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
