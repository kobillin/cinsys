-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 01:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations_invent`
--

CREATE TABLE `registrations_invent` (
  `id` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `assigned_to` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Working',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations_invent`
--

INSERT INTO `registrations_invent` (`id`, `description`, `brand`, `model`, `serial_no`, `location`, `department`, `assigned_to`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'CPU', 'HP', 'HP Prodesk 400 g3', 'CZC63bc0j9', 'PSM', 'ICT', 'Khaoya', 'Working', '2021-01-20 09:08:02', '2021-01-20 09:08:02', 1),
(2, 'Monitor', 'HP', 'HP Pro display', '6cm6161GSN', 'PSM', 'ICT', 'Khaoya', 'Working', '2021-01-20 09:52:47', '2021-01-20 09:52:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `role` varchar(10) DEFAULT 'user',
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `mobile`, `username`, `email`, `password`, `created_at`, `updated_at`, `role`, `status`) VALUES
(1, 'Abraham Kipsang', '0711976071', 'Kipsang', 'kipsang@gmail.com', 'admin', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations_invent`
--
ALTER TABLE `registrations_invent`
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
-- AUTO_INCREMENT for table `registrations_invent`
--
ALTER TABLE `registrations_invent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
