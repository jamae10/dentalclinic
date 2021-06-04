-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:31 PM
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
  `appointment_id` varchar(300) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `consultation_type` enum('On-Site','Online','on-site') NOT NULL,
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

INSERT INTO `appointments` (`id`, `UUID`, `appointment_id`, `firstname`, `lastname`, `email`, `gender`, `consultation_type`, `service`, `date`, `time`, `concern`, `doctor`, `remarks`) VALUES
(1, 'a239bdae077b435f5b802dfae2dc2a74', '22546847163-182168', 'Yuji', 'Itadori', 'yuji@itadori.z', 'Male', 'Online', 'General Dentistry', '06-05-2020', 'Morning', 'Toothache', 'Dr. Alan', 'Completed'),
(2, 'd338833a9fcab3a0e4d08f008ba86af9', '2365978451-12359874', 'Satoru', 'Gojo', 'sato@ro.goju', 'Male', 'On-Site', 'General Dentistry', '08-06-2021', 'Morning', 'Stained teeth', 'Dr. Ruby', 'Pending'),
(3, 'c7452cf252f3786a59fa2cf1b8fd5727', '2398455587-12648975', 'Rimuru', 'Tempest', 'rimu@ru.t', 'Male', 'On-Site', 'General Dentistry', '10-06-2021', 'Morning', 'Cavities', 'Dr. Gialana', 'Pending'),
(4, '5a1a9e48f41c05215f6bc35909aeebbd', '3259878787-16598745', 'Osamu', 'Dazai', 'dazaaai@osa.mu', 'Male', 'Online', 'General Dentistry', '06-04-2021', 'Morning', 'Toothache', 'Dr. Gialana', 'Completed'),
(5, '8042b80fb17d9390cfe49d22d959290c', '2658978951-65874598', 'Tom', 'Holland', 'tomholl@c.c', 'Male', 'Online', 'Orthodontics', '11-03-2021', 'Morning', 'Chipped tooth', 'Dr. Ruby', 'Completed'),
(6, '1e50eedc6305798366bb46b9cd5ebc33', '2365987895-124578953', 'Timothee', 'Chalamet', 'tim@mo.thee', 'Male', 'Online', 'Dental Implant', '01-05-2020', 'Afternoon', 'Impacted teeth', 'Dr. Alan', 'Completed'),
(7, 'a6be2a5c55c14eda7c7266affaef56ff', '3598745168-23658974', 'Suzy', 'Bae', 'suzy@ba.e', 'Female', 'On-Site', 'General Dentistry', '09-07-2020', 'Morning', 'Toothache', 'Dr. Ruby', 'Completed'),
(8, '183e4f3c834cc168737c4f5cca051ccf', '2351478451-69856235', 'Mikasa', 'Ackerman', 'mikasa@ack.m', 'Female', 'On-Site', 'General Dentistry', '15-06-2021', 'Afternoon', 'Cavities', 'Dr. Alan', 'Pending'),
(9, '07ac40a84973a78b7e0de947b392221b', '2369998852-32323232', 'Iruma', 'Suzuki', 'iruma@kun.c', 'Male', 'On-Site', 'General Dentistry', '05-05-2020', 'Morning', 'Cavities', 'Dr. Alan', 'Completed'),
(10, '82b0da3f7f10e8dbbfe260c216ba90f3', '3698562312-23567414', 'Clara', 'Valac', 'clara@va.lac', 'Female', 'On-Site', 'Orthodontics', '19-12-2020', 'Morning', 'Chipped tooth', 'Dr. Gialana', 'Completed'),
(11, 'ceaef2eb2a11af8173738e3f98748499', '3562147895-23564784', 'Leonardo', 'Dicaprio', 'leo@cap.rio', 'Male', 'Online', 'Orthodontics', '20-06-2021', 'Morning', 'Chipped tooth', 'Dr. Ruby', 'Pending'),
(12, 'df4c6d08bd47c00850e3d13ed5a4d17e', '365985236-6659893312', 'Johnny', 'Depp', 'johnnydepp@mal.com', 'Male', 'Online', 'Dental Implant', '01-07-2021', 'Morning', 'Cracked tooth', 'Dr. Gialana', 'Pending'),
(13, '907a268589fb972b0406dee967cc7c0a', '3265995412-7548123698', 'Saoirse', 'Ronan', 'saoirse@ro.nan', 'Female', 'On-Site', 'General Dentistry', '12-08-2020', 'Afternoon', 'Sensitive to Cold', 'Dr. Alan', 'Completed'),
(14, 'ce4ca7bc4b43946f4c8b0a23564d91e7', '3569964158-21354872002', 'Julia', 'Roberts', 'julia@rob.erts', 'Female', 'On-Site', 'Dental Implant', '06-11-2020', 'Afternoon', 'Cracked tooth', 'Dr. Gialana', 'Completed'),
(15, '9821eb54309ac03a120c64f54be4016c', '9658951236-78451236951', 'Anne', 'Hathaway', 'ann@e.h', 'Female', 'Online', 'Dental Implant', '08-07-2021', 'Afternoon', 'Cracked tooth', 'Dr. Gialana', 'Pending'),
(16, '58e3b092f97eb1a7ad6dbcc21a44c996', '885412698-98745621', 'Hyeri', 'Lee', 'hyeri@le.e', 'Female', 'Online', 'Dental Implant', '07-05-2020', 'Morning', 'Cracked tooth', 'Dr. Ruby', 'Completed'),
(17, '887ca63f1702523b1f83ae144cd47ec1', '885412698-98745621', 'Joon Gi', 'Lee', 'lee@joon.gi', 'Male', 'Online', 'General Dentistry', '06-05-2020', 'Afternoon', 'Cavities', 'Dr. Ruby', 'Completed'),
(18, 'a239bdae077b435f5b802dfae2dc2a74', '9865231478-182168', 'Yuji', 'Itadori', 'yuji@itadori.z', 'Male', 'Online', 'General Dentistry', '12-12-2020', 'Afternoon', 'Cavities', 'Dr. Alan', 'Completed'),
(19, '8042b80fb17d9390cfe49d22d959290c', '2236598653-65874598', 'Tom', 'Holland', 'tomholl@c.c', 'Male', 'Online', 'General Dentistry', '25-09-2020', 'Morning', 'Cavities', 'Dr. Ruby', 'Completed'),
(20, 'd338833a9fcab3a0e4d08f008ba86af9', '2258547481-12359874', 'Satoru', 'Gojo', 'sato@ro.goju', 'Male', 'Online', 'Dental Implant', '22-03-2020', 'Morning', 'Cracked tooth', 'Dr. Ruby', 'Completed'),
(21, 'd338833a9fcab3a0e4d08f008ba86af9', '2345888555-12359874', 'Satoru', 'Gojo', 'sato@ro.goju', 'Male', 'Online', 'Dental Implant', '28-11-2020', 'Morning', 'Cavities', 'Dr. Ruby', 'Completed');

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
(47, '5a1a9e48f41c05215f6bc35909aeebbd', 'Osamu', 'Dazai', 'dazaaai@osa.mu', 'Male', 'Toothache', 'General Dentistry', '06-04-2021', 'Doctor Pepper', '', ''),
(49, '1e50eedc6305798366bb46b9cd5ebc33', 'Timothee', 'Chalamet', 'tim@mo.thee', 'Male', 'Impacted teeth', 'Dental Implant', '01-05-2020', 'Doctor Strange', '', ''),
(50, 'a6be2a5c55c14eda7c7266affaef56ff', 'Suzy', 'Bae', 'suzy@ba.e', 'Female', 'Toothache', 'General Dentistry', '09-07-2020', 'Doctor Stone', '', ''),
(51, '07ac40a84973a78b7e0de947b392221b', 'Iruma', 'Suzuki', 'iruma@kun.c', 'Male', 'Cavities', 'General Dentistry', '05-05-2020', 'Doctor Strange', '', ''),
(52, '82b0da3f7f10e8dbbfe260c216ba90f3', 'Clara', 'Valac', 'clara@va.lac', 'Female', 'Chipped tooth', 'Orthodontics', '19-12-2020', 'Doctor Pepper', '', ''),
(53, '907a268589fb972b0406dee967cc7c0a', 'Saoirse', 'Ronan', 'saoirse@ro.nan', 'Female', 'Sensitive to Cold', 'General Dentistry', '12-08-2020', 'Doctor Strange', '', ''),
(54, 'ce4ca7bc4b43946f4c8b0a23564d91e7', 'Julia', 'Roberts', 'julia@rob.erts', 'Female', 'Cracked tooth', 'Dental Implant', '06-11-2020', 'Doctor Pepper', '', ''),
(55, '58e3b092f97eb1a7ad6dbcc21a44c996', 'Hyeri', 'Lee', 'hyeri@le.e', 'Female', 'Cracked tooth', 'Dental Implant', '07-05-2020', 'Doctor Stone', '', ''),
(56, '887ca63f1702523b1f83ae144cd47ec1', 'Joon Gi', 'Lee', 'lee@joon.gi', 'Male', 'Cavities', 'General Dentistry', '06-05-2020', 'Doctor Stone', '', ''),
(57, 'a239bdae077b435f5b802dfae2dc2a74', 'Yuji', 'Itadori', 'yuji@itadori.z', 'Male', 'Cavities', 'General Dentistry', '12-12-2020', 'Doctor Strange', '', ''),
(58, '8042b80fb17d9390cfe49d22d959290c', 'Tom', 'Holland', 'tomholl@c.c', 'Male', 'Cavities', 'General Dentistry', '25-09-2020', 'Doctor Stone', '', ''),
(60, 'd338833a9fcab3a0e4d08f008ba86af9', 'Satoru', 'Gojo', 'sato@ro.goju', 'Male', 'Cavities', 'Dental Implant', '28-11-2020', 'Doctor Stone', '', '');

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
(1, 'admin-2021-123456', 'Admin', 'Admin', 'admin@mail.com', 'admin123', 'admin'),
(2, 'a239bdae077b435f5b802dfae2dc2a74', 'Yuji', 'Itadori', 'yuji@itadori.z', 'yuji123', 'user'),
(3, 'd338833a9fcab3a0e4d08f008ba86af9', 'Satoru', 'Gojo', 'sato@ro.goju', 'gojo123', 'user'),
(4, 'c7452cf252f3786a59fa2cf1b8fd5727', 'Rimuru', 'Tempest', 'rimu@ru.t', 'ru123', 'user'),
(5, '5a1a9e48f41c05215f6bc35909aeebbd', 'Osamu', 'Dazai', 'dazaaai@osa.mu', 'dazaikun', 'user'),
(6, '8042b80fb17d9390cfe49d22d959290c', 'Tom', 'Holland', 'tomholl@c.c', 'tom123', 'user'),
(7, '1e50eedc6305798366bb46b9cd5ebc33', 'Timothee', 'Chalamet', 'tim@mo.thee', 'tim123', 'user'),
(8, 'a6be2a5c55c14eda7c7266affaef56ff', 'Suzy', 'Bae', 'suzy@ba.e', 'suzy123', 'user'),
(9, '183e4f3c834cc168737c4f5cca051ccf', 'Mikasa', 'Ackerman', 'mikasa@ack.m', 'mikasa123', 'user'),
(10, '07ac40a84973a78b7e0de947b392221b', 'Iruma', 'Suzuki', 'iruma@kun.c', 'irumakun', 'user'),
(11, '82b0da3f7f10e8dbbfe260c216ba90f3', 'Clara', 'Valac', 'clara@va.lac', 'clar12', 'user'),
(12, 'ceaef2eb2a11af8173738e3f98748499', 'Leonardo', 'Dicaprio', 'leo@cap.rio', 'leo123', 'user'),
(13, 'df4c6d08bd47c00850e3d13ed5a4d17e', 'Johnny', 'Depp', 'johnnydepp@mal.com', '123johnny', 'user'),
(14, '907a268589fb972b0406dee967cc7c0a', 'Saoirse', 'Ronan', 'saoirse@ro.nan', 'ronan123', 'user'),
(15, 'ce4ca7bc4b43946f4c8b0a23564d91e7', 'Julia', 'Roberts', 'julia@rob.erts', 'julia123', 'user'),
(16, '9821eb54309ac03a120c64f54be4016c', 'Anne', 'Hathaway', 'ann@e.h', 'anne1234', 'user'),
(17, '58e3b092f97eb1a7ad6dbcc21a44c996', 'Hyeri', 'Lee', 'hyeri@le.e', 'hyeri123', 'user'),
(18, '887ca63f1702523b1f83ae144cd47ec1', 'Joon Gi', 'Lee', 'lee@joon.gi', 'lee123', 'user');

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
(1, 'a239bdae077b435f5b802dfae2dc2a74', 'Yuji', 'Itadori', 'yuji@itadori.z', 'yuji123', '09658658965', 'Male', 'Tokyo'),
(2, 'd338833a9fcab3a0e4d08f008ba86af9', 'Satoru', 'Gojo', 'sato@ro.goju', 'gojo123', '09351265236', 'Male', 'Tokyo'),
(3, 'c7452cf252f3786a59fa2cf1b8fd5727', 'Rimuru', 'Tempest', 'rimu@ru.t', 'ru123', '09741236585', 'Male', 'Kyoto'),
(4, '5a1a9e48f41c05215f6bc35909aeebbd', 'Osamu', 'Dazai', 'dazaaai@osa.mu', 'dazaikun', '09368525471', 'Male', 'Aomori'),
(5, '8042b80fb17d9390cfe49d22d959290c', 'Tom', 'Holland', 'tomholl@c.c', 'tom123', '09359746281', 'Male', 'Abbey Wood'),
(6, '1e50eedc6305798366bb46b9cd5ebc33', 'Timothee', 'Chalamet', 'tim@mo.thee', 'tim123', '09623564714', 'Male', 'New York'),
(7, 'a6be2a5c55c14eda7c7266affaef56ff', 'Suzy', 'Bae', 'suzy@ba.e', 'suzy123', '09658745698', 'Female', 'Seoul'),
(8, '183e4f3c834cc168737c4f5cca051ccf', 'Mikasa', 'Ackerman', 'mikasa@ack.m', 'mikasa123', '09214587546', 'Female', 'Wall Maria'),
(9, '07ac40a84973a78b7e0de947b392221b', 'Iruma', 'Suzuki', 'iruma@kun.c', 'irumakun', '09365287466', 'Male', 'Netherworld'),
(10, '82b0da3f7f10e8dbbfe260c216ba90f3', 'Clara', 'Valac', 'clara@va.lac', 'clar12', '09659658966', 'Female', 'Netherworld'),
(11, 'ceaef2eb2a11af8173738e3f98748499', 'Leonardo', 'Dicaprio', 'leo@cap.rio', 'leo123', '09458752145', 'Male', 'California'),
(12, 'df4c6d08bd47c00850e3d13ed5a4d17e', 'Johnny', 'Depp', 'johnnydepp@mal.com', '123johnny', '09658746248', 'Male', 'Los Angeles'),
(13, '907a268589fb972b0406dee967cc7c0a', 'Saoirse', 'Ronan', 'saoirse@ro.nan', 'ronan123', '09685625892', 'Female', 'Ireland'),
(14, 'ce4ca7bc4b43946f4c8b0a23564d91e7', 'Julia', 'Roberts', 'julia@rob.erts', 'julia123', '09658521474', 'Female', 'Addington'),
(15, '9821eb54309ac03a120c64f54be4016c', 'Anne', 'Hathaway', 'ann@e.h', 'anne1234', '09365824999', 'Female', 'Bexley'),
(16, '58e3b092f97eb1a7ad6dbcc21a44c996', 'Hyeri', 'Lee', 'hyeri@le.e', 'hyeri123', '09658745623', 'Female', 'Busan'),
(17, '887ca63f1702523b1f83ae144cd47ec1', 'Joon Gi', 'Lee', 'lee@joon.gi', 'lee123', '09358742151', 'Male', 'Mokpo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_clients`
--
ALTER TABLE `user_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
