-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 11:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `aid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `qualification` varchar(255) NOT NULL DEFAULT 'Not Available',
  `yoe` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`aid`, `lid`, `fname`, `lname`, `dob`, `gender`, `qualification`, `yoe`) VALUES
(1001, 10001, 'Mandar', 'Patkar', '1996-10-08', b'1', 'B.E.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE `admit` (
  `adid` int(11) NOT NULL,
  `rm` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `admit_dt` date DEFAULT NULL,
  `admit_time` time DEFAULT NULL,
  `discharge_dt` date DEFAULT NULL,
  `discharge_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admit`
--

INSERT INTO `admit` (`adid`, `rm`, `pid`, `did`, `admit_dt`, `admit_time`, `discharge_dt`, `discharge_time`) VALUES
(2, 4, 1001, 1001, '2019-02-24', '22:44:00', NULL, NULL),
(3, 5, 1002, 1002, '2019-02-24', '22:57:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `apid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dt` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` smallint(6) DEFAULT '0',
  `seen` bit(1) DEFAULT b'0',
  `booking` int(11) DEFAULT '0',
  `booking_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apid`, `did`, `pid`, `ts`, `dt`, `time`, `status`, `seen`, `booking`, `booking_by`) VALUES
(10003, 1001, 1001, '2019-03-03 10:27:24', '2019-03-20', '03:30:00', 0, b'0', 0, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_category`
--

CREATE TABLE `doctor_category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cdetails` varchar(255) NOT NULL DEFAULT 'Not Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_category`
--

INSERT INTO `doctor_category` (`cid`, `cname`, `cdetails`) VALUES
(101, 'General Physician ', 'Not Available'),
(102, 'Surgeon ', 'Not Available'),
(103, 'Cardiologist', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `did` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `qualification` varchar(255) NOT NULL DEFAULT 'Not Available',
  `yoe` int(11) NOT NULL DEFAULT '0',
  `bio` varchar(255) DEFAULT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`did`, `lid`, `fname`, `lname`, `dob`, `gender`, `qualification`, `yoe`, `bio`, `cid`) VALUES
(1001, 10003, 'Rushabh', 'Mishra', '1987-02-05', b'1', 'MD, BAMS', 4, 'NA', 101),
(1002, 10004, 'Esha', 'Acharya', '1988-02-19', b'0', 'MBBS', 3, 'NA', 102),
(1003, 10008, 'Shubham', 'Phape', '1979-11-25', b'1', 'MBBS, MD', 10, 'NA', 102),
(1005, 10012, 'abd', 'abf', '1999-11-11', b'0', 'MBBS, MD', 1, 'na', 102);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `lid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `epassword` varchar(255) NOT NULL,
  `category` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`lid`, `email`, `epassword`, `category`) VALUES
(10001, 'mandarpatkar@live.com', 'dd29b8cb089a56606fca480e137c27c4', 0),
(10003, 'doctor1@gmail.com', '45f678b147fdf275c35b60bac2360984', 1),
(10004, 'doctor2@gmail.com', '3b02a6fdd669efe9083cc84d15e5699b', 1),
(10005, 'patient1@gmail.com', '8103cfda42d725cd38e8bdf9610ef9a6', 2),
(10006, 'patient2@gmail.com', '3d47080f1445cd844c3390b15c835ffa', 2),
(10008, 'shubhamphape@gmail.com', 'db8477bbce093db6773d2af9932557b5', 1),
(10012, 'abc@amc.com', '900150983cd24fb0d6963f7d28e17f72', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `pid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` bit(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `uid` bigint(20) NOT NULL,
  `admit` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`pid`, `lid`, `fname`, `lname`, `gender`, `dob`, `height`, `weight`, `address`, `uid`, `admit`) VALUES
(1001, 10005, 'Tejas', 'Naik', b'1', '1992-09-05', 170, 72, 'NA', 123456789012, b'0'),
(1002, 10006, 'Sneha', 'Gosavi', b'0', '1996-09-01', 165, 58, 'NA', 12345678901, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `rm` int(11) NOT NULL,
  `rmno` int(11) NOT NULL,
  `floorno` smallint(6) NOT NULL,
  `wid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `rsid` int(11) NOT NULL,
  `quantity` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`rm`, `rmno`, `floorno`, `wid`, `rid`, `rsid`, `quantity`) VALUES
(1, 101, 1, 1, 3, 0, 3),
(2, 102, 1, 1, 3, 0, 4),
(3, 103, 1, 2, 3, 0, 4),
(4, 201, 2, 2, 2, 0, 1),
(5, 202, 2, 2, 3, 0, 2),
(6, 203, 2, 3, 3, 0, 3),
(7, 301, 3, 3, 3, 1, 3),
(8, 302, 3, 3, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_service_type`
--

CREATE TABLE `room_service_type` (
  `rsid` int(11) NOT NULL,
  `rsname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_service_type`
--

INSERT INTO `room_service_type` (`rsid`, `rsname`) VALUES
(0, 'AC Room'),
(1, 'Non AC Room');

-- --------------------------------------------------------

--
-- Table structure for table `room_type_details`
--

CREATE TABLE `room_type_details` (
  `rid` int(11) NOT NULL,
  `rname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type_details`
--

INSERT INTO `room_type_details` (`rid`, `rname`) VALUES
(2, 'Double Sharing'),
(1, 'Single Sharing'),
(3, 'Tripple Sharing');

-- --------------------------------------------------------

--
-- Table structure for table `ward_type_details`
--

CREATE TABLE `ward_type_details` (
  `wid` int(11) NOT NULL,
  `wname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_type_details`
--

INSERT INTO `ward_type_details` (`wid`, `wname`) VALUES
(1, 'Emergency'),
(3, 'General'),
(2, 'ICU or CCU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `admit`
--
ALTER TABLE `admit`
  ADD PRIMARY KEY (`adid`),
  ADD KEY `rm` (`rm`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `did` (`did`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `doctor_category`
--
ALTER TABLE `doctor_category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`did`),
  ADD KEY `lid` (`lid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`lid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`rm`),
  ADD UNIQUE KEY `rmno` (`rmno`),
  ADD KEY `wid` (`wid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `rsid` (`rsid`);

--
-- Indexes for table `room_service_type`
--
ALTER TABLE `room_service_type`
  ADD PRIMARY KEY (`rsid`),
  ADD UNIQUE KEY `rsname` (`rsname`);

--
-- Indexes for table `room_type_details`
--
ALTER TABLE `room_type_details`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `rname` (`rname`);

--
-- Indexes for table `ward_type_details`
--
ALTER TABLE `ward_type_details`
  ADD PRIMARY KEY (`wid`),
  ADD UNIQUE KEY `wname` (`wname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `admit`
--
ALTER TABLE `admit`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_type_details`
--
ALTER TABLE `room_type_details`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ward_type_details`
--
ALTER TABLE `ward_type_details`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD CONSTRAINT `admin_details_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `login_details` (`lid`);

--
-- Constraints for table `admit`
--
ALTER TABLE `admit`
  ADD CONSTRAINT `admit_ibfk_1` FOREIGN KEY (`rm`) REFERENCES `room_details` (`rm`),
  ADD CONSTRAINT `admit_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient_details` (`pid`),
  ADD CONSTRAINT `admit_ibfk_3` FOREIGN KEY (`did`) REFERENCES `doctor_details` (`did`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`did`) REFERENCES `doctor_details` (`did`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient_details` (`pid`);

--
-- Constraints for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD CONSTRAINT `doctor_details_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `login_details` (`lid`),
  ADD CONSTRAINT `doctor_details_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `doctor_category` (`cid`);

--
-- Constraints for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD CONSTRAINT `patient_details_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `login_details` (`lid`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient_details` (`pid`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`did`) REFERENCES `doctor_details` (`did`);

--
-- Constraints for table `room_details`
--
ALTER TABLE `room_details`
  ADD CONSTRAINT `room_details_ibfk_1` FOREIGN KEY (`wid`) REFERENCES `ward_type_details` (`wid`),
  ADD CONSTRAINT `room_details_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `room_type_details` (`rid`),
  ADD CONSTRAINT `room_details_ibfk_3` FOREIGN KEY (`rsid`) REFERENCES `room_service_type` (`rsid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
