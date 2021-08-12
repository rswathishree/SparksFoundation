-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 05:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `banksystem`
--

CREATE TABLE `banksystem` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banksystem`
--

INSERT INTO `banksystem` (`ID`, `Name`, `Email`, `Amount`) VALUES
(1, 'Selvi', 'selvi@gmail.com', 4996),
(2, 'Sweety', 'Sweety@gmail.com', 6000),
(3, 'Ramu', 'ramu@gmail.com', 6900),
(4, 'Mala', 'mala@gmail.com', 7000),
(5, 'Raju', 'raju@gmail.com', 7000),
(6, 'Sita', 'sita@gmail.com', 1490),
(7, 'Latha', 'latha@gmail.com', 5913),
(8, 'Neela', 'neela@gmail.com', 4010),
(9, 'Kamal', 'kamal@gmai.com', 5001),
(10, 'Cutie', 'cutie@gmail.com', 8678);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(20) NOT NULL,
  `s_id` int(30) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `r_id` int(30) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `Amount` int(50) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `s_id`, `sender_name`, `r_id`, `receiver_name`, `Amount`, `Time`) VALUES
(1, 3, 'Ramu', 8, 'Neela', 1000, '2021-08-11 17:55:52'),
(2, 5, 'Raju', 9, 'Kamal', 102, '2021-08-11 17:59:03'),
(3, 1, 'Selvi', 7, 'Latha', 780, '2021-08-11 20:40:03'),
(4, 5, 'Raju', 3, 'Ramu', 900, '2021-08-11 20:51:14'),
(5, 7, 'Latha', 1, 'Selvi', 996, '2021-08-11 20:55:12'),
(6, 10, 'Cutie', 2, 'Sweety', 963, '2021-08-11 21:00:43'),
(7, 4, 'Mala', 10, 'Cutie', 678, '2021-08-11 21:22:30'),
(8, 2, 'Sweety', 7, 'Latha', 913, '2021-08-11 21:31:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banksystem`
--
ALTER TABLE `banksystem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banksystem`
--
ALTER TABLE `banksystem`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
