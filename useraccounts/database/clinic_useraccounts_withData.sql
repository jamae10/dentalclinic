-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 01:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `UUID` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `consultation_type` enum('online','onsite') NOT NULL,
  `service` varchar(300) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `concern` varchar(300) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `UUID`, `firstname`, `lastname`, `email`, `gender`, `consultation_type`, `service`, `date`, `time`, `concern`, `doctor`, `remarks`) VALUES
(1, '', 'tom', 'holland', 'tomholland@mail.com', 'Male', 'online', 'Teeth Whitening', '05/20/2021', '04:30 PM', 'yellow teeth', 'doctor stone', 'pending'),
(2, '', 'chris', 'evans', 'chrisevans@mail.com', 'Male', 'onsite', 'Teeth Whitening', '05/25/2021', '02:30 PM', 'yellow teeth', 'doctor strange', 'pending'),
(3, '', 'sherlock', 'holmes', 'sherlock@holmes.com', 'Male', 'online', 'Teeth Whitening', '05/20/2021', '04:30 PM', 'yellow teeth', 'doctor stone', 'complete'),
(4, '', 'john', 'watsons', 'johnwatsons@mail.com', 'Male', 'onsite', 'Teeth Whitening', '05/25/2021', '02:30 PM', 'yellow teeth', 'doctor strange', 'complete'),
(5, '', 'emm', 'wats', 'emmawatson@mail.com', 'Female', 'online', 'Teeth Whitening', '05/27/2021', '08:30 PM', 'yellow teeth', 'doctor stone', 'cancelled'),
(6, '', 'yuji', 'itadori', 'yujiitadori@mail.com', 'Male', 'onsite', 'Teeth Whitening', '05/25/2021', '02:30 PM', 'yellow teeth', 'doctor strange', 'postponed'),
(7, '', 'toge', 'inumaki', 'togeinumaki@mail.com', 'Male', 'onsite', 'Teeth Whitening', '06/17/2021', '04:00 PM', 'yellow teeth', 'doctor stone', 'cancelled'),
(8, '', 'nobara', 'kugisaki', 'nobarakugisaki@mail.com', 'Female', 'onsite', 'Teeth Whitening', '05/25/2021', '02:40 PM', 'yellow teeth', 'doctor strange', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `id` int(11) NOT NULL,
  `UUID` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `concern` varchar(300) NOT NULL,
  `service` varchar(300) NOT NULL,
  `date` varchar(10) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `treatment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`id`, `UUID`, `firstname`, `lastname`, `email`, `gender`, `concern`, `service`, `date`, `doctor`, `diagnosis`, `treatment`) VALUES
(1, '', 'sherlock', 'holmes', 'sherlock@holmes.com', 'Male', 'yellow teeth', 'Teeth Whitening', '05/20/2021', 'doctor stone', '', ''),
(2, '', 'john', 'watsons', 'johnwatsons@mail.com', 'Male', 'yellow teeth', 'Teeth Whitening', '05/25/2021', 'doctor strange', '', ''),
(3, '', 'nobara', 'kugisaki', 'nobarakugisaki@mail.com', 'Female', 'yellow teeth', 'Teeth Whitening', '05/25/2021', 'doctor strange', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UUID` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UUID`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, '', 'admin', 'admin', 'admin@mail.com', 'admin123', 'admin'),
(2, '', 'sherlock', 'holmes', 'sherlock@holmes.com', 'sherlock@holmes.com', 'user'),
(3, '', 'emm', 'wats', 'emmawatson@mail.com', 'emmawatson@mail.com', 'user'),
(4, '', 'chris', 'evans', 'chrisevans@mail.com', 'chris123', 'user'),
(5, 'id60ae2b3a0e9a28.7945337882845451cac589bde97bf0186bb59e7b', 'steve', 'rogers', 'steve@ro.gers', 'steve12345', 'user'),
(6, '85e759d7d09dfe110165407bc07285bd', 'tay', 'lock', 'tya@col.c', 'tya@col.c', 'user'),
(7, '4127c776083324131a2eda8c1a0d7935', 'luke', 'hemms', 'luke@5.sos', 'luke1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_clients`
--

CREATE TABLE `user_clients` (
  `id` int(11) NOT NULL,
  `UUID` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` enum('Male','Female','None') NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_clients`
--

INSERT INTO `user_clients` (`id`, `UUID`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `address`) VALUES
(1, '', 'sherlock', 'holmes', 'sherlock@holmes.com', 'sherlock@holmes.com', '00000000000', 'None', 'None'),
(2, '', 'emm', 'wats', 'emmawatson@mail.com', 'emmawatson@mail.com', '09451842651', 'Female', '2531 NY'),
(3, '', 'chris', 'evans', 'chrisevans@mail.com', 'chris123', '09235162315', 'Male', 'California'),
(5, '85e759d7d09dfe110165407bc07285bd', 'tay', 'lock', 'tya@col.c', 'tya@col.c', '00000000000', 'None', 'None'),
(6, '4127c776083324131a2eda8c1a0d7935', 'luke', 'hemms', 'luke@5.sos', 'luke1234', '09452365784', 'Male', 'Hogwarts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_clients`
--
ALTER TABLE `user_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_clients`
--
ALTER TABLE `user_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
