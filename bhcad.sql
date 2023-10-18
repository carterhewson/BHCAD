-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 03:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhcad`
--

-- --------------------------------------------------------

--
-- Table structure for table `policeincidents`
--

CREATE TABLE `policeincidents` (
  `id` int(11) NOT NULL,
  `postal` varchar(4) NOT NULL,
  `streetAddress` varchar(30) NOT NULL DEFAULT 'Unnamed Road',
  `creationTime` time NOT NULL DEFAULT current_timestamp(),
  `assignedTime` time NOT NULL,
  `arrivalTime` time NOT NULL,
  `closureTime` time NOT NULL,
  `incidentClosed` tinyint(1) NOT NULL DEFAULT 0,
  `incidentNotes` text NOT NULL,
  `incidentType` text NOT NULL,
  `altered` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policeincidents`
--

INSERT INTO `policeincidents` (`id`, `postal`, `streetAddress`, `creationTime`, `assignedTime`, `arrivalTime`, `closureTime`, `incidentClosed`, `incidentNotes`, `incidentType`, `altered`) VALUES
(1, '351', 'Joshua Street', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0, '16:17:45 New Note\n16:40:27 Test Note\n20:10:38 Incident Note', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `policeincidents`
--
ALTER TABLE `policeincidents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `policeincidents`
--
ALTER TABLE `policeincidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
