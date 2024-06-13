-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 06:45 AM
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
-- Database: `volcanology_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, '', 'a'),
(2, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `eruptions`
--

CREATE TABLE `eruptions` (
  `eruption_id` int(11) NOT NULL,
  `volcano_id` int(11) NOT NULL,
  `eruption_times` varchar(100) NOT NULL,
  `eruption_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eruptions`
--

INSERT INTO `eruptions` (`eruption_id`, `volcano_id`, `eruption_times`, `eruption_type`) VALUES
(1, 1, '52', 'Phreatomagmatic and Strombolian'),
(2, 2, 'Unknown', 'Phreatic'),
(3, 3, '34', 'Phreatomagmatic'),
(4, 4, '3', 'Explosive Eruptions'),
(5, 5, 'Unknown', 'Unknown'),
(6, 6, 'Unknown', 'Unknown');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Ryomen Sukuna', 'Hades', '123', '123'),
(2, 'Gojo Saturo', 'Gojo', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `volcanoes`
--

CREATE TABLE `volcanoes` (
  `volcano_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_eruption` varchar(200) DEFAULT 'Uncertain, but it has no recorded historical eruptions'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volcanoes`
--

INSERT INTO `volcanoes` (`volcano_id`, `name`, `location`, `type`, `status`, `last_eruption`) VALUES
(1, 'Mayon Volcano', 'Province of Albay, Bicol Region, Philippines', 'Stratovolcano', 'Active', 'January 24, 2018'),
(2, 'Mount Matutum', 'South Cotabato province, Mindanao, Philippines', 'Stratovolcano', 'Actives', 'Uncertain, but it has no recorded historical eruptions'),
(3, 'Taal Volcano', 'Batangas province, Luzon, Philippines', 'Caldera', 'Active', 'January 12, 2020'),
(4, 'Mount Banahaw', 'Boundary of Laguna and Quezon provinces, Luzon, Philippines', 'Stratovolcanoo', 'Dormant', 'Year 1909'),
(5, 'Mount Makiling', 'Laguna province, Luzon, Philippines', 'Stratovolcano', 'Dormant', 'Uncertain, but it has no recorded historical eruptions'),
(6, 'Mount Malindang', 'Misamis Occidental province, Mindanao, Philippines', 'Stratovolcano', 'Extinct', 'No recorded historical eruptions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `eruptions`
--
ALTER TABLE `eruptions`
  ADD PRIMARY KEY (`eruption_id`),
  ADD KEY `volcano_id` (`volcano_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `volcanoes`
--
ALTER TABLE `volcanoes`
  ADD PRIMARY KEY (`volcano_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eruptions`
--
ALTER TABLE `eruptions`
  MODIFY `eruption_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volcanoes`
--
ALTER TABLE `volcanoes`
  MODIFY `volcano_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eruptions`
--
ALTER TABLE `eruptions`
  ADD CONSTRAINT `eruptions_ibfk_1` FOREIGN KEY (`volcano_id`) REFERENCES `volcanoes` (`volcano_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
