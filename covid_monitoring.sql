-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `declaration`
--

CREATE TABLE `declaration` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `age` mediumint(3) NOT NULL,
  `gender` enum('Male','Female','Prefer Not To Say') NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `temperature` float UNSIGNED NOT NULL,
  `vaccinated` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `diagnosed` enum('Yes','No') NOT NULL,
  `encountered` enum('Yes','No') NOT NULL,
  `nationality` varchar(50) NOT NULL DEFAULT 'Filipino'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `declaration`
--

INSERT INTO `declaration` (`id`, `full_name`, `age`, `gender`, `mobile_no`, `temperature`, `vaccinated`, `diagnosed`, `encountered`, `nationality`) VALUES
(1, 'Joshua Boncalon 1', 30, 'Male', '09123456789', 36.5, 'Yes', 'No', 'Yes', 'Filipino'),
(2, 'Test User2', 16, 'Male', '09234567890', 35.8, 'Yes', 'No', 'Yes', 'Filipino'),
(3, 'Test Data3', 30, 'Female', '09123456789', 38.8, 'No', 'No', 'Yes', 'Indian'),
(5, 'Joshua Mhel', 30, 'Male', '12312431234134', 45, 'Yes', 'No', 'No', 'White'),
(6, 'wertw1', 2, 'Male', '1232312312312312', 23, 'Yes', 'No', 'No', 'sdfgsdfg'),
(7, 'asdfadfadf2', 3, 'Male', '2345234523452345', 23, 'Yes', 'No', 'No', 'gsdfgs23'),
(21, 'Joshua Mhel2', 33, 'Male', '123456776534', 0, 'Yes', 'No', 'No', 'fdgdfg'),
(44, 'Eushe Boncalon', 28, 'Female', '09199552829', 36, 'Yes', 'No', 'No', 'Filipino');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `declaration`
--
ALTER TABLE `declaration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
