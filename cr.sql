-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2021 at 04:52 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Course_name` varchar(255) DEFAULT NULL,
  `Topic` varchar(255) DEFAULT NULL,
  `Submission_deadline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Course_name`, `Topic`, `Submission_deadline`) VALUES
('WT Lab', 'Project', '16-01-2021'),
('DCCN', 'network layer', '26-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `classroutine`
--

CREATE TABLE `classroutine` (
  `Day` varchar(50) NOT NULL,
  `First_period` varchar(255) DEFAULT NULL,
  `Second_period` varchar(255) DEFAULT NULL,
  `Third_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroutine`
--

INSERT INTO `classroutine` (`Day`, `First_period`, `Second_period`, `Third_period`) VALUES
('Monday', 'ADA(10:15-11:45)', 'DCCN(12:00-1:30)', 'OS(2:00-3:30)'),
('Sunday', 'WT(8:30-10:00)', 'ADA(10:15-11:45)', 'DCCN(2:00-3:30)'),
('Thursday', 'OS(8:30-10:00)', 'ADA(12:00-1:30)', '');

-- --------------------------------------------------------

--
-- Table structure for table `classtest`
--

CREATE TABLE `classtest` (
  `Course_name` varchar(255) NOT NULL,
  `Topic` varchar(255) DEFAULT NULL,
  `datee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noticee`
--

CREATE TABLE `noticee` (
  `notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticee`
--

INSERT INTO `noticee` (`notice`) VALUES
('      \r\n      hello there'),
('WT class cancel\r\n      '),
('kal k sobai mathe khela dekhte jaba');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ragib', 'ragib.aseb@gmail.com', '27cbb60b3289d4432983b26a7f4cb99b'),
(2, 'eayashen', 'yasin@gmail.com', 'fa1fb9cf108306331263c4c6a06816f6'),
(3, 'iffat', 'iffat@gmail.com', 'e24867c6cd3d3aecda8dd250aad7c47c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroutine`
--
ALTER TABLE `classroutine`
  ADD UNIQUE KEY `Day` (`Day`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
