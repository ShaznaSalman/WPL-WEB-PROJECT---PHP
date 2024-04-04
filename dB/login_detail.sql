-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 05:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `customer_ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNumber` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`customer_ID`, `username`, `fullname`, `email`, `mobileNumber`, `password`) VALUES
(1, 'gg', '', 'wimukthiudana789@gmail.com', 1234555, '1212'),
(3, 'shaz', '', 'wergbn@gmail.com', 12221, '122'),
(4, 'f', '', 'shaz@gmail.com', 12221, 'Aa123456'),
(15, 'ggj', '', 'wimukthiudana789@gmail.com', 12345677, 'Aa123456'),
(16, 'shaz', '', 'shaz@gmail.com', 1234567799, 'Aa123456'),
(17, 'kk', '', 'h@.com', 1234567700, 'Aa121212'),
(18, 'bbb', '', 'ks@gmail.com', 1234567799, 'Aa111111'),
(23, 'kudse221f-004', 'hjgfiywegfiydsbb', 'shaaz@gmail.com', 1234555022, 'Aa123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
  MODIFY `customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
