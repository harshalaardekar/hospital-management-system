-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 11:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Mandar.Patkar', 'mandar');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `ssc1` varchar(25) NOT NULL,
  `ssc2` varchar(25) NOT NULL,
  `ssc3` int(11) NOT NULL,
  `ssc4` decimal(10,0) NOT NULL,
  `hsc1` varchar(25) NOT NULL,
  `hsc2` varchar(25) NOT NULL,
  `hsc3` int(11) NOT NULL,
  `hsc4` decimal(10,0) NOT NULL,
  `dip1` varchar(25) NOT NULL,
  `dip2` varchar(25) NOT NULL,
  `dip3` int(11) NOT NULL,
  `dip4` decimal(10,0) NOT NULL,
  `deg1` varchar(25) NOT NULL,
  `deg2` varchar(25) NOT NULL,
  `deg3` int(11) NOT NULL,
  `deg4` decimal(10,0) NOT NULL,
  `course` varchar(25) NOT NULL,
  `idproof` varchar(25) NOT NULL,
  `aproof` varchar(25) NOT NULL,
  `qproof` varchar(25) NOT NULL,
  `pproof` varchar(25) NOT NULL,
  `status` varchar(1) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `ssc1`, `ssc2`, `ssc3`, `ssc4`, `hsc1`, `hsc2`, `hsc3`, `hsc4`, `dip1`, `dip2`, `dip3`, `dip4`, `deg1`, `deg2`, `deg3`, `deg4`, `course`, `idproof`, `aproof`, `qproof`, `pproof`, `status`, `room`) VALUES
(13, 'Mandar.Patkar', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', 'NULL', 'not uploaded', 'not uploaded', 'not uploaded', 'not uploaded', 'p', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `addr`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Mandar', 'Patkar', 'M', 'Goregaon', '1234567890', 'mandarpatkar@live.com', 'Mandar.Patkar', 'mandar	');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
