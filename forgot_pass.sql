-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2018 at 09:05 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mes`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot_pass`
--

CREATE TABLE `forgot_pass` (
  `email` varchar(255) NOT NULL,
  `temp_pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_pass`
--

INSERT INTO `forgot_pass` (`email`, `temp_pass`) VALUES
('moka.uoh@gmail.com', 'iy4Lq2ea'),
('souedu0199@gmail.com', '5N1f$#Ns');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot_pass`
--
ALTER TABLE `forgot_pass`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
