-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 05:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inovation_index`
--

CREATE TABLE `inovation_index` (
  `id` int(11) NOT NULL,
  `grp` varchar(30) NOT NULL,
  `project` varchar(1000) NOT NULL,
  `proposal` varchar(1000) NOT NULL,
  `attachment_name` varchar(1000) NOT NULL,
  `patents` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_db`
--

CREATE TABLE `test_db` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_db`
--

INSERT INTO `test_db` (`id`, `name`, `age`, `country`) VALUES
(2, 'Towsif Chowdhury', 12, 'Bangladesh'),
(3, 'Towsif Chowdhury', 12, 'Bangladesh'),
(4, 'TAC', 124, 'Bangladesh'),
(5, 'TAC', 124, 'Bangladesh'),
(6, 'TAC', 124, 'Bangladesh'),
(7, '301', 0, ''),
(8, '301', 0, ''),
(9, '301', 0, ''),
(10, '303', 0, 'DOI Meeting'),
(11, '601', 0, 'MDC Meeting'),
(12, '201', 0, 'Team Meetin'),
(13, '201', 0, 'Team Meetin');

-- --------------------------------------------------------

--
-- Table structure for table `tm_meetings`
--

CREATE TABLE `tm_meetings` (
  `id` int(11) NOT NULL,
  `participants` varchar(100) NOT NULL,
  `meeting_type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `room` int(10) NOT NULL,
  `doi` varchar(100) NOT NULL,
  `remarks` varchar(1000) DEFAULT 'No remarks',
  `inventors` varchar(500) DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_meetings`
--

INSERT INTO `tm_meetings` (`id`, `participants`, `meeting_type`, `date`, `room`, `doi`, `remarks`, `inventors`) VALUES
(14, 'ASM', 'DOI Meeting', '2023-04-23', 301, 'No DOI/Idea', 'No Remarks', 'No Inventors'),
(15, 'SMM', 'DOI Meeting', '2023-04-21', 301, 'No DOI/Idea', 'No Remarks', 'No Inventors'),
(16, 'AI', 'DOI Meeting', '2023-04-24', 301, 'No DOI/Idea', 'No Remarks', 'No Inventors'),
(17, 'SMM\nTAC', 'Team Meeting', '2023-05-07', 301, 'asd', 'No Remarks', 'No Inventors'),
(18, 'AI', 'DOI Meeting', '2023-04-15', 301, 'No DOI/Idea', 'No Remarks', 'No Inventors'),
(19, 'TAC', 'Other', '2023-05-07', 301, 'No DOI/Idea', 'No Remarks', 'No Inventors'),
(20, 'NK', 'MDC Meeting', '2023-06-11', 301, 'Test', 'No Remarks', 'No Inventors'),
(21, 'ASM', 'Idea Discussion', '2023-06-11', 301, 'Test', 'No Remarks', 'No Inventors');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inovation_index`
--
ALTER TABLE `inovation_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_db`
--
ALTER TABLE `test_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_meetings`
--
ALTER TABLE `tm_meetings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inovation_index`
--
ALTER TABLE `inovation_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_db`
--
ALTER TABLE `test_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tm_meetings`
--
ALTER TABLE `tm_meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
