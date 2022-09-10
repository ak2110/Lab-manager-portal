-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 12:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `comp_Id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sys_Id` int(10) NOT NULL,
  `reg_no` int(10) NOT NULL,
  `type_Id` int(20) NOT NULL,
  `remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_type`
--

CREATE TABLE `c_type` (
  `type_Id` int(10) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_type`
--

INSERT INTO `c_type` (`type_Id`, `type_name`) VALUES
(1, 'Hardware'),
(2, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `Lab_No` int(10) NOT NULL,
  `Lab_Name` varchar(20) NOT NULL,
  `Man_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`Lab_No`, `Lab_Name`, `Man_Id`) VALUES
(1, 'Software_Testing', 785),
(2, 'UG_Lab', 486),
(3, 'Data_Mining', 233),
(4, 'Networking', 963);

-- --------------------------------------------------------

--
-- Table structure for table `labman`
--

CREATE TABLE `labman` (
  `Reg_ID` int(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labman`
--

INSERT INTO `labman` (`Reg_ID`, `Password`) VALUES
(233, '233lab'),
(486, '486lab'),
(785, 'lab785'),
(963, '963lab');

-- --------------------------------------------------------

--
-- Table structure for table `lab_manager`
--

CREATE TABLE `lab_manager` (
  `Man_Id` int(20) NOT NULL,
  `Man_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_manager`
--

INSERT INTO `lab_manager` (`Man_Id`, `Man_Name`) VALUES
(233, 'Ramu'),
(486, 'ABC'),
(785, 'Shamu'),
(963, 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `OS_Id` int(20) NOT NULL,
  `OS_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`OS_Id`, `OS_Name`) VALUES
(1, 'Windows'),
(2, 'Ubuntu'),
(3, 'Kali Linux'),
(4, 'Centos');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `Soft_Id` int(10) NOT NULL,
  `Soft_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`Soft_Id`, `Soft_Name`) VALUES
(1, 'Cisco Packet Tracer'),
(2, 'Wireshark'),
(3, 'Oracle_Sql_developer'),
(4, 'Snort'),
(5, 'EclipseIDE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` int(10) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `f_name`, `l_name`, `branch`) VALUES
(20164033, 'an', 'ka', 'cse'),
(20164064, 'ko', 'ch', 'cse'),
(20164082, 'anm', 'ver', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `sys_info`
--

CREATE TABLE `sys_info` (
  `Sys_Id` int(20) NOT NULL,
  `Lab_No` int(10) NOT NULL,
  `Soft_Id` int(10) NOT NULL,
  `OS_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_info`
--

INSERT INTO `sys_info` (`Sys_Id`, `Lab_No`, `Soft_Id`, `OS_Id`) VALUES
(1048, 1, 5, 4),
(1011, 1, 3, 1),
(1048, 1, 3, 4),
(2066, 2, 1, 1),
(2066, 2, 1, 2),
(4108, 4, 1, 1),
(4108, 4, 1, 2),
(4108, 4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Reg_ID` int(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Reg_ID`, `Password`) VALUES
(20164033, 'db20164033'),
(20164064, 'db20164064'),
(20164082, 'db20164082');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`comp_Id`),
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `type_Id` (`type_Id`);

--
-- Indexes for table `c_type`
--
ALTER TABLE `c_type`
  ADD PRIMARY KEY (`type_Id`),
  ADD KEY `type_Id` (`type_Id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`Lab_No`),
  ADD KEY `Man_Id` (`Man_Id`),
  ADD KEY `Lab_No` (`Lab_No`);

--
-- Indexes for table `labman`
--
ALTER TABLE `labman`
  ADD PRIMARY KEY (`Reg_ID`);

--
-- Indexes for table `lab_manager`
--
ALTER TABLE `lab_manager`
  ADD PRIMARY KEY (`Man_Id`),
  ADD KEY `Man_Id` (`Man_Id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`OS_Id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`Soft_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `sys_info`
--
ALTER TABLE `sys_info`
  ADD KEY `Sys_Id` (`Sys_Id`),
  ADD KEY `Soft_Id` (`Soft_Id`),
  ADD KEY `OS_Id` (`OS_Id`),
  ADD KEY `Lab_No` (`Lab_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Reg_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `comp_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`),
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`type_Id`) REFERENCES `c_type` (`type_Id`);

--
-- Constraints for table `lab`
--
ALTER TABLE `lab`
  ADD CONSTRAINT `lab_ibfk_1` FOREIGN KEY (`Man_Id`) REFERENCES `lab_manager` (`Man_Id`);

--
-- Constraints for table `sys_info`
--
ALTER TABLE `sys_info`
  ADD CONSTRAINT `sys_info_ibfk_1` FOREIGN KEY (`Lab_No`) REFERENCES `lab` (`Lab_No`),
  ADD CONSTRAINT `sys_info_ibfk_2` FOREIGN KEY (`OS_Id`) REFERENCES `os` (`OS_Id`),
  ADD CONSTRAINT `sys_info_ibfk_3` FOREIGN KEY (`Soft_Id`) REFERENCES `software` (`Soft_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
