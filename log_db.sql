-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbook_entries`
--

CREATE TABLE `logbook_entries` (
  `id` int(15) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time(5) NOT NULL,
  `days` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `activity_description` varchar(255) NOT NULL,
  `working_hour` time(5) NOT NULL,
  `created_at` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logbook_entries`
--

INSERT INTO `logbook_entries` (`id`, `entry_date`, `entry_time`, `days`, `week`, `activity_description`, `working_hour`, `created_at`) VALUES
(4, '2024-05-30', '10:52:00.00000', '28', '1', 'demo data  edited', '10:52:00.00000', '2024-05-30 10:52:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'KAMAHORO', 'kamahorolinda@gmail.com', '$2y$10$XvWfDrml/iu0lhhdH5iZK./SKk49/G1SKhRuTsjPAGLQz/Dxs5P6O', '2024-05-30'),
(2, 'Nyirabisabo Edvine', 'nyirabisabo@gmail.com', '$2y$10$grv1AaYdKpV/Z3C.q74grOx/OwPT6wazLbg0TMacEU1opjnIL/2SC', '2024-05-30'),
(3, 'Damscene', 'damascene@gmail.com', '$2y$10$fy3RvQpsFHNhrENZwt8NCOINedoO4xoswD4Rp5SPIj0bXmSOjcpG6', '2024-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
